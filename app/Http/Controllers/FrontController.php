<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;


class FrontController extends Controller
{
    //
    public function index()
    {
        // mengambil tanggal sesuai sistem
        $currentDate = \Carbon\Carbon::now()->format('jS F, Y'); // Format: 21st Februari, 2024

        // Ambil semua data koleksi
        $collections = Collection::with('category')->get(); // Jika ingin memuat relasi dengan kategori

        // Kirim data koleksi ke view front.index
        return view('front.index', compact('collections', 'currentDate'));
    }
    public function about()
    {
        return view('front.about'); // Mengarahkan ke file about.blade.php di dalam folder views/front
    }
    public function gallery()
    {
        return view('front.gallery'); // Mengarahkan ke file about.blade.php di dalam folder views/front
    }
}