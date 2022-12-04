<?php

namespace App\Controllers;

class Pages extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

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

    public function profile()
    {
        $data = [
            'title' => "(pembeli) | MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/profilpembeli', $data);
    }
    public function editprofile()
    {
        $data = [
            'title' => "Edit Profil | MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/editprofilpembeli', $data);
    }
    public function editpassword()
    {
        $data = [
            'title' => "Edit Password | MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/seller/editpassword', $data);
    }
    public function resetpassword()
    {
        $data = [
            'title' => "Reset Password | MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/seller/resetpassword', $data);
    }

    public function myorder()
    {
        $data = [
            'title' => "Daftar Pesanan | MyDanus",
            'myorder' => "active"
        ];
        echo view('mydanus/pesanansaya', $data);
    }
    public function showorder()
    {
        $data = [
            'title' => "Detail Pesanan | MyDanus",
            'myorder' => "active"
        ];
        echo view('mydanus/tampilpesanan', $data);
    }
    public function complaint()
    {
        $data = [
            'title' => "Ajukan Keluhan | MyDanus",
            'complaint' => "active"
        ];
        echo view('mydanus/keluhan', $data);
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
            'title' => "(Categories)  | MyDanus", //menyesuaikan kategori
        ];
        echo view('mydanus/categories', $data);
    }

    public function product()
    {
        $data = [
            'title' => "(produk)  | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/productdetail', $data);
    }

    public function checkout()
    {
        $data = [
            'title' => "Checkout | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/checkout', $data);
    }

    public function paymentMethod()
    {
        $data = [
            'title' => "Payment Method | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/paymentMethod', $data);
    }
    public function confirmation()
    {
        $data = [
            'title' => "Konfirmasi pembayaran | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/confirmation', $data);
    }


    public function profilMerchant()
    {
        $data = [
            'title' => "(toko)  | MyDanus", //menyesuaikan nama ukm/himada
        ];
        echo view('mydanus/profilMerchant', $data);
    }

    // Seller section 
    public function dashboardSeller()
    {

        $data = [
            'title' => " Dashboard (penjual) | MyDanus", //menyesuaikan nama ukm/himada
            'dashboard' => "active"
        ];
        echo view('mydanus/seller/dashboardSeller', $data);
    }
    public function productSeller()
    {

        $data = [
            'title' => " Dashboard (penjual) | MyDanus", //menyesuaikan nama ukm/himada
            'dashboard' => "active"
        ];
        echo view('mydanus/seller/productdetailSeller', $data);
    }

    public function editSeller()
    {

        $data = [
            'title' => " Edit Profile | MyDanus",
        ];
        echo view('mydanus/seller/editSeller', $data);
    }

    public function profileSeller()
    {

        $data = [
            'title' => " Profile (penjual) | MyDanus", //menyesuaikan nama ukm/himada
            'profile' => "active",
            'profileSeller' => "activeside"
        ];
        echo view('mydanus/seller/profileSeller', $data);
    }

    public function addProduct()
    {

        $data = [
            'title' => " Tambah Produk | MyDanus",
            'addProduct' => "activeside"
        ];
        echo view('mydanus/seller/addProduct', $data);
    }

    public function manageProduct()
    {

        $data = [
            'title' => " Kelola Produk | MyDanus",
            'manageProduct' => "activeside"
        ];
        echo view('mydanus/seller/manageProduct', $data);
    }

    public function editProduct()
    {

        $data = [
            'title' => " Edit Produk | MyDanus",
            'manageProduct' => "activeside"
        ];
        echo view('mydanus/seller/editProduct', $data);
    }

    public function orderSeller()
    {

        $data = [
            'title' => " Daftar Pesanan | MyDanus",
            'orderSeller' => "activeside"
        ];
        echo view('mydanus/seller/orderSeller', $data);
    }

    public function complaintSeller()
    {

        $data = [
            'title' => " Ajukan Keluhan | MyDanus",
            'complaintSeller' => "activeside"
        ];
        echo view('mydanus/seller/complaintSeller', $data);
    }

    //  Admin section 
    public function dashboardAdmin()
    {

        $data = [
            'title' => " Dashboard Admin | MyDanus",
            'dashboard' => "active"

        ];
        echo view('mydanus/admin/dashboardAdmin', $data);
    }
    public function profileAdmin()
    {

        $data = [
            'title' => " Profile Admin | MyDanus",
            'profileAdmin' => "activeside"

        ];
        echo view('mydanus/admin/profileAdmin', $data);
    }
    public function editAdmin()
    {

        $data = [
            'title' => " Edit Profile Admin | MyDanus",
            'editAdmin' => "activeside"

        ];
        echo view('mydanus/admin/editAdmin', $data);
    }
    public function addAccount()
    {

        $data = [
            'title' => " Tambah Akun Penjual | MyDanus",
            'addAccount' => "activeside"

        ];
        echo view('mydanus/admin/addAccount', $data);
    }
    public function confirmProduct()
    {

        $data = [
            'title' => " Konfirmasi Produk | MyDanus",
            'confirmProduct' => "activeside"

        ];
        echo view('mydanus/admin/confirmProduct', $data);
    }
    public function complaintList()
    {

        $data = [
            'title' => "Daftar Keluhan | MyDanus",
            'complaintList' => "activeside"

        ];
        echo view('mydanus/admin/complaintList', $data);
    }
    public function complaintDetail()
    {

        $data = [
            'title' => "Detail Keluhan | MyDanus",
            'complaintList' => "activeside"

        ];
        echo view('mydanus/admin/complaintDetail', $data);
    }
    public function sellerList()
    {
        $data = [
            'title' => "Daftar Penjual | MyDanus",
            'sellerList' => "activeside"

        ];
        echo view('mydanus/admin/sellerList', $data);
    }public function buyerList()
    {
        $data = [
            'title' => "Daftar Pembeli | MyDanus",
            'buyerList' => "activeside"

        ];
        echo view('mydanus/admin/buyerList', $data);
    }
}
