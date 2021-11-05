<section class="overlay">
    <div class="model container form-container">
        <form method="post" action="../../process/admin/add_curri.php" class="row justify-content-start bg-white form_content">
            <div class="form_title mb-3">Thêm Chương Trình Học</div>

            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Tên môn học:</label>
                <select id="subjectName" class="form-select" aria-label="Default select example" name="subjectName">
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
            <div class="mb-3 col-6">
                <label for="schoolYear" class="form-label">Năm học:</label>
                <input type="number" required min="2010" max="2099" step="1" value="2020" class="form-control" id="schoolYear" name="schoolYear">
            </div>
            <div class="mb-3 col-6">
                <label for="semester" class="form-label">Học kì:</label>
                <input type="number" required min="1" max="2" step="1" value="1" class="form-control" id="semester" name="semester">
            </div>
            <div class="mb-3 col-6">
                <label for="course_id" class="form-label">Khóa học:</label>
                <select class="form-select" aria-label="Default select example" name="course_id">
                <?php
                    $sql = "SELECT * FROM course";
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['course_id'].'">'.$row['course_id'].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="subjectOffice" class="form-label">Khoa:</label>
                <select class="form-select" aria-label="Default select example" name="subjectOffice">
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

            <div class="text-end">
                <button type="submit" name="btnSaveAddCurri" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                <button type="reset" id="btnCancelAddCurri" class="btnCancelAdd btn btn-danger w-auto form_btn mt-3">Hủy</button>
            </div>
        </form>
    </div>
</section>