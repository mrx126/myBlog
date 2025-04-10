// header (atas sendiri)
let header = document.querySelector("header");
window.addEventListener("scroll", () => {
  header.classList.toggle("shadow", window.scrollY > 0);
});

// Mendapatkan semua elemen dengan kelas "filter"
var filter = document.querySelectorAll(".filter");

filter.forEach((n) =>
  n.addEventListener("click", function () {
    const value = $(this).attr("data-filter");

    // Menyembunyikan semua elemen dengan kelas "postColumn"
    $(".postColumn").hide();

    // Menampilkan elemen yang sesuai dengan filter
    if (value === "all") {
      $(".postColumn").show("1000");
    } else {
      $(".postColumn")
        .not("." + value)
        .hide(1000);
      $(".postColumn")
        .filter("." + value)
        .show("1000");
      var title = document.querySelector(".title.fx");
      title.style.display = "none";
    }

    // Mendapatkan daftar elemen yang terlihat (visible) setelah filter diterapkan
    var visibleElements = $(".post .contentBx .postBox .imgBx:visible");
    var textElements = $(".post .contentBx .postBox .textBx:visible");

    // Menampilkan nomor urut elemen yang terlihat (visible) di layar
    visibleElements.each(function (index) {
      $(this).find(".number").remove(); // Hapus nomor sebelumnya (jika ada)
      $(this).append("<span class='number'>" + (index + 1) + "</span>"); // Menambahkan nomor urut

      // Periksa jika nomor urut adalah genap atau kondisi lainnya
      if (window.matchMedia("(min-width: 769px)").matches) {
        let modIndex2 = index % 35; // Membuat indeks berulang saat mencapai 36
        if ([0, 3, 8, 10, 12, 16, 17, 20, 25, 26, 27, 32].includes(modIndex2)) {
          $(this).find("img").css("height", "465px");
        } else {
          $(this).find("img").css("height", "");
        }

        if ([3, 4, 6, 9, 10, 14, 17, 18, 20, 21, 23, 27, 29, 32].includes(modIndex2)) {
          $(this).find("img").css("margin-top", "-135px");
          textElements.eq(index).css("top", "-135px");
        } else if ([12, 26].includes(modIndex2)) {
          $(this).find("img").css("margin-top", "-270px");
          textElements.eq(index).css("top", "-270px");
        } else {
          $(this).find("img").css("margin-top", "");
          textElements.eq(index).css("top", "");
        }

        // Menentukan grid-column span berdasarkan indeks (lebar contentBx/postColumn)
        if ([1, 5, 13, 22].includes(modIndex2)) {
          $(this).closest(".postColumn").css("grid-column", "span 2");
        } else {
          $(this).closest(".postColumn").css("grid-column", "span 1");
        }
      }
      // else {
      //   $(this).find("img").css("height", "");
      //   $(this).find("img").css("margin-top", "");
      //   textElements.css("top", "");
      // }

      // ukuran tablet
      if (window.matchMedia("(min-width: 426px) and (max-width: 768px)").matches) {
        let modIndex = index % 7; // Membuat indeks berulang saat mencapai 8

        if ([0, 2, 3, 5].includes(modIndex)) {
          $(this).find("img").css("height", "465px");
        } else {
          $(this).find("img").css("height", "");
        }

        if ([3, 5].includes(modIndex)) {
          $(this).find("img").css("margin-top", "-135px");
          textElements.eq(index).css("top", "-135px");
        } else {
          $(this).find("img").css("margin-top", "");
          textElements.eq(index).css("top", "");
        }

        // Menentukan grid-column span berdasarkan modIndex
        if ([6].includes(modIndex)) {
          $(this).closest(".postColumn").css("grid-column", "span 2");
        } else {
          $(this).closest(".postColumn").css("grid-column", "span 1");
        }
      }
    });
  })
);

// home (efek parallax)
var postBox = document.querySelector(".post .post-box");
// $(window).scroll(function () {
//   var wScroll = $(this).scrollTop();
//   $(".home .home-text").css({
//     transform: "translate(0px, " + wScroll / 1.5 + "%)",
//   });

//   // post container
//   if (wScroll > $(".post").offset().top - 10) {
//     $(".postBox").each(function (i) {
//       setTimeout(function () {
//         $(".postBox").eq(i).addClass("muncul");
//       }, 300 * (i + 1));
//     });
//   }
// });
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  // Mengatur transformasi untuk teks di bagian home
  $(".home .home-text").css({
    transform: "translate(0px, " + wScroll / 0.7 + "%)",
  });

  // Mengatur margin untuk cover di bagian about
  if (window.matchMedia("(min-width: 769px)").matches) {
    $(".about .contenBx .content .imgBx .cover").css({
      marginTop: function () {
        var margin = wScroll / 50;
        return margin > 15 ? "15%" : margin + "%";
      },
      marginLeft: function () {
        var margin = wScroll / 50;
        return margin > 15 ? "15%" : margin + "%";
      },
      boxShadow: function () {
        var shadow = wScroll / 30;
        var maxShadow = shadow > 30 ? 30 : shadow;
        return maxShadow + "px " + maxShadow + "px 5px rgb(127, 126, 126)";
      },
    });
  } else {
    $(".about .contenBx .content .imgBx .cover").css({
      transition: "1.5s",
      marginTop: "5%",
      marginLeft: "5%",
      boxShadow: "10px 10px 5px rgb(127, 126, 126)",
    });
  }

  // Menambahkan kelas 'muncul' ke elemen postBox berdasarkan scroll
  if (wScroll > $(".post").offset().top - 10) {
    $(".postBox").each(function (i) {
      setTimeout(function () {
        $(".postBox").eq(i).addClass("muncul");
      }, 300 * (i + 1));
    });
  }
});
