<?php
    // database connection code
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    // create conn
    $con = mysqli_connect($servername, $username, $password);


    // check conn
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // else { do nothing }




    // create db

    $db = "ngo_db";
    $sql = "CREATE DATABASE $db;";
    if (mysqli_query($con, $sql)) {
        // do nothing
    } else {
        // show error
        mysqli_error($con);
    }

    // use ngo db for further queries
    mysqli_select_db($con, $db);

    $table_name = "vounteer_tbl";

    $query = "SELECT ID FROM $table_name";
    $result = mysqli_query($con, $query);

    $sql = "CREATE TABLE IF NOT EXISTS
        $table_name(
            -- id INT(6) UNSIGNED
            -- AUTO_INCREMENT
            -- PRIMARY KEY,
            fldName VARCHAR(50),
            fldEmail VARCHAR(50) PRIMARY KEY,
            fldPhone VARCHAR(10),
            fldGender VARCHAR(10),
            fldAddress VARCHAR(150),
            fldEvent TEXT
        )";

    mysqli_query($con, $sql);

    // insert query

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $chk = implode(',', $_POST['check_list']);

            $sql = "INSERT INTO $table_name (fldName, fldEmail, fldPhone,  fldGender, fldAddress, fldEvent) values (?,?,?,?,?,?);";
            $pst = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($pst, "ssssss", $name, $email, $phone, $gender, $address, $chk);
            mysqli_stmt_execute($pst);

            // echo '<h5 class="card-title mt-4">Inserting record</h5>';
            // echo '<p class="card-text">Record with roll number ' . $roll . ' added to the table.</p>';
        }
    }

    mysqli_close($con);
