<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./vouchers-desktop.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Alata:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Average:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Abril Fatface:wght@400&display=swap"
    />
    <style>
        body {
        margin: 0;
        line-height: normal;
        }

        .popup-overlay {
        display: flex;
        flex-direction: column;
        position: fixed;
        inset: 0;
        }

        :root {
        /* fonts */
        --font-alata: Alata;
        --font-montserrat: Montserrat;
        --font-average: Average;
        --font-abril-fatface: "Abril Fatface";
        --font-inherit: inherit;

        /* font sizes */
        --font-size-3xs: 10px;
        --font-size-5xl: 24px;
        --font-size-21xl: 40px;
        --font-size-17xl: 36px;
        --font-size-29xl: 48px;
        --font-size-5xs: 8px;
        --font-size-xs: 12px;
        --font-size-sm: 14px;
        --font-size-13xl: 32px;
        --font-size-base: 16px;
        --font-size-6xs: 7px;
        --font-size-7xs: 6px;
        --font-size-45xl: 64px;
        --font-size-37xl: 56px;
        --font-size-xl: 20px;
        --font-size-77xl: 96px;
        --font-size-56xl: 75px;

        /* Colors */
        --color-white: #fff;
        --color-gainsboro: #d9d9d9;
        --color-black: #000;
        --color-darkolivegreen: #6d5c32;
        --color-tan: #c1c29e;
        --color-pink: #eeb5b5;
        --color-blue: #4c0dff;
        --color-silver: #bfbfbf;
        --color-maroon: #570303;
        --color-burlywood-100: #e6be86;
        --color-burlywood-300: #e0ba7c;
        --color-burlywood-400: #e0b97b;
        --color-burlywood-200: #dfb979;
        --color-burlywood-500: #dfb878;
        --color-burlywood-600: #dab56f;
        --color-gray-100: #040000;
        --color-whitesmoke: #f7f7f7;
        --color-darkred: #9a0000;
        --color-saddlebrown: #5e3900;

        /* Gaps */
        --gap-4xs: 9px;
        --gap-6xs: 7px;
        --gap-3xs: 10px;
        --gap-10xs: 3px;
        --gap-xs: 12px;
        --gap-base: 16px;
        --gap-mini: 15px;
        --gap-18xl: 37px;
        --gap-smi: 13px;
        --gap-6xl: 25px;
        --gap-9xl: 28px;
        --gap-36xl: 55px;

        /* Border radiuses */
        --br-8xs: 5px;
        --br-3xs: 10px;
        --br-37xl-5: 56.5px;
        --br-11xs: 2px;
        --br-58xl: 77px;
        --br-81xl: 100px;
        --br-xl: 20px;
        }

        .logo-ypps-1-1-28 {
        position: absolute;
        top: 22px;
        left: 39px;
        width: 71px;
        height: 71px;
        object-fit: cover;
        }
        .putra-putri12 {
        margin-block-start: 0;
        margin-block-end: 1px;
        }
        .sriwijaya9 {
        margin: 0;
        }
        .putra-putri-sriwijaya-container8 {
        position: absolute;
        top: 28px;
        left: 128px;
        letter-spacing: 0.04em;
        text-align: left;
        display: inline-block;
        width: 178px;
        height: 60px;
        }
        .tata-cara-pembelian {
        position: absolute;
        top: 196px;
        left: calc(50% - 417px);
        font-size: var(--font-size-37xl);
        font-family: var(--font-abril-fatface);
        display: inline-block;
        width: 834px;
        height: 85px;
        }
        .vouchers-desktop-child {
        position: absolute;
        top: 339px;
        left: calc(50% - 596px);
        border-radius: var(--br-xl);
        background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
        width: 1192px;
        height: 538px;
        }
        .group-child60 {
        position: absolute;
        top: 0;
        left: 0;
        background-color: var(--color-maroon);
        width: 1440px;
        height: 156px;
        }
        .feline-lab8 {
        text-decoration: underline;
        }
        .copyright-2023-container8 {
        position: absolute;
        top: 78px;
        left: calc(50% - 525px);
        font-weight: 600;
        display: inline-block;
        width: 1044px;
        height: 23.94px;
        }
        .rectangle-parent50 {
        position: absolute;
        top: 1117px;
        left: 0;
        width: 1440px;
        height: 156px;
        font-family: var(--font-montserrat);
        }
        .home2 {
        position: relative;
        display: inline-block;
        width: 65px;
        height: 33px;
        flex-shrink: 0;
        cursor: pointer;
        }
        .about2 {
        width: 72px;
        cursor: pointer;
        }
        .about2,
        .contact2,
        .vouchers2 {
        position: relative;
        display: inline-block;
        height: 33px;
        flex-shrink: 0;
        }
        .contact2 {
        width: 89px;
        cursor: pointer;
        }
        .vouchers2 {
        width: 101px;
        }
        .group-child61,
        .vote3 {
        position: absolute;
        top: 0;
        }
        .group-child61 {
        left: 0;
        border-radius: var(--br-8xs);
        background-color: var(--color-maroon);
        width: 110px;
        height: 35px;
        }
        .vote3 {
        left: 30px;
        display: inline-block;
        width: 51px;
        height: 33px;
        }
        .rectangle-parent51 {
        position: relative;
        width: 110px;
        height: 35px;
        cursor: pointer;
        }
        .home-container {
        position: absolute;
        top: 52px;
        left: 813px;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: flex-start;
        gap: var(--gap-18xl);
        font-family: var(--font-alata);
        }
        .buka-website-wwwibdmcom-lalu3 {
        margin-bottom: 0;
        }
        .buka-website-wwwibdmcom-lalu2 {
        margin: 0;
        padding-left: 32px;
        }
        .buka-website-wwwibdmcom-container1 {
        position: absolute;
        top: 362px;
        left: calc(50% - 499px);
        font-size: var(--font-inherit);
        font-family: var(--font-inherit);
        text-align: left;
        display: inline-block;
        width: 998px;
        height: 462px;
        }
        .vouchers-desktop {
        position: relative;
        background: linear-gradient(
            180deg,
            #9b2a06 14.06%,
            #b05f5f 63.54%,
            #ddcaca 94.79%
        );
        width: 100%;
        height: 1273px;
        overflow: hidden;
        text-align: center;
        font-size: var(--font-size-5xl);
        color: var(--color-white);
        font-family: var(--font-average);
        }
    </style>
  </head>
  <body>
    <div class="vouchers-desktop">
      <img
        class="logo-ypps-1-1-28"
        alt=""
        src="logo-ypps-1-1-2@2x.png"
      />

      <div class="putra-putri-sriwijaya-container8">
        <p class="putra-putri12">PUTRA PUTRI</p>
        <p class="sriwijaya9">SRIWIJAYA</p>
      </div>
      <div class="tata-cara-pembelian">Tata Cara Pembelian Voucher</div>
      <div class="vouchers-desktop-child"></div>
      <div class="rectangle-parent50">
        <div class="group-child60"></div>
        <div class="copyright-2023-container8">
          Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
          <span class="feline-lab8">Feline Lab.</span>
        </div>
      </div>
      <div class="home-container">
        <div class="home2" id="homeText">Home</div>
        <div class="about2" id="aboutText">About</div>
        <div class="contact2" id="contactText">Contact</div>
        <div class="vouchers2">Vouchers</div>
        <div class="rectangle-parent51" id="groupContainer1">
          <div class="group-child61"></div>
          <div class="vote3">Vote</div>
        </div>
      </div>
      <div class="buka-website-wwwibdmcom-container1">
        <p class="sriwijaya9">&nbsp;</p>
        <ul class="buka-website-wwwibdmcom-lalu2">
          <li class="buka-website-wwwibdmcom-lalu3">
            Buka website www.ibdm.com lalu pilih menu "Voucher"
          </li>
          <li class="buka-website-wwwibdmcom-lalu3">
            Untuk melakukan pembelian voucher hubungi nomor whatsapp berikut
            08xxxxxxxx
          </li>
          <li class="buka-website-wwwibdmcom-lalu3">
            Pesan nominal voucher yang akan di beli, nominal voucher yang
            tersedia (10k,25k,50k,100k,500k).
          </li>
          <li class="buka-website-wwwibdmcom-lalu3">
            Upload Bukti pembayaran sesuai dengan nominal voucher yang di beli,
            pembayaran dapat melalui ATM/Bank (No Rek BNI : 1104-01-007117-50-4
            A.n --l)
          </li>
          <li class="buka-website-wwwibdmcom-lalu3">
            Setelah verifikasi pembayaran admin selesai kode voucher akan
            dikirimkan melalui whatsapp
          </li>
          <li class="buka-website-wwwibdmcom-lalu3">
            Setelah mendapatkan voucher masuk ke halaman
            <span class="feline-lab8">Vote</span> dengan cara mengklik tombol
            vote diatas, kemudian cari Finalis Favorit kalian dan lakukan Voting
            dengan cara memasukan kode voucher yang sudah dibeli.
          </li>
          <li class="buka-website-wwwibdmcom-lalu3">
            Bila berhasi akan mucul tulisan “Voting Berhasil”
          </li>
          <li>
            Grafik hasil e-voting otomatis langsung terupdate secara otomatis
          </li>
        </ul>
      </div>
    </div>

    <script>
      var homeText = document.getElementById("homeText");
      if (homeText) {
        homeText.addEventListener("click", function (e) {
          window.location.href = "./";
        });
      }
      
      var aboutText = document.getElementById("aboutText");
      if (aboutText) {
        aboutText.addEventListener("click", function (e) {
          window.location.href = "./about";
        });
      }
      
      var contactText = document.getElementById("contactText");
      if (contactText) {
        contactText.addEventListener("click", function (e) {
          window.location.href = "./contact";
        });
      }
      
      var groupContainer1 = document.getElementById("groupContainer1");
      if (groupContainer1) {
        groupContainer1.addEventListener("click", function (e) {
          window.location.href = "./votes";
        });
      }
      </script>
  </body>
</html>