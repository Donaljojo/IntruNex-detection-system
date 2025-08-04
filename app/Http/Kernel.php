
protected $middlewareGroups = [
    'web'] => ['web' => [
    \App\Http\Middleware\EncryptCookies::class,
    // ...
    \App\Http\Middleware\DetectWebExploits::class,
],


        // other middleware...
        \App\Http\Middleware\DetectWebExploits::class,
    ],
];
