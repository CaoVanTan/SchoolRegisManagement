<?php
    include '../../config/config.php';

    if(isset($_POST['btnOpenRegis'])) {
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];

        $sql = "INSERT INTO regis_period(start_time, end_time)
                VALUES ('$startTime', '$endTime')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/open_register.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
