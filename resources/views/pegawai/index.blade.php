@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>
	<br/>
    <br/>

    <p>Cari Data Pegawai berdasarkan Nama atau Alamat :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
@endsection
