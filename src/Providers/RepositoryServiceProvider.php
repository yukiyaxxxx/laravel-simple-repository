<?php

namespace Yukiyaxxxx\LaravelSimpleRepository\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Stubs/Repositories/ExampleRepository.stub' => app_path('Repositories/ExampleRepository.php')
        ]);
    }

}
