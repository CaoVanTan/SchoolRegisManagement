<section id="overlayAddSubject" class="overlay">
    <div id="modelAddSubject" class="container form-container">
        <form method="post" action="../../process/admin/add_subject.php" class="row justify-content-start bg-white form_content">
            <div class="form_title mb-3">Thêm Môn Học</div>
            <div class="mb-3 col-6">
                <label for="subjectID" class="form-label">Mã môn học:</label>
                <input type="text" class="form-control" id="subjectID" name="subjectID">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Môn học:</label>
                <input type="text" class="form-control" id="subjectName" name="subjectName">
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
                <button type="submit" name="btnSaveAddSubject" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                <button type="reset" id="btnCancelAddSubject" class="btn btn-danger w-auto form_btn mt-3">Hủy</button>
            </div>
        </form>
    </div>
</section>