<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="mt-3 row justify-content-start">
            <div class="col-6 px-4">
                <a href="./student_info.php" class="manage_item d-block btn btn-primary my-4">
                    Thông tin cá nhân
                </a>
            </div>

            <div class="col-6 px-4">
                <a href="./student_subject_info.php" class="manage_item d-block btn btn-primary my-4">
                    Thông tin khóa học
                </a>
            </div>

            <div class="col-6 px-4">
                <a href="./student_course_registration.php" class="manage_item d-block btn btn-primary my-4">
                    Đăng ký học phần
                </a>
            </div>

            <div class="col-6 px-4">
                <a href="./student_registration_results.php" class="manage_item d-block btn btn-primary my-4">
                    Kết quả đăng ký học
                </a>
            </div>

        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>