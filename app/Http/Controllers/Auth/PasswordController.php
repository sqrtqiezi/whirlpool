<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PasswordController extends Controller
{
    /**
     * @var string 重设邮件标题
     */
    protected $subject = '您的管理后台密码重设链接';

    /**
     * @var string 重设邮件模版
     */
    protected $linkRequestView = 'admin.auth.email';

    /**
     * @var string 点击重设连接后，修改页面模版位置
     */
    protected $resetView = 'admin.auth.reset';

    /**
     * 重设成功后跳转
     *
     * @var string
     */
    protected $redirectPath = '/panel/news';

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * 验证回显
     *
     * @return array
     */
    protected function getResetValidationMessages()
    {
        return [
            'required'  => ':attribute必须输入',
            'min'       => ':attribute的长度至少为 :min',
            'confirmed' => '两次:attribute必须输入相同',
        ];
    }

    /**
     * 验证属性别名
     *
     * @return array
     */
    protected function getResetValidationCustomAttributes()
    {
        return [
            'email'    => '电子邮箱',
            'password' => '密码',
            'token'    => '会话串',
        ];
    }

    /**
     * Get the response for after a successful password reset.
     *
     * @param  string $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function getResetSuccessResponse($response)
    {
        alert()->success('', '重设密码成功');

        return redirect($this->redirectPath())->with('status', trans($response));
    }
}
