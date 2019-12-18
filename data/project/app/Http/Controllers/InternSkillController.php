<?php

namespace App\Http\Controllers;

use App\InternSkill;
use Illuminate\Http\Request;

class InternSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internsSkills=InternSkill::All();        
        
        return response()->json([
            'state'=>'sucess',
            'description'=>$internsSkills,
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
        $internsSkills= new InternSkill([
            'intssern_id'=>$request->intessrn_id,
            'skill_id'=>$request->skill_id
        ]);  

        $internsSkills->save(); //enregistre les données  

        return response()->json([
            'state'=>'sucess',
            'message'=>'Compétence créé !',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function show(InternSkill $internSkill)
    {
        $show=InternSkill::find($internSkill);        
        
        return response()->json([
            'state'=>'sucess',
            'description'=>$show,
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\InternSkill  $internSkill
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(InternSkill $internSkill)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternSkill $internSkill)
    {
        //return $request;
        $show=interSkill::find($internSkill);

        $interSkill->name = $request->name;       
        
        $interSkill->save();        
        
        return response()->json([
            'state'=>'sucess',
            'description'=>'modification effectuée',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InternSkill  $internSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternSkill $internSkill)
    {
        $delete = Skill::find($internSkill);
        $internSkill->delete();

        return response()->json([
            'state'=>'sucess',
            'description'=>'suppression effectuée',
        ]);
    }
}
