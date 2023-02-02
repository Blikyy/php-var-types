<?php

$variables = ["1", "1.5", "true", "'string'"];

$sc = "<?php
";

$sc .= "function F1(\$x) : int
{
    return \$x;
}
function F2(\$x) : float{
    return \$x;
}
function F3(\$x) : bool{
    return \$x;
}
function F4(\$x) : string{
    return \$x;
}
";

foreach($variables as $variable){
    $sc .= "var_dump(F1($variable));\n";
}
foreach($variables as $variable){
    $sc .= "var_dump(F2($variable));\n";
}
foreach($variables as $variable){
    $sc .= "var_dump(F3($variable));\n";
}
foreach($variables as $variable){
    $sc .= "var_dump(F4($variable));\n";
}

$sc .= "?>";
file_put_contents("types.php", $sc);

?>