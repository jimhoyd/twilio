<?php

use \App\Foo;

class FooTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function test()
    {
		$foo = new Foo();

        // Assert
        $this->assertEquals($foo->bar(), 'Bar');
    }

}
