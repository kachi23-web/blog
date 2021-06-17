<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\str;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::orderBy('id','desc')->get();
        return view('admin.roles.index',['roles' => $role]);  
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
            'role_name' => 'required|max:255',
            'role_slug'=> 'required|max:255',
            
        ]);
        $role = new Role();
        $role->name = $request->role_name;
        $role->slug = $request->role_slug;
        //$role->slug = $request->role_slug;
          $role->save();

         $listOfPermissions = explode(',', $request->roles_permissions);//create array from separated/comma      
         //dd($listOfPermissions);
         foreach ($listOfPermissions as $permission) {
             $permissions = new Permission();
             $permissions->name = $permission;
             $permissions->slug = strtolower(str_replace("","-", $permission));
             $permissions->save();
             $role->permissions()->attach($permissions->id);//this is the relation between role and permissions table
             
             $role->save();

         }

        return redirect('/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.roles.show',['role' => $role]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view("admin.roles.edit",['role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {$data = request()->validate([
        'role_name' => 'required|max:255',
        'role_slug'=> 'required|max:255', 
    ]);

        $role->name = $request->role_name;
        $role->slug = $request->role_slug;

        $role->save();
        return redirect('/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect('/roles');    }
}
