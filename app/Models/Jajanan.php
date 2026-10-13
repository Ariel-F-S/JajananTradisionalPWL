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
                'gambar' => 'https://tse2.mm.bing.net/th/id/OIP.TSf2T1yJ0OvFXt1x7DtwLgHaE7?r=0&pid=Api&h=220&P=0'
            ],
            [
                'id' => 2,
                'nama' => 'Onde-onde',
                'asal' => 'Mojokerto',
                'harga' => 2500,
                'bahan' => 'Tepung ketan, kacang hijau, wijen',
                'deskripsi' => 'Jajanan berbentuk bulat dengan taburan wijen dan isian kacang hijau yang manis.',
                'gambar' => 'https://assets.unileversolutions.com/recipes-v2/258105.jpg'
            ],
            [
                'id' => 3,
                'nama' => 'Getuk',
                'asal' => 'Magelang',
                'harga' => 3000,
                'bahan' => 'Singkong, gula, kelapa',
                'deskripsi' => 'Jajanan tradisional berbahan singkong yang memiliki tekstur lembut dan rasa manis.',
                'gambar' => 'https://tse3.mm.bing.net/th/id/OIP.LUW4eif-E3b5V15Vl4rKzQHaEj?r=0&pid=Api&h=220&P=0'
            ],
            [
                'id' => 4,
                'nama' => 'Lemper',
                'asal' => 'Jawa',
                'harga' => 3000,
                'bahan' => 'Ketan, santan, ayam',
                'deskripsi' => 'Ketan gurih berisi ayam suwir yang biasanya dibungkus menggunakan daun pisang.',
                'gambar' => 'https://tse4.mm.bing.net/th/id/OIP.H9PvqtQdcu4ylSab2BdNOwHaFj?r=0&pid=Api&h=220&P=0'
            ],
            [
                'id' => 5,
                'nama' => 'Kue Lapis',
                'asal' => 'Indonesia',
                'harga' => 2000,
                'bahan' => 'Tepung beras, santan, gula',
                'deskripsi' => 'Kue berlapis dengan warna menarik, tekstur kenyal, dan rasa manis.',
                'gambar' => 'https://tse2.mm.bing.net/th/id/OIP.N5iGnEs18gxp_UKf56s-3AHaFS?r=0&pid=Api&h=220&P=0'
            ],
            [
                'id' => 6,
                'nama' => 'Cenil',
                'asal' => 'Jawa',
                'harga' => 2000,
                'bahan' => 'Tepung tapioka, kelapa, gula',
                'deskripsi' => 'Jajanan kenyal berwarna-warni yang disajikan dengan kelapa parut dan gula.',
                'gambar' => 'https://tse3.mm.bing.net/th/id/OIP.dAehJS_XZT83waFXhgBsKQHaE7?r=0&pid=Api&h=220&P=0'
            ],

            [
                'id' => 7,
                'nama' => 'Kue Cubit',
                'asal' => 'Jakarta',
                'harga' => 3000,
                'bahan' => 'Tepung terigu, telur, gula, susu',
                'deskripsi' => 'Kue mini berbentuk bulat yang biasanya disajikan dengan topping cokelat atau keju.',
                'gambar' => 'https://awsimages.detik.net.id/community/media/visual/2022/06/20/resep-kue-cubit-1_43.jpeg?w=1200'
            ],
            [
                'id' => 8,
                'nama' => 'Bika Ambon',
                'asal' => 'Medan',
                'harga' => 50000,
                'bahan' => 'Tepung sagu, telur, santan, gula',
                'deskripsi' => 'Kue tradisional dari Medan yang memiliki tekstur lembut dan rasa manis.',
                'gambar' => 'https://blog.tokowahab.com/wp-content/uploads/2019/11/Resep-dan-Tips-Kue-Bika-Ambon.jpg'
            ],

            [
                'id' => 9,
                'nama' => 'Rangin',
                'asal' => 'Betawi',
                'harga' => 5000,
                'bahan' => 'Tepung ketan, gula merah, kelapa',
                'deskripsi' => 'Jajanan tradisional Betawi berbentuk bulat dengan isian gula merah dan baluran kelapa parut.',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxny7a3fy46GXGP6wHMRV5iMkAg6k8UQ0YHezgo9rdpV6sYyTmabLUlVsfr1MECMn-xSY64PFiTk8xUMZ3TMi4fkzh4ok2OUgxipI7Eg&s=10'
            ]
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
