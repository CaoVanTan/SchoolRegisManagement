<?php
    include_once '../../config/config.php';

    $sql = "SELECT cur.*, sub.subject_name, off.office_name, c.course_id FROM curriculum cur, subject sub, office off, course c
            WHERE cur.office_id = off.office_id AND cur.subject_id = sub.subject_id AND cur.course_id = c.course_id";
    $result = mysqli_query($con, $sql);
?>
