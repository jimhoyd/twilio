<?php

namespace App;

class Foo implements FooInterface {

	public function __construct() {
		echo('Hello World');
	}

	public function bar() {
		return "Bar";
	}


}
