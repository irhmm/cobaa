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

                            <form class="mt-4 row g-3 " action="proses.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="">                              
                                <div class="mb-3">
                                <label for="textw" class="form-label">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="kategory">
                                    <option selected>Pilih kategori</option>
                                    <option value="Genteng">Genteng</option>
                                    <option value="2">Pupuk</option>
                                    <option value="3">Material</option>
                                    <option value="4">Kerajinan</option>
                                    <option value="5">Lainya</option>
                                    </select>
                                    <span class="text-danger" id="category_error"></span>
                                </div> 
                                <label for="basic-url" class="form-label">Foto Produk</label>
                                <div class="input-group mb-3">
                                    <input class="form-control me-3" type="file" id="formFile" name="pict">
                                    <input class="form-control me-3" type="file" id="formFile" name="pict2">
                                    <input class="form-control" type="file" id="formFile" name="pict3">
                                    <span class="text-danger" id="pict_error"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="textw" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="textw" name="nama">  
                                    <span class="text-danger" id="nama_error"></span>                                 
                                </div> 
                                <div class="form-outline">
                                <label for="textw" class="form-label">Deskripsi Produk</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="4" name="desk"></textarea>
                                    <span class="text-danger" id="desk_error"></span>
                                </div>                                
                                <div class="form-outline">
                                <label for="textw" class="form-label">Spesifikasi Produk</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="4" name="spec"
                                    placeholder="contoh:
 Bahan baku :
  - rotan sintetis
  - Ukuran = 40 x 25 cm
  - Tinggi = 35 cm"></textarea>
  <span class="text-danger" id="spec_error"></span>
                                </div>                                
                                <label for="textw" class="form-label">Harga</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="harga">
                                    <span class="text-danger" id="harga_error"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    document.querySelector('form').addEventListener('submit', function (event) {
        const requiredFields = ["kategori", "pict", "pict2", "pict3", "nama", "desk", "spec", "harga"];

        requiredFields.forEach(function (fieldName) {
            const inputField = document.querySelector(`[name="${fieldName}"]`);
            const errorSpan = document.querySelector(`#${fieldName}_error`);

            if (inputField.type === 'file') {
                // Handle file input separately
                if (inputField.files.length === 0) {
                    errorSpan.textContent = `Field ${fieldName} harus diisi.`;
                    errorSpan.style.display = 'block';
                    event.preventDefault();
                } else {
                    errorSpan.textContent = '';
                    errorSpan.style.display = 'none';
                }
            } else {
                if (inputField.value.trim() === '') {
                    errorSpan.textContent = `Field ${fieldName} harus diisi.`;
                    errorSpan.style.display = 'block';
                    event.preventDefault();
                } else {
                    errorSpan.textContent = '';
                    errorSpan.style.display = 'none';
                }
            }
        });
    });
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            const fileInput = form.querySelector('input[type="file"]');
            form.addEventListener('submit', function (e) {
                const allowedFormats = ['image/jpeg', 'image/png'];
                if (fileInput.files.length > 0) {
                    const fileType = fileInput.files[0].type;
                    if (!allowedFormats.includes(fileType)) {
                        e.preventDefault(); // Mencegah pengiriman form
                        alert('Hanya file gambar JPEG atau PNG yang diizinkan.');
                    }
                }
            });
        });
    </script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>