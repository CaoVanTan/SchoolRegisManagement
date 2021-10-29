<?php
include '../partials-front/header.php';
include '../partials-front/header_student.php';
include '../partials-front/student_menu.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="mt-5 row justify-content-between">
                <a href="./student_info.php" class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center">
                    Thông tin cá nhân
                </a>
                <a href="./student_subject_info.php" class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center">
                    Thông tin khóa học
                </a>
                <a href="./student_course_registration.php" class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center">
                    Đăng ký học phần
                </a>
                <a href="./student_registration_results.php" class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center">
                    Kết quả đăng ký học
                </a>
            </div>
        </div>
    </div>
</main>

<?php
include '../partials-front/footer.php';
?>