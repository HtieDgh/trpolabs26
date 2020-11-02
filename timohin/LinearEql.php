<?php namespace timohin;
class LinearEql{
    protected $x;
    public function solve(float $a, float $b){
        if($a==0 && $b!=0){
            throw new TimohinExeption('Error: eq not exist');
        }
        MyLog::log('Eq is linear');
        if($a==$b && $a==0){
            $this->x=[INF];
        }
        if($a!=0){
            $this->x=[-$b/$a];
        }
        return $this->x;
    }
}
?>