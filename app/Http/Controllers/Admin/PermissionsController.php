<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionsRequest;
use App\Http\Requests\UpdatePermissionsRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(StorePermissionsRequest $request)
    {
        Permission::create($request->all());

        if($request->ajax()){
            // If request from AJAX
            return [
                'success' => true,
                'redirect' => route('permissions.index'),
            ];
        } else {
            return redirect()->route('permissions.index');
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
     * @param  int  $id
     * @return Response
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePermissionsRequest $request
     * @param Permission $permission
     * @return Response
     */
    public function update(Request $request, Permission $permission)
    {

        $id =$permission->id;
        $validated = $request->validate([
            'name' => "required|unique:permissions,name,$id",
        ]);

        $permission->update($request->all());

        if($request->ajax()){
            // If request from AJAX
            return [
                'success' => true,
                'redirect' => route('permissions.index'),
            ];
        } else {
            return redirect()->route('permissions.index');
        }

        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $permission
     * @return Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index');
    }

    /**
     * @param Request $request
     * @return Response
     */

    public function massDestroy(Request $request)
    {
        Permission::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
