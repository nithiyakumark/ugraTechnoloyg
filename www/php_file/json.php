<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `static`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
//$static_site =  json_encode($data, JSON_UNESCAPED_SLASHES);

    //write to json file
    $fp = fopen('getStatic.json', 'w');
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES));
    fclose($fp);
?>