<?php
    include_once '../../config/config.php';

    if(isset($_POST['btnOpenRegis'])) {
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $schoolYear = $_POST['schoolYear'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO regis_period (start_time, end_time, semester, school_year)
                VALUES ('$startTime', '$endTime', '$semester', '$schoolYear')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/open_register.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
