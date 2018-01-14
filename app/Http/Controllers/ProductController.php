<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

	/**
	 * ham hien thi danh sach san pham
	 * @return [type] [description]
	 */
	public function index() {

		$products = Product::get();

		return view('products.index', ['products' => $products]);

	}

	/**
	 * ham tra ve view tao moi san pham
	 * 
	 * @return [type] [description]
	 */
    public function create() {
    	return view('products.create');
    }

    /**
     * them moi san pham vao database
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(ProductRequest $request) {


    	$data = $request->all();

    	// dd($data);

    	$product = Product::create($data); //save to database

    	return $product;

    	// return redirect('products')->with('success', 'Thêm thành công');


    }
}
