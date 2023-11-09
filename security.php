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


<!--===== section hero start=======-->
<div class="section-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php
                if ($_SESSION['lan'] == 'EN') {
                    ?>
                    <div class="section-hadding">
                        <h1>Safeguarding your digital assets<br>is our top priority.</h1>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="section-hadding">
                        <h1>"保障您的数字财产，信心投资未来"</h1>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
<!--===== section hero end=======-->


<!--=====choose us start=======-->
<div class="service1 home1-bg pb-5">
    <div class="container">
        <div class="row pt-5">
            <?php
            if ($_SESSION['lan'] == 'EN') {
                ?>
                <div class="col-lg-12 m-auto text-center">
                    <p class="security-blog">
                        （前言）At Future Wing, we understand the paramount importance of security when it comes to managing and
                        protecting your valuable digital assets. We have implemented robust security measures and forged
                        partnerships with industry-leading custody services to ensure the highest level of asset protection.
                    </p>
                </div>
                <?php
            } else {
                ?>
                <div class="col-lg-12 m-auto text-center">
                    <p class="security-blog">
                        确保您的资产安全对我们来说至关重要，我们采取强大的安全措施，与业界领先的托管服务提供商合作，确保资产得到最高水平的安全保护。
                    </p>
                </div>
                <?php
            }
            ?>

        </div>
        <div class="space30"></div>
        <div class="row">
            <?php
            if ($_SESSION['lan'] == 'EN') {
                ?>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/security.png" alt="">
                        </div>
                        <div class="service1-hadding hadding1">
                            <h4><a href="javascript:void(0);">Secure Custody: Protecting Your Digital Assets</a></h4>
                            <p>Your digital assets are securely stored with our trusted custody partners, who employ
                                state-of-the-art security practices. Through our partnerships, we leverage advanced
                                technologies such as multi-signature wallets, cold storage solutions, and encryption
                                protocols to safeguard your assets against unauthorized access or theft.</p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="1100">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/time.png" alt="">
                        </div>
                        <div class="service1-hadding hadding1">
                            <h4><a href="javascript:void(0);">Robust Operational Approach: Safely and On-Time</a></h4>
                            <p>Our operational approach is built on a foundation of security and efficiency. We have
                                designed rigorous procedures and protocols to ensure the safe and timely delivery of your
                                assets. By leveraging cutting-edge technology and automation, we minimize human error and
                                enhance the overall security of our processes.</p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/meeting.png" alt="">
                        </div>
                        <div class="service1-hadding hadding3">
                            <h4><a href="javascript:void(0);">Compliance and Regulatory Framework: Meeting Industry
                                    Standards</a></h4>
                            <p>Compliance is at the core of our operations. We strictly adhere to all relevant regulatory
                                requirements and maintain a robust compliance framework. Our Know Your Customer (KYC) and
                                Anti-Money Laundering (AML) procedures are designed to ensure a secure and compliant
                                environment for your assets.</p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="1400">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/empowerment.png" alt="">
                        </div>
                        <div class="service1-hadding hadding1">
                            <h4><a href="javascript:void(0);">Client Education and Awareness: Empowering You</a></h4>
                            <p>We believe in empowering our clients through education and awareness. We provide resources,
                                guides, and educational materials to help you enhance your own security measures. By staying
                                informed and implementing best practices, you can play an active role in protecting your
                                digital assets.</p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/security.png" alt="">
                        </div>
                        <div class="service1-hadding hadding1">
                            <h4><a href="javascript:void(0);">安全托管：保护您的数字资产</a></h4>
                            <p>您的数字资产将安全存储在值得信赖的托管合作伙伴处，他们采用先进的安全实践。通过我们的合作伙伴关系，我们利用多重签名钱包、冷钱包存储和加密协议等先进技术，以防止未经授权的访问或盗窃，确保您的资产得到保护。 </p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="1100">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/time.png" alt="">
                        </div>
                        <div class="service1-hadding hadding1">
                            <h4><a href="javascript:void(0);">稳健运营：安全及准时交付</a></h4>
                            <p>我们设计了严格的运营程序和协议，以确保您的资产安全和准时交付。通过利用先进的技术和自动化，我们将人为错误降至最低，提升了流程的整体安全性。</p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/meeting.png" alt="">
                        </div>
                        <div class="service1-hadding hadding3">
                            <h4><a href="javascript:void(0);">合规和监管框架：符合行业标准</a></h4>
                            <p>合规是我们运营的核心。我们严格遵守所有相关的监管要求，并保持完善的合规框架。我们通过 KYC（了解客户身份）和AML（反洗钱）程序确保您的资产处于安全合规的环境中。
                                选择我们，您可以放心知道您的资产将在一个符合行业标准的合规框架下进行管理和保护。我们将持续努力确保您的资产安全，并为您提供安全合规的投资环境。
                            </p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service1-single-box" data-aos="fade-up" data-aos-duration="1400">
                        <div class="service1-box-icon">
                            <img src="assets/img/new/security/empowerment.png" alt="">
                        </div>
                        <div class="service1-hadding hadding1">
                            <h4><a href="javascript:void(0);">赋能您的投资：知识之力，安全之道</a></h4>
                            <p>在我们的投资平台上，我们致力于赋能您的投资决策。
                                我们提供全面的市场分析、投资洞察和最新的行业动态，让您了解市场趋势和机会。通过独特的投资见解和专业知识，我们赋予您在投资决策中发挥更强大的力量。
                                我们重视您的资产安全。我们采用先进的安全技术和严格的合规措施，确保您的资产得到最高水平的保护。我们提供投资安全意识教育和最佳实践指南，帮助您识别和应对潜在的风险，从而实现安全的投资。
                            </p>
                        </div>
                        <div class="after-box"></div>
                    </div>
                </div>
                <?php
            }
            ?>

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
