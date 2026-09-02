<?php

$antrian = array("B 1234 AA","D 5678 BB","F 9101 CC","D 4637 YH","D 6758 IU","A 5654 KL");

echo"<pre>";
print_r($antrian);
echo"</pre>";

array_push($antrian, "Z 2222DD","E 3333 EE");

echo"<pre>";
print_r($antrian);
echo"</pre>";

unset($antrian[1]);

echo"<pre>";
print_r($antrian);
echo"</pre>";

array_unshift($antrian,"B 9999 VIP");

echo"<pre>";
print_r($antrian);
echo"</pre>";

sort($antrian);

echo"<pre>";
print_r($antrian);
echo"</pre>";