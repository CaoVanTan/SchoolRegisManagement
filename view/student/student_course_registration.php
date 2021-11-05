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
                            echo    '<div class="col-6">
                                        <div id="date_start" class="mb-3">Ngày bắt đầu: <b>' . $date_start . '</b></div>
                                        <div id="date_end">Ngày kết thúc: <b>' . $date_end . '</b></div>
                                    </div>';
                            // if ($time_current > $date_end && $time_current < $date_start) {
                            //     echo "<script>
                            //     let dis = document.getElementById('register');

                            //     if (dis.className === 'register'){
                            //         dis.className = 'disabled';
                            //     }
                            //     </script>";
                            //     // else {
                            //     //     dis.className = 'active';
                            // }
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
                        $sql = "SELECT * FROM  teacher e  INNER JOIN subject o on e.subject_id = o.subject_id INNER JOIN curriculum a on o.subject_id = a.subject_id ";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $sql1 = 'SELECT * FROM regis_period';
                                $result1 = mysqli_query($con,$sql1);
                                $row1 = mysqli_fetch_array($result1);
                                    if($row['school_year'] == $row1['school_year'] && $row['semester'] == $row1['semester'])
                                   {
                                echo '<tr>',
                                ' <th >' . $i++ . '</th>',
                                '<td>' . $row['subject_id'] . '</td>',
                                '<td>' . $row['subject_name'] . '</td>',
                                '<td>' . $row['teacher_name'] . '</td>',
                                '<td>
                                    <a id="register" class="ms-3 register" href="../../process/student/student_registration.php?subject_id=' .  $row['subject_id'] . '">
                                        <i class="fas fa-user-plus"></i>
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