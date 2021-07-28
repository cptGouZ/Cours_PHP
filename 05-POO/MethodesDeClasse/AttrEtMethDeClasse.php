<?php
include_once 'GroupementDeMethodes.php';


class AttrEtMethDeClasse
{
    use GroupementDeMethodes{

    }
    private static $tva = 20;
    public static function prixTtc(int $montant): float{
        return $montant + $montant * static::$tva / 100;
    }
}