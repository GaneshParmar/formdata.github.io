<?php
    error_reporting(0);
    $servername="localhost";
    $userername="root";
    $password="";
    $dbname="data";

    $conn = mysqli_connect($servername,$userername,$password,$dbname);

    if($conn)
    {
        //echo "Connection Established!:)";
    }
    else
    {
        echo "Connection Failed!:(".mysqli_connect_error();
    }
    $fn = $_REQUEST['firstname'];
    $ln = $_REQUEST['lastname'];
    $eid = $_REQUEST['eid'];
    $gen = $_REQUEST['gender'];
    $sal = $_REQUEST['salary'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['slider'];
    
    
    $sql = "INSERT INTO employeedata  VALUES ('$fn','$ln','$eid','$gen','$age','$sal','$email')";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
        echo "data inserted into database";
    }
    else{
        echo "Failed to insert data in database";
    
    }
    
    mysqli_close($conn);
    

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