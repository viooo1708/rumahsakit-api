<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        return response()->json(RumahSakit::all());
    }

    public function show($id)
    {
        $rumahsakit = RumahSakit::find($id);
        if (!$rumahsakit) return response()->json(['message' => 'Not found'], 404);
        return response()->json($rumahsakit);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'tipe' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',

        ]);

        $rumahsakit = RumahSakit::create($request->all());
        return response()->json($rumahsakit, 201);
    }

    public function update(Request $request, $id)
    {
        $rumahsakit = RumahSakit::find($id);
        if (!$rumahsakit) return response()->json(['message' => 'Not found'], 404);

        $rumahsakit->update($request->all());
        return response()->json($rumahsakit);
    }

    public function destroy($id)
    {
        $rumahsakit = RumahSakit::find($id);
        if (!$rumahsakit) return response()->json(['message' => 'Not found'], 404);

        $rumahsakit->delete();
        return response()->json(['message' => 'Deleted']);
    }
}

