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
                    <form class="flex-row align-items-center col-8" action="./student_find_subject.php" method="post">
                        <h5 class="mb-4">DANH SÁCH HỌC PHẦN</h5>
                        <label for="search" class="w-auto">Tìm kiếm:</label>
                        <input type="text" id="search" name="search" class="w-auto mx-2 px-2" style="padding-top:2px; padding-bottom:2px;" placeholder="Nhập tên môn học ">
                        <input type="submit" class="btn-secondary w-auto ms-3 p-1 border-0 rounded" name="submit" value="Tìm kiếm">
                    </form>

                    <form class="row flex-row align-items-center col-4" action="" method="post">
                        <?php
                        include_once '../../config/config.php';
                        $sql = 'SELECT MAX(id) as maxId, MAX(start_time) as maxStart, MAX(end_time) as maxEnd FROM regis_period';
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);

                            $dates_start = explode('-', $row['maxStart']);
                            $date_start = $dates_start[2] . '-' . $dates_start[1] . '-' . $dates_start[0];

                            $dates_end = explode('-', $row['maxEnd']);
                            $date_end = $dates_end[2] . '-' . $dates_end[1] . '-' . $dates_end[0];

                            $time_current = date("Y/m/d");

                            echo    '<div id="date_start">Ngày bắt đầu: ' . $date_start . '</div>
                                    <div id="date_end">Ngày kết thúc: ' . $date_end . '</div>';
                            if($time_current <= $date_end && $time_current >= $date_start) {
                                echo $time_current;
                            }

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
                          $username = $_SESSION['loginSuccess'] ;
                       $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN office a on a.office_id = e.office_id INNER JOIN class c on c.office_id = a.office_id  INNER JOIN student b on c.class_id = b.class_id Where b.std_id = '$username'";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>',
                                ' <th >' . $i++ . '</th>',
                                '<td>' . $row['subject_id'] . '</td>',
                                '<td>' . $row['subject_name'] . '</td>',
                                '<td>' . $row['teacher_name'] . '</td>',
                                '<td><a href="../../process/student/student_registration.php?subject_id=' .  $row['subject_id'] . '"><i class="fas fa-user-plus"></i></a></td>',
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