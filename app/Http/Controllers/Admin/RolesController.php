<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $permissions = Permission::get()->pluck('name', 'name');
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRolesRequest $request
     * @return Response
     */
    public function store(StoreRolesRequest $request)
    {
        $role = Role::create($request->except('permissions'));
        $permissions = $request->input('permissions') ? $request->input('permissions') : [];

        if($request->ajax()){
            $permissions = explode(',', $permissions);
            $role->givePermissionTo($permissions);
            // If request from AJAX
            return [
                'success' => true,
                'redirect' => route('roles.index'),
            ];
        } else {
            $role->givePermissionTo($permissions);
            return redirect()->route('roles.index');
        }
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
     * @param Role $role
     * @return Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::get()->pluck('name', 'name');

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRolesRequest $request
     * @param Role $role
     * @return Response
     */
    public function update(Request $request, Role $role)
    {

        $id =$role->id;
        $validated = $request->validate([
            'name' => "required|unique:roles,name,$id",
        ]);

        $role->update($request->except('permissions'));
        $permissions = $request->input('permissions') ? $request->input('permissions') : [];

        if($request->ajax()){
            $permissions = explode(',', $permissions);
            $role->givePermissionTo($permissions);
            // If request from AJAX
            return [
                'success' => true,
                'redirect' => route('roles.index'),
            ];
        } else {
            $role->givePermissionTo($permissions);
            return redirect()->route('roles.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index');
    }

    /**
     * Delete all selected Role at once.
     *
     * @param Request $request
     * @return Response
     */
    public function massDestroy(Request $request)
    {
        Role::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
