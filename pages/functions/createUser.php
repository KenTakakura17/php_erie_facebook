<?php

include "../../config/include.php";


if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['mobile_num']) && isset($_POST['birthdate']) && isset($_POST['gender']) && isset($_POST['password'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_num = $_POST['mobile_num'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, first_name, last_name, mobile_num, birthdate, gender, password)
            VALUES (
                :name,
                :email,
                :first_name,
                :last_name,
                :mobile_num,
                :birthdate,
                :gender,
                :password)";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "name" => $user_name,
        "email" => $email,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "mobile_num" => $mobile_num,
        "birthdate" => $birthdate,
        "gender" => $gender,
        "password" => $password
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../dashboard.php'</script>";
    } else {
        echo "not save";
    }
}
