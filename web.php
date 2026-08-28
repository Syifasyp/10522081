<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa', function () {

    $data = [
        'nama' => 'Syifa Yuliantina',
        'nim' => '10522081',
        'jurusan' => 'Sistem Informasi',
        'kelas' => 'IS-3'
    ];

    return view('mahasiswa', $data);
});

Route::get('/matakuliah', function () {

    $nama_mk = 'Pemrograman Web';
    $dosen = 'Pak Andi';
    $sks = 3;

    return view('matakuliah', compact('nama_mk','dosen','sks'));
});

Route::get('/produk', function () {

    $nama_produk = 'Laptop Asus';
    $harga = 8500000;
    $stok = 12;

    return view('produk', compact('nama_produk','harga','stok'));
});