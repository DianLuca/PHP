<?php
    function tabuada($numero) {
        for($i = 0; $i <= 10; $i++){
            $multi = $numero * $i;
            echo "$numero x $i = $multi<br>";
        }
    }
?>