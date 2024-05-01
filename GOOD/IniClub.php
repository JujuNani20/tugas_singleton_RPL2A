<?php

include_once 'Koneksi.php';

class IniClub {
    private static ?IniClub $instance = null;

    private function __construct() {}

    public static function getInstance(): IniClub {
        if (!self::$instance) {
            self::$instance = new IniClub();
        }
        return self::$instance;
    }

    public function IniClub($nama, $negara, $winStreak) {
        try {
            $conn = Koneksi::getInstance();
            $query = "INSERT INTO club (Nama, Negara, WinStreak) VALUES (:nama, :Negara, :WinStreak)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':Negara', $negara);
            $stmt->bindParam(':WinStreak', $winStreak);
            $stmt->execute();
            echo "Data club berhasil disimpan.<br>";
        } catch (PDOException $e) {
            echo 'Gagal menyimpan data club: ' . $e->getMessage() . "<br>";
        }
    }

    private function __clone() {}
}
?>