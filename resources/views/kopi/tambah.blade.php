@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Kopi</h3>

	<a href="/kopi"> Kembali</a>

	<br/>
	<br/>

	<form action="/kopi/store" method="post">
		{{ csrf_field() }}
		Merk Kopi : <input type="text" name="merkkopi" required="required"> <br/>
		Stock Kopi : <input type="number" name="stockkopi" required="required"> <br/>
		Tersedia :
        <input type="radio" id="tersedia" name="tersedia" value="Y">
        <label for="tersedia">TERSEDIA </label>
        <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
        <label for="tidak">TIDAK TERSEDIA</label><br/><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
