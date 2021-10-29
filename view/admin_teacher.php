<?php
include '../partials-front/header.php';
include '../partials-front/header_nav.php';
include '../partials-front/admin_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            DANH SÁCH GIẢNG VIÊN
        </div>

        <div class="row mx-1">
            <button type="button" id="btnAddTeacher" class="btn btn-success w-auto my-2">
                Thêm Giảng Viên
            </button>
            <table class="table">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">STT</th>
                        <th scope="col">Giảng viên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Khoa</th>
                        <th scope="col">Môn giảng dạy</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td><button type="button" id="btnEditTeacher" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-edit"></i></button></td>
                        <td><button type="button" id="btnDelTeacher" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-trash-alt"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
include './admin_teacher_add.php';
include './admin_teacher_edit.php';
include './admin_teacher_delete.php';
include '../partials-front/footer.php';
?>