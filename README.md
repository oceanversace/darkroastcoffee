# HelloPet
HelloPet adalah aplikasi berbasis web yang berjalan di bidang jasa. HelloPet sangat berguna bagi pemilik hewan peliharaan seperti anjing dan kucing untuk merawat dan mempercantik hewan peliharaannya. HelloPet memiliki fitur pemesanan layanan *home service pet grooming* yang menyediakan berbagai paket *grooming* dengan harga yang bervariasi. Jadwal pelayanan *home service* dapat diatur oleh pelanggan dan pembayaran dapat dilakukan setelah pelayanan ataupun melalui bank.

# Logo
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/603a040258de708fc0cb9168/9b27ec1ce42243e8a84062186b5ce89e/HELLOPETFIX1.png" width="1000" height="auto" />

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
      <th>Nama</th>
      <th>NIM</th>
      <th>Role</th>
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
<br> Perawatan hewan peliharaan merupakan hal yang sangat penting untuk menjaga kesehatan hewan peliharaan, salah satunya adalah melakukan *grooming*. *Pet grooming* adalah proses pembersihan dan perawatan terhadap pet berupa penyikatan, pembersihan telinga, pembersihan mata, menyikat gigi, memandikan pet dan pemangkasan kuku (Patricia 2019). </br>
<br> Di masa pandemi ini, seluruh masyarakat diperintahkan untuk melakukan PSBB (Pembatasan Sosial Berskala Besar) guna mencegah penyebaran virus COVID-19 yang tak kunjung reda. Hal ini menimbulkan berbagai keresahan di kalangan masyarakat, salah satunya pemilik hewan peliharaan. Bukan hanya mereka yang harus menjaga kesehatannya tetapi juga hewan peliharaan mereka membutuhkan perawatan khusus agar tetap senantiasa sehat. Seiring perkembangan zaman dan teknologi, keresahan tersebut dapat ditangani dengan adanya perangkat lunak yang menyediakan layanan *home service pet grooming* . *Groomers* yang dipastikan sehat akan datang ke rumah pelanggan dan melakukan *grooming* sesuai pemesanan. Proses *pet grooming* ini dapat dilihat langsung oleh pelanggan sehingga dapat memberikan kepercayaan tersendiri terkait penanganan hewan peliharaannya. </br>
    
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
- Menyediakan layanan *grooming* yang sesuai dengan jenis dan kebutuhan hewan peliharaan tersebut.

## User Target
Pemilik hewan peliharaan kucing atau anjing yang ingin memandikan dan merawat kebersihan hewan peliharaannya.

## User Stories
- Sebagai pemilik hewan, saya ingin mengetahui perawatan apa saja yang tersedia, agar saya dapat memesan perawatan yang sesuai dengan kebutuhan hewan saya
- Sebagai seorang *customer*, saya ingin melihat kembali *history pemesanan*, agar saya dapat mengetahui pemesanan yang dilakukan sebelumnya
- Sebagai calon pengguna, saya ingin membuat akun dengan data diri, email, dan *password*, agar saya dapat melakukan aktivitas pada web
- Sebagai *customer*, saya ingin memberikan penilaian setelah pelayanan, agar saya dapat memberi masukan kepada pembuat aplikasi
- Sebagai pengguna yang telah *log out*, saya ingin *log in* kembali dengan email dan *password*, agar saya dapat kembali melakukan aktivitas pada web

## Fitur
### Sign In dan Sign Out
Pengguna yang ingin melakukan *booking* pada HelloPet, diharuskan untuk *log in* akun terlebih dahulu. Setelah pengguna selesai melakukan *booking*, tentu saja pengguna dapat *log out* akun kapan saja.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75ed749709e1c381bd0aa/8527c187156edc114fa8b2b918b75688/Sign_in.png" width="1000" height="auto" />

