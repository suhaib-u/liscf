<!DOCTYPE php>
<php lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>الأخبار</title>
    <link rel="stylesheet" href="css/navbarr.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
       
        



       
        /* تصميم الجوال */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
        }


        
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
          <source src="video/smart.mp4" type="video/mp4">
          متصفحك لا يدعم تشغيل الفيديو.
        </video>
    <!-- شريط التنقل -->
        <?php include 'navbar.php'?>
        <section class="hero-section">
           
            <br>
            <h1 class="mb-5 text-white">الأخبار </h1>
            <br>
            <p class="pp"> المنتدى الليبي الدولي للمدن الذكية \ الأخبار 
                     </p>
       
            <br><br>
        
        </section>
        
    </div>

    <!-- المحتوى الرئيسي -->
    <main class="main-content">
        

        <div class="features">
            <div class="feature-card">
                <h3> أخبار اليوم </h3>
                <p></p>
            </div>
            <div class="feature-card">
                <h3>  أخبار اليوم </h3>
                <p></p>
            </div>
            
           
        </div>
    </main>

    <!-- التذييل -->
       <?php include 'footer.php'?>
    <script src="js/navbar.js"></script>