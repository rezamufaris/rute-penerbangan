<?php
$asalPenerbangan = ["Soekarno-Hatta", "Husein Sastranegara", "Abdul Rachman Saleh", "Juanda"];
sort($asalPenerbangan); // berfungsi untuk mengurutkan array dari yang terkecil ke terbesar
// resort($listAgama) : mengurutkan array dari yang terbesar ke terkecil
$tujuanPenerbangan = ["Ngurah Rai", "Hasanuddin", "Inanwatan", "Sultan Iskandar Muda"];
sort($tujuanPenerbangan);


$fileJson = 'detail_penerbangan.json'; //file json untuk menampung/menyimpan data
$dataPesawat = array(); // array yang berfungsi untuk menyimpan data sementara

//membaca file Json
$dataJson = file_get_contents($fileJson);
$dataPesawat = json_decode($dataJson, true); // mengubah data json menjadi array

// Detail Pajak
$cgk = 50000;
$bdo = 30000;
$mlg = 40000;
$sub = 40000;
$dps = 80000;
$upg = 70000;
$inx = 90000;
$btj = 70000;

if (isset($_POST['btnSubmit'])) {
    // mengambil data dari form
    $maskapai = $_POST['maskapai'];
    $bandaraAsal = $_POST['bandaraAsal'];
    $bandaraTujuan = $_POST['bandaraTujuan'];
    $hargaTiket = $_POST['hargaTiket'];

    if ($bandaraAsal = "Soekarno-Hatta") {
        if ($bandaraTujuan == "Ngurah Rai") {
            $totalPajak = $cgk + $dps;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Hasasnuddin") {
            $totalPajak = $cgk + $upg;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Inanwatan") {
            $totalPajak = $cgk + $inx;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Sultan Iskandar Muda") {
            $totalPajak = $cgk + $btj;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        }
    }

    if ($bandaraAsal = "Husein Sastranegara") {
        if ($bandaraTujuan == "Ngurah Rai") {
            $totalPajak = $bdo + $dps;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Hasasnuddin") {
            $totalPajak = $bdo + $upg;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Inanwatan") {
            $totalPajak = $bdo + $inx;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Sultan Iskandar Muda") {
            $totalPajak = $bdo + $btj;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        }
    }

    if ($bandaraAsal = "Abdul Rahman Saleh") {
        if ($bandaraTujuan == "Ngurah Rai") {
            $totalPajak = $mlg + $dps;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Hasasnuddin") {
            $totalPajak = $mlg + $upg;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Inanwatan") {
            $totalPajak = $mlg + $inx;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Sultan Iskandar Muda") {
            $totalPajak = $mlg + $btj;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        }
    }


    // Section membuat data array baru
    // $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket,];

    array_push($dataPesawat, $dataBaru); //memasukkann object data baru ke array dataPesawat
    $dataToJson = json_encode($dataPesawat, JSON_PRETTY_PRINT); // mengubah array dataPesawat ke dalam json
    file_put_contents("detail_penerbangan.json", $dataToJson); //menulis ke dalam file detail_penerbangan.json

}

?>

<!-- HTML Section -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Project VSGA Penerbangan</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- CSS External -->
    <link rel="stylesheet" type="text/css" href="css/css.css" />
  </head>

  <body>
    <!-- Bagian Navigasi -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-2">
      <div class="container-fluid" id="ayam">
        <a class="navbar-brand" href="#">
          <img src="css/assets/flight.svg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top" />
          Rez's Flight Route
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Flight Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ticket Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bagian Form -->
    <div class="container">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-header" style="margin-bottom: 20px">Pendaftaran Rute Penerbangan</h5>
            <form action="#" method="post">
              <div class="row align-items-center">
                <div class="col">
                  <div class="mb-3">
                    <label for="maskapai" class="form-label">Maskapai</label>
                    <input type="text" class="form-control" id="maskapai" name="maskapai" />
                  </div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <div class="form-group mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Asal Bandara</label>
                    <select class="form-control" id="bandaraAsal" name="bandaraAsal">
                      <option value="Soekarno-Hatta">Soekarno Hatta</option>
                      <option value="Husein Sastranegara">Husein Sastranegara</option>
                      <option value="Abdul Rahman Saleh">Abdul Rachman Saleh</option>
                      <option value="Juanda">Juanda</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <div class="form-group mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Tujuan Bandara</label>
                    <select class="form-control" id="bandaraTujuan" name="bandaraTujuan">
                      <option value="Ngurah Rai">Ngurah Rai</option>
                      <option value="Hasasnuddin">Hasanuddin</option>
                      <option value="Inanwatan">Inanwatan</option>
                      <option value="Sultan Iskandar Muda">Sultan Iskandar Muda</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <div class="mb-3">
                    <label for="maskapai" class="form-label">Harga Tiket</label>
                    <input type="text" class="form-control" name="hargaTiket" id="hargaTiket" />
                  </div>
                </div>
              </div>
              <input class="btn btn-primary" type="submit" value="Submit" name="btnSubmit" id="btnSubmit" />
            </form>
          </div>
        </div>
      </div>

      <!-- Bagian Table -->
      <div class="table-responsive py-4">
        <table class="table">
          <thead class="table-info">
            <tr>
              <th scope="col">Maskapai</th>
              <th scope="col">Asal Penerbangan</th>
              <th scope="col">Tujuan Penerbangan</th>
              <th scope="col">Harga Tiket</th>
              <th scope="col">Pajak</th>
              <th scope="col">Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataPesawat as $pesawat) { ?>
            <tr>
              <td><?php echo $pesawat[0]; ?></td>
              <td><?php echo $pesawat[1]; ?></td>
              <td><?php echo $pesawat[2]; ?></td>
              <td><?php echo $pesawat[3]; ?></td>
              <td><?php echo $pesawat[4]; ?></td>
              <td><?php echo $pesawat[5]; ?></td>
            </tr>
            <?php }; ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
