<?php

namespace A4anthony\Kuponify\Http\Controllers\Auth;


class LoginController
{
    public function showLoginForm()
    {
        //dd('here');
        return view('kuponify::auth.login');
    }
}