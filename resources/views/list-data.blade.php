<html>
<head>
	<title>Tutorial Membuat CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>

	<h3>Data Pengumuman</h3>

	{{-- <a href="{{ route('artikel.tambah-data') }}"> + Tambah Artikel Baru</a> --}}
	<a href="{{ route('pengumuman.tambah-data') }}"> + Tambah Pengumuman Baru</a>


	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Judul</th>
			<th>Isi</th>
            <th>Aksi</th>
		</tr>
		@foreach($data as $d)
		<tr>
			<td>{{ $d->title }}</td>
			<td>{{ $d->isi }}</td>
			<td>
				{{-- <a href="{{ route('artikel.edit', $d->id) }}">Edit</a> --}}
				{{-- <a href="{{ route('pengumuman.edit', $d->id) }}">Edit</a> --}}
				{{-- | --}}
				{{-- <a href="{{ route('pengumuman.destroy', $d->id) }}">Hapus</a> --}}
                {{-- | --}}
				<form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('pengumuman.destroy', $d->id) }}" method="POST">
                        
					|
					<a href="{{ Route('pengumuman.edit', $d->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
					|
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
					|
					<a href="{{ route('pengumuman.detail' , $d->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
				</form>
                {{-- <a href="{{ route('artikel.detail', $d->id) }}">Detail</a> --}}
				{{-- <a href="#">Detail</a> --}}
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
