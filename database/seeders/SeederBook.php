<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SeederBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $genres = [
            (object) ['nama' => 'Horor'],
            (object) ['nama' => 'Romance'],
            (object) ['nama' => 'Edukasi'],
            (object) ['nama' => 'Fantasi'],
            (object) ['nama' => 'Fiksi Ilmiah'],
            (object) ['nama' => 'Misteri'],
            (object) ['nama' => 'Sejarah'],
            (object) ['nama' => 'Biografi'],
            (object) ['nama' => 'Komedi'],
            (object) ['nama' => 'Drama'],
            // Tambahkan genre lainnya sesuai kebutuhan
        ];

        $sinopsis_buku = [
            "D1" => "Novel karya Andrea Hirata yang mengisahkan perjuangan sekelompok anak muda dari daerah miskin di Belitung untuk mendapatkan pendidikan yang layak, serta impian dan kegigihan mereka dalam menghadapi berbagai rintangan.",
            "D2" => "Novel karya Pramoedya Ananta Toer yang mengisahkan tentang kehidupan sosial dan politik di Hindia Belanda pada awal abad ke-20, melalui kisah perjuangan seorang pribumi bernama Minke dalam mengejar pendidikan dan menghadapi ketidakadilan rasial.",
            "D3" => "Novel karya Habiburrahman El Shirazy yang mengisahkan tentang percintaan, agama, dan kehidupan sosial di Indonesia, melalui kisah cinta antara seorang mahasiswa bernama Fahri dan empat wanita yang berbeda latar belakang dan kepribadian.",
            "D4" => "Novel karya Dee Lestari yang mengisahkan perjalanan seorang perempuan muda bernama Kugy untuk menemukan makna hidupnya melalui petualangan yang penuh warna di berbagai tempat, serta pertemuan tak terduga dengan seorang pemuda bernama Keenan.",
            "D5" => "Novel karya Ahmad Fuadi yang mengisahkan perjalanan lima remaja dari berbagai latar belakang untuk meraih cita-cita mereka di Pondok Madani, sebuah pesantren modern di Jawa Barat, serta kegigihan dan keikhlasan mereka dalam menghadapi berbagai rintangan.",
            "D6" => "Novel karya Andrea Hirata yang merupakan kelanjutan dari 'Laskar Pelangi', mengisahkan perjalanan hidup Ikal setelah lulus dari sekolah dasar, impian dan tantangannya dalam mengejar pendidikan tinggi di Kota Belantika, dan perjuangannya untuk memahami arti cinta dan kehidupan.",
            "D7" => "Novel karya Dee Lestari yang mengisahkan tentang kisah percintaan dan pertemanan antara tokoh-tokoh yang memiliki kekuatan super atau 'supernova', serta petualangan mereka dalam mencari makna hidup dan menghadapi konflik internal dan eksternal.",
            "D8" => "Kumpulan cerita pendek karya Leila S. Chudori yang mengisahkan tentang berbagai aspek kehidupan di Indonesia, dari persahabatan hingga perjuangan politik, dengan latar belakang laut sebagai metafora yang menghubungkan setiap cerita.",
            "D9" => "Novel karya Dewi Lestari yang mengisahkan tentang kisah cinta, kehidupan, dan spiritualitas seorang perempuan bernama Madre, serta perjuangannya untuk menemukan makna kehidupan dan kebahagiaan sejati dalam berbagai liku-liku perjalanan hidupnya.",
            "D10" => "Novel karya Ahmad Tohari yang mengisahkan tentang kehidupan masyarakat desa di Jawa pada masa sebelum dan sesudah kemerdekaan, melalui kisah seorang penari ronggeng bernama Srintil yang menghadapi berbagai dilema dan tragedi dalam kehidupannya.",
            "D11" => "Novel karya Andrea Hirata yang merupakan kelanjutan dari 'Sang Pemimpi', mengisahkan perjalanan hidup Ikal di Inggris dalam mengejar cita-cita dan impian, serta pertemuannya dengan berbagai orang dan pengalaman yang mengubah pandangannya tentang dunia dan kehidupan.",
            "D12" => "Novel karya Tere Liye yang mengisahkan tentang persahabatan, cinta, dan kehidupan spiritual di sebuah pesantren di Jawa Timur, melalui kisah-kisah yang mengharukan dan penuh makna dari tokoh-tokoh yang berjuang untuk mencapai cita-cita dan meraih kebahagiaan sejati.",
            "D13" => "Novel karya Wahyuningrat yang mengisahkan tentang kehidupan dan persahabatan empat mahasiswa Indonesia di Belanda, serta perjuangan mereka dalam menemukan identitas dan makna kehidupan di tengah-tengah lingkungan yang berbeda budaya.",
            "D14" => "Novel karya Ika Natassa yang mengisahkan tentang kisah cinta, persahabatan, dan perjalanan hidup sekelompok teman dari masa sekolah hingga dewasa, dengan latar belakang kota Jakarta yang penuh warna dan dinamis.",
            "D15" => "Novel karya Donny Dhirgantoro yang mengisahkan tentang perjalanan empat sahabat yang memutuskan untuk melakukan perjalanan ke puncak gunung Semeru, yang menjadi pengalaman hidup yang mengubah pandangan mereka tentang cinta, persahabatan, dan kehidupan.",
            "D16" => "Novel karya Andrea Hirata yang merupakan kelanjutan dari 'Sang Pemimpi', mengisahkan perjalanan hidup Ikal di Inggris dalam mengejar cita-cita dan impian, serta pertemuannya dengan berbagai orang dan pengalaman yang mengubah pandangannya tentang dunia dan kehidupan.",
            "D17" => "Novel karya Winna Efendi yang mengisahkan tentang kisah cinta dan persahabatan antara seorang fotografer bernama Elisa dan seorang musisi bernama Chandra, serta perjalanan mereka dalam menemukan arti cinta sejati dan mengatasi rintangan yang menghalangi hubungan mereka.",
            "D18" => "Novel karya Dee Lestari yang merupakan sekuel dari 'Perahu Kertas', melanjutkan perjalanan Kugy dan Keenan dalam mengejar impian dan meraih cinta sejati, dengan latar belakang perjalanan spiritual dan pertemuan tak terduga di berbagai tempat di Indonesia dan luar negeri.",
            "D19" => "Novel karya Dee Lestari yang mengisahkan tentang petualangan Ben dan Jody dalam mengelola kedai kopi Filosofi di Jakarta, serta perjalanan mereka dalam menemukan makna kehidupan, cinta, dan persahabatan melalui kopi dan cerita-cerita pelanggannya.",
            "D20" => "Novel karya Asma Nadia yang mengisahkan tentang kisah seorang istri yang setia menunggu suaminya yang sedang menjalani tugas di luar negeri, serta perjuangannya dalam menghadapi godaan dan rintangan yang menghadang, dengan latar belakang kehidupan masyarakat yang kompleks dan beragam.",
            "D21" => "Novel karya Bacharuddin Jusuf Habibie yang mengisahkan tentang kisah cinta antara BJ Habibie dan Ainun, serta perjalanan mereka dalam mengatasi berbagai rintangan dan cobaan dalam kehidupan, dengan latar belakang politik dan industri di Indonesia.",
            "D22" => "Novel karya Khrisna Pabichara yang mengisahkan tentang kisah cinta dan petualangan remaja yang terlibat dalam konspirasi politik dan rahasia masa lalu, dengan latar belakang dunia ilmu pengetahuan dan alam semesta yang misterius.",
            "D23" => "Novel karya Pramoedya Ananta Toer yang mengisahkan tentang perjalanan seorang tokoh bernama Minke dalam menghadapi berbagai konflik sosial dan politik di Hindia Belanda, dengan latar belakang Pulau Buru sebagai simbol perlawanan dan kebebasan.",
            "D24" => "Novel karya Laksmi Pamuntjak yang mengisahkan tentang perjalanan seorang ahli patologi bernama Aruna dan rekannya dalam melakukan penelitian tentang flu burung di berbagai daerah di Indonesia, serta kisah cinta dan persahabatan yang terjalin di sepanjang perjalanan mereka.",
            "D25" => "Novel karya Oka Rusmini yang mengisahkan tentang perjalanan seorang perempuan Bali bernama Cempaka dalam mencari kebebasan dan identitasnya di tengah-tengah tekanan budaya dan patriarki, serta perjuangannya dalam mempertahankan tradisi dan alam Bali yang indah.",
            "D26" => "Novel karya Dee Lestari yang merupakan kelanjutan dari 'Perahu Kertas 2', melanjutkan kisah cinta Kugy dan Keenan dalam mengejar impian dan mengatasi rintangan yang menghadang, dengan latar belakang perjalanan spiritual dan pertemuan tak terduga di berbagai tempat di Indonesia dan luar negeri.",
            "D27" => "Novel karya Ilana Tan yang mengisahkan tentang kisah cinta antara Keiko dan Kazuto, dua orang yang bertemu di Tokyo pada musim dingin, serta perjalanan mereka dalam menemukan arti cinta sejati dan mengatasi kesulitan hidup, dengan latar belakang keindahan dan kesendirian kota Tokyo yang dingin.",
            "D28" => "Novel karya Dee Lestari yang merupakan kelanjutan dari 'Perahu Kertas 3', melanjutkan perjalanan Kugy dan Keenan dalam mengejar impian dan meraih cinta sejati, dengan latar belakang perjalanan spiritual dan pertemuan tak terduga di berbagai tempat di Indonesia dan luar negeri.",
            "D29" => "Novel karya Adinda Febriana yang mengisahkan tentang perjalanan cinta dan pertemanan seorang mahasiswi bernama Aurel, serta konflik dan dilema yang dihadapinya dalam menghadapi berbagai masalah di kehidupan kampus, dengan latar belakang kehidupan mahasiswa yang dinamis dan beragam.",
            "D30" => "Novel karya Tere Liye yang mengisahkan tentang petualangan seorang anak muda bernama Rais dalam menemukan tujuan hidupnya di tengah-tengah perjalanan spiritual dan pencarian makna kehidupan, dengan latar belakang alam semesta yang luas dan misterius."
        ];

        $titles = [
            "Laskar Pelangi",
            "Bumi Manusia",
            "Ayat-Ayat Cinta",
            "Perahu Kertas",
            "Negeri 5 Menara",
            "Sang Pemimpi",
            "Supernova",
            "9 dari 10 Cerita yang Menggetarkan",
            "Madre",
            "Ronggeng Dukuh Paruk",
            "Edensor",
            "Rindu",
            "Rantau 1 Muara",
            "Antologi Rasa",
            "5 cm",
            "Sebelas Patriot",
            "Refrain",
            "Partikel",
            "Filosofi Kopi",
            "Surga yang Tak Dirindukan",
            "Habibie & Ainun",
            "Rectoverso",
            "Arus Balik",
            "Amba",
            "Tarian Bumi",
            "Perahu Kertas 2",
            "Winter in Tokyo",
            "Perahu Kertas 3",
            "Marmut Merah Jambu",
            "Rindu"
        ];

        $sinopsis_keys = array_keys($sinopsis_buku);

        for ($i = 0; $i < count($sinopsis_keys); $i++) {
            $randomGenre = $faker->randomElement($genres);
            $sinopsisKey = $sinopsis_keys[$i];

            DB::table('tb_buku')->insert([
                'judul' => $titles[$i],
                'penulis' => $faker->name,
                'kode_buku' => '0879689' . $i, // Menggunakan kode buku yang berbeda untuk setiap entri
                'status_pinjaman' => 0, // Status pinjam default 0
                'kategori' => $faker->word,
                'sinopsis' => $sinopsis_buku[$sinopsisKey],
                'tahun_terbit' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gendre' => $randomGenre->nama, // Menggunakan genre yang dipilih secara acak
                'gambar' => $faker->imageUrl($width = 640, $height = 480, 'books'),
                'created_at' => now(),
            ]);
        }
    }
}
