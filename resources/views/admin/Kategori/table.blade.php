<div class="card">

    <div class="card-body">
        <h2 class="font-bold text-lg mb-10">Tabel Kategori</h2>

        <!-- start a table -->
        <table class="table-fixed w-full">

            <!-- table head -->
            <thead class="text-left">
                <tr>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide ">Kategori</th>
                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide ">Deskripsi</th>
                    <th class="w-1/3 pb-10 text-sm font-extrabold tracking-wide ">#</th>
                </tr>
            </thead>
            <!-- end table head -->

            <!-- table body -->
            <tbody class="text-left text-gray-600">

                <!-- item -->
                @foreach ($categorys as $category)
                    <tr>
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">
                            {{ $category['kategori'] }}<span class="num-2"></span></th>
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">
                            {{ $category['deskripsi'] }}<span class="num-2"></span></th>

                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider ">
                            <div>
                                <span><button class="bg-red-400 p-2 rounded-md text-white">Delete</button></span>
                                <span><button class="bg-green-600 p-2 rounded-md text-white">Edit</button></span>
                            </div>
                        </th>
                    </tr>
                @endforeach
                <!-- item -->

            </tbody>
            <!-- end table body -->

        </table>
        <!-- end a table -->
    </div>

</div>
