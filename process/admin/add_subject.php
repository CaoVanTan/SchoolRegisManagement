<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveAddSubject'])) {
        $subjectId = $_POST['subjectID'];
        $subjectName = $_POST['subjectName'];
        $subjectOffice = $_POST['subjectOffice'];

        $sql = "INSERT INTO subject(subject_id, subject_name, office_id)
                VALUES ('$subjectId', '$subjectName', '$subjectOffice')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/admin_subject.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
