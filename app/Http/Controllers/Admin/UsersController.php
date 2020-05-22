<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        $notification = array(
            'message'    => trans('global.stored_record'), 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_unless(\Gate::allows('user_show'), 403);

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_unless(\Gate::allows('user_delete'), 403);

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

    public function change()
    {
        return view('auth.change_password');
    }

    public function changePassword(Request $request)
    {
       $this->validate(request(), [
              'password' => 'required|min:6|confirmed',

            ]);

        if (Auth::check()) {

            $usuid=Auth::user()->id;
            $password=\Hash::make($request->get('password'));
              
            try { 
            \DB::table('users')
            ->where('id', $usuid)
            ->update(['password'=>$password]);

             }catch (Exception $e){

                $notification = array(
                'message' => "Error" , 
                'alert_type' => 'error',);
              
              \Session::flash('notification', $notification);

             return redirect()->route('admin.users.change');


            }
            $notification = array(
            'message' => trans('global.registration_updated') , 
            'alert_type' => 'success',);
        
                \Session::flash('notification', $notification);

                return redirect()->route('admin.users.password');
            }

         
    }
}
