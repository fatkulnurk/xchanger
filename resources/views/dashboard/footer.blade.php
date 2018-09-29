<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-8 has-text-centered">
                    <h3 class="title is-3">Masih Nunggu Apa Lagi?</h3>
                </div>
                <div class="column is-4">
                    <p>
                        <a class="button is-primary is-inverted">Daftar Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                <a href="">
                    <img src="https://anyshortcut.com/static/img/logo.svg" alt="">
                </a>
            </div>

            <div class="column is-offset-one-quarter">
                <div class="footer-item-header">Product</div>
                <ul class="list-unstyled">
                    <li><a href="/account" class="footer-item">Account</a></li>
                    <li><a href="/pricing" class="footer-item">Pricing</a></li>
                    <li><a href="/faq" class="footer-item">FAQ</a></li>
                </ul>
            </div>
            <div class="column">
                <div class="footer-item-header">Connect</div>
                <ul class="list-unstyled">
                    <li>
                        <a href="/contact" class="footer-item">Contact us</a></li>
                    <li>
                        <a href="https://twitter.com/anyshortcut" class="footer-item"
                           target="_blank">Twitter</a>
                    </li>
                    <li>
                        <a href="https://telegram.me/anyshortcut" class="footer-item"
                           target="_blank">Telegram</a>
                    </li>
                    <li>
                        <a href="https://t.me/anyshortcut_group" class="footer-item"
                           target="_blank">Telegram Group</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <div class="footer-item-header">Legal</div>
                <ul class="list-unstyled">
                    <li><a href="/terms" class="footer-item">Terms of service</a></li>
                    <li><a href="/privacy" class="footer-item">Privacy policy</a></li>
                </ul>
            </div>
        </div>
        <p class="has-text-centered copyright has-text-grey">
            Copyright©2018 Anyshortcut.com. All rights reserved
        </p>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any nav burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</body></html>