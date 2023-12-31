<?php
session_start();
if (!isset($_SESSION['lan'])) {
    $_SESSION['lan'] = 'CN';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <!--=====TITLE=======-->
    <title>Future Wing</title>

    <!--=====CSS=======-->
    <?php include('assets/include/css.php'); ?>
</head>

<body>

<!--=====progress START=======-->

<div class="paginacontainer">

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

</div>

<!--=====progress END=======-->


<!--=====HEADER START=======-->
<?php include('assets/include/header.php'); ?>
<!--=====HEADER END=======-->

<!--=====Mobile header start=======-->
<?php include('assets/include/mobile_menu.php'); ?>
<!--=====Mobile header end=======-->

<!--=====Hero start=======-->
<div class="main-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
                    <div class="carousel-inner">
                        <?php
                        if ($_SESSION['lan'] == 'EN') {
                            ?>
                            <div class="carousel-item active">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    At Future Wing we leverage trust structures <span class="grad fs-1"><b>to
                                    preserve, arrange, and invest</b></span> in digital assets.</h1>

                            </div>

                            <?php
                        } else {
                            ?>
                            <div class="carousel-item active">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    在东融财富，我们<span class="grad fs-1">我们利用信托结构来保护、分配和投资</span> 数字资产。</h1>

                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 text-center d-lg-block d-md-block d-none">
                <div class="home1-header-images">
                    <div class="home1-header-img2 aniamtion-key-5" data-aos="zoom-out" data-aos-duration="1400">
                        <img src="assets/img/image/home1-main2.png" alt="">
                    </div>
                    <div class="home1-header-img3 aniamtion-key-1">
                        <img src="assets/img/shapes/header1-shape.svg" alt="">
                    </div>
                    <div class="home1-header-img4 aniamtion-key-2">
                        <img src="assets/img/shapes/h1-spahe2.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=====Hero end=======-->


<!--=====choose us start=======-->
<div class="choose1 sp4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <?php
                if ($_SESSION['lan'] == 'EN') {
                    ?>
                    <div class="hadding1">
                        <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                            data-aos-duration="1300">One-stop asset management solutions</h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">Future Wing, as an all-rounded financial
                            platform,
                            we have subsidiaries covering trustee service, asset management, custody service, venture
                            capital and Real-World Asset Acquisition, and all operate with licensure, complying with
                            lawful,
                            secure, and dependable practices.
                        </p>
                    </div>
                    <div class="border1"></div>
                    <div class="choose-box-all" data-aos="fade-right" data-aos-duration="800">
                        <div class="choose-box-icon choose-box-icon-span">
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                        <div class="hadding1 choose1-hadding">
                            <p>Our asset security planning caters to bank investigations on anti-money laundering
                                activities
                                pertaining to digital and fiat money transactions. </p>
                        </div>
                    </div>
                    <div class="space24"></div>
                    <div class="choose-box-all" data-aos="fade-right" data-aos-duration="1200">
                        <div class="choose-box-icon choose-box-icon-span">
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                        <div class="hadding1 choose1-hadding">
                            <p>As experts in digital asset management, we help our clients to allocate their digital
                                assets
                                into physical assets, positioning our clients as primary beneficiaries under the legally
                                formed trust structure.
                            </p>
                        </div>
                    </div>

                    <?php
                } else {
                    ?>
                    <div class="hadding1">
                        <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                            data-aos-duration="1300">一站式资产管理解决方案</h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">
                            东融财富作为一家全方位的金融平台，拥有多个子公司，涵盖受托人服务、资产管理、托管服务、风险投资和现实世界资产收购等领域，并且所有业务都持有相应的许可证，遵守合法、安全和可靠的实践标准。

                        </p>
                    </div>
                    <div class="border1"></div>
                    <div class="choose-box-all" data-aos="fade-right" data-aos-duration="800">
                        <div class="choose-box-icon choose-box-icon-span">
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                        <div class="hadding1 choose1-hadding">
                            <p>我们的资产安全规划满足银行对数字货币和法定货币交易中的合规要求。</p>
                        </div>
                    </div>
                    <div class="space24"></div>
                    <div class="choose-box-all" data-aos="fade-right" data-aos-duration="1200">
                        <div class="choose-box-icon choose-box-icon-span">
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                        <div class="hadding1 choose1-hadding">
                            <p>作为数字资产管理的专业人士，我们帮助客户将其数字资产配置到实物资产中，使客户成为在合法成立的信托结构下的主要受益人。
                            </p>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>


            <div class="col-lg-6">
                <div class="choose-image-all text-end">
                    <?php
                    if ($_SESSION['lan'] == 'EN') {
                        ?>
                        <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                            <img src="assets/img/new/Truste.png" alt="">
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                            <img src="assets/img/new/TrusteCN.png" alt="">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!--=====choose us end=======-->


<!--=====Footer start=======-->
<footer class="footer-area font-f-2">
    <div class="container">
        <div class="row align-items-center copyright2">
            <div class="col-lg-12 text-center">
                <p class="font-16 weight-400 font-f-2 line-height-16 pera-c-1">
                    © 2023 Future Wing. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<!--=====Footer end=======-->


<!--=====JS=======-->
<?php include('assets/include/js.php'); ?>
</body>
</html>
