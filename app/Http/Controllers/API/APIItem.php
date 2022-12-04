<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APIItem extends Controller
{
    public function getAllItems(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => "Item berhasil didapatkan semua!",
            'data' => Item::get()
        ], 200);
    }

    public function insert(Request $request)
    {
        $fields = $request->validate([
            'item_name' => "required",
            'item_description' => "required",
            'item_price' => "required|numeric|min:1000|bail",
            'item_stock' => "required|numeric|min:1|bail"
        ], [
            'item_name.required' => ':attribute tidak boleh kosong!',
            'item_description.required' => ':attribute tidak boleh kosong!',
            'item_price.required' => ':attribute tidak boleh kosong!',
            'item_price.numeric' => ':attribute harus berupa angka!',
            'item_price.min' => ':attribute minimal Rp 1.000!',
            'item_stock.required' => ':attribute tidak boleh kosong!',
            'item_stock.numeric' => ':attribute harus berupa angka!',
            'item_stock.min' => ':attribute minimal 1!'
        ], [
            'item_name' => 'Nama barang',
            'item_description' => 'Deskripsi barang',
            'item_price' => 'Harga barang',
            'item_stock' => 'Jumlah stok'
        ]);

        $item = Item::create([
            'item_name' => $fields['item_name'],
            'item_description' => $fields['item_description'],
            'item_price' => $fields['item_price'],
            'item_stock' => $fields['item_stock']
        ]);

        return response()->json([
            'success' => true,
            'message' => "Barang " . $item['item_name'] . " berhasil ditambahkan!"
        ], 200);
    }

    public function update(Request $request)
    {
        $fields = $request->validate([
            'item_name' => "required",
            'item_description' => "required",
            'item_price' => "required|numeric|min:1000|bail",
            'item_stock' => "required|numeric|min:1|bail"
        ], [
            'item_name.required' => ':attribute tidak boleh kosong!',
            'item_description.required' => ':attribute tidak boleh kosong!',
            'item_price.required' => ':attribute tidak boleh kosong!',
            'item_price.numeric' => ':attribute harus berupa angka!',
            'item_price.min' => ':attribute minimal Rp 1.000!',
            'item_stock.required' => ':attribute tidak boleh kosong!',
            'item_stock.numeric' => ':attribute harus berupa angka!',
            'item_stock.min' => ':attribute minimal 1!'
        ], [
            'item_name' => 'Nama barang',
            'item_description' => 'Deskripsi barang',
            'item_price' => 'Harga barang',
            'item_stock' => 'Jumlah stok'
        ]);

        $item = Item::where("item_id", $request->item_id)->first();
        $item->item_name = $fields['item_name'];
        $item->item_description = $fields['item_description'];
        $item->item_price = $fields['item_price'];
        $item->item_stock = $fields['item_stock'];
        $item->save();

        return response()->json([
            'success' => true,
            'message' => "Barang " . $item['item_name'] . " berhasil diupdate!"
        ], 200);
    }

    public function delete(Request $request)
    {
        $item = Item::where("item_id", $request->item_id)->first();
        $item->deleted_at = Carbon::now();
        $item->save();

        return response()->json([
            'success' => true,
            'message' => "Barang " . $item['item_name'] . " berhasil dihapus!"
        ], 200);
    }

    public function restore(Request $request)
    {
        $item = Item::where("item_id", $request->item_id)->first();
        $item->deleted_at = null;
        $item->save();

        return response()->json([
            'success' => true,
            'message' => "Barang " . $item['item_name'] . " berhasil direstore!"
        ], 200);
    }


}
