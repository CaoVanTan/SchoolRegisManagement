<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
?>


<div class="col-10 float-end">
    <div class="container">
        <div class="row">
            <h2 class="mt-5" style="text-align: center">KẾT QUẢ ĐĂNG KÝ HỌC
                PHẦN</h2>
            <div class="col-md-12">
                <table class="mt-5 table">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">STT</th>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Giảng viên</th>
                            <th scope="col">Năm học</th>
                            <th scope="col">Học kì</th>
                            <th scope="col">Số tín chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                              include '../../config/config.php';
                              
                              $sql = "SELECT * FROM list_register a INNER JOIN subject o on a.subject_id = o.subject_id  INNER JOIN teacher e on a.teacher_id = e.teacher_id INNER JOIN curriculum c on o.subject_id = c.subject_id INNER JOIN student b on a.std_id = b.std_id";
                              $result = mysqli_query($con,$sql);
                                  $i = 1;
                                  while($row = mysqli_fetch_array($result)){
                                      echo '<tr>',
                                      '<th>'.$i++.'</th>',
                                      '<td>'.$row['subject_id'].'</td>',
                                      '<td>'.$row['std_id'].'</td>',
                                      '<td>'.$row['subject_name'].'</td>',
                                      '<td>'.$row['teacher_name'].'</td>',
                                      '<td>'.$row['school_year'].'</td>',
                                      '<td>'.$row['semester'].'</td>',
                                      '<td>'.$row['credits'].'</td>',
                                  '</tr>';
                                  }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>