<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveAddStd'])) {
        $stdID = $_POST['stdID'];
        $stdName = $_POST['stdName'];
        $stdGender = $_POST['stdGender'];
        $stdBirthday = $_POST['stdBirthday'];
        $stdAddress = $_POST['stdAddress'];
        $stdPhone = $_POST['stdPhone'];
        $stdEmail = $_POST['stdEmail'];
        $stdClass = $_POST['stdClass'];
        $stdPass = $stdID;

        if($stdGender == 'Nam') {
            $gender = 1;
        } else {
            $gender = 0;
        }

        $sql = "INSERT INTO student VALUES ('$stdID', '$stdName', '$gender', '$stdBirthday', '$stdPhone', '$stdEmail', '$stdAddress', '$stdPass', '$stdClass')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/admin_student.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
