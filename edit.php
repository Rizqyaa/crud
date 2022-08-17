<?php

$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=fumafu", 'root', '');
$query = $db->query("select * from murid where id=$id ");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
    <form method="POST" action="prosedit.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="col-auto">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">Kelas</label>
            <select name="kelas" id="" class="form-select" aria-label="Default select example" value="<?= $data['kelas'] ?>">
                <option value="10 RPL" <?= $data['kelas'] == '1' ? 'selected' : '' ?>>10 RPL</option>
                <option value="11 RPL" <?= $data['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
                <option value="12 RPL" <?= $data['kelas'] == '3' ? 'selected' : '' ?>>12 RPL</option>
                <option value="10 TKJ" <?= $data['kelas'] == '4' ? 'selected' : '' ?>>10 TKJ</option>
                <option value="11 TKJ" <?= $data['kelas'] == '5' ? 'selected' : '' ?>>11 TKJ</option>
                <option value="12 TKJ" <?= $data['kelas'] == '6' ? 'selected' : '' ?>>12 TKJ</option>
                <option value="10 TKJT" <?= $data['kelas'] == '7' ? 'selected' : '' ?>>10 TKJT</option>
                <option value="11 TKJT" <?= $data['kelas'] == '8' ? 'selected' : '' ?>>11 TKJT</option>
                <option value="12 TKJT" <?= $data['kelas'] == '9' ? 'selected' : '' ?>>12 TKJT</option>
                <option value="10 OTKP" <?= $data['kelas'] == '10' ? 'selected' : '' ?>>10 OTKP</option>
                <option value="11 OTKP" <?= $data['kelas'] == '11' ? 'selected' : '' ?>>11 OTKP</option>
                <option value="12 OTKP" <?= $data['kelas'] == '12' ? 'selected' : '' ?>>12 OTKP</option>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 80;">.   .Update.   .</button>
            <button type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" action="index.php" >.   .Batal.   .</button>
            </div>
    </form>

</body>
</html>