<?php 
namespace App\Controllers;

class CategoriesController extends BaseController{
    public function index(){
        view('admin/categories/create_categories');
    }
}