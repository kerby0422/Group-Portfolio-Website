
<?php
/*
Template Name: Contact Us
*/

if (!defined('ABSPATH')) {
    exit;
}

$contact_email = 'occ.talara.kerby@gmail.com';

$form_success = false;
$form_error = '';

$form_values = array(
    'name'    => '',
    'email'   => '',
    'subject' => '',
    'message' => ''
);

// Show success message after redirect.
if (
    isset($_GET['contact_sent']) &&
    sanitize_text_field(wp_unslash($_GET['contact_sent'])) === '1'
) {
    $form_success = true;
}

// Process contact form.
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['ourspace_contact_submit'])
) {

    if (
        !isset($_POST['ourspace_contact_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['ourspace_contact_nonce'])),
            'ourspace_contact_action'
        )
    ) {
        $form_error = 'Security verification failed. Please refresh the page and try again.';

    } else {

        $form_values['name'] = isset($_POST['contact_name'])
            ? sanitize_text_field(wp_unslash($_POST['contact_name']))
            : '';

        $form_values['email'] = isset($_POST['contact_email'])
            ? sanitize_email(wp_unslash($_POST['contact_email']))
            : '';

        $form_values['subject'] = isset($_POST['contact_subject'])
            ? sanitize_text_field(wp_unslash($_POST['contact_subject']))
            : '';

        $form_values['message'] = isset($_POST['contact_message'])
            ? sanitize_textarea_field(wp_unslash($_POST['contact_message']))
            : '';

        $name = $form_values['name'];
        $email = $form_values['email'];
        $subject = $form_values['subject'];
        $message = $form_values['message'];

        if (
            empty($name) ||
            empty($email) ||
            empty($subject) ||
            empty($message)
        ) {
            $form_error = 'Please complete all required fields.';

        } elseif (!is_email($email)) {
            $form_error = 'Please enter a valid email address.';

        } else {

            $mail_subject = 'OurSpace Contact: ' . $subject;

            $mail_message =
                "You received a new message from your OurSpace website.\n\n" .
                "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Subject: " . $subject . "\n\n" .
                "Message:\n" . $message;

            $headers = array(
                'Reply-To: ' . $name . ' <' . $email . '>'
            );

            $sent = wp_mail(
                $contact_email,
                $mail_subject,
                $mail_message,
                $headers
            );

            if ($sent) {

                $redirect_url = add_query_arg(
                    'contact_sent',
                    '1',
                    get_permalink()
                );

                wp_safe_redirect($redirect_url . '#contact-form');
                exit;

            } else {

                $form_error = 'Message could not be sent. Please try again later.';
            }
        }
    }
}

get_header();
?>

<main class="ourspace-contact">

    <!-- =====================================
         HERO
    ====================================== -->

    <section class="contact-hero">

        <div class="contact-container">

            <div class="contact-hero-top">

                <span class="contact-eyebrow">
                    <span class="contact-status-dot"></span>
                    CONTACT / OURSPACE
                </span>

                <span class="contact-hero-index">
                    GET IN TOUCH — 2026
                </span>

            </div>

            <div class="contact-hero-content">

                <div class="contact-hero-main">

                    <span class="contact-kicker">
                        HAVE AN IDEA? LET'S TALK.
                    </span>

                    <h1>
                        Let's build<br>
                        something <span>great.</span>
                    </h1>

                    <p>
                        Every great collaboration starts with a conversation.
                        Have a question, an idea, or something you'd like to
                        share? We'd love to hear from you.
                    </p>

                    <a href="#contact-form" class="contact-primary-button">
                        <span>START A CONVERSATION</span>
                        <span class="contact-button-arrow">&rarr;</span>
                    </a>

                </div>

                <div class="contact-hero-side">

                    <div class="contact-code-window">

                        <div class="contact-code-header">
                            <div class="contact-window-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <span>contact.js</span>

                            <span>JS</span>
                        </div>

                        <div class="contact-code-content">

                            <span class="code-comment">// Let's connect</span>

                            <p>
                                <span class="code-purple">const</span>
                                <span class="code-blue">connection</span>
                                =
                                <span class="code-yellow"> {</span>
                            </p>

                            <p class="code-indent">
                                purpose:
                                <span class="code-green">'collaborate'</span>,
                            </p>

                            <p class="code-indent">
                                ideas:
                                <span class="code-green">'welcome'</span>,
                            </p>

                            <p class="code-indent">
                                response:
                                <span class="code-green">'always open'</span>
                            </p>

                            <p>
                                <span class="code-yellow">};</span>
                            </p>

                            <div class="contact-code-divider"></div>

                            <span class="code-comment">
                                // Waiting for your message...
                            </span>

                            <div class="contact-code-status">
                                <span></span>
                                READY TO CONNECT
                            </div>

                        </div>

                    </div>

                    <div class="contact-hero-caption">
                        <span>01 / COMMUNICATION</span>
                        <span>OPEN TO NEW IDEAS</span>
                    </div>

                </div>

            </div>

            <div class="contact-hero-footer">
                <span>OURSPACE — GROUP PORTFOLIO</span>
                <span>CONNECT. COLLABORATE. CREATE.</span>
            </div>

        </div>

    </section>


    <!-- =====================================
         CONTACT INFORMATION
    ====================================== -->

    <section class="contact-details">

        <div class="contact-container">

            <div class="contact-section-heading">

                <div>
                    <span class="contact-section-label">
                        01 — CONTACT INFORMATION
                    </span>

                    <h2>
                        Find the right<br>
                        way to <span>connect.</span>
                    </h2>
                </div>

                <p>
                    Whether you're interested in our projects, want to
                    learn more about our team, or simply have a question,
                    we're just one message away.
                </p>

            </div>


            <div class="contact-info-grid">

                <!-- EMAIL -->

                <article class="contact-info-card">

                    <div class="contact-info-top">
                        <span class="contact-info-icon">@</span>
                        <span class="contact-info-number">01</span>
                    </div>

                    <span class="contact-card-label">
                        DIRECT COMMUNICATION
                    </span>

                    <h3>Email Us</h3>

                    <p>
                        For questions, inquiries, and other concerns,
                        send us an email directly.
                    </p>

                    <a
                        href="mailto:<?php echo esc_attr($contact_email); ?>"
                        class="contact-card-link"
                    >
                        <span><?php echo esc_html($contact_email); ?></span>
                        <span>&nearr;</span>
                    </a>

                </article>


                <!-- CONTACT FORM -->

                <article class="contact-info-card">

                    <div class="contact-info-top">
                        <span class="contact-info-icon">&lt;/&gt;</span>
                        <span class="contact-info-number">02</span>
                    </div>

                    <span class="contact-card-label">
                        SEND AN INQUIRY
                    </span>

                    <h3>Contact Form</h3>

                    <p>
                        Share your thoughts, suggestions, or questions
                        through our website's contact form.
                    </p>

                    <a href="#contact-form" class="contact-card-link">
                        <span>Write a message</span>
                        <span>&nearr;</span>
                    </a>

                </article>


                <!-- OUR COMMUNITY -->

                <article class="contact-info-card">

                    <div class="contact-info-top">
                        <span class="contact-info-icon">+</span>
                        <span class="contact-info-number">03</span>
                    </div>

                    <span class="contact-card-label">
                        EXPLORE OURSPACE
                    </span>

                    <h3>Our Community</h3>

                    <p>
                        Discover the people, skills, experiences, and
                        creative projects behind OurSpace.
                    </p>

                    <div class="contact-card-links">

                        <a href="<?php echo esc_url(home_url('/our-members/')); ?>">
                            Our Members <span>&rarr;</span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/our-projects/')); ?>">
                            Our Projects <span>&rarr;</span>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================
         CONTACT FORM
    ====================================== -->

    <section class="contact-form-section" id="contact-form">

        <div class="contact-container">

            <div class="contact-form-layout">

                <!-- LEFT INFORMATION -->

                <div class="contact-form-intro">

                    <span class="contact-section-label">
                        02 — SEND AN INQUIRY
                    </span>

                    <h2>
                        Tell us<br>
                        what's on<br>
                        your <span>mind.</span>
                    </h2>

                    <p>
                        Have something you'd like to discuss?
                        Complete the form and your message will
                        be sent directly to our OurSpace email.
                    </p>

                    <div class="contact-form-contact">

                        <span class="contact-form-contact-label">
                            PREFERRED CONTACT
                        </span>

                        <a href="mailto:<?php echo esc_attr($contact_email); ?>">
                            <?php echo esc_html($contact_email); ?>
                        </a>

                    </div>

                    <div class="contact-form-side-footer">
                        <span>OURSPACE / CONTACT</span>
                        <span>EST. 2026</span>
                    </div>

                </div>


                <!-- RIGHT FORM -->

                <div class="contact-form-wrapper">

                    <div class="contact-form-top">

                        <div>
                            <span class="contact-form-top-label">
                                MESSAGE FORM
                            </span>

                            <h3>Send us a message.</h3>
                        </div>

                        <span class="contact-form-code">FORM_001</span>

                    </div>


                    <?php if ($form_success): ?>

                        <div
                            class="contact-alert contact-success"
                            role="status"
                            aria-live="polite"
                        >
                            <strong>Message sent successfully!</strong>

                            <p>
                                Thank you for contacting OurSpace.
                                We have received your message.
                            </p>
                        </div>

                    <?php endif; ?>


                    <?php if (!empty($form_error)): ?>

                        <div
                            class="contact-alert contact-error"
                            role="alert"
                        >
                            <strong>Unable to send message.</strong>

                            <p><?php echo esc_html($form_error); ?></p>
                        </div>

                    <?php endif; ?>


                    <form
                        method="POST"
                        action="<?php echo esc_url(get_permalink() . '#contact-form'); ?>"
                        class="contact-form"
                    >

                        <?php
                        wp_nonce_field(
                            'ourspace_contact_action',
                            'ourspace_contact_nonce'
                        );
                        ?>

                        <input
                            type="hidden"
                            name="ourspace_contact_submit"
                            value="1"
                        >


                        <!-- NAME AND EMAIL -->

                        <div class="contact-input-row">

                            <div class="contact-input-group">

                                <label for="contact_name">
                                    FULL NAME <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    id="contact_name"
                                    name="contact_name"
                                    placeholder="Enter your full name"
                                    value="<?php echo esc_attr($form_values['name']); ?>"
                                    autocomplete="name"
                                    maxlength="100"
                                    required
                                >

                            </div>


                            <div class="contact-input-group">

                                <label for="contact_email">
                                    EMAIL ADDRESS <span>*</span>
                                </label>

                                <input
                                    type="email"
                                    id="contact_email"
                                    name="contact_email"
                                    placeholder="example@email.com"
                                    value="<?php echo esc_attr($form_values['email']); ?>"
                                    autocomplete="email"
                                    maxlength="254"
                                    required
                                >

                            </div>

                        </div>


                        <!-- SUBJECT -->

                        <div class="contact-input-group">

                            <label for="contact_subject">
                                SUBJECT <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="contact_subject"
                                name="contact_subject"
                                placeholder="What would you like to discuss?"
                                value="<?php echo esc_attr($form_values['subject']); ?>"
                                maxlength="150"
                                required
                            >

                        </div>


                        <!-- MESSAGE -->

                        <div class="contact-input-group">

                            <label for="contact_message">
                                YOUR MESSAGE <span>*</span>
                            </label>

                            <textarea
                                id="contact_message"
                                name="contact_message"
                                rows="6"
                                maxlength="5000"
                                placeholder="Write your message here..."
                                required
                            ><?php echo esc_textarea($form_values['message']); ?></textarea>

                        </div>


                        <!-- SUBMIT -->

                        <button
                            type="submit"
                            name="ourspace_contact_submit"
                            value="1"
                            class="contact-submit-button"
                        >
                            <span>SEND MESSAGE</span>
                            <span class="contact-submit-arrow">&rarr;</span>
                        </button>


                        <div class="contact-form-bottom">

                            <span>
                                <span class="contact-required">*</span>
                                REQUIRED FIELDS
                            </span>

                            <span>
                                YOUR INFORMATION IS USED TO RESPOND TO YOUR INQUIRY.
                            </span>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================
         CLOSING CTA
    ====================================== -->

    <section class="contact-closing">

        <div class="contact-container">

            <div class="contact-closing-top">
                <span>03 — WHAT'S NEXT?</span>
                <span>EXPLORE OUR WORK</span>
            </div>

            <div class="contact-closing-content">

                <div>
                    <span class="contact-closing-kicker">
                        MORE TO DISCOVER
                    </span>

                    <h2>
                        Built with ideas.<br>
                        Driven by <span>creativity.</span>
                    </h2>
                </div>

                <a href="<?php echo esc_url(home_url('/our-projects/')); ?>">
                    <span>EXPLORE OUR PROJECTS</span>
                    <span>&rarr;</span>
                </a>

            </div>

            <div class="contact-closing-footer">
                <span>THANK YOU FOR VISITING OURSPACE.</span>
                <span>CONNECT WITH US ANYTIME.</span>
            </div>

        </div>

    </section>

</main>


<style>

/* =========================================
   OURSPACE CONTACT — DEVELOPER EDITION
========================================= */

.ourspace-contact {
    --c-black: #101010;
    --c-dark: #171717;
    --c-card: #1d1d1d;
    --c-orange: #f97316;
    --c-orange-dark: #ea580c;
    --c-cream: #f5f3ef;
    --c-white: #ffffff;
    --c-gray: #777777;
    --c-border: #e7e3dc;

    background: var(--c-cream);
    color: var(--c-black);
    overflow: hidden;
    font-family: inherit;
}

.ourspace-contact *,
.ourspace-contact *::before,
.ourspace-contact *::after {
    box-sizing: border-box;
}

.ourspace-contact a {
    text-decoration: none;
}

.ourspace-contact button,
.ourspace-contact input,
.ourspace-contact textarea {
    font: inherit;
}

.contact-container {
    width: min(1200px, 90%);
    margin: 0 auto;
}

.contact-section-label {
    display: inline-block;
    color: var(--c-orange-dark);
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
}


/* =========================================
   HERO
========================================= */

.contact-hero {
    position: relative;
    min-height: 680px;
    padding: 35px 0 25px;
    overflow: hidden;
    background:
        radial-gradient(
            ellipse at 85% 45%,
            rgba(249,115,22,.13),
            transparent 38%
        ),
        var(--c-black);
    color: white;
}

.contact-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    opacity: .13;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(255,255,255,.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.07) 1px, transparent 1px);
    background-size: 55px 55px;
    mask-image: linear-gradient(to right, transparent, black);
}

