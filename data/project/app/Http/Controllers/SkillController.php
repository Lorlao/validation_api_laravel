<?php

namespace App\Http\Controllers;

use App\Skill;
use Validator;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills=Skill::All();        
        
        return response()->json([
            'state'=>'sucess',
            'description'=>$skills,
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     // 
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);        
        
        if ($validator->fails()) {            
            return response()->json([
                'state'=>'error',
                'message'=>$validator->errors(),
            ]);
        }else{
            $skill=new Skill([
            'name'=>$request->name,
            ]);  

            $skill->save(); //enregistre les données  

            return response()->json([
                'state'=>'sucess',
                'message'=>'Compétence créé !',
            ]);
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        $show=Skill::find($skill);        
        
        return response()->json([
            'state'=>'sucess',
            'description'=>$show,
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Skill  $skill
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Skill $skill)
    // {
    //     //
    // }
    // //INUTILE EN CAS D'API CAR PAS DE FRONT

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //return $request;
        $show=Skill::find($skill);

        $skill->name = $request->name;       
        
        $skill->save();        
        
        return response()->json([
            'state'=>'sucess',
            'description'=>'modification effectuée',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $delete = Skill::find($skill);
        $skill->delete();

        return response()->json([
            'state'=>'sucess',
            'description'=>'suppression effectuée',
        ]);
    }
}