@extends('layout.ceria')

@section('title', 'EDIT DATA KOPI')

@section('isikonten')

<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Edit Data Kopi</h3>

    <a href="/kopi"> Kembali</a>

	@foreach($kopi as $k)
	<form action="/kopi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->kodekopi }}"> <br/>
		Merk Kopi : <input type="text" required="required" name="merkkopi" value="{{ $k->merkkopi }}"> <br/>
		Stock Kopi : <input type="number" required="required" name="stockkopi" value="{{ $k->stockkopi }}"> <br/>
		Tersedia :
        <input type="radio" id="tersedia" name="tersedia" value="Y" @if ($k->tersedia === "Y") checked="checked" @endif>
        <label for="tersedia">TERSEDIA</label>
        <input type="radio" id="tidak" name="tersedia" value="T" @if ($k->tersedia === "T") checked="checked" @endif>
        <label for="tidak">TIDAK TERSEDIA</label><br/><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
