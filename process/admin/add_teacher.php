<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveAddTeacher'])) {
        $tcName = $_POST['teacherName'];
        $tcGender = $_POST['teacherGender'];
        $tcBirthday = $_POST['teacherBirthday'];
        $tcAddress = $_POST['teacherAddress'];
        $tcPhone = $_POST['teacherPhone'];
        $tcEmail = $_POST['teacherEmail'];
        $tcOffice = $_POST['teacherOffice'];
        $tcSubject = $_POST['teacherSubject'];

        if($tcGender == 'Nam') {
            $gender = 1;
        } else {
            $gender = 0;
        }

        $sql = "INSERT INTO teacher(teacher_name, teacher_gender, teacher_birthday, teacher_address, teacher_phone, teacher_email, office_id, subject_id)
                VALUES ('$tcName', '$gender', '$tcBirthday', '$tcAddress', '$tcPhone', '$tcEmail', '$tcOffice', '$tcSubject')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/admin_teacher.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
