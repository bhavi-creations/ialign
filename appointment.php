<?php include 'navbar.php'; ?>

<!-- PHP Form Processing (ఉదాహరణకి) -->
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ఇక్కడ ఫారమ్ డేటాను ప్రాసెస్ చేయవచ్చు (Database లో Save చేయడం లేదా Mail పంపడం)
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $treatment = $_POST['treatment'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];
    
    // Success message logic or redirect
}
?>

<section class="appointment_first_section">
    <div class="container-fluid appointment_first_section_container">
        <div class="row g-0 appointment_first_section_row">

            <!-- LEFT CONTENT -->
            <div class="col-lg-5 appointment_first_section_left">
                <!-- Decorative Curve -->
                <div class="appointment_first_section_curve"></div>

                <div class="appointment_first_section_content">
                    <!-- Breadcrumb -->
                    <nav class="appointment_first_section_breadcrumb">
                        <a href="home.php">Home</a>
                        <i class="bi bi-chevron-right"></i>
                        <span>Book Appointment</span>
                    </nav>

                    <!-- Main Heading -->
                    <h1 class="appointment_first_section_title">
                        Book Your
                        Appointment
                    </h1>

                    <!-- Description -->
                    <p class="appointment_first_section_description">
                        Take the first step towards a healthier,<br>
                        brighter smile. We're here to make your visit<br>
                        simple, comfortable and convenient.
                    </p>

                    <!-- BENEFITS -->
                    <div class="appointment_first_section_benefits">
                        <!-- 01 -->
                        <div class="appointment_first_section_benefit">
                            <div class="appointment_first_section_benefit_icon">
                                <i class="bi bi-calendar3"></i>
                            </div>
                            <div class="appointment_first_section_benefit_text">
                                <strong>Quick</strong>
                                <span>Scheduling</span>
                            </div>
                        </div>

                        <div class="appointment_first_section_divider"></div>

                        <!-- 02 -->
                        <div class="appointment_first_section_benefit">
                            <div class="appointment_first_section_benefit_icon">
                                <!-- <i class="bi bi-shield-check"></i> -->
                                <img src="assets/img/icons/personalized.png"
                                 alt="" style="height:60px; width:60px"> 
                            </div>
                            <div class="appointment_first_section_benefit_text">
                                <strong>Personalized</strong>
                                <span>Care</span>
                            </div>
                        </div>

                        <div class="appointment_first_section_divider"></div>

                        <!-- 03 -->
                        <div class="appointment_first_section_benefit">
                            <div class="appointment_first_section_benefit_icon">
                                <!-- <i class="bi bi-heart"></i> -->
                                 <img src="assets/img/icons/smiling-teeth.png"
                                 alt="" style="height:60px; width:60px"> 
                            </div>
                            <div class="appointment_first_section_benefit_text">
                                <strong>A Healthier</strong>
                                <span>Happier You</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-7 appointment_first_section_right">
                <div class="appointment_first_section_image_wrapper">
                    <img src="assets/img/contact.png" alt="Book Dental Appointment" class="appointment_first_section_image">

                    <!-- Center Handwriting -->
                    <div class="appointment_first_section_handwriting_one">
                        <span>Smiles</span>
                        <span>Start Here</span>
                        <i class="bi bi-heart"></i>
                    </div>

                    <!-- Right Handwriting -->
                    <div class="appointment_first_section_handwriting_two">
                        <span>Healthy</span>
                        <span>Smiles</span>
                        <span>Brighter</span>
                        <div>
                            <span>Tomorrows</span>
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="appointment_second_section">
    <div class="container-fluid appointment_second_section_container">

        <!-- TOP AREA -->
        <div class="row g-4 appointment_second_section_top">

            <!-- LEFT APPOINTMENT FORM -->
            <div class="col-xl-8 col-lg-7">
                <div class="appointment_second_section_form_card">

                    <div class="appointment_second_section_eyebrow">
                        APPOINTMENT FORM
                    </div>

                    <h2 class="appointment_second_section_title">
                        Let’s Get You Scheduled
                    </h2>

                    <p class="appointment_second_section_subtitle">
                        Fill in your details and we'll confirm your appointment shortly.
                    </p>

                    <!-- FORM start with POST method -->
                    <form action="appointmentform.php" method="POST" class="appointment_second_section_form">
                        <div class="row g-3">

                            <!-- NAME -->
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control appointment_second_section_input" placeholder="Full Name*" required>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6">
                                <input type="tel" name="phone" pattern="[0-9]{10}" class="form-control appointment_second_section_input" placeholder="Phone Number (10 Digits)*" required>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control appointment_second_section_input" placeholder="Email Address*" required>
                            </div>

                            <!-- TREATMENT -->
                            <div class="col-md-6">
                                <select name="treatment" class="form-select appointment_second_section_input" required>
                                    <option value="" selected disabled>Select Treatment</option>
                                    <option value="Wisdom Teeth Removal">Wisdom Teeth Removal</option>
                                    <option value="Braces">Braces</option>
                                    <option value="Invisalign & Aligners">Invisalign &amp; Aligners</option>
                                    <option value="Dental Implants">Dental Implants</option>
                                    <option value="Root Canal Treatment">Root Canal Treatment</option>
                                    <option value="Advanced Teeth Cleaning">Advanced Teeth Cleaning (GBT)</option>
                                    <option value="Smile Designing">Smile Designing</option>
                                    <option value="Veneers">Veneers</option>
                                    <option value="Laser Gum Treatment">Laser Gum Treatment</option>
                                    <option value="TMJ Joint Pain Treatment">TMJ Joint Pain Treatment</option>
                                </select>
                            </div>

                            <!-- DATE -->
                            <div class="col-md-6">
                                <div class="appointment_second_section_field_icon">
                                    <input type="date" id="appointment_date" name="date" class="form-control appointment_second_section_input" required>
                                    <i class="bi bi-calendar3"></i>
                                </div>
                            </div>

                            <!-- TIME -->
                            <div class="col-md-6">
                                <div class="appointment_second_section_field_icon">
                                    <input type="time" name="time" class="form-control appointment_second_section_input" required>
                                    <i class="bi bi-clock"></i>
                                </div>
                            </div>

                            <!-- MESSAGE -->
                            <div class="col-12">
                                <textarea name="message" class="form-control appointment_second_section_message" placeholder="Additional Message (Optional)&#10;Tell us more about your concern..."></textarea>
                            </div>

                            <!-- SUBMIT -->
                            <div class="col-12">
                                <button type="submit" class="appointment_second_section_submit">
                                    <span>Request Appointment</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>

                        </div>

                        <!-- SECURITY -->
                        <div class="appointment_second_section_security">
                            <i class="bi bi-lock-fill"></i>
                            <span>Your information is secure and confidential.</span>
                        </div>
                    </form>

                </div>
            </div>

            <!-- RIGHT WHY BOOK WITH US -->
            <div class="col-xl-4 col-lg-5">
                <div class="appointment_second_section_why_card">
                    <h3 class="appointment_second_section_why_title">
                        Why Book With Us?
                    </h3>

                    <!-- ITEM 01 -->
                    <div class="appointment_second_section_why_item">
                        <div class="appointment_second_section_why_icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="appointment_second_section_why_text">
                            <strong>Experienced Dental Team</strong>
                            <span>Expert care you can trust.</span>
                        </div>
                    </div>

                    <!-- ITEM 02 -->
                    <div class="appointment_second_section_why_item">
                        <div class="appointment_second_section_why_icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="appointment_second_section_why_text">
                            <strong>Modern &amp; Comfortable Clinic</strong>
                            <span>A relaxing environment for your visit.</span>
                        </div>
                    </div>

                    <!-- ITEM 03 -->
                    <div class="appointment_second_section_why_item">
                        <div class="appointment_second_section_why_icon">
                            <i class="bi bi-calendar3"></i>
                        </div>
                        <div class="appointment_second_section_why_text">
                            <strong>Flexible Appointment Slots</strong>
                            <span>Choose a time that works for you.</span>
                        </div>
                    </div>

                    <!-- ITEM 04 -->
                    <div class="appointment_second_section_why_item">
                        <div class="appointment_second_section_why_icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div class="appointment_second_section_why_text">
                            <strong>Personalized Treatment Plan</strong>
                            <span>Care tailored to your smile goals.</span>
                        </div>
                    </div>

                    <!-- CLINIC MAP -->
                    <div class="appointment_second_section_clinic_image">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.6313303923557!2d77.6277039!3d12.931400499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15001d4d117d%3A0x8a1c1fb3c34427bc!2sIALiGN%20Signature%20Dental%20Care!5e0!3m2!1sen!2sin!4v1789724805686!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <!-- BOTTOM CONTACT CARDS -->
        <div class="row g-4 appointment_second_section_contact_row">

            <!-- ADDRESS -->
            <div class="col-lg-4">
                <div class="appointment_second_section_contact_card">
                    <div class="appointment_second_section_contact_icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="appointment_second_section_contact_content">
                        <h4>Our Clinic Address</h4>
                        <p>
                            #486, Ground Floor, 12th Main Road,<br>
                            Near BSNL Telephone Exchange,<br>
                            Koramangala 4th Block,<br>
                            Bangalore 560 034.
                        </p>
                        <a href="https://maps.app.goo.gl/84v8D8kZjPxFVNVt6" target="_blank" class="appointment_second_section_direction">
                            <span>Get Directions</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CALL -->
            <div class="col-lg-4">
                <div class="appointment_second_section_contact_card">
                    <div class="appointment_second_section_contact_icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="appointment_second_section_contact_content">
                        <h4>Call Us</h4>
                        <a href="tel:+919902686388" class="appointment_second_section_phone">+91 990 268 6388</a>
                        <a href="tel:+918041114100" class="appointment_second_section_phone">+91 080-41114100</a>
                        <p class="appointment_second_section_timing">
                            Mon - Sat: 10:00 AM - 7:00 PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>
            </div>

            <!-- EMAIL -->
            <div class="col-lg-4">
                <div class="appointment_second_section_contact_card">
                    <div class="appointment_second_section_contact_icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="appointment_second_section_contact_content">
                        <h4>Email Us</h4>
                        <a href="mailto:info@ialign.dental" class="appointment_second_section_email">info@ialign.dental</a>
                        <p class="appointment_second_section_email_text">
                            We'll get back to you soon.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- పాత తేదీలను సెలెక్ట్ చేయకుండా డిసేబుల్ చేసే JavaScript -->
<script>
    document.getElementById('appointment_date').min = new Date().toISOString().split('T')[0];
</script>

<?php include 'footer.php'; ?>