.contact-hero .contact-container {
    position: relative;
    z-index: 1;
}

.contact-hero-top,
.contact-hero-footer,
.contact-hero-caption {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.contact-eyebrow {
    display: flex;
    align-items: center;
    gap: 11px;
    color: #b7b7b7;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 2px;
}

.contact-status-dot,
.contact-code-status span {
    width: 8px;
    height: 8px;
    flex-shrink: 0;
    border-radius: 50%;
    background: var(--c-orange);
    box-shadow: 0 0 12px rgba(249,115,22,.7);
}

.contact-hero-index {
    color: #777;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1.5px;
}

.contact-hero-content {
    display: grid;
    grid-template-columns: 1.15fr .85fr;
    align-items: center;
    gap: 70px;
    padding: 115px 0 105px;
}

.contact-kicker {
    color: var(--c-orange);
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
}

.contact-hero-main h1 {
    margin: 24px 0;
    color: white;
    font-size: clamp(52px, 7.5vw, 92px);
    font-weight: 900;
    line-height: .98;
    letter-spacing: -5px;
}

.contact-hero-main h1 span {
    color: var(--c-orange);
}

.contact-hero-main > p {
    max-width: 480px;
    margin: 25px 0 35px;
    color: #a5a5a5;
    font-size: 14px;
    line-height: 1.9;
}

.contact-primary-button {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
    min-width: 235px;
    padding: 17px 20px;
    background: var(--c-orange);
    color: var(--c-black);
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 1px;
    transition: .3s ease;
}

.contact-primary-button:hover {
    background: white;
    color: var(--c-black);
    transform: translateY(-4px);
}

.contact-button-arrow {
    font-size: 20px;
}


/* CODE WINDOW */

.contact-code-window {
    width: 100%;
    max-width: 420px;
    margin-left: auto;
    border: 1px solid #363636;
    background: rgba(23,23,23,.94);
    box-shadow: 0 25px 70px rgba(0,0,0,.35);
}

.contact-code-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 18px;
    border-bottom: 1px solid #353535;
    color: #999;
    font-family: monospace;
    font-size: 10px;
}

