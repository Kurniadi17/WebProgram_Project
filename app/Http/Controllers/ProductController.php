<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function create()
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {
        $barang = $request->validate([
            'name' => 'required|max:15',
            'price' => 'required|numeric|min:6000|max:9999999',
            'type' => 'required',
            'color' => 'required',
            'image' =>  'required|image|mimes:jpeg,png,jpg'
          ]);
          $barang['image'] = $request->file('image')->store('img');
          Product::create($barang);
          return redirect('/add-product')->with('success',' Produk berhasil ditambahkan.');
    }

    public function home(){
        $prods = Product::get()->shuffle();
        return view('home',['prods'=>$prods]);
    }

    public function view(){
        $prods = Product::simplePaginate(5);
        return view('view',['prods'=>$prods]);
    }

    public function detail($id){
        $prods = Product::find($id);
        return view('detail',['prods'=>$prods]);
    }

    public function getOldData($id){
        $prods = Product::find($id);
        return view ('updateProduct', ['prods'=>$prods]);
    }

    public function update(Request $request, $id){
        // $prods = $request->validate([
        //     'name' => 'required|max:15',
        //     'price' => 'required|numeric|min:6000|max:9999999',
        //     'type' => 'required',
        //     'color' => 'required',
        //     'image' =>  'required|image|mimes:jpeg,png,jpg'
        //   ]);
          $prods = Product::find($id);
          $prods->name = $request->name;
          $prods->price = $request->price;
          $prods->type = $request->type;
          $prods->color = $request->color;
        //   $brg->color = $request->input('name');
          $prods->image = $request->image= $request->file('image')->store('img');
          $prods->update();
          return back()->with('success','Product Successfully Updated');
    }

    public function delete($id){
        $prods = Product::find($id);
        $prods->delete();
        return redirect('/')->with('success', 'Data successfully deleted!');
        
    }

}
