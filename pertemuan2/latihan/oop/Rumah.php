<?php

class Rumah {

    // Property
    public $warnaCat = "Hijau";
    public $jmlKamar = 10;
    public $alamat = "jl. Gegerkalong";

    // Method
    public function __construct($warnaCat, $jmlKamar)
    {
        $this->warnaCat = $warnaCat;
        $this->jmlKamar = $jmlKamar;
    }

    public function kunciPintu()
    {
        return "Rumah ini Dikunci";
    } 

    public function gantiWarna($warnaCat)
    {
        $this->warnaCat = $warnaCat;
    }
}

function pasangListrik(Rumah $rumah)
{
    return "Rumah ini dipasang listrik, rumah yang berwarna " . 
    $rumah->warnaCat;
}

$rumahAndi = new Rumah('Biru', 3);
echo pasangListrik($rumahAndi);
echo "<br>";

// Rumah Saya
$rumahSaya = new Rumah('Kuning', 9);
echo "Rumah Saya: "  . $rumahSaya->warnaCat; 
echo "<br>";
echo "Jumlah Kamar: " . $rumahSaya->jmlKamar;
echo "<br><br>";

// Rumah Tetangga
$rumahTetangga = new Rumah('Hijau', 5);
echo "Rumah Tetangga: " . $rumahTetangga->warnaCat;
echo "<br>";
echo "Jumlah Kamar: " . $rumahTetangga->jmlKamar;

?>