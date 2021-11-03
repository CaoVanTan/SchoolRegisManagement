<?php
session_start();
include "../config/config.php";

if (isset($_POST['btnLogin'])) {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPass'];

    $sql_std = "SELECT * FROM student WHERE std_id = '$username'";
    $result_std = mysqli_query($con, $sql_std);

    $sql_teacher = "SELECT * FROM teacher WHERE teacher_email = '$username'";
    $result_teacher = mysqli_query($con, $sql_teacher);

    // Kiểm tra và xử lý kết quả
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['loginSuccess'] = $username;
        header("Location: ../view/admin/admin_dashboard.php");
    } else if (mysqli_num_rows($result_std) > 0) {
        $row_std = mysqli_fetch_assoc($result_std);
        $pass_hash_std = $row_std['std_pass'];

        if (password_verify($password, $pass_hash_std)) {
            $_SESSION['loginSuccess'] = $username;
            header("Location: ../view/student/student_dashboard.php");
        } else {
            header("Location: ../view/login.php");
        }
    } else if (mysqli_num_rows($result_teacher) > 0) {
        $row_teacher = mysqli_fetch_assoc($result_teacher);
        $pass_hash_teacher = $row_teacher['teacher_pass'];

        if (password_verify($password, $pass_hash_teacher)) {
            $_SESSION['loginSuccess'] = $username;
            header("Location: ../view/teacher/teacher_dashboard.php");
        } else {
            header("Location: ../view/login.php");
        }
    } else {
        header("Location: ../view/login.php");
    }

    mysqli_close($con);
}