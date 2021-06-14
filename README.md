# HelloPet
HelloPet adalah aplikasi berbasis web yang berjalan di bidang jasa. HelloPet sangat berguna bagi pemilik hewan peliharaan seperti anjing dan kucing untuk merawat dan mempercantik hewan peliharaannya. HelloPet memiliki fitur pemesanan layanan home service pet grooming yang menyediakan berbagai paket grooming dengan harga yang bervariasi. Jadwal pelayanan home service dapat diatur oleh pelanggan dan pembayaran dapat dilakukan setelah pelayanan ataupun melalui bank.

# Logo
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60484dd8c5e3835753f1af0b/e96564383ea967db983e7295a33678e9/HELLOPETFIX.png" width="500" height="270" />

# Laporan Akhir Projek
- **KOM331-P1** Rekayasa Perangkat Lunak
- Kelompok 2

## Asisten Praktikum
- Levina Siatono **G64180019**
- Ali Naufal Amrullah **G64180080**
- Muhammad Fauzan Ramadhan **G64180117**

## Team
<table>
  <thead>
      <th></th>
      <th>NAMA</th>
      <th>NIM</th>
      <th>ROLE</th>
  </thead>
  
  <tbody>
    <tr>
      <td>1</td>
      <td>Herdika Shidqi Wibowo</td>
      <td>G64190020</td>
      <td>Back-end Developer</td>
     </tr> 
      <td>2</td>
      <td>Reru Dharmastiawan Palentino</td>
      <td>G64190041</td>
      <td>Front-end Developer</td>
     </tr>
     <tr>
      <td>3</td>
      <td>Tiara Putri Bellini</td>
      <td>G64190044</td>
      <td>Project Manager</td>
     </tr>
    <tr>
      <td>4</td>
      <td>WIka Fauziah</td>
      <td>G64190047</td>
      <td>UI/UX Designer</td>
     </tr>
    </tbody>
</table> 
    
## Latar Belakang
Saat ini memiliki hewan peliharaan sudah menjadi hobi tersendiri di kalangan masyarakat baik di dalam maupun di luar negeri. Aktivitas  memelihara  hewan  bukan  hanya  sekedar  hobi  yang  tidak  bermanfaat. Menurut Setianingrum (2012) dengan melakukan aktivitas  memelihara  hewan,  seseorang  dapat  mendapatkan  tiga  manfaat,  yaitu:  (1) membantu  untuk  memulihkan  kesehatan  dengan  cara  menerapkan  gaya  hidup  sehat seperti  mengajak  jalan-jalan  ataupun  bermain,  (2)  membantu  mengatasi  stres  dengan menganggap hewan  sebagai  hiburan  dan  teman  bermain,  (3)  bersosialisasi  dengan lingkungan    dan    orang-orang    baru  (Nurlayli dan Hidayati 2014). <br> 
<br> Perawatan hewan peliharaan merupakan hal yang sangat penting untuk menjaga kesehatan hewan peliharaan, salah satunya adalah melakukan grooming. Pet grooming adalah proses pembersihan dan perawatan terhadap pet berupa penyikatan, pembersihan telinga, pembersihan mata, menyikat gigi, memandikan pet dan pemangkasan kuku (Patricia 2019). </br>
<br> Di masa pandemi ini, seluruh masyarakat diperintahkan untuk melakukan PSBB (Pembatasan Sosial Berskala Besar) guna mencegah penyebaran virus COVID-19 yang tak kunjung reda. Hal ini menimbulkan berbagai keresahan di kalangan masyarakat, salah satunya pemilik hewan peliharaan. Bukan hanya mereka yang harus menjaga kesehatannya tetapi juga hewan peliharaan mereka membutuhkan perawatan khusus agar tetap senantiasa sehat. Seiring perkembangan zaman dan teknologi, keresahan tersebut dapat ditangani dengan adanya perangkat lunak yang menyediakan layanan home service pet grooming . Groomers yang dipastikan sehat akan datang ke rumah pelanggan dan melakukan grooming sesuai pemesanan. Proses pet grooming ini dapat dilihat langsung oleh pelanggan sehingga dapat memberikan kepercayaan tersendiri terkait penanganan hewan peliharaannya. </br>
    
## Ruang Lingkup
### Perangkat Keras :
- Laptop    : Vivobook K413FQ
- RAM       : 8GB
- Processor : Intel(R) Core(TM) i5-10210U CPU @ 1.60GHz
### Perangkat Lunak :
- Database    : MySQL
- Server      : Apache
- Front-end   : HTML, CSS, PHP
- Text Editor : Sublime Text, Visual Studio Code
### Lainnya         :
- Version Control dan Collaboration Platform  : Github
- Project Management Tools                    : Trello
 
 ## Tujuan
- Memudahkan pelanggan untuk merawat dan mempercantik hewan peliharaannya.
- Menyediakan layanan “panggil ke rumah”, sehigga pemilik tidak perlu repot untuk pergi ke luar rumah.
- Menyediakan layanan grooming yang sesuai dengan jenis dan kebutuhan hewan peliharaan tersebut.

