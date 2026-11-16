
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
    isset($_GET['devhub_contact_sent']) &&
    is_string($_GET['devhub_contact_sent']) &&
    sanitize_text_field(wp_unslash($_GET['devhub_contact_sent'])) === '1'
) {
    $form_success = true;
}

// Process contact form.
if (
    isset($_SERVER['REQUEST_METHOD']) &&
    is_string($_SERVER['REQUEST_METHOD']) &&
    'POST' === strtoupper(sanitize_text_field(wp_unslash($_SERVER['REQUEST_METHOD']))) &&
    isset($_POST['devhub_contact_submit'])
) {

    $form_values['name'] = isset($_POST['contact_name']) && is_string($_POST['contact_name'])
        ? sanitize_text_field(wp_unslash($_POST['contact_name']))
        : '';

    $form_values['email'] = isset($_POST['contact_email']) && is_string($_POST['contact_email'])
        ? sanitize_email(wp_unslash($_POST['contact_email']))
        : '';

    $form_values['subject'] = isset($_POST['contact_subject']) && is_string($_POST['contact_subject'])
        ? sanitize_text_field(wp_unslash($_POST['contact_subject']))
        : '';

    $form_values['message'] = isset($_POST['contact_message']) && is_string($_POST['contact_message'])
        ? sanitize_textarea_field(wp_unslash($_POST['contact_message']))
        : '';

    $honeypot = isset($_POST['devhub_contact_website']) && is_string($_POST['devhub_contact_website'])
        ? sanitize_text_field(wp_unslash($_POST['devhub_contact_website']))
        : '';

    if ($honeypot !== '') {
        $form_values = array_fill_keys(array_keys($form_values), '');
    } elseif (
        !isset($_POST['devhub_contact_nonce']) ||
        !is_string($_POST['devhub_contact_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['devhub_contact_nonce'])),
            'devhub_contact_action'
        )
    ) {
        $form_error = 'Security verification failed. Please refresh the page and try again.';

    } else {

        $name = $form_values['name'];
        $email = $form_values['email'];
        $subject = $form_values['subject'];
        $message = $form_values['message'];

        if ($name === '' || $email === '' || $subject === '' || $message === '') {
            $form_error = 'Please complete all required fields before sending your message.';

        } elseif (!is_email($email)) {
            $form_error = 'Please enter a valid email address.';

        } elseif (
            strlen($name) > 100 ||
            strlen($email) > 254 ||
            strlen($subject) > 150 ||
            strlen($message) > 5000
        ) {
            $form_error = 'One or more fields exceed the allowed length. Please shorten your entry and try again.';

        } else {
            $client_ip = isset($_SERVER['REMOTE_ADDR']) && is_string($_SERVER['REMOTE_ADDR'])
                ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR']))
                : 'unknown';
            $rate_limit_key = 'devhub_contact_rate_' . md5(wp_hash($client_ip));

            if (get_transient($rate_limit_key)) {
                $form_error = 'A message was submitted recently. Please wait a minute before trying again.';

            } else {
                set_transient($rate_limit_key, '1', MINUTE_IN_SECONDS);

                $safe_subject = preg_replace('/[\r\n]+/', ' ', $subject);
                $mail_subject = 'DEVHUB Group Portfolio Contact: ' . $safe_subject;

                $mail_message =
                    "You received a new message through the DEVHUB Group Portfolio contact form.\n\n" .
                    "Name: " . $name . "\n" .
                    "Email: " . $email . "\n" .
                    "Subject: " . $safe_subject . "\n\n" .
                    "Message:\n" . $message;

                $headers = array(
                    'Reply-To: ' . $email
                );

                $sent = wp_mail(
                    $contact_email,
                    $mail_subject,
                    $mail_message,
                    $headers
                );

                if ($sent) {

                    $redirect_url = add_query_arg(
                        'devhub_contact_sent',
                        '1',
                        get_permalink()
                    );

                    wp_safe_redirect($redirect_url . '#contact-form');
                    exit;

                } else {
                    delete_transient($rate_limit_key);
                    $form_error = 'The message could not be sent from this site. Please try again later or email us using the address shown.';
                }
            }
        }
    }
}

get_header();
?>

<main class="devhub-contact">

    <!-- =====================================
         HERO
    ====================================== -->

    <section class="contact-hero">

        <div class="contact-container">

            <div class="contact-hero-top">

                <span class="contact-eyebrow">
                    <span class="contact-status-dot"></span>
                    DEVHUB GROUP PORTFOLIO / CONTACT
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
                <span>DEVHUB — GROUP PORTFOLIO</span>
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
                        href="<?php echo esc_url('mailto:' . $contact_email); ?>"
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
                        EXPLORE DEVHUB
                    </span>

                    <h3>Our Community</h3>

                    <p>
                        Discover the members, their individual portfolios, and the projects presented by DEVHUB Group Portfolio.
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
                        Have a question about our members or projects?
                        Use the form to send your inquiry to DEVHUB Group Portfolio.
                        We use the details you provide only to review and respond
                        to your message. Responses may take time.
                    </p>

                    <div class="contact-form-contact">

                        <span class="contact-form-contact-label">
                            PREFERRED CONTACT
                        </span>

                        <a href="<?php echo esc_url('mailto:' . $contact_email); ?>">
                            <?php echo esc_html($contact_email); ?>
                        </a>

                    </div>

                    <div class="contact-form-side-footer">
                        <span>DEVHUB / CONTACT</span>
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
                                Your inquiry has been received by DEVHUB Group Portfolio.
                                We will review it and respond when we can; replies may take time.
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
                            'devhub_contact_action',
                            'devhub_contact_nonce'
                        );
                        ?>

                        <input
                            type="hidden"
                            name="devhub_contact_submit"
                            value="1"
                        >

                        <div class="contact-honeypot" aria-hidden="true">
                            <label for="devhub_contact_website">Leave this field empty</label>
                            <input
                                type="text"
                                id="devhub_contact_website"
                                name="devhub_contact_website"
                                value=""
                                tabindex="-1"
                                autocomplete="off"
                            >
                        </div>

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
                            name="devhub_contact_submit"
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
                                WE USE YOUR DETAILS TO REVIEW AND RESPOND; REPLIES MAY TAKE TIME.
                            </span>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- FREQUENTLY ASKED QUESTIONS -->
    <section class="contact-faq" aria-labelledby="contact-faq-title">

        <div class="contact-container">

            <div class="contact-faq-heading">
                <span class="contact-section-label">QUICK ANSWERS</span>
                <h2 id="contact-faq-title">Frequently asked <span>questions.</span></h2>
            </div>

            <div class="contact-faq-list">
                <details>
                    <summary>What is DEVHUB Group Portfolio?</summary>
                    <p>It is a shared website introducing the DEVHUB members and presenting their individual portfolios and group projects.</p>
                </details>

                <details>
                    <summary>What projects can visitors explore?</summary>
                    <p>Visitors can browse the group’s portfolio, the PTA Accounting and Membership System, the Pet Adoption Application, and Kerby Talara’s individual ESP32 experiments. Project stages and status are described on the projects page.</p>
                </details>

                <details>
                    <summary>Can visitors ask questions about our projects?</summary>
                    <p>Yes. Send a question through the contact form and include the project name so the team can understand your inquiry.</p>
                </details>

                <details>
                    <summary>How can visitors contact the group?</summary>
                    <p>Use the contact form on this page or the displayed group email address. Responses may take time.</p>
                </details>
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
                <span>THANK YOU FOR VISITING DEVHUB GROUP PORTFOLIO.</span>
                <span>CONNECT WITH US ANYTIME.</span>
            </div>

        </div>

    </section>

