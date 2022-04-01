<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

/**
 * Generated By GZeinNumerCodeGenerator
 * www.github.com/gzeinnumer
 * at 2022-04-01 15:18:27
 * zip name 20220401151709_K8U7cXP2NnI.zip
 */

class ProductController extends Controller
{
    //list
    public function index()
    {
        $data = ProductModel::all();
        $sent = [
            'data' => $data
        ];
        return view('product.index', $sent);
    }

    //add
    public function create(Request $r)
    {
        $data = new ProductModel();
        $data->name = $r->name;
        $data->trans_date = $r->trans_date;
        $data->volume = $r->volume;
        $data->save();
        
        return redirect('/product')->with('sukses','Success Insert Data');
    }

    //detail
    public function find($id)
    {
        $find = ProductModel::find($id);
        $data = ProductModel::all();
        $sent = [
            'data' => $data,
            'find' => $find
        ];
        return view('product.index', $sent);
    }

    //update
    public function find_update($id)
    {
        $update = ProductModel::find($id);
        $data = ProductModel::all();
        $sent = [
            'data' => $data,
            'update' => $update
        ];
        return view('product.index', $sent);
    }

    public function update(Request $r)
    {
        $data = ProductModel::find($r->id);
        $data->update($r->all());
        return redirect('/product')->with('sukses','Success Update Data');
    }

    //delete
    public function find_delete($id)
    {
        $delete = ProductModel::find($id);
        $data = ProductModel::all();
        $sent = [
            'data' => $data,
            'delete' => $delete
        ];
        return view('product.index', $sent);
    }

    public function delete(Request $r)
    {
        $data = ProductModel::find($r->id);
        $data->delete();
        return redirect('/product')->with('sukses','Success Delete Data');
    }
}
