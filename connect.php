<?php
    $name=$POST['Name'];
    $phoneNumber=$POST['Phone Number'];
    $email=$POST['Email'];
    $subject=$POST['Subject'];
    $message=$POST['Message'];
    $conn = new mySqli('localhost','root','','test1');
    if($conn->connect_error){
        die('Connection Failed:' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insesrt into contact(name, phoneNumber, email, subject, message) values(?,?,?,?,?)");
        $stmt -> blind_param("sisss", $name, $phoneNumber, $email, $subject, $message);
        $stmt -> execute();
        echo "Successfull";
        $stmt -> close();
        $conn -> close();
    }
    php?>