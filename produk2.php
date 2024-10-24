<?php
class Produk {
    public $namaProduk;
    public $jenisProduk;
    public $jumlahProduk;
    public $stok;
    public $pembelian;
    public $nama;
    public $harga;
    public $barcode;
    public $expired;

    //Constructor untuk inisialisasi properties/atribut
    public function __construct($namaProduk = '', $jenisProduk = '', $jumlahProduk = 0, $stok = 0, $pembelian = 0) {
        $this->namaProduk = $namaProduuk;
        $this->jenisProduk = $jenisProduk;
        $this->jumlahProduk = $jumlahProduk;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->barcode = $barcode;
        $this->expired = $expired;
    }

    public function stokAkhirProduk () {
        //menghitung hasil akhir stok
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }

}

//Inisialisasi variabel untuk perhitungan stok
$Stokakhir = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Membentuk instance/objek baru dari class produk
    $panggilProduk = new Produk ();
    $panggilProduk -> stok = intval($_POST['stok']);
    $panggilProduk -> pembelian = intval($_POST['pembelian']);

    //perhitungan akhir sebuah produk
    $Stokakhir = $panggilProduk->stokAkhirProduk();
}
?>