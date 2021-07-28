<?php


class Electeur extends Personne
{
    private bool $vote = false;
    private string $bureauDeVote = '';
    public function avote(){
        $vote=true;
    }
}