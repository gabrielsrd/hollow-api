<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return user::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return user::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return user::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = user::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return user::destroy($id);
    }

    /**
     * Search for a first_name
     */
    public function search(string $first_name)
    {
        return user::where('name_first','like','%'.$first_name.'%')->get();
    }

    /**
     * Create a new user
     */
    public function create(Request $request)
    {
        return user::create($request->all());
    }

    /**
    * Filter search based on parameters
    */
    public function filter(Request $request)
    {           
        $items = user::query();

        foreach($request->all() as $key => $value) {
            $items->where($key, $value);
        }

        $result= $items->get();

        if (count($result) > 0) {
            return $result;
        } else {
            return response()->json([
                'message' => 'No results found'
            ], 404);
        }

    }
    
}
