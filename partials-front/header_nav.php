<header class="header position-fixed top-0 w-100" style="z-index: 1000;">
    <div class="container h-100 d-flex justify-content-between align-items-center">
        <a href="#" class="logo">
            <img class="logo-img" src="http://tlus.edu.vn/wp-content/uploads/2018/06/LogoDHTL-300x300.png" alt="Logo">
        </a>

        <div class="dropdown h-100 menu">
            <button class="btn dropdown-toggle h-100 text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                session_start();

                $user_name = $_SESSION['loginSuccess'];
                    echo $user_name;
                    echo $_SESSION['loginSuccess'];
                    // echo 'abc';
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