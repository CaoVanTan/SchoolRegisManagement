<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title justify-content-center">
            MỞ ĐĂNG KÝ HỌC CHO SINH VIÊN
        </div>

        <div class="row mx-1">
            <form method="post" action="../../process/admin/open_register.php" class="row justify-content-center form_content">
                <div class="mb-3 col-6">
                    <label for="startTime" class="form-label">Thời gian bắt đầu đăng ký:</label>
                    <input type="date" required class="form-control text-uppercase" id="startTime" name="startTime">
                </div>
                <div class="mb-3 col-6">
                    <label for="endTime" class="form-label">Thời gian kết thúc đăng ký:</label>
                    <input type="date" required class="form-control text-uppercase" name="endTime" id="endTime">
                </div>

                <button type="submit" id="btnOpenRegis" name="btnOpenRegis" class="btn btn-success w-auto my-2">
                    Lưu lại
                </button>
            </form>
        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>