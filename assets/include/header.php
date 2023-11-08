<header>
    <div class="header-area header-area-all d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo home1-site-logo">
                            <a href="index.php"
                            ><img src="assets/img/new/logo.png" alt=""/>
                            </a>
                        </div>

                        <div class="main-menu-ex main-menu-ex1">
                            <ul class="font-f-2">
                                <li><a href="index.php"><?php if($_SESSION['lan'] == 'EN') echo 'Home'; else echo '主页';?></a>
                                </li>
                                <li><a href="services.php"><?php if($_SESSION['lan'] == 'EN') echo 'Services'; else echo '服务';?></a>
                                </li>
                                <li><a href="product.php"><?php if($_SESSION['lan'] == 'EN') echo 'Products'; else echo '产品';?></a>
                                </li>
                                <li><a href="security.php"><?php if($_SESSION['lan'] == 'EN') echo 'Security'; else echo '安全';?></a>
                                </li>
                                <li class="has-dropdown"><a href="#">Language <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="assets/include/lang.php?lan=EN">English</a></li>
                                        <li><a href="assets/include/lang.php?lan=CN">Chinese</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div class="home2-header-buttons">
                            <div class="button">
                                <a href="login.php" class="button1"><?php if($_SESSION['lan'] == 'EN') echo 'Login / Register'; else echo '登录/注册';?><span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="mobile-menu-bar d-lg-none">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>