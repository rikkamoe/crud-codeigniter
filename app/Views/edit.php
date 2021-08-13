<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>CRUD CodeIgniter</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <h1>Ubah Data Mobil</h1>
                <?= $validation->listErrors(); ?>
                <form action="/home/update/<?= $getcar['id'] ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="oldImage" value="<?= $getcar['img_car'] ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $getcar['name_car']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Type Mobil</label>
                        <select class="form-select" aria-label="Default select example" name="type" value="<?= $getcar['type_car']; ?>">
                            <option value="Matic">Matic</option>
                            <option value="Manual">Manual</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga Mobil</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?= $getcar['price_car']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description Mobil</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?= $getcar['description_car']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar Mobil</label><br />
                        <img src="/img/product/<?= $getcar['img_car']; ?>" width="100px">
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>