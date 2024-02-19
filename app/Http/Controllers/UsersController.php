<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserPasswordUpdateRequest;
use App\Http\Requests\UserProPicUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {
    public function __construct() {
        $this->middleware(function ($request, $next) {
            if (!in_array(auth()->user()->role->id, [1, 2])) {
                abort(403, 'Unauthorized.');
            } else {
                return $next($request);
            }
        });
    }

    public function index() {
        $users = User::all();
        return view('dashboard.users.index', [
            'admins' => $users->whereIn('role_id', ['1', '2']),
            'vendors' => $users->where('role_id', 3),
            'users' => $users->where('role_id', 4),
            'roles' => Role::all()->except([1]),
        ]);
    }

    public function user_add(UserAddRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'role_id' => $request->role,
        ]);
        $user->update([
            'username' => strtolower(substr(last(explode(' ', $request->name)), 0, 5) . $user->id . Str::random(3)),
        ]);
        session()->flash('success', 'User added successfully!');
        return response()->json(['success' => true]);
    }

    public function user_profile() {
        $user =  auth()->user();
        return view('dashboard.users.show', [
            'user' => $user,
            'roles' => Role::all(),
            'page_title' => $user->name
        ]);
    }

    public function user_show($id) {
        $user =  User::find($id);
        return view('dashboard.users.show', [
            'user' => $user,
            'roles' => Role::all(),
            'page_title' => $user->name
        ]);
    }

    public function user_update_info(UserUpdateRequest $request) {
        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'username' => $request->username,
            'role_id' => $request->role_id ?? $user->role_id,
        ]);
        return back()->with('success', 'User Updated Successfully.');
    }

    public function user_update_password(UserPasswordUpdateRequest $request) {
        User::find($request->id)->update([
            'password' => bcrypt($request->password),
        ]);
        return back()->with('success', 'Password Updated Successfully.');
    }

    public function user_update_pro_pic(UserProPicUpdateRequest $request) {
        $image = $request->image;
        $user = User::find($request->id);
        $file_name = Str::lower('profile-' . $request->id . '-' . uniqid() . '.' . $image->getClientOriginalExtension());
        if ($user->image != '') {
            unlink(public_path('/uploads/users/' . $user->image));
        }
        Image::make($image)->fit(200, 200)->save(public_path('/uploads/users/' . $file_name));
        $user->update([
            'image' => $file_name
        ]);

        return back()->with('success', 'Profile picture updated successfully.');
    }

    public function user_delete(User $id) {
        $id->delete();
        return back()->with('success', 'User deleted successfully.');
    }
}