.contact-window-dots {
    display: flex;
    gap: 6px;
}

.contact-window-dots span {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #555;
}

.contact-window-dots span:first-child {
    background: #f97316;
}

.contact-code-content {
    padding: 28px 25px;
    color: #e7e7e7;
    font-family: Consolas, Monaco, monospace;
    font-size: 12px;
    line-height: 1.9;
}

.contact-code-content p {
    margin: 7px 0;
}

.contact-code-content .code-comment {
    color: #777;
}

.contact-code-content .code-purple {
    color: #c792ea;
}

.contact-code-content .code-blue {
    color: #82aaff;
}

.contact-code-content .code-yellow {
    color: #ffcb6b;
}

.contact-code-content .code-green {
    color: #c3e88d;
}

.contact-code-content .code-indent {
    padding-left: 25px;
}

.contact-code-divider {
    height: 1px;
    margin: 24px 0;
    background: #353535;
}

.contact-code-status {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 25px;
    color: #aaa;
    font-size: 9px;
    letter-spacing: 1.5px;
}

.contact-code-status span {
    width: 7px;
    height: 7px;
}

.contact-hero-caption {
    max-width: 420px;
    margin: 18px 0 0 auto;
    color: #777;
    font-size: 8px;
    letter-spacing: 1.2px;
}

