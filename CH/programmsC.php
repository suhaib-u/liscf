<!DOCTYPE php>
<php lang="zh" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>项目</title>
    <link rel="stylesheet" href="../EN/css/programmsE.css">
    <link rel="stylesheet" href="../EN/css/navbarEE.css">
    <link rel="stylesheet" href="../EN/css/footerE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
          <source src="../video/smart.mp4" type="video/mp4">
          您的浏览器不支持视频播放。
        </video>
    <!-- 导航栏 -->
        <?php include 'navbarC.php' ?>
        <section class="hero-section">
            <br>
            <h1 class="mb-5 text-white">项目</h1>
            <br>
            <p class="pp">利比亚国际智慧城市论坛 / 项目</p>
            <br><br>
        </section>
    </div>

    <!-- 主要内容 -->
    <main class="main-content">
        <div class="features">
            <div class="feature-card">
                <img src="../imgs/9.jpg" alt="高速" class="feature-icon" />
                <h3>智慧城市公司 - 综合承包与战略项目</h3>
            </div>
            <div class="feature-card">
                <img src="../imgs/ee.jpg" alt="高速" class="feature-icon" />
                <h3>智慧城市公司 - 电气、电子及技术网络</h3>
            </div>
            <div class="feature-card">
                <img src="../imgs/10.jpg" alt="高速" class="feature-icon" />
                <h3>智慧城市公司 - 教育、培训服务及投资</h3>
            </div>
            <div class="feature-card">
                <img src="../imgs/8.jpg" alt="高速" class="feature-icon" />
                <h3>智慧城市公司 - 展览、会议、研讨会及工作坊的组织</h3>
            </div>
        </div>
    </main>

    <!-- 页脚 -->
    <?php include 'footerC.php'; ?>
    <script src="../EN/js/navbarE.js"></script>
</body>
</php>