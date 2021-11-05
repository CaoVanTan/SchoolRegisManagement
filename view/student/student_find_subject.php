<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
if (!isset($_SESSION)) {
    session_start();
}
?>
<main class="col-10 float-end">
    <div class="container">
        <div class="mt-5 ms-2 row">
            <h2 style="text-align: center">ĐĂNG KÝ HỌC</h2>
            <div class="mt-5 col-md-12">
                <h5 class="mb-4">DANH SÁCH HỌC PHẦN</h5>
            </div>
        </div>
        <div class="ms-2 row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">STT</th>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Môn học</th>
                            <th scope="col">Giảng viên</th>
                            <th scope="col">Đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                          
                         if(isset($_POST['submit'])){
                             $txt_find = $_POST['search'];
                             $username = $_SESSION['loginSuccess'] ;
                             include_once '../../config/config.php';
                             $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN curriculum a on o.subject_id = a.subject_id  WHERE  subject_name like '%$txt_find%' ";
                             $result = mysqli_query($con,$sql);

                              $i = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    $sql1 = 'SELECT * FROM regis_period';
                                    $result1 = mysqli_query($con,$sql1);
                                    $row1 = mysqli_fetch_array($result1);
                                        if($row['school_year'] == $row1['school_year'] && $row['semester'] == $row1['semester'])
                                       {
                                  echo '<tr>',
                                  ' <th >'.$i.'</th>',
                                  '<td>'.$row['subject_id'].'</td>',
                                   '<td>'.$row['subject_name'].'</td>',
                                   '<td>'.$row['teacher_name'].'</td>',
                                   '<td><a href="../../process/student/student_registration.php?subject_id='.$row['subject_id'].'"><i class="fas fa-user-plus"></i></a></td>',
                               '</tr>';
                                }
                            }
                         }
                 ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include '../../partials-front/footer.php';
?>
