<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;
use App\events;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function home2()
    {
        return view("home2");
    }

    public function landing_page()
    {
        $content = content::all();

        foreach ($content as $row) {
            echo $row->content_name . " : " . $row->title . " <br> ";
        }

        $content = content::where('content_name', 'sosial_1')->get();

        $content = content::select('id_content')
            ->where('content_name', 'LIKE', '%sosial%')
            ->orderby('id_content', 'DESC')
            ->first();

        $content = content::where('id_content', 12)->first();

        $content = content::firstWhere('id_content', 1);

        $content = content::where('id_content', '>', 12)->firstOrFail();

        $content = content::where('id_content', '>', 12)->firstOrCreate(
            ['content_name' => 'image_slider'],
            ['title' => 1, 'path_img' => 'gambar.jpg', 'status' => 1]
        );

        $count = content::where('updated_at', '=', null)->count();
        $max = content::max('id_content');

        $content = content::find(1);
        $content->content_name = 'title_atas';
        $content->save();

        $content = content::where('id', 1)
            ->update(
                ['status' => 1]
            );

        // echo $content->id_content;

        dd($content);
        return view("content-landing-page");
    }

    public function karyawan()
    {
        $content = content::all();
        return view('dashboard-karyawan');
    }

}