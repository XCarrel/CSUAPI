<?php

namespace App\Http\Middleware;

use Closure;

class AddCorsHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * @var $response \Illuminate\Http\Response
         */
        $response = $next($request);

        // Perform action
        $response->withHeaders([
          "Access-Control-Allow-Origin"=>"*",
          "Access-Control-Allow-Headers" => "X-Requested-With, Content-Type, X-Access-Token, x-access-token, Authorization, api_key, x-xsrf-token",
          //"Access-Control-Allow-Headers" => "*",
          "Access-Control-Request-Method"=>"GET, POST, PUT, PATCH, DELETE, OPTIONS",
          "Access-Control-Allow-Methods"=>"GET, POST, PUT, PATCH, DELETE, OPTIONS",
          //"Access-Control-Request-Headers"=>"*",
          "Access-Control-Request-Headers"=>"X-Requested-With, Content-Type, X-Access-Token, x-access-token, Authorization, api_key, x-xsrf-token",
          "Access-Control-Max-Age"=>0

        ]);
        return $response;
    }
}
