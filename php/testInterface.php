<?php
//1.接口里面的方法可见性必须为public
//2.继承重写方法可见性必须为public
//3.父类实现的接口在子类中是有效的，可以使用
//4.子类继承接口后，如果父类有实现接口子类也是可以不用显式继承
interface testInterface{
     function fromInterface();
}

class father implements testInterface{
    public function __construct(){
        $this->fromInterface();
    }
    public function fromInterface(){
        echo 'father';
    }
}

class son extends father implements testInterface{
    public function __construct(){
        parent::__construct();
    }

    public function fromInterface(){
        echo 'son';
    }
}
$test = new son;