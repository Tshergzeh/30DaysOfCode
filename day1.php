<?php
function NegOrPos(int $var)
{
    if ($var < 0) {
        echo "Negative";
    } elseif ($var == 0) {
        echo "0: Unsigned";
    }
    else {
        echo "Positive";
    }
    
}
NegOrPos(-9);

?>
