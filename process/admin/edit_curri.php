<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveEditCurri'])) {
        $subjectID = $_POST['subjectName'];
        $schoolYear = $_POST['schoolYear'];
        $semester = $_POST['semester'];
        $courseId = $_POST['courseId'];
        $subjectOffice = $_POST['subjectOffice'];

        $sql = "UPDATE curriculum SET office_id = '$subjectOffice', subject_id = '$subjectID', course_id = '$courseId', school_year = '$schoolYear', semester = '$semester' where subject_id = '$subjectID'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/admin/admin_curriculum.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
