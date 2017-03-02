<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        // $this->middleware('auth',['except' => 'index']);
        $this->request = $request;
        $this->input = $this->request->all();
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect('/adm');
        }else{
            return back();
            // return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function index(Request $request)
    {
        $users = User::paginate(5);
        return view('user.list',compact('users'));
    }

    public function create()
    {           
        return view('user.create');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show')->with('user',$user);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit')->with('user',$user);
    }

    public function update($id , Request $request)
    {    
        // check validate
        $vai = $this->rulesVai($request->method(),$id);
        $validator = Validator::make($this->input,$vai['rules'],$vai['message']);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(Input::except('password','confirpassword'));
        }
        // test
        // dd($this->queryCallbacks());
        // endtest
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/adm');
    }

    public function register(Request $request)
    {
        // $validator = Validator::make($this->input,$rules,$message);
        // check validate
        $vai = $this->rulesVai();
        $validator = Validator::make($this->input,$vai['rules'],$vai['message']);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(Input::except('password','confirpassword'));
        }
        
        // Parse data to save
        $user = new User;
        $user->name = $this->input['name'];
        $user->email = $this->input['email'];
        $user->password = Hash::make($this->input['password']);
        $user->remember_token = $this->input['_token'];

        // insert data into datavbase
        if (!$user->save()) {
            // save into database fails!
            return 'fails';
        }
        // save into database success!
        return redirect('/adm');
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('/adm');
    }

    public function rulesVai($method='',$id='')
    {
        //
        $vai = [];
        if($method == 'PUT')
        {
            $vai['rules'] = [
                'name' => 'bail|required|max:10',
                'email' => 'required|email|max:100|unique:users,email,'.$id.',id',
                'password' => 'required|min:6|max:100',
                'confirpassword' => 'same:password',
            ];
            /*
            unique:users,email,'.$id.',id'
            table name: user
            conditions: where email = email and id <> $id
            */

            $vai['message'] = [
                'name.required' => 'Name không được rỗng.',
                'name.max' => 'Name không được lớn hơn 10 kí tự.',
                'email.required' => 'Email không được rỗng.',
                'email.email' => 'Bạn phải nhập đúng định dạng email.',
                'email.unique' => 'Email đã tồn tại',
                'email.max' => 'Email không được nhiều hơn 100 kí tự',
                'password.required' => 'Password không đươc để trống.',
                'password.min' => 'Password không được bé hơn 6 kí tự.',
                'password.max' => 'Password không được lớn hơn 100 kí tự.',
                'confirpassword.same' => 'Confirpassword không đúng.',
            ];
        }else{
            $vai['rules'] = [
                'name' => 'bail|required|max:10',
                'email' => 'sometimes|required|email|unique:users,email|max:100',
                'password' => 'required|min:6|max:100',
                'confirpassword' => 'same:password',
            ];

            $vai['message'] = [
                'name.required' => 'Name không được rỗng.',
                'name.max' => 'Name không được lớn hơn 10 kí tự.',
                'email.required' => 'Email không được rỗng.',
                'email.email' => 'Bạn phải nhập đúng định dạng email.',
                'email.max' => 'Email không được nhiều hơn 100 kí tự',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Password không đươc để trống.',
                'password.min' => 'Password không được bé hơn 6 kí tự.',
                'password.max' => 'Password không được lớn hơn 100 kí tự.',
                'confirpassword.same' => 'Confirpassword không đúng.',
            ];
        }
        
        return $vai;
    }
    /**
     * check exit name when create user
     * @param  Request $request [_token,name]
     * @return response         [description]
     */
    public function test1(Request $request)
    {
        if ($request->ajax()) {
            $name = $request->name;
            $user = User::where('name', '=', $name)->count();
            if($user != 0)
            {
                $data['status'] = 1;
                $data['data'] = 'Name đã tồn tại nhưng bạn vẫn có thể sữ dụng';
            }else{
                $data['status'] = 0;
                $data['data'] = '';
            }
            return response()->json($data);
        }
    }
}
