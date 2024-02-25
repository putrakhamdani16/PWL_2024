***Nama : Nanda Putra Khamdani*** <br>
***Kelas : TI-2F***


## Praktikum Basic Routing

a. Pada bagian ini, kita akan membuat dua buah route dengan ketentuan sebagai berikut.

![alt text](<resources/img/Screenshot 2024-02-25 114631.png>)

b. Buka file routes/web.php. Tambahkan sebuah route untuk nomor 1 seperti di bawah ini:
(![alt text](<resources/img/Screenshot 2024-02-25 114959.png>))
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

b. Jalankan kode dengan menuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/user/NamaAnda. Perhatikan halaman yang muncul dan 
jelaskan pengamatan Anda. 

c. Selanjutnya, coba tuliskan URL: localhost/PWL_2024/public/user/. Perhatikan 
halaman yang muncul dan jelaskan pengamatan Anda

d. Suatu route, juga bisa menerima lebih dari 1 parameter seperti kode berikut ini. Route 
menerima parameter $postId dan juga $comment. 
![alt text](<resources/img/Screenshot 2024-02-25 123904.png>)

e. Jalankan kode dengan menuliskan URL untuk memanggil route tersebut: 
localhost/PWL_2024/public/posts/1/comments/5. Perhatikan halaman yang muncul 
dan jelaskan pengamatan Anda.

f. Kemudian buatlah route /articles/{id} yang akan menampilkan output “Halaman Artikel 
dengan ID {id}”, ganti id sesuai dengan input dari url. 
## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
