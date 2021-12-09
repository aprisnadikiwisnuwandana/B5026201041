@extends('layout.ceria')

@section('title', 'DATA KOPI')

@section('isikonten')

<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Detail Data Kopi</h3>

    <a href="/kopi"> Kembali</a>
    <br>
    <br>

	@foreach($kopi as $k)
		Merk Kopi :
        <label type="text" required="required" name="merkkopi">{{ $k->merkkopi }}</label> <br/>
		Stock Kopi :
        <label type="number" required="required" name="stockkopi">{{ $k->stockkopi }}</label> <br/>
		Tersedia :
        <label type="text" required="required" name="tersedia">{{ $k->tersedia }}</label> <br/>
	@endforeach

@endsection
