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
        sleep(1);
}
if(isset($_GET['start']))
{
        $count=fopen("start.txt","r");
        $val=fgets($count,1000);
        fclose($count);
         $x=$val;

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
                drun(0,0,0);
        echo "!!!!!!! Time's UP !!!!!! I bet you dont know the answer ;)";
}
else if(isset($_GET['res']))
{
        $count=fopen("start.txt","r");
        $val=fgets($count,1000);
        fclose($count);
        $temp=$_GET['res'];

        $t=rand(0,15);
        $fp=fopen("start.txt","w");
        fwrite($fp,$t);
        fclose($fp);

        if($temp==$val)
        echo "YOU WON !! Good Work...Keep it Up !!!";
        else
        echo "!! LOSER !! Better Luck Next Time........";
}
?>

