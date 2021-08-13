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
        <h2>Daftar Mobil</h2>
        <a href="/home/create" class="btn btn-primary">Tambah Data Mobil</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Gambar Mobil</th>
              <th scope="col">Nama Mobil</th>
              <th scope="col">Type Mobil</th>
              <th scope="col">Harga Mobil</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($car as $c) : ?>
            <tr>
              <td><img src="/img/product/<?= $c['img_car']; ?>" width="100px"></td>
              <td><?= $c['name_car']; ?></td>
              <td><?= $c['type_car']; ?></td>
              <td>Rp. <?= $c['price_car']; ?></td>
              <td><a href="/home/<?= $c['id'] ?>" class="btn btn-success">Detail</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>