### Sign up
Jika pengguna belum memiliki akun dan tertarik untuk melakukan *booking* di HelloPet, pengguna akan dialihkan untuk mengisi data diri. Data yang dibutuhkan berupa nama, email, *username*, *password*, dan nomor telepon.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f2d61444023ff6c1261/c5aa2032bde108d0f36d0875531d715c/Sign_up.png" wwidth="1000" height="auto" />

### Booking
#### Pet Details
Pengguna dapat mengisi detail hewan peliharaannya yang ingin melakukan *grooming service*.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f692174675988d91e1e/bd0cdf0a0b77f2c652a53e6c9ea23463/Pet_details.png" width="1000" height="auto" />

##### Pet Type
Pengguna dapat memilih hewan peliharaannya berjenis anjing atau kucing.
##### Pet Size
Pengguna dapat memilih ukuran hewan peliharannya kecil, sedang, atau besar.
##### Pet Age
Pengguna dapat mengisi berapa usia hewan peliharaannya.
##### Pet Gender
Pengguna dapat memilih hewan peliharaannya berjenis kelamin laki-laki atau perempuan.

#### Appointment Date and Time
Pengguna dapat memilih tanggal dan juga waktu *grooming* untuk hewan peliharaan kesayangannya.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f692174675988d91e1e/dc2eb24aaa31824e09315a956c4f0b75/Date_and_time.png" width="1000" height="auto" />
Terdapat 4 pilihan waktu, yaitu: 
- 8.00-10.00 WIB
- 10.00-12.00 WIB
- 13.00-15.00 WIB
- 15.00-17.00 WIB

#### Grooming Packages
Pengguna dapat memilih paket *grooming* apa yang diinginkan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f692174675988d91e1e/269e3af989b4dad05a5de86886ea8dbb/pack.png" width="1000" height="auto" />
Terdapat 3 pilihan package, yaitu:
- **Premium** (*premium bath, blow drying, specialized shampoo, styles cuts, nail trimming, eye stain removal, teeth brushing, anal gland expression*)
- **Standard** (*standard bath, blow drying, style cuts, nail trimming, eyes stain removal, teeth brushing*)
- **Basic** (*basic bath, blow drying, nail trimming, teeth brushing*)

#### Payment Summmary
Pengguna dapat memilih metode pembayaran apa yang ingin dilakukan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f692174675988d91e1e/508ba778884bd657e11ea73ab8d6f454/Pay_sum.png" width="1000" height="auto" />
Terdapat 2 pilihan *payment method*, yaitu:
- Transfer Bank (BCA, Mandiri, BNI, BRI)
- *After Service*

### Booking Details
Pengguna dapat melihat detail pemesanan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c772b200ea0b861ddd7256/350a530a88abe7a75453e64a24b21975/berhasil.png" width="1000" height="auto" />

### Cancel Appointment
Pengguna dapat menggagalkan pertemuan *grooming* hewan peliharaannya jika diinginkan.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c772b200ea0b861ddd7256/8d620e6de25f45c36b621d46619ad61c/cancel.png" width="1000" height="auto" />

### Memberikan Review
Pengguna dapat memberikan *review* dalam rangka membangun *service* HelloPet yang lebih baik.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f462ad6291365fb6a2e/a4f203372640d04c54e1f6e65d44c559/Add_review.png" width="1000" height="auto" />

### Melihat Review
Pengguna dapat meilhat *review* dari pengguna lainnya.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c75f462ad6291365fb6a2e/b72775eb45c3afd01f3b1bca36b17471/show_rev.png" width="1000" height="auto" />

### Edit Account
Pengguna dapat mengganti data dirinya yang berupa nama, username, email, nomor telepon, dan alamat.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c772092488f56ab6fa22d3/777c55c2eef209696b60177479f3a139/edit_acc.png" width="1000" height="auto" />

### Mengganti Password
Pengguna dapat mengganti *password*.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c772092488f56ab6fa22d3/eb683cfc250fc0afc6323da0965382e1/edit_pass.png" width="1000" height="auto" />