## User Target
Pemilik hewan peliharaan kucing atau anjing yang ingin memandikan dan merawat kebersihan hewan peliharaannya.

## User Stories
- Sebagai pemilik hewan, saya ingin mengetahui perawatan apa saja yang tersedia, agar saya dapat memesan perawatan yang sesuai dengan kebutuhan hewan saya
- Sebagai pengunjung, saya ingin mencari keyword tertentu, agar saya dapat menemukan keyword yang saya maksud dengan mudah
- Sebagai seorang customer, saya ingin melihat kembali history pemesanan, agar saya dapat mengetahui pemesanan yang dilakukan sebelumnya
- Sebagai calon pengguna, saya ingin membuat akun dengan data diri, email, dan password, agar saya dapat melakukan aktivitas pada web
- Sebagai customer, saya ingin memberikan penilaian setelah pelayanan, agar saya dapat memberi masukan kepada pembuat aplikasi
- Sebagai pengguna yang telah log out, saya ingin log in kembali dengan email dan password, agar saya dapat kembali melakukan aktivitas pada web

## Fitur
### Log in dan Log out
User yang ingin booking pada HelloPet, diharuskan untuk log in akun terlebih dahulu. Setelah user selesai melakukan booking, tentu saja user dapat log out akun kapan saja.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6056d17986b7272e907b9/552448a5b210fdc44fd075cb7001a5c2/Login.png" width="1000" height="430" />

### Sign in
Jika user belum memiliki akun dan tertarik untuk melakukan booking di HelloPet, user akan dialihkan untuk mengisi data diri. Data yang dibutuhkan berupa name, email, username, password, dan phone number.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6056d17986b7272e907b9/1b21dae10bb3cc8c0f83045fb352b331/Sign_up.png" width="1000" height="430" />

### Booking
#### Pet Details
User dapat mengisi detail hewan peliharaannya yang ingin melakukan service grooming.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c5f37b6bf735676ccdd098/be5e666acb135a1769545c74bfe64684/Pet_details.png" width="1000" height="470" />

##### Pet Type
User dapat memilih hewan peliharaannya berjenis anjing atau kucing.
##### Pet Age
User dapat mengisi berapa usia hewan peliharaannya.
##### Pet Gender
User dapat memilih hewan peliharaannya berjenis kelamin laki-laki atau perempuan.

#### Appointment Date and Time
User dapat memilih tanggal dan juga waktu grooming untuk hewan peliharaan kesayangannya.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c5f37b6bf735676ccdd098/63f6a55cb96f83c6052a73dbc0c24fe2/Apptmt.png" width="1000" height="470" />
Terdapat 4 pilihan waktu, yaitu: 
- 8.00-10.00 WIB
- 10.00-12.00 WIB
- 13.00-15.00 WIB
- 15.00-17.00 WIB

#### Grooming Packages
User dapat memilih paket grooming apa yang diinginkan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c5f37b6bf735676ccdd098/62bf780cb141d56bee67b3fec692ba56/GROOM_PACKAGES.png" width="1000" height="470" />
Terdapat 3 pilihan package, yaitu:
- Premium (premium bath, blow drying, specialized shampoo, styles cuts, nail trimming, eye stain removal, teeth brushing, anal gland expression)
- Standard (standard bath, blow drying, style cuts, nail trimming, eyes stain removal, teeth brushing)
- Basic (basic bath, blow drying, nail trimming, teeth brushing)

#### Payment Summmary
User dapat memilih metode pembayaran apa yang ingin dilakukan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c5f37b6bf735676ccdd098/32d97c817584699385df8e036bdf1284/Payment.png" width="1000" height="470" />
Terdapat 2 pilihan payment method, yaitu:
- Transfer Bank (BCA, Mandiri, BNI, BRI)
- After Service

### Booking Details
User dapat melihat detail pemesanan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6048084d8dc6047d959d1/4b94273e5d8f68c06990133b4caa9c0e/BOOKING_DETAILS(1).png" width="700" height="850" />

### Cancel Appointment
User dapat menggagalkan pertemuan grooming hewan peliharaannya jika diinginkan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c604b5e7bbd645885c867f/c446f37966e299158dba058267dc1180/BOOKING_CANCELLED.png" width="700" height="850" />

### Memberikan Review
User dapat memberikan review dalam rangka membangun service HelloPet yang lebih baik.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c604244b303650ca0fce83/dfdc7f3e7ce9b9783ceb95097395f20e/Giving_Review.png" width="1000" height="470" />

### Melihat Review
User dapat meilhat review dari pengguna lainnya.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c604244b303650ca0fce83/b19cd237e44432a9b290be535e4214cb/Review.png" width="1360" height="870" />

### Edit Account
User dapat mengganti data dirinya yang berupa name, phone number, gender, address.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c60505e3da2e45f755e9db/b8b50282f1299842d1d61fb3f7f550a6/Profile.png" width="1000" height="470" />

