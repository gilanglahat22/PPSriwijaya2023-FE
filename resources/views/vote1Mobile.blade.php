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

        .popup-overlay {
          display: flex;
          /* flex-direction: column; */
          position: fixed;
          inset: 0;
          /* width: 100%;
          height: 100%; */
          align-items: center;
          place-items: center;
          text-align: center;
          left: 100px;
          top: 25%;
          /* left: 100px;
          /* top: calc(50%-100px);
          left: calc(50%-100px); */
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

        body {
            margin: 0;
            width: 100%;
            height: 100%;
            line-height: normal;
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
        left: 0;
        margin-left: 2%;
        border-radius: var(--br-xl);
        background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
        width: 96%;
        height: 652px;
        }
        .nama12 {
        position: relative;
        left: -50%;
        background-color: #000;
        }
        .nama-parent1,
        .nama-parent2 {
        position: absolute;
        top: 330px;
        left: 507px;
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
        top: 709.91px;
        left: 3%;
        font-size: 190%;
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
        position: relative;
        /* display: inline-block; */
        top: 937px;
        margin-left: 10%;
        margin-right: 10%;
        /* left: 0; */
        border-radius: var(--br-xl);
        background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
        width: 80%;
        height: 130px;
        justify-items: center;
        justify-items: center;
        align-items: center;
        justify-content: center;
        text-align: center;
        }
        .vote-desktop-child1 {
        top: 1010px;
        left: 0%;
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
        z-index: 1000;
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
        /* position: absolute;
        top: 0;
        left: 0;
        background-color: var(--color-maroon);
        width: 100%;
        height: 156px;
        text-align: center; */
        position: absolute;
        top: 0px;
        left: 0px;
        background-color: var(--color-maroon);
        width: 100%;
        height: 50px;
        text-align: center;
        align-items: center;
        justify-content: center;
        }
      rectangle-parent24  .feline-lab7 {
        text-decoration: underline;
        }
        .copyright-2023-container7 {
        /* position: absolute;
        top: 78px;
        left: calc(50% - 525px);
        font-weight: 600;
        display: inline-block;
        width: 1044px;
        height: 23.94px;
        text-align: center; */
        position: absolute;
        top: 17px;
        left: 0;
        font-weight: 600;
        display: inline-block;
        /* background-color: var(--color-maroon); */
        font-size: 50%;
        width: 100%;
        /* height: 23.94px; */
        text-align: center;
        align-items: center;
        justify-content: center;
        }
        .rectangle-parent24 {
        position: absolute;
        top: 2940px;
        left: 0;
        width: 100%;
        font-family: var(--font-montserrat);
        color: #fff;
        text-align: center;
        align-items: center;
        justify-content: center;
        /* background-color: var(--color-maroon); */
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
        /* align-items: flex-start;
        justify-content: flex-start; */
        gap: var(--gap-smi);
        }
        .group-child36,
        .line-container {
        position: absolute;
        top: 315px;
        left: 6%;
        margin-left: 17%;
        width: 70%;
        height: 401px;
        /* background-color: #000; */
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
        top: 1432px;
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
        top: 2200px;
        left: calc(50% - 195px);
        font-size: var(--font-size-37xl);
        color: var(--color-burlywood-200);
        width: 390px;
        height: 65px;
        }
        .d20h20m1,
        .div11 {
        top: 38px;
        position: relative;
        align-items: center;
        text-align: center;
        left: 0%;
        font-size: 150%;
        margin-left: 0%;
        /* width: 478px; */
        height: 84px;
        }
        .div11 {
        position: relative;
        left: -9%;
        width: 219px;
        }
        .gain-up-11 {
          position: relative;
          top: -45.8px;
          left: 52%;
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
        height: 2940px;
        overflow: hidden;
        text-align: center;
        font-size: var(--font-size-5xl);
        color: var(--color-white);
        font-family: var(--font-abril-fatface);
        }
        .pop-up-kode-inner {
        position: absolute;
        /* top: 0;
        left: 0; */
        border-radius: var(--br-3xs);
        background: linear-gradient(180deg, #b22424, #340202);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) inset;
        width: 1249px;
        height: 838px;
        align-items: center;
        text-align: center;
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
        width: 124px;
        height: 124px;
        text-align: center;
        align-items: center;
        justify-items: center;
        font-size: 58px;
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
        width: 100%;
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
        .button-redirect{
          display: flex;
          flex-direction: column;
          gap: 15px;
        }
        .group-child28 {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-37xl-5);
        background-color: #EEE8AA;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) inset;
        width: 290px;
        height: 68px;
        }
        .group-child29{
          position: absolute;
          top: 0;
          left: 0;
          border-radius: var(--br-37xl-5);
          background-color: white;
          box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) inset;
          width: 290px;
          height: 68px;
        }
        .kirim1 {
        position: absolute;
        top: 0px;
        left: 0px;
        display: inline-block;
        width: 100%;
        height: 100%;
        text-decoration: none;
        color:rgba(0, 0, 0, 0.25);
        border-radius: var(--br-37xl-5);
        background-color: #EEE8AA;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) inset;
        }
        .kirim1:hover{
          color: black;
        }
        .rectangle-parent18 {
        position: absolute;
        top: 638px;
        left: 664px;
        width: 290px;
        height: 68px;
        color: #EEE8AA;
        }
        .rectangle-parent19{
          position: absolute;
          top: 638px;
          left: 300px;
          width: 290px;
          height: 68px;
          color: black;
        }
        .pop-up-kode1 {
        position: absolute;
        width: 1249px;
        height: 838px;
        max-width: 100%;
        max-height: 100%;
        overflow: auto;
        text-align: center;
        font-size: var(--font-size-17xl);
        color: var(--color-white);
        font-family: var(--font-alata);
        }
        /* .rectangle-parent-putras{
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          justify-content: flex-start;
          text-align: center;
          gap: var(--gap-base);
        } */

        .container {
          position: absolute;
          align-items: center;
          place-items: center;
          text-align: center;
          top: 1197px;
        }

        .container-2 {
          position: absolute;
          /* left: 50px; */
          align-items: center;
          place-items: center;
          text-align: center;
          /* margin-left: 20%;
          margin-right: 20%; */
          top: 1230px;
          border-radius: 1rem;
        }

        .container-image {
          position: relative;
          background-color: var(--color-gainsboro);
          width: 300px;
          height: 400px;
          padding-left: 20px;
          padding-right: 20px;
          padding-bottom: 20px;
          /* z-index: -1000; */
          padding-top: 20px;
          border-radius: var(--br-8xs);
        }
        .image_name {
          position: absolute;
          z-index: 9000;
          color: #000;
        }
        .container-image:hover{
          background-color: gray;
        }
        .image-item:hover{
          background-color:rgba(0, 0, 0, 0.25)
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
        /* @media (max-width: 1441px){
            .rectangle-parent24 {
                width: 1441px;
            }

            .vote-desktop1{
                width: 1441px;
            }
        } */
        /* @media (max-width: 439px){
            .rectangle-parent24 {
                top: 3100px;
            }

            .vote-desktop1{
                height: 3100px;
            }
        } */
        @media(max-width: 342px){
            .vote-desktop1 {
                width: 342px;
            }
            
            .rectangle-parent24 {
                width: 342px;
            }
        }
        .btn{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          background-color: #555;
          color: white;
          font-size: 16px;
          padding: 12px 24px;
          border: none;
          cursor: pointer;
          border-radius: 5px;
        }
        .btn:hover{
          background-color: #000;
        }

        h1,
h2,
h3,
h4,
p,
figure,
blockquote,
dl,
dd {
  margin: 0;
  color: var(--color-burlywood-200);
}

/* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
ul[role=list],
ol[role=list] {
  list-style: none;
}

/* Set core root defaults */
html:focus-within {
  scroll-behavior: smooth;
}

/* Set core body defaults */
body {
  min-height: 100vh;
  text-rendering: optimizeSpeed;
  line-height: 1.5;
  background-color: beige;
}

/* A elements that don't have a class get default styles */
a:not([class]) {
  -webkit-text-decoration-skip: ink;
          text-decoration-skip-ink: auto;
}

/* Make images easier to work with */
img,
picture {
  max-width: 100%;
  display: block;
}

/* Inherit fonts for inputs and buttons */
input,
button,
textarea,
select {
  font: inherit;
}

/* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
@media (prefers-reduced-motion: reduce) {
  html:focus-within {
    scroll-behavior: auto;
  }
  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 600;
  color: black;
}

h5,
h6 {
  font-weight: 400;
  color: black;
}

.container {
  position: relative;
  width: 320px;
  margin-inline: auto;
  padding-block: 3rem;
  align-items: center;
}

.container-2 {
  /* width: 86%;
  position: relative;
  margin-inline: auto;
  padding-block: 2rem; */
  /* align-items: center; */
  /* left: 12.4%; */
  /* border-radius: 1rem; */
  position: relative;
  width: 320px;
  margin-inline: auto;
  padding-block: 3em;
}

p {
  font-size: 1.125rem;
  margin-bottom: 1.2rem;
  line-height: 2em;
}

article.sample-col-para {
  margin-inline: auto;
  -moz-column-width: 350px;
       column-width: 350px;
  -moz-column-gap: 2rem;
       column-gap: 2rem;
  -moz-column-rule: 1px solid #5b5b5d;
       column-rule: 1px solid #5b5b5d;
}
article.sample-col-para h1 {
  font-size: 56px;
  margin-bottom: 1rem;
  line-height: 1.2em;
}
article.sample-col-para h3 {
  opacity: 0.7;
  margin-bottom: 1rem;
}
article.sample-col-para img {
  width: 200px;
  height: 200px;
  float: right;
  margin-left: 1.2rem;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
  shape-outside: circle();
  border: 5px solid rgb(164, 67, 31);
}

.mb-5 {
  margin-bottom: 5rem;
}

.mt-5 {
  margin-top: 5rem;
}

.marquee-wrapper {
  position: relative;
  display: flex;
  overflow: hidden;
  gap: 1rem;
  border-radius: 1rem;
}
.marquee-wrapper .marquee-content {
  position: relative;
  display: flex;
  align-items: center;
  flex-shrink: 0;
  gap: 1rem;
  cursor: grab;
}
.marquee-wrapper .marquee-content .card-testimonial {
  max-width: 400px;
  background-color: var(--color-gainsboro);
  padding: 1rem;
  border-radius: 1rem;
  color: #f5f5f5;
}
.marquee-wrapper .marquee-content .card-testimonial article picture {
  position: relative;
  min-width: 200px;
}
.marquee-wrapper .marquee-content .card-testimonial article picture img {
  width: 100%;
  height: 340px;
  border-radius: 0.5rem;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: 50% 15%;
     object-position: 50% 15%;
}
.marquee-wrapper .marquee-content .card-testimonial article h4 {
  font-size: 20px;
  text-transform: capitalize;
  margin-block: 1rem;
}
.marquee-wrapper .marquee-content .card-testimonial article article.short-description p {
  font-family: var(--ff-heading);
  font-size: 14px;
  font-weight: 300;
  line-height: 20px;
  margin-bottom: 1.2rem;
}

/* .marquee-wrapper{
  width: 100vw;
} */

article{
  width: 289px;
}

.messageStyle{
  color: #000;
}

.card-testimonial {
  margin-top: 45px;
}
@media (max-width: 1024px) {
  .marquee-wrapper {
    overflow: auto;
  }
}

@keyframes scroll {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(calc(-100% - 1rem));
  }
}
/* .body {
  width: 100%;
  max-width: 960px;
  margin: 0 auto;
} */

