<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveAddCurri'])) {
        $subjectId = $_POST['subjectName'];
        $schoolYear = $_POST['schoolYear'];
        $semester = $_POST['semester'];
        $course_id = $_POST['course_id'];
        $subjectOffice = $_POST['subjectOffice'];

        $sql = "INSERT INTO curriculum(office_id, subject_id, course_id, school_year, semester)
                VALUES ('$subjectOffice', '$subjectId', '$course_id', '$schoolYear', '$semester')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/admin_curriculum.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
