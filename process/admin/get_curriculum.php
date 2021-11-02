<?php
    include '../../config/config.php';

    $sql = "SELECT cur.*, sub.subject_name, sub.subject_id, off.office_name, cou.course_name FROM curriculum cur, subject sub, office off, course cou
            WHERE cur.office_id = off.office_id AND cur.subject_id = sub.subject_id AND cur.course_id = cou.course_id";
    $result = mysqli_query($con, $sql);
    echo $sql;
?>
