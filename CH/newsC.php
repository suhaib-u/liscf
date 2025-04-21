<!DOCTYPE php>
<php lang="zh" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>新闻</title>
    <link rel="stylesheet" href="../EN/css/navbarEE.css">
    <link rel="stylesheet" href="../EN/css/newsE.css">
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
        <?php include 'navbarC.php'?>
        <section class="hero-section">
            <br>
            <h1 class="mb-5 text-white">新闻</h1>
            <br>
            <p class="pp">利比亚国际智慧城市论坛 / 新闻</p>
            <br><br>
        </section>
    </div>

    <!-- 主要内容 -->
    <main class="main-content">
        <div class="features">
            <div class="feature-card">
                <h3>今日新闻</h3>
                <p></p>
            </div>
            <div class="feature-card">
                <h3>今日新闻</h3>
                <p></p>
            </div>
        </div>
    </main>

    <!-- 页脚 -->
    <?php include 'footerC.php'?>
    <script src="../EN/js/navbarE.js"></script>
</body>
</php>