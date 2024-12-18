<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Programmer;

class FrontController extends Controller
{
    //
    public function index()
    {
        // mengambil tanggal sesuai sistem
        $currentDate = \Carbon\Carbon::now()->format('jS F, Y'); // Format: 21st Februari, 2024

        // Ambil semua data koleksi
        $collections = Collection::with('category')->get(); // Jika ingin memuat relasi dengan kategori
        
        $programmers = Programmer::all();
        // Kirim data koleksi ke view front.index
        return view('front.index', compact('collections', 'currentDate', 'programmers'));
    }
    public function about()
    {
        return view('front.about'); // Mengarahkan ke file about.blade.php di dalam folder views/front
    }
    public function gallery()
    {
        // Mengambil koleksi dengan hanya field gambar
        $collections = Collection::select('image')->whereNotNull('image')->get();

        // Mengirimkan data gambar koleksi ke view
        return view('front.gallery', compact('collections'));
    }
    
}
