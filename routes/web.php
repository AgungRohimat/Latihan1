<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Route::get('posting/{nama?}/{ttl?}/{alamat?}',
//     function ($nama, $ttl, $alamat) {
//         return view('post',
//             [
//                 'a' => $nama,
//                 'b' => $ttl,
//                 'c' => $alamat,

//             ]);
//     });

// Route::get('/hal2', function () {

//     $Nama = "Agung Rohimat";
//     $TTL = "Bandung, 17-02-03";
//     $Alamat = "Kp.Cilisung";
//     $No = "089665496616";
//     $jk = "Laki-Laki";
//     return view('halo', compact('Nama', 'TTL', 'Alamat', 'No', 'jk'));
// });

// Route::get('blog', function () {
//     $data = [
//         ['id' => 1, 'title' => 'Olahraga', 'content' => 'Sepak Bola'],
//         ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang RI ke Luar Negri'],

//     ];

//     return view('blog', compact('data'));
// });

// Route::get('data-siswa', function () {
//     $data = [
//         [
//             'nis' => 1,
//             'nama' => 'Agung',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'RPL',
//             'kelas' => 'XII',
//             'wali' => 'Bu Herna',
//         ],
//         [
//             'nis' => 2,
//             'nama' => 'Riska',
//             'jk' => 'Perempuan',
//             'jurusan' => 'RPL',
//             'kelas' => 'XII',
//             'wali' => 'Bu Herna',
//         ],
//         [
//             'nis' => 3,
//             'nama' => 'Farid',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'RPL',
//             'kelas' => 'XII',
//             'wali' => 'Bu Herna',
//         ],
//         [
//             'nis' => 4,
//             'nama' => 'Maudy',
//             'jk' => 'Perempuan',
//             'jurusan' => 'RPL',
//             'kelas' => 'XII',
//             'wali' => 'Bu Herna',
//         ],
//         [
//             'nis' => 5,
//             'nama' => 'Kidam',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'RPL',
//             'kelas' => 'XII',
//             'wali' => 'Miss Yanti',
//         ],
//         [
//             'nis' => 6,
//             'nama' => 'Ridwan',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'RPL',
//             'kelas' => 'XII',
//             'wali' => 'Miss Yanti',
//         ],
//         [
//             'nis' => 7,
//             'nama' => 'Taufiq',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'TKR',
//             'kelas' => 'XII',
//             'wali' => 'Miss Maya',
//         ],
//         [
//             'nis' => 8,
//             'nama' => 'Gilang',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'TKR',
//             'kelas' => 'XII',
//             'wali' => 'Miss Maya',
//         ],
//         [
//             'nis' => 9,
//             'nama' => 'Hendra',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'TKR',
//             'kelas' => 'XII',
//             'wali' => 'Bu Isma',
//         ],
//         [
//             'nis' => 10,
//             'nama' => 'Yuda',
//             'jk' => 'Laki-Laki',
//             'jurusan' => 'TKR',
//             'kelas' => 'XII',
//             'wali' => 'Bu Isma',
//         ],

//     ];

//     return view('data-siswa', compact('data'));
// });

// Route::get('siswa', function () {
//     $siswas = [
//         ['id' => 1,
//             'nama' => 'Agung',
//             'username' => 'agung',
//             'email' => 'agung@gmail.com',
//             'alamat' => 'Bandung',
//             'mapel' => [
//                 'mapel1' => 'Bahasa Indonesia',
//                 'mapel2' => 'Bahasa Inggris',
//                 'mapel3' => 'Bahasa Jepang',
//             ],
//         ],

//     ];

//     return view('siswa', compact('siswas'));
// });

// Route::get('hobi', function () {
//     $hobis = [
//         ['nis' => 1,
//             'nama' => 'Agung',
//             'kelas' => 'XII RPL 1',
//             'hobi' => [
//                 'hobi1' => 'Bermain Basket',
//                 'hobi2' => 'Olahraga',
//                 'hobi3' => 'Rebahan',
//             ],
//         ],
//         ['nis' => 2,
//             'nama' => 'Cecep',
//             'kelas' => 'XII RPL 1',
//             'hobi' => [
//                 'hobi1' => 'Bermain Game',
//                 'hobi2' => 'Nonton Film',
//                 'hobi3' => 'Rebahan',
//             ],
//         ],

//     ];

//     return view('hobi', compact('hobis'));
// });

// Route::get('/biodata', function () {
//     echo "<h1>My Biodata</h1> <br>
// Nama : Agung Rohimat <br>
// TTL : Bandung, 17-02-03 <br>
// Alamat : Kp.Cilisung <br>
// No Tlpn : 089665496616 <br>
// Jenis Kelamin : Laki-Laki";
// });

//Route Parameter
// Route::get('/input/{nama}/{kelas}/{ttl}/{alamat}/{no}/{jk}', function ($nama, $kelas, $ttl, $alamat, $no, $jk) {
//     echo "Nama Saya : " . $nama . "<br>";
//     echo "Kelas : " . $kelas . "<br>";
//     echo "TTL : " . $ttl . "<br>";
//     echo "Alamat : " . $alamat . "<br>";
//     echo "No.Tlpn : " . $no . "<br>";
//     echo "Jenis Kelamin : " . $jk;

// });

//Route Opsional Parameter
// Route::get('/opsional/{nama?}/{kelas?}/{ttl?}/{alamat?}/{no?}/{jk?}', function
//     ($nama = "Agung Rohimat", $kelas = "XII RPL 1", $ttl = "Bandung, 17-02-03", $alamat = "Kp.Cilisung", $no = "089665496616", $jk = "Laki-Laki") {
//         echo "Nama Saya : " . $nama . "<br>";
//         echo "Kelas : " . $kelas . "<br>";
//         echo "TTL : " . $ttl . "<br>";
//         echo "Alamat : " . $alamat . "<br>";
//         echo "No.Tlpn : " . $no . "<br>";
//         echo "Jenis Kelamin : " . $jk;

//     });

// Route::get('/ujian/{nama}/{kelas?}/{mtk?}/{indo?}/{inggris?}/{produktif?}', function
//     ($nama, $mtk = 0, $indo = 0, $inggris = 0, $pro = 0, $kelas = "XII RPL 1") {

//         echo "Nama Saya : " . $nama . "<br>";
//         echo "Kelas : " . $kelas . "<br>";
//         echo "Nilai Matematika: " . $mtk . "<br>";
//         echo "Nilai Indonesia: " . $indo . "<br>";
//         echo "Nilai Inggris: " . $inggris . "<br>";
//         echo "Nilai Produktif: " . $pro . "<br>";
//         $jumlah = $mtk + $indo + $inggris + $pro;
//         $rata = $jumlah / 4;
//         echo "Rata-Rata: " . $rata . "<br>";

//     });

// Route::get('/pesan/{makanan?}/{minuman?}/{cemilah?}', function
//     ($M = "", $M1 = "", $C = "") {

//         if ($M) {
//             echo "Anda Memesan : <br>";
//             echo " <b>Makanan : " . $M . "</b><br>";
//             if ($M = $M1) {

//                 echo "<b>Minuman : " . $M1 . "</b><br>";
//                 if ($M1 = $C) {

//                     echo "<b>Cemilan : " . $C . "</b>";
//                 }
//             }

//         } else {

//             echo "<b>Anda Tidak Memesan</b>";
//         }

//     });

// Route::get('/tesmodel', function () {
//     $query = App\Models\Post::all();
//     return $query;
// });

// Route::get('/test-post', function () {
//     $query = App\Models\Post::all();
//     return view('test-post', compact('query'));
// });

// Route::get('/tesbio', function () {
//     $query = App\Models\Biodatas::all();
//     return $query;
// });

// Route::get('/biodatas', function () {
//     $query = App\Models\Biodatas::all();
//     return view('biodatas', compact('query'));
// });

// Route::get('/contoh', function () {
//     return view('sample');
// });

Route::get('/contoh', [MyController::class, 'tampilkan']);
Route::get('/artikel', [PostController::class, 'data']);

Route::get('/barang', [BarangController::class, 'barang']);
Route::get('/pesanan', [PesananController::class, 'pesanan']);
Route::get('/pembelian', [PembelianController::class, 'pembelian']);
Route::get('/pembeli', [PembeliController::class, 'pembeli']);
Route::get('/suplier', [SuplierController::class, 'suplier']);
