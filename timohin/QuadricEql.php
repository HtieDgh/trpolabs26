<?php
class QuadricEql extends LinearEql implements EquationInterface{
        protected function desc($a, $b, $c){
            return $b*$b-4*$a*$c;  
        }
        public function solve(float $a, float $b, float $c=0){
            if($a==0){
                return parent::solve($b, $c);
            }
            MyLog::log('Eq is quadric');
            $d=$this->desc($a,$b,$c);
            if($d<0){
                return null;
            }
            $d=sqrt($d);
            $this->x[0] = (-$b - $d)/(2*$a);
            if ($d!=0){
                $this->x[1]=(-$b + $d)/(2*$a);
            }     
            return $this->x;    
        } 
    }
?>