<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
?>
<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">
                <h1 class="text-center">Danh sách sinh viên Đăng kí</h1>
                <table class="table mt-5 border border-1 table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày sinh</th>
                            
                            <th scope="col">Email</th>
                            
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Lớp</th>
                            <?php 
                            include '../../process/teacher/teacher_student_register.php';
                            
                            
                            
                            
                            ?>

                        </tr>
                    </thead>
                    <tbody>



            </div>
        </div>
    </div>

</main>






<?php
include '../../partials-front/footer.php';
?>