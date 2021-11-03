<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-6 px-4">
                    <a href="./teacher_subject_information.php" class="manage_item my-4 d-block bg-primary text-center">
                        Thông tin môn học
                    </a>
                </div>

                <div class="col-6 px-4">
                    <a href="./teacher_student_register.php" class="manage_item my-4 d-block bg-primary text-center">
                        Sinh viên đăng kí
                    </a>
                </div>

                <div class="col-6 px-4">
                    <a href="./teacher_information.php" class="manage_item my-4 d-block bg-primary text-center">
                        Thông tin cá nhân
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>