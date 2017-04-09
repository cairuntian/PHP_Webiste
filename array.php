<html>
<body>

<?php
	header("content-type:text/html;charset=GB2312");
?>
<?php
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");

foreach($age as $x=>$x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
var_dump($age);
   echo "<br>";
var_dump($x);
   echo "<br>";
echo "$x";
   echo "<br>";
echo $x;
   echo "<br>";
echo $x[0];
echo $x[1];
echo $x[2];
echo $x[3];
echo $x[4];
echo $x_value[0];
echo $x_value[1];
echo count($x);
echo count($x_value);
?>

</body>
</html>