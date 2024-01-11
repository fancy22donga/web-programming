<?php

#rand
$a=rand(20,50);
echo $a;
echo "<br>";

#abs
$a=abs(-10);
echo $a;
echo"<br>";

#sqrt
$c=sqrt(16);
echo $c;
echo"<br>";

#round
$d=round(3.7);
echo $d;
echo"<br>";

#ceil and floor
$e=ceil(3.2);
echo $e;
echo"<br>";

#pow
$f=pow(3,2);
echo $f;
echo"<br>";

#max
$g=max(3,4,5);
echo $g;
echo"<br>";

#min
$h=min(2,3,4);
echo $h;
echo"<br>";

#len
$i=strlen("hello world");
echo $i;
echo"<br>";

#pos
$j=strpos("welcome bca","bca");
echo $j;
echo"<br>";

#replace
$k=str_replace("world","universe","hello world");
echo $k;
echo"<br>";

#substr
$l=substr("hello , world",0,10);
echo $l;
echo"<br>";

#strtolower
$m=strtolower("hello,world");
echo $m;
echo"<br>";

#strtoupper
$n=strtoupper("hello,world");
echo $n;
echo"<br>";

#ucfirst
$o=ucfirst("hello,world");
echo $o;
echo"<br>";

#strrev
$p=strrev("hello,world");
echo $p;
echo"<br>";

#trim
$q=trim("hello,world");
echo $q;
echo"<br>";

#date
$r=date("y-m-d H:i:s");
echo $r;
echo"<br>";

#time
$s=time();
echo $s;
echo"<br>";

#strtotime
$t=strtotime("2023-08-01");
echo $t;
echo"<br>";

#gmdate
$u=gmdate("y-m-d H:i:s");
echo $u;
echo"<br>";

#mktime
$v=mktime(12,0,0,8,1,2023);
echo $v;
echo"<br>";

#dafult date and time
$w=date_default_timezone_set("america/new_york");
echo $w;
echo"<br>";
?>