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
            'foto' => 'https://www.kompas.com/food/read/2025/12/04/180300275/cara-membuat-klepon-300-gram-tepung-ketan-kenyal-dan-empuk-tanpa-kapur'
        ],

        [
            'id' => 2,
            'nama' => 'Onde-onde',
            'asal' => 'Tionghoa',
            'deskripsi' => 'Onde-onde adalah kue tradisional Indonesia yang terbuat dari adonan tepung ketan yang diisi dengan pasta kacang hijau manis dan dilapisi dengan wijen. Kue ini biasanya berbentuk bulat dan digoreng hingga berwarna keemasan. Onde-onde memiliki rasa manis dan gurih, serta tekstur yang kenyal di luar dan lembut di dalam.',
            'harga' => 3000,
            'foto' => 'https://www.bango.co.id/r/resep-onde-onde-yang-empuk-dan-lembut-untuk-camilan-sore-hari.html/258105'
        ],

        [
            'id' => 3,
            'nama' => 'Serabi',
            'asal' => 'Jawa',
            'deskripsi' => 'Serabi adalah kue tradisional Indonesia yang terbuat dari adonan tepung beras yang dimasak di atas cetakan khusus. Kue ini biasanya berbentuk bulat dan memiliki tekstur yang lembut dan kenyal. Serabi dapat disajikan dengan berbagai topping, seperti gula merah cair, kelapa parut, atau saus kinca.',
            'harga' => 4000,
            'foto' => 'https://food.detik.com/kue/d-5531829/resep-serabi-solo-yang-lembut-harum-kreasi-sasa'
        ]
    ];
}
