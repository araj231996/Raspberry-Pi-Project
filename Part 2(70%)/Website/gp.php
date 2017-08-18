<?php
shell_exec("/usr/local/bin/gpio -g mode 17 out");
shell_exec("/usr/local/bin/gpio -g mode 4 out");
shell_exec("/usr/local/bin/gpio -g mode 18 out");
shell_exec("/usr/local/bin/gpio -g mode 22 out");

function drun($d,$a,$b,$c)
{
        $t=1;
        if($a==$t)
        {
                shell_exec("/usr/local/bin/gpio -g write 4 1");
        }
        else
        {
                shell_exec("/usr/local/bin/gpio -g write 4 0");
        }
        if($b==$t)
        {
                shell_exec("/usr/local/bin/gpio -g write 17 1");
        }
        else
        {
                shell_exec("/usr/local/bin/gpio -g write 17 0");
        }
        if($c==$t)
        {
                shell_exec("/usr/local/bin/gpio -g write 18 1");
        }
        else
        {
                shell_exec("/usr/local/bin/gpio -g write 18 0");
        }
        if($d==$t)
        {
                shell_exec("/usr/local/bin/gpio -g write 22 1");
        }
        else
        {
                shell_exec("/usr/local/bin/gpio -g write 22 0");
        }
        sleep(2);
}
$count=fopen("count.txt","r");
        $val=fgets($count,1000);
        fclose($count);
        $temp=$_GET['check'];
        $x=$val;
        echo "The values are :<br>";
        while($x<16)
        {
                if($x==0)
                drun(0,0,0,0);
                else if($x==1)
                drun(0,0,0,1);
                else if($x==2)
                drun(0,0,1,0);
                else if($x==3)
                drun(0,0,1,1);
                else if($x==4)
                drun(0,1,0,0);
                else if($x==5)
                drun(0,1,0,1);
                else if($x==6)
                drun(0,1,1,0);
                else if($x==7)
                drun(0,1,1,1);
                else if($x==8)
                drun(1,0,0,0);
                else if($x==9)
                drun(1,0,0,1);
                else if($x==10)
                drun(1,0,1,0);
                else if($x==11)
                drun(1,0,1,1);
                else if($x==12)
                drun(1,1,0,0);
                else if($x==13)
                drun(1,1,0,1);
                else if($x==14)
                drun(1,1,1,0);
                else if($x==15)
                drun(1,1,1,1);

                echo $x;
                echo "<br>";
                $x=$x+$temp;
        }
        drun(0,0,0,0);
        $val=($x)%16;
        $fp=fopen("count.txt","w");
        fwrite($fp,$val);
        fclose($fp);
        echo "Final Value is ";
         echo $x;
        echo " whose modulo 16 = ";
        echo $val;
        echo"<br> So, next initial value is ".$val." if anything is not entered";
?>

