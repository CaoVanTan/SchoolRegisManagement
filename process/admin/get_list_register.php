<?php
    include '../../config/config.php';

    $sql = "SELECT list.*, std.*, sub.*, tc.*, c.*  FROM list_register list, student std, subject sub, teacher tc, class c
            WHERE list.std_id = std.std_id AND list.subject_id = sub.subject_id AND list.teacher_id = tc.teacher_id AND std.class_id = c.class_id";
    $result = mysqli_query($con, $sql);
?>
