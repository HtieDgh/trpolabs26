<?php namespace core;

interface EquationInterface {
/**
* @param float $a
* @param float $b
* @param float $c
 *
 * @return array or null
 */
   public function solve(float $a,float $b,float $c);
}

?>