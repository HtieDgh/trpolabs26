<?php
class A{
}
class B extends A{
    public function __construct(...$a){
        $this->obj=$a;
    }
    protected $obj;
}
class C extends B{  
}
echo "-----10 вар-----------<br>";
$C2=new C(new A(), new A(),$a1=new A(),new B($a1));
print_r($C2);
?>