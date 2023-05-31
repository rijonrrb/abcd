<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sold;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Session;


class ProductController extends Controller
{
    public function ProductSubmit(Request $request){

        $validate = $request->validate([
              "name"=>'required',
              'category'=>'required',
              'description'=>'required',
              'price'=>'required',
              
          ]
      );

  
          $Product = new Product();
          $Product->name = $request->name;
          $Product->category = $request->category;
          $Product->description = $request->description;
          $Product->price = $request->price;
          $result = $Product->save();
          if($result){
            return redirect()->back()->with('success', 'Product added');
          }
          else{
              return redirect()->back()->with('failed', 'There is a problem in Product adding');
          }
    }
    public function buyproduct(Request $request){

          $Product = new Sold();
          $Product->pname = $request->pname;
          $Product->pcategory = $request->pcategory;
          $Product->pdescription = $request->pdescription;
          $Product->pprice = $request->pprice;
          $Product->sid = Session::getid();
          $result = $Product->save();
          if($result){
            return redirect()->back();
          }
    }
    public function Productlist(){
        $count = Sold::where('sid',Session::getId())->count();
        $lastProducts = Product::paginate(8);
        return view('welcome')->with('lastProducts', $lastProducts)->with('count', $count);
    }
    public function cart(){   
        $Products = Sold::where('sid',Session::getId())->get();
        return view('cart')->with('Products', $Products);
    }
    public function deletecart(Request $request){   
        $result = Sold::where('id',$request->id)->delete();
        if($result)
        {
            return redirect()->back();
        }
        
    }

}
