<?php

namespace App\Controllers;

use App\Models\Menu;

class Pages extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new Menu();
    }

    public function index()
    {
        // Tracking Data
        // $main = $this->menuModel->main_menu();
        // $menus = [];

        // foreach($main as $menu){
        //     $menu['sub'] = $this->menuModel->sub_menu($menu['id']);
        //     $menus[] = $menu;
        // }
        // // $sub = $this->menuModel->sub_menu();
        // dd($menus);
        $data = [
            'title' => 'Homepage | Mantappu Corp'
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us | Mantappu Corp'
        ];
        return view('about', $data);
    }

    public function service()
    {
        $data = [
            'title' => 'Services | Mantappu Corp'
        ];
        return view('service', $data);
    }

    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio | Mantappu Corp'
        ];
        return view('portfolio', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog | Mantappu Corp'
        ];

        return view('blog', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Mantappu Corp'
        ];
        return view('contact', $data);
    }
}