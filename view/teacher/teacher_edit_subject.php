<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
include '../../config/config.php';
?>


<main class="d-flex justify-content-end">
    <div class="col-10 ">
        <div class="container">
            <div class="row justify-content-between">
                <section id="overlayAddTeacher" class="overlay">
                    <div id="modelAddTeacher" class="container form-container">
                        <form action="../../process/teacher/teacher_edit_subject.php" method="post"
                            class="row justify-content-start form_content">
                            <h1 class="text-center">Chỉnh sửa khóa học</h1>
                            <?php
                            if(isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $sql_cr = "SELECT subject_id FROM subject WHERE subject_id = '$id'";
                            $result_cr = mysqli_query($con, $sql_cr);
                            $row_cr = mysqli_fetch_assoc($result_cr);
                }
            ?>

                            <div class="mb-3 col-6">
                                <label for="subjectID" class="form-label">Mã môn học:</label>
                                <input type="text" readonly class="form-control" id="subjectID"
                                    value="<?php echo $row_cr['subject_id']; ?>" name="subjectID">
                            </div>



                            <div class="mb-3 col-6">
                                <label for="subjectName" class="form-label">Tên môn học:</label>
                                <input type="text" class="form-control" id="subjectName" name="subjectName">
                            </div>

                            <div class="mb-3 col-6 ">
                                <label for="subjectName1" class="form-label">Khoa:</label>
                                <select class="form-select" aria-label="Default select example" id="subjectName1"
                                    name="subjectName1">
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
                                <button type="submit" name="btnSaveEdit"
                                    class="btn btn-primary w-auto form_btn mt-3">Lưu
                                    lại</button>
                                <button type="" id="btnCancelAddTeacher"
                                    class="btn btn-danger w-auto form_btn mt-3">Hủy</button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>





<?php
include '../../partials-front/footer.php';
?>