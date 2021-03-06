<?php


namespace App\Http\Controllers;

use Illuminate\Hashing\BcryptHasher;
use App\Models\OfficerGeneral;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(Request $request)
    {
        $exist = 0;
        // 
        $options = [
            'cost' => 11
          ];
        $data = OfficerGeneral::join("role",'role.id','=','officer_general.id_role')->join("position",'position.id','=','officer_general.id_position')->where("nik",'=',$request->nik)->select("officer_general.*",'position.name as position','role.name as role')->get();
        if($data->count() == 0)
        {
           return "none";
        }
        else{
            $passwordfromdb = $data[0]['password'];
            $passwordfromuser = $request->password;
            if (password_verify($passwordfromuser, $passwordfromdb)) {
                return print json_encode(array('data' => $data));
            } else {
                return "none";
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
