<?php 
if (!isset($_SESSION)) {
    session_start();
}
include_once '../../config/config.php';

       if(isset($_GET['subject_id'])){
           $subject_id = $_GET['subject_id'];
           $username = $_SESSION['loginSuccess'] ;

           $sql = "SELECT * FROM  teacher e ,subject o , office a ,class c , student b Where e.subject_id = o.subject_id && a.office_id = e.office_id &&  c.office_id = a.office_id && c.class_id = b.class_id && o.subject_id = '$subject_id' && b.std_id = '$username'";
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
          else{
              echo "Đăng kí không thành công";
          }
    }    

?>