<?php
       include '../../config/config.php';

       $subject_id = $_GET['subject_id'];

       $sql = "DELETE  FROM list_register WHERE subject_id = '$subject_id'";

       $result1 = mysqli_query($con, $sql);
       if($result1 > 0){
         header("location:../../view/student/student_course_registration.php");
       }else{
           echo 'lỗi';
       }
   
?>