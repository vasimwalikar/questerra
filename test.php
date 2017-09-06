
<?php
// Delimiters may be slash, dot, or hyphen
$date = "3 feb 2017 to 15feb 2017, 18feb 2017 to 25 feb 2017 ";
list($data1, $data2, $data3) = split('[,.-]', $date);
echo "Month: $data1;<br> Day: $data2;<br> Year: $data3<br />\n";
?>
