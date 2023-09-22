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
  </head>
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

    .logo-ypps-1-1-26 {
  position: absolute;
  top: 22px;
  left: 39px;
  width: 71px;
  height: 71px;
  object-fit: cover;
}
.putra-putri10 {
  margin-block-start: 0;
  margin-block-end: 1px;
}
.sriwijaya7 {
  margin: 0;
}
.putra-putri-sriwijaya-container6 {
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
.about,
.contact,
.home,
.vouchers {
  position: relative;
  display: inline-block;
  width: 65px;
  height: 33px;
  flex-shrink: 0;
  cursor: pointer;
}
.about,
.contact,
.vouchers {
  width: 72px;
}
.contact,
.vouchers {
  width: 89px;
}
.vouchers {
  width: 101px;
}
.group-child29,
.vote1 {
  position: absolute;
  top: 0;
}
.group-child29 {
  left: 0;
  border-radius: var(--br-8xs);
  background-color: var(--color-maroon);
  width: 110px;
  height: 35px;
}
.vote1 {
  left: 30px;
  display: inline-block;
  width: 51px;
  height: 33px;
}
.rectangle-parent19 {
  position: relative;
  width: 110px;
  height: 35px;
  cursor: pointer;
}
.home-parent {
  position: absolute;
  top: 52px;
  left: 813px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-18xl);
}
.group-child30 {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-maroon);
  width: 100%;
  height: 156px;
  text-align: center;
}
.feline-lab6 {
  text-decoration: underline;
}
.copyright-2023-container6 {
  position: absolute;
  top: 78px;
  left: calc(50% - 525px);
  font-weight: 600;
  display: inline-block;
  width: 100%;
  height: 23.94px;
  text-align: center;
  align-items: center;
}
.rectangle-parent20 {
  position: absolute;
  text-align: center;
  align-items: center;
  top: 1177px;
  left: 0;
  width: 100%;
  height: 156px;
  font-family: var(--font-montserrat);
  color: #fff;
}
.vote-desktop-child {
  position: absolute;
  top: 249px;
  left: calc(50% - 340px);
  border-radius: var(--br-58xl);
  background-color: var(--color-gainsboro);
  width: 679px;
  height: 75px;
}
.search-1-icon {
  position: absolute;
  top: 265px;
  left: 934px;
  width: 48px;
  height: 48px;
  object-fit: cover;
}
.group-child31,
.group-child32 {
  position: absolute;
  border-radius: var(--br-8xs);
}
.group-child31 {
  top: 0;
  left: 0;
  background-color: var(--color-gainsboro);
  width: 369.16px;
  height: 440px;
}
.group-child32 {
  top: 37px;
  left: 35px;
  width: 300px;
  height: 300px;
}
.frame-child15,
.mustofa-a {
  position: relative;
  width: 300px;
}
.frame-child15 {
  border-radius: var(--br-8xs);
  height: 300px;
  object-fit: cover;
}
.mustofa-a {
  display: inline-block;
  height: 65px;
  flex-shrink: 0;
}
.rectangle-parent22 {
  position: absolute;
  top: 37px;
  left: 35px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-base);
}
.rectangle-parent21 {
  position: absolute;
  top: 438px;
  left: 535px;
  width: 369.16px;
  height: 440px;
  color: var(--color-black);
}
.vote-desktop {
  position: relative;
  background: linear-gradient(
    180deg,
    #9b2a06 14.06%,
    #b05f5f 63.54%,
    #ddcaca 94.79%
  );
  width: 100%;
  height: 1333px;
  overflow: hidden;
  text-align: center;
  font-size: var(--font-size-5xl);
  color: var(--color-white);
  font-family: var(--font-alata);
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
        .vote-desktop{
            width: 1441px;
        }
        .rectangle-parent20{
            width: 1441px;
        }
    }

  </style>
  <body>
    <div class="vote-desktop">
      <img
        class="logo-ypps-1-1-26"
        alt=""
        src="logo-ypps-1-1-2@2x.png"
      />

      <div class="putra-putri-sriwijaya-container6">
        <p class="putra-putri10">PUTRA PUTRI</p>
        <p class="sriwijaya7">SRIWIJAYA</p>
      </div>
      <div class="home-parent">
        <div class="home" id="homeText">Home</div>
        <div class="about" id="aboutText">About</div>
        <div class="contact" id="contactText">Contact</div>
        <div class="vouchers" id="vouchersText">Vouchers</div>
        <div class="rectangle-parent19" id="groupContainer">
          <div class="group-child29"></div>
          <div class="vote1">Vote</div>
        </div>
      </div>
      <div class="vote-desktop-child"></div>
      <img class="search-1-icon" alt="" src="/search-1@2x.png" />

      <div class="rectangle-parent21" id="groupContainer2">
        <div class="group-child31"></div>
        <div class="group-child32"></div>
        <div class="rectangle-parent22">
          <img
            class="frame-child15"
            alt=""
            src="/rectangle-2902@2x.png"
          />

          <div class="mustofa-a">Mustofa A.</div>
        </div>
      </div>
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
    <div class="rectangle-parent20">
        <div class="group-child30"></div>
        <div class="copyright-2023-container6">
            Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
            <span class="feline-lab6">Feline Lab.</span>
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
      
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          window.location.href = "./votes";
        });
      }
      
      var groupContainer2 = document.getElementById("groupContainer2");
      if (groupContainer2) {
        groupContainer2.addEventListener("click", function () {
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
