<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        $data = [
            'title' => "Login | MyDanus"
        ];
        echo view('mydanus/login', $data);
    }

    public function registration()
    {
        $data = [
            'title' => " Registration | MyDanus"
        ];
        echo view('mydanus/registration', $data);
    }

    public function home()
    {
        $data = [
            'title' => "MyDanus",
            'beranda' => "active"
        ];
        echo view('mydanus/home', $data);
    }

    public function userprofile()
    {
        $data = [
            'title' => "MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/home', $data);
    }

    public function search()
    {
        $data = [
            'title' => "Search result | MyDanus", //bisa diganti cari (keyword) | MyDanus (??)
        ];
        echo view('mydanus/search', $data);
    }

    public function categories()
    {
        $data = [
            'title' => "(Categories)  | MyDanus", //menyesuaikan kategori apa (??)
        ];
        echo view('mydanus/categories', $data);
    }

    public function product()
    {
        $data = [
            'title' => "(produk)  | MyDanus", //menyesuaikan produk apa (??)
        ];
        echo view('mydanus/productdetail', $data);
    }
}
