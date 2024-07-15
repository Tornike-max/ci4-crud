<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class ProductController extends BaseController
{
    public function index()
    {
        return view('products/index');
    }

    public function show($product)
    {

        $data['name'] = $product;

        $data['product_list'] = ['Iphone', 'Samsung', 'Xiaomi', 'Huawei'];
        return view('products/show', $data);
    }
}
