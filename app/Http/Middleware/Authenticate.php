<?php

namespace App\Http\Middleware;


use http\Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;



class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {



        if($request->getRequestUri()== '/admin'){

            return '/admin/login';
        }

        else{
            
            return '/login';
        }
        }

}
