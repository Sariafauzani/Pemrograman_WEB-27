<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ]
                ]
            ],
            [
                "nama" => "Kuliner",
            ],
            [
                "nama" => "Hiburan",
            ],
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item['nama'];
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); // Panggil fungsi rekursif untuk sub-menu
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>