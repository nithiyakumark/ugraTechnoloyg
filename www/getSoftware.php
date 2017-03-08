<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `software`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
// echo json_encode($data);
    $fp = fopen('getSoftware.json', 'w');
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES));
    fclose($fp);
?>