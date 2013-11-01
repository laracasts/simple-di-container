<?php

require 'IoC.php';

class Foo {}

class IoCTest extends PHPUnit_Framework_TestCase {

    public function test_can_resolve_out_of_the_ioc_container()
    {
        IoC::bind('foo', function()
        {
            return new Foo;
        });

        $this->assertInstanceOf('Foo', IoC::make('foo'));
    }
}

