<?php
$var='04/05/2021 06/08/2022 07/09/2021';
$expr='^(\d{1,2})/(\d{1,2})/(\d{4})^';
if(preg_match_all($expr, $var, $matches));
var_dump($matches);

if(preg_match_all($expr, $var, $matches));