<?php namespace timohin;
class QuadricEql extends LinearEql implements \core\EquationInterface{
        protected function desc($a, $b, $c){
            return $b*$b-4*$a*$c;  
        }
        public function solve($a, $b, $c=0){
            if($a==0){
                return parent::solve($b, $c);
            }
            MyLog::log('Eq is quadric');
            $d=$this->desc($a,$b,$c);
            if($d<0){
                throw new TimohinExeption('Error: no real roots');
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