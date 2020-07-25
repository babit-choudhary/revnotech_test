<?php

namespace App\Http\Controllers;


use App\Teacher;
use Illuminate\Http\Request;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\StoreRequest;

/**
 * Class TeacherController.
 */
class TeacherController extends Controller
{
   

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('teachers.index')
            ->withTeachers(Teacher::latest()->paginate(20));
    }

    /**
     * 
     *
     * @return mixed
     */
    public function create()
    {
        
        return view('teachers.create');
    }

    /**
     * @param StoreRequest $request
     *
     * @throws \Throwable
     * @return mixed
     */
    public function store(StoreRequest $request)
    {
        //dd($request->all());
       
        if(!Teacher::create($request->only(
            'name',
            'subject',
            'email',
            'dob',
            'phone_no',
            'address',
            'qualification',
            'profile_pic',
            'roll_no'
        ))){

            throw new GeneralException("Unable to create teacher,Please try again!");
        }

        return redirect()->route('teachers.index')->withFlashSuccess("Teacher added successfully.");
    }

    /**
     * @param Request $request
     * @param Teacher   $teacher
     *
     * @return mixed
     */
    public function show(Request $request, Teacher $teacher)
    {
        return view('teachers.show')
            ->withTeacher($teacher);
    }

    /**
     * 
     * @param Teacher              $teacher
     *
     * @return mixed
     */
    public function edit( Teacher $teacher)
    {
        return view('teachers.edit')
            ->withTeacher($teacher);
    }

    /**
     * @param UpdateRequest $request
     * @param Teacher     $teacher
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function update(StoreRequest $request, Teacher $teacher)
    {
       
        if(!$teacher->update($request->only(
            'name',
            'subject',
            'email',
            'dob',
            'phone_no',
            'address',
            'qualification',
            'profile_pic',
            'roll_no'
        ))){

            throw new GeneralException("Unable to update teacher,Please try again!");
        }

        return redirect()->route('teachers.index')->withFlashSuccess("Teacher Updated successfully.");
    }

    /**
     * 
     * @param Teacher              $user
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(Teacher $teacher)
    {
       if(!$teacher->delete()){

        throw new GeneralException("Unable to delete teacher,Please try again!");

       }

        return redirect()->route('teachers.index')->withFlashSuccess("Teacher Deleted successfully.");
    }

    

    
}
