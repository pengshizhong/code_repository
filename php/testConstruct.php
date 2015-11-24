<?php
 
class father{
  function __construct(){
    echo "father";
  }
}

class son extends father{

}

$a=new son();