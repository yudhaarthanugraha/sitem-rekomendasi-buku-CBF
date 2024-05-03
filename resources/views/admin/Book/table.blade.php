<div class="card">

    <div class="card-body">
        <h2 class="font-bold text-lg mb-10">Tabel buku</h2>

        <!-- start a table -->
        <table class="table-fixed w-full">

            <!-- table head -->
            <thead class="text-left">
                <tr>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Judul</th>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">sinopsis</th>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">kategori</th>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">Gendre</th>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide">tahun terbit</th>
                     <th class="w-1/3 pb-10 text-sm font-extrabold tracking-wide">customer</th>
                </tr>
            </thead>
            <!-- end table head -->

            <!-- table body -->
            <tbody class="text-left text-gray-600">

                <!-- item -->
                @foreach ($books as $book)
                    <tr>
                        <!-- name -->
                        {{-- <th class=" mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                <img src="img/user{{ $book['id_buku'] }}.jpg" class="object-cover">
                            </div>
                            <p class="ml-3 name-{{ $book['id_buku'] }}">user name</p>
                        </th> --}}
                        <!-- name -->

                        <!-- product -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">{{ $book['judul'] }}</th>
                        <!-- product -->

                        <!-- invoice -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">{{ $book['sinopsis'] }}<span
                                class="num-4"></span></th>
                        <!-- invoice -->

                        <!-- price -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">{{ $book['kategori'] }}<span
                                class="num-2"></span></th>
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">{{ $book['gendre'] }}<span
                                class="num-2"></span></th>
                        <!-- price -->

                        <!-- status -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">{{ $book['tahun_terbit'] }}</th>
                        <!-- status -->
                        <!-- status -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">
                        <div>
                            <span><button class="bg-red-400 p-2 rounded-md text-white">delete</button></span>
                            <span><button class="bg-green-600 p-2 rounded-md text-white">edit</button></span>
                        </div>
                        
                        </th>
                        <!-- status -->

                    </tr>
                    @endforeach
                    <!-- item -->

            </tbody>
            <!-- end table body -->

        </table>
        <!-- end a table -->
    </div>

</div>
