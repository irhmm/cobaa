<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="icon" type="image/x-icon" href="../img/bedingin.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .btn-google {
            color: white !important;
            background-color: #ea4335;
        }

        .btn-facebook {
            color: white !important;
            background-color: #3b5998;
        }
    </style>

<main class="vh-100" style="background-color: #508bfc;">
        <div class="container">
            <div class="row">
                <h2 class="mt-4 text-white">TAMBAH PRODUK</h2>
                <div class="col-sm-9 col-md-7 col-lg-10 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h4>FORM EDIT/INSERT DATA</h4>
                            <form class="mt-4 row g-3 " action="prosesedit.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="">                              
                                <div class="mb-3">
                                <label for="textw" class="form-label">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori">
                                    <option selected>Pilih kategori</option>
                                    <option value="1">Genteng</option>
                                    <option value="2">Pupuk</option>
                                    <option value="3">Material</option>
                                    <option value="4">Kerajinan</option>
                                    <option value="5">Lainya</option>
                                    </select>
                                </div> 
                                <label for="basic-url" class="form-label">Foto Produk</label>
                                <div class="input-group mb-3">
                                    <input class="form-control me-3" type="file" id="formFile" name="pict">
                                    <input class="form-control me-3" type="file" id="formFile" name="pict2">
                                    <input class="form-control" type="file" id="formFile" name="pict3">
                                </div>
                                <div class="mb-3">
                                    <label for="textw" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="textw" name="nama">                                  
                                </div> 
                                <div class="form-outline">
                                <label for="textw" class="form-label">Deskripsi Produk</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="4" name="desk"></textarea>
                                </div>                                
                                <div class="form-outline">
                                <label for="textw" class="form-label">Spesifikasi Produk</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="4" name="spec"></textarea>
                                </div>  
                                <label for="textw" class="form-label">Harga</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="harga">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>