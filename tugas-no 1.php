class BangunDatar {
    public function hitungLuas() {
        return "Hitung luas bangun datar.";
    }

    public function hitungKeliling() {
        return "Hitung keliling bangun datar.";
    }
}

class Persegi extends BangunDatar {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return "Luas persegi: " . ($this->sisi * $this->sisi);
    }

    public function hitungKeliling() {
        return "Keliling persegi: " . (4 * $this->sisi);
    }
}

class PersegiPanjang extends BangunDatar {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return "Luas persegi panjang: " . ($this->panjang * $this->lebar);
    }

    public function hitungKeliling() {
        return "Keliling persegi panjang: " . (2 * ($this->panjang + $this->lebar));
    }
}

class Segitiga extends BangunDatar {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return "Luas segitiga: " . (0.5 * $this->alas * $this->tinggi);
    }

    public function hitungKeliling() {
        return "Hitung keliling segitiga.";
    }
}

class Lingkaran extends BangunDatar {
    public $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return "Luas lingkaran: " . (3.14 * $this->jariJari * $this->jariJari);
    }

    public function hitungKeliling() {
        return "Keliling lingkaran: " . (2 * 3.14 * $this->jariJari);
    }
}

// Contoh penggunaan
$persegi = new Persegi(5);
echo $persegi->hitungLuas() . "<br>";
echo $persegi->hitungKeliling() . "<br>";

$persegiPanjang = new PersegiPanjang(4, 6);
echo $persegiPanjang->hitungLuas() . "<br>";
echo $persegiPanjang->hitungKeliling() . "<br>";

$segitiga = new Segitiga(3, 4);
echo $segitiga->hitungLuas() . "<br>";
echo $segitiga->hitungKeliling() . "<br>";

$lingkaran = new Lingkaran(7);
echo $lingkaran->hitungLuas() . "<br>";
echo $lingkaran->hitungKeliling() . "<br>";
