<?php

namespace App\Controllers;

//use App\Models\Menu;

class Home extends BaseController
{
    protected $menuModel;

    // public function __construct()
    // {
    //     $this->menuModel = new Menu();
    // }

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
            'title' => 'Homepage | Mantappu Corp ',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | Mantappu Corp'
        ];
        return view('about', $data);
    }

}