.contact-hero-footer {
    padding-top: 22px;
    border-top: 1px solid #333;
    color: #777;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1.5px;
}


/* =========================================
   CONTACT DETAILS
========================================= */

.contact-details {
    padding: 110px 0 120px;
    background: var(--c-cream);
}

.contact-section-heading {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 50px;
    margin-bottom: 55px;
}

.contact-section-heading h2 {
    margin: 20px 0 0;
    font-size: clamp(40px, 6vw, 65px);
    font-weight: 900;
    line-height: 1.03;
    letter-spacing: -3px;
}

.contact-section-heading h2 span {
    color: var(--c-orange-dark);
}

.contact-section-heading > p {
    max-width: 400px;
    margin: 0 0 8px;
    color: #777;
    font-size: 13px;
    line-height: 1.9;
}

.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}

.contact-info-card {
    position: relative;
    min-height: 320px;
    padding: 30px;
    overflow: hidden;
    border: 1px solid var(--c-border);
    background: white;
    transition: .3s ease;
}

.contact-info-card:hover {
    transform: translateY(-7px);
    border-color: var(--c-orange);
    box-shadow: 0 18px 40px rgba(0,0,0,.06);
}

.contact-info-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 35px;
}

.contact-info-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    background: var(--c-black);
    color: var(--c-orange);
    font-family: monospace;
    font-size: 18px;
    font-weight: 800;
}

