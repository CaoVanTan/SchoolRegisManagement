<?php 
include '../../config/config.php';
// $check = isset($_POST['check']);
       if(isset($_GET['subject_id'])){
           $subject = $_GET['subject_id'];
 //if($check == true){
           $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN office a on a.office_id = e.office_id INNER JOIN class c on c.office_id = a.office_id  INNER JOIN student b on c.class_id = b.class_id Where o.subject_id = '$subject'";
            $result = mysqli_query($con, $sql);
           $row = mysqli_fetch_array($result);
           $teacher_id = $row['teacher_id'];
           $std_id = $row['std_id'];
           $subject_id = $row['subject_id'];
          
           $sql1 = "INSERT INTO list_register(teacher_id, std_id, subject_id) VALUES ('$teacher_id', '$std_id', '$subject_id')";
           $res = mysqli_query($con,$sql1);
          if($res > 0){
                   header("location: ../../view/student/student_course_registration.php");
          }
       // }
    }    

?>