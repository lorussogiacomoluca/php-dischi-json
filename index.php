<?php
require_once('functions.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Articolo31</h1>
      </div>
    </div>
    <hr>
    <div class="row">
      <?php foreach ($dischi as $disco): ?>
        <div class="col-12 col-md-6 col-lg-3 d-flex">
          <div class="card m-3 flex-fill">
            <img src="<?= $disco['cover'] ?>" class="card-img-top" alt="<?= $disco['titolo'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $disco['titolo'] ?></h5>
              <p class="card-text">
                Artista: <?= $disco['artista'] ?><br>
                Anno: <?= $disco['anno'] ?><br>
                Genere: <?= $disco['genere'] ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>