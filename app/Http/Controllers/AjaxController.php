<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AjaxController extends Controller
{
    /**
     * 文件上传目录
     *
     * @var string
     */
    protected $uploadFolder = 'uploads';

    /**
     * AjaxController constructor.
     */
    public function __construct()
    {
        $this->middleware('ajax');
    }

    /**
     * 图片上传
     * // todo 移除旧的
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function upload(Request $request)
    {
        $this->validateImage($request);
        $file = $request->file('file');
        $path = $this->generatePath(false);
        $filename = $this->generateFilename();
        $extension = $file->guessClientExtension();
        $file->move(public_path($path), "{$filename}.{$extension}");
        $filePath = "{$path}/{$filename}.{$extension}";

        return $this->transformResponse('上传成功', 0, [
            'file'        => $filePath,
            'thumbnail'   => asset($filePath),
            'origin_name' => $file->getClientOriginalName(),
        ]);
    }

    /**
     * 生成文件保存路径
     *
     * @param bool $absolute
     *
     * @return string
     */
    private function generatePath($absolute = true)
    {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->daysInMonth;
        $path = $absolute
            ? public_path("{$this->uploadFolder}/{$year}/{$month}/{$day}")
            : "{$this->uploadFolder}/{$year}/{$month}/{$day}";

        return $path;
    }

    /**
     * 生成文件名
     *
     * @return string
     */
    private function generateFilename()
    {
        return Str::quickRandom();
    }

    /**
     * 验证上传文件为图片
     *
     * @param \Illuminate\Http\Request $request
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    private function validateImage(Request $request)
    {
        $validator = app(Factory::class)->make($request->all(), [
            'file' => 'image',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator, new JsonResponse(
                $this->transformResponse('上传文件必须是图片', 1),
                422
            ));
        }
    }

    /**
     * ajax 响应内容
     *
     * @param       $message
     * @param int   $error
     * @param array $append
     *
     * @return array
     */
    private function transformResponse($message, $error = 0, $append = [])
    {
        return [
            'error'   => $error,
            'message' => $message,
        ] + $append;
    }
}
