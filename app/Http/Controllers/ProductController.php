<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Model\User;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    public function create()
    {
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();

        return view('addProduct', compact('count'));
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

        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();

        return view('home',['prods'=>$prods], compact('count'));
    }

    public function view(){
        $prods = Product::simplePaginate(5);
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();
        return view('view',['prods'=>$prods], compact('count'));
    }

    public function detail($id){
        $prods = Product::find($id);
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();
        return view('detail',['prods'=>$prods], compact('count'));
    }

    public function getOldData($id){
        $prods = Product::find($id);
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();
        return view('updateProduct', ['prods'=>$prods], compact('count'));
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
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();

        $prods = Product::find($id);
        $prods->delete();
        return redirect('/')->with('success', 'Data successfully deleted!');
        
    }

    public function addcart(Request $request,$id){
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();

        if(Auth::id()){
            $user_id = Auth::id();
            $furnitureid=$id;

            $cart= new cart;

            $cart->user_id=$user_id;
            $cart->furniture_id=$furnitureid;
            $cart->quantity=1;

            $cart->save();

            return redirect()->back();
        }
        else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request,$id){
        $user_id = Auth::id();
        $count=cart::where('user_id',$user_id)->count();

        $cart=cart::where('user_id',$id)->join('products', 'carts.furniture_id', '=', 'products.id')->get();
        return view('showcart', compact('count', 'cart'));
    }
    public function increQuantity(Request $request){
        $cart=cart::find($request->id);
        $cart->quantity+=1;
        $cart->save();
        return redirect()->back();
    }
    public function decreQuantity(Request $request){
        $cart=cart::find($request->id);
        if($cart->quantity > 1){
            $cart->quantity-=1;
            $cart->save();
        }
        return redirect()->back();
    }
}
