<?php
include '../partials-front/header.php';
include '../partials-front/header_student.php';
include '../partials-front/student_menu.php';
?>
<div class="col-10 float-end">
    <div class="container">
        <div class="mt-5 ms-2 row">
            <h2 style="text-align: center">ĐĂNG KÝ HỌC</h2>
            <div class="mt-5 col-md-12">
                <h5 class="mb-4">DANH SÁCH HỌC PHẦN</h5>
                Tìm kiếm: <input type="text">
                <input type="button" class="btn-secondary" value="Tìm kiếm">
            </div>
        </div>
        <div class="mt-5 ms-2 row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">STT</th>
                            <th scope="col">Môn học</th>
                            <th scope="col">Giảng viên</th>
                            <th scope="col">Số tín chỉ</th>
                            <th scope="col">Học phí(1 tín)</th>
                            <th scope="col">Đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>
                                <input type="checkbox" name="a" id="">
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>