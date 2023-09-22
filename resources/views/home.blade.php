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
    <style>

body {
    margin: 0;
    width: 100%;
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

.home-desktop-child {
    position: absolute;
    top: 5579px;
    left: 1258px;
    border-radius: 50%;
    background-color: var(--color-darkred);
    width: 373px;
    height: 373px;
}

.home-desktop-item {
    position: absolute;
    top: 5707px;
    left: 1233px;
    border-radius: 50%;
    border: 2px solid var(--color-burlywood-100);
    box-sizing: border-box;
    width: 286px;
    height: 286px;
}

.home-desktop-inner {
    top: 764px;
    left: 1110px;
    background-color: var(--color-saddlebrown);
    width: 464px;
    height: 464px;
}

.ellipse-div,
.home-desktop-child1,
.home-desktop-inner {
    position: absolute;
    border-radius: 50%;
}

.ellipse-div {
    top: 2966px;
    left: -303px;
    background-color: var(--color-darkred);
    width: 595px;
    height: 595px;
}

.home-desktop-child1 {
    top: 3123px;
    left: -106px;
    border: 2px solid var(--color-burlywood-100);
    box-sizing: border-box;
    width: 456px;
    height: 456px;
}

.home-desktop-child2 {
    position: absolute;
    top: 3930px;
    left: 1024px;
    border-radius: 50%;
    background-color: var(--color-darkred);
    width: 595px;
    height: 595px;
}

.home-desktop-child3 {
    position: absolute;
    top: 4110px;
    left: 1192px;
    border-radius: 50%;
    border: 2px solid var(--color-burlywood-100);
    box-sizing: border-box;
    width: 456px;
    height: 456px;
}

.home-desktop-child4 {
    position: absolute;
    top: 5893px;
    left: -447px;
    border-radius: 50%;
    background-color: var(--color-darkred);
    width: 595px;
    height: 595px;
}

.home-desktop-child5 {
    position: absolute;
    top: 5929px;
    left: -189px;
    border-radius: 50%;
    border: 2px solid var(--color-burlywood-100);
    box-sizing: border-box;
    width: 456px;
    height: 456px;
}

.home-desktop-child6 {
    position: absolute;
    top: 2511px;
    left: 1299px;
    border-radius: 50%;
    background-color: var(--color-darkred);
    width: 402px;
    height: 402px;
}

.home-desktop-child7 {
    position: absolute;
    top: 2422px;
    left: 1270px;
    border-radius: 50%;
    border: 2px solid var(--color-burlywood-100);
    box-sizing: border-box;
    width: 396px;
    height: 396px;
}

.home-desktop-child8 {
    position: absolute;
    top: 665.75px;
    left: 1028px;
    width: 491.83px;
    height: 491.83px;
}

.home-desktop-child9 {
    position: absolute;
    top: 263px;
    left: 33px;
    border-radius: 50%;
    background-color: var(--color-saddlebrown);
    width: 530px;
    height: 531px;
}

.home-desktop-child10 {
    position: absolute;
    top: 158px;
    left: 208.64px;
    width: 531.36px;
    height: 531.36px;
    display: none;
}

.home-desktop-child11 {
    position: absolute;
    top: 1371px;
    left: 0;
    width: 454px;
    height: 454px;
}

.home-desktop-child12 {
  position: absolute;
  top: 832px;
  left: calc(50% - 678px);
  border-radius: var(--br-xl);
  background: linear-gradient(180deg, #b8b8b8 19.79%, #ee9090 66.67%);
  width: 1350px;
  height: 750px;
  padding-top: 3%;
}

.home-desktop-child13 {
    position: absolute;
    top: 870px;
    left: 83px;
    border-radius: var(--br-8xs);
    background-color: var(--color-gray-100);
    width: 1274px;
    height: 716px;
}

.logo-ypps-1-1-211 {
    position: relative;
    width: 71px;
    height: 71px;
    object-fit: cover;
}

.putra-putri17 {
    margin-block-start: 0;
    margin-block-end: 1px;
}

.sriwijaya12 {
    margin: 0;
}

.putra-putri-sriwijaya-container11 {
    position: relative;
    letter-spacing: 0.04em;
    display: inline-block;
    width: 178px;
    height: 60px;
    flex-shrink: 0;
}

.logo-ypps-1-1-2-parent4 {
    position: absolute;
    top: 41px;
    left: 39px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 18px;
    text-align: left;
    font-size: var(--font-size-5xl);
    font-family: var(--font-average);
}

.mask-group-icon6 {
    position: relative;
    width: 381.58px;
    height: 381.58px;
    object-fit: cover;
}

.mask-group-container,
.mask-group-group {
    position: absolute;
    top: 2622px;
    left: calc(50% - 639px);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 67px;
}

.mask-group-container {
    top: 3030px;
    left: calc(50% - 640px);
    gap: 68px;
}

.our-social-media1,
.siapa-putra-putri1 {
    position: absolute;
    top: 2468px;
    left: calc(50% - 269px);
    display: inline-block;
    width: 550px;
    height: 85px;
}

.siapa-putra-putri1 {
    top: 1779px;
    left: calc(50% - 394px);
    width: 788px;
}

.img-3011-1-11,
.logo-provinsi-sumatera-selatan-icon1 {
    position: relative;
    width: 150px;
    height: 187px;
    object-fit: cover;
}

.img-3011-1-11 {
    width: 299px;
    height: 131px;
}

.logo-ypps-1-1-11,
.pesona-indonesia-1-11 {
    position: relative;
    width: 311px;
    height: 234px;
    object-fit: cover;
}

.logo-ypps-1-1-11 {
    width: 154px;
    height: 153px;
}

.logo-provinsi-sumatera-selatan-group {
    position: absolute;
    top: 3711px;
    left: calc(50% - 577px);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 80px;
}

.ayo-dukung-pilihanmu1,
.dinas-pariwisata-dan1,
.diselenggarakan-oleh1 {
    position: absolute;
    top: 3579px;
    left: calc(50% - 346px);
    display: inline-block;
    width: 692px;
    height: 84px;
}

.ayo-dukung-pilihanmu1,
.dinas-pariwisata-dan1 {
    top: 4129px;
    left: calc(50% - 628px);
    width: 1265px;
}

.dinas-pariwisata-dan1 {
    top: 3689px;
    left: calc(50% - 690px);
    font-size: var(--font-size-17xl);
    letter-spacing: 0.05em;
    line-height: 35px;
    font-family: var(--font-alata);
    width: 1379px;
    height: 17px;
}

.home-desktop-child14 {
    position: absolute;
    top: 1141.45px;
    left: calc(50% - 31.19px);
    width: 92.61px;
    height: 106.52px;
}

.home-desktop-child15 {
    position: absolute;
    top: 3700px;
    left: 0;
    width: 1439px;
    height: 639px;
    object-fit: cover;
}

.group-child66 {
    position: absolute;
    top: 0;
    left: calc(50% - 180px);
    border-radius: var(--br-81xl);
    background-color: var(--color-burlywood-100);
    width: 360px;
    height: 101px;
}

.vote-now1 {
    position: absolute;
    top: 32px;
    left: calc(50% - 127px);
    letter-spacing: 0.05em;
    line-height: 35px;
}

.rectangle-parent59 {
    position: absolute;
    top: 4253px;
    left: calc(50% - 180px);
    width: 360px;
    height: 101px;
    cursor: pointer;
    font-size: var(--font-size-29xl);
    color: var(--color-black);
}

.home-desktop-child16 {
    position: absolute;
    top: 4919px;
    left: -234px;
    border-radius: 50%;
    background-color: var(--color-darkred);
    width: 402px;
    height: 402px;
}

.home-desktop-child17 {
    position: absolute;
    top: 4996px;
    left: -104px;
    border-radius: 50%;
    border: 2px solid var(--color-burlywood-100);
    box-sizing: border-box;
    width: 396px;
    height: 396px;
}

.putra-putri18,
.sriwijaya13 {
    position: relative;
    display: inline-block;
    flex-shrink: 0;
}

.putra-putri18 {
    text-align: left;
    width: 454px;
    height: 80px;
}

.sriwijaya13 {
    width: 329px;
    height: 73px;
}

.batang-1-icon1 {
    position: relative;
    width: 166px;
    height: 79px;
    object-fit: cover;
}

.sriwijaya-parent {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 54px;
    color: var(--color-burlywood-100);
}

.putra-putri-sriwijaya {
    position: relative;
    font-size: var(--font-size-sm);
    letter-spacing: 0.05em;
    line-height: 20px;
    font-family: var(--font-alata);
    display: inline-block;
    width: 549px;
    height: 118px;
    flex-shrink: 0;
}

.group-child67 {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: var(--br-81xl);
    background-color: var(--color-burlywood-100);
    width: 161px;
    height: 43px;
}

.more {
    position: absolute;
    top: 3px;
    left: calc(50% - 69.5px);
    letter-spacing: 0.05em;
    line-height: 35px;
    display: inline-block;
    width: 138px;
    height: 35px;
}

.rectangle-parent60 {
    position: relative;
    width: 161px;
    height: 43px;
    cursor: pointer;
    text-align: center;
    font-size: var(--font-size-xl);
    color: #2a0303;
}

.putra-putri-group {
    position: absolute;
    top: 258px;
    left: 848px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-base);
    text-align: justify;
    font-size: var(--font-size-56xl);
}

.about5,
.contact5,
.home5,
.vouchers5 {
    position: relative;
    display: inline-block;
    width: 65px;
    height: 33px;
    flex-shrink: 0;
}

.about5,
.contact5,
.vouchers5 {
    width: 72px;
    cursor: pointer;
}

.contact5,
.vouchers5 {
    width: 89px;
}

.vouchers5 {
    width: 101px;
}

.group-child68,
.vote7 {
    position: absolute;
    top: 0;
}

.group-child68 {
    left: 0;
    border-radius: var(--br-8xs);
    background-color: var(--color-maroon);
    width: 110px;
    height: 35px;
}

.vote7 {
    left: 30px;
    display: inline-block;
    width: 51px;
    height: 33px;
}

.rectangle-parent61 {
    position: relative;
    width: 110px;
    height: 35px;
    cursor: pointer;
}

.home-parent3 {
    position: absolute;
    top: 52px;
    left: 813px;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    gap: var(--gap-18xl);
    font-size: var(--font-size-5xl);
    font-family: var(--font-alata);
}

.group-child69 {
    position: absolute;
    top: 0;
    left: 0;
    background-color: var(--color-maroon);
    /* width: 1440px; */
    width: 100%;
    height: 156px;
    text-align: center;
}

.feline-lab11 {
    text-decoration: underline;
}

.copyright-2023-container11 {
    position: absolute;
    top: 78px;
    left: calc(50% - 525px);
    font-weight: 600;
    display: inline-block;
    width: 1044px;
    height: 23.94px;
}

.rectangle-parent62 {
    position: absolute;
    align-items: center;
    text-align: center;
    top: 4586px;
    left: 0;
    width: 100%;
    height: 156px;
    font-size: var(--font-size-5xl);
    font-family: var(--font-montserrat);
    color: #fff;
}

.putra-putri19 {
    position: absolute;
    top: 1913px;
    left: calc(50% - 527px);
    font-size: var(--font-size-13xl);
    font-family: var(--font-alata);
    display: inline-block;
    width: 1054px;
    height: 359px;
}

.alumni-yang-skskskkskskk-container3,
.div12 {
    position: relative;
    letter-spacing: 0.05em;
    line-height: 35px;
    display: inline-block;
    flex-shrink: 0;
}

.div12 {
    text-transform: uppercase;
    width: 190px;
    height: 30px;
}

.alumni-yang-skskskkskskk-container3 {
    font-size: var(--font-size-17xl);
    font-family: var(--font-alata);
    color: var(--color-white);
    text-align: right;
    width: 330px;
    height: 32px;
}

.parent1 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-36xl);
}

