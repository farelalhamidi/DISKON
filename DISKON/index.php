<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penghitung Diskon</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        /* General Styles */
        body {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          background: linear-gradient(135deg, rgb(151, 59, 36), rgb(103, 156, 4)); 
          background-size: cover; 
          margin: 0;
          font-family: 'Arial', sans-serif;
        }

        .discount-card {
            background: rgba(240, 240, 240, 0.02);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        h2 {
            font-size: 28px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 14px;
            color: #444;
        }

        .form-control {
            border-radius: 10px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            padding: 10px;
        }

        .btn-warning {
            background-color: #f8b500;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .btn-warning:hover {
            background-color: #f79c42;
            cursor: pointer;
        }

        .result {
            background: rgba(255, 255, 255, 0.02);
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
        }

        .price {
            font-size: 32px;
            font-weight: bold;
            color:#333; 
        }
        .harga{
            color:#333;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="discount-card col-md-5">
        <h2 class="text-center">APLIKASI PENGHITUNG DISKON</h2>

        <form method="POST">
            <div class="mb-3">
                <label for="harga" class="form-label text-dark">Harga Awal (Rp)</label>
                <input type="number" class="form-control" name="harga" id="harga" required value="<?= isset($_POST['harga']) ? $_POST['harga'] : '' ?>">
            </div>

            <div class="mb-3">
                <label for="diskon" class="form-label text-dark ">Diskon (%)</label>
                <input type="number" class="form-control" name="diskon" id="diskon" required value="<?= isset($_POST['diskon']) ? $_POST['diskon'] : '' ?>">
            </div>

            <button type="submit" name="hitung" class="btn btn-warning w-100 fw-bold">HITUNG</button>
        </form>
    </div>

    <div class="discount-card col-md-5">
   
        <div class="result text-center">
            <h5 class="harga">Harga Setelah Diskon</h5>
            <?php
            if (isset($_POST['hitung'])) {
                $harga = $_POST['harga'];
                $diskon = $_POST['diskon'];
                $harga_diskon = $harga - ($harga * $diskon / 100);
                echo '<p class="price">Rp ' . number_format($harga_diskon, 0, ',', '.') . '</p>';
            } else {
                echo '<p class="price">RP 0</p>';
            }
            ?>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