.contact-info-number {
    color: #d1cdc6;
    font-family: monospace;
    font-size: 11px;
}

.contact-card-label {
    color: #999;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.contact-info-card h3 {
    margin: 12px 0;
    font-size: 23px;
    font-weight: 900;
}

.contact-info-card > p {
    max-width: 280px;
    min-height: 65px;
    color: #777;
    font-size: 12px;
    line-height: 1.8;
}

.contact-card-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: 22px;
    padding-top: 15px;
    border-top: 1px solid #eee;
    color: var(--c-orange-dark);
    font-size: 11px;
    font-weight: 800;
    overflow-wrap: anywhere;
}

.contact-card-link span:last-child {
    font-size: 17px;
}

.contact-card-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 18px;
}

.contact-card-links a {
    display: flex;
    justify-content: space-between;
    max-width: 220px;
    padding-bottom: 8px;
    border-bottom: 1px solid #eee;
    color: #444;
    font-size: 11px;
    font-weight: 800;
    transition: .2s;
}

.contact-card-links a:hover {
    color: var(--c-orange-dark);
}

.contact-card-links a span {
    color: var(--c-orange-dark);
}


/* =========================================
   CONTACT FORM SECTION
========================================= */

.contact-form-section {
    padding: 115px 0;
    background: white;
}

