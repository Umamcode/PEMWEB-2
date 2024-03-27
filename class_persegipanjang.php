<?php
class PersegiPanjang {
    private $panjang;
    private $lebar;
    
    public function __construct($lebar, $panjang) {
        $this->setLebar($lebar);
        $this->setPanjang($panjang);
    }

    public function rumusKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function rumusLuas() {
        return $this->panjang * $this->lebar;
    }

    public function getPanjang() {
        return $this->panjang;
    }

    public function setPanjang($panjang) {
        $this->panjang = $panjang;
    }

    public function getLebar() {
        return $this->lebar;
    }

    public function setLebar($lebar) {
        $this->lebar = $lebar;
    }    
}

// Ambil nilai panjang dan lebar dari form
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

// Buat objek PersegiPanjang
$persegiPanjang = new PersegiPanjang($lebar, $panjang);

// Hitung keliling dan luas
$keliling = $persegiPanjang->rumusKeliling();
$luas = $persegiPanjang->rumusLuas();

// Tampilkan hasil
echo "<table style='border: 1px solid black; width: 40%; margin: 10% auto; padding: 20px 20px; border-radius:8px; background-color:#EEE4B1'>";
echo "<tr>
    <td><h1 style='font-size: 30px;'>Data Yang Dikirim :</h1></td>
    </tr>";
echo "<tr style='font-size: 20px;'>
    <td>Panjang</td>
    <td>:</td>
    <td><strong>$panjang</strong></td>
    </tr>";
echo "<tr style='font-size: 20px;'>
    <td>Lebar</td>
    <td>:</td>
    <td><strong>$lebar</strong></td>
    </tr>";
echo "<tr style='font-size: 20px;'>
    <td>Keliling Persegi Panjang</td>
    <td>:</td>
    <td><strong>$keliling</strong></td>
    </tr>";
echo "<tr style='font-size: 20px;'>
    <td>Luas Persegi Panjang</td>
    <td>:</td>
    <td><strong>$luas</strong></td>
    </tr>";
echo "</table>";

?>
