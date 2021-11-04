<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['loginSuccess'])) {
    header("Location: ../login.php");
}
?>

<main class="col-10 float-end">
    <div class="container">

        <div class="row justify-content-start">
            <div class="col-3 px-4">
                <a href="./admin_student.php" class="manage_item my-4 d-block bg-primary text-center">
                    Quản lý Sinh viên
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./admin_teacher.php" class="manage_item my-4 d-block bg-primary text-center">
                    Quản lý Giảng viên
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./admin_subject.php" class="manage_item my-4 d-block bg-primary text-center">
                    Quản lý Môn học
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./admin_curriculum.php" class="manage_item my-4 d-block bg-primary text-center">
                    Quản lý Chương trình học
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./list_student_register.php" class="manage_item my-4 d-block bg-primary text-center">
                    D/S Sinh viên đăng ký học
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./open_register.php" class="manage_item my-4 d-block bg-primary text-center">
                    Mở đợt đăng ký học
                </a>
            </div>
        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>