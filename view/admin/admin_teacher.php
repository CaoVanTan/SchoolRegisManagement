<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            DANH SÁCH GIẢNG VIÊN
        </div>

        <div class="row mx-1">
            <button type="button" class="btnAdd btn btn-success w-auto my-2">
                Thêm Giảng Viên
            </button>
            <table class="table">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">STT</th>
                        <th scope="col">Tên giảng viên</th>
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
                    <?php
                    include '../../process/admin/get_teacher.php';

                    $stt = 1;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['teacher_gender'] == 1) {
                                $gender = 'Nam';
                            } else {
                                $gender = 'Nữ';
                            }

                            $date = explode('-', $row['teacher_birthday']);
                            $birthday = $date[2] . '-' . $date[1] . '-' . $date[0];
                            echo    '<tr>
                                    <th scope="row">' . $stt++ . '</th>
                                    <td>' . $row['teacher_name'] . '</td>
                                    <td>' . $gender . '</td>
                                    <td>' . $birthday . '</td>
                                    <td>' . $row['teacher_address'] . '</td>
                                    <td>' . $row['teacher_phone'] . '</td>
                                    <td>' . $row['teacher_email'] . '</td>
                                    <td>' . $row['office_name'] . '</td>
                                    <td>' . $row['subject_name'] . '</td>
                                    <td><a href="./admin_teacher_edit.php?id=' . $row['teacher_id'] . '" id="btnEditTeacher" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-edit"></i></a></td>
                                    <td><a href="../../process/admin/delete_teacher.php?id=' . $row['teacher_id'] . '" id="btnDelTeacher" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-trash-alt"></i></a></td>
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
include './admin_teacher_add.php';
include '../../partials-front/footer.php';
?>