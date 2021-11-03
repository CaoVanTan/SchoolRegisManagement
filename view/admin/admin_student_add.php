<section class="overlay">
    <div class="model container form-container">
        <form method="post" action="../../process/admin/add_student.php" class="row justify-content-start bg-white form_content">
            <div class="form_title mb-3">Thêm Sinh Viên</div>
            <div class="mb-3 col-6">
                <label for="stdID" class="form-label">Mã sinh viên:</label>
                <input type="text" class="form-control" id="stdID" name="stdID">
            </div>
            <div class="mb-3 col-6">
                <label for="stdName" class="form-label">Tên sinh viên:</label>
                <input type="text" class="form-control" id="stdName" name="stdName">
            </div>
            <div class="mb-3 col-6">
                <label for="stdGender" class="form-label">Giới tính:</label>
                <select id="stdGender" name="stdGender" class="form-select" aria-label="Default select example">
                    <option selected>Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="stdBirthday" class="form-label">Ngày sinh:</label>
                <input type="date" class="form-control text-uppercase" id="stdBirthday" name="stdBirthday">
            </div>
            <div class="mb-3 col-6">
                <label for="stdAddress" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="stdAddress" name="stdAddress">
            </div>
            <div class="mb-3 col-6">
                <label for="stdPhone" class="form-label">Số điện thoại:</label>
                <input type="tel" class="form-control" id="stdPhone" name="stdPhone">
            </div>
            <div class="mb-3 col-6">
                <label for="stdEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="stdEmail" name="stdEmail">
            </div>
            <div class="mb-3 col-6 d-block">
                <label for="stdClass" class="form-label">Lớp:</label>
                <select id="stdClass" name="stdClass" class="form-select" aria-label="Default select example">
                <?php
                    $sql = "SELECT * FROM class";
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['class_id'].'">'.$row['class_name'].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" name="btnSaveAddStd" class="btn btn-primary d-flex w-auto form_btn mt-3">Lưu lại</button>
                <button type="reset" id="btnCancelAddStd" class="btnCancelAdd btn btn-danger w-auto form_btn mt-3">Hủy</button>
            </div>
        </form>
    </div>
</section>