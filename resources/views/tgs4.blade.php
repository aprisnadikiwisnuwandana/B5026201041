<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var txt = "";
    txt += "No. Peserta :" + " 5026201041" + "</br>";
    txt += "Nama :" + " Aprisna Diki Wisnu Wandana" + "</br>";
    txt += "Tempat, Tanggal Lahir : " + " Sidoarjo, 18 April 2002" + "</br>";
    txt += "Sekolah Asal : " + "SMA Negeri 1 Waru" + "</br>";
    txt += "Ruang : " + "09";
    $("#div1").html(txt);
  });
});
</script>
</head>
<style>
#div1 {
  height: 93px;
  width: 350px;
  padding: 20px;
  margin: 20px;
  border: 3px solid black;
  background-color: rgb(233, 217, 175);
}
</style>
<body>
    <h1>Tugas Kastemisasi "Try It yourself" pada jQuery Dimensions</h1>
    <p><b>jQuery innerWidth() and innerHeight() Methods</b></p>
    <hr>
    <p>Tampilkan data siswa pada kartu ujian yang berisikan no.peserta, nama, tempat dan tanggal lahir, dan sekolah asal.</p>

<div id="div1"></div>
<br>

<button>Tampilkan Konten Kartu Ujian</button>

</body>
</html>
