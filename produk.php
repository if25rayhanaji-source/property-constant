<?php

class Produk {
    // Property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor untuk inisialisasi data
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method untuk menampilkan informasi sesuai format
    public function tampilkanInfo() {
        $totalHargaSetelahPajak = $this->harga + ($this->harga * self::PAJAK);
        $persenPajak = self::PAJAK * 100;

        echo "Produk: {$this->nama}\n";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "\n";
        echo "Stok: {$this->stok}\n";
        echo "Pajak: {$persenPajak}%\n";
        echo "Total harga setelah pajak: Rp" . number_format($totalHargaSetelahPajak, 0, ',', '.') . "\n";
    }
}

// Instansiasi objek Produk sesuai contoh
$produk1 = new Produk("P001", "Laptop", 10000000, 5);
$produk1->tampilkanInfo();

?>