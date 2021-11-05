<?php 
if (!isset($_SESSION)) {
    session_start();
}
include_once '../../config/config.php';

       if(isset($_GET['subject_id'])){
           $subject_id = $_GET['subject_id'];
           $username = $_SESSION['loginSuccess'] ;
           $sql = "SELECT * FROM  teacher e ,subject o , curriculum d, office a ,class c , student b Where e.subject_id = o.subject_id && o.subject_id = d.subject_id && a.office_id = e.office_id &&  c.office_id = a.office_id && c.class_id = b.class_id && o.subject_id = '$subject_id' && b.std_id = '$username'";
            $result = mysqli_query($con, $sql);
           while ($row = mysqli_fetch_array($result)){
            $sql1 = "SELECT * FROM list_register where subject_id = '$subject_id' && std_id = '$username'";
              $result1 = mysqli_query($con, $sql1);
              if(mysqli_num_rows($result1) > 0){
         
                   header("location: ../../view/student/student_course_registration.php");
               }else{
                $teacher_id = $row['teacher_id'];
                $std_id = $row['std_id'];
                $subject = $row['subject_id'];
                $sql2 = "INSERT INTO list_register(teacher_id, std_id, subject_id) VALUES ('$teacher_id', '$std_id', '$subject')";
                $res = mysqli_query($con,$sql2);
               if($res > 0){
                        header("location: ../../view/student/student_course_registration.php");
               }
               else{
                   echo "Đăng kí không thành công";
               }
               }
            
    }   
} 

?>