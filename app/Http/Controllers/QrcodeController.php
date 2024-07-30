<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    public function index($id)
    {
        $datas = Qrcode::where('penanda_url', $id)->first();
        // dd($data);
        return view('welcome', compact('datas'));
    }
}
