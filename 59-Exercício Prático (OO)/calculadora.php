<?php
class Calculadora {
    private float $total = 0;

    public function add($n){
        $this->total += $n;
    }
    public function sub($n){
        $this->total -= $n;
    }
    public function mul($n){
        $this->total = $this->total * $n;
    }
    public function div($n){
        $this->total = $this->total / $n;
    }
    public function total(){
        return $this->total;
    }
    public function clear(){
        $this->total = 0;
    }
}