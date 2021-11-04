<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['loginSuccess'])) {
    header("Location: ../login.php");
}
?>
<header class="header position-fixed top-0 w-100">
    <div class="container h-100 d-flex justify-content-between align-items-center">
        <a href="#" class="logo">
            <img class="logo-img" src="http://tlus.edu.vn/wp-content/uploads/2018/06/LogoDHTL-300x300.png" alt="Logo">
        </a>

        <div class="dropdown h-100 menu">
            <button class="btn dropdown-toggle h-100 text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }

                if (isset($_SESSION['loginSuccess'])) {
                    $user_name = $_SESSION['loginSuccess'];
                    include_once '../../config/config.php';

                    $sql_std = "SELECT * FROM student WHERE std_id = '$user_name'";
                    $result_std = mysqli_query($con, $sql_std);

                    $sql_teacher = "SELECT * FROM teacher WHERE teacher_email = '$user_name'";
                    $result_teacher = mysqli_query($con, $sql_teacher);

                    if (mysqli_num_rows($result_std) > 0) {
                        $row_std = mysqli_fetch_assoc($result_std);
                        echo $row_std['std_name'];
                    } else if (mysqli_num_rows($result_teacher) > 0) {
                        $row_teacher = mysqli_fetch_assoc($result_teacher);
                        echo $row_teacher['teacher_name'];
                    } else {
                        echo "Admin";
                    }
                }
                ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="../../process/logout.php">
                        <i class="fas fa-power-off me-2"></i>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>