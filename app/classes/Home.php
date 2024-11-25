<?php

namespace App\classes;
use App\classes\Student;
use App\classes\Product;
use App\classes\Blog;
class Home
{
    public $student, $students = [], $product, $products = [], $blog, $blogs = [];

    public function index()
    {
        $this->student  = new Student();
        $this->students = $this->student->getAllStudent();

        $this->product  = new Product();
        $this->products = $this->product->getAllProduct();

        $this->blog  = new Blog();
        $this->blogs = $this->blog->getAllBlog();

        return view('home',  [
            'students'  => $this->students,
            'products'  => $this->products,
            'blogs'     => $this->blogs
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function portfolio()
    {
        return view('portfolio');
    }
}