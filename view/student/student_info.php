<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
include '../../config/config.php';
$sql = "SELECT * FROM student e INNER JOIN class o on e.class_id = o.class_id INNER JOIN office a on  o.office_id = a.office_id INNER JOIN course c on o.course_id = c.course_id ";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
?>
<div class="col-10 float-end">
    <div class="container">
        <div class="mt-5 mb-5 row ">
            <div class="col-12">
                <h3 style="text-align: center">THÔNG TIN CÁ NHÂN</h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="ms-2 mb-3 row">
                    <label for="inputPassword" class="col-sm-2 ">Họ và tên:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly value="<?php echo $row['std_name'] ?> " class="form-control"
                            id="inputPassword" name="st_name">
                    </div>
                </div>
                <div class=" ms-2 mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Giới tính:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly value="<?php if($row['std_gender'] == true)
                        {echo 'Nam' ;}
                        else { echo 'Nữ';
                        }?> "
                         class="form-control"
                            id="staticEmail" name="st_gender">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Ngày sinh:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly value="<?php $date = explode('-', $row['std_birthday']);
                            $birthday = $date[2] . '-' . $date[1] . '-' . $date[0];
                            echo  $birthday;?> " class="form-control"
                            id="inputPassword" name="st_date">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại: </label>
                    <div class="col-sm-8">
                        <input type="text" readonly value="<?php echo $row['std_phone'] ?> " class="form-control"
                            id="staticEmail" name="st_phone">
                    </div>
                </div>
                <div class=" ms-2 mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly value="<?php echo $row['std_address'] ?> " class="form-control"
                            id="inputPassword" name="st_address">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly value="<?php echo $row['std_email'] ?> " class="form-control"
                            id="staticEmail" name="st_email">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5 row ">
        <div class="col-12">
            <h3 style="text-align: center">THÔNG TIN THEO TRƯỜNG</h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
            <div class="ms-3 mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Mã sinh viên : </label>
                <div class="col-sm-8">
                    <input type="text" readonly value="<?php echo $row['std_id'] ?> " class="form-control"
                        id="staticEmail" name="st_id">
                </div>
            </div>
            <div class="ms-3 mb-3 row">
                <label for="inputPassword" class="col-sm-2 ">Lớp học:</label>
                <div class="col-sm-8">
                    <input type="text" readonly value="<?php echo $row['class_name'] ?> " class="form-control"
                        id="inputPassword" name="st_name">
                </div>
            </div>
            <div class=" ms-3 mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Khóa:</label>
                <div class="col-sm-8">
                    <input type="text" readonly value="<?php echo $row['course_id'] ?> " class="form-control"
                        id="staticEmail" name="st_gender">
                </div>
            </div>
            <div class="ms-3 mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Khoa:</label>
                <div class="col-sm-8">
                    <input type="text" readonly value="<?php echo $row['office_name'] ?> " class="form-control"
                        id="inputPassword" name="st_date">
                </div>
            </div>
            <div class="ms-3 mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Năm bắt đầu:</label>
                <div class="col-sm-8">
                    <input type="text" readonly value="<?php echo $row['year_start'] ?> " class="form-control"
                        id="inputPassword" name="st_date">
                </div>
            </div>
        </div>
    </div>
</div>