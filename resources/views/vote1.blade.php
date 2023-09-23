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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
        position: relative;
        top: 0;
        left: 0;
        border-radius: var(--br-8xs);
        background-color: var(--color-gainsboro);
        width: 369.16px;
        /* height: 1040px; */
        /* background-color: #000;
        padding-bottom: 500px; */
        /* padding-bottom: 150px;
        padding-top: 100px; */
        }
        .frame-child22,
        .group-child37 {
        border-radius: var(--br-8xs);
        width: 295px;
        height: 392px;
        padding-left: 3px;
        /* padding-top: 25px; */
        /* padding-bottom: 25px; */
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
        top: 10px;
        left: 35px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        text-align: center;
        gap: var(--gap-base);
        /* background-color: #000;
        height: 5000px;
        padding-bottom: 1500px; */
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
        .asal_daerah{
          position: relative;
          display: inline-block;
          width: 300px;
          height: 65px;
          flex-shrink: 0;
        }
        .persentase{
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
        .rectangle-parent-putras{
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          justify-content: flex-start;
          text-align: center;
          gap: var(--gap-base);
        }
        @media (max-width: 1441px){
            .rectangle-parent24 {
                width: 1441px;
            }

            .vote-desktop1{
                width: 1441px;
            }
        }
        /* @media (max-width: 439px){
            .rectangle-parent24 {
                height: 2840px;
            }

            .vote-desktop1{
                height: 2840px;
            }
        } */

        .container {
          max-width: 1200px;
          width: 95%;
          position: absolute;
          /* left: 50px; */
          align-items: center;
          place-items: center;
          text-align: center;
          left: 49.7%;
          transform: translate(-50%, -50%);
          /* margin-left: 20%;
          margin-right: 20%; */
          top: 1690px;
        }

        .container-2 {
          max-width: 1200px;
          width: 95%;
          position: absolute;
          /* left: 50px; */
          align-items: center;
          place-items: center;
          text-align: center;
          left: 49.7%;
          transform: translate(-50%, -50%);
          /* margin-left: 20%;
          margin-right: 20%; */
          top: 2360px;
        }

        .container-image {
          background-color: var(--color-gainsboro);
          width: 300px;
          height: 400px;
          padding-left: 20px;
          padding-right: 20px;
          padding-bottom: 20px;
          padding-top: 20px;
          border-radius: var(--br-8xs);
        }
        .slider-wrapper {
          position: relative;
        }
        .slider-wrapper .slide-button {
          position: absolute;
          top: 50%;
          outline: none;
          border: none;
          height: 50px;
          width: 50px;
          z-index: 5;
          color: #fff;
          display: flex;
          cursor: pointer;
          font-size: 2.2rem;
          background: #000;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          transform: translateY(-50%);
        }
        .slider-wrapper .slide-button:hover {
          background: #404040;
        }
        .slider-wrapper .slide-button#prev-slide {
          left: -25px;
          display: none;
        }
        .slider-wrapper .slide-button#next-slide {
          right: -25px;
        }

        .slider-wrapper .slide-button#prev-slide {
          left: -25px;
          display: none;
        }
        .slider-wrapper .slide-button#next-slide {
          right: -25px;
        }
        .slider-wrapper .image-list {
          display: grid;
          grid-template-columns: repeat(17, 1fr);
          gap: 49px;
          font-size: 0;
          list-style: none;
          margin-bottom: 30px;
          overflow-x: auto;
          scrollbar-width: none;
        }
        .slider-wrapper .image-list::-webkit-scrollbar {
          display: none;
        }
        .slider-wrapper .image-list .image-item {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: var(--br-8xs);
        }
        
        /* Batas */
        .slider-wrapper-2 {
          position: relative;
        }
        .slider-wrapper-2 .slide-button-2 {
          position: absolute;
          top: 50%;
          outline: none;
          border: none;
          height: 50px;
          width: 50px;
          z-index: 5;
          color: #fff;
          display: flex;
          cursor: pointer;
          font-size: 2.2rem;
          background: #000;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          transform: translateY(-50%);
        }
        .slider-wrapper-2 .slide-button-2:hover {
          background: #404040;
        }
        .slider-wrapper-2 .slide-button-2#prev-slide-2 {
          left: -25px;
          display: none;
        }
        .slider-wrapper-2 .slide-button-2#next-slide-2 {
          right: -25px;
        }

        .slider-wrapper-2 .slide-button-2#prev-slide-2 {
          left: -25px;
          display: none;
        }
        .slider-wrapper-2 .slide-button-2#next-slide-2 {
          right: -25px;
        }
        .slider-wrapper-2 .image-list-2 {
          display: grid;
          grid-template-columns: repeat(17, 1fr);
          gap: 49px;
          font-size: 0;
          list-style: none;
          margin-bottom: 30px;
          overflow-x: auto;
          scrollbar-width: none;
        }
        .slider-wrapper-2 .image-list-2::-webkit-scrollbar {
          display: none;
        }
        .slider-wrapper-2 .image-list-2 .image-item-2 {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: var(--br-8xs);
        }

        .container .slider-scrollbar .container-2 .slider-scrollbar-2 {
          /* position: absolute; */
          height: 10px;
          width: 100%;
          display: flex;
          align-items: center;
          /* top: 1000px; */
        }
        .slider-scrollbar .scrollbar-track .slider-scrollbar-2 .scrollbar-track-2{
          /* background: #ccc; */
          width: 100%;
          height: 2px;
          display: flex;
          align-items: center;
          border-radius: 4px;
          position: relative;
        }
        .slider-scrollbar:hover .scrollbar-track .slider-scrollbar-2:hover .scrollbar-track-2 {
          height: 4px;
        }
        .slider-scrollbar .scrollbar-thumb {
          position: absolute;
          /* background: #000; */
          top: 0;
          bottom: 0;
          width: 50%;
          height: 100%;
          cursor: grab;
          border-radius: inherit;
        }
        .slider-scrollbar .scrollbar-thumb:active {
          cursor: grabbing;
          height: 8px;
          top: -2px;
        }
        .slider-scrollbar .scrollbar-thumb::after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          top: -10px;
          bottom: -10px;
        }

        /* Batas */
        .slider-scrollbar-2 .scrollbar-thumb-2 {
          position: absolute;
          /* background: #000; */
          top: 0;
          bottom: 0;
          width: 50%;
          height: 100%;
          cursor: grab;
          border-radius: inherit;
        }
        .slider-scrollbar-2 .scrollbar-thumb-2:active {
          cursor: grabbing;
          height: 8px;
          top: -2px;
        }
        .slider-scrollbar-2 .scrollbar-thumb-2::after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          top: -10px;
          bottom: -10px;
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
      <div class="putra4">Putra</div>
      <div class="putri4">Putri</div>
      {{-- <div class="slider-1" id="rectangle_putras">
        <div class="paslon-putras-containers" id="rectangle_putras"></div>
      </div>
      <div class="slider-2" id="rectangle_putris">
        <div class="paslon-putris-containers" id="rectangle_putris"></div>
      </div> --}}

      <div class="container">
        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
          </button>
          <ul class="image-list" id="rectangle_putras">
          </ul>
          <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
          </button>
        </div>
        <div class="slider-scrollbar">
          <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
          </div>
        </div>
      </div>

      <div class="container-2">
        <div class="slider-wrapper-2">
          <button id="prev-slide-2" class="slide-button-2 material-symbols-rounded">
          chevron_left
          </button>
          <ul class="image-list-2" id="rectangle_putris">
          </ul>
          <button id="next-slide-2" class="slide-button-2 material-symbols-rounded">
          chevron_right
          </button>
        </div>
        <div class="slider-scrollbar-2">
          <div class="scrollbar-track-2">
            <div class="scrollbar-thumb-2"></div>
          </div>
        </div>
      </div>

      {{-- <div class="rectangle-parent28">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              id=""
            />

            <div class="ahmad-yani" id="name_"+i></div>
          </div>
        </div> --}}
      {{-- <div class="rectangle-parent30" id="rectangle_p"></div> --}}
      {{-- <div class="slider-1" id="rectangle_p">
        <div class="rectangle-parent26" id="groupContainer3">
          <div class="group-child36"></div>
          <div class="group-child37"></div>
          <div class="rectangle-parent27">
            <img
              class="frame-child22"
              alt=""
              src="rectangle-2902@2x.png"
            />

            <div class="ahmad-yani">{{getDataPaslonPutras()}}</div>
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
      <div class="putri4">Putri</div>--}}
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

      $.ajax({
        type: "GET",
        url: "https://officialputraputrisriwijaya23.online/api/paslon_putras",
        data: {},
        success:function(result){
          var datas = result;
          // document.getElementById('test123').textContent = datas[0]['name'];
          var outputHTML = "";
          for (let i = 0; i < datas.length; i++){
            outputHTML += '<div class="container-image" id="groupContainer3">';
            outputHTML += '<img class="image-item" id="groupContainer3" src="'+datas[i]['path']+'" alt="img-"'+(i+1)+'/>';
            outputHTML += '</div>';
          }
          // console.log(outputHTML);
          document.getElementById("rectangle_putras").innerHTML = outputHTML;
        }
      });

      $.ajax({
        type: "GET",
        url: "https://officialputraputrisriwijaya23.online/api/paslon_putris",
        data: {},
        success:function(result){
          var datas = result;
          // document.getElementById('test123').textContent = datas[0]['name'];
          var outputHTML = "";
          for (let i = 0; i < datas.length; i++){
            outputHTML += '<div class="container-image" id="groupContainer3">';
            outputHTML += '<img class="image-item-2" id="groupContainer3" src="'+datas[i]['path']+'" alt="img-"'+(i+1)+'/>';
            outputHTML += '</div>';
          }
          // console.log(outputHTML);
          document.getElementById("rectangle_putris").innerHTML = outputHTML;
        }
      });

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

      const initSlider = () => {
          const imageList = document.querySelector(".slider-wrapper .image-list");
          const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
          const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
          const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
          
          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
              
              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
                  
                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageList.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageList.clientWidth * direction;
                  imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageList.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageList.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }
      window.addEventListener("resize", initSlider);
      window.addEventListener("load", initSlider);

      const initSlider_2 = () => {
          const imageList = document.querySelector(".slider-wrapper-2 .image-list-2");
          const slideButtons = document.querySelectorAll(".slider-wrapper-2 .slide-button-2");
          const sliderScrollbar = document.querySelector(".container-2 .slider-scrollbar-2");
          const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb-2");
          const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
          
          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
              
              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
                  
                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageList.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide-2" ? -1 : 1;
                  const scrollAmount = imageList.clientWidth * direction;
                  imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageList.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageList.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }
      window.addEventListener("resize", initSlider_2);
      window.addEventListener("load", initSlider_2);
      </script>
  </body>
</html>