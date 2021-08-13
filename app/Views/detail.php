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
            <div class="col">
                <h1>Detail Mobil</h1>
                <div class="card" style="width: 18rem;">
                    <img src="/img/product/<?= $getcar['img_car']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $getcar['name_car'] ?> - <?= $getcar['type_car'] ?></h5>
                        <p class="card-text"><?= $getcar['description_car'] ?></p>
                        <a href="/home/edit/<?= $getcar['id'] ?>" class="btn btn-warning">Edit</a>
                        <form action="/home/<?= $getcar['id'] ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button><br />
                        </form>
                        <a href="/">Balik ke daftar mobil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>