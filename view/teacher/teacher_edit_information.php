<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
include '../../process/teacher/teacher_information.php';

?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">

                <h1 class="text-center">Thông tin Giảng viên</h1>


                <form action="../../process/teacher/teacher_edit_information.php" method="post">
                    <div class="row ">
                        <div class="col-12">
                            <div class="ms-2 mb-3 row" style="display: none">
                                <label for="" class="col-sm-2 col-form-label">Mã giảng viên: </label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $row['teacher_id'] ?> " class="form-control"
                                        name="teacherID">
                                </div>
                            </div>

                            <div class="ms-2 mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Tên giảng viên: </label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $row['teacher_name'] ?> " class="form-control"
                                        name="teacherName">
                                </div>
                            </div>
                            <div class="ms-2 mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Giới tính:</label>
                                <div class="col-sm-8">
                                <select id="teacherGender" class="form-select" aria-label="Default select example"
                                    name="teacherGender">
                                    <?php
                        if($row['teacher_gender'] == true) {
                            echo    '<option value="1">Nam</option>
                                    <option value="0">Nữ</option>';
                        } else {
                            echo    '<option value="0">Nữ</option>
                                    <option value="1">Nam</option>';
                        }

                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="ms-2 mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Ngày sinh: </label>
                                <div class="col-sm-8">
                                <input type="date" class="form-control text-uppercase" value="<?php echo $row['teacher_birthday'] ?>" name="teacherBirthday">
                                </div>
                            </div>
                            <div class="ms-2 mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Địa chỉ: </label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $row['teacher_address'] ?> "
                                        class="form-control" name="teacherAddress">
                                </div>
                            </div>
                            <div class="ms-2 mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Số điện thoại: </label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $row['teacher_phone'] ?> " class="form-control"
                                        name="teacherPhone">
                                </div>
                            </div>
                            <div class="ms-2 mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Email: </label>
                                <div class="col-sm-8">
                                    <input type="email" value="<?php echo $row['teacher_email'] ?> " class="form-control"
                                        name="teacherEmail">
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="btnSaveAddTeacher"
                                    class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                                <a href="./teacher_information.php" id="btnCancelEditSubject"
                                    class="btn btn-danger w-auto form_btn mt-3">Hủy</a>
                            </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>

</main>

<?php
include '../../partials-front/footer.php';
?>