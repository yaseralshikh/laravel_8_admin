<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        if (auth()->user()->roles[0]->allowed_route == 'admin') {
            return redirect()->route('admin.index');
        } else {
            return redirect()->intended(config('fortify.home'));
        }
    }

}
