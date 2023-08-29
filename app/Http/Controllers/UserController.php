<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

session_start();
class UserController extends Controller
{
    static $userid;
    public function check()
    {
        $email=$_REQUEST['name'];
        $_SESSION["userid"]=User::whereEmail($email)->first()->id;
        $user=User::find($_SESSION["userid"]);
        $products=Product::get();
        if($_REQUEST['password'] ==12345&&$_REQUEST['name'] =='fatmaebrahim509@gmail.com')
                return view('product/index',['products'=>$products]);
        else if($user)

            return view('home',['products'=>$products, 'user'=>$_SESSION["userid"]]);
        else
            return "Incorrect password..";
    }

    

    public function add($id)
    {
        $quantity=1;
        $product=Product::find($id);
        $products=Product::get();

        DB::table('orders')->insert([
            'user_id' =>  $_SESSION["userid"],
            'product_id' => $id,
            'product_name' => $product->product_name,
            'price' => $product->product_price,
        ]);

        return redirect()->route('home',['products'=>$products, 'user'=>$_SESSION["userid"]]);
    }


    public function profile()
     {
        $user=User::find($_SESSION["userid"]);
        $order=Order::where('user_id',$_SESSION["userid"])->get();
        $user=User::find($_SESSION["userid"]);
        return view('user.profile',['user'=>$user, 'orders'=>$order]);
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products=Product::get();
        $validated=$request->validate([
            'email'=>'required',
            'name'=>'required',
            'password'=>'required',
            'gender'=>'required',
            ]);
        $email=$_REQUEST['email'];
        user::create($request->all());
        $user=User::find($email);
        return view('home',['products'=>$products, 'user'=>$user]);
     }


     function usershow($id)
     {
         $product=Product::find($id);
         return view('user.show',compact('product'));
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
