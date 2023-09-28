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
    font-size: var(--font-size-xs);
    font-family: var(--font-average);
  }
  .groupChild {
    /* position: absolute;
    top: 0px;
    left: 0px;
    background-color: var(--color-maroon);
    width: 360px;
    height: 39px; */
    top: 0px;
    left: -100px;
    margin-bottom: 0%;
    background-color: var(--color-maroon);
    width: 650px;
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
    text-align: center;
    width: 347px;
    height: 6px;
  }
  .rectangleParent {
    /* position: absolute;
    top: 607px;
    left: 0px;
    width: 360px;
    height: 39px;
    text-align: center;
    font-size: var(--font-size-5xs);
    font-family: var(--font-montserrat); */
    position: relative;
    padding-top: 0%;
    left: 0px;
    width: 100%;
    height: 39px;
    margin-bottom: 0%;
    color: #fff;
    top: 1041px;
    font-size: var(--font-size-5xs);
    font-family: var(--font-montserrat);
  }
  .contactUs {
    position: absolute;
    top: 114px;
    left: calc(50% - 118px);
    text-align: center;
    display: inline-block;
    width: 237px;
    height: 25px;
  }
  .contactAndroidChild {
    position: absolute;
    top: 159px;
    left: calc(50% - 138px);
    border-radius: var(--br-8xs);
    background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
    width: 276px;
    height: 459px;
  }
  .getInTouch {
    position: relative;
  }
  .haveSomeBig {
    position: relative;
    font-size: var(--font-size-6xs);
    font-family: var(--font-alata);
    color: #dfb878;
    text-align: justify;
    display: inline-block;
    width: 235px;
  }
  .getInTouchParent {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .pps23gmailcom {
    position: relative;
    font-size: var(--font-size-6xs);
    font-family: var(--font-alata);
    color: #dab56f;
  }
  .emailParent {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-10xs);
  }
  .socials {
    position: relative;
    font-size: var(--font-size-base);
    font-family: var(--font-abril-fatface);
  }
  .instagram {
    position: relative;
    text-decoration: underline;
    color: #e0ba7c;
  }
  .website {
    position: relative;
    text-decoration: underline;
    color: var(--color-burlywood-100);
  }
  .email1 {
    position: relative;
    text-decoration: underline;
    color: #e0b97b;
  }
  .socialsParent {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 2px;
    font-size: var(--font-size-6xs);
    font-family: var(--font-alata);
  }
  .frameGroup {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-3xs);
  }
  .frameChild {
    position: relative;
    border-radius: var(--br-8xs);
    background-color: var(--color-whitesmoke);
    width: 234px;
    height: 22px;
  }
  .frameInner {
    position: relative;
    border-radius: var(--br-8xs);
    background-color: var(--color-whitesmoke);
    width: 233px;
    height: 77px;
  }
  .submit {
    position: relative;
    /* top: 18px; */
    left: calc(50% - 115px);
    text-decoration: none;
    align-items: center;
    /* margin-top: 100px; */
    font-size: 18px;
  }
  .submitWrapper {
    position: absolute;
    top: 20px;
    left: 0px;
    border-radius: var(--br-8xs);
    background-color: var(--color-burlywood-200);
    align-items: center;
    text-align: center;
    width: 233px;
    padding-top: 5px;
    height: 35px;
  }
  .submitWrapper:hover{
    background-color:  #9b2a06;
  }
  .frameWrapper {
    position: relative;
    width: 233px;
    height: 25px;
    text-align: center;
    font-size: var(--font-size-6xs);
  }
  .frameContainer {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-6xs);
    font-size: var(--font-size-7xs);
    font-family: var(--font-alata);
  }
  .frameParent {
    position: absolute;
    top: 17px;
    left: calc(50% - 117px);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 17px;
  }
  .contactAndroid {
    position: relative;
    background: linear-gradient(180deg, #9b2a06, #b05f5f 52.6%, #ddcaca);
    width: 100%;
    height: 1080px;
    overflow: hidden;
    text-align: left;
    font-size: var(--font-size-base);
    color: var(--color-white);
    font-family: var(--font-abril-fatface);
  }

  /* @media(max-width: 345px){
    .rectangleParent {
        font-size: 120%;
    }
  } */
  .home-parent3 {
    position: absolute;
    top: 10px;
    margin-left: 14%;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    gap: var(--gap-18xl);
    font-size: var(--font-size-5xl);
    font-family: var(--font-alata);
    scale: 40%;
    gap: 15px;
    width: 100%;
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
    text-decoration: none;
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
a{
  color: white;
}
</style>
</head>
<body>
<div class="contactAndroid">
<div class="home-parent3">
        <a class="home5" href="./">Home</a>
        <a class="about5" id="aboutText" href="./about">About</a>
        <a class="contact5" id="contactText" href="./contact">Contact</a>
        <a class="vouchers5" id="vouchersText" href="./vouchers">Vouchers</a>
        <a class="rectangle-parent61" id="groupContainer2" href="./votes">
          <div class="group-child68"></div>
          <div class="vote7">Vote</div>
        </a>
      </div>
    <div class="logoYpps112Parent">
      <img class="logoYpps112" alt="" src="/logo-ypps-1-1-2@2x.png" />
      <div class="putraPutriSriwijayaContainer">
        <p class="putraPutri">PUTRA PUTRI</p>
        <p class="sriwijaya">SRIWIJAYA</p>
      </div>
    </div>
    <div class="contactUs">Contact Us</div>
    <div class="contactAndroidChild" />
    <div class="frameParent">
      <div class="frameGroup">
        <div class="getInTouchParent">
          <div class="getInTouch">Get in touch</div>
          <div class="haveSomeBig">
            Have some big idea or brand to develop and need collaboration? Then
            reach out we'd love to hear about your project and provide help
          </div>
        </div>
        <div class="emailParent">
          <div class="getInTouch">Email</div>
          <div class="pps23gmailcom">pps23@gmail.com</div>
        </div>
        <div class="socialsParent">
          <div class="socials">Socials</div>
          <div class="instagram">Instagram</div>
          <div class="website">website</div>
          <div class="email1">email</div>
        </div>
      </div>
      <div class="frameContainer">
        <div class="emailParent">
          <div class="getInTouch">Name</div>
          <input class="frameChild" />
        </div>
        <div class="emailParent">
          <div class="getInTouch">Email</div>
          <input class="frameChild" />
        </div>
        <div class="emailParent">
          <div class="getInTouch">Message</div>
          <input class="frameInner" />
        </div>
        <div class="frameWrapper">
          <div class="submitWrapper">
            <a class="submit" href="./contact">Submit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rectangleParent">
    <div class="groupChild" />
    <div class="copyright2023Container">
      Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
      <span class="felineLab">Feline Lab.</span>
    </div>
  </div>
</body>
<script lang="ts">
  import { defineComponent  } from "vue";

  export default defineComponent({
    name: "ContactAndroid",
  });
  var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          window.location.href = "/votes";
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
</html>