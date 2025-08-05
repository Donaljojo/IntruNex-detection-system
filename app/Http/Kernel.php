protected $middlewareGroups = [
    'web' => [
        // ...
        \App\Http\Middleware\DetectExploit::class,
    ],
];
