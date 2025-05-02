<?php
session_start();

if ( isset($_SESSION["login"]) ) {
    header ("location: dasboard.php");
    exit;
}

require "fungsiComentar/functions.php";
$artikels = detailArtikelFull();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css?v=40" />
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>MAbdillah Faqih</title>
  </head>
  <body>
    <header>
      <div class="nav container">
        <a href="https://mrx126.github.io/mrx-portfolio/" class="logo">mrz <span>connect</span></a>
        <a href="#" class="login"><img src="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" alt="mrz"></a>
      </div>
    </header>

    <section class="home" id="home">
      <div class="home-text container">
        <h2 class="home-title">MAbdillah Faqih</h2>
        <span class="home-subtitle">Your source of great information</span>
      </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
      <div class="contenBx">
        <div class="content">
          <div class="imgBx">
            <img src="images/photo.png" alt="" class="cover" />
          </div>
        </div>
        <div class="content2">
          <h1>Dari Penulis</h1>
          <p>Terima kasih telah mengunjungi situs saya. Saya berharap konten yang saya bagikan dapat memberikan wawasan baru bagi Anda. Melalui tulisan yang saya bagikan disini, saya berupaya untuk menawarkan sesuatu yang bermanfaat dan memotivasi. Saya percaya dengan saling belajar dan berbagi, kita dapat terus berkembang bersama dan menciptakan perubahan positif dalam kehidupan dan komunitas kita. Saya sangat menghargai setiap dukungan dan masukan dari Anda, karena hal tersebut membantu saya untuk terus meningkatkan kualitas dari apa yang saya tawarkan. Mari bergerak maju bersama, berinovasi, dan membuat perubahan yang berarti.</p>
        </div>
      </div>
    </section>
    <!-- latest blog post -->
    <section class="post" id="post">
      <div class="title">
        <h2>Latest Post</h2>
        <p>Tulisan terbaru membahas tentang kebebasan informasi yang menyoroti tantangan dan potensi dalam konteks sosial politik dan budaya serta perubahan sosial di era digital</p>
      </div>
      <div>
        <div class="wrapper">
          <div class="tabs">
            <input type="radio" name="tabs" checked id="tab1" />
            <label for="tab1" class="filter" data-filter="all">All</label>
            <input type="radio" name="tabs" checked id="tab2" />
            <label for="tab2" class="filter" data-filter="newspaper">Newspaper</label>
            <input type="radio" name="tabs" checked id="tab3" />
            <label for="tab3" class="filter" data-filter="article">Article</label>
            <div class="glider"></div>
          </div>
        </div>
      </div>
  


      <div class="contentBx">
      <?php foreach ( $artikels as $atc) : ?>
          <div class="<?php echo $atc["kategori"]; ?> postColumn"> 
            <div class="postBox"> 
              <div class="imgBx">
                <img src="<?php echo $atc["gambar"]; ?>" alt="cover"/>
              </div>
              <div class="textBx">
                <img src="<?php echo $atc["gambar_2"]; ?>" alt="" class="post-img">
                <h2 class="category"><h7><?php echo $atc["kategori"]; ?></h7></h2>
                <span class="post-date"><?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?></span>
                <a href="<?php echo $atc["kategori"]; ?>.php?id=<?php echo $atc["id"]; ?>" class="post-title"><h2 class="judul"> <?php echo $atc["judul"]; ?></h2></a>
                <p class="post-description">
                    <?php echo $atc["isi"]; ?>
                </p>
                <div class="profile">
                  <img src="images/mirza.jpg" alt="" class="profile-img">
                  <span class="profile-name"><h7><?php echo $atc["penulis"]; ?></h7></span>
                  
                </div>
                
              </div>
            </div> 
          </div>
          <?php endforeach; ?>
      </div>        
    <!-- akhir -->
      <div class="title fx">
        <input type="button" value="Sembunyikan" class="all btn mgt60 btnMuncul" style="display:none"/>
      </div>
    </section>
    
    <footer>
      <div style="flex: 1.5;margin-right: 5%;">
        <h2>About Us</h2>
        <span style="list-style-type: none; padding: 0">Tulisan membahas tentang kebebasan informasi yang menyoroti tantangan dan potensi dalam konteks sosial politik dan budaya serta perubahan sosial di era digital</span>
        <ul>
          <li style="list-style-type: none; display: flex;">
            <a href="https://www.facebook.com/profile.php?id=100037382270379" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=118490&amp;format=png&amp;color=FFFFFF" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/mabdill4h/" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=84884&amp;format=png&amp;color=FFFFFF" alt="Instagram">
            </a>
            <a href="https://www.youtube.com/@mabdill4h968" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=85433&amp;format=png&amp;color=FFFFFF" alt="Youtube">
            </a>
            <a href="https://x.com/mabdill4h" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=102907&amp;format=png&amp;color=FFFFFF" alt="Twiter">
            </a>
            <a href="https://www.tiktok.com/@mabdill4h?is_from_webapp=1&sender_device=pc" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=juS4pYkbvSCh&amp;format=png&amp;color=FFFFFF" alt="Tiktok">
            </a>
            <a href="https://discord.com/channels/@me" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=99290&amp;format=png&amp;color=FFFFFF" alt="Discord">
            </a>
            <a href="https://github.com/mrx126" class="sosialMedia">
                <img style="width: 25px;height: 20px;" src="https://img.icons8.com/?size=100&amp;id=62856&amp;format=png&amp;color=FFFFFF" alt="Github">
            </a>
          </li>
         </ul>
      </div>
      <div style="flex: 1;" class="mini">
        <h2>Quick Links</h2>
        <ul>
          <li style="display: flex; list-style-type: none; padding: 0">
            <span>
              <a href="#home" class="sosialMedia">
                    <img style="width: 25px;height: 25px;" src="https://img.icons8.com/?size=100&amp;id=2797&amp;format=png&amp;color=FFFFFF" alt="Home">
            </a>
            </span>
            <span style="margin: auto 0;">Home</span>
          </li>
        <li style="display: flex; list-style-type: none; padding: 0">
            <span>
              <a href="#post" class="sosialMedia">
                    <img style="width: 25px;height: 25px;" src="https://img.icons8.com/?size=100&amp;id=45401&amp;format=png&amp;color=FFFFFF" alt="Content">
              </a>
            </span>
            <span style="margin: auto 0;">Content</span>
        </li>
        </ul>
      </div>
      <div style="flex: 1" class="mini">
        <h2>Contact Info</h2>
      <li style="display: flex; list-style-type: none; padding: 0">
            <span>
              <a href="https://mail.google.com/" class="sosialMedia">
                    <img style="width: 25px;height: 25px;" src="https://img.icons8.com/?size=100&amp;id=124128&amp;format=png&amp;color=FFFFFF" alt="Maps">
            </a>
            </span>
            <span style="margin: auto 0;">mirzaabdillahfakih@gmail.com </span>
          </li><li style="display: flex; list-style-type: none; padding: 0">
            <span>
              <a href="https://maps.app.goo.gl/tSbTXCX2CXEzrrWQ9" class="sosialMedia">
                    <img style="width: 25px;height: 25px;" src="https://img.icons8.com/?size=100&amp;id=345&amp;format=png&amp;color=FFFFFF" alt="Maps">
            </a>
            </span>
            <span style="margin: auto 0;">
                66372 Gandusari <br>
                Trenggalek EJ +62 <br>
                IND</span>
          </li></div>
    </footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
      integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="index.js?v=35"></script>
    
  </body>
</html>