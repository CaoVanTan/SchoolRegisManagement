<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
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
                            <th scope="col">Môn học</th>
                            <th scope="col">Giảng viên</th>
                            <th scope="col">Đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                         if(isset($_POST['submit'])){
                             $txt_find = $_POST['search'];

                             include '../../config/config.php';

                             $sql = "SELECT * FROM teacher e INNER JOIN subject o on e.subject_id = o.subject_id
                             WHERE subject_name like '%$txt_find%' or teacher_name like '%$txt_find%'";

                             $result = mysqli_query($con,$sql);

                              $i = 1;
                                  while($row = mysqli_fetch_array($result)){
                                  echo '<tr>',
                                  ' <th >'.$i++.'</th>',
                                   '<td>'.$row['subject_name'].'</td>',
                                   '<td>'.$row['teacher_name'].'</td>',
                                   '<td><input type="checkbox" name="a" id=""></td>',
                               '</tr>';
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
