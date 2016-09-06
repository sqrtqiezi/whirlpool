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
    protected $uploadFolder = 'uploads';

    /**
     * AjaxController constructor.
     */
    public function __construct()
    {
        $this->middleware('ajax');
    }

    public function upload(Request $request)
    {
        $this->validateImage($request);
        $file = $request->file('file');
        $path = $this->generatePath(false);
        $filename = $this->generateFilename();
        $extension = $file->guessClientExtension();
        $file->move(public_path($path), "{$filename}.{$extension}");
        $filePath =  "{$path}/{$filename}.{$extension}";

        return $this->transformResponse('上传成功', 0, [
            'file' => $filePath,
            'thumbnail' => asset($filePath),
            'origin_name' => $file->getClientOriginalName(),
        ]);
    }

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

    private function generateFilename()
    {
        return Str::quickRandom();
    }

    private function validateImage(Request $request)
    {
        $validator = app(Factory::class)->make($request->all(), [
            'file' => 'image'
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator, new JsonResponse(
                $this->transformResponse('上传文件必须是图片', 1),
                422
            ));
        }
    }

    private function transformResponse($message, $error = 0, $append = [])
    {
        return [
            'error' => $error,
            'message' => $message
        ] + $append;
    }
}
