<?php
class A{
    protected $x;
    public function eql(float $a, float $b){
        return ($a===0 ? null :  $this->x=[-$b/$a]);
    }
}
class B extends A{
    protected function desc($a, $b, $c){
        return $b*$b-4*$a*$c;  
    }
    public function eql(float $a, float $b, float $c=0){
        if($a!==0){
            $d=$this->desc($a,$b,$c);
            if($d<0){
                return null;
            }
            $sd=sqrt($d);
            $this->x[0] = (-$b - $sd)/(2*$a);
            if ($d!=0){
                $this->x[1]=(-$b + $sd)/(2*$a);
            }
            return $this->x;
        }
        return parent::eql($b, $c);
    } 
}
$eq1=new A();
$eq2=new B();
$line = trim(fgets(STDIN));
sscanf($line, "%d %d, %d %d %d",$a1, $b1, $a2,$b2,$c2);
if(is_numeric($a1) && is_numeric($b1)){
    print_r($eq1->eql($a1,$b1));
}else{
    echo "eq1 NAN given\r\n";
}
if( is_numeric($a2) && is_numeric($b2) && is_numeric($c2)){
    echo "\n\r-----quadratic eql-----------\n\r";
    print_r($eq2->eql($a2,$b2,$c2));
}else{
    echo "eq2 NAN given\r\n";
}
?>