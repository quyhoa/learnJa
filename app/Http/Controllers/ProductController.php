<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::paginate(5);
		return view('product.list')->with(['products'=>$products]);
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		// dd(config('constants.ACTUAL_UPLOADS_IMAGE'));
		$categorys = Category::all('id','name');
		return view('product.create',compact('categorys'));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{

		if (Input::file('image')->isValid()) {
	      	$destinationPath = 'uploads'; // upload path
		    $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
		    $fileName = date('dmYHis').'.'.$extension; // renameing image
		    $upload = Input::file('image')->move(config('constants.ACTUAL_UPLOADS_IMAGE'), $fileName); // uploading file to given path
		    if($upload)
		    {
		    	$product = new Product();
			    $product->category_id = $request->category_id;
			    $product->user_id = 1;
			    $product->name = $request->name;
			    $product->intro = $request->intro;
			    $product->content = $request->content;
			    $product->price = $request->price;
			    $product->slug = $this->make_slug($request->name);
			    $product->image = config('constants.ACTUAL_UPLOADS_IMAGE_SOTF').$fileName;
		    	if(!$product->save())
			    {	
			    	// delete file
				    if(File::exists(config('constants.ACTUAL_UPLOADS_IMAGE').$fileName))
				    {
				    	File::delete(config('constants.ACTUAL_UPLOADS_IMAGE').$fileName);
				    }else{
				    	return 'file not found!';
				    }
			    	
			    }
		    }else{
		    	return "upload fails";
		    }
	    }	    	    	    
	    return redirect()->route('product.index');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);
		$categorys = Category::all('id','name');
		return view('product.edit')->with([
			'product'=>$product,
			'categorys'=>$categorys
			]);
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProductUpdateRequest $request)
	{
		// dd(Input::file('image'));
		$product = Product::findOrFail($id);
	    $product->category_id = $request->category_id;
	    $product->user_id = 1;
	    $product->name = $request->name;
	    $product->intro = $request->intro;
	    $product->content = $request->content;
	    $product->price = $request->price;
	    $product->slug = $this->make_slug($request->name);
	    if (!empty(Input::file('image')) && Input::file('image')->isValid())
	    {
	    	// handle upload
	    	$extension 	= Input::file('image')->getClientOriginalExtension(); // getting image extension
		    $fileName 	= date('dmYHis').'.'.$extension; // renameing image
		    $upload 	= Input::file('image')->move(config('constants.ACTUAL_UPLOADS_IMAGE'), $fileName); // uploading file to given path		    
		    $product->image = config('constants.ACTUAL_UPLOADS_IMAGE_SOTF').$fileName;
		    // $request->image = config('constants.ACTUAL_UPLOADS_IMAGE_SOTF').$fileName;
		    // $input['image'] = config('constants.ACTUAL_UPLOADS_IMAGE_SOTF').$fileName;
	    }
	    
	    $product->update($product->toArray());
		return redirect()->route('product.index');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function uploadFile($file)
	{
		// Making counting of uploaded images
	    $file_count = count($files);
	    // start count how many uploaded
	    $uploadcount = 0;
	    foreach($files as $file)
		{
	      	$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
	      	$validator = Validator::make(array('file'=> $file), $rules);
	      	if($validator->passes())
	      	{
	        	$destinationPath = 'uploads';
	        	$filename = $file->getClientOriginalName();
	        	$upload_success = $file->move($destinationPath, $filename);
	        	$uploadcount ++;
	      	}
	    }

	    if($uploadcount == $file_count)
	    {
	      Session::flash('success', 'Upload successfully'); 
	      return Redirect::to('upload');
	    }else{
	      return Redirect::to('upload')->withInput()->withErrors($validator);
	    }
	}
}
