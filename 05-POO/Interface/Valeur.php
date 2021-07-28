<?php
require_once 'Ecriture.php';
require_once 'Lecture.php';
require_once 'MonException.php';

class Valeur implements Ecriture, Lecture
{
    private string $val;

    public function set($val) {
        if($val >= 0){
            $this->val=$val;
        }else{
            throw new MonException('La valeur ne peut être négative', 1001);
        }
    }

    public function get(){
        return $this->val;
    }
}