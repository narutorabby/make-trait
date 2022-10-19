<?php

namespace Narutorabby\MakeTrait;

use Illuminate\Support\ServiceProvider;
use Narutorabby\MakeTrait\Console\Commands\MakeTrait;

class MakeTraitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        # code...
    }

    public function register()
    {
        $this->commands(
            MakeTrait::class
        );
    }
}
