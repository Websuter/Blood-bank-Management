<?php

    require("../includes/dtabase_connect.php");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth = $_POST['birth'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "create table IF NOT EXISTS blood_donation(id int not null auto_increment,
        first_name varchar(255),
        last_name varchar(255),
        d_o_b varchar(255),
        age int,
        email varchar(255) not null,
        gender varchar(255) not null,
        blood varchar(255),
        phone varchar(255) NOT NULL,
        address varchar(255),
        primary key (id)
        )";
        
        $result_1 = mysqli_query($conn,$sql);
        if (!$result_1) {
            echo "Error" . mysqli_error($conn);
            exit;
        }

        $sql_1 = "insert into blood_donation(first_name,last_name,d_o_b,age,email,gender,blood,phone,address) 
                    values('$first_name','$last_name','$birth','$age','$email','$gender','$blood','$phone','$address')";
        
        $result_1 = mysqli_query($conn,$sql_1);
        if (!$result_1) {
            echo "Error" . mysqli_error($conn);
            exit;
        }
        mysqli_close($conn);
    ?>