@media (max-width: 768px) {
  .body {
    max-width: 720px;
  }
}

@media (max-width: 576px) {
  .body {
    max-width: 540px;
  }
}

.close-button {
  position: absolute;
  top: 7px;
  left: 45px;
  display: inline-block;
  width: 199px;
  height: 33px;
  text-decoration: none;
  color:rgba(0, 0, 0, 0.25);
}

.close-button:hover{
  color: red;
}

/* @media (max-width: 450px){
  body{
    scale: 1;
  }

  .copyright-2023-container7{
    font-size: 26px;
  }

} */
/*# sourceMappingURL=styles.css.map */
    </style>
  </head>
  <body>
      <div class="vote-desktop1" id="all_contents">
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
        <div class="nama-parent1" id="name_putras"></div>
        <div class="nama-parent2" id="name_putris"></div>
        <div class="putri3">Putri</div>
        <div class="putra3">Putra</div>
        <div class="vote-desktop-inner">
        <div class="d20h20m1">---</div>
        </div>
        <div class="vote-desktop-child1">
        <div class="div11">10</div>
        <img class="gain-up-11" alt="" src="gain-up-1@2x.png" />
        </div>
        <div class="home-group">
          <div class="home1" id="homeText" href="./home">Home</div>
          <div class="about1" id="aboutText" href="./about">About</div>
          <div class="contact1" id="contactText" href="./contact">Contact</div>
          <div class="vouchers1" id="vouchersText" href="./vouchers">Vouchers</div>
          <div class="rectangle-parent23" href="./votes">
            <div class="group-child33"></div>
            <div class="vote2">Vote</div>
          </div>
        </div>

      <div class="slider-wrapper">  
        <section class="container">
          <div class="marquee-wrapper" style="user-select: none;">
              <div class="marquee-content scrollingX" id="rectangle_putras"></div>
          </div>
        </section>
      </div>

      <div class="slider-wrapper-2">  
        <section class="container-2">
          <div class="marquee-wrapper" style="user-select: none;">
              <div class="marquee-content scrollingX" id="rectangle_putris"></div>
          </div>
        </section>
      </div>

        <div class="line-container">
          <div class="group-child35"></div>
          <div class="rectangle-parent25" id="rectangle_putri_statistics"></div>
          <div class="vector-parent" id="rectangle_putra_statistics"></div>
        </div>
        <div class="putra4">Putra</div>
        <div class="putri4">Putri</div>
      </div>

      <div class="rectangle-parent24">
          <div class="group-child34"></div>
          <div class="copyright-2023-container7">
              Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
              <span class="feline-lab7">Feline Lab.</span>
          </div>
      </div>
    <div id="keyP"></div>
    <script>
      var tempId = 1, tempName = "",tempCount = 0, tempPath="",tempPersentase=0.0,tempAsalDaerah="",tempHTML = "";
      var isFinished1 = false,isFinished2=false,isFinished3=false,isFinished4=false,isBerhasil=false,messageVote="",nominal=0;
      var kodeVoucher="",nominal=0,idVoucher=0;
      const URLAPI = "https://officialputraputrisriwijaya23.online";

      async function isBerhasilProses1() {
        // Create a new Promise object.
        var tempRet = new Promise(function(resolve, reject) {
          // Make an AJAX request to the API.
          $.ajax({
            type: "GET",
            url: URLAPI + "/api/vouchers",
            data: {},
            success: function(datas) {
              // Iterate over the voucher data.
              for (let i = 1; i <= 7; i++) {
                kodeVoucher += document.getElementById("input" + i).value;
              }
              var tempFlag = false;
              for (let i = 0; i < datas.length; i++) {
                // If the voucher code matches a voucher in the data,
                // resolve the Promise with `true`.
                if (kodeVoucher === datas[i]["kode_voucher"]) {
                  console.log(datas[i]["nominal"]);
                  console.log(datas[i]['kode_voucher']);
                  console.log(datas[i]['id']);
                  nominal = datas[i]["nominal"];
                  idVoucher = datas[i]["id"];
                  tempCount += Number(nominal);
                  console.log("Debug di atas");
                  tempFlag = true;
                  break;
                }
              }
              if(tempFlag){
                resolve(true)
              }else{
                resolve(false);
              }
            },
            error: function(datas) {
              resolve(false);
            }
          });
        });

        // Wait for the Promise to resolve and return the result.
        return await tempRet;
      }

      async function isBerhasilProses2(kelamin){
        var ret = await isBerhasilProses1();
        if(ret){
          alert("Voucher berhasil dimasukkan, Selamat! "+tempName+" telah mendapatkan "+nominal+" baru.");
          location.reload();
          let tempVal = new Promise(function(resolve,reject){
            $.ajax({
              type: 'PUT',
              url: URLAPI+'/api/'+kelamin+'/'+tempId+'?count_vote=' + tempCount,
              dataType: 'json',
              success: function (response) {
                resolve(true);
              },
              error: function (response) {
                resolve(false);
              }
            });
          });
        }
        return await ret;
      }

      async function isBerhasilProses3(kelamin){
        var ret = await isBerhasilProses2(kelamin);
        if(ret){
          let tempVal = new Promise(function(resolve,reject){
            $.ajax({
              type: 'DELETE', 
              url: URLAPI+'/api/vouchers/'+idVoucher,
              dataType: 'json',
              success: function (response) {
                resolve(true);
              },
              error: function (response) {
                resolve(false);
              }
            });
          });
        }
        return await ret;
      }

      async function isBerhasilProses4(kelamin){
        var ret = await isBerhasilProses3(kelamin);
        if(ret){
          let tempVal = new Promise(function(resolve,reject){
            $.ajax({
              type: 'POST', 
              url: URLAPI+'/api/voucher_archives?kode_voucher=' + kodeVoucher+'&nominal='+nominal,
              dataType: 'json',
              success: function (response) {
                resolve(true);
              },
              error: function (response) {
                resolve(false);
              }
            });
          });
          tempVal = await tempVal;
          if(tempVal){
            alert("Voucher berhasil dimasukkan, Selamat! "+tempName+" telah mendapatkan "+nominal+" baru.");
            location.reload();
          }else{
            alert("Kode Voucher Tidak Valid");
            location.reload();
          }
        }else{
          alert("Kode Voucher Tidak Valid");
          location.reload();
        }
        return await ret;
      }

      function submitForm(kelamin) {
        var form = document.getElementById('popUpKode');

        if (form) {
          form.addEventListener('submit', function (e) {
            e.preventDefault();
            isBerhasilProses4(kelamin);
          });
        }
      }

      function toggleElementVisibility(id,name,countVote,path,persentase,asalDaerah,kelamin) {
          tempId = id,tempName=name,tempCount=Number(countVote),tempPath=path,tempPersentase=persentase,tempAsalDaerah=asalDaerah;
          tempHTML = '<form id="popUpKode" class="popup-overlay" style="display: none">';
          tempHTML += '<div class="pop-up-kode1">';
          tempHTML += '<div class="pop-up-kode-inner"></div>';
          tempHTML += '<div class="masukkan-kode-voucher1">Masukkan Kode Voucher dibawah ini</div>';
          tempHTML += '<div class="rectangle-parent17">';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input1"></input>';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input2"></input>';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input3"></input>';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input4"></input>';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input5"></input>';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input6"></input>';
          tempHTML += '<input class="frame-child9" maxLength="1" id="input7"></input>';
          tempHTML += '</div>';
          tempHTML += '<div class="messageStyle" id="messageVote"></div>';
          tempHTML += '<div class="pop-up-kode-child1"></div>';
          tempHTML += '<div class="vote-mustofa1">VOTE - '+name+'</div>';
          tempHTML += '<div class="belum-punya-kode-container1">';
          tempHTML += '<p class="belum-punya-kode1">Belum punya kode voucher?</p>';
          tempHTML += '<a class="ikuti-tata-cara1" href="./vouchers">Ikuti tata cara pembelian</a>';
          tempHTML += '</div>';
          tempHTML += '<div class="button-redirect">';
          tempHTML += '<div type="button" class="rectangle-parent19" onclick="closeForm()">';
          tempHTML += '<div class="group-child29"></div>';
          tempHTML += '<a class="close-button">Kembali</a>';
          tempHTML += '</div>';
          tempHTML += '</div>';
          tempHTML += '<div class="rectangle-parent18">';
          tempHTML += '<div class="group-child28"></div>';
          tempHTML += '<button class="kirim1"  onclick="submitForm(\'' + kelamin + '\')" type="submit">Kirim</button>';
          tempHTML += '</div>';
          tempHTML += '</div>';
          tempHTML += '</div>';
          tempHTML += '</form>';
          document.getElementById("keyP").innerHTML = tempHTML;
          const elementToToggle = document.getElementById("popUpKode");
          const allElements = document.getElementById("all_contents");
          const currentDisplayStyle = window.getComputedStyle(elementToToggle).display;  
          
          if (currentDisplayStyle === "none") {
              // document.getElementById("image_item").disabled = true;
              elementToToggle.style.display = "block"; // Show the element
              allElements.style.filter = "blur(3px)";
            } else {
              elementToToggle.style.display = "none"; // Hide the element
              allElements.style.filter = "blur(0px)";
            }
        }

      function closeForm(){
          location.reload();
      }

      function insertContainerImages(idPriaOrWanita, statisticId, nameId, kelamin) {
        $.ajax({
          type: "GET",
          url: URLAPI+'/api/'+kelamin,
          data: {},
          success:function(result){
            var datas = result;
            var outputHTML = "";
            var outputNamaHTML = "";
            for (let i = 0; i < datas.length; i++){
              outputHTML += '<div class="card-testimonial">';
              outputHTML += '<article>';
              outputHTML += '<picture>';
              outputHTML += '<source media="(min-width: 718px)" srcset="'+datas[i]['path']+'">';
              outputHTML += '<img onclick="toggleElementVisibility(\'' + datas[i]['id'] + '\', \'' + datas[i]['name'] + '\',\'' + datas[i]['count_vote'] + '\', \'' + datas[i]['path'] + '\', \'' + datas[i]['persentase'] + '\', \'' + datas[i]['asal_daerah'] + '\', \'' + kelamin + '\')" src="'+datas[i]['path']+'" alt="sample-one.jpeg">';
              outputHTML += '</picture>';
              outputHTML += '<h4 style="font-family: var(--font-montserrat);">'+datas[i]['name']+'</h4>';
              outputHTML += '<article class="short-description">';
              outputHTML += '<h4 style="font-family: var(--font-montserrat);">'+datas[i]['asal_daerah']+'</h4>';
              outputHTML += '<h4 style="font-family: var(--font-montserrat);">'+datas[i]['persentase'].toFixed(2)+' %'+'</h4>';
              outputHTML += '</article></article></div>';
            }
      
            document.getElementById(idPriaOrWanita).innerHTML = outputHTML;
            var data1 = datas[0]['persentase'];
            var data2 = datas[1]['persentase'];
            var data3 = datas[2]['persentase'];
            var nameP1 = datas[0]['name'], nameP2 = datas[1]['name'], nameP3 = datas[2]['name'];
            var width1 = 95*data1/100;
            var width2 = 95*data2/100;
            var width3 = 95*data3/100;
            // outputNamaHTML = '<div class="nama12">'+data1.toFixed(2)+'%</div>';
            // outputNamaHTML += '<div class="nama12">'+data2.toFixed(2)+'%</div>';
            // outputNamaHTML += '<div class="nama12">'+data3.toFixed(2)+'%</div>';
            outputHTML = '<div style="position: relative; background-color: var(--color-burlywood-200); width: '+width1+'%; height: 42px;"><div style="position: relative; left: '+(0+10)+'%; width: 340px; font-size: 70%; padding-top: 3px; text-align: left;">'+nameP1+' '+' '+data1.toFixed(2)+'%</div></div>';
            outputHTML += '<div style="position: relative; background-color: var(--color-burlywood-200); width: '+width2+'%; height: 42px;"><div style="position: relative; left: '+(0+10)+'%; width: 340px; font-size: 70%; padding-top: 3px; text-align: left;">'+nameP2+' '+' '+data2.toFixed(2)+'%</div></div>';
            outputHTML += '<div style="position: relative; background-color: var(--color-burlywood-200); width: '+width3+'%; height: 42px;"><div style="position: relative; left: '+(0+10)+'%; width: 340px; font-size: 70%; padding-top: 3px; text-align: left;">'+nameP3+' '+' '+data3.toFixed(2)+'%</div></div>';
            document.getElementById(statisticId).innerHTML = outputHTML;
            document.getElementById(nameId).innerHTML = outputNamaHTML;
          }
        });
      }

      insertContainerImages("rectangle_putras","rectangle_putra_statistics","name_putras","paslon_putras");
      insertContainerImages("rectangle_putris","rectangle_putri_statistics","name_putris","paslon_putris");

      var datas;

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

      </script>
  </body>
</html>