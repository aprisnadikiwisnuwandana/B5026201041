@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Detail Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>
    <br>
    <br>

	@foreach($pegawai as $p)
		Nama :
        <label type="text" required="required" name="nama">{{ $p->pegawai_nama }}</label> <br/>
		Jabatan :
        <label type="text" required="required" name="jabatan">{{ $p->pegawai_jabatan }}</label> <br/>
		Umur :
        <label type="number" required="required" name="umur">{{ $p->pegawai_umur }}</label> <br/>
		Alamat :
        <label required="required" name="alamat">{{ $p->pegawai_alamat }}</label> <br/><br>
	@endforeach

@endsection
