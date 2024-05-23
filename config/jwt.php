<?php

return [

    'secret' => env('JWT_SECRET'),

    'ttl' => env('JWT_TTL', 60),

    'refresh_ttl' => env('JWT_REFRESH_TTL', 20160),

    'algo' => env('JWT_ALGO', 'HS256'),

    'required_claims' => [
        'iss',
        'iat',
        'exp',
        'nbf',
        'sub',
        'jti',
    ],

    'persistent_claims' => [
        // 'uid',
    ],

    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),

    'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 0),

    'providers' => [
        'user' => Tymon\JWTAuth\Providers\User\EloquentUserAdapter::class,
        'jwt' => Tymon\JWTAuth\Providers\JWT\NamshiAdapter::class,
        'auth' => Tymon\JWTAuth\Providers\Auth\IlluminateAuthAdapter::class,
        'storage' => Tymon\JWTAuth\Providers\Storage\IlluminateCacheAdapter::class,
    ],

];