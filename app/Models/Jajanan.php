<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jajanan extends Model
{
     public static function semua()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Klepon',
                'asal' => 'Jawa',
                'harga' => 2000,
                'bahan' => 'Tepung ketan, gula merah, kelapa',
                'deskripsi' => 'Kue tradisional berbentuk bulat berwarna hijau dengan isian gula merah dan baluran kelapa parut.',
                'gambar' => 'https://placehold.co/600x400/F0E6D2/654321?text=Klepon'
            ],
            [
                'id' => 2,
                'nama' => 'Onde-onde',
                'asal' => 'Mojokerto',
                'harga' => 2500,
                'bahan' => 'Tepung ketan, kacang hijau, wijen',
                'deskripsi' => 'Jajanan berbentuk bulat dengan taburan wijen dan isian kacang hijau yang manis.',
                'gambar' => 'https://placehold.co/600x400/F0E6D2/654321?text=Onde-onde'
            ],
            [
                'id' => 3,
                'nama' => 'Getuk',
                'asal' => 'Magelang',
                'harga' => 3000,
                'bahan' => 'Singkong, gula, kelapa',
                'deskripsi' => 'Jajanan tradisional berbahan singkong yang memiliki tekstur lembut dan rasa manis.',
                'gambar' => 'https://placehold.co/600x400/F0E6D2/654321?text=Getuk'
            ],
            [
                'id' => 4,
                'nama' => 'Lemper',
                'asal' => 'Jawa',
                'harga' => 3000,
                'bahan' => 'Ketan, santan, ayam',
                'deskripsi' => 'Ketan gurih berisi ayam suwir yang biasanya dibungkus menggunakan daun pisang.',
                'gambar' => 'https://placehold.co/600x400/F0E6D2/654321?text=Lemper'
            ],
            [
                'id' => 5,
                'nama' => 'Kue Lapis',
                'asal' => 'Indonesia',
                'harga' => 2000,
                'bahan' => 'Tepung beras, santan, gula',
                'deskripsi' => 'Kue berlapis dengan warna menarik, tekstur kenyal, dan rasa manis.',
                'gambar' => 'https://placehold.co/600x400/F0E6D2/654321?text=Kue+Lapis'
            ],
            [
                'id' => 6,
                'nama' => 'Cenil',
                'asal' => 'Jawa',
                'harga' => 2000,
                'bahan' => 'Tepung tapioka, kelapa, gula',
                'deskripsi' => 'Jajanan kenyal berwarna-warni yang disajikan dengan kelapa parut dan gula.',
                'gambar' => 'https://placehold.co/600x400/F0E6D2/654321?text=Cenil'
            ],
        ];
    }

    public static function cari($id)
    {
        foreach (self::semua() as $jajanan) {
            if ($jajanan['id'] == $id) {
                return $jajanan;
            }
        }

        return null;
    }
}
