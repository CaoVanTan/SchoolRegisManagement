<?php 
     // Quy trình 4 bước
    // Bước 01: Đã tạo sẵn, gọi lại thôi
    include '../../config/config.php';
     //Bước 02: Thực hiện TRUY VẤN
     $sql = "SELECT t.teacher_id,t.teacher_name,t.teacher_gender,t.teacher_birthday,t.teacher_address,t.teacher_phone,t.teacher_email,t.teacher_pass FROM teacher t ";
     $result = mysqli_query($con,$sql); //Lưu kết quả trả về vào result
     //Bước 03: Phân tích và xử lý kết quả
     $gender;
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo '<tr>';
             echo '<th scope="row">'.$row['teacher_id'].'</th>';
             echo '<td>'.$row['teacher_name'].'</td>';
             
             if($row['teacher_gender']){
                 $gender='Nam';
             }else{
                 $gender='Nữ';
             }
             echo '<td>'.$gender.'</td>';
             echo '<td>'.$row['teacher_birthday'].'</td>';
             echo '<td>'.$row['teacher_address'].'</td>';
             echo '<td>'.$row['teacher_phone'].'</td>';
             echo '<td>'.$row['teacher_email'].'</td>';
             echo '<td>'.$row['teacher_pass'].'</td>';
             

             echo '</tr>';
         }
     } 
?>