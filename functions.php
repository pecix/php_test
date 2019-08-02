<?php
    function breakLine($value = 1){
        for ($i=0; $i < $value; $i++) { 
            echo "<br />";
        }
        echo "\n";
    }

    function nbsp($value = 1){
        for ($i=0; $i < $value; $i++) { 
            echo "&nbsp";
        }
        echo "\n";
    }

    function tabliczkaMnozenia($wiersze, $kolumny){
        echo "<table>\n";
        for ($i=1; $i <= $wiersze; $i++) {
            echo "<tr>";
            for ($j=1; $j <= $kolumny; $j++) { 
                if ($i==1 && $j==1){
                    echo "<th>".$i * $j."</th>";            
                } elseif ($i==1 && $j!=1){
                    echo "<th class=\"col\">".$i * $j."</th>";
                } elseif ($i!=1 && $j==1) {
                    echo "<th  class=\"row\">".$i * $j."</th>";
                } else {
                    echo "<td>".$i * $j."</td>";
                }
            }
            echo "</tr>\n";
        }
        echo "<table>\n";
    }
?>