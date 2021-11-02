<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">
        
                <a href="../../view/teacher/teacher_subject_information.php"
                    class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center ">


                    <span class="icon"> Thông tin Khóa học </span>





                </a>
                <a href="../../view/teacher/teacher_student_register.php"
                    class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center">
                     Sinh viên đăng kí 
                </a>
                <a href="../../view/teacher/teacher_information.php"
                    class="manage_item col-5 btn btn-primary my-4 mx-3 d-flex justify-content-center align-items-center">
                     Thông tin cá nhân 
                </a>

            </div>
        </div>
    </div>
</main>

<?php
include '../../partials-front/footer.php';
?>