</main>


<style>

/* =========================================
   DEVHUB GROUP PORTFOLIO CONTACT
========================================= */

.devhub-contact {
    --c-black: #111111;
    --c-dark: #171717;
    --c-card: #1d1d1d;
    --c-orange: #f97316;
    --c-orange-dark: #f97316;
    --c-cream: #f5f3ef;
    --c-white: #ffffff;
    --c-gray: #777777;
    --c-border: #363636;

    background-color: var(--c-black);
    background-image:
        radial-gradient(ellipse at 90% 8%, rgba(249, 115, 22, .04), transparent 38rem),
        radial-gradient(rgba(255, 255, 255, .035) .8px, transparent .8px);
    background-size: auto, 28px 28px;
    color: var(--c-white);
    overflow: hidden;
    font-family: inherit;
}

.devhub-contact *,
.devhub-contact *::before,
.devhub-contact *::after {
    box-sizing: border-box;
}

.devhub-contact a {
    text-decoration: none;
}

.devhub-contact button,
.devhub-contact input,
.devhub-contact textarea {
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
        radial-gradient(rgba(255, 255, 255, .05) .8px, transparent .8px),
        radial-gradient(ellipse at 85% 45%, rgba(249, 115, 22, .055), transparent 38%),
        linear-gradient(140deg, #101010, #171717 56%, #101010);
    background-size: 28px 28px, auto, auto;
    color: white;
}

.contact-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    opacity: .1;
    pointer-events: none;
    background-image: radial-gradient(rgba(255, 255, 255, .16) .8px, transparent .8px);
    background-size: 28px 28px;
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
    background: #ff9a52;
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
    background:
        radial-gradient(rgba(255, 255, 255, .04) .8px, transparent .8px),
        radial-gradient(ellipse at 12% 18%, rgba(249, 115, 22, .035), transparent 34%),
        radial-gradient(ellipse at 88% 82%, rgba(255, 255, 255, .025), transparent 32%),
        linear-gradient(140deg, #101010 0%, #171717 52%, #101010 100%);
    background-size: 28px 28px, auto, auto, auto;
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
    color: var(--c-white);
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
    color: #aaa;
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
    background:
        radial-gradient(ellipse at 100% 0%, rgba(249, 115, 22, .07), transparent 42%),
        linear-gradient(145deg, #202020, #151515 72%);
    transition: .3s ease;
}

.contact-info-card:hover {
    transform: translateY(-7px);
    border-color: var(--c-orange);
    box-shadow: 0 18px 40px rgba(0,0,0,.35), 0 0 24px rgba(249,115,22,.08);
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
    color: #777;
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
    color: #f5f3ef;
    font-size: 23px;
    font-weight: 900;
}

.contact-info-card > p {
    max-width: 280px;
    min-height: 65px;
    color: #aaa;
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
    border-top: 1px solid #383838;
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
    border-bottom: 1px solid #383838;
    color: #ddd;
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
    background:
        radial-gradient(rgba(255, 255, 255, .04) .8px, transparent .8px),
        radial-gradient(ellipse at 8% 42%, rgba(249, 115, 22, .035), transparent 35%),
        radial-gradient(ellipse at 92% 70%, rgba(255, 255, 255, .025), transparent 32%),
        linear-gradient(145deg, #101010, #171717 52%, #101010);
    background-size: 28px 28px, auto, auto, auto;
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
    color: var(--c-white);
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
    color: #a5a5a5;
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
    background:
        radial-gradient(ellipse at 100% 0%, rgba(249, 115, 22, .08), transparent 44%),
        linear-gradient(145deg, #202020, #151515 72%);
}

.contact-form-contact-label {
    color: #999;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.contact-form-contact a {
    color: #f5f3ef;
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
    border-top: 1px solid #383838;
    color: #999;
    font-family: monospace;
    font-size: 9px;
}


/* FORM WRAPPER */

.contact-form-wrapper {
    padding: 38px;
    border: 1px solid #383838;
    background:
        radial-gradient(ellipse at 100% 0%, rgba(249, 115, 22, .07), transparent 42%),
        linear-gradient(145deg, #202020, #151515 72%);
}

.contact-form-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    padding-bottom: 25px;
    margin-bottom: 30px;
    border-bottom: 1px solid #383838;
}

.contact-form-top-label {
    color: var(--c-orange-dark);
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.7px;
}

.contact-form-top h3 {
    margin: 10px 0 0;
    color: #f5f3ef;
    font-size: 25px;
    font-weight: 900;
}

.contact-form-code {
    padding: 8px 10px;
    background: #111;
    color: #aaa;
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
    border-color: var(--c-orange);
    background: #292016;
    color: #ffd2ad;
}

.contact-error {
    border-color: var(--c-orange);
    background: #2a1b13;
    color: #ffd2ad;
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
    color: #e4e4e4;
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
    border: 1px solid #414141;
    border-radius: 0;
    outline: none;
    background: #111;
    color: #f5f3ef;
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

.contact-honeypot {
    position: absolute;
    left: -10000px;
    width: 1px;
    height: 1px;
    overflow: hidden;
}


/* =========================================
   FAQ
========================================= */

.contact-faq {
    padding: 85px 0;
    background:
        radial-gradient(rgba(255, 255, 255, .04) .8px, transparent .8px),
        radial-gradient(ellipse at 82% 44%, rgba(249, 115, 22, .035), transparent 36%),
        linear-gradient(140deg, #101010, #171717 56%, #101010);
    background-size: 28px 28px, auto, auto;
}

.contact-faq-heading {
    margin-bottom: 30px;
}

.contact-faq-heading h2 {
    margin: 15px 0 0;
    color: var(--c-white);
    font-size: clamp(32px, 4vw, 45px);
    font-weight: 900;
    line-height: 1.1;
    letter-spacing: -1.5px;
}

.contact-faq-heading h2 span {
    color: var(--c-orange-dark);
}

.contact-faq-list {
    max-width: 850px;
    border-top: 1px solid #383838;
}

.contact-faq-list details {
    padding: 18px 0;
    border-bottom: 1px solid #383838;
}

.contact-faq-list summary {
    color: #f5f3ef;
    cursor: pointer;
    font-size: 13px;
    font-weight: 800;
}

.contact-faq-list summary:hover,
.contact-faq-list details[open] summary {
    color: var(--c-orange-dark);
}

.contact-faq-list p {
    max-width: 720px;
    margin: 12px 0 0;
    color: #aaa;
    font-size: 12px;
    line-height: 1.8;
}


/* =========================================
   CLOSING SECTION
========================================= */

.contact-closing {
    padding: 75px 0 30px;
    background:
        radial-gradient(rgba(255, 255, 255, .045) .8px, transparent .8px),
        radial-gradient(ellipse at 85% 15%, rgba(249, 115, 22, .07), transparent 38%),
        linear-gradient(140deg, #171717, #202020 55%, #141414);
    background-size: 28px 28px, auto, auto;
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
    border-bottom: 1px solid #383838;
    color: #999;
}

.contact-closing-content {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 35px;
    padding: 75px 0;
}

.contact-closing-kicker {
    color: var(--c-orange);
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 2px;
}

.contact-closing h2 {
    margin: 22px 0 0;
    color: #f5f3ef;
    font-size: clamp(42px, 7vw, 80px);
    font-weight: 900;
    line-height: 1;
    letter-spacing: -4px;
}

.contact-closing h2 span {
    color: var(--c-orange);
}

.contact-closing-content > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
    min-width: 225px;
    padding: 17px 20px;
    border: 1px solid rgba(249, 115, 22, .35);
    background: var(--c-black);
    color: white;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1px;
    transition: .3s ease;
}

.contact-closing-content > a:hover {
    background: var(--c-orange);
    color: var(--c-black);
}

.contact-closing-content > a span:last-child {
    font-size: 18px;
}

.contact-closing-footer {
    padding-top: 20px;
    border-top: 1px solid #383838;
    color: #999;
}


/* =========================================
   ACCESSIBILITY
========================================= */

.devhub-contact a:focus-visible,
.devhub-contact button:focus-visible,
.devhub-contact input:focus-visible,
.devhub-contact textarea:focus-visible,
.devhub-contact summary:focus-visible {
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

    .devhub-contact *,
    .devhub-contact *::before,
    .devhub-contact *::after {
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
    }

}

</style>

<?php get_footer(); ?>
