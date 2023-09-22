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
        line-height: normal;
        width: 100%;
        height: 100%;
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

        .logo-ypps-1-1-27 {
        position: absolute;
        top: 22px;
        left: 39px;
        width: 71px;
        height: 71px;
        object-fit: cover;
        }
        .putra-putri11 {
        margin-block-start: 0;
        margin-block-end: 1px;
        }
        .sriwijaya8 {
        margin: 0;
        }
        .putra-putri-sriwijaya-container7 {
        position: absolute;
        top: 28px;
        left: 128px;
        letter-spacing: 0.04em;
        font-family: var(--font-average);
        text-align: left;
        display: inline-block;
        width: 178px;
        height: 60px;
        }
        .vote-desktop-item {
        position: absolute;
        top: 192px;
        left: calc(50% - 596px);
        border-radius: var(--br-xl);
        background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
        width: 1192px;
        height: 652px;
        }
        .nama12 {
        position: relative;
        }
        .nama-parent1,
        .nama-parent2 {
        position: absolute;
        top: 330px;
        left: 502px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-6xl);
        font-size: var(--font-size-xl);
        font-family: var(--font-alata);
        }
        .nama-parent2 {
        top: 560px;
        }
        .putra3,
        .putri3 {
        position: absolute;
        top: 735.91px;
        left: calc(50% - 528.69px);
        font-size: var(--font-size-37xl);
        color: var(--color-burlywood-200);
        display: inline-block;
        width: 183.79px;
        height: 69px;
        transform: rotate(-90.1deg);
        transform-origin: 0 0;
        }
        .putra3 {
        top: 490.91px;
        }
        .vote-desktop-child1,
        .vote-desktop-inner {
        position: absolute;
        top: 917px;
        left: calc(50% - 592px);
        border-radius: var(--br-xl);
        background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
        width: 572px;
        height: 193px;
        }
        .vote-desktop-child1 {
        left: calc(50% + 26px);
        }
        .about1,
        .contact1,
        .home1,
        .vouchers1 {
        position: relative;
        display: inline-block;
        width: 65px;
        height: 33px;
        flex-shrink: 0;
        cursor: pointer;
        }
        .about1,
        .contact1,
        .vouchers1 {
        width: 72px;
        }
        .contact1,
        .vouchers1 {
        width: 89px;
        }
        .vouchers1 {
        width: 101px;
        }
        .group-child33,
        .vote2 {
        position: absolute;
        top: 0;
        }
        .group-child33 {
        left: 0;
        border-radius: var(--br-8xs);
        background-color: var(--color-maroon);
        width: 110px;
        height: 35px;
        }
        .vote2 {
        left: 30px;
        display: inline-block;
        width: 51px;
        height: 33px;
        }
        .rectangle-parent23 {
        position: relative;
        width: 110px;
        height: 35px;
        }
        .home-group {
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
        .group-child34 {
        position: absolute;
        top: 0;
        left: 0;
        background-color: var(--color-maroon);
        width: 100%;
        height: 156px;
        text-align: center;
        }
        .feline-lab7 {
        text-decoration: underline;
        }
        .copyright-2023-container7 {
        position: absolute;
        top: 78px;
        left: calc(50% - 525px);
        font-weight: 600;
        display: inline-block;
        width: 1044px;
        height: 23.94px;
        text-align: center;
        }
        .rectangle-parent24 {
        position: absolute;
        text-align: center;
        align-items: center;
        top: 2684px;
        left: 0;
        width: 100%;
        height: 156px;
        font-family: var(--font-montserrat);
        color: #fff;
        }
        .vote-desktop-child2 {
        position: absolute;
        top: 1222px;
        left: calc(50% - 339px);
        border-radius: var(--br-58xl);
        background-color: var(--color-gainsboro);
        width: 679px;
        height: 75px;
        }
        .search-1-icon1 {
        position: absolute;
        top: 1238px;
        left: 935px;
        width: 48px;
        height: 48px;
        object-fit: cover;
        cursor: pointer;
        }
        .group-child35 {
        position: absolute;
        top: -2px;
        left: -2px;
        border-right: 4px solid var(--color-white);
        box-sizing: border-box;
        width: 4px;
        height: 405px;
        }
        .frame-child16,
        .frame-child17,
        .frame-child18 {
        position: relative;
        background-color: var(--color-gainsboro);
        width: 611px;
        height: 42px;
        }
        .frame-child17,
        .frame-child18 {
        width: 519px;
        height: 40px;
        }
        .frame-child18 {
        width: 429px;
        height: 47px;
        }
        .rectangle-parent25 {
        position: absolute;
        top: 237px;
        left: 4px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-smi);
        }
        .frame-child19 {
        position: relative;
        width: 612px;
        height: 42px;
        }
        .frame-child20,
        .frame-child21 {
        position: relative;
        background-color: var(--color-gainsboro);
        width: 520px;
        height: 40px;
        }
        .frame-child21 {
        width: 431px;
        height: 47px;
        }
        .vector-parent {
        position: absolute;
        top: 9px;
        left: 4px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-smi);
        }
        .group-child36,
        .line-container {
        position: absolute;
        top: 315px;
        left: 576px;
        width: 616px;
        height: 401px;
        }
        .group-child36 {
        top: 0;
        left: 0;
        border-radius: var(--br-8xs);
        background-color: var(--color-gainsboro);
        width: 369.16px;
        height: 440px;
        }
        .frame-child22,
        .group-child37 {
        border-radius: var(--br-8xs);
        width: 300px;
        height: 300px;
        }
        .group-child37 {
        position: absolute;
        top: 37px;
        left: 35px;
        }
        .frame-child22 {
        position: relative;
        object-fit: cover;
        }
        .rectangle-parent27 {
        position: absolute;
        top: 37px;
        left: 35px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-base);
        }
        .rectangle-parent26 {
        position: absolute;
        top: 0;
        left: 0;
        width: 369.16px;
        height: 440px;
        }
        .rectangle-parent28,
        .rectangle-parent30,
        .rectangle-parent32 {
        position: absolute;
        top: 0;
        left: 409.16px;
        width: 369.16px;
        height: 440px;
        }
        .rectangle-parent30,
        .rectangle-parent32 {
        left: 818.32px;
        }
        .rectangle-parent32 {
        left: 1227.48px;
        }
        .ahmad-yani {
        position: relative;
        display: inline-block;
        width: 300px;
        height: 65px;
        flex-shrink: 0;
        }
        .rectangle-parent34,
        .rectangle-parent36 {
        position: absolute;
        top: 0;
        left: 1636.64px;
        width: 369.16px;
        height: 440px;
        }
        .rectangle-parent36 {
        left: 2045.81px;
        }
        .slider-1 {
        position: absolute;
        top: 1444px;
        left: calc(50% - 593px);
        width: 1187px;
        height: 440px;
        overflow: hidden;
        color: var(--color-black);
        font-family: var(--font-alata);
        }
        .putra4 {
        position: absolute;
        top: 1335px;
        left: calc(50% - 195px);
        font-size: var(--font-size-37xl);
        color: var(--color-burlywood-200);
        display: inline-block;
        width: 390px;
        height: 65px;
        }
        .slider-2 {
        position: absolute;
        top: 2105px;
        left: calc(50% - 590px);
        width: 1187px;
        height: 440px;
        overflow: hidden;
        color: var(--color-black);
        font-family: var(--font-alata);
        }
        .d20h20m1,
        .div11,
        .putri4 {
        position: absolute;
        display: inline-block;
        }
        .putri4 {
        top: 1996px;
        left: calc(50% - 191px);
        font-size: var(--font-size-37xl);
        color: var(--color-burlywood-200);
        width: 390px;
        height: 65px;
        }
        .d20h20m1,
        .div11 {
        top: 971px;
        left: 175px;
        font-size: var(--font-size-45xl);
        width: 478px;
        height: 84px;
        }
        .div11 {
        left: 906px;
        width: 219px;
        }
        .gain-up-11 {
        position: absolute;
        top: 989px;
        left: 1094px;
        width: 46px;
        height: 52px;
        object-fit: cover;
        }
        .vote-desktop1 {
        position: relative;
        background: linear-gradient(
            180deg,
            #9b2a06 14.06%,
            #b05f5f 63.54%,
            #ddcaca 94.79%
        );
        width: 100%;
        height: 2840px;
        overflow: hidden;
        text-align: center;
        font-size: var(--font-size-5xl);
        color: var(--color-white);
        font-family: var(--font-abril-fatface);
        }
        .pop-up-kode-inner {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-3xs);
        background: linear-gradient(180deg, #b22424, #340202);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) inset;
        width: 1249px;
        height: 838px;
        }
        .masukkan-kode-voucher1 {
        position: absolute;
        top: 183px;
        left: calc(50% - 346.5px);
        display: inline-block;
        width: 694px;
        height: 68px;
        }
        .frame-child9 {
        position: relative;
        border-radius: var(--br-8xs);
        background-color: var(--color-gainsboro);
        border: 2px solid var(--color-pink);
        box-sizing: border-box;
        width: 145px;
        height: 145px;
        }
        .rectangle-parent17 {
        position: absolute;
        top: 276px;
        left: 152px;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: flex-start;
        gap: var(--gap-mini);
        }
        .pop-up-kode-child1 {
        position: absolute;
        top: 83.5px;
        left: -1.5px;
        border-top: 3px solid var(--color-silver);
        box-sizing: border-box;
        width: 1252px;
        height: 3px;
        }
        .vote-mustofa1 {
        position: absolute;
        top: 9px;
        left: calc(50% - 297.5px);
        font-size: var(--font-size-29xl);
        display: inline-block;
        width: 595px;
        height: 68px;
        }
        .belum-punya-kode1 {
        margin: 0;
        }
        .ikuti-tata-cara1 {
        margin: 0;
        text-decoration: underline;
        color: var(--color-blue);
        }
        .belum-punya-kode-container1 {
        position: absolute;
        top: 483px;
        left: 152px;
        display: inline-block;
        width: 945px;
        height: 154px;
        }
        .group-child28 {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-37xl-5);
        background-color: var(--color-gainsboro);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) inset;
        width: 290px;
        height: 68px;
        }
        .kirim1 {
        position: absolute;
        top: 7px;
        left: 45px;
        display: inline-block;
        width: 199px;
        height: 33px;
        }
        .rectangle-parent18 {
        position: absolute;
        top: 638px;
        left: 474px;
        width: 290px;
        height: 68px;
        color: var(--color-black);
        }
        .pop-up-kode1 {
        position: relative;
        width: 1249px;
        height: 838px;
        max-width: 90%;
        max-height: 90%;
        overflow: auto;
        text-align: center;
        font-size: var(--font-size-17xl);
        color: var(--color-white);
        font-family: var(--font-alata);
        }
        @media (max-width: 1441px){
            .rectangle-parent24 {
                width: 1441px;
            }

            .vote-desktop1{
                width: 1441px;
            }
        }
    </style>
  </head>
  <body>
    <div class="vote-desktop1">
      <img
        class="logo-ypps-1-1-27"
        alt=""
        src="logo-ypps-1-1-2@2x.png"
      />

      <div class="putra-putri-sriwijaya-container7">
        <p class="putra-putri11">PUTRA PUTRI</p>
        <p class="sriwijaya8">SRIWIJAYA</p>
      </div>
      <div class="vote-desktop-item"></div>
      <div class="nama-parent1">
        <div class="nama12">nama</div>
        <div class="nama12">nama</div>
        <div class="nama12">nama</div>
      </div>
      <div class="nama-parent2">
        <div class="nama12">nama</div>
        <div class="nama12">nama</div>
        <div class="nama12">nama</div>
      </div>
      <div class="putri3">Putri</div>
      <div class="putra3">Putra</div>
      <div class="vote-desktop-inner"></div>
      <div class="vote-desktop-child1"></div>
      <div class="home-group">
        <div class="home1" id="homeText">Home</div>
        <div class="about1" id="aboutText">About</div>
        <div class="contact1" id="contactText">Contact</div>
        <div class="vouchers1" id="vouchersText">Vouchers</div>
        <div class="rectangle-parent23">
          <div class="group-child33"></div>
          <div class="vote2">Vote</div>
        </div>
      </div>
      <div class="vote-desktop-child2"></div>
      <img
        class="search-1-icon1"
        alt=""
        src="search-1@2x.png"
        id="search1Icon"
      />

      <div class="line-container">
        <div class="group-child35"></div>
        <div class="rectangle-parent25">
          <div class="frame-child16"></div>
          <div class="frame-child17"></div>
          <div class="frame-child18"></div>
        </div>
        <div class="vector-parent">
          <img class="frame-child19" alt="" src="rectangle-273.svg" />

          <div class="frame-child20"></div>
          <div class="frame-child21"></div>
        </div>
      </div>
      <div class="slider-1">
        <div class="rectangle-parent26" id="groupContainer3">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2902@2x.png"
            />

            <div class="ahmad-yani">Mustofa A.</div>
          </div>
        </div>
        <div class="rectangle-parent28">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2901@2x.png"
            />

            <div class="ahmad-yani">Imron</div>
          </div>
        </div>
        <div class="rectangle-parent30">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2902@2x.png"
            />

            <div class="ahmad-yani">Abdul</div>
          </div>
        </div>
        <div class="rectangle-parent32">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2903@2x.png"
            />

            <div class="ahmad-yani">brody</div>
          </div>
        </div>
        <div class="rectangle-parent34">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2904@2x.png"
            />

            <div class="ahmad-yani">Ahmad yani</div>
          </div>
        </div>
        <div class="rectangle-parent36">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2905@2x.png"
            />

            <div class="ahmad-yani">Yeyen</div>
          </div>
        </div>
      </div>
      <div class="putra4">Putra</div>
      <div class="slider-2">
        <div class="rectangle-parent26">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2902@2x.png"
            />

            <div class="ahmad-yani">Mustofa A.</div>
          </div>
        </div>
        <div class="rectangle-parent28">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2901@2x.png"
            />

            <div class="ahmad-yani">Imron</div>
          </div>
        </div>
        <div class="rectangle-parent30">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2902@2x.png"
            />

            <div class="ahmad-yani">Abdul</div>
          </div>
        </div>
        <div class="rectangle-parent32">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2903@2x.png"
            />

            <div class="ahmad-yani">brody</div>
          </div>
        </div>
        <div class="rectangle-parent34">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2904@2x.png"
            />

            <div class="ahmad-yani">Ahmad yani</div>
          </div>
        </div>
        <div class="rectangle-parent36">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2905@2x.png"
            />

            <div class="ahmad-yani">Yeyen</div>
          </div>
        </div>
      </div>
      <div class="putri4">Putri</div>
      <div class="d20h20m1">20D:20H:20M</div>
      <div class="div11">800</div>
      <img class="gain-up-11" alt="" src="gain-up-1@2x.png" />
    </div>

    <div id="popUpKode" class="popup-overlay" style="display: none">
      <div class="pop-up-kode1">
        <div class="pop-up-kode-inner"></div>
        <div class="masukkan-kode-voucher1">
          Masukkan Kode Voucher dibawah ini
        </div>
        <div class="rectangle-parent17">
          <div class="frame-child9"></div>
          <div class="frame-child9"></div>
          <div class="frame-child9"></div>
          <div class="frame-child9"></div>
          <div class="frame-child9"></div>
          <div class="frame-child9"></div>
        </div>
        <div class="pop-up-kode-child1"></div>
        <div class="vote-mustofa1">VOTE - Mustofa A.</div>
        <div class="belum-punya-kode-container1">
          <p class="belum-punya-kode1">Belum punya kode voucher?</p>
          <p class="ikuti-tata-cara1">Ikuti tata cara pembelian</p>
        </div>
        <div class="rectangle-parent18">
          <div class="group-child28"></div>
          <div class="kirim1">Kirim</div>
        </div>
      </div>
    </div>

    <div class="rectangle-parent24">
        <div class="group-child34"></div>
        <div class="copyright-2023-container7">
            Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
            <span class="feline-lab7">Feline Lab.</span>
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
      
      var vouchersText = document.getElementById("vouchersText");
      if (vouchersText) {
        vouchersText.addEventListener("click", function (e) {
          window.location.href = "./vouchers";
        });
      }
      
      var search1Icon = document.getElementById("search1Icon");
      if (search1Icon) {
        search1Icon.addEventListener("click", function (e) {
          window.location.href = "./search_vote";
        });
      }
      
      var groupContainer3 = document.getElementById("groupContainer3");
      if (groupContainer3) {
        groupContainer3.addEventListener("click", function () {
          var popup = document.getElementById("popUpKode");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
          }
          popup.setAttribute("closable", "");
      
          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      </script>
  </body>
</html>