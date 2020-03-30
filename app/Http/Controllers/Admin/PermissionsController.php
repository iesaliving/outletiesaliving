<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Permission;

class PermissionsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('permission_create'), 403);

        return view('admin.permissions.create');
    }

    public function store(StorePermissionRequest $request)
    {
        abort_unless(\Gate::allows('permission_create'), 403);

        $permission = Permission::create($request->all());

        return redirect()->route('admin.permissions.index');
    }

    public function edit(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_edit'), 403);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        abort_unless(\Gate::allows('permission_edit'), 403);

        $permission->update($request->all());

        return redirect()->route('admin.permissions.index');
    }

    public function show(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_show'), 403);

        return view('admin.permissions.show', compact('permission'));
    }

    public function destroy(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_delete'), 403);

        $permission->delete();

        return back();
    }

    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        Permission::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

    public function table(Request $request)
    {
        $query = Permission::query();

        return Datatables::of($query)->addColumn('action', function ($dat) {

            return ' <a href="'.route("admin.partners.show", $dat->id).'" class="btn btn-sm btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="right" title="Show: '.$dat->title.'"></i></a>

                <a href="'.route("admin.partners.edit", $dat->id).'" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Edit: '.$dat->title.'"></i></a>
                <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="delete '.$dat->title.'" data-remote="'.route("admin.partners.destroy", $dat->id).'"><i class="fa fa-trash-o"></i></button> ';
        })
        ->addColumn('checkbox', '<input type="checkbox" name="_checkbox[]" class="_checkbox" value="{{$id}}" />')
        ->rawColumns(['checkbox','action'])
        ->make(true);
    }
}
