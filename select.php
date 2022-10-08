<?php
    $connection=mysqli_connect("localhost","root","","profile");
    $selectquery="SELECT * FROM `student`";
    $q=mysqli_query($connection,$selectquery);
    $arr=[];
    while($result=mysqli_fetch_assoc($q))
    {
        $arr[]=$result;
    }
    echo "<pre>";
    print_r($arr);
    foreach($arr as $key=>$value)
    {
        print_r($value)."<br>";
    }
?>