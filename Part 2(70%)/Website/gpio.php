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
if(isset($_GET['0']))
{
echo "Value is 0";
drun(0,0,0,0);
}

else if(isset($_GET['1']))
{
echo "Value is 1";
drun(0,0,0,1);
}
else if(isset($_GET['2']))
{
echo "Value is 2";
drun(0,0,1,0);
}
else if(isset($_GET['3']))
{
echo "Value is 3";
drun(0,0,1,1);
}
else if(isset($_GET['4']))
{
echo "Value is 4";
drun(0,1,0,0);
}
else if(isset($_GET['5']))
{
echo "Value is 5";
drun(0,1,0,1);
}
else if(isset($_GET['6']))
{
echo "Value is 6";
drun(0,1,1,0);
}
else if(isset($_GET['7']))
{
echo "Value is 7";
drun(0,1,1,1);
}
else if(isset($_GET['8']))
{
echo "Value is 8";
drun(1,0,0,0);
}

else if(isset($_GET['9']))
{
echo "Value is 9";
drun(1,0,0,1);
}
else if(isset($_GET['10']))
{
echo "Value is 10";
drun(1,0,1,0);
}
else if(isset($_GET['11']))
{
echo "Value is 11";
drun(1,0,1,1);
}
else if(isset($_GET['12']))
{
echo "Value is 12";
drun(1,1,0,0);
}
else if(isset($_GET['13']))
{
echo "Value is 13";
drun(1,1,0,1);
}
else if(isset($_GET['14']))
{
echo "Value is 14";
drun(1,1,1,0);
}
else if(isset($_GET['15']))
{
echo "Value is 15";
drun(1,1,1,1);
}
else if(isset($_GET['blink']))
{
echo "Counting was Succesful";
drun(0,0,0,0);
sleep(1);
drun(0,0,0,1);
sleep(1);
drun(0,0,1,0);
sleep(1);
drun(0,0,1,1);
sleep(1);
drun(0,1,0,0);
sleep(1);
drun(0,1,0,1);
sleep(1);
drun(0,1,1,0);
sleep(1);
drun(0,1,1,1);
sleep(1);
drun(1,0,0,0);
sleep(1);
drun(1,0,0,1);
sleep(1);
drun(1,0,1,0);
sleep(1);
drun(1,0,1,1);
sleep(1);
drun(1,1,0,0);
sleep(1);
drun(1,1,0,1);
sleep(1);
drun(1,1,1,0);
sleep(1);
drun(1,1,1,1);
sleep(1);

drun(0,0,0,0);
}

?>
