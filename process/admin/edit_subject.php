<?php
    include '../../config/config.php';

    if(isset($_POST['btnSaveEditSubject'])) {
        $subjectID = $_POST['subjectID'];
        $subjectName = $_POST['subjectName'];
        $subjectOffice = $_POST['subjectOffice'];

        $sql = "UPDATE subject SET subject_id = '$subjectID', subject_name = '$subjectName', office_id = '$subjectOffice' where subject_id = '$subjectID'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/admin/admin_subject.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
?>
