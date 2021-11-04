<?php

    include_once '../../config/config.php';
    if(isset($_POST['btnSaveEdit'])) {

        $subjectID =$_POST['subjectID'];
        $subjectName = $_POST['subjectName'];
        $subjectOffice = $_POST['subjectName1'];
        $credits=$_POST['credits'];

        $sql = "UPDATE subject SET subject_name = '$subjectName',credits=' $credits', office_id = '$subjectOffice' where subject_id = '$subjectID'";
        $result = mysqli_query($con, $sql);


        if($result>0) {
            header("Location: ../../view/teacher/teacher_subject_information.php");
        } else {
            echo "Error";
        }
    }

    mysqli_close($con);
