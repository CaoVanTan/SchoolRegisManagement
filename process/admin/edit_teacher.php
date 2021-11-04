<?php
    include_once '../../config/config.php';

    if(isset($_POST['btnSaveEditTeacher'])) {
        $tcID = $_POST['teacherID'];
        $tcName = $_POST['teacherName'];
        $tcGender = $_POST['teacherGender'];
        $tcBirthday = $_POST['teacherBirthday'];
        $tcAddress = $_POST['teacherAddress'];
        $tcPhone = $_POST['teacherPhone'];
        $tcEmail = $_POST['teacherEmail'];
        $tcOffice = $_POST['teacherOffice'];
        $tcSubject = $_POST['teacherSubject'];


        $sql = "UPDATE teacher SET teacher_id = '$tcID', teacher_name = '$tcName', teacher_gender = '$tcGender', teacher_birthday = '$tcBirthday', teacher_address = '$tcAddress',
                teacher_phone = '$tcPhone', teacher_email = '$tcEmail', teacher_address = '$tcAddress', office_id = '$tcOffice', subject_id = '$tcSubject' where teacher_id = '$tcID'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/admin/admin_teacher.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
