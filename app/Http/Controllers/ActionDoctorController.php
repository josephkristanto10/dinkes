<?php

namespace App\Http\Controllers;

use App\Models\KeyPerformanceDoctor;
use App\Models\ActionDoctor;
use Illuminate\Http\Request;
use DB;

class ActionDoctorController extends Controller
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
    public function addaction(Request $request){

        $myidperformance = $request->idaction;
        $idofficer = $request->iduser;
        $qtyperformance = $request->qtyperformance;
        // echo $myidperformance. " - " . $idofficer . " - " . $qtyperformance; 
        // get Score
        $keyperformance_detail = KeyPerformanceDoctor::find($myidperformance);
     
        $scoreaction = $keyperformance_detail->score;
        
        $totalscore = $scoreaction * $qtyperformance;


        $mydate = date("Y-m-d");
        // find
        $findactiondoctor = ActionDoctor::where("id_key_performance",'=',$myidperformance)->whereDate("created_at",'=',$mydate)->get();
        $jumlahfind = $findactiondoctor->count();

        if($jumlahfind == 0)
        {
            // insert
            $action_doctor_insert = new ActionDoctor;
            $action_doctor_insert->id_key_performance = $myidperformance;
            $action_doctor_insert->id_officer_general = $idofficer;
            $action_doctor_insert->quantity = $qtyperformance;
            $action_doctor_insert->score_per_action = $scoreaction;
            $action_doctor_insert->total_score = $totalscore;
            $action_doctor_insert->save();
        }
        else
        {
            $myfindid = $findactiondoctor[0]->id;
            $myfindquantity = $findactiondoctor[0]->quantity+$qtyperformance;
            $myfindscore = $findactiondoctor[0]->score_per_action;
            $mytotalscore = $myfindquantity * $myfindscore;
            $updatemyquantity = ActionDoctor::find($myfindid);
            $updatemyquantity->quantity = $myfindquantity;
            $updatemyquantity->total_score = $mytotalscore;
            $updatemyquantity->save();
        }

    

        
    }
    public function showAction(Request $request){
        $id = $request->iduser;
        $chooseyear = $request->year;
        $choosemonth = $request->month;
        $Action_Doctor = ActionDoctor::join("key_performance_doctor",'key_performance_doctor.id','=','action_doctor.id_key_performance')->where("id_officer_general",'=',$id)->whereMonth('action_doctor.created_at', '=', $choosemonth)->whereYear('action_doctor.created_at', '=', $chooseyear)->orderBy("created_at","desc")->select("action_doctor.*", "key_performance_doctor.name as kriteria")->get();
        return print(json_encode(array("data"=>$Action_Doctor)));
    }
    public function getdetail(Request $request){
        $id = $request->iduser;
        $chooseyear = $request->year;
        $choosemonth = $request->month;
        $chooseday = $request->day;
        $Action_Doctor = ActionDoctor::join("key_performance_doctor",'key_performance_doctor.id','=','action_doctor.id_key_performance')->where("id_officer_general",'=',$id)->whereMonth('action_doctor.created_at', '=', $choosemonth)->whereYear('action_doctor.created_at', '=', $chooseyear)->whereDay('action_doctor.created_at', '=', $chooseday)->orderBy("created_at","desc")->select("action_doctor.*", "key_performance_doctor.name as kriteria")->get();
        return print(json_encode(array("data"=>$Action_Doctor)));
    }
    public function getresultperday(Request $request)
    {
        $month = $request->month;
        $year = $request->year;
        $user = $request->iduser;
        $selectdata = DB::select("SELECT day(created_at) as tanggal, month(created_at) as bulan, year(created_at) as tahun, count(id) as jumlah FROM `action_doctor` where month(created_at) = '$month' and year(created_at) = '$year' and id_officer_general = '$user' group by date(created_at)");
        return print(json_encode(array("data"=>$selectdata)));
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
