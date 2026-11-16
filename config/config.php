<?php
/**
 * ============================================================
 * LZFJ Shoes Store - KONFIGURASI
 * ============================================================
 */

return [
    // Alamat website TANPA garis miring di akhir.
    // Kosong = otomatis untuk localhost.
    'base_url' => '',

    // ---------- Database MySQL ----------
    'db' => [
        'host'     => getenv('DB_HOST') ?: '127.0.0.1',
        'port'     => getenv('DB_PORT') ?: 3306,
        'name'     => getenv('DB_NAME') ?: 'lzfj_shoes_store',
        'user'     => getenv('DB_USER') ?: 'root',
        'password' => getenv('DB_PASSWORD') ?: '',
    ],

    // ---------- Login dengan Google ----------
    'google' => [
        'client_id' => getenv('GOOGLE_CLIENT_ID') ?: '',
        'client_secret' => getenv('GOOGLE_CLIENT_SECRET') ?: '',

        // Kosongkan agar otomatis:
        // {base_url}/google-callback.php
        'redirect_uri' => '',
    ],

    // ---------- Midtrans ----------
    'midtrans' => [
        'is_production' => false,

        'server_key' => getenv('MIDTRANS_SERVER_KEY') ?: '',
        'client_key' => getenv('MIDTRANS_CLIENT_KEY') ?: '',
    ],

    // ---------- Ongkos kirim ----------
    'shipping' => [
        'regular' => 25000,
        'express' => 50000,
    ],

    // Gratis ongkir jika subtotal >= nilai ini.
    // 0 = nonaktif.
    'free_shipping_min' => 0,

    // ---------- Informasi toko ----------
    'store' => [
        'name' => 'LZFJ Shoes Store',

        // Format internasional tanpa +, spasi, atau -
        'whatsapp' => '82236076251',
    ],
];