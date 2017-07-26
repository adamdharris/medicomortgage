<?php
//Helper functions
require_once( 'functions.php' );

// Instantiate variables we'll use
$errors = array();
$sent = false;

// Check for form submission
if ( ! empty( $_POST ) ) {
    // Process the form
    $process = process_form( $_POST );

    // Check for errors
    if ( ! empty( $process['message'] ) ) {
        $errors[] = $process['message'];
    } else if ( ! empty( $process['errors'] ) ) {
        $errors = $process['errors'];
    } else {
        $sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta content="text/html" charset=utf-8">
    <title>Loans for doctors | No LMI Loans </title>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700,800" rel="stylesheet">

</head>
<body>
<main>
    <section id="headline">
        <div>
            <h1>
                Home Loans For Doctors
            </h1>
        </div>
    </section>
    <section id="main_content">
        <div class="cta">
            <form id="contact" method="post" action="">
            <div class="cta_headline">
                <h1 class="type2">Free Loan Strategy Session</h1>
            </div>
                <?php if (!empty($errors)): ?>
                    <div class="errors">
                        <p class="bg_error"><?php echo implode('.</p><p class="bg_error">', $errors) ?>.</p>
                    </div>
                <?php elseif ($sent): ?>
                    <div class="success">
                        <p class="bg_success">You message was sent, we will be in touch.</p>
                    </div>
                <?php endif; ?>
                <div class="form_label1">  <h4>Name</h4></div>
                    <input id="name" type="text" name="name" style="font-size:100%;width: 16.667em;border:0;padding-left: 0.667em" tabindex="1" autofocus value="<?php echo validate_input('name'); ?>">>

                <div class="form_label"><h4>Email</h4></div>
                <input id="email" type="email" style="font-size:100%;width: 16.667em;border:0;padding-left: 0.667em" name="email" tabindex="2"
                       value="<?php echo validate_input('email'); ?>" >
                <div class="form_label"><h4>Phone</h4></div>
                <input id="message" type="tel" style="font-size:100%;width: 16.667em;border:0;padding-left: 0.667em" name="message" tabindex="3" <?php echo validate_input('message'); ?> >
                <div class="form_label"><h5>What is 3 + 2? (Anti-Spam)</h5></div>
                <input id="human" type="text" style="font-size:100%;width: 16.667em;border:0;padding-left: 0.667em" name="human" tabindex="4"
                       placeholder="Enter your answer">
                <div class="button1">
                    <input type="submit" value="YES, BOOK ME ONE!"
                           style="font-size:100%;width:17.333em;color:#FAFAFA;background-color:#D50000;border:0"
                           tabindex="5">
                </div>
            </form>

        </div>
        <div>
            <h2>
                Doctors can save thousands with interest rate discounts and waived Lenders Mortgage Insurance (LMI)
            </h2>
            <p>
                Home loans for doctors were created by Australian lenders because they favour doctors above all other
                professions.
            </p>
            <p>
                Doctors are known to be low risk borrowers because they tend to earn high incomes and approach the bank
                later in life for a business or investment loan making them more reliable borrowers.
            </p>
            <p>
                Doctors have one of the lowest default rates of any profession so they’re in a unique position to
                negotiate significant discounts that aren’t available to other borrowers.
            </p>
            <h3>Who can avoid mortgage insurance?</h3>
            <p>
                A wide range of medical professions qualify for a discount. and no LMI loan. Listed below are the
                professions eligible.
            </p>
            <br/>

            <div class="list_box1">
                <ul>
                    <li>Anesthetist</li>
                    <li>Cardio Thoratic Surgeon</li>
                    <li>Cardiologist</li>
                    <li>Cosmetic Surgeon</li>
                    <li>Dermatologist</li>
                    <li>Ear and Throat Surgeon</li>
                    <li>Emergency Surgeon</li>
                    <li>Endocrinologist</li>
                    <li>Gastroenterologist</li>
                    <li>General Pratitioner</li>
                    <li>Gynaecologist</li>
                    <li>Haematologist</li>
                    <li>Herpetologist</li>
                    <li>Immunologist</li>
                    <li>Nephrologist</li>
                    <li>Neurosurgeon</li>
                </ul>
            </div><!--end .list_box1-->
            <div class="list_box2">
                <ul>
                    <li>Neurologist</li>
                    <li>Obstetrician</li>
                    <li>Oncologist</li>
                    <li>Ophthalmologist</li>
                    <li>Oral and Maxillofacial Surgeon</li>
                    <li>Orthopaedic Surgeon</li>
                    <li>Peadiatric Surgeon</li>
                    <li>Pathologist</li>
                    <li>Plastic Surgeon</li>
                    <li>Psychiatrist</li>
                    <li>Radiologist</li>
                    <li>Reconstructive Surgeon</li>
                    <li>Rheumatologist</li>
                    <li>Respiratory/Thoracic Surgeon</li>
                    <li>Urologist</li>
                    <li>Vascular Surgeon</li>
                </ul>
                <br/>
            </div> <!--end .list_box2-->
            <div class="sidebar"></div>
        </div>
        <div class="sub_content">
            <h3>Association membership is required</h3>
            <p>Eligability for a doctors discount or to avoid morgate insurance you must be a member one of the
                following associations.</p>
            <br/>
            <ul>
                <li>Australian Association of Practice Managers</li>
                <li>Australian College of Rural and Remote Medicine (ACRRM)</li>
                <li>Australian Dental Association (ADA)</li>
                <li>Australian Dental Association (ADA)</li>
                <li>Australian Dental Council (ADC)</li>
                <li>Australian Medical Association (AMA)</li>
                <li>Australian Medical Council (AMC)</li>
                <li>Australasian College for Emergency Medicine (ACEM)</li>
                <li>Australasian College of Cosmetic Surgery (ACCS)</li>
                <li>Australasian College of Dermatologists (ACD)</li>
                <li>College of Intensive Care Medicine of Australia and New Zealand (CICM)</li>
                <li>Medical Practitioners Board of Australia</li>
                <li>Royal Australasian College of Dental Surgeons (RACDS)</li>
                <li>Royal Australasian College of Medical Administrators (RACMA)</li>
                <li>Royal Australian and New Zealand College of Obstetricians and Gynaecologists (RANZCOG)</li>
                <li>Royal Australian and New Zealand College of Ophthalmologists (RANZCO)</li>
                <li>Royal Australasian College of Surgeons (RACS)</li>
                <li>Royal Australasian College of Physicians (RACP)</li>
                <li>Royal College of Pathologists of Australasia (RCPA)</li>
                <li>Royal Australian and New Zealand College of Psychiatrists (RANZCP)</li>
                <li>The Australia and New Zealand College of Anaesthetists (ANZCA)</li>
                <li>The Royal Australian College of General Practitioners (RACGP)</li>
                <li>The Royal Australian and New Zealand College of Radiologists (RANZCR)</li>
                <li>Urological Society of Australia and New Zealand (USANZ)</li>
                <li>Other associations on a case by case basis</li>
            </ul>
        </div>

    </section>
</main>
<footer>
</footer>
</body>
</html>