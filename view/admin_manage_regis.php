<?php
include '../partials-front/header.php';
include '../partials-front/header_nav.php';
include '../partials-front/admin_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            DANH SÁCH SINH VIÊN
        </div>

        <div class="row mx-1">
            <button type="button" id="btnAddStudent" class="btn btn-success w-auto my-2">
                Thêm Sinh Viên
            </button>
            <table class="table">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">STT</th>
                        <th scope="col">Mã sinh viên</th>
                        <th scope="col">Tên sinh viên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Khoa</th>
                        <th scope="col">Lớp</th>
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
                        <td>@mdo</td>
                        <td><button type="button" id="btnEditStd" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-edit"></i></button></td>
                        <td><button type="button" id="btnDelStd" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-trash-alt"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
include '../partials-front/footer.php';
?>