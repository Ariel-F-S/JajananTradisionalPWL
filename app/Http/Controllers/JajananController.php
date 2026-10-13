<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JajananController extends Controller
{
    private $jajanan = [
        [
            'id' => 1,
            'nama' => 'Klepon',
            'asal' => 'Jawa',
            'deskripsi' => 'Klepon adalah kue tradisional Indonesia yang terbuat dari tepung ketan yang diisi dengan gula merah cair dan dilapisi dengan parutan kelapa. Kue ini biasanya berbentuk bulat dan berwarna hijau karena menggunakan daun pandan sebagai pewarna alami. Klepon memiliki rasa manis dan kenyal, serta aroma harum dari kelapa dan pandan.',
            'harga' => 5000,
        ]
    ];
}
