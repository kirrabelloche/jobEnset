<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Spatie\Permission\Models\Role;

class NavigationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Dashboard()
    {
        return view("admin.dashboard");
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.profil.index', compact('user','roles'));
    }

    public function profileinformation($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get()->pluck('name', 'name');
        return view('admin.profil.informations', compact('user','roles'));
    }

    public function updatepassword($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profil.password', compact('user'));
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'nullable|confirmed',
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        dd('Password change successfully.');
    }

}
