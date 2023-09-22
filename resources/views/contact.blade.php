<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./contact-desktop.css" />
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

        .logo-ypps-1-1-29 {
        position: absolute;
        top: 22px;
        left: 39px;
        width: 71px;
        height: 71px;
        object-fit: cover;
        }
        .putra-putri13 {
        margin-block-start: 0;
        margin-block-end: 1px;
        }
        .sriwijaya10 {
        margin: 0;
        }
        .putra-putri-sriwijaya-container9 {
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
        .contact-us1 {
        position: absolute;
        top: 196px;
        left: calc(50% - 417px);
        font-size: var(--font-size-37xl);
        display: inline-block;
        width: 834px;
        height: 85px;
        }
        .contact-desktop-child {
        position: absolute;
        top: 339px;
        left: calc(50% - 596px);
        border-radius: var(--br-xl);
        background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
        width: 1192px;
        height: 635px;
        }
        .get-in-touch1,
        .have-some-big1 {
        position: relative;
        }
        .have-some-big1 {
        font-size: var(--font-size-xl);
        font-family: var(--font-alata);
        color: var(--color-burlywood-500);
        text-align: justify;
        display: inline-block;
        width: 499px;
        }
        .get-in-touch-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        }
        .pps23gmailcom1 {
        position: relative;
        font-size: var(--font-size-base);
        font-family: var(--font-alata);
        color: var(--color-burlywood-600);
        }
        .email-container,
        .socials1 {
        font-size: var(--font-size-13xl);
        }
        .email-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-10xs);
        }
        .socials1 {
        position: relative;
        font-family: var(--font-abril-fatface);
        }
        .email4,
        .instagram1,
        .website1 {
        position: relative;
        text-decoration: underline;
        color: var(--color-burlywood-300);
        }
        .email4,
        .website1 {
        color: var(--color-burlywood-100);
        }
        .email4 {
        color: var(--color-burlywood-400);
        }
        .frame-parent5,
        .socials-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        }
        .socials-group {
        gap: 11px;
        font-size: var(--font-size-base);
        font-family: var(--font-alata);
        }
        .frame-parent5 {
        gap: 53px;
        }
        .frame-child34 {
        position: relative;
        border-radius: var(--br-8xs);
        background-color: var(--color-whitesmoke);
        width: 497px;
        height: 46px;
        }
        .name-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-mini);
        }
        .frame-child36 {
        position: relative;
        border-radius: var(--br-8xs);
        background-color: var(--color-whitesmoke);
        width: 499px;
        height: 165px;
        }
        .submit1 {
        position: absolute;
        top: 13px;
        left: 216px;
        }
        .submit-container {
        position: relative;
        border-radius: var(--br-8xs);
        background-color: var(--color-burlywood-200);
        width: 499px;
        height: 54px;
        text-align: center;
        font-size: var(--font-size-xl);
        }
        .frame-parent6 {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: flex-start;
        gap: 24px;
        font-size: var(--font-size-sm);
        font-family: var(--font-alata);
        }
        .frame-parent4 {
        position: absolute;
        top: 407px;
        left: calc(50% - 538px);
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 78px;
        text-align: left;
        font-size: var(--font-size-45xl);
        }
        .group-child62 {
        position: absolute;
        top: 0;
        left: 0;
        background-color: var(--color-maroon);
        width: 1440px;
        height: 156px;
        }
        .feline-lab9 {
        text-decoration: underline;
        }
        .copyright-2023-container9 {
        position: absolute;
        top: 78px;
        left: calc(50% - 525px);
        font-weight: 600;
        display: inline-block;
        width: 1044px;
        height: 23.94px;
        }
        .rectangle-parent52 {
        position: absolute;
        top: 1179px;
        left: 0;
        width: 1440px;
        height: 156px;
        font-family: var(--font-montserrat);
        }
        .home3 {
        width: 65px;
        cursor: pointer;
        }
        .about3,
        .contact3,
        .home3,
        .vouchers3 {
        position: relative;
        display: inline-block;
        height: 33px;
        flex-shrink: 0;
        }
        .about3 {
        width: 72px;
        cursor: pointer;
        }
        .contact3,
        .vouchers3 {
        width: 89px;
        }
        .vouchers3 {
        width: 101px;
        cursor: pointer;
        }
        .group-child63,
        .vote5 {
        position: absolute;
        top: 0;
        }
        .group-child63 {
        left: 0;
        border-radius: var(--br-8xs);
        background-color: var(--color-maroon);
        width: 110px;
        height: 35px;
        }
        .vote5 {
        left: 30px;
        display: inline-block;
        width: 51px;
        height: 33px;
        }
        .rectangle-parent53 {
        position: relative;
        width: 110px;
        height: 35px;
        cursor: pointer;
        }
        .home-parent1 {
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
        .contact-desktop {
        position: relative;
        background: linear-gradient(
            180deg,
            #9b2a06 14.06%,
            #b05f5f 63.54%,
            #ddcaca 94.79%
        );
        width: 100%;
        height: 1335px;
        overflow: hidden;
        text-align: center;
        font-size: var(--font-size-5xl);
        color: var(--color-white);
        font-family: var(--font-abril-fatface);
        }
    </style>
  </head>
  <body>
    <div class="contact-desktop">
      <img
        class="logo-ypps-1-1-29"
        alt=""
        src="logo-ypps-1-1-2@2x.png"
      />

      <div class="putra-putri-sriwijaya-container9">
        <p class="putra-putri13">PUTRA PUTRI</p>
        <p class="sriwijaya10">SRIWIJAYA</p>
      </div>
      <div class="contact-us1">Contact Us</div>
      <div class="contact-desktop-child"></div>
      <div class="frame-parent4">
        <div class="frame-parent5">
          <div class="get-in-touch-group">
            <div class="get-in-touch1">Get in touch</div>
            <div class="have-some-big1">
              Have some big idea or brand to develop and need collaboration?
              Then reach out we'd love to hear about your project and provide
              help
            </div>
          </div>
          <div class="email-container">
            <div class="get-in-touch1">Email</div>
            <div class="pps23gmailcom1">pps23@gmail.com</div>
          </div>
          <div class="socials-group">
            <div class="socials1">Socials</div>
            <div class="instagram1">Instagram</div>
            <div class="website1">website</div>
            <div class="email4">email</div>
          </div>
        </div>
        <div class="frame-parent6">
          <div class="name-group">
            <div class="get-in-touch1">Name</div>
            <div class="frame-child34"></div>
          </div>
          <div class="name-group">
            <div class="get-in-touch1">Email</div>
            <div class="frame-child34"></div>
          </div>
          <div class="name-group">
            <div class="get-in-touch1">Message</div>
            <div class="frame-child36"></div>
          </div>
          <div class="submit-container">
            <div class="submit1">Submit</div>
          </div>
        </div>
      </div>
      <div class="rectangle-parent52">
        <div class="group-child62"></div>
        <div class="copyright-2023-container9">
          Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
          <span class="feline-lab9">Feline Lab.</span>
        </div>
      </div>
      <div class="home-parent1">
        <div class="home3" id="homeText">Home</div>
        <div class="about3" id="aboutText">About</div>
        <div class="contact3">Contact</div>
        <div class="vouchers3" id="vouchersText">Vouchers</div>
        <div class="rectangle-parent53" id="groupContainer1">
          <div class="group-child63"></div>
          <div class="vote5">Vote</div>
        </div>
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
      
      var vouchersText = document.getElementById("vouchersText");
      if (vouchersText) {
        vouchersText.addEventListener("click", function (e) {
          window.location.href = "./vouchers";
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
