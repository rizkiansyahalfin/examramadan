<!-- ### Soal 2

Diberikan array berikut:

```php
$orang = [
    [
        'nama' => 'John Doe',
        'umur' => '25 tahun',
        'jenis_kelamin' => 'L'
    ],
    [
        'nama' => 'Jane Doe',
        'umur' => '30 tahun',
        'jenis_kelamin' => 'P'
    ],
    [
        'nama' => 'Bob Smith',
        'umur' => '20 tahun',
        'jenis_kelamin' => 'L'
    ]
];
```

Buatlah sebuah **fungsi** di PHP yang dapat **mengubah (casting) data pada array tersebut**, dengan ketentuan:

1. Ubah data `umur` dari string seperti `'25 tahun'` menjadi angka **integer** `25`.
2. Ubah data `jenis_kelamin` dari `'L'` dan `'P'` menjadi:
   - `'L'` → `'Laki-laki'`
   - `'P'` → `'Perempuan'`
3. Fungsi harus mengembalikan array baru dengan data yang sudah dimodifikasi. -->

<?php

$orang = [
    [
        'nama' => 'John Doe',
        'umur' => '25 tahun',
        'jenis_kelamin' => 'L'
    ],
    [
        'nama' => 'Jane Doe',
        'umur' => '30 tahun',
        'jenis_kelamin' => 'P'
    ],
    [
        'nama' => 'Bob Smith',
        'umur' => '20 tahun',
        'jenis_kelamin' => 'L'
    ]
];

function konversiDataOrang(array $data) {
    $hasil = [];

    foreach ($data as $item) {
        $umurInt = (int) filter_var($item['umur'], FILTER_SANITIZE_NUMBER_INT);

        $jenisKelamin = $item['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan';

        $hasil[] = [
            'nama' => $item['nama'],
            'umur' => $umurInt,
            'jenis_kelamin' => $jenisKelamin
        ];
    }

    return $hasil;
}

// Tes fungsi
$dataBaru = konversiDataOrang($orang);
print_r($dataBaru);
?>
