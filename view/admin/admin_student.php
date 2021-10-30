<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
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
                        <th scope="col">Lớp</th>
                        <th scope="col">Môn học</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../../process/admin/get_student.php';

                        $stt = 1;
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <th scope="row">'.$stt++.'</th>
                                    <td>'.$row['std_id'].'</td>
                                    <td>'.$row['std_name'].'</td>
                                    <td>'.$row['std_gender'].'</td>
                                    <td>'.$row['std_birthday'].'</td>
                                    <td>'.$row['std_address'].'</td>
                                    <td>'.$row['std_phone'].'</td>
                                    <td>'.$row['std_email'].'</td>
                                    <td>'.$row['class_name'].'</td>
                                    <td>'.$row['subject_name'].'</td>
                                    <td>
                                        <button type="button" id="btnEditStd" class="d-block w-100 border-0 text-start bg-transparent">
                                            <i class="text-dark ms-2 fas fa-edit"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" id="btnDelStd" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-trash-alt"></i></button></td>
                                    </tr>';
                            }
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
include './admin_student_add.php';
include './admin_student_edit.php';
include './admin_student_delete.php';
include '../../partials-front/footer.php';
?>