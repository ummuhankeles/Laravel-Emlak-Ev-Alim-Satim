<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id','title', 'image', 'price', 'description')->limit(3)->get();
        $daily = Product::select('id','title', 'image', 'price', 'description')->inRandomOrder()->get();
        //$last = Product::select('id','title', 'image', 'price')->limit(3)->orderByDesc('id')->get();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'page' => 'home'
        ];

        return view('home.index', $data);
    }

    public function product($id)
    {
        $data = Product::find($id);
        $datalist = Image::where('home_id', $id)->get();
        return view('home.product_detail', ['data' => $data, 'datalist' => $datalist]);
    }

    public function categoryproducts($id)
    {
        $data = Category::find($id);
        $slider = Product::select('id','title', 'image', 'price', 'description')->limit(4)->get();
        $datalist = Product::where('category_id', $id)->get();
        return view('home.category_products', ['data' => $data, 'datalist' => $datalist, 'slider' => $slider]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function reference()
    {
        $setting = Setting::first();
        return view('home.reference', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız kaydedilmiştir. Teşekkür ederiz.');
    }

}
