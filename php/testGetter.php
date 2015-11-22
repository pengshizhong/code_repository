<?php
//pulic的getter会被继承，并且父类的private的成员
//可以被getter，setter访问
//但是如果成员变量不是private的话getter和setter就会
//访问子类的成员变量
class father{
    public $num=5566;
    public function __construct(){
        $this->sayMyName();
    }
    public function setNum($num){
        echo __CLASS__;
        $this->num = $num;
    }
    public function getNum(){
        echo __CLASS__;
        return $this->num;
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
    public $num=7788;
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
echo $son->getNum();
$son->setNum(6655);
echo $son->getNum();
//echo 'somdsa';