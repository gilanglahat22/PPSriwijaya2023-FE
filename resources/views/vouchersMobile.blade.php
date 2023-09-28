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
  }
  .groupChild {
    position: absolute;
    top: 0%;
    left: 0px;
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
  .rectangleParent {
    position: absolute;
    top: 805px;
    left: 0px;
    width: 100%;
    height: 39px;
    text-align: center;
    font-size: var(--font-size-5xs);
    font-family: var(--font-montserrat);
  }
  .tataCaraPendaftaran {
    position: absolute;
    top: 155px;
    left: calc(50% - 118px);
    font-size: var(--font-size-base);
    font-family: var(--font-abril-fatface);
    text-align: center;
    display: inline-block;
    width: 237px;
    height: 25px;
  }
  .voucersAndroidChild {
    position: absolute;
    top: 198px;
    left: calc(50% - 138px);
    border-radius: var(--br-8xs);
    background: linear-gradient(180deg, #d21212 19.79%, #ee9090);
    width: 276px;
    height: 378px;
  }
  .untukMelakukanPembelianVouc {
    margin-bottom: 0px;
  }
  .bukaWebsiteWwwibdmcomLalu {
    margin: 0;
    padding-left: 13px;
  }
  .bukaWebsiteWwwibdmcomContainer {
    position: absolute;
    top: 210px;
    left: calc(50% - 124px);
    font-size: var(--font-inherit);
    font-family: var(--font-inherit);
    display: inline-block;
    width: 249px;
    height: 462px;
  }
  .voucersAndroid {
    position: relative;
    background: linear-gradient(180deg, #9b2a06, #b05f5f 52.6%, #ddcaca);
    width: 100%;
    height: 844px;
    overflow: hidden;
    text-align: left;
    font-size: var(--font-size-xs);
    color: var(--color-white);
    font-family: var(--font-average);
  }
</style>
</head>
<body>
  <div :class="$style.voucersAndroid">
    <div :class="$style.logoYpps112Parent">
      <img :class="$style.logoYpps112" alt="" src="/logo-ypps-1-1-2@2x.png" />
      <div :class="$style.putraPutriSriwijayaContainer">
        <p :class="$style.putraPutri">PUTRA PUTRI</p>
        <p :class="$style.sriwijaya">SRIWIJAYA</p>
      </div>
    </div>
    <div :class="$style.rectangleParent">
      <div :class="$style.groupChild" />
      <div :class="$style.copyright2023Container">
        Copyright © 2023 Pemilihan Putra Putri Sriwijaya 2023 Powered by
        <span :class="$style.felineLab">Feline Lab.</span>
      </div>
    </div>
    <div :class="$style.tataCaraPendaftaran">Tata Cara Pendaftaran</div>
    <div :class="$style.voucersAndroidChild" />
    <div :class="$style.bukaWebsiteWwwibdmcomContainer">
      <p :class="$style.sriwijaya">&nbsp;</p>
      <ul :class="$style.bukaWebsiteWwwibdmcomLalu">
        <li :class="$style.untukMelakukanPembelianVouc">
          Buka website www.ibdm.com lalu pilih menu "Voucher"
        </li>
        <li :class="$style.untukMelakukanPembelianVouc">
          Untuk melakukan pembelian voucher hubungi nomor whatsapp berikut
          08xxxxxxxx
        </li>
        <li :class="$style.untukMelakukanPembelianVouc">
          Pesan nominal voucher yang akan di beli, nominal voucher yang tersedia
          (10k,25k,50k,100k,500k).
        </li>
        <li :class="$style.untukMelakukanPembelianVouc">
          Upload Bukti pembayaran sesuai dengan nominal voucher yang di beli,
          pembayaran dapat melalui ATM/Bank (No Rek BNI : 1104-01-007117-50-4
          A.n --l)
        </li>
        <li :class="$style.untukMelakukanPembelianVouc">
          Setelah verifikasi pembayaran admin selesai kode voucher akan
          dikirimkan melalui whatsapp
        </li>
        <li :class="$style.untukMelakukanPembelianVouc">
          Setelah mendapatkan voucher masuk ke halaman
          <span :class="$style.felineLab">Vote</span> dengan cara mengklik
          tombol vote diatas, kemudian cari Finalis Favorit kalian dan lakukan
          Voting dengan cara memasukan kode voucher yang sudah dibeli.
        </li>
        <li :class="$style.untukMelakukanPembelianVouc">
          Bila berhasi akan mucul tulisan “Voting Berhasil”
        </li>
        <li>
          Grafik hasil e-voting otomatis langsung terupdate secara otomatis
        </li>
      </ul>
    </div>
  </div>
  <script lang="ts">
  import { defineComponent  } from "vue";

  export default defineComponent({
    name: "VoucersAndroid",
  });
</script>
</body>
</html>