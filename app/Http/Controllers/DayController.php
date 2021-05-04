<?php

namespace App\Http\Controllers;
use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Day::all();
        if(empty($result)){
            return "Database is empty";
        }else
            return $result;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'day' => 'required|in:Lunedì,Martedì,Mercoledì,Giovedì,Venerdì,Sabato,Domenica',
            'time' => ['required','regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'type' => 'required|in:Umido,Secco,Plastica,Vetro,Carta',
        ]);
        return Day::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Day::find($id);
        if(empty($result)){
            return "No row for " . $id . " found";
        }else
            return $result;
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
        $result = Day::find($id);
        if(empty($result)){
            return "No row for " . $id . " found";
        }else{
        $this->validate($request, [
            'day' => 'in:Lunedì,Martedì,Mercoledì,Giovedì,Venerdì,Sabato,Domenica',
            'time' => ['regex:/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'],
            'type' => 'in:Umido,Secco,Plastica,Vetro,Carta',
        ]);
        return $result->update($request->all());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Day::destroy($id);
    }

    
    /** Custom function below **/
    

     /**
     * Display the specified resource.
     *
     * @param  int  $today
     * @return \Illuminate\Http\Response
     */
    public function showDaily($today){
        $search = $today;
        if($today == "today"){
            $dayArray =array( "Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato" );
            $dayIndex = date( "w" );
            $search = $dayArray[$dayIndex];
        }
        $result = Day::where("day",$search)->orderBy('time', 'asc')->get();
        var_dump($search);
        if($result->isEmpty()){
            return "No Collection for " . $today . " found";
        }else
            return $result;

    }
         /**
     * Display the specified resource.
     *
     * @param  int  $type
     * @return \Illuminate\Http\Response
     */
    public function showType($type){
        $result = Day::where("type",$type)->orderBy('time', 'asc')->get();
        if($result->isEmpty()){
            return "No Collection for ". $type . "found";
        }else
            return $result;
    }
}
