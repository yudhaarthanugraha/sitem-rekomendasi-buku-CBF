@extends('admin.layout.layout')
@section('main')
    <div class="flex flex-col flex-1">
        @include('admin.layout.header')
        @php
            $id_buku = $buku->id_buku;

        @endphp
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Masukan data peminjam
                </h2>
                <form class="grid" action="{{ route('store_pinjam_buku') }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="grid gap-6  md:grid-cols-2 xl:grid-cols-2">
                        <div class="px-4 py-3 mb-2 bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Judul - kode_buku</span>
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <select name="judul"
                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select">
                                        @foreach ($books as $book)
                                            <option value="{{ $book->id_buku }}"
                                                {{ $book->id_buku == $id_buku ? 'selected' : '' }}>
                                                {{ $book->judul }} - {{ $book->kode_buku }}
                                            </option>
                                        @endforeach
                                    </select>



                                </div>
                            </label>
                        </div>
                        <div class="px-4 py-3 mb-2 bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400 ">Siswa</span>
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <select name="user" id="user"
                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select">
                                        <option value="#" selected>Pilih siswa</option>
                                        @foreach ($siswas as $siswa)
                                            <option value="{{ $siswa->id_user }}">
                                                {{ $siswa->username }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </label>
                        </div>
                        <div class=" px-4 py-3 mb-2 bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Tanggal pinjam</span>
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input type="date" required value="" name="tanggal_pinjam"
                                        class="block w-full  mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                        placeholder="Masukkan tanggal pinjam" />

                                </div>
                            </label>
                        </div>


                    </div>
                    <button onclick="confirm('Apakah anda yakin melakukan perubahan data?')" type="submit"
                        class="flex  items-center justify-center p-3 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">Simpan</button>
                </form>


            </div>
        </main>
    </div>
@endsection
