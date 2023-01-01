<?php

namespace App\Controllers;

use App\Models\Menu;
//use PHPUnit\Util\Json;

class SettingMenu extends BaseController
{
    public function __construct()
    {
        $this->menuModel = new Menu();
    }

    public function index()
    {
        $main = $this->menuModel->main_menu();
        $menus = [];
        foreach ($main as $key => $val) {
            $menus[$key] = $main[$key];
            $menus[$key]['sub'] = $this->menuModel->sub_menu($val['id']);
        }
        $data['menus'] = $menus;
        $data['main']  = $main;
        $judul = [
            'title' => 'Setting | Mantappu Corp'
        ];
        return view('settings/menu/index', $data, $judul);
    }

    public function create()
    {
        // Lakukan Validasi
        $validation = \Config\Services::validation();
        $rules      = ['menu_id' => 'required', 'title' => 'required', 'link' => 'required'];
        $validation->setRules($rules);
        $isDataValid = $validation->withRequest($this->request)->run();

        // Jika Data Valid, Simpan Ke Database
        if ($isDataValid) {
            $this->menuModel->INSERT([
                "menu_id"       => $this->request->getPost('menu_id'),
                "title"         => $this->request->getPost('title'),
                "link"          => $this->request->getPost('link'),
                "icon"          => $this->request->getPost('icon'),
                "menu_level"    => $this->request->getPost('menu_level'),
                "parent_id"     => $this->request->getPost('parent_id'),
                "is_active"     => $this->request->getPost('is_active'),
            ]);
            return redirect('setting/menu');
        }
    }

    public function update($id)
    {
        // Lakukan Validasi
        $validation = \Config\Services::validation();
        $rules      = ['menu_id' => 'required', 'title' => 'required', 'link' => 'required'];
        $validation->setRules($rules);
        $isDataValid = $validation->withRequest($this->request)->run();
        //dd($this->request->getPost());
        // Jika Data Valid, Simpan Ke Database
        if ($isDataValid) {
            $this->menuModel->update($id, [
                "menu_id"       => $this->request->getPost('menu_id'),
                "title"         => $this->request->getPost('title'),
                "link"          => $this->request->getPost('link'),
                "icon"          => $this->request->getPost('icon'),
                "menu_level"    => $this->request->getPost('menu_level'),
                "parent_id"     => $this->request->getPost('parent_id'),
                "is_active"     => $this->request->getPost('is_active'),
            ]);//->WHERE('id', $id);
            // return $this->index();
            //return redirect('setting/menu');
        }
        return redirect('setting/menu');
    }

    public function edit($id)
    {
        $mv = $this->menuModel->find($id);
        return json_encode($mv);
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect('setting/menu');
    }
}