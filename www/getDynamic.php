<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `dynamic`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
//echo json_encode($data, JSON_UNESCAPED_SLASHES);
$fp = fopen('getDynamic.json', 'w');
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES));
    fclose($fp);
?>