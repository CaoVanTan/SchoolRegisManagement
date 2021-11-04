<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
include_once '../../config/config.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            SỬA THÔNG TIN MÔN HỌC
        </div>

        <form action="../../process/admin/edit_subject.php" method="post" class="row justify-content-start form_content">
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $sql_cr = "SELECT o.office_name, s.* FROM office o, subject s WHERE s.office_id = o.office_id AND s.subject_id = '$id'";
                    $result_cr = mysqli_query($con, $sql_cr);
                    $row_cr = mysqli_fetch_assoc($result_cr);
                }
            ?>

            <div class="mb-3 col-6">
                <label for="subjectID" class="form-label">Mã môn học:</label>
                <input type="text" readonly class="form-control" id="subjectID" name="subjectID" value="<?php echo $row_cr['subject_id'] ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Môn học:</label>
                <input type="text" class="form-control" id="subjectName" name="subjectName" value="<?php echo $row_cr['subject_name'] ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectCredits" class="form-label">Số tín chỉ:</label>
                <input type="number" class="form-control" id="subjectCredits" name="subjectCredits" value="<?php echo $row_cr['credits'] ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectOffice" class="form-label">Khoa:</label>
                <select class="form-select" aria-label="Default select example" name="subjectOffice">
                <?php
                    $sql = "SELECT * FROM office";
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result) > 0) {
                        echo '<option value="'.$row_cr['office_id'].'">'.$row_cr['office_name'].'</option>';

                        while($row = mysqli_fetch_assoc($result)) {
                            if($row_cr['office_id'] == $row['office_id']) {
                                echo null;
                            } else {
                                echo '<option value="'.$row['office_id'].'">'.$row['office_name'].'</option>';
                            }
                        }
                    }
                ?>
                </select>
            </div>

            <div class="text-end">
                <button type="submit" name="btnSaveEditSubject" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                <a href="../../view/admin/admin_subject.php" id="btnCancelEditSubject" class="btn btn-danger w-auto form_btn mt-3">Hủy</a>
            </div>
        </form>
    </div>
</section>