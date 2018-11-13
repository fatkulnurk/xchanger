<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-8 has-text-centered">
                    <h3 class="title is-3">Masih Nunggu Apa Lagi?</h3>
                </div>
                <div class="column is-4">
                    <p>
                        <a href="{{@env('APP_URL')}}register" class="button is-grey is-light">Daftar Sekarang</a>
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
                    <img src="@php echo getenv('SITE_LOGO_URL'); @endphp" alt="">
                </a>
            </div>

            <div class="column is-offset-one-quarter">
                <div class="footer-item-header has-text-weight-bold">Product</div>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-item">Rekening Bersama</a></li>
                    <li><a href="#" class="footer-item">Pulsa & Paket Data</a></li>
                    <li><a href="#" class="footer-item">Transfer Uang Tanpa Limit</a></li>
                    <li><a href="#" class="footer-item">Payment Gateway</a></li>
                </ul>
            </div>
            <div class="column">
                <div class="footer-item-header has-text-weight-bold">Connect</div>
                <ul class="list-unstyled">
                    <li>
                        <a href="@php echo getenv('SITE_URL'); @endphppages/contact" class="footer-item">Contact us</a></li>
                    <li>
                        <a href="@php echo getenv('SOCIAL_FACEBOOK'); @endphp" class="footer-item"
                           target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="@php echo getenv('SOCIAL_TWITTER'); @endphp" class="footer-item"
                           target="_blank">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <div class="footer-item-header has-text-weight-bold">Legal</div>
                <ul class="list-unstyled">
                    <li><a href="@php echo getenv('SITE_URL'); @endphppages/tos" class="footer-item">Terms of service</a></li>
                    <li><a href="@php echo getenv('SITE_URL'); @endphppages/privacy" class="footer-item">Privacy policy</a></li>
                </ul>
            </div>
        </div>
        <p class="has-text-centered copyright has-text-grey">
            Copyright &copy; 2018 @php echo getenv('SITE_NAME'); @endphp. All rights reserved
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