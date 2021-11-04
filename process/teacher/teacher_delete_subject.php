<?php
$id = $_GET['id'];
echo $id;

//?mở kết nối
include_once '../../config/config.php';

//? set câu lệnh truy vấn
$sql = "DELETE FROM subject WHERE subject_id='$id'";

//? kiểm tra và thực thi câu lệnh
if (mysqli_query($con, $sql)) {
    header('location:../../view/teacher/teacher_subject_information.php');
} else {
    header('location:error.php');
}

//? đóng kết nối
mysqli_close($conn);
