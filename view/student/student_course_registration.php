<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/student_menu.php';
if (!isset($_SESSION)) {
    session_start();
}
?>
<main class="col-10 float-end">
    <div class="container">
        <div class="mt-5 ms-2 row">
            <h2 style="text-align: center">ĐĂNG KÝ HỌC</h2>
            <div class="mt-5 col-md-12">
                <div class="row">
                    <form class="flex-row align-items-center col-6" action="./student_find_subject.php" method="post">
                        <h5 class="mb-4">DANH SÁCH HỌC PHẦN</h5>
                        <label for="search" class="w-auto">Tìm kiếm:</label>
                        <input type="text" id="search" name="search" class="w-auto mx-2 px-2" style="padding-top:2px; padding-bottom:2px;" placeholder="Nhập tên môn học ">
                        <input type="submit" class="btn-secondary w-auto ms-3 p-1 border-0 rounded" name="submit" value="Tìm kiếm">
                    </form>

                    <form class="row flex-row align-items-center col-6" action="" method="post">
                        <?php
                        include_once '../../config/config.php';
                        $sql_maxId = 'SELECT MAX(id) as maxId FROM regis_period';
                        $result_maxId = mysqli_query($con, $sql_maxId);
                        $row_maxId = mysqli_fetch_assoc($result_maxId);

                        $sql = 'SELECT * FROM regis_period WHERE id = ' . $row_maxId['maxId'] . '';
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);

                            $dates_start = explode('-', $row['start_time']);
                            $date_start = $dates_start[2] . '-' . $dates_start[1] . '-' . $dates_start[0];

                            $dates_end = explode('-', $row['end_time']);
                            $date_end = $dates_end[2] . '-' . $dates_end[1] . '-' . $dates_end[0];

                            $time_current = date("Y/m/d");

                            echo    '<div class="col-6">
                                        <div id="school_year" class="mb-3">Năm học: <b>' . $row['school_year'] . '</b></div>
                                        <div id="semester">Học kỳ: <b>' . $row['semester'] . '</b></div>
                                    </div>';
                            echo    '<div class="d-flex flex-column col-6">
                                        <div class="align-items-center">
                                            <span class="me-1">Ngày bắt đầu: </span>
                                            <input class="date_start mb-3 w-50 border-0 fw-bold" style="background-color: #f3f5f9;" type="text" value="' . $date_start . '">
                                        </div>
                                        <div class="align-items-center">
                                            <span class="">Ngày kết thúc: </span>
                                            <input class="date_end w-50 border-0 fw-bold" style="background-color: #f3f5f9;" type="text" value="' . $date_end . '">
                                        </div>
                                    </div>';
                        }
                        ?>
                    </form>
                </div>

            </div>
        </div>
        <div class="mt-5 ms-2 row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">STT</th>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Môn học</th>
                            <th scope="col">Giảng viên</th>
                            <th scope="col">Đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $username = $_SESSION['loginSuccess'];
                        $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN office a on a.office_id = e.office_id
                                INNER JOIN class c on c.office_id = a.office_id  INNER JOIN student b on c.class_id = b.class_id Where b.std_id = '$username'";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>',
                                ' <th >' . $i++ . '</th>',
                                '<td>' . $row['subject_id'] . '</td>',
                                '<td>' . $row['subject_name'] . '</td>',
                                '<td>' . $row['teacher_name'] . '</td>',
                                '<td>
                                    <a id="" class="getClass register" href="../../process/student/student_registration.php?subject_id=' .  $row['subject_id'] . '">
                                        <i class="ms-3 fas fa-user-plus"></i>
                                    </a>
                                </td>',
                                '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>