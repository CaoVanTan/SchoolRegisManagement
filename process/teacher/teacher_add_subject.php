<?php
include_once '../../config/config.php';
if (isset($_POST['btnSaveAdd'])) {
    $id = $_POST['subjectID'];
    $name = $_POST['subjectName'];
    $name1 = $_POST['subjectName1'];
    $credits = $_POST['credits'];

    //? câu lệnh
    $sql1 = "SELECT * FROM subject WHERE subject_id ='$id'";
    $result = mysqli_query($con, $sql1);
    if (mysqli_num_rows($result) > 0) {
        echo ('Mã môn học đã tồn tại');
    } else {
        $sql = "INSERT INTO subject (subject_id,subject_name,credits,office_id)
            VALUES ('$id','$name', '$credits','$name1')";
        $result1 = mysqli_query($con, $sql);
        if ($result1 == 1) {
            header('location:../../view/teacher/teacher_subject_information.php');
        } else {
            header('location:Error.php');
        }
    }
}