.contact-form-layout {
    display: grid;
    grid-template-columns: .8fr 1.2fr;
    gap: 90px;
    align-items: start;
}

.contact-form-intro {
    position: sticky;
    top: 40px;
    padding-top: 15px;
}

.contact-form-intro h2 {
    margin: 25px 0;
    font-size: clamp(46px, 6vw, 70px);
    font-weight: 900;
    line-height: .98;
    letter-spacing: -4px;
}

.contact-form-intro h2 span {
    color: var(--c-orange-dark);
}

.contact-form-intro > p {
    max-width: 390px;
    color: #777;
    font-size: 13px;
    line-height: 1.9;
}

.contact-form-contact {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 40px;
    padding: 20px;
    border-left: 3px solid var(--c-orange);
    background: var(--c-cream);
}

.contact-form-contact-label {
    color: #999;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.contact-form-contact a {
    color: #222;
    font-size: 12px;
    font-weight: 800;
    overflow-wrap: anywhere;
}

.contact-form-side-footer {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-top: 60px;
    padding-top: 18px;
    border-top: 1px solid #e8e5df;
    color: #999;
    font-family: monospace;
    font-size: 9px;
}


/* FORM WRAPPER */

.contact-form-wrapper {
    padding: 38px;
    border: 1px solid #e8e5df;
    background: var(--c-cream);
}

.contact-form-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    padding-bottom: 25px;
    margin-bottom: 30px;
    border-bottom: 1px solid #dedad2;
}

.contact-form-top-label {
    color: var(--c-orange-dark);
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.7px;
}

.contact-form-top h3 {
    margin: 10px 0 0;
    color: #171717;
    font-size: 25px;
    font-weight: 900;
}

.contact-form-code {
    padding: 8px 10px;
    background: #eae6df;
    color: #777;
    font-family: monospace;
    font-size: 9px;
}


/* ALERTS */

.contact-alert {
    padding: 16px 18px;
    margin-bottom: 25px;
    border-left: 3px solid;
    font-size: 12px;
    line-height: 1.7;
}

.contact-alert p {
    margin: 5px 0 0;
}

.contact-success {
    border-color: #24834a;
    background: #e8f5ec;
    color: #246b3b;
}

.contact-error {
    border-color: #d34d24;
    background: #fff0e8;
    color: #a33b13;
}


/* INPUTS */

.contact-input-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 17px;
}

.contact-input-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 22px;
}

.contact-input-group label {
    margin-bottom: 10px;
    color: #333;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.2px;
}

.contact-input-group label span {
    color: var(--c-orange-dark);
}

.contact-input-group input,
.contact-input-group textarea {
    width: 100%;
    padding: 16px;
    border: 1px solid #dedad2;
    border-radius: 0;
    outline: none;
    background: white;
    color: #222;
    font-family: inherit;
    font-size: 12px;
    transition: .25s ease;
}

.contact-input-group input {
    height: 52px;
}

.contact-input-group textarea {
    min-height: 155px;
    resize: vertical;
    line-height: 1.7;
}

.contact-input-group input::placeholder,
.contact-input-group textarea::placeholder {
    color: #aaa;
}

.contact-input-group input:focus,
.contact-input-group textarea:focus {
    border-color: var(--c-orange);
    box-shadow: 0 0 0 3px rgba(249,115,22,.11);
}

.contact-submit-button {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 18px 22px;
    border: 1px solid var(--c-black);
    background: var(--c-black);
    color: white;
    font-family: inherit;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 1.5px;
    cursor: pointer;
    transition: .3s ease;
}

.contact-submit-button:hover {
    border-color: var(--c-orange);
    background: var(--c-orange);
    color: var(--c-black);
}

.contact-submit-arrow {
    font-size: 20px;
}

.contact-form-bottom {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    margin-top: 17px;
    color: #999;
    font-size: 8px;
    line-height: 1.6;
    letter-spacing: .6px;
}

.contact-required {
    color: var(--c-orange-dark);
}


/* =========================================
   CLOSING SECTION
========================================= */

.contact-closing {
    padding: 75px 0 30px;
    background: var(--c-orange);
}

