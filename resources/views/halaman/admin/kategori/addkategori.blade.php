<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Produk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container mt-5">
            <h1 class="text-center">Tambah kategori</h1>
            <a href="{{ url('/dashboard/kategori') }}" class="btn btn-danger mb-3">Back</a>
            <div class="card-body">
               <form action="{{ Route('postkategori') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nama kategori</label>
                        <input type="text" class="form-control"  name="nama_kategori" id="name_produk">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Slug</label>
                        <input type="text" class="form-control"  name="slug" id="name_produk">
                    </div>
                    <button type="submit" class="btn btn-primary float-end mb-5">Simpan</button>
                </form>

            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>