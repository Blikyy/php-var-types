<?php
function F1($x) : int
{
    return $x;
}
function F2($x) : float{
    return $x;
}
function F3($x) : bool{
    return $x;
}
function F4($x) : string{
    return $x;
}
var_dump(F1(1));
var_dump(F1(1.5));
var_dump(F1(true));
//var_dump(F1('string')); error
var_dump(F2(1));
var_dump(F2(1.5));
var_dump(F2(true));
//var_dump(F2('string')); error
var_dump(F3(0));
var_dump(F3(1.5));
var_dump(F3(true));
var_dump(F3('string'));
var_dump(F4(1));
var_dump(F4(1.5));
var_dump(F4(true));
var_dump(F4('string'));
?>