.contact-closing-top,
.contact-closing-footer {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.contact-closing-top {
    padding-bottom: 22px;
    border-bottom: 1px solid rgba(0,0,0,.2);
    color: #4c2b18;
}

.contact-closing-content {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 35px;
    padding: 75px 0;
}

.contact-closing-kicker {
    color: #4c2b18;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 2px;
}

.contact-closing h2 {
    margin: 22px 0 0;
    color: var(--c-black);
    font-size: clamp(42px, 7vw, 80px);
    font-weight: 900;
    line-height: 1;
    letter-spacing: -4px;
}

.contact-closing h2 span {
    color: white;
}

.contact-closing-content > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
    min-width: 225px;
    padding: 17px 20px;
    background: var(--c-black);
    color: white;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1px;
    transition: .3s ease;
}

.contact-closing-content > a:hover {
    background: white;
    color: var(--c-black);
}

.contact-closing-content > a span:last-child {
    font-size: 18px;
}

.contact-closing-footer {
    padding-top: 20px;
    border-top: 1px solid rgba(0,0,0,.2);
    color: #4c2b18;
}


/* =========================================
   ACCESSIBILITY
========================================= */

.ourspace-contact a:focus-visible,
.ourspace-contact button:focus-visible,
.ourspace-contact input:focus-visible,
.ourspace-contact textarea:focus-visible {
    outline: 2px solid var(--c-orange-dark);
    outline-offset: 4px;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 950px) {

    .contact-hero-content {
        grid-template-columns: 1fr;
        gap: 55px;
        padding: 90px 0;
    }

    .contact-code-window {
        margin-left: 0;
        max-width: 100%;
    }

    .contact-hero-caption {
        max-width: 100%;
    }

    .contact-section-heading {
        align-items: flex-start;
        flex-direction: column;
        gap: 20px;
    }

    .contact-info-grid {
        grid-template-columns: 1fr 1fr;
    }

    .contact-form-layout {
        grid-template-columns: 1fr;
        gap: 45px;
    }

    .contact-form-intro {
        position: static;
    }

    .contact-form-side-footer {
        margin-top: 35px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {

    .contact-container {
        width: 90%;
    }

    .contact-hero {
        min-height: auto;
        padding-top: 25px;
    }

    .contact-hero-top {
        align-items: flex-start;
    }

    .contact-hero-index {
        font-size: 8px;
        text-align: right;
    }

    .contact-hero-content {
        padding: 85px 0 70px;
        gap: 45px;
    }

    .contact-hero-main h1 {
        font-size: clamp(48px, 13vw, 68px);
        letter-spacing: -3px;
    }

    .contact-hero-main > p {
        font-size: 12px;
    }

    .contact-hero-footer {
        align-items: flex-start;
        font-size: 7px;
        letter-spacing: .7px;
    }

    .contact-details,
    .contact-form-section {
        padding: 75px 0;
    }

    .contact-section-heading h2 {
        font-size: 43px;
        letter-spacing: -2px;
    }

    .contact-info-grid {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .contact-info-card {
        min-height: auto;
        padding: 27px;
    }

    .contact-info-card > p {
        min-height: auto;
    }

    .contact-form-intro h2 {
        font-size: 52px;
        letter-spacing: -3px;
    }

    .contact-form-wrapper {
        padding: 22px 17px;
    }

    .contact-form-top h3 {
        font-size: 21px;
    }

    .contact-input-row {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .contact-form-bottom {
        flex-direction: column;
        gap: 8px;
    }

    .contact-closing {
        padding-top: 55px;
    }

    .contact-closing-content {
        align-items: flex-start;
        flex-direction: column;
        padding: 55px 0;
    }

    .contact-closing h2 {
        font-size: 47px;
        letter-spacing: -2px;
    }

    .contact-closing-top,
    .contact-closing-footer {
        font-size: 7px;
        letter-spacing: .7px;
    }

}


/* =========================================
   REDUCED MOTION
========================================= */

@media (prefers-reduced-motion: reduce) {

    .ourspace-contact *,
    .ourspace-contact *::before,
    .ourspace-contact *::after {
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
    }

}

</style>

<?php get_footer(); ?>
