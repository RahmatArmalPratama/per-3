<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASBOARD USER</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css"/>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/uin.png<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h5>Halo :</h5><h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <?php echo $_SESSION["user"]["username"] ?><br>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
        </div>
     <div class="col-md-8">

            <form action="" method="post" />
            </form>
            <br><div class="card mb-3">

                <div class="card-body">
                <center><h4>Selamat Datang Mahasiswa</h4> <h3 class="nprinsleyy nprinsley-text-rainbowan" style="font-size:">UIN SULTHAN THAHA SAIFUDDIN JAMBI.</h3></center>
                </div>

            </div>

            <div class="card mb-3">
            <div class="card-body">
            <div class="slider">
                <img src="https://d.top4top.io/p_2469z2mat1.jpeg" width="100%">

                <br>
            </div>
<br><b>Sejarah Universitas UIN JAMBI</b><br>
<br>Lahirnya UIN Sulthan Thaha Saifuddin Jambi tidak terlepas dari perkembangan Agama Islam, juga lembaga
pendidikan Islam yang ada di Provinsi Jambi. Didorong oleh hasrat masyarakat dan ulama pada masa itu,
setelah memperhatikan banyaknya lembaga yang mengeluarkan siswa madrasah/sekolah agama tingkat atas di
Jambi sementara belum terdapat lembaga pendidikan tinggi yang dapat menampung tamatan tersebut, maka
diadakanlah Kongres Ulama Jambi pada tahun 1957 dengan menghasilkan suatu keputusan bahwa di Jambi sudah
saatnya didirikan perguruan tinggi. Pada tanggal 29 September 1960 didirikanlah Fakultas Syari’ah
Perguruan Tinggi Agama Islam al-Hikmah di bawah naungan Yayasan Pendidikan Islam (YPI) Jambi.<br>
<br>Rentang waktu tiga tahun pertama, Fakultas Syari’ah telah menunjukkan kemanunggalan antara pimpinan, masyarakat dan pemerintah daerah serta pemerintah pusat. Dengan diterbitnya Surat Keputusan Menteri Agama Nomor: 50 tahun 1963 tanggal 12 Mei 1963 maka dinegerikanlah Fakultas Syari’ah menjadi Fakultas Syari’ah Cabang IAIN Syarif Hidayatullah Jakarta, dan kemudian berubah menjadi cabang IAIN Raden Fatah Palembang. Penegerian ini mendorong para pejabat, ulama, serta pemuka masyarakat, terutama Gubernur KDH Tingkat I Provinsi Jambi saat itu (M.J. Singadekane) untuk memperjuangkan berdirinya IAIN dengan beberapa fakultas.<br>

<img src="https://k.top4top.io/p_24694b6i51.png" width="100%"><br>

<br>Di sisi lain, sejak tanggal 11 Juli 1965 Yayasan Perguruan Tinggi Ma’arif Nahdlatul Ulama telah memiliki Fakultas Tarbiyah dan Ilmu Keguruan dan Ushuluddin di Kota Jambi, sementara di Sungai Penuh – Kerinci telah berdiri pula Fakultas Syari’ah Muhammadiyah pada bulan Maret 1964. Atas dasar motivasi di atas, maka untuk memehuni keinginan para pejabat, masyarakat, para ulama dan Pemerintah Daerah Tingkat I Provinsi Jambi tersebut, akhirnya Fakultas Tarbiyah dan Ilmu Keguruan dan Ushuluddin yang ada di Ma’arif serta Fakultas Syari’ah Muhammadiyah di Kerinci diusulkan untuk dipadukan dalam suatu wadah menjadi fakultas di lingkungan IAIN Jambi.
                </div>
            
        </div>
    
    </div>
</div>

</body>
</html>