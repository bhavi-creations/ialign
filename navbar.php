<?php require __DIR__ . '/seo.php'; ?>
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Font Awesome 6 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">      

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;family=DM+Sans:wght@400;500;600;700&amp;family=Playfair+Display:wght@400;500;600;700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="./assets/css/style.css?v=<?= filemtime(__DIR__ . '/assets/css/style.css') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Invisalign aligners in Koramangala, clear aligners in Koramangala, root canal treatment in Koramangala, dental implants in Koramangala, teeth cleaning in Koramangala, best dental clinic in Koramangala, best dentist in Koramangala, pediatric dentist in Koramangala, best dental hospital in Koramangala, paedodontist in Koramangala, wisdom tooth removal in Koramangala">



</head>
<body>
<header class="navabr">

    <!-- ================= TOP BAR ================= -->
<div class="navabr-topbar">

    <!-- DESKTOP VIEW ONLY -->
    <div class="navabr-topbar-inner d-none d-lg-flex">
        <!-- Address -->
        <div class="navabr-address">
            <i class="bi bi-geo-alt-fill"></i>
            <span>
                #486, Ground Floor, 12th Main Road, Near BSNL Telephone Exchange,
                Koramangala 4th Block, Bangalore 560 034.
            </span>
        </div>

        <!-- Right Contact -->
        <div class="navabr-top-right">
            <a href="tel:+919902686388" class="navabr-phone">
                <i class="bi bi-telephone-fill"></i>
                <span>+91 990 268 6388</span>
            </a>
            <span class="navabr-divider">|</span>
            <a href="tel:+918041114100" class="navabr-phone">
                <i class="bi bi-telephone-fill"></i>
                <span>+91 080-41114100</span>
            </a>
            <div class="navabr-socials">
                <a href="https://www.instagram.com/ialignsignaturedentalcare/" target="_blank" aria-label="Instagram"><img src="./assets/img/icons/instagram.png" style="width: 30px; height:30px;" alt=""></a>
                <a href="https://www.facebook.com/IalignSignatureDentalCare/" target="_blank" aria-label="Facebook"><img src="./assets/img/icons/facebook.png" style="width: 30px; height:30px;" alt=""></a>
                <a href="https://www.youtube.com/@IALiGNSignaturedentalcare" target="_blank" aria-label="YouTube"><img src="./assets/img/icons/youtube.png" style="width: 30px; height:30px;" alt=""></a>
                <a href="https://in.pinterest.com/ialigns/" target="_blank" aria-label="pintrest"><img src="./assets/img/icons/social.png" style="width: 30px; height:30px;" alt=""></a>
                <a href="https://www.linkedin.com/in/ialign-signature-dental-care-6a5a40434/" target="_blank" aria-label="linked in"><img src="./assets/img/icons/linkedin.png" style="width: 30px; height:30px;" alt=""></a>
            </div>
        </div>
    </div>

    <!-- MOBILE VIEW ONLY (Marquee) -->
    <div class="marquee-section d-block d-lg-none">
        <marquee behavior="scroll" direction="left" scrollamount="5" class="top-info-marquee">
            <span class="marquee-item">
                <i class="bi bi-geo-alt-fill"></i> #486, Ground Floor, 12th Main Road, Near BSNL Telephone Exchange, Koramangala 4th Block, Bangalore 560 034.
            </span>
            <span class="marquee-divider">|</span>
            <span class="marquee-item">
                <a href="tel:+919902686388"><i class="bi bi-telephone-fill"></i> +91 990 268 6388</a>
            </span>
            <span class="marquee-divider">|</span>
            <span class="marquee-item">
                <a href="tel:+918041114100"><i class="bi bi-telephone-fill"></i> +91 080-41114100</a>
            </span>
            <span class="marquee-divider">|</span>
            <span class="marquee-item marquee-socials">
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            </span>
        </marquee>
    </div>

</div>


    <!-- ================= MAIN NAVBAR ================= -->
    <nav class="navbar navbar-expand-xl navabr-main">
        <div class="navabr-main-inner">

            <!-- Logo -->
            <a class="navbar-brand navabr-logo" href="home.php">
                <img src="assets/img/logo_new.png"
                     alt="IALIGN Signature Dental Care">
            </a>


            <!-- Mobile Toggle -->
            <button class="navbar-toggler navabr-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navabrMenu"
                    aria-controls="navabrMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- Menu -->
            <div class="collapse navbar-collapse navabr-collapse"
                 id="navabrMenu">

                <ul class="navbar-nav navabr-menu">

                    <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="home.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="about.php">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="treatments.php">
                            Treatments
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="doctors.php">
                            Our Doctors
                        </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="smile-gallery.php">
                            Smile Gallery
                        </a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="patient-stories.php">
                            Patient Stories
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navabr-link"
                           href="contact.php">
                            Contact
                        </a>
                    </li>

                </ul>


                <!-- Appointment -->
                <div class="navabr-appointment-wrapper ">

                    <a href="appointment.php"
                       class="navabr-appointment">

                        <i class="bi bi-calendar2-week"></i>

                        <span>Book Appointment</span>

                    </a>

                </div>

            </div>

        </div>
    </nav>

</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
