<?php
//当使用parent关键字让代码运行到父类的代码中，如果是
//此时的$this调用方法将会指向子类的方法，除非是
//private的可见性那么才会调用父类的方法。
//子类的方法重写，其可见性不能低于父类.
class father{
	public function __construct(){
		$this->sayMyName();
	}
	public function sayMyName(){
		echo "father";
		$this->sayPrivate();
	}

	protected function sayPrivate(){
		echo "father private function";
	}
}

class son extends father{
	public function __construct(){
		parent::__construct();
	}
	public function sayMyName(){
		echo "son";
	}

	protected function sayPrivate(){
		echo "son private function";
	}
}

$son = new son();
//echo 'somdsa';