<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
include_once '../../config/config.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            SỬA THÔNG TIN CHƯƠNG TRÌNH HỌC
        </div>

        <form action="../../process/admin/edit_curri.php" method="post" class="row justify-content-start form_content">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql_cr = "SELECT cur.*, sub.subject_name, off.office_name, c.course_id FROM curriculum cur, subject sub, office off, course c
                        WHERE cur.office_id = off.office_id AND cur.subject_id = sub.subject_id AND cur.course_id = c.course_id AND cur.subject_id = '$id'";
                $result_cr = mysqli_query($con, $sql_cr);
                $row_cr = mysqli_fetch_assoc($result_cr);
            }
            ?>

            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Tên môn học:</label>
                <select id="subjectName" class="form-select" aria-label="Default select example" name="subjectName">
                    <?php
                    $sql = "SELECT * FROM subject";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<option value="' . $row_cr['subject_id'] . '">' . $row_cr['subject_name'] . '</option>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row_cr['subject_id'] == $row['subject_id']) {
                                echo null;
                            } else {
                                echo '<option value="' . $row['subject_id'] . '">' . $row['subject_name'] . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="schoolYear" class="form-label">Năm học:</label>
                <input type="number" min="2010" max="2099" step="1" value="<?php echo $row_cr['school_year'] ?>" class="form-control" id="schoolYear" name="schoolYear">
            </div>
            <div class="mb-3 col-6">
                <label for="semester" class="form-label">Học kì:</label>
                <input type="number" min="1" max="2" step="1" value="<?php echo $row_cr['semester'] ?>" class="form-control" id="semester" name="semester">
            </div>
            <div class="mb-3 col-6">
                <label for="courseId" class="form-label">Khóa học:</label>
                <select class="form-select" aria-label="Default select example" name="courseId">
                    <?php
                    $sql = "SELECT * FROM course";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<option value="' . $row_cr['course_id'] . '">' . $row_cr['course_id'] . '</option>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row_cr['course_id'] == $row['course_id']) {
                                echo null;
                            } else {
                                echo '<option value="' . $row['course_id'] . '">' . $row['course_id'] . '</option>';
                            }
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

                    if (mysqli_num_rows($result) > 0) {
                        echo '<option value="' . $row_cr['office_id'] . '">' . $row_cr['office_name'] . '</option>';

                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row_cr['office_id'] == $row['office_id']) {
                                echo null;
                            } else {
                                echo '<option value="' . $row['office_id'] . '">' . $row['office_name'] . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="text-end">
                <button type="submit" name="btnSaveEditCurri" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                <a href="../../view/admin/admin_curriculum.php" id="btnCancelEditSubject" class="btn btn-danger w-auto form_btn mt-3">Hủy</a>
            </div>
        </form>
    </div>
    </section>