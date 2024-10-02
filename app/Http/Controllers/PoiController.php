<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use Illuminate\Http\Request;

class PoiController extends Controller
{
    public function index(Poi $poi)
    {
        $all_poi = Poi::where('objek', '=', 'marker')->orWhere('objek', '=', 'polygon')->get();

        return view('poi.index', ['data' => $all_poi]);
    }

    public function form_upload(Poi $poi, $id)
    {
        // echo "<h1>ID : " . $id . "</h1>";[0]
        $selected_data = Poi::where('id', $id)->get();

        return view('poi.dummy_form', ['data' => $selected_data[0]]);
    }

    public function proses_upload(Poi $poi, Request $rekues)
    {
        // print_r($rekues->all());
        $rekues->validate(['image' => 'required|image|mimes:png,jpg,jpeg|max:2048']);

        $nama_file_baru = time() . '.' . $rekues->image->extension();

        $rekues->image->move(public_path('uploaded_images'), $nama_file_baru);

        Poi::where('id', $rekues->id_marker)->update(array('image' => $nama_file_baru));

        return back()->with('success', 'Gambar berhasil diupload.');
    }
}
