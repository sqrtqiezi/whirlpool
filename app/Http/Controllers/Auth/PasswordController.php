<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PasswordController extends Controller
{
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
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware());
    }

    /**
     * 禁用重设密码
     */
    public function showResetForm()
    {
        throw new NotFoundHttpException();
    }

    /**
     * 禁用重设密码
     */
    public function sendResetLinkEmail()
    {
        throw new NotFoundHttpException();
    }

    /**
     * 禁用重设密码
     */
    public function reset()
    {
        throw new NotFoundHttpException();
    }
}
