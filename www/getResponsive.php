<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `responsive`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
//echo json_encode($data);

$fp = fopen('getResponsive.json', 'w');
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES));
    fclose($fp);
?>