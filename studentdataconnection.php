<?php
    
    $servername="localhost";
    $userername="root";
    $password="";
    $dbname="data";

    $connect = mysqli_connect($servername,$userername,$password,$dbname);

    if($connect)
    {
        echo "Connection Established!:)";
    }
    else
    {
        echo "Connection Failed!:(".mysqli_connect_error();
    }

    $name = $_REQUEST['stuname'];
    $rollno = $_REQUEST['rollno'];
    $gender = $_REQUEST['genders'];
    $marks = $_REQUEST['marks'];
    $x = $_REQUEST['percentage'];
    
    

    $sql = "INSERT INTO studentdatatable VALUES ('$name','$rollno','$gender','$marks','$x')";

    $data=mysqli_query($connect,$sql);

    if($data)
    {
        echo "data entered into studentdata base";
    }
    else{
        echo "try bro don,t worry:(";
    }
    mysqli_close($connect);


?>