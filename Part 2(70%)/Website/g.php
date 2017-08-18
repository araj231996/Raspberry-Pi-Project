<?php

        $t=$_GET['4'];
        $fp=fopen("count.txt","w");
        fwrite($fp,$t);
        fclose($fp);
        echo "Initial Value  is ";
        echo $t;

?>