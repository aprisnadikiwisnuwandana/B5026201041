<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS Kode Soal B</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="formvalidation2.js"></script>
</head>
<body id="margin" onload="document.registration.barang.focus();">
    <form name='registration' onSubmit="return validation();">
    <style>
        #margin{
            border-style: solid;
            padding: 1cm;
            margin-top: 2cm;
            margin-bottom: 5cm;
            margin-left: 5cm;
            margin-right: 5cm;
        }
        #li{
            list-style: none;
            margin-bottom: 5px;
        }
    </style>
        <left><p>Aprisna Diki Wisnu Wandana<br>
            Diki<br>
            5026201041
        </p></left>
        <center><b><p>Form Input Data Barang</p></b></center>
        <ul>
            <li id="li"><label for="barang">Nama Barang:</label></li>
            <li id="li"><input type="text" name="barang" size="20" /></li required>
            <li id="li"><label for="harga">Harga:</label></li>
            <li id="li"><input type="text" name="harga" size="20" /></li required>
            <li id="li"><label for="jenis">Jenis Barang:</label></li>
            <li id="li"><select name="jenis" required>
                <option selected="" value="Default"></option>
                <option value="MK">Makanan</option>
                <option value="MN">Minuman</option>
                <option value="NM">Non Mamin</option>
                </select></li>
            <li id="li"><label for="kode">Kode Barcode:</label></li>
            <li id="li"><input type="text" name="kode" size="20" /></li required>
        </ul>
        <div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        <button type="submit" class="btn btn-primary">Reset</button>
    </div>
</form>
</body>
