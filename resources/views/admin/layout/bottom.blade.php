    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#user').select2({
                placeholder: "Pilih siswa",
                allowClear: true,
                width: '100%'  // Ini akan memastikan bahwa select2 mengisi lebar elemen induknya
            });
        });
    </script>

    <script>
        const closeButton = document.getElementById('closeButton');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                const notification = document.getElementById('notification');
                // console.log('test');
                if (notification) {
                    notification.remove();
                }
            });
        }

        // In your Javascript (external .js resource or <script> tag)
        // $(document).ready(function() {
        //     $('.js-example-basic-single').select2();
        // });
    </script>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchText = this.value.toLowerCase();
            var rows = document.querySelectorAll('tbody tr');

            rows.forEach(function(row) {
                var cells = row.querySelectorAll('td');
                var found = false;

                cells.forEach(function(cell) {
                    var text = cell.textContent.toLowerCase();
                    if (text.indexOf(searchText) !== -1) {
                        found = true;
                    }
                });

                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
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
                    title: 'Gagal!',
                    text: "{{ session('error') }}",
                    icon: 'error',
                    position: "top",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>
    @endif
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>

    </html>
