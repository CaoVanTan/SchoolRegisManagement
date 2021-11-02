<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/admin_menu.php';
?>

<main class="col-10 float-end">
    <div class="container">
        <div class="row title">
            CHƯƠNG TRÌNH HỌC
        </div>

        <div class="row mx-1">
            <button type="button" id="btnAddSubject" class="btn btn-success w-auto my-2">
                Thêm Chương Trình Học
            </button>
            <table class="table">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">STT</th>
                        <th scope="col">Mã môn học</th>
                        <th scope="col">Tên môn học</th>
                        <th scope="col">Năm học</th>
                        <th scope="col">Học kỳ</th>
                        <th scope="col">Khóa học</th>
                        <th scope="col">Khoa</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include '../../process/admin/get_curriculum.php';

                    $stt = 1;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo    '<tr>
                                    <th scope="row">' . $stt++ . '</th>
                                    <td>' . $row['subject_id'] . '</td>
                                    <td>' . $row['subject_name'] . '</td>
                                    <td>' . $row['school_year'] . '</td>
                                    <td>' . $row['semester'] . '</td>
                                    <td>' . $row['course_name'] . '</td>
                                    <td>' . $row['office_name'] . '</td>
                                    <td><a href="./admin_subject_edit.php?id=' . $row['subject_id'] . '" id="btnEditSubject" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-edit"></i></a></td>
                                    <td><a href="../../process/admin/delete_subject.php?id=' . $row['subject_id'] . '" id="btnDelSubject" class="d-block w-100 border-0 text-start bg-transparent"><i class="text-dark ms-2 fas fa-trash-alt"></i></a></td>
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
include './admin_subject_add.php';
include '../../partials-front/footer.php';
?>