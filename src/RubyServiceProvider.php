<?php

namespace Nox\Ruby;

use Illuminate\Support\ServiceProvider;

class RubyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        info('ruby updated registered');
    }

    public function boot(): void
    {
        info('ruby updated booted');
    }
}