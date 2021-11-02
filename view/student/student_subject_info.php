<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
?>
<div class="col-10 float-end">
    <div class="container">
        <div class="row">
            <h3 class="mt-5 mb-5" style="text-align: center">DANH SÁCH MÔN HỌC ĐĂNG KÝ
            </h3>
            <div class="col-md-12" >
                <table class="table ">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">STT</th>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Giảng viên</th>

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
                            '</tr>';
                              }
                          }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>