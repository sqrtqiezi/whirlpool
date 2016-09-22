点击这里重设密码： <a href="{{ $link = url('panel/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
