<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index()
    {
    	$categorys = Category::paginate(5);
        return view('category.list',compact('categorys'));
    }

    public function create()
    {
        // dd($this->make_slug('quy hoa'));
    	return view('category.create');
    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// dd($request->all());
        $rules = [
            'name'=>'required|unique:categories,name|max:50'
        ];
        $message = [
            'name.required'=>'Name không được để trống.',
            'name.max'=>'Name không được quá 50 kí tự.',
            'name.unique'=>'Name đã tồn tại.'
        ];

        $validate = Validator::make($request->all(),$rules,$message);
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $this->make_slug($request->name);
        try 
        {
            $category->save();
            return redirect('/adm/category/index');       
        } catch (Exception $e) {
            dd($e);   
        }   
	}
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function show($id)
    {
        $details = Category::with('product')->find($id);
        return view('category.show')->with(['details'=>$details]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit')->with(['category'=>$category]);
    }

    public function update($id,Request $request)
    {
        $rules = [
            'name'=>'required|max:50|unique:categories,name,'.$id.',id'
        ];
        $message = [
            'name.required'=>'Name không được để trống.',
            'name.max'=>'Name không được quá 50 kí tự.',
            'name.unique'=>'Name đã tồn tại.'
        ];

        $validate = Validator::make($request->all(),$rules,$message);
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $category = Category::find($id);
        $category->update($request->all());
        return redirect('adm/category/index');
    }
}
