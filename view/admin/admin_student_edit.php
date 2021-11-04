<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
include_once '../../config/config.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            SỬA THÔNG TIN SINH VIÊN
        </div>

        <form action="../../process/admin/edit_student.php" method="post" class="row justify-content-start form_content">
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $sql_cr = "SELECT *, c.class_id FROM student std, class c WHERE c.class_id = std.class_id AND std.std_id = '$id'";
                    $result_cr = mysqli_query($con, $sql_cr);
                    $row_cr = mysqli_fetch_assoc($result_cr);
                }
            ?>

            <div class="mb-3 col-6">
                <label for="stdID" class="form-label">Mã sinh viên:</label>
                <input type="text" readonly class="form-control" id="stdID" value="<?php echo $row_cr['std_id']; ?>" name="stdID">
            </div>
            <div class="mb-3 col-6">
                <label for="stdName" class="form-label">Tên sinh viên:</label>
                <input type="text" class="form-control" id="stdName" value="<?php echo $row_cr['std_name'] ?>" name="stdName">
            </div>
            <div class="mb-3 col-6">
                <label for="stdGender" class="form-label">Giới tính:</label>
                <select id="stdGender" class="form-select" aria-label="Default select example" name="stdGender">
                    <?php
                        if($row_cr['std_gender'] == true) {
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
                <label for="stdBirthday" class="form-label">Ngày sinh:</label>
                <input type="date" class="form-control text-uppercase" id="stdBirthday" value="<?php echo $row_cr['std_birthday'] ?>" name="stdBirthday">
            </div>
            <div class="mb-3 col-6">
                <label for="stdAddress" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="stdAddress" value="<?php echo $row_cr['std_address'] ?>" name="stdAddress">
            </div>
            <div class="mb-3 col-6">
                <label for="stdPhone" class="form-label">Số điện thoại:</label>
                <input type="tel" class="form-control" id="stdPhone" value="<?php echo $row_cr['std_phone'] ?>" name="stdPhone">
            </div>
            <div class="mb-3 col-6">
                <label for="stdEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="stdEmail" value="<?php echo $row_cr['std_email'] ?>" name="stdEmail">
            </div>
            <div class="mb-3 col-6 d-block">
                <label for="stdClass" class="form-label">Lớp:</label>
                <select id="stdClass" class="form-select" aria-label="Default select example" name="stdClass">
                    <?php
                        $sql = "SELECT * FROM class";
                        $result = mysqli_query($con, $sql);

                        if(mysqli_num_rows($result) > 0) {
                            echo '<option value="'.$row_cr['class_id'].'">'.$row_cr['class_name'].'</option>';

                            while($row = mysqli_fetch_assoc($result)) {
                                if($row_cr['class_id'] == $row['class_id']) {
                                    echo null;
                                } else {
                                    echo '<option value="'.$row['class_id'].'">'.$row['class_name'].'</option>';
                                }
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" name="btnSaveEditStd" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                <a href="../../view/admin/admin_student.php" id="btnCancelEditStd" class="btn btn-danger w-auto form_btn mt-3">Hủy</a>
            </div>
        </form>
    </div>
</main>


<?php
include '../../partials-front/footer.php';
?>