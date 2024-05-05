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
  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <!-- end script -->

  </body>

  </html>
