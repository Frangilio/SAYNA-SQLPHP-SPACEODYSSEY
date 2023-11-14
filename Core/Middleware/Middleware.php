<?php
namespace Core\Middleware;

class Middleware{
    const MAP = [
        'guest' => Guest::class,
        'auth'  => Auth::class
    ];

    public static function handle($key)
    {
        if(!$key){
            return; 
        }
        $middleware = Middleware::MAP[$key] ?? false;
        if(!$middleware){
            throw new \Exception("No matching middleware for {$key}");  
        }
        (new $middleware)->handle();
    }
}