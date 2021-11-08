function validation() {
    var barang = document.registration.barang;
    var harga = document.registration.harga;
    var kode = document.registration.kode;

if(barang_validation(barang, 10, 50)) {
}
if(harga_validation(harga)) {
}
if(kode_validation(kode)) {
}
return false;
}

function barang_validation(barang, x, y) {
    var barang_leng = barang.value.length;
    if (barang_leng == 0 || barang_leng >= y || barang_leng < x) {
        alert("Nama barang minim "+x+" karakter");
        barang.focus();
        return false;
    }
    return true;
}

function harga_validation(harga) { 
    var money = /^[0-9]+$/;
    if(harga.value.match(money)) {
        return true;
    }
    else {
        alert('Harga barang harus angka dan minim 5000');
        harga.focus();
        return false;
    }
}

function kode_validation(kode) { 
    var kode = /^[1-9]+$/;
    if(kode.value == 0) {
        kode.focus();
        return false;
    }
    else {
        alert('Form Succesfully Submitted');
        window.location.reload()
        return true;
    }
}