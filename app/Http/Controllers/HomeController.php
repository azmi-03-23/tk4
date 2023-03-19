<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function show(): View
    {
        // Only return homepage view
        // And using static data
        return view('homepage', [
            'pakets' => [
                [
                    'nama' => 'Teori',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.',
                    'harga' => 'IDR 150.000',
                ],
                [
                    'nama' => 'Teori+Praktik',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.',
                    'harga' => 'IDR 1.500.000',
                ],
                [
                    'nama' => 'SIM',
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna.',
                    'harga' => 'IDR 2.500.000',
                ],
            ],
            'trainers' => [
                [
                    'nama' => 'Junaedi',
                    'pengalamans' => [
                        'coach di seminar nyetir mobil mainan sedunia',
                        'ngajarin anak umur 2 tahun nyetir bombom car',
                    ],
                ],
                [
                    'nama' => 'Junaedi',
                    'pengalamans' => [
                        'coach di seminar nyetir mobil mainan sedunia',
                        'ngajarin anak umur 2 tahun nyetir bombom car',
                    ],
                ],
                [
                    'nama' => 'Junaedi',
                    'pengalamans' => [
                        'coach di seminar nyetir mobil mainan sedunia',
                        'ngajarin anak umur 2 tahun nyetir bombom car',
                    ],
                ],
            ],
            'kendaraans' =>  [
                [
                    'nama' => 'Honda Mobilio',
                    'tipe' => 'Matic',
                    'deskripsi' => 'https://www.oto.com/mobil-baru/honda/mobilio/e-cvt',
                ],
                [
                    'nama' => 'Honda Mobilio',
                    'tipe' => 'Manual',
                    'deskripsi' => 'https://www.oto.com/mobil-baru/honda/mobilio',
                ],
            ],
            'jadwals' => [
                [
                    'hari' => 'Monday',
                    'jams' => [
                        '13:00 to 17:00',
                        '09:00 to 11:30',
                    ],
                    'trainers' => [
                        'Budi Sadikin',
                        'Sahid',
                    ],
                    'kendaraan' => 'Grup A',
                ],
                [
                    'hari' => 'Wednesday',
                    'jams' => [
                        '13:00 to 15:00',
                        '09:00 to 11:30',
                    ],
                    'trainers' => [
                        'Syamsuddin',
                        'Sahid',
                    ],
                    'kendaraan' => 'Grup B',
                ],

                [
                    'hari' => 'Friday',
                    'jams' => [
                        '13:00 to 15:00',
                        '08:30 to 11:30',
                    ],
                    'trainers' => [
                        'Junaedi',
                        'Ahmad',
                    ],
                    'kendaraan' => 'Grup C'
                ],
            ]
        ]);
    }
}
