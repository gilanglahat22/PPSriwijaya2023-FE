<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Alata:wght@400&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Average:wght@400&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Abril+Fatface:wght@400&display=swap");
    body {
        margin: 0;
        line-height: normal;
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
        --font-size-5xs: 8px;
        --font-size-xs: 12px;
        --font-size-17xl: 36px;
        --font-size-13xl: 32px;
        --font-size-5xl: 24px;
        --font-size-base: 16px;
        --font-size-sm: 14px;
        --font-size-6xs: 7px;
        --font-size-7xs: 6px;
        /* Colors */
        --color-black: #000;
        --color-gainsboro: #d9d9d9;
        --color-white: #fff;
        --color-maroon: #570303;
        --color-pink: #eeb5b5;
        --color-burlywood-100: #e6be86;
        --color-burlywood-200: #dfb979;
        --color-whitesmoke: #f7f7f7;
        /* Gaps */
        --gap-4xs: 9px;
        --gap-6xs: 7px;
        --gap-3xs: 10px;
        --gap-10xs: 3px;
        --gap-xs: 12px;
        /* Border radiuses */
        --br-11xs: 2px;
        --br-58xl: 77px;
        --br-3xs: 10px;
        --br-8xs: 5px;
    }
    body {
        margin: 0;
        width: 100%;
        line-height: normal;
    }
    .logoYpps112 {
        position: relative;
        width: 33px;
        height: 33px;
        object-fit: cover;
    }
    .putraPutri {
        margin-block-start: 0;
        margin-block-end: 1px;
    }
    .sriwijaya {
        margin: 0;
    }
    .putraPutriSriwijayaContainer {
        position: relative;
        letter-spacing: 0.04em;
        display: inline-block;
        width: 111px;
        height: 31px;
        flex-shrink: 0;
    }
    .logoYpps112Parent {
        position: absolute;
        top: 8px;
        left: 8px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        gap: var(--gap-4xs);
        text-align: left;
        font-size: var(--font-size-xs);
        font-family: var(--font-average);
    }
    .aboutPutraPutri {
        position: absolute;
        top: 106px;
        left: calc(50% - 129px);
        display: inline-block;
        width: 259px;
        height: 34px;
    }
    .groupChild {
        position: absolute;
        top: 0px;
        left: calc(50% - 160.5px);
        border-radius: var(--br-8xs);
        background: linear-gradient(180deg, #d21212 19.79%, #c51e1e 87.5%);
        width: 321px;
        padding-bottom: 65.6%;
    }
    .aboutAndroidInner {
        position: absolute;
        top: 140px;
        left: calc(50% - 160px);
        width: 321px;
        height: 188.17px;
    }
    .kilasBalikPemilihan {
        position: absolute;
        top: 489px;
        left: calc(50% - 127px);
        display: inline-block;
        width: 255px;
        height: 24px;
    }
    .frameChild {
        position: relative;
        border-radius: var(--br-8xs);
        width: 154px;
        height: 86px;
        object-fit: cover;
    }
    .frameItem {
        position: relative;
        border-radius: var(--br-8xs);
        width: 153px;
        height: 85px;
        object-fit: cover;
    }
    .frameInner {
        position: relative;
        border-radius: var(--br-8xs);
        width: 154px;
        height: 87px;
        object-fit: cover;
    }
    .rectangleIcon {
        position: relative;
        border-radius: var(--br-8xs);
        width: 155px;
        height: 87px;
        object-fit: cover;
    }
    .rectangleParent {
        position: absolute;
        top: 538px;
        left: calc(50% - 163px);
        width: 325px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: flex-end;
        justify-content: flex-end;
        gap: 16px;
    }
    .frameChild3 {
        position: relative;
        border-radius: var(--br-8xs);
        width: 128px;
        height: 179px;
        object-fit: cover;
        top: -139px;
    }
    .putraPutriContainer {
        position: relative;
        display: inline-block;
        width: 166.03px;
        height: 148.93px;
        flex-shrink: 0;
        opacity: 0.6;
        top: -130px;
    }
    .rectangleGroup {
        position: absolute;
        top: 155.09px;
        left: calc(50% - 151px);
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-6xs);
        text-align: justify;
        font-size: var(--font-size-7xs);
        font-family: var(--font-alata);
    }
    .visi {
        position: relative;
        display: inline-block;
        width: 99px;
        height: 19px;
        flex-shrink: 0;
    }
    .yayasanPutraPutri {
        position: absolute;
        top: calc(50% - 54.5px);
        left: calc(50% - 65.14px);
        display: inline-block;
        width: 130.28px;
        height: 109px;
    }
    .yayasanPutraPutriSriwijayaWrapper {
        position: relative;
        width: 130.28px;
        height: 109px;
        text-align: justify;
        font-size: var(--font-size-6xs);
        font-family: var(--font-alata);
    }
    .visiParent {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: var(--gap-xs);
    }
    .misi {
        position: relative;
        display: inline-block;
        width: 118px;
        height: 18px;
        flex-shrink: 0;
    }
    .meningkatkanKetahananGeneras {
        margin-bottom: 0px;
    }
    .mengembangkanBakatKreativita {
        margin: 0;
        padding-left: 7px;
    }
    .mengembangkanBakatKreativitaContainer {
        position: absolute;
        top: calc(50% - 60.5px);
        left: calc(50% - 90px);
        display: inline-block;
        width: 165.28px;
        height: 109px;
    }
    .mengembangkanBakatKreativitaWrapper {
        position: relative;
        width: 130.28px;
        height: 109px;
        text-align: justify;
        font-size: var(--font-size-6xs);
        font-family: var(--font-alata);
    }
    .frameParent {
        position: absolute;
        top: 248px;
        left: calc(50% - 153px);
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 35px;
    }
    .groupItem {
        position: absolute;
        top: 0px;
        left: -1px;
        background-color: var(--color-maroon);
        width: 100%;
        height: 39px;
    }
    .felineLab {
        text-decoration: underline;
    }
    .copyright2023Container {
        position: absolute;
        top: 17px;
        left: calc(50% - 174px);
        font-weight: 600;
        display: inline-block;
        width: 347px;
        height: 6px;
    }
    .rectangleContainer {
        /* position: relative;
        top: 1061px;
        left: 1px;
        width: 100%;
        height: 39px;
        font-size: var(--font-size-5xs);
        font-family: var(--font-montserrat); */
        position: absolute;
        text-align: center;
        align-items: center;
        top: 2940px;
        left: 0;
        width: 100%;
        height: 156px;
        font-family: var(--font-montserrat);
        color: #fff;
    }
    .aboutAndroid {
        position: relative;
        background: linear-gradient(180deg, #9b2a06, #b05f5f 52.6%, #ddcaca);
        width: 100%;
        height: 1100px;
        overflow: hidden;
        text-align: center;
        font-size: var(--font-size-base);
        color: var(--color-white);
        font-family: var(--font-abril-fatface);
    }

  @media(max-width: 342px){
    .aboutAndroid {
      width: 342px;
    }
    
    .rectangleContainer {
      width: 342px;
    }
  }
  </style>
</head>
<body>
  <div class="aboutAndroid">
    <div class="logoYpps112Parent">
      <img class="logoYpps112" alt="" src="/logo-ypps-1-1-2@2x.png" />
      <div class="putraPutriSriwijayaContainer">
        <p class="putraPutri">PUTRA PUTRI</p>
        <p class="sriwijaya">SRIWIJAYA</p>
      </div>
    </div>
    <div class="aboutPutraPutri">About Putra Putri Sriwijaya</div>
    <div class="aboutAndroidInner">
      <div class="groupChild" />
    </div>
      <div class="kilasBalikPemilihan">
        Kilas Balik Pemilihan PPS 2022
      </div>
      <div class="rectangleParent">
        <img class="frameChild" alt="" src="/rectangle-238@2x.png" />
        <img class="frameItem" alt="" src="/rectangle-242@2x.png" />
        <img class="frameInner" alt="" src="/rectangle-243@2x.png" />
        <img class="rectangleIcon" alt="" src="/rectangle-2381@2x.png" />
        <img class="frameInner" alt="" src="/rectangle-2421@2x.png" />
        <img class="rectangleIcon" alt="" src="/rectangle-2431@2x.png" />
      </div>
    <div class="rectangleGroup">
      <img class="frameChild3" alt="" src="/rectangle-241@2x.png" />
      <div class="putraPutriContainer">
        <p class="sriwijaya">
          Putra – Putri Sriwijaya atau dahulu disebut juga dengan Bujang Gadis
          Sumatera selatan merupakan pemuda pemudi terbaik sumatera selatan yang
          terdiri dari seluruh pemenang yang sebelumnya telah berkompetisi di
          kabupaten/kota yang berada di wilayah sumatera selatan. Putra – Putri
          Sriwijaya merupakan simbol untuk duta muda wisata sumatera selatan
          dalam pariwisata dan kebudayaan. Sebagai duta wisata sumatera selatan,
          Putra – Putri Sriwijaya memiliki masa jabatan selama 1 (satu) Tahun
          dalam mengemban amanahnya di Sumatera Selatan.
        </p>
        <p class="sriwijaya">&nbsp;</p>
        <p class="sriwijaya">
          Putra – Putri akan bertugas mendampingi para pejabat dalam menghadiri
          kegiatan pemerintahan yang bersifat seremonial. Tidak hanya itu,
          dengan segala kemampuan , bakat serta talenta yang dimiliki, Putra –
          Putri juga memiliki kewajiban untuk berkontribusi secara aktif dalam
          masyarakat untuk melestarikan, menjaga, baik memperkenalkan dan
          mempromosikan kebudayaan dan pariwisata serta potensi yang dimiliki
          sumatera selatan.
        </p>
      </div>
    </div>
    <div class="frameParent">
      <div class="visiParent">
        <div class="visi">Visi</div>
        <div class="yayasanPutraPutriSriwijayaWrapper">
          <div class="yayasanPutraPutri">
            Mewujudkan Ikatan Putra Putri Sriwijaya yang berintegritas, progresif, harmonis, inovatif dan inspiratif.
          </div>
        </div>
      </div>
      <div class="visiParent">
        <div class="misi">Misi</div>
        <div class="mengembangkanBakatKreativitaWrapper">
          <div class="mengembangkanBakatKreativitaContainer">
            <ul class="mengoptimalkanPotensiGeneras">
              <li class="membawaPerubahanYang">
                Mengoptimalkan potensi generasi muda yang berwawasan luas, peduli
                terhadap lingkungan sekitar dan memberikan aksi nyata melalui program
                kerja
              </li>
              <li class="membawaPerubahanYang">
                Membawa perubahan yang beriringan dengan kepentingan Ikatan Putra
                Putri Sriwijaya.
              </li>
              <li class="membawaPerubahanYang">
                Mempererat hubungan antar Putra Putri Sriwijaya dari berbagai
                angkatan.
              </li>
              <li class="membawaPerubahanYang">
                Menjadi wadah yang menampung ide dan aspirasi setiap Putra Putri.
              </li>
              <li>
                Turut aktif dan berpartisipasi dalam kegiatan yang berhubungan dengan
                Putra Putri Sriwijaya.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   </div>
   <div class="rectangleContainer">
      <div class="groupItem" />
      <div class="copyright2023Container">
        Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
        <span class="felineLab">Feline Lab.</span>
      </div>
    </div>
</body>
<script lang="ts">
    import { defineComponent  } from "vue";

    export default defineComponent({
        name: "AboutAndroid",
    });
</script>
</html>