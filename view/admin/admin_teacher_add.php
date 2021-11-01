<section id="overlayAddTeacher" class="overlay">
    <div id="modelAddTeacher" class="container form-container">
        <form method="post" action="../../process/admin/add_teacher.php" class="row justify-content-end bg-white form_content">
            <div class="form_title mb-3">Thêm Giảng Viên</div>
            <div class="mb-3 col-6">
                <label for="teacherName" class="form-label">Tên giảng viên:</label>
                <input type="text" class="form-control" id="teacherName" name="teacherName">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherGender" class="form-label">Giới tính:</label>
                <select class="form-select" aria-label="Default select example" name="teacherGender">
                    <option selected>Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="teacherBirthday" class="form-label">Ngày sinh:</label>
                <input type="date" class="form-control text-uppercase" id="teacherBirthday" name="teacherBirthday">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherAddress" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="teacherAddress" name="teacherAddress">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherPhone" class="form-label">Số điện thoại:</label>
                <input type="text" class="form-control" id="teacherPhone" name="teacherPhone">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="teacherEmail" name="teacherEmail">
            </div>
            <div class="mb-3 col-6">
                <label for="teacherOffice" class="form-label">Khoa:</label>
                <select class="form-select" aria-label="Default select example" name="teacherOffice">
                <?php
                    $sql = "SELECT * FROM office";
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['office_id'].'">'.$row['office_name'].'</option>';
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

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['subject_id'].'">'.$row['subject_name'].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
            <button type="submit" name="btnSaveAddTeacher" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
            <button type="reset" id="btnCancelAddTeacher" class="btn btn-danger w-auto form_btn mt-3">Hủy</button>
        </form>
    </div>
</section>