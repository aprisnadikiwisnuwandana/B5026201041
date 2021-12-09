@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Kopi</h3>

    <a href="/kopi/tambah" class="btn btn-primary" > + Tambah Data Kopi Baru</a>
	<br/>
    <br/>

    <p>Cari Data Kopi berdasarkan Merk :</p>
	<form action="/kopi/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Kopi .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			<th>Merk Kopi</th>
			<th>Stock Kopi</th>
            <th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($kopi as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k->merkkopi }}</td>
			<td>{{ $k->stockkopi }}</td>
            <td>{{ $k->tersedia }}</td>
			<td>
                <a href="/kopi/detail/{{ $k->kodekopi }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/kopi/edit/{{ $k->kodekopi }}" class="btn btn-warning">Edit</a>
				<a href="/kopi/hapus/{{ $k->kodekopi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $kopi->links() }}
@endsection
