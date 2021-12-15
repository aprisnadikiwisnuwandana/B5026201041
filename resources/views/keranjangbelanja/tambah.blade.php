@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Keranjang Belanja</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}

		Kode Pembelian : <input type="number" name="ID" required="required"> <br/>
		Kode Barang : <input type="number" name="kodebarang" required="required"> <br/>
		Jumlah : <input type="number" name="jumlah" required="required"> <br/>
        Harga : <input type="number" name="harga" required="required"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
