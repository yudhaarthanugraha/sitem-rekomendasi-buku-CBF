  </div>
  <!-- Bootstrap core JavaScript-->
  @if (session('success'))
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  title: 'Berhasil!',
                  text: "{{ session('success') }}",
                  icon: 'success',
                  position: "top",
                  showConfirmButton: false,
                  timer: 1500
              });
          });
      </script>
  @endif
  @if (session('error'))
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  title: 'Gagal Log in!',
                  text: "{{ session('error') }}",
                  icon: 'error',
                  position: "top",
                  showConfirmButton: false,
                  timer: 1500
              });
          });
      </script>
  @endif
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Jquery JS-->
  <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
  <!-- Bootstrap JS-->
  <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
  <!-- Vendor JS       -->
  <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
  <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
  <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
  <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

  <!-- Main JS-->
  <script src="{{ asset('js/main.js') }}"></script>

  </body>

  </html>
  <!-- end document-->
