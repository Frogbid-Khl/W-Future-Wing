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
                                    <span class="grad fs-1"><b>Securing</b></span> Your Assets with Our Professional
                                    Trust
                                    Structure</h1>
                                <p class="text-white fs-3 d-block w-100 pt-3" data-aos="fade-right"
                                   data-aos-duration="800">
                                    One Stop Solutions – Your Crypto Private Banker</p>
                            </div>
                            <div class="carousel-item">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    <span class="grad fs-1"><b>Unleashing</b></span> the Potential of Crypto Investment
                                    in
                                    the Digital World</h1>
                                <p class="text-white fs-3 d-block w-100 pt-3" data-aos="fade-right"
                                   data-aos-duration="800">
                                    One Stop Solutions – Your Crypto Private Banker</p>
                            </div>
                            <div class="carousel-item">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    <span class="grad fs-1"><b>Navigating</b></span> Navigating the Future of Asset
                                    Management with Us</h1>
                                <p class="text-white fs-3 d-block w-100 pt-3" data-aos="fade-right"
                                   data-aos-duration="800">
                                    One Stop Solutions – Your Crypto Private Banker</p>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="carousel-item active">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    通过我们的专业信托结构保护您的资产</h1>
                                <p class="text-white fs-3 d-block w-100 pt-3" data-aos="fade-right"
                                   data-aos-duration="800">
                                    站式解决方案 – 为您提供专业的资产管理服务</p>
                            </div>
                            <div class="carousel-item">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    在数字世界中释放加密货币投资的潜力</h1>
                                <p class="text-white fs-3 d-block w-100 pt-3" data-aos="fade-right"
                                   data-aos-duration="800">
                                    站式解决方案 – 为您提供专业的资产管理服务</p>
                            </div>
                            <div class="carousel-item">
                                <h1 class="text-white fs-3 d-block w-100" data-aos="fade-right" data-aos-duration="800">
                                    与我们一起引领资产管理的未来</h1>
                                <p class="text-white fs-3 d-block w-100 pt-3" data-aos="fade-right"
                                   data-aos-duration="800">
                                    站式解决方案 – 为您提供专业的资产管理服务</p>
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
            <div class="col-12">
                <div class="coumter1">
                    <div class="container">
                        <div class="row">
                            <?php
                            if ($_SESSION['lan'] == 'EN') {
                                ?>
                                <div class="col-md-6 col-lg-3 col-sm-6 col-6 text-center">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1000">
                                        <h1>$<span>200</span>M+</h1>
                                        <p>AUM</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-3 text-center col-6">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1600">
                                        <h1>$<span>8</span>B+</h1>
                                        <p>Monthly Traded Volume</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-3 text-center col-6">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1400">
                                        <h1><span></span>APAC</h1>
                                        <p>Market focused</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-3 text-center col-6">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="900">
                                        <h1><span>20 </span>+</h1>
                                        <p>Partnership</p>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="col-md-6 col-lg-3 col-sm-6 col-6 text-center">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1000">
                                        <h1>2亿美元+</h1>
                                        <p>资产管理规模</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-3 text-center col-6">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1600">
                                        <h1>80亿美元+</h1>
                                        <p>每月交易量</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-3 text-center col-6">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1400">
                                        <h1>亚太地区</h1>
                                        <p>市场重点</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-3 text-center col-6">
                                    <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="900">
                                        <h1><span>20</span>+</h1>
                                        <p>合作伙伴关系</p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
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
                            data-aos-duration="1300">Security</h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">Safeguarding your digital assets is our top
                            priority.
                            We cooperate with top notch custodians and utilize state-of-the-art security protocols to
                            protect your assets from potential threats. Our compliance team ensures that all our
                            services
                            adhere to the relevant regulations, providing you with a compliant and trustworthy
                            environment.
                        </p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="hadding1">
                        <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                            data-aos-duration="1300">资产安全</h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">
                            确保您的数字资产安全是我们的首要任务。我们与顶尖的托管机构合作，采用最先进的安全协议来保护您的资产免受潜在威胁。我们专业的合规团队可确保我们的服务符合相关监管法规，为您提供合规可信赖的投资环境。
                        </p>
                    </div>
                    <?php
                }
                ?>


            </div>
            <div class="col-lg-6">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/blog-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/blog-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0">
                <?php
                if ($_SESSION['lan'] == 'EN') {
                    ?>
                    <div class="hadding1">
                        <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                            data-aos-duration="1300">Products With Growth</h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">Our team of experts in
                            Finance/Tech/Physics/Math/Architect create digital asset trading strategies to capture alpha in
                            every market opportunity.
                        </p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="hadding1">
                        <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                            data-aos-duration="1300">成长型产品</h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000">
                            我们的投资团队由金融、数学、算法架构、投资等领域的专业人士组成，由他们创建数字资产交易策略，以捕捉每一个市场机会中的超额收益。</p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-6">

                    <?php
                    if ($_SESSION['lan'] == 'EN') {
                        ?>
                        <div class="hadding1">
                            <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                                data-aos-duration="1300">Client-Centric OTC Service</h1>
                            <div class="space8"></div>
                            <p data-aos="fade-right" data-aos-duration="1000">As a one-stop-solution financial platform, our
                                licensed Trust Company subsidiary provides OTC trading service (On/Off ramp OTC trade) to
                                clients, bridging the worlds of Fiat and Crypto. - Trade with us and straight to your bank
                                account
                            </p>

                            <p data-aos="fade-right" data-aos-duration="1000">-	Trade with us and straight to your bank account</p>
                            <p data-aos="fade-right" data-aos-duration="1000">- No more C2C transfer, do B2B/B2C trade with us
                                (min volume: 1M+)</p>
                            <p data-aos="fade-right" data-aos-duration="1000">- You keep the money in bank, we handle the
                                questions from bank</p>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="hadding1">
                            <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                                data-aos-duration="1300">以客户为主的OTC服务</h1>
                            <div class="space8"></div>
                            <p data-aos="fade-right" data-aos-duration="1000">作为一家一站式金融平台，我们持牌的信托公司子公司为客户提供场外交易服务（On/Off ramp场外交易），连接法定货币和加密货币的世界。
                            </p>
                            <p data-aos="fade-right" data-aos-duration="1000">- 与我们交易，直接到您的银行账户</p>
                            <p data-aos="fade-right" data-aos-duration="1000">- 不再需要C2C转账，与我们进行B2B/B2C交易（最低交易量：100万+）</p>
                            <p data-aos="fade-right" data-aos-duration="1000">- 您将资金保留在银行中，我们处理与银行的相关问题 </p>
                        </div>
                        <?php
                    }
                    ?>

            </div>
            <div class="col-lg-6">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/blog-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====choose us end=======-->


<!--=====testimonial start=======-->
<div class="testimonial1 sp4 home1-bg">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-7 m-auto text-center">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-up"
                        data-aos-duration="1100"><?php if($_SESSION['lan'] == 'EN') echo 'Collaborating Partnerships'; else echo '合作伙伴';?></h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client2.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client3.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client4.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client5.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client6.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client7.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client8.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client9.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client10.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client11.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client12.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client13.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client14.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client15.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client16.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client17.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
            <div class="col-6 col-md-2 col-lg-2 mt-3 mb-3">
                <img class="img-fluid client-image" src="assets/img/new/client/client18.jpg" data-aos="zoom-out"
                     data-aos-duration="1000">
            </div>
        </div>
    </div>
</div>


<!--=====testimonial end=======-->


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
