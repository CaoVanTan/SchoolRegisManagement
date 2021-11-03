<?php
    include '../../config/config.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM curriculum WHERE subject_id = '$id'";
        $result = mysqli_query($con, $sql);
        echo $result;

        if($result) {
            header("Location: ../../view/admin/admin_curriculum.php");
        } else {
            echo "Error";
        }
    }
?>