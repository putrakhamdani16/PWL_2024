***Nama : Nanda Putra Khamdani*** <br>
***Kelas : TI-2F***


## Praktikum Basic Routing

a. Pada bagian ini, kita akan membuat dua buah route dengan ketentuan sebagai berikut.

![alt text](<resources/img/Screenshot 2024-02-25 114631.png>)

b. Buka file routes/web.php. Tambahkan sebuah route untuk nomor 1 seperti di bawah ini:

![alt text](<resources/img/Screenshot 2024-02-25 114959.png>)

![alt text](<resources/img/Screenshot 2024-02-25 115028.png>)

c. Buka browser, tuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/hello. Perhatikan halaman yang muncul apakah sudah sesuai dan jelaskan pengamatan Anda.

![alt text](<resources/img/Screenshot 2024-02-25 121712.png>)

d. Untuk membuat route kedua, tambahkan route /world seperti di bawah ini:

![alt text](<resources/img/Screenshot 2024-02-25 122352.png>)

![alt text](<resources/img/Screenshot 2024-02-25 122458.png>)

e. Bukalah pada browser, tuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/world. Perhatikan halaman yang muncul apakah sudah 
sesuai dan jelaskan pengamatan Anda. 

![alt text](<resources/img/Screenshot 2024-02-25 122511.png>)

f. 
Selanjutnya, cobalah membuat route ’/’ yang menampilkan pesan ‘Selamat Datang’. 

![alt text](<resources/img/Screenshot 2024-02-25 122831.png>)

![alt text](<resources/img/Screenshot 2024-02-25 122843.png>)

g. Kemudian buatlah route ‘/about’ yang akan menampilkan NIM dan nama Anda.

![alt text](<resources/img/Screenshot 2024-02-25 122848.png>)

![alt text](<resources/img/Screenshot 2024-02-25 122900.png>)



## Praktikum Route Parameters 

a. Kita akan memanggil route /user/{name} sekaligus mengirimkan parameter berupa nama user $name seperti kode di bawah ini. 

![alt text](<resources/img/Screenshot 2024-02-25 123855.png>)

![alt text](<resources/img/Screenshot 2024-02-25 124532.png>)

b. Jalankan kode dengan menuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/user/NamaAnda. Perhatikan halaman yang muncul dan 
jelaskan pengamatan Anda. 

![alt text](<resources/img/Screenshot 2024-02-25 124659.png>)

c. Selanjutnya, coba tuliskan URL: localhost/PWL_2024/public/user/. Perhatikan 
halaman yang muncul dan jelaskan pengamatan Anda

![alt text](<resources/img/Screenshot 2024-02-25 124736.png>)

d. Suatu route, juga bisa menerima lebih dari 1 parameter seperti kode berikut ini. Route 
menerima parameter $postId dan juga $comment. 

![alt text](<resources/img/Screenshot 2024-02-25 123904.png>)

![alt text](<resources/img/Screenshot 2024-02-25 125426.png>)

e. Jalankan kode dengan menuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/posts/1/comments/5. Perhatikan halaman yang muncul 
dan jelaskan pengamatan Anda.

![alt text](<resources/img/Screenshot 2024-02-25 125453.png>)

f. Kemudian buatlah route /articles/{id} yang akan menampilkan output “Halaman Artikel 
dengan ID {id}”, ganti id sesuai dengan input dari url. 

![alt text](<resources/img/Screenshot 2024-02-25 125718.png>)

![alt text](<resources/img/Screenshot 2024-02-25 125832.png>)

## Praktikum Optional Parameters

a. Kita akan memanggil route /user sekaligus mengirimkan parameter berupa nama user 
$name dimana parameternya bersifat opsional.

![alt text](<resources/img/Screenshot 2024-02-25 130325.png>)

![alt text](<resources/img/Screenshot 2024-02-25 130335.png>)

b. Jalankan kode dengan menuliskan URL: localhost/PWL_2024/public/user/. 
Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

![alt text](<resources/img/Screenshot 2024-02-25 130409.png>)


c. Selanjutnya tuliskan URL: localhost/PWL_2024/public/user/NamaAnda. Perhatikan 
halaman yang muncul dan jelaskan pengamatan Anda

![alt text](<resources/img/Screenshot 2024-02-25 130422.png>)

d. Ubah kode pada route /user menjadi seperti di bawah ini. 

![alt text](<resources/img/Screenshot 2024-02-25 130638.png>)

e. Jalankan kode dengan menuliskan URL: localhost/PWL_2024/public/user/. 
Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

![alt text](<resources/img/Screenshot 2024-02-25 130801.png>)

![alt text](<resources/img/Screenshot 2024-02-25 130808.png>)

## Praktikum Membuat Controller 

a. Untuk membuat controller pada Laravel telah disediakan perintah untuk menggenerate 
struktur dasarnya. Kita dapat menggunakan perintah artisan diikuti dengan definisi nama 
controller yang akan dibuat.

![alt text](<resources/img/Screenshot 2024-02-25 131645.png>)

![alt text](<resources/img/Screenshot 2024-02-25 132250.png>)

b. Buka file pada app/Http/Controllers/WelcomeController.php. Struktur 
pada controller dapat digambarkan sebagai berikut:

![alt text](<resources/img/Screenshot 2024-02-25 131650.png>)

![alt text](<resources/img/Screenshot 2024-02-25 131656.png>)

![alt text](<resources/img/Screenshot 2024-02-25 132257.png>)

c. Untuk mendefinisikan action, silahkan tambahkan function dengan access public. Sehingga 
controller di atas menjadi sebagai berikut:

![alt text](<resources/img/Screenshot 2024-02-25 131701.png>)

![alt text](<resources/img/Screenshot 2024-02-25 132529.png>)

d. Setelah sebuah controller telah didefinisikan action, kita dapat menambahkan controller 
tersebut pada route. Ubah route /hello menjadi seperti berikut:

![alt text](<resources/img/Screenshot 2024-02-25 131706.png>)

![alt text](<resources/img/Screenshot 2024-02-25 132937.png>)

e. Buka browser, tuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/hello. Perhatikan halaman yang muncul dan jelaskan 
pengamatan Anda. 

![alt text](<resources/img/Screenshot 2024-02-25 133044.png>)

f. Modifikasi hasil pada praktikum poin 2 (Routing) dengan konsep controller. Pindahkan 
logika eksekusi ke dalam controller dengan nama PageController.

![alt text](<resources/img/Screenshot 2024-02-25 131710.png>)

![alt text](<resources/img/Screenshot 2024-02-25 131713.png>)

g. Modifikasi kembali implementasi sebelumnya dengan konsep Single Action Controller. 
Sehingga untuk hasil akhir yang didapatkan akan ada HomeController, 
AboutController dan ArticleController. Modifikasi juga route yang 
digunakan. 