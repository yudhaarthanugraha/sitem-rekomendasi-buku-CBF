</div>
<!-- /.content-wrapper -->
<footer class="bg-gray">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4 img-fluid" height="70" width="70" src="{{ asset('assets/img/logo_smk.png') }}"
                        alt="" />
                    <p class="mb-4">© 2024 Perpustakaan SMK Negeri 3 Palangka Raya. <br
                            class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social social-muted">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title ls-sm mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">Jl. Tingang No.1, Palangka Raya, Kalimantan Tengah 73112
                    </address>
                    <a href="mailto:#" class="link-body">perpustakaan@smkn3palangkaraya.sch.id</a><br /> ( 0536 ) 123 45
                    67
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title ls-sm mb-3">Navigation</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="#books">Books</a></li>
                        <li><a href="#about-us">About Us</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title ls-sm mb-3">Our Newsletter</h4>
                    <p class="mb-5">Terima kasih telah mengunjungi perpustakaan kami. Kami berharap dapat membantu
                        Anda dalam perjalanan membaca dan belajar Anda.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form
                                action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                class="validate " target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL"
                                            class="required email form-control" placeholder="Email Address"
                                            id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Send" name="subscribe"
                                            id="mc-embedded-subscribe2" class="btn btn-primary ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                            type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                            value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
{{-- Smooth scrolling --}}
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clamp-js/0.7.0/clamp.min.js"></script>
{{-- Menyembunyikan sinopsis --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sinopsisElements = document.querySelectorAll('.sinopsis');
        sinopsisElements.forEach(function(element) {
            $clamp(element, {
                clamp: 3
            });
        });
    });
</script>
{{-- Autocomlite suggesti --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#autocomplete').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: 'api/suggestions',
                    data: {
                        query: request.term
                    },
                    success: function(data) {
                        console.log(data);
                        response(data);
                    }
                });
            },
            minLength: 2, // Minimal karakter untuk mulai memberikan saran
        });
    });
</script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