.div14 {
    position: relative;
    letter-spacing: 0.05em;
    line-height: 35px;
    text-transform: uppercase;
    display: inline-block;
    width: 225px;
    height: 30px;
    flex-shrink: 0;
}

.frame-parent7 {
    position: absolute;
    top: 4710px;
    left: calc(50% - 618px);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 123px;
    font-size: var(--font-size-77xl);
    color: var(--color-burlywood-100);
}

.group-45-1-1 {
    position: relative;
    width: 812px;
    height: 711px;
    object-fit: cover;
}

.carousel-2 {
    position: absolute;
    top: 121px;
    left: 38px;
    width: 812px;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 690px;
}

.home-desktop {
    position: relative;
    background: linear-gradient( 180deg, #9b2a06 14.06%, #b05f5f 63.54%, #ddcaca 94.79%);
    width: 100%;
    height: 4586px;
    overflow: hidden;
    text-align: center;
    font-size: var(--font-size-37xl);
    color: var(--color-white);
    font-family: var(--font-abril-fatface);
}
.homeAndroidChild5 {
    position: relative;
    align-items: center;
    justify-content: center;
    justify-items: center;
    width: 92%;
    border-radius: var(--br-8xs);
  }
@media (max-width: 1441px){
    .rectangle-parent62 {
      width: 1441px;
    }

    .home-desktop{
      width: 1441px;
    }
  }
    </style>
  </head>
  <body>
    <div class="home-desktop">
      <div class="home-desktop-child"></div>
      <div class="home-desktop-item"></div>
      <div class="home-desktop-inner"></div>
      <div class="ellipse-div"></div>
      <div class="home-desktop-child1"></div>
      <div class="home-desktop-child2"></div>
      <div class="home-desktop-child3"></div>
      <div class="home-desktop-child4"></div>
      <div class="home-desktop-child5"></div>
      <div class="home-desktop-child6"></div>
      <div class="home-desktop-child7"></div>
      <img class="home-desktop-child8" alt="" src="group-33.svg" />

      <div class="home-desktop-child9"></div>
      <img class="home-desktop-child10" alt="" src="group-37.svg" />

      <img class="home-desktop-child11" alt="" src="group-36.svg" />

      <div class="home-desktop-child12">
        <video class="homeAndroidChild5" controls autoplay>  
            <source src="PPS_TRAILER_REVISI_LOGO.mp4" type="video/mp4">  
        </video>
      </div>
      <!-- <div class="home-desktop-child13"></div> -->
      <div class="logo-ypps-1-1-2-parent4">
        <img
          class="logo-ypps-1-1-211"
          alt=""
          src="logo-ypps-1-1-1@2x.png"
        />

        <div class="putra-putri-sriwijaya-container11">
          <p class="putra-putri17">PUTRA PUTRI</p>
          <p class="sriwijaya12">SRIWIJAYA</p>
        </div>
      </div>
      <div class="mask-group-group">
        <img
          class="mask-group-icon6"
          alt=""
          src="mask-group@2x.png"
        />

        <img
          class="mask-group-icon6"
          alt=""
          src="mask-group1@2x.png"
        />

        <img
          class="mask-group-icon6"
          alt=""
          src="mask-group2@2x.png"
        />
      </div>
      <div class="mask-group-container">
        <img
          class="mask-group-icon6"
          alt=""
          src="mask-group3@2x.png"
        />

        <img
          class="mask-group-icon6"
          alt=""
          src="mask-group4@2x.png"
        />

        <img
          class="mask-group-icon6"
          alt=""
          src="mask-group5@2x.png"
        />
      </div>
      <div class="our-social-media1">Our Social Media.</div>
      <div class="siapa-putra-putri1">Siapa Putra Putri Sriwijaya ?</div>
      <div class="logo-provinsi-sumatera-selatan-group">
        <img
          class="logo-provinsi-sumatera-selatan-icon1"
          alt=""
          src="logoprovinsisumateraselatan-1@2x.png"
        />

        <img class="img-3011-1-11" alt="" src="img-3011-1-1@2x.png" />

        <img
          class="pesona-indonesia-1-11"
          alt=""
          src="pesona-indonesia-1-1@2x.png"
        />

        <img
          class="logo-ypps-1-1-11"
          alt=""
          src="logo-ypps-1-1-1@2x.png"
        />
      </div>
      <div class="diselenggarakan-oleh1">Diselenggarakan Oleh</div>
      <div class="ayo-dukung-pilihanmu1">
        Ayo dukung pilihanmu untuk maju ke 6 besar
      </div>
      <div class="dinas-pariwisata-dan1">
        Dinas Pariwisata dan Kebudayaan Provinsi Sumatera Selatan
      </div>
      <!-- <img class="home-desktop-child14" alt="" src="polygon-1.svg" /> -->

      <div class="rectangle-parent59" id="groupContainer">
        <div class="group-child66"></div>
        <div class="vote-now1">Vote Now !</div>
      </div>
      <div class="home-desktop-child16"></div>
      <div class="home-desktop-child17"></div>
      <div class="putra-putri-group">
        <div class="putra-putri18">Putra Putri</div>
        <div class="sriwijaya-parent">
          <div class="sriwijaya13">Sriwijaya</div>
          <img class="batang-1-icon1" alt="" src="batang-1@2x.png" />
        </div>
        <div class="putra-putri-sriwijaya">
          Putra Putri Sriwijaya adalah sebuah wadah yang menaungi anak muda
          berkarakter, bertalenta, dan memiliki segudang inspirasi untuk
          memberikan kontribusi nyata terhadap kemajuan Pariwisata dan Budaya di
          wilayah Sumatera Selatan. Putra Putri Sriwijaya merupakan figur-figur
          terbaik dari Sumatera Selatan yang memiliki 17 wilayah kabupaten/kota
          di Sumatera Selatan.
        </div>
        <div class="rectangle-parent60" id="groupContainer1">
          <div class="group-child67"></div>
          <div class="more">more..</div>
        </div>
      </div>
      <div class="home-parent3">
        <div class="home5">Home</div>
        <div class="about5" id="aboutText">About</div>
        <div class="contact5" id="contactText">Contact</div>
        <div class="vouchers5" id="vouchersText">Vouchers</div>
        <div class="rectangle-parent61" id="groupContainer2">
          <div class="group-child68"></div>
          <div class="vote7">Vote</div>
        </div>
      </div>
      <div class="putra-putri19">
        Putra – Putri Sriwijaya atau dahulu disebut juga dengan Bujang Gadis
        Sumatera selatan merupakan pemuda pemudi terbaik sumatera selatan yang
        terdiri dari seluruh pemenang yang sebelumnya telah berkompetisi di
        kabupaten/kota yang berada di wilayah sumatera selatan. Putra – Putri
        Sriwijaya merupakan simbol untuk duta muda wisata sumatera selatan dalam
        pariwisata dan kebudayaan. Sebagai duta wisata sumatera selatan, Putra –
        Putri Sriwijaya memiliki masa jabatan selama 1 (satu) Tahun dalam
        mengemban amanahnya di Sumatera Selatan.
      </div>
      <div class="carousel-2">
        <img class="group-45-1-1" alt="" src="group-45-1-1@2x.png" />

        <img class="group-45-1-1" alt="" src="group-46-1@2x.png" />
      </div>
    </div>
    <div class="rectangle-parent62">
      <div class="group-child69"></div>
      <div class="copyright-2023-container11">
        Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
        <span class="feline-lab11">Feline Lab.</span>
      </div>
    </div>

    <script>
      var pause = document.querySelector('.pause');
      var play = document.querySelector('.play');
      var btn = document.querySelector('#app');

      btn.addEventListener('click', () => {
          if( play.classList.contains("active") )
          {
              play.classList.remove("active");
              pause.classList.add("active");
          }
          else
          {
              pause.classList.remove("active");
              play.classList.add("active");
          }
      })
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          window.location.href = "/search_vote";
        });
      }
      
      var groupContainer1 = document.getElementById("groupContainer1");
      if (groupContainer1) {
        groupContainer1.addEventListener("click", function (e) {
          window.location.href = "/about";
        });
      }
      
      var aboutText = document.getElementById("aboutText");
      if (aboutText) {
        aboutText.addEventListener("click", function (e) {
          window.location.href = "/about";
        });
      }
      
      var contactText = document.getElementById("contactText");
      if (contactText) {
        contactText.addEventListener("click", function (e) {
          window.location.href = "/contact";
        });
      }
      
      var vouchersText = document.getElementById("vouchersText");
      if (vouchersText) {
        vouchersText.addEventListener("click", function (e) {
          window.location.href = "/vouchers";
        });
      }
      
      var groupContainer2 = document.getElementById("groupContainer2");
      if (groupContainer2) {
        groupContainer2.addEventListener("click", function (e) {
          window.location.href = "/votes";
        });
      }
      </script>
  </body>
</html>