<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
include '../../config/config.php';
?>


<main class="d-flex justify-content-end">
    <div class="col-10 ">
        <div class="container">
                        <form action="../../process/teacher/teacher_add_subject.php" method="post" class="row justify-content-start form_content">
                            <h1 class="text-center">Thêm khóa học</h1>
                            <div class="mb-3 col-6">
                                <label for="subjectID" class="form-label">Mã môn học:</label>
                                <input type="text" class="form-control" id="subjectID" name="subjectID">
                            </div>



                            <div class="mb-3 col-6">
                                <label for="subjectName" class="form-label">Tên môn học:</label>
                                <input type="text" class="form-control" id="subjectName" name="subjectName">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="credits" class="form-label">Tín chỉ:</label>
                                <input type="text" class="form-control" id="credits" name="credits">
                            </div>


                            <div class="mb-3 col-6 ">
                                <label for="subjectName1" class="form-label">Khoa:</label>
                                <select class="form-select" aria-label="Default select example" id="subjectName1" name="subjectName1">
                                    <!-- Lấy dữ liệu từ bảng Office -->
                                    <?php
                                        $sql = "SELECT * FROM office ";
                                        $result = mysqli_query($con,$sql);
                
                                        
                                        if(mysqli_num_rows($result)){
                                            while($row=mysqli_fetch_assoc($result)){
                                            
                                            echo '<option value="'.$row['office_id'].'">'.$row['office_name'].'</option>';
                                            
                                            }
                                        }

                                    ?>
                                </select>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="btnSaveAdd" class="btn btn-primary w-auto form_btn mt-3">Lưu
                                    lại</button>
                                    <a href="./teacher_subject_information.php" id="btnCancelEditSubject" class="btn btn-danger w-auto form_btn mt-3">Hủy</a>
                            </div>

                        </form>
                    
        </div>
    </div>
</main>




<?php
include '../../partials-front/footer.php';
?>