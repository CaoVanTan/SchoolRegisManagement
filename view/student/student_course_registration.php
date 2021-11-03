<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
?>
<div class="col-10 float-end">
    <div class="container">
        <div class="mt-5 ms-2 row">
            <h2 style="text-align: center">ĐĂNG KÝ HỌC</h2>
            <div class="mt-5 col-md-12">
                <h5 class="mb-4">DANH SÁCH HỌC PHẦN</h5>
                <form action="./student_find_subject.php" method="post">
                    Tìm kiếm: <input type="text" name="search">
                    <input type="submit" class="btn-secondary" name="submit" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <!-- <form action="" method="post"> -->
            <div class="mt-5 ms-2 row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">STT</th>
                                <th scope="col">Mã môn học</th>
                                <th scope="col">Môn học</th>
                                <th scope="col">Giảng viên</th>
                                <th scope="col">Đăng ký</th>
                                <th scope="col">Hủy đăng ký</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                         include '../../config/config.php';
                          $sql = "SELECT * FROM subject e INNER JOIN teacher o on e.subject_id = o.subject_id";
                          $result = mysqli_query($con, $sql);
                          $i = 1;
                          if( mysqli_num_rows($result) > 0){
                              while($row = mysqli_fetch_assoc($result)){
                               echo '<tr>',
                               ' <th >'.$i++.'</th>',
                               '<td>'.$row['subject_id'].'</td>',
                                '<td>'.$row['subject_name'].'</td>',
                                '<td>'.$row['teacher_name'].'</td>',
                                // '<td><a href=""><input type="checkbox" name="check" value = "yes"> </a></td>',
                               '<td><a href="../../process/student/student_registration.php?subject_id='.$row['subject_id'].'"><input type="submit" class = "btn btn-primary" value="Register"></a></td>',
                               '<td><a href="../../process/student/student_cancel_registration.php?subject_id='.$row['subject_id'].'"> <i class="fas fa-trash-alt"></i></a></td>',
                            '</tr>';
                              }
                          }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- </form> -->
    </div>
</div>

<?php 
//  $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN office a on a.office_id = e.office_id INNER JOIN class c on c.office_id = a.office_id  INNER JOIN student b on c.class_id = b.class_id";
//  $result = mysqli_query($con, $sql);
//  $row = mysqli_fetch_array($result);
//  $check = isset($_POST['check']);
//     $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN office a on a.office_id = e.office_id INNER JOIN class c on c.office_id = a.office_id  INNER JOIN student b on c.class_id = b.class_id";
//     $result = mysqli_query($con, $sql);
//     $row = mysqli_fetch_array($result);
        //    $sql1 = "SELECT * FROM  $sql Where subject_id = '".$row['subject_id']."'";
        //     $result1 = mysqli_query($con, $sql1);
        //     $row1 = mysqli_fetch_array($result1);
                // $teacher_id = $row['teacher_id'];
                // $std_id = $row['std_id'];
                // $subject_id = $row['subject_id'];
                //   $sql2 = "INSERT INTO list_register(teacher_id, std_id, subject_id) VALUES ('$teacher_id', '$std_id', '$subject_id')";
                //   $res = mysqli_query($con,$sql2);
                 


    
?>