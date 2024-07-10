</div>
<!-- /.content-wrapper -->
<footer class="bg-gray">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4 img-fluid" height="70" width="70" src="<?php echo e(asset('assets/img/logo_smk.png')); ?>"
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
                    <address class="pe-xl-15 pe-xxl-17">Jl. R. A. Kartini No.25, Langkai, Kec. Pahandut, Kota Palangka
                        Raya, Kalimantan Tengah 74874
                        <a href="mailto:#" class="link-body">perpustakaan@smkn3palangkaraya.sch.id</a><br /> ( 0536 )
                        123 45
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

<script>
    // let pengujian = <?php echo e(isset($hasilPengujian) ? $hasilPengujian : 'kosong'); ?>

    // console.log(pengujian);
</script>
<script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Yudha\Documents\GitHub\sistem-rekomendasi-buku-CBF\resources\views/siswa/layout/bottom.blade.php ENDPATH**/ ?>