### Mengganti Password
User dapat mengganti password.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c60505e3da2e45f755e9db/ad2f906fc0442b3927532d9eb4efbf31/Profile(2).png" width="1000" height="470" />

### Delete Account
User juga bebas menghapus akunnya kapan saja.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c60505e3da2e45f755e9db/eaaac3d033ad4be2ce25b7811240752c/Profile(3).png" width="1000" height="470" />

### Notifications
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c604d8d4a235827c323704/866cf42ce8d0c14f2f49a4b237d253d3/NOTIF.png" width="1000" height="470" />

## Use Case Diagram
### Customer
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/607f78bcb5f70f711e786d84/0b33c1e6e8771cb28d0c01bd5cee136d/UseCaseCust.png" width="500" height="400" />

### Admin dan owner
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/607f78bcb5f70f711e786d84/9b90bbdb73f1eb002a0580dd5c73a1da/UseCaseAdmOwn.png" width="500" height="400" />

## Activity Diagram
*bzz*

## Fungsi CRUD
CRUD adalah Create, Read, Update, Delete.
Jadi teknik CRUD berfungsi untuk membuat, membaca, memperbaharui, dan menghapus data pada HelloPet. 
<table>
  <thead>
      <th>Use Case</th>
      <th>User</th>
      <th>Admin</th>
      <th>Server</th>
  </thead>
  
  <tbody>
    <tr>
      <td>Akun</td>
      <td>C, R, U, D</td>
      <td>R dan D</td>
      <td>R dan U</td>
     </tr> 
      <td>Nama</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Email</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
    <tr>
      <td>Username</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Password</td>
      <td>C, R, U</td>
      <td>U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Phone Number</td>
      <td>C, R, U</td>
      <td>R dan U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Alamat</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Gender</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Jenis Hewan</td>
      <td>C dan R</td>
      <td>R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Umur Hewan</td>
      <td>C dan R</td>
      <td>R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Jenis Kelamin Hewan</td>
      <td>C dan R</td>
      <td>R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Tanggal/Waktu Pemesanan</td>
      <td>C dan R</td>
      <td>R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Pilihan Packages</td>
      <td>C dan R</td>
      <td>R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Detail Pemesanan</td>
      <td>R</td>
      <td>R</td>
      <td>C dan R</td>
     </tr>
     <tr>
      <td>Booking ID</td>
      <td>R</td>
      <td>R</td>
      <td>C</td>
     </tr>
     <tr>
      <td>Review</td>
      <td>C</td>
      <td>R</td>
      <td>R</td>
     </tr>
    </tbody>
</table> 

## ERD
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/607ad0194e80172b2e1cbb4e/11b6ed7c04ccc6a89ec3ed1b21163734/image.png" width="500" height="270" />

## Project Documentations 
<br>
[Trello](https://trello.com/b/oWXYobb6/hellopetteam-depresso)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0b8fa935f6ef3d51516/7b0d233d851f213e1763617bacfd7207/20210614_104312.png" width="1366" height="420" /> </br>
<br>
[Figma](https://www.figma.com/file/furUw4CzGsUYrucQHiXPW3/HelloPet?node-id=0%3A1)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0ab7be9ca21f11f34ee/ce7d7b4ddaa80bc50cad5c3e0b376444/20210614_104149.png" width="1366" height="420" /> </br>
<br>
[Google Sites](https://sites.google.com/apps.ipb.ac.id/hellopet)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0af4bd5ca18b73979c8/9b928f5c950d1e100ffa92057a3fc58e/20210614_104244.png" width="1366" height="420" /> </br>
<br>
[Github](https://github.com/oceanversace/darkroastcoffee)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0bb9a107741dccd8f23/c127de71cc54ddf0b0d4432836f9fd95/20210614_104219.png" width="1366" height="420" /> </br>

## Saran untuk Pengembangan Selanjutnya
- Pet grooming tersedia untuk hewan peliharaan lainnya, seperti kelinci dan musang
- HelloPet tersedia pada mobile
- Ada fungsi *search*
- Ada fungsi untuk melihat pemesanan yang sedang berjalan, pending, dan sudah selesai

## Ucapan Terima Kasih
Puji syukur kami panjatkan kepada Allah SWT atas rahmat-Nya yang telah membuat kelompok kami dapat menyelesaikan pembuatan aplikasi berbasis web bernama HelloPet dari mata kuliah Rekayasa Perangkat Lunak (KOM331). Ucapan terima kasih juga kami sampaikan kepada semua pihak yang memberi kami kesempatan dan selalu membantu kami dalam pembuatan aplikasi HelloPet, diantaranya:
<br>
- Bapak/Ibu Dosen Ilmu Komputer IPB University
- Kakak Asisten Praktikum Rekayasa Perangkat Lunak
</br>
Selama pembuatan aplikasi ini, kami mendapatkan banyak pengalaman dan ilmu yang dapat membangun kami di masa yang akan datang. Mohon maaf atas segala kekurangan dari kelompok kami. Semoga laporan yang kelompok kami buat bermanfaat bagi semua pihak.

> *Sincerely, depresso.*
