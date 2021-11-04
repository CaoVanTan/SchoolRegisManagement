<?php 
     // Quy trình 4 bước
    // Bước 01: Đã tạo sẵn, gọi lại thôi
    include '../../config/config.php';
     //Bước 02: Thực hiện TRUY VẤN
     $sql = "SELECT t.teacher_id,t.teacher_name,t.teacher_gender,t.teacher_birthday,t.teacher_address,t.teacher_phone,t.teacher_email,t.teacher_pass FROM teacher t ";
     $result = mysqli_query($con,$sql); //Lưu kết quả trả về vào result
     //Bước 03: Phân tích và xử lý kết quả
     $gender;
     $row=mysqli_fetch_assoc($result);
?>