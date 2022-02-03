<?php

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
    return view('home', [
       "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
       "title" => "About",
       "name" => "Doni Irawan",
       "email" => "donicyber5@gmail.com",
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
             "title" => "Natsume ungkap tampilan game harvest moon one world",
             "slug" => "Natsume ungkap tampilan game harvest moon one world",
             "author" => "Jakarta, CNBC Indonesia",
             "body" => "Developer Natsume bersiap meluncurkan game simulasi pertanian populer bernama Harvest Moon: One World. Kini para penggemar game ini bisa menyaksikan trailer.
             Harvest Moon merupakan salah klasik yang diluncurkan pada tahun 1996. game ini memiliki banyak penggemar. Natsume pun sudah memastikan game ini akan muncul di PlayStation 4 dan Nintendo Switch di Amerika Utara.
             Sebagai pengenalan awal, Natsume pun meluncurkan trailer dari Harvest Moon: One World dalam New Game+ Expo. Dalam video berdurasi dua menit ini, gamer akan bisa menanam tumbuhan, mengelola peternakan dan berinteraksi dengan NPC yang ada dalam game.
             Tampilan Harvest Moon: One World juga memiliki visual 3D, namun belum diketahui seperti apa gameplay dari game ini. Namun Presiden dan CEO Natsume Hiro Maekawa mengatakan game ini akan mempertahankan ciri khasnya yang ramah keluarga. "
        ],
        [
            "title" => "Activision Dicaplok Microsoft, Bagaimana Nasib Game Call of Duty di PlayStation?",
            "slug" => "Activision Dicaplok Microsoft, Bagaimana Nasib Game Call of Duty di PlayStation?",
            "author" => "Bill Clinten",
            "body" => "Saat Microsoft mengakuisisi Bethesda Softworks dan studio game di bawah naungan ZeniMax Media 2021 lalu, mereka menyebut bahwa game terbaru bikinan Bethesda akan eksklusif di PC dan Xbox. Kini setelah Microsoft mencaplok Activision Blizzard, nasib beragam game yang berada di bawah payung Activision pun dipertanyakan. Salah satunya adalah game populer dari seri Call of Duty. Game yang sudah hadir sejak 2003 ini populer dimainkan di berbagai konsol, termasuk PlayStation. Lantas dengan masuknya Activision ke Microsoft, akankah game ini jadi eksklusif hanya untuk PC dan Xbox? Sejumlah laporan mengatakan bahwa pihak Activision konon telah memastikan game terbaru dari seri Call of Duty tidak akan bernasib seperti game bikinan Bethesda."
       ],
    ];
    return view('posts', [
      "title" => "Posts",
      "posts" => $blog_posts
    ]);
});

//Halaman single post
Route::get('posts/{slug}', function($slug) {
    return view('post');
});
