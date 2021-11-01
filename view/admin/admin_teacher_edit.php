<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
include '../../config/config.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            SỬA THÔNG TIN GIẢNG VIÊN
        </div>

        <form action="../../process/admin/edit_teacher.php" method="post" class="row justify-content-end form_content">
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $sql_cr = "SELECT t.*, o.office_name, s.subject_name FROM teacher t, office o, subject s WHERE t.office_id = o.office_id AND t.subject_id = s.subject_id AND t.teacher_id = '$id'";
                    $result_cr = mysqli_query($con, $sql_cr);
                    $row_cr = mysqli_fetch_assoc($result_cr);
                }
            ?>

            <div class="d-none mb-3 col-6">
                <label for="teacherID" class="form-label">Mã giảng viên:</label>
                <input type="text" class="form-control" id="teacherID" name="teacherID" value="<?php echo $row_cr['teacher_id']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherName" class="form-label">Tên giảng viên:</label>
                <input type="text" class="form-control" id="teacherName" name="teacherName" value="<?php echo $row_cr['teacher_name']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherGender" class="form-label">Giới tính:</label>
                <select class="form-select" aria-label="Default select example" name="teacherGender">
                <?php
                        if($row_cr['teacher_gender'] == true) {
                            echo    '<option value="1">Nam</option>
                                    <option value="0">Nữ</option>';
                        } else {
                            echo    '<option value="0">Nữ</option>
                                    <option value="1">Nam</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="teacherBirthday" class="form-label">Ngày sinh:</label>
                <input type="date" class="form-control text-uppercase" id="teacherBirthday" name="teacherBirthday" value="<?php echo $row_cr['teacher_birthday']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherAddress" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="teacherAddress" name="teacherAddress" value="<?php echo $row_cr['teacher_address']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherPhone" class="form-label">Số điện thoại:</label>
                <input type="tel" class="form-control" id="teacherPhone" name="teacherPhone" value="<?php echo $row_cr['teacher_phone']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="teacherEmail" name="teacherEmail" value="<?php echo $row_cr['teacher_email']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherOffice" class="form-label">Khoa:</label>
                <select class="form-select" aria-label="Default select example" name="teacherOffice">
                    <?php
                    $sql = "SELECT * FROM office";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<option value="' . $row_cr['office_id'] . '">' . $row_cr['office_name'] . '</option>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            if($row_cr['office_id'] == $row['office_id']) {
                                echo null;
                            } else {
                                echo '<option value="' . $row['office_id'] . '">' . $row['office_name'] . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="teacherSubject" class="form-label">Môn giảng dạy:</label>
                <select class="form-select" aria-label="Default select example" name="teacherSubject">
                    <?php
                    $sql = "SELECT * FROM subject";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<option value="' . $row_cr['subject_id'] . '">' . $row_cr['subject_name'] . '</option>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            if($row_cr['subject_id'] == $row['subject_id']) {
                                echo null;
                            } else {
                                echo '<option value="' . $row['subject_id'] . '">' . $row['subject_name'] . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="btnSaveEditTeacher" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
            <a href="../../view/admin/admin_teacher.php" id="btnCancelEditTeacher" class="btn btn-danger w-auto form_btn mt-3">Hủy</a>
        </form>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>