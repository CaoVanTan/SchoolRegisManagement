
<?php
include '../../config/config.php';
if (isset($_POST['btnSaveAdd'])) {
    $id = $_POST['subjectID'];
    $name = $_POST['subjectName'];
    $name1 =$_POST['subjectName1'];
    
    //? câu lệnh
    $sql = "INSERT INTO subject (subject_id,subject_name,office_id)
    VALUES ('$id','$name','$name1')";
   


    
    $result = mysqli_query($con, $sql);
    if ($result > 0) {
        header('location:../../view/teacher/teacher_subject_information.php');
    } else {
        header('location:Error.php');
    }}
 ?>