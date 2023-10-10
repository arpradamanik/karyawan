<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;


class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('inserteacher');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        $search =  $request['search'] ?? "";
        if ($search !="") {
            $teacher = DB::table('teacher')->where('teacher_name','LIKE',"%$search%")->get();
        }else{

            $teacher = DB::table('teacher')->paginate(20);
        }
        $data = compact('teacher','search');
        return view('viewteacher')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'teacher_name' => 'required',
                'teacher_PHONE' => 'required',
                'teacher_education' => 'required',
                'teacher_city' => 'required',
                'teacher_gender' => 'required'
            ]
        );



        $teacher = new Teacher;
        $teacher->teacher_name = $request['teacher_name'];
        $teacher->teacher_PHONE = $request['teacher_PHONE'];
        $teacher->teacher_education = $request['teacher_education'];
        $teacher->teacher_city = $request['teacher_city'];
        $teacher->teacher_gender = $request['teacher_gender'];
        $teacher->save();
        return redirect('/teacher/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacherinfo = Teacher::find($id);
        $data = compact('teacherinfo');
        return view('updateteacher')->with($data);
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
        $teacherinfo = Teacher::find($id);
        $teacherinfo->teacher_name = $request['teacher_name'];
        $teacherinfo->teacher_PHONE = $request['teacher_PHONE'];
        $teacherinfo->teacher_education = $request['teacher_education'];
        $teacherinfo->teacher_city = $request['teacher_city'];
        // $teacherinfo->teacher_gender=$request['teacher_gender'];
        $teacherinfo->save();
        return redirect('/teacher/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($primarykey)
    {
        echo $primarykey;
        Teacher::find($primarykey)->delete();
        return redirect()->back();
    }

   
}
