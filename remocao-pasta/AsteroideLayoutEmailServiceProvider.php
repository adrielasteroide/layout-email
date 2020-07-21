<?php

namespace Asteroide\LayoutEmail;

use Illuminate\Support\ServiceProvider;

class AsteroideLayoutEmailServiceProvider extends ServiceProvider
{
    /**
     * Publishes translation files.
     *
     * @return  void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/mail' => resource_path('views/vendor/mail'),
        ], 'asteroide-layout-email');
    }
}
