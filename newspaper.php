<?php
session_start();

if ( isset($_SESSION["login"]) ) {
    header ("location: dasboard.php");
    exit;
}

require_once 'fungsiComentar/functions.php';

// ambil data di URL
$id = $_GET["id"];
// query semua data mahasiswa
$daftar = detailArtikelNewspaper();
// query data mahasiswa berdasarkan id
$atc = detailArtikelUtama($id);
// var_dump($daftar);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title><?php echo $atc["judul"]; ?></title>
    <link rel="stylesheet" href="newspaper.css?v=14" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Pacifico&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="news-link">
        <p><a href="index.php">mrz.connect</a></p>
      </div>
      <h1>
        <span>INFORMATION</span>
        PAPER
      </h1>
      <p class="ad">Information is not knowledge</p>
      <h2 class="date"><?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?></h2>
      <h2 class="edition">Edition: <?php echo $atc["id"]; ?></h2>
    </header>
    <hr class="hr2" />
    <h1><?php echo $atc["judul"]; ?></h1>
    <div class="isi">
      <div class="kiri">
            <div>
            <div style="float: right;margin-left: 10px;background-color: #f9f9f9;border: 1px solid #dcdcdc;writing-mode: vertical-rl;line-height: 1.2rem;text-transform: lowercase;height: max-content;letter-spacing: 1.5px;">
                <div>
                    <p> - Tentang Penulis: Tulisan ini ditulis oleh <?php echo $atc["penulis"]; ?> pada <?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?> dengan judul <?php echo $atc["judul"]; ?> - Tentang Penulis: Tulisan ini ditulis oleh <?php echo $atc["penulis"]; ?> pada <?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?> dengan judul <?php echo $atc["judul"]; ?> - 
                    </p>
                </div>
            </div>
            <div class="kananKecil">
                <p style="margin: 7px 0px 2px 82px;line-height: normal;">recently</p>
                <?php foreach ( $daftar as $dft) : ?>
                    <div class="kananIsi">
                        <img src="<?php echo $dft["gambar"]; ?>" alt="Gambar Artikel" class="kananIsiGambar">
                        <div class="kananIsiText">
                            <h5><a style="color: #333;text-decoration: none;z-index: 9999;position: relative;" href="newspaper.php?id=<?php echo $dft["id"]; ?>"><?php echo $dft["judul"]; ?></a></h5>
                            <p style="font-size: 0.8em;color: #777;"><?php $dft = $dft["created_at"]; echo date('d-m-Y', strtotime($dft)); ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <p>
              <?php echo $atc["penulis"]; ?>: Merenungkan betapa pentingnya informasi dalam menghidupkan rasa ingin tahu yang tiada henti dalam diri kita. Setiap kata yang kita baca, setiap cerita yang kita dengar, menjadi benang yang menganyam jaring pengetahuan
                kita. Dari sapaan hangat seorang tetangga hingga berita mendebarkan di liputan malam, informasi menyusup ke dalam setiap pori kehidupan kita. Dengan setiap tetes informasi yang kita serap, kita membangun fondasi pengetahuan yang
                kokoh, mempersiapkan diri untuk menavigasi lautan tantangan dan kesempatan yang menanti di masa depan. Albert Einstein pernah mengatakan, "Information is not knowledge." - sebuah kutipan yang mengingatkan kita bahwa informasi
                hanya langkah awal menuju pemahaman yang lebih dalam. Mari kita bersama-sama merenungkan betapa pentingnya informasi dalam menghidupkan rasa ingin tahu yang tiada henti dalam diri kita. Setiap kata yang kita baca, setiap cerita
                yang kita dengar, menjadi benang yang menganyam jaring pengetahuan kita. Dari sapaan hangat seorang tetangga hingga berita mendebarkan di liputan malam, informasi menyusup ke dalam setiap pori kehidupan kita. Dengan setiap tetes
                informasi yang kita serap, kita membangun fondasi pengetahuan yang kokoh, mempersiapkan diri untuk menavigasi lautan tantangan dan kesempatan yang menanti di masa depan. Sebagai penutup, Maya Angelou mengatakan, "You can't use
                up creativity. The more you use, the more you have." - sebuah pengingat bahwa informasi adalah bahan bakar kreativitas yang tak terbatas, membawa kita menuju pemahaman yang lebih dalam dan pandangan yang lebih luas.
            </p>
        </div>
      </div>
      <div class="kanan">
        <div class="kananKecil" style="float: right;padding: 7px 10px 7px 10px;width: 333px;margin-left: 10px;margin-top: 10px;background-color: azure;text-align: justify;border: 1px solid #4de4ff;">
            <div style="line-height: 1em;">
            Artikel ini bersumber dari: 
            <a style="font-size: 0.8em; color: #0a6d7e ;text-decoration: none;z-index: 9999;position: relative;" href="<?php echo $atc["link"]; ?>"><?php echo $atc["judul"]; ?> (<?php echo $atc["link"]; ?>)</a>
            </div>
        </div>

        <div class="sumber">
          <div class="image-2">
            <img src="<?php echo $atc["gambar_2"]; ?>" alt="xx" class="image-2" />
            <p>
                <a href="<?php echo $atc["link"]; ?>">
                   <span class="tebal"><?php echo $atc["judul"]; ?>: </span>
                   <span><?php echo $atc["link"]; ?></span>
                </a>
            </p>
          </div>
        </div>
        
        <p>
        <?php echo $atc["isi"]; ?>
        </p>

        <div class="sumber-1">
          <div class="image-1">
            <img src="<?php echo $atc["gambar"]; ?>" alt="xx" div class="image-1" />
            <p>
               <a href="<?php echo $atc["link"]; ?>">
                   <span class="tebal"><?php echo $atc["judul"]; ?>:</span>
                   <span><?php echo $atc["link"]; ?></span>
                </a>
            </p>
          </div>
        </div>

        <p>
        <?php echo $atc["isi_2"]; ?>
        </p>
        
      </div>
    </div>
    
    <div class="tabel-1">
        <h6>Ringkasan Materi</h6><hr>
        <div class="tabel-1a">
            <ul>
                <strong>Sekilas Tentang Apa Yang Saya Tulis Ini:</strong>
            </ul>
            <ul>
                <li>
                    Edisi Ke <?php echo $atc["id"]; ?>
                </li><hr>
                <li>
                    Dengan Judul <?php echo $atc["judul"]; ?>
                </li><hr>
                <li>
                    Ditulis Oleh <?php echo $atc["penulis"]; ?>
                </li><hr>
                <li>
                    Ditulis Pada <?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?>
                </li><hr>
                <li>
                    Dikutip Dari <a href="<?php echo $atc["link"]; ?>" style="text-decoration: none;color: black;text-transform: lowercase;position: relative;z-index: 999"><?php echo $atc["link"]; ?></a>
                </li><hr>
                <li>
                    <a href="index.php" style="text-decoration: none;color: black;text-transform: lowercase;position: relative;z-index: 999">Kembali Ke Halaman Utama...</a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="hr3" />
    <div style="padding: 15px; line-height: 1.5rem;">
        <p style="font-size: 1rem; font-weight: bold;">Kolom komentar</p>
        <p style="font-size: 0.8rem;">Tulis komentar anda dibawah</p>
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

            <div style="max-width: 750px; margin: auto; line-height: 1.4rem; margin-top: 5%; font-size: 12px;">
                <?php
                    $rowArtikel  = detailArtikel($_GET['id']);
                    $rowKomentar = tampilKomentar($_GET['id']);

                    if (isset($_POST['btnkomen'])) {
                        $idArtikel = $_GET['id'];
                        postKomentar($_POST, $idArtikel);
                        echo "<meta http-equiv='refresh' content='1.5;url=newspaper.php?id=".$idArtikel."'>";
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
                            <a href="newspaper.php?id=<?= urlencode($_GET['id']); ?>&row_id=<?= urlencode($row['id']); ?>&row_id2=<?= urlencode($row['id']); ?>#nama" style="text-decoration: none; font-size: 0.6rem; margin-left: 1rem;">Reply</a>
                        </div>
                        <br>
                        <?php
                            $id = intval($_GET['id'] ?? 0);
                            $commentId = intval($row['id'] ?? 0);
                            $balasanKomentar = balasKomentar2 ($id, $commentId);;
                            if ($balasanKomentar) {
                                while ($row22 = mysqli_fetch_assoc($balasanKomentar)) { 
                        ?>
                                    <div style="padding: 0.4rem; border: 1px solid #ccc; border-radius: 4px; margin-left: 10%;">
                                        <h4 style="font-weight: bold; width: -webkit-fill-available;"><?= htmlspecialchars($row22['nama']) ?> To <?= htmlspecialchars($row22['nama2']) ?>
                                            <div style="font-size: 0.6rem; text-align: end; margin-top: -24px; color: #999797;">
                                                <?php $tanggal = $row22['tanggal']; echo date('d-m-Y', strtotime($tanggal)); ?>
                                            </div>
                                        </h4>
                                        <p><?= htmlspecialchars($row22['isi']) ?></p>
                                        <a href="newspaper.php?id=<?= urlencode($id); ?>&row_id=<?= urlencode($row22['id']); ?>&row_id2=<?= urlencode($row['id']); ?>#nama" style="text-decoration: none; font-size: 0.6rem; margin-left: 1rem;">Reply</a>
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
    </div>

    <div class="page-no">
      <p>1</p>
    </div>
  </body>
</html>
