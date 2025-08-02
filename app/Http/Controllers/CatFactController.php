<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CatFactController extends Controller
{
    public function showFact()
    {
        $apiUrl = 'https://catfact.ninja/fact';

        // Lakukan request GET ke API
        $response = Http::get($apiUrl);

        // Siapkan pesan default jika API gagal
        $catFact = "Gagal mengambil fakta kucing saat ini. Silakan coba lagi.";

        // Jika request berhasil, ambil datanya
        if ($response->successful()) {
            // Ambil data JSON dan langsung ekstrak nilai dari kunci 'fact'
            $catFact = $response->json()['fact'];
        }

        // Kirim data (string fakta) ke view
        return view('cat-fact', ['catFact' => $catFact]);
    }
}
