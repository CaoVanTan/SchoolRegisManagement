<?php
include '../partials-front/header.php';
include '../partials-front/header_student.php';
include '../partials-front/student_menu.php';
include '../config/config.php';
// $sql = "SELECT * FROM student ";
// $result = mysqli_query($con,$sql);
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
                    <label for="staticEmail" class="col-sm-2 col-form-label">Mã sinh viên : </label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="staticEmail" name="st_id">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="inputPassword" class="col-sm-2 ">Họ và tên:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="inputPassword" name="st_name">
                    </div>
                </div>
                <div class=" ms-2 mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Giới tính:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="staticEmail" name="st_gender">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Ngày sinh:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="inputPassword" name="st_date">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại: </label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="staticEmail" name="st_phone">
                    </div>
                </div>
                <div class=" ms-2 mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="inputPassword" name="st_address">
                    </div>
                </div>
                <div class="ms-2 mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="staticEmail" name="st_email">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>