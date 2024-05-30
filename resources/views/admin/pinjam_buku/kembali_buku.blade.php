@extends('admin.layout.layout')
@section('main')
    <div class="flex flex-col flex-1">
        @include('admin.layout.header')

        <main class="h-full pb-16 overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Masukan tanggal pengembalian
                </h2>
                <form class="grid dark:bg-gray-800 bg-white p-4"
                    action="{{ route('update_kembali_buku', ['id' => $id_buku]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6  md:grid-cols-2 xl:grid-cols-2">
                        <div class=" px-4 py-3 mb-2 bg-white rounded-lg shadow-md dark:bg-gray-800 ">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Tanggal kembali</span>
                                <div
                                    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input type="date" required value="" name="tanggal_kembali"
                                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                        placeholder="Masukkan tanggal kembali" />
                                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="dark:text-white px-4 py-3 mb-2 bg-white rounded-lg shadow-md dark:bg-gray-800">

                            <div class="flex items-center justify-between mb-4 ">
                                @if ($buku->gambar)
                                    <div class="shadow-md">
                                        <img class="w-52 rounded-lg"
                                            src="{{ ($buku->gambar === null || $buku->gambar === ' ' ? 'https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' : str_contains($buku->gambar, 'https')) ? $buku->gambar : asset('uploads/' . $buku->gambar) }}"
                                            alt="{{ $buku->judul }}" />
                                    </div>
                                @endif
                            </div>
                            <div class="grid md:grid-cols-2 xl:grid-cols-2 gap-3 w-full">
                                <span class="font-medium">Judul</span>
                                <span class=" text-gray-600">{{ $buku->judul }}</span>
                                <span class="font-medium">Penulis</span>
                                <span class=" text-gray-600">{{ $buku->penulis }}</span>
                                <span class="font-medium">Tahun Terbit</span>
                                <span class=" text-gray-600">{{ $buku->tahun_terbit }}</span>
                                <span class="font-medium">Genre</span>
                                <span class=" text-gray-600">{{ $buku->gendre }}</span>
                                <span class="font-medium">Sinopsis</span>
                                <span class=" text-gray-600">{{ $buku->sinopsis }}</span>
                                <span class="font-medium">Peminjam</span>
                                <span class=" text-green-600">{{ $username }}</span>
                            </div>

                        </div>

                    </div>
                    <button onclick="confirm('Apakah anda yakin melakukan perubahan data?')" type="submit"
                        class="flex  items-center justify-center p-3 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">Simpan</button>
                </form>


            </div>
        </main>




    </div>
@endsection
