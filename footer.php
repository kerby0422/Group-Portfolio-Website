<?php
$ft_home    = esc_url(home_url('/'));
$ft_about   = esc_url(home_url('/about-us/'));
$ft_members = esc_url(home_url('/our-members/'));
?>
<footer class="site-footer ft">
    <div class="ft-wrap">

        <div class="ft-main">
            <div class="ft-brand">
                <a class="ft-logo" href="<?php echo $ft_home; ?>">Our<span>Space.</span></a>
                <p>Group portfolio website. Creativity, collaboration, and growth.</p>
            </div>

           

            <a class="ft-top" href="#top" aria-label="Back to top">
                <span>Back to top</span><i aria-hidden="true">↑</i>
            </a>
        </div>

        <div class="ft-bottom">
            <p>© <?php echo esc_html(wp_date('Y')); ?> OurSpace. All rights reserved.</p>
            <p>Built with HTML, CSS, PHP &amp; WordPress</p>
        </div>

    </div>
</footer>

<script>
(function () {
    var header = document.querySelector('.site-header');
    var toggle = document.querySelector('.menu-toggle');
    var nav = document.getElementById('primary-navigation');
    if (!header || !toggle || !nav) return;

    function closeMenu() {
        nav.classList.remove('active');
        toggle.setAttribute('aria-expanded', 'false');
    }

    toggle.addEventListener('click', function () {
        var open = nav.classList.toggle('active');
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    nav.addEventListener('click', function (e) {
        if (e.target.closest('a')) closeMenu();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
    });

    window.addEventListener('scroll', function () {
        header.classList.toggle('is-scrolled', window.scrollY > 10);
    }, { passive: true });
})();
</script>
<?php wp_footer(); ?>
</body>
</html>