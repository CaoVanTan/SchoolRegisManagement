<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveEditStd'])) {
        $stdID = $_POST['stdID'];
        $stdName = $_POST['stdName'];
        $stdGender = $_POST['stdGender'];
        $stdBirthday = $_POST['stdBirthday'];
        $stdAddress = $_POST['stdAddress'];
        $stdPhone = $_POST['stdPhone'];
        $stdEmail = $_POST['stdEmail'];
        $stdClass = $_POST['stdClass'];
        $stdPass = $stdID;

        $sql = "UPDATE student SET std_id = '$stdID', std_name = '$stdName', std_gender = '$stdGender', std_birthday = '$stdBirthday', std_phone = '$stdPhone',
                std_email = '$stdEmail', std_address = '$stdAddress', std_pass = '$stdPass', class_id = '$stdClass' where std_id = '$stdID'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/admin/admin_student.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