### Delete Account
Pengguna juga bebas menghapus akunnya kapan saja.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c772df12c698124cc929f8/c51c42d8c448f105d7489e529786afb4/delete_acc.png" wwidth="1000" height="auto" />

### Appointment List
Khusus untuk admin dan owner dapat *pending appointment, complete appointment, cancelled appointment*.
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c771e6d4b1a5858bc55436/a3882c6a99c48950800b8e2e8806a7c4/admin_page.png" width="1000" height="auto" />

## Use Case Diagram
### Customer
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/607f78bcb5f70f711e786d84/0b33c1e6e8771cb28d0c01bd5cee136d/UseCaseCust.png" width="1000" height="auto" />

### Admin dan Owner
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/607f78bcb5f70f711e786d84/6a5ea9498b80047e4d67d99be55256ee/UseCaseDiagram-Page-3.png" width="1000" height="auto" />

## Architecture Diagram
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/609ab497538efd09dcbec097/6580a96ef3dc8dd0e3940112cf09cb92/arsitektur_diagram.png" width="1000" height="auto"/>

## Activity Diagram
### Sub-System: Login
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/fc4c55ba652da53665cf1dbd33e96165/sub_system__login.jpg" width="650" height="auto" />

### Sub-System: Registrasi
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/54f1cc95efb17e9d749663cca40cfeab/sub_system_regist.jpg" width="650" height="auto" />

### Sub-System: Edit Profile
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/27dc8da41ad75c83f442a7db00bc9c38/sub_system_edit_profile.jpg" width="570" height="auto" />

### Sub-System: Delete Account
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/fd900b81a1ebc215059ea9cedf077396/sub_system_delete_acc.jpg" width="570" height="auto" />

### Sub-System: Make Order/Appointment
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/9790cf079d4a391b8f0f0aca63fd9b82/sub_system_make_order.jpg" width="450" height="auto" />

### Sub System: Cancel/Complete Order
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/01c02869277e58c28190f9e2d8737025/sub_system_cancel_order.jpg" width="620" height="auto" />

### Sub System: Review
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/01c02869277e58c28190f9e2d8737025/sub_system_cancel_order.jpg" width="620" height="auto" />

### Sub System: Admin
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/01c02869277e58c28190f9e2d8737025/sub_system_cancel_order.jpg" width="620" height="auto"/>

### Sub System: Review-Insert
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/c1489f337a6e46c15a4faff8f5bee4c3/sub_system_review_insert.jpg" width="570" height="auto" />

### Sub System: Review-Show
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/e7d9826149e39406890e505b58bed33c/sub_system_review_show.jpg" width="620" height="auto" />

### Sub System: Admin, Show Orders
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/a213fa4eedd34181ab0bc0c010545fb9/sub_system_admin_show_order.jpg" width="620" height="auto" />

### Sub System: Admin, Show List Orders (complete/cancelled)
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/3c81f7254e821f3251519417ba9a2606/sub_system_admin_show_list_order.jpg" width="620" height="auto" />

### Sub System: Admin, Verifikasi Bayar
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/d123f52296fd4c62377208a67193e7e9/sub_system_admin_verifikasi_bayar.jpg" width="580" height="auto" />

### Sub System: Complete/Cancel Order
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/60784bbe7315647f727b39c3/9739fd4b723b476b304695d497e649ae/sub_system_admin_complete_cancel_order.jpg" width="620" height="auto" />

