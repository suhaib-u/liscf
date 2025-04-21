<!DOCTYPE php>
<php lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Programs</title>
    <link rel="stylesheet" href="css/programmsE.css">
    <link rel="stylesheet" href="css/navbarEE.css">
    <link rel="stylesheet" href="css/footerE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
          <source src="../video/smart.mp4" type="video/mp4">
          Your browser does not support video playback.
        </video>
    <!-- Navigation Bar -->
        <?php include 'navbarE.php' ?>
        <section class="hero-section">
            <br>
            <h1 class="mb-5 text-white">Programs</h1>
            <br>
            <p class="pp">Libyan International Smart Cities Forum / Programs</p>
            <br><br>
        </section>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="features">
            <div class="feature-card">
                <img src="../imgs/9.jpg" alt="High Speed" class="feature-icon" />
                <h3>Smart Cities Company for General Contracting and Strategic Projects</h3>
            </div>
            <div class="feature-card">
                <img src="../imgs/ee.jpg" alt="High Speed" class="feature-icon" />
                <h3>Smart Cities Company for Electrical, Electronic, and Technical Networks</h3>
            </div>
            <div class="feature-card">
                <img src="../imgs/10.jpg" alt="High Speed" class="feature-icon" />
                <h3>Smart Cities Company for Education, Training Services, and Investments</h3>
            </div>
            <div class="feature-card">
                <img src="../imgs/8.jpg" alt="High Speed" class="feature-icon" />
                <h3>Smart Cities Company for Organizing Exhibitions, Conferences, Seminars, and Workshops</h3>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footerE.php'; ?>
    <script src="js/navbarE.js"></script>