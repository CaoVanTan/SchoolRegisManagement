<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            Quản Lý Hệ Thống
        </div>

        <div class="row justify-content-around my-4">
            <div class="col-3 px-4">
                <a href="./admin_student.php" class="manage_item d-block bg-success text-center">
                    Quản lý Sinh viên
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./admin_teacher.php" class="manage_item d-block bg-primary text-center">
                    Quản lý Giảng viên
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="./admin_subject.php" class="manage_item d-block bg-warning text-center">
                    Quản lý Môn học
                </a>
            </div>
            <div class="col-3 px-4">
                <a href="#" class="manage_item d-block bg-secondary text-center">
                    Quản lý Đăng ký học
                </a>
            </div>
        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>