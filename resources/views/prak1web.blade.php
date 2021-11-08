<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Praktikum Cloning</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/824a4ad18a.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"/>
        <body>
        <style>
          body {
            font-family: Arial, Helvetica, sans-serifs;
          }
          #page {
            padding-top: 1rem;
          }
          #favorit {
            padding-top: 1px;
          }
          #favorit2 {
            padding: 14px 40px;
          }
          #favorite3 {
            padding: 0;
            border: none;
            background: none;
            width: 110px;
            font-size: small;
          }
          #share {
            padding: 14px 40px;
          }
          #share2 {
            padding: 0;
            border: none;
            background: none;
            width: 110px;
            font-size: small;
          }
          #pemisah {
            padding: 10px;
            border: none;
            width: 10pc;
          }
          #favoritbutton {
            color: black;
          }
          #favoritbutton:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
          }
          #favoritbutton:hover {
            color: red;
            background-color: transparent;
          }
          #sharebutton {
            color: black;
          }
          #sharebutton:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
          }
          #sharebutton:hover {
            color: red;
            background-color: transparent;
          }
          #heart {
            color: black;
          }
          #heart:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
          }
          #heart:hover {
            color: rgb(0, 0, 0);
            background-color: transparent;
          }
          #chatbutton {
            width: 100px;
            color: black;
          }
          #chatbutton:hover {
            background-color: white;
          }
          #basket {
            width: 225px;
            color: black;
          }
          #basket:hover {
            background-color: white;
          }
          #buynow {
            width: 280px;
            background-color: red;
          }
          #buynow:hover {
            background-color: red;
          }
          #send {
            padding-top: 8px;
          }
          .table {
            column-rule-style: none;
            height: 50px;
            border-style: none;
          }
          #change {
            text-decoration: underline;
            text-decoration-style: dashed;
          }
          #changeaddress {
            color: black;
            text-decoration: underline;
            text-decoration-style: dashed;
          }
          #changeaddress:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
          }
          #changeaddress:hover {
            color: rgb(0, 0, 0);
            background-color: transparent;
          }
          .fa-star {
            color: gold;
          }
          p {
            line-height: 1.5;
          }
          hr {
            color: grey;
          }
          .col-sm-auto {
            padding-top: 1rem;
            width: 75px;
            align-content: flex-start;
          }
        </style>
            <br>
            <div class="container">
                <div></div>
              <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                  <img src="gambar_utama.jpeg" alt="gambar_utama">
                      <p></p>
                      </div>
                    <div class="row">
                        <div class="row justify-content-lg-center">
                            <div class="col-sm-2"><img src="gambar_utama.jpeg" style="border-style:ridge; border-radius: 5px;" alt="gambar_utama" width="60"/></div>
                            <div class="col-sm-2"><img src="gambar2.jpeg" alt="gambar2" width="60"/></div>
                            <div class="col-sm-2"><img src="gambar3.jpeg" alt="gambar3" width="60"/></div>
                            <div class="col-sm-2"><img src="gambar4.jpeg" alt="gambar4" width="60" height="60"/></div>
                            <div class="col-sm-2"><img src="gambar5.jpeg" alt="gambar5" width="60"/></div>
                          </div>
                        </div>
                    <div style="text-align: center;">
                        <div id="favorit" class="row justify-content-md-center">
                            <div id="favorit2" class="col-sm-1">
                              <button type="button" id="favorite3" class="btn btn-outline-dark">
                                <i id="heart" class="bi bi-suit-heart"></i>
                                <a id="favoritbutton" href="">Favoritkan</a>
                              </button>
                          </div>
                          <div class="col-2">
                            <button type="button" id="pemisah" class="btn btn-lg text-secondary" disabled>|</button>
                          </div>
                          <div id="share" class="col-sm-4">
                            <button type="button" id="share2" class="btn btn-sm btn-outline-dark">
                                <i id="share3" class="bi bi-share-fill"></i>
                                <a id="sharebutton" href="">Bagikan</a>
                              </button>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-8">
                    <div class="row justify-content-between">
                        <div class="col-lg-8">
                            <h1 style="font-size: x-large">MCDODO CH-717 TRAVEL ADAPTOR CHARGER LED DISPLAY PD FAST CHARGING POWER DELIVERY QUICK CHARGE QC 3.0</h1>
                                <div>
                                    <div class="row">
                                      <p style="font-size: small">
                                        <a style="font-size: 0.5rem;">
                                          <i class="fas fa-star fa-sm"></i>
                                          <i class="fas fa-star fa-sm"></i>
                                          <i class="fas fa-star fa-sm"></i>
                                          <i class="fas fa-star fa-sm"></i>
                                          <i class="fas fa-star fa-sm"></i>
                                        </a>&nbsp;25 Ulasan<i class="bi bi-dot"></i>26 Terjual</p>
                                    </div>
                                    <div class="row">
                                      <h6 style="font-weight: bold">Rp125.000</h6>
                                    </div>
                                    <div class="row">
                                      <p></p>
                                    </div>
                                    <div class="row" style="font-size: small;">
                                      <p>Tersedia > 10 stok barang</p>
                                    </div>
                                  </div>
                        </div>
                        <div class="col">
                            <img src="superseller.svg" alt="superseller" width="101" height="20">
                        </div>
                        <div class="row"><p><hr></p></div>
                        <div class="row" style="font-size: small;">
                            <div class="col-2">
                              <p style="font-weight: bold;">Pengiriman</p>
                            </div>
                            <div class="col-lg-2">
                              <p><font id="location">Lokasi Pelapak</font><br>Jakarta Utara</p>
                            </div>
                            <div class="col-sm-4 border-start">
                              <p><font style="font-weight: lighter;">Tujuan Pengiriman</font><br>Pasar Minggu, Jakarta Selatan</p>
                            </div>
                            <div class="col-4">
                              <p>&nbsp; <br><a href=""><font id="changeaddress">Ubah Alamat</font></a></p>
                            </div>
                          </div>
                          <div class="row">
                            <p></p>
                          </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row"><p></p><hr></div>
                            <div class="row justify-content-sm-start">
                            <div class="col-lg-2">
                                <button type="button" id="chatbutton" class="btn btn-sm btn-outline-dark" style="font-weight: bold;"><i class="bi bi-chat-left-dots"></i>
                                &nbsp;Chat</button>
                            </div>
                            <div class="col-lg-4">
                              <button type="button" id="basket" class="btn btn-sm btn-outline-dark" style="font-weight: bold;"><i class="bi bi-cart-plus"></i>
                                &nbsp;Masukkan Keranjang</button>
                          </div>
                          <div class="col-lg-auto">
                            <button type="button" id="buynow" class="btn btn-sm text-light" style="font-weight: bold;">Beli Sekarang</button>
                        </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row">
                                <p style="font-size: small;"><i class="bi bi-info-circle-fill"></i>&nbsp;&nbsp;Bayar sebelum jam 16:00 WIB agar barang dikirim hari ini</p>
                        </div>
                    <div class="row"><hr></div>
                    <div class="row" style="font-size: small;">
                        <div class="col-1">
                          <img src="illustrationhandphone.png" alt="diskonbottom" width="50">
                        </div>
                        <div class="col-11">
                          <div class="row" style="font-size: small; font-weight: bold;">Lebih Hemat di Aplikasi!</div>
                          <div class="row" style="font-size: smaller; font-weight: lighter;">Ada gratis ongkir dan promo menarik<br>menanti kamu. Download sekarang!</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <p></p>
        </body>
    </head>
</html>
