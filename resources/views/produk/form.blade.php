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
            <h1 class="text-center">Tambah Produk</h1>
            <a href="{{ url('/dashboard') }}" class="btn btn-danger mb-3">Back</a>
            <div class="card-body">
               <form action="{{ route('post-produk') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control"  name="name_produk" id="name_produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Weight *gram</label>
                        <input type="number" class="form-control" name="weight" id="weight" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Short Description</label>
                        <input type="text" class="form-control" name="short_description" id="short_description" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Slug</label>
                        <select name="slug" id="slug" required>
                            <option value=""></option>
                        @foreach ($kategori as $item)
                            <option>{{ $item->slug }}</option>
                        @endforeach    
                        </select>
                        {{-- <input type="text" class="form-control" nama="status" id="" > --}}
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Stok</label>
                        <input type="number" name="stok" id="" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mb-5">Simpan</button>
                </form>

            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>