<?php

    include_once '../../config/config.php';
    
    
        
    
    if(isset($_POST['btnSaveAddTeacher'])) {
        $teacherID =$_POST['teacherID'];
        $teacherName = $_POST['teacherName'];
        $teacherGender = $_POST['teacherGender'];
        $teacherBirthday=$_POST['teacherBirthday'];
        $teacherAddress=$_POST['teacherAddress'];
        $teacherPhone=$_POST['teacherPhone'];
        $teacherEmail=$_POST['teacherEmail'];
        

        $sql = "UPDATE teacher SET teacher_name = '$teacherName',teacher_gender='$teacherGender', teacher_birthday = '$teacherBirthday', teacher_address = '$teacherAddress', teacher_phone = '$teacherPhone', teacher_email = '$teacherEmail' where teacher_id = '$teacherID'";
        echo $sql;
        $result = mysqli_query($con, $sql);


        if($result>0) {
            header("Location: ../../view/teacher/teacher_information.php");
        } else {
            echo "Error";
        }
    }


    mysqli_close($con);
?>