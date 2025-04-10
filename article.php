<?php
session_start();

if ( isset($_SESSION["login"]) ) {
    header ("location: dasboard.php");
    exit;
}

require_once 'fungsiComentar/functions.php';

// ambil data di URL
$id = $_GET["id"];
$atc = detailArtikelUtama($id)
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
        <link rel="stylesheet" href="article.css?v=5" />
    <title><?php echo $atc["judul"]; ?></title>
  </head>
  <body style="background-image: url(<?php echo $atc["gambar"]; ?>);" >
    <header class="shadow">
      <div class="nav_container">
        <a href="https://mrx126.github.io/mrx-portfolio/" class="logo">mrz <span>connect</span></a>
        <a href="#" class="login"><img src="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" alt="mrz"></a>
      </div>
    </header>
    <div class="container">
      <a href="https://x.com/mabdill4h" class="instagram" target="_blank">instagram</a>
      <div class="header">
        <h1 class="judul">My Article</h1>
        <ul>
          <li><a href="index.php" class="page-scroll">Kembali</a></li>
          <li><a href="https://mrx126.github.io/mrx-portfolio/" class="page-scroll">Portofolio</a></li>
        </ul>
      </div>
      <div>
        <div class="hero" style="background-image: url(<?php echo $atc["gambar"]; ?>);" >
              <img src="https://cdn.pixabay.com/animation/2023/01/14/02/11/02-11-52-658_512.gif" alt="<?php echo $atc["judul"]; ?>" class="animasi">
        </div>
      </div>
      <div class="content cf">
        <div class="main">
          <h2><?php echo $atc["judul"]; ?></h2>
          <p class="penulis">ditulis oleh <a href="#"><?php echo $atc["penulis"]; ?></a> pada <?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime                  ($created_at)); ?></p>
          <p><?php echo $atc["isi"]; ?></p>
          <img src="<?php echo $atc["gambar_2"]; ?>" alt="<?php echo $atc["judul"]; ?>">
          <p><?php echo $atc["isi_2"]; ?></p>
          <p class="reference">Sumber: <a href='<?php echo $atc["link"]; ?>'><?php echo $atc["link"]; ?></a></p>
        </div>
        <div class="sidebar">
          <hr><h3><?php echo $atc["penulis"]; ?></h3>
          <img src="<?php echo $atc["gambar"]; ?>" alt="<?php echo $atc["judul"]; ?>">
          <p>
            <?php echo $atc["judul"]; ?>: Merenungkan betapa pentingnya informasi dalam menghidupkan rasa ingin tahu yang tiada henti dalam diri kita. Setiap kata yang kita baca, setiap cerita yang kita dengar, menjadi benang yang menganyam jaring pengetahuan kita. Dari sapaan hangat seorang tetangga hingga berita mendebarkan di liputan malam, informasi menyusup ke dalam setiap pori kehidupan kita. Dengan setiap tetes informasi yang kita serap, kita membangun fondasi pengetahuan yang kokoh, mempersiapkan diri untuk menavigasi lautan tantangan dan kesempatan yang menanti di masa depan. Albert Einstein pernah mengatakan, "Information is not knowledge." - sebuah kutipan yang mengingatkan kita bahwa informasi hanya langkah awal menuju pemahaman yang lebih dalam. Mari kita bersama-sama merenungkan betapa pentingnya informasi dalam menghidupkan rasa ingin tahu yang tiada henti dalam diri kita. Setiap kata yang kita baca, setiap cerita yang kita dengar, menjadi benang yang menganyam jaring pengetahuan kita. Dari sapaan hangat seorang tetangga hingga berita mendebarkan di liputan malam, informasi menyusup ke dalam setiap pori kehidupan kita. Dengan setiap tetes informasi yang kita serap, kita membangun fondasi pengetahuan yang kokoh, mempersiapkan diri untuk menavigasi lautan tantangan dan kesempatan yang menanti di masa depan. Sebagai penutup, Maya Angelou mengatakan, "You can't use up creativity. The more you use, the more you have." - sebuah pengingat bahwa informasi adalah bahan bakar kreativitas yang tak terbatas, membawa kita menuju pemahaman yang lebih dalam dan pandangan yang lebih luas.
          </p>
        </div>
      </div>
        <div style="text-align: center; margin: 0px 20px;"><hr>
          <p style="font-size: 1rem;font-weight: bold;">Kolom komentar</p>
          <p style="font-size: 0.8rem;">Tulis komentar anda dibawah</p>
        </div>
        <div style="padding: 15px; line-height: 1.5rem; max-width: 450px; margin: auto;">
              <form method="post" style="display: grid; gap: 1rem; max-width: 750px; margin: auto;">
                  <label for="nama" style="font-weight: bold;">Nama</label>
                  <div>
                  <?php
                    // Cek apakah 'row_id' ada di $_GET
                    if (isset($_GET['row_id'])) {
                        // Ambil nilai 'row_id'
                        $idBalas = $_GET['row_id'];
                        // Panggil function balasKomentar
                        $ab = balasKomentar($idBalas);
                        // Jika function mengembalikan nilai, tampilkan label dan input
                        if ($ab) {
                  ?>
                          <label for="nama2" style="font-size: 14px; font-family: serif;">To </label>
                          <input type="text" style="width: fit-content; border: none;" readonly name="nama2" id="nama2" value="<?php echo htmlspecialchars($ab); ?>">
                  <?php
                        }
                    }
                  ?>
                  </div>
                  <input type="text" name="nama" id="nama" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;" required>
                  <label for="isi" style="font-weight: bold;">Isi Komentar</label>
                  <textarea name="isi" id="isi" rows="5" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;" required></textarea>

                  <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">

                  <input type="hidden" name="judul" value="<?php echo $atc["judul"]; ?>">

                  <?php
                      $row_id2 = isset($_GET['row_id2']) ? intval($_GET['row_id2']) : 0;
                  ?>
                  <input type="hidden" name="idKomentar" value="<?php echo htmlspecialchars($row_id2, ENT_QUOTES, 'UTF-8'); ?>">

                  <button type="submit" name="btnkomen" style="display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; text-align: center;">
                      Masukkan Komentar
                  </button>
              </form>

              <div style="max-width: 750px;margin: auto;line-height: 1.4rem;margin-top: 5%;font-size: 12px;">
                  <?php
                      $rowArtikel  = detailArtikel($_GET['id']);
                      $rowKomentar = tampilKomentar($_GET['id']);

                      if (isset($_POST['btnkomen'])) {
                          $idArtikel = $_GET['id'];
                          postKomentar($_POST, $idArtikel);
                          echo "<meta http-equiv='refresh' content='1.5;url=article.php?id=".$idArtikel."'>";
                      }
                  ?>

                  <?php foreach ($rowKomentar as $row): ?>
                      <div>
                          <div style="padding: 0.4rem; border: 1px solid #ccc; border-radius: 4px;">
                              <h4 style="font-weight: bold; width: -webkit-fill-available;"><?= htmlspecialchars($row['nama']) ?>
                                  <div style="font-size: 0.6rem; text-align: end; margin-top: -25px; color: #999797;">
                                      <?php $tanggal = $row['tanggal']; echo date('d-m-Y', strtotime($tanggal)); ?>
                                  </div>
                              </h4>
                              <p><?= htmlspecialchars($row['isi']) ?></p>
                              <a href="article.php?id=<?= urlencode($_GET['id']); ?>&row_id=<?= urlencode($row['id']); ?>&row_id2=<?= urlencode($row['id']); ?>#nama" style="text-decoration: none; font-size: 0.6rem; margin-left: 1rem;">Reply</a>
                          </div>
                          <br>
                          <?php
                              $id = intval($_GET['id'] ?? 0);
                              $commentId = intval($row['id'] ?? 0);
                              $balasanKomentar = balasKomentar2 ($id, $commentId);
                              if ($balasanKomentar) {
                                  while ($row22 = mysqli_fetch_assoc($balasanKomentar)) { 
                          ?>
                                      <div style="padding: 0.4rem; border: 1px solid #ccc; border-radius: 4px; margin-left: 10%;">
                                          <h4 style="font-weight: bold; width: -webkit-fill-available;"><?= htmlspecialchars($row22['nama']) ?> to <?= htmlspecialchars($row22['nama2']) ?>
                                              <div style="font-size: 0.6rem; text-align: end; margin-top: -24px; color: #999797;">
                                                  <?php $tanggal = $row22['tanggal']; echo date('d-m-Y', strtotime($tanggal)); ?>
                                              </div>
                                          </h4>
                                          <p><?= htmlspecialchars($row22['isi']) ?></p>
                                          <a href="article.php?id=<?= urlencode($id); ?>&row_id=<?= urlencode($row22['id']); ?>&row_id2=<?= urlencode($row['id']); ?>#nama" style="text-decoration: none; font-size: 0.6rem; margin-left: 1rem;">Reply</a>
                                      </div>
                                      <br>
                          <?php
                                  }
                              }
                          ?>
                      </div>
                  <?php endforeach ?>
              </div>
              <?php
                  mysqli_close($conn);
              ?>
          </div>
          <div class="footer">
            <p class="copy">Copyright <?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?> <?php echo $atc["penulis"]; ?></p>
          </div>
        </div>
      </div>
    </div>
</body>
</html>