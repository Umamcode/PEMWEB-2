<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div style = "border: 1px solid black; margin: 30px 100px; border-radius:10px; background-color:#EEE4B1;">
    <from action="#" method="POST">
    <h4 style="margin-left: 40px; padding: 10px;">From Registrasi IT Club DataScience</h4>
    <div class="container">
    <form method="POST" action="#">
    <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control" placeholder="Masukan NIM">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukan Nama Lengkap">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="jk_1" class="custom-control-label">Laki-Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Prodi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill[]_2" class="custom-control-label">JAVASCRIPT</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="rwd"> 
        <label for="skill[]_3" class="custom-control-label">RWD</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="phyton"> 
        <label for="skill[]_6" class="custom-control-label">PHYTON</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_5" class="custom-control-label">JAVA</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
        <option value="Bogor">Bogor</option>
        <option value="Tanggerang">Tanggerang</option>
        <option value="Bekasi">Bekasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope-o"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit"  style="background-color:#E5C287; border-radius:5px;">Submit</button>
    </div>
  </div>
</form>
    </div>
    <?php
    // Menangkap Value form berdasarkan unique name & simpan ke dalam variable
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $nilai = 0;
    
    foreach ($skill as $data ) {
        switch ($data) {
            case 'html':
            case 'css' :
                $nilai += 10;
                break;
                default:
                    # code...
                    break;
                   
        }
    }
    foreach ($skill as $data ) {
        switch ($data) {
            case 'js' :
            case 'rwd' :
            
                $nilai += 20;
                break;
                default:
                    # code...
                    break;
        }
    }
    foreach ($skill as $data ) {
        switch ($data) {
            case 'php' :
            case 'python' :
            
                $nilai += 30;
                break;
                default:
                    # code...
                    break;
        }
    }
    foreach ($skill as $data ) {
        switch ($data) {
            case 'java' :
            
                $nilai += 50;
                break;
                default:
                    # code...
                    break;
        }
    }
    
    if ($nilai >=100){
        $grade = "Sangat Baik";
    }
    elseif ($nilai >=60){
        $grade = "Baik";
    }
    elseif ($nilai >=40){
        $grade = "Cukup";
    }
    elseif ($nilai >=10){
        $grade = "Kurang";
    }
    else {
        $grade = "Tidak Memadai";
    }
    // tampilkan value ke dalam  web browser
    echo "<table style='border: 1px solid #ccc; width: 50%; margin: 10% auto; padding: 20px 20px; border-radius:8px; background-color:#EEE4B1'>";
    echo "<tr><td colspan='2'><h3 style='font-size: 24px;'>Data Yang Dikirim :</h3></td></tr>";
    echo "<tr><td>Nim</td><td>:</td><td><strong>$nim</strong></td></tr>";
    echo "<tr><td>Nama</td><td>:</td><td><strong>$nama</strong></td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>:</td><td><strong>$jk</strong></td></tr>";
    echo "<tr><td>Program Studi</td><td>:</td><td><strong>$prodi</strong></td></tr>";
    echo "<tr><td>Skill</td><td>:</td><td><strong>";
    foreach ($skill as $data) {
        echo strtoupper($data) . ", ";
    }
    echo "</strong></td></tr>";
    echo "<tr><td>Domisili</td><td>:</td><td><strong>$domisili</strong></td></tr>";
    echo "<tr><td>Email</td><td>:</td><td><strong>$email</strong></td></tr>";
    echo "<tr><td>Nilai</td><td>:</td><td><strong>$nilai</strong></td></tr>";
    echo "<tr><td>Predikat</td><td>:</td><td><strong>$grade</strong></td></tr>";
    echo "</table>";

    ?>
</body>
</html>