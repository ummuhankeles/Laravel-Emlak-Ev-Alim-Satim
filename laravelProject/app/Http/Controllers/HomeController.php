<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
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
        return view('home.index', ['setting' => $setting, 'page' => 'home']);
        //'page' => 'home'
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
