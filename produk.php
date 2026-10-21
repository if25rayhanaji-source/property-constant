<?php

<?php

class Produk
{
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

    //constructor
    public function __construct(string $kode, string $nama, int $harga, int $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    //method
    public static function persenPajak(): float
    {
        return self::PAJAK * 100;
    }

    public function hitungPajak(): float
    {
        return $this->harga * self::PAJAK;
    }

    public function hitungTotal(): float
    {
        return $this->harga + $this->hitungPajak();
    }

    public function tampil(): void
    {
        echo "Produk: " . $this->nama . "<br/>";
        echo "Harga: Rp. " . $this->harga . "<br/>";
        echo "Stok: " . $this->stok . "<br/>";
        echo "Pajak: " . self::persenPajak() . "%<br/>";
        echo "Total harga setelah pajak: Rp. " . $this->hitungTotal() . "<br/>";
    }
}

//object
$produk = new Produk('P0001', 'laptop', 10000000, 5);

//hasil
$produk->tampil();
?>