<?php

namespace Codebyray\LaravelVehicleInfo\Tests;

use Orchestra\Testbench\TestCase;
use Codebyray\LaravelVehicleInfo\LaravelVehicleInfoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelVehicleInfoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
