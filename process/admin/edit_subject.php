<?php
    include_once '../../config/config.php';

    if(isset($_POST['btnSaveEditSubject'])) {
        $subjectID = $_POST['subjectID'];
        $subjectName = $_POST['subjectName'];
        $subjectCredits = $_POST['subjectCredits'];
        $subjectOffice = $_POST['subjectOffice'];

        $sql = "UPDATE subject SET subject_id = '$subjectID', subject_name = '$subjectName', credits = '$subjectCredits', office_id = '$subjectOffice' where subject_id = '$subjectID'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/admin/admin_subject.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
