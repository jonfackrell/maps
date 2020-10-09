<?php

namespace Jonfackrell\Maps\Tests;

use Orchestra\Testbench\TestCase;
use Jonfackrell\Maps\MapsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MapsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
