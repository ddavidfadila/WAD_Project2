<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


      <div class="container">
    <form method="get" action="latihan3.php">
        <label for="inputAngka">Input Angka:</label>
        <input type="number" class="form-control" id="inputAngka" name="inputAngka" required>
        <br>
        <label for="inputOperasi">Pilih Opsi Operasi:</label>
        <select class="form-control" id="inputOperasi" name="inputOperasi" required>
        <option value="1">Tambah</option>
        <option value="2">Kurang</option>
        <option value="3">Bagi</option>
        </select>
        <button type="submit"class="btn btn-primary">Hitung</button>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>