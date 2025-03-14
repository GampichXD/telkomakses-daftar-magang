

# Tentang Project
<br />
<div align="center">
  <a href="#">
    <img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" alt="Logo" width="auto" height="80">
  </a>

  <h2 align="center">INTERNSHIP-REGISTER WEB & ADMIN DASHBOARD</h2>

  <hr>
</div>



Internship-Register Web & Admin Dashboard menjadi proyek utama dari Praktek Kerja Industri di **PT Telkom Akses Semarang**. Proyek ini merupakan hasil studi literature dan penerapan ilmu yang telah dipelajari selama masa magang yang berlangsung kurang-lebih sekitar satu setengah bulan.



# Tech Stack

-   **Laravel** : Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web yang robust dan efisien. Dalam pembuatan landing page, Laravel akan menangani backend, termasuk pengelolaan rute, otentikasi, database, dan logika aplikasi lainnya.
-   **Tailwind CSS** : Tailwind CSS adalah framework CSS berbasis utilitas yang memungkinkan pengembang mendesain elemen UI secara cepat dengan kelas-kelas CSS yang telah disediakan. Dalam pembuatan landing page, Tailwind CSS digunakan untuk mendesain antarmuka secara responsif dan modern tanpa menulis banyak kode CSS khusus.
-   **Javascript** : JavaScript adalah bahasa pemrograman yang digunakan untuk menambahkan interaktivitas pada halaman web. Dalam pembuatan landing page, JavaScript bisa digunakan untuk menambah animasi, interaksi pengguna, validasi form, dan memperkaya pengalaman pengguna secara keseluruhan.
-   **Vite** : Vite adalah build tool yang digunakan untuk mempercepat proses pengembangan dengan melakukan kompilasi dan hot-reloading secara cepat. Dalam pembuatan landing page, Vite digunakan untuk mengelola dan membundel aset frontend (seperti JavaScript dan CSS) dengan lebih efisien.
-   **Tailgrids** : Tailgrids adalah library komponen UI berbasis Tailwind CSS yang menyediakan elemen-elemen antarmuka siap pakai, seperti tombol, form, modal, dan lainnya. Tailgrids mempermudah pengembang dalam membangun landing page dengan komponen-komponen yang telah dirancang sebelumnya dan dapat langsung digunakan, mempercepat proses pengembangan tanpa harus membuat elemen dari awal.





# Running Project

ebelum memulai proyek, pastikan untuk mengonfigurasi proyek agar dapat dijalankan di server lokal. Berikut adalah langkah-langkahnya.

## Prerequisites

-   install [XAMPP](https://www.apachefriends.org/download.html) atau [Laragon](https://laragon.org/download/) terlebih dahulu. Lalu jalankan apache dan MySQL. Jangan lupa untuk tekan tombol admin untuk masuk ke PhpMyAdmin (database lokal).

- install [Laravel/Composer](https://laravel.com/docs/11.x/installation) yang nantinya digunakan sebagai backend yang menghubungkan interface aplikasi dengan database melalui API.

-   install [Node JS/NPM](https://nodejs.org/en/download/current) untuk menjalankan tailwindcss dan plugin flowbite nantinya



## Get A Code and Installation

1. Saat setup dan instalasi NPM, composer dan XAMPP, clone repo.
2. Clone repo dengan membuka CMD/terminal
    ```sh
    https://github.com/GampichXD/telkomakses-daftar-magang.git
    ```
3. Install composer dependencies yang ada pada project.
    ```sh
    composer install
    ```
4. Install NPM packages.JSON pada folder root Laravel
    ```sh
    npm install
    ```





## Setup Environment and Usage
1. Buka project di vscode atau dengan mengetikan ini di terminal sesuai direktori project
```
code .
```
2. Karena project akan di-running di server lokal kalian, maka setup .env dengan membuka terminal di vscode lalu ketikkan berikut dan nanti akan ada .env terbaru
```
cp .env.exmple .env
```
3. Nyalakan MySQL di XAMPP/Laragon dan sesuaikan kode .env berikut dengan database atau buat database yang namanya sama dengan DB ini ke PHPmyAdmin
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coba
DB_USERNAME=root
DB_PASSWORD=
```
4. Jalankan migration untuk membuat tabel database
```
php artisan migrate
```

5. Dapatkan key .env dengan mengenerate
```
php artisan key:generate
```

7. Jalankan Tailwind styling di salah satu
```ps
  npm run dev
```

7. Jalankan project di **terminal yang lain** dengan
```ps
  php artisan serve
```

_Untuk informasi lebih lanjut tentang cara menjalankan proyek Laravel, Anda dapat mengunjungi situs web resmi Laravel di: [Laravel Documentation](https://laravel.com)_


# Screenshot Interface Landing Page
![Hero-section](/public/images/screenshot.png)

# Credits For Source
Thanks for tmemplate!
Project Source: [https://github.com/TailGrids/play-tailwind](https://github.com/TailGrids/play-tailwind)

# Contact Me

Nama - [Abraham](https://www.linkedin.com/in/abraham-abraham-376b42244/) abrahambram295@gmail.com

Project Link: [https://github.com/GampichXD/telkomakses-daftar-magang](https://github.com/GampichXD/telkomakses-daftar-magang)




[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo_name.svg?style=for-the-badge
[contributors-url]: https://github.com/github_username/repo_name/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo_name.svg?style=for-the-badge
[forks-url]: https://github.com/github_username/repo_name/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo_name.svg?style=for-the-badge
[stars-url]: https://github.com/github_username/repo_name/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo_name.svg?style=for-the-badge
[issues-url]: https://github.com/github_username/repo_name/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo_name.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Tailwind-url]: https://tailwindcss.com
[Tailwind.com]: https://img.shields.io/badge/tailwindcss-3246a8?style=for-the-badge&logo=tailwindcss&logoColor=white
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com
[Js.com]: https://javascript.info
[JS-image]: https://img.shields.io/badge/javascript-ebdd1c?style=for-the-badge&logo=javascript&logoColor=white