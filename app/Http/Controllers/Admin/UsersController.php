<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Session;
use Input;
use Illuminate\Support\Facades\Validator;
use Image;
use File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $users = User::where('name', 'LIKE', "%$keyword%")->orWhere('email', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $users = User::paginate($perPage);
        }

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name');

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 
            'email' => 'required', 'password' => 'required',
            'roles' => 'required',
            'roles' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
       
        $image = $request->file('image');
        $requestData = $request->all();

        if($image != null ) {

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/profile/thumbnails/');
            $img = Image::make($image->getRealPath());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
           
            $destinationPath = public_path('/images/profile/');
            $image->move($destinationPath, $input['imagename']);

            $data = $request->except('password');
            $data['password'] = bcrypt($request->password);
         
            $user = new User($requestData);
            $user->profile_picture = $input['imagename'];
            $user->verified = 1;
            $user->password = bcrypt($request->password);
            $user->save();

        } else {
            $data = $request->except('password');
            $data['verified']= 1;
            $data['password'] = bcrypt($request->password);
            //$user = User::create($data);
            $user = new User($requestData);
            $user->verified =1;
            $user->password = bcrypt($request->password);
            $user->save();

            foreach ($request->roles as $role) {
                $user->assignRole($role);
            }
            
        }
        
        Session::flash('flash_message', 'User added!');
       

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name');

        $user = User::with('roles')->select('id', 'name', 'email','profile_picture')->findOrFail($id);
        $user_roles = [];
        foreach ($user->roles as $role) {
            $user_roles[] = $role->name;
        }

        return view('admin.users.edit', compact('user', 'roles', 'user_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @param  \Illuminate\Http\Request  $request
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'roles' => 'required']);


        $image = $request->file('image');
        $destinationPath_thumbnails  = public_path('/images/profile/');
        $destinationPath             = public_path('/images/profile/thumbnails/');
        
        if($image != null ) {
            $user = User::findOrFail($id);
            $profile_picture = $user->profile_picture;

            if(File::exists($destinationPath.$profile_picture)) {

                    if($profile_picture != 'default.png') {
                          File::delete( $destinationPath_thumbnails.$profile_picture);
                          File::delete( $destinationPath.$profile_picture);
                               
                    }
          
             }

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath_thumbnails.'/'.$input['imagename']);
            $image->move($destinationPath, $input['imagename']);

            $data = $request->except('password');
            if ($request->has('password')) {
                $data['password'] = bcrypt($request->password);
            }
            $user->profile_picture = $input['imagename'];
            $user->update($data);
            $user->roles()->detach();
            foreach ($request->roles as $role) {
                $user->assignRole($role);
            }

        } else {
           
            $data = $request->except('password');
            if ($request->has('password')) {
                $data['password'] = bcrypt($request->password);
            }
            $user = User::findOrFail($id);
            $user->update($data);
            $user->roles()->detach();
            foreach ($request->roles as $role) {
                $user->assignRole($role);
            }
          
        }

     

       

        Session::flash('flash_message', 'User updated!');

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
       
        $destinationPath_thumbnails  = public_path('/images/profile/');
        $destinationPath             = public_path('/images/profile/thumbnails/');
        $user                        = User::findOrFail($id);
        $profile_picture             = $user->profile_picture;

        if(File::exists($destinationPath.$profile_picture)) {

                    if($profile_picture != 'default.png') {
                          File::delete( $destinationPath_thumbnails.$profile_picture);
                          File::delete( $destinationPath.$profile_picture);
                               
                    }
          
             }

        User::destroy($id);
        Session::flash('flash_message', 'User deleted!');

        return redirect('admin/users');
    }

    public function upload($id)
    {
        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name');

        $user = User::with('roles')->select('id', 'name', 'email')->findOrFail($id);
        $user_roles = [];
        foreach ($user->roles as $role) {
            $user_roles[] = $role->name;
        }

        return view('admin.users.upload', compact('user', 'roles', 'user_roles'));

    }
    public function postUpload() {
        $file = \Input::file('image');
        $input = array('image' => $file);
        $rules = array(
            'image' => 'image'
        );
        $validator = Validator::make($input, $rules);
        if ( $validator->fails() )
        {
            return \Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);
 
        }
        else {
            $destinationPath = 'uploads/';
            $filename = $file->getClientOriginalName();
            \Input::file('image')->move($destinationPath, $filename);
            return 
            \Response::json(['success' => true, 'file' => asset($destinationPath.$filename)]);
        }
 
    }

}
