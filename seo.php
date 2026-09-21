<?php
// Page-specific metadata shared by the site header.
$pageMetadata = [
    'home.php' => ['Dental Clinic in Koramangala, Bangalore | IALIGN', 'Visit IALIGN Signature Dental Care in Koramangala, Bangalore for personalised dental care, aligners, implants and smile treatments. Book a consultation.'],
    'about.php' => ['About Our Dental Clinic in Koramangala | IALIGN', 'Get to know IALIGN Signature Dental Care in Koramangala, Bangalore. Explore our approach to personalised dentistry, patient comfort and healthy smiles.'],
    'doctors.php' => ['Meet Our Dentists in Koramangala, Bangalore | IALIGN', 'Meet the dental team at IALIGN Signature Dental Care in Koramangala, Bangalore. Learn about our dentists and book a consultation for your dental needs.'],
    'contact.php' => ['Contact Our Dental Clinic in Koramangala | IALIGN', 'Contact IALIGN Signature Dental Care in Koramangala 4th Block, Bangalore. Find our clinic address, phone numbers and directions to plan your visit.'],
    'appointment.php' => ['Book a Dental Appointment in Koramangala | IALIGN', 'Book a dental appointment at IALIGN Signature Dental Care in Koramangala, Bangalore. Contact our team to arrange a consultation for your smile and oral health.'],
    'patient-stories.php' => ['Dental Patient Stories in Koramangala | IALIGN', 'Explore patient stories from IALIGN Signature Dental Care in Koramangala, Bangalore and learn about their experiences with our dental team and treatments.'],
    'treatments.php' => ['Dental Treatments in Koramangala, Bangalore | IALIGN', 'Explore dental treatments at IALIGN in Koramangala, including braces, aligners, implants, root canals, veneers and gum care. Find care for your dental needs.'],
    'treatments_1.php' => ['Explore Dental Care Options in Koramangala | IALIGN', 'Discover dental care options at IALIGN Signature Dental Care in Koramangala, Bangalore, from teeth cleaning and braces to implants and smile designing.'],
    'wisdom-teeth-removal-treatment-in-koramangala.php' => ['Wisdom Teeth Removal in Koramangala | IALIGN', 'Discuss wisdom teeth removal at IALIGN in Koramangala, Bangalore. Learn about assessment, extraction and aftercare, and book a dental consultation.'],
    'braces-treatment-in-koramangala.php' => ['Braces Treatment in Koramangala, Bangalore | IALIGN', 'Explore braces treatment at IALIGN in Koramangala, Bangalore. Discuss tooth alignment, bite concerns and orthodontic options with our dental team.'],
    'invisalign-aligners-treatment-in-koramangala.php' => ['Invisalign Aligners in Koramangala, Bangalore | IALIGN', 'Explore Invisalign clear aligners at IALIGN in Koramangala, Bangalore. Learn about personalised teeth alignment planning and book an orthodontic consultation.'],
    'dental-implants-treatment-in-koramangala.php' => ['Dental Implants in Koramangala, Bangalore | IALIGN', 'Explore dental implants for missing teeth at IALIGN in Koramangala, Bangalore. Discuss your suitability, treatment planning and restoration options.'],
    'root-canal-treatment-in-koramangala.php' => ['Root Canal Treatment in Koramangala | IALIGN', 'Learn about root canal treatment at IALIGN in Koramangala, Bangalore. Discuss tooth pain, infection and options to preserve your natural tooth with our team.'],
    'advanced-teeth-cleaning-treatment-in-koramangala.php' => ['Advanced Teeth Cleaning in Koramangala | IALIGN', 'Book a teeth cleaning consultation at IALIGN in Koramangala, Bangalore. Explore professional cleaning, scaling and personalised guidance for oral hygiene.'],
    'smile-designing-treatment-in-koramangala.php' => ['Smile Designing in Koramangala, Bangalore | IALIGN', 'Explore smile designing at IALIGN in Koramangala, Bangalore. Discuss tooth shape, colour and alignment with a personalised plan for your smile goals.'],
    'veneers-treatment-in-koramangala.php' => ['Dental Veneers Treatment in Koramangala | IALIGN', 'Discover dental veneers at IALIGN in Koramangala, Bangalore. Discuss tooth shape, colour, suitability and personalised cosmetic dental treatment options.'],
    'laser-gum-treatment-in-koramangala.php' => ['Laser Gum Treatment in Koramangala | IALIGN', 'Explore laser gum treatment at IALIGN in Koramangala, Bangalore. Book an assessment to discuss gum concerns, suitable treatment options and ongoing care.'],
    'tmj-joint-pain-treatment-in-koramangala.php' => ['TMJ Joint Pain Treatment in Koramangala | IALIGN', 'Discuss jaw pain, stiffness and TMJ concerns at IALIGN in Koramangala, Bangalore. Book an assessment for diagnosis and personalised treatment planning.'],
];
$currentPage = basename($_SERVER['SCRIPT_FILENAME'] ?? 'home.php');
[$metaTitle, $metaDescription] = $pageMetadata[$currentPage] ?? $pageMetadata['home.php'];
$escapeMeta = static function ($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $escapeMeta($metaTitle) ?></title>
    <meta name="description" content="<?= $escapeMeta($metaDescription) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="IALIGN Signature Dental Care">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="<?= $escapeMeta($metaTitle) ?>">
    <meta property="og:description" content="<?= $escapeMeta($metaDescription) ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= $escapeMeta($metaTitle) ?>">
    <meta name="twitter:description" content="<?= $escapeMeta($metaDescription) ?>">
