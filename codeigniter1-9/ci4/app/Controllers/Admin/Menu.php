<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function select()
    {
        echo "Untuk menampilkan data";
    }

    public function update($id=null,$nama=null){
        echo "Untuk update data dengan id : $id $nama";
    }
}
