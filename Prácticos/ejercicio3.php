<?php
    $var1 = 'Juan';
    $var2 = &$var1;
    $var2 = 'Pedro';
    echo "$var1";
    echo "$var2";
?>