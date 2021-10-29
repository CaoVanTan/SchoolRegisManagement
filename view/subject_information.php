<?php
include '../partials-front/header.php';
include '../partials-front/header_nav.php';
include '../partials-front/teacher_menu.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">

                <h1 class="text-center">Thông tin Khóa học</h1>
                <a href="#" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm thông tin Khóa học</a>

                <table class="table mt-5 border border-1 table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Tín chỉ</th>
                            <th scope="col">Học phí(1 tín)</th>
                            <th scope="col">Thời gian bắt đầu</th>
                            <th scope="col">Thời gian kết thúc</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                    <!-- // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    // include '../config/config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    // $sql = "SELECT subject_id,subject_name,subject_credits,subject_tuition,time_start,time_end FROM subject";
                    // $result = mysqli_query($con,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    // if(mysqli_num_rows($result)>0){
                    //     while($row=mysqli_fetch_assoc($result)){
                    //         echo '<tr>';
                    //         echo '<th scope="row">'.$row['subject_id'].'</th>';
                    //         echo '<td>'.$row['subject_name'].'</td>';
                    //         echo '<td>'.$row['subject_credits'].'</td>';
                    //         echo '<td>'.$row['subject_tuition'].'</td>';
                    //         echo '<td>'.$row['time_start'].'</td>';
                    //         echo '<td>'.$row['time_end'].'</td>';
                    //         echo '<td><a href="editEmployee.php?id='.$row['subject_id'].'"><i class="fas fa-user-edit"></i></a></td>';
                    //         echo '<td><a href="deleteEmployee.php?id='.$row['subject_id'].'"><i class="fas fa-user-times"></i></a></td>';
                    //         echo '</tr>';
                    //     }
                    } -->
                

                        <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                    </tbody>
                </table>


            </div>
        </div>
    </div>

</main>

<?php
include '../partials-front/footer.php';
?>