## Fungsi CRUD
CRUD adalah *Create, Read, Update, Delete*.
Jadi teknik CRUD berfungsi untuk membuat, membaca, memperbaharui, dan menghapus data pada HelloPet. 
<table>
  <thead>
      <th>Use Case</th>
      <th>User</th>
      <th>Admin dan Owner</th>
      <th>Server</th>
  </thead>
  
  <tbody>
    <tr>
      <td>Akun</td>
      <td>C, R, U, D</td>
      <td>C, R, U, D</td>
      <td>C, R, U, D</td>
     </tr> 
      <td>Nama</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Email</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
    <tr>
      <td>Username</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Password</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Nomor Telepon</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Alamat</td>
      <td>C, R, U</td>
      <td>C, R, U</td>
      <td>R dan U</td>
     </tr>
     <tr>
      <td>Jenis Hewan</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Ukuran Hewan</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Umur Hewan</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Jenis Kelamin Hewan</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Tanggal/Waktu Pemesanan</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Pilihan Packages</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
     <tr>
      <td>Detail Pemesanan</td>
      <td>R</td>
      <td>R</td>
      <td>C</td>
     </tr>
     <tr>
      <td>Booking ID</td>
      <td>R</td>
      <td>R</td>
      <td>C</td>
     </tr>
     <tr>
      <td>Daftar Pemesanan (pending, completed, cancelled)</td>
      <td>-</td>
      <td>R</td>
      <td>C dan U</td>
     </tr>
     <tr>
      <td>Review</td>
      <td>C dan R</td>
      <td>C dan R</td>
      <td>R</td>
     </tr>
    </tbody>
</table> 

## ERD
<img src="https://trello-attachments.s3.amazonaws.com/6035bdf63d3da78bf0df2bd2/607ad0194e80172b2e1cbb4e/811b18c64ddc4c2d173612fe23977a7f/IMG-20210614-WA0008.jpg" width="500" height="auto" />

## Project Documentations 
### Trello 
[*click here*](https://trello.com/b/oWXYobb6/hellopetteam-depresso)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0b8fa935f6ef3d51516/7b0d233d851f213e1763617bacfd7207/20210614_104312.png" width="1366" height="auto" /> 

### Figma 
[*click here*](https://www.figma.com/file/furUw4CzGsUYrucQHiXPW3/HelloPet?node-id=0%3A1)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0ab7be9ca21f11f34ee/ce7d7b4ddaa80bc50cad5c3e0b376444/20210614_104149.png" width="1366" height="auto" /> 

### Google Sites 
[*click here*](https://sites.google.com/apps.ipb.ac.id/hellopet)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0af4bd5ca18b73979c8/9b928f5c950d1e100ffa92057a3fc58e/20210614_104244.png" width="1366" height="auto" /> 

### Github 
[*click here*](https://github.com/oceanversace/darkroastcoffee)
<img src="https://trello-attachments.s3.amazonaws.com/602a4b02da969478253f9e8f/60c6d0bb9a107741dccd8f23/c127de71cc54ddf0b0d4432836f9fd95/20210614_104219.png" width="1366" height="auto"/> 

## Saran untuk Pengembangan Selanjutnya
- *Pet grooming service* tersedia untuk hewan peliharaan lainnya, seperti kelinci dan musang
- HelloPet tersedia pada *mobile*
- Fungsi *search* berfungsi dengan baik
- Terdapat *treatment* tambahan seperti anti jamur, anti kutu, dll
- Fungsi untuk mengganti *photo profile*

## Ucapan Terima Kasih
Puji syukur kami panjatkan kepada Allah SWT atas rahmat-Nya yang telah membuat kelompok kami dapat menyelesaikan pembuatan aplikasi berbasis web bernama HelloPet dari mata kuliah Rekayasa Perangkat Lunak (KOM331). Ucapan terima kasih juga kami sampaikan kepada semua pihak yang memberi kami kesempatan dan selalu membantu kami dalam pembuatan aplikasi HelloPet, diantaranya:
<br>
- Bapak/Ibu Dosen Ilmu Komputer IPB University
- Kakak Asisten Praktikum Rekayasa Perangkat Lunak
</br>
Selama pembuatan aplikasi ini, kami mendapatkan banyak pengalaman dan ilmu yang dapat membangun kami menjadi lebih baik di masa yang akan datang. Mohon maaf atas segala kekurangan dari kelompok kami. Semoga laporan yang kelompok kami buat bermanfaat bagi semua pihak.

> *Sincerely, depresso.*
