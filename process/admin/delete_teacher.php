<?php
    include '../../config/config.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM teacher WHERE teacher_id = '$id'";
        $result = mysqli_query($con, $sql);
        echo $result;

        if($result) {
            header("Location: ../../view/admin/admin_teacher.php");
        } else {
            echo "Error";
        }
    }
?>