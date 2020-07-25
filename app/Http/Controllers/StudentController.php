<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StoreRequest;

/**
 * Class StudentController.
 */
class StudentController extends Controller
{
   

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('students.index')
            ->withStudents(Student::latest()->paginate(20));
    }

    /**
     * 
     *
     * @return mixed
     */
    public function create()
    {
        $student = new Student;
        return view('students.create',compact('student'))->withTeachers(Teacher::pluck('name','id'));
    }

    /**
     * @param StoreRequest $request
     *
     * @throws \Throwable
     * @return mixed
     */
    public function store(StoreRequest $request)
    {
       
        if(!Student::create($request->only(
            'name',
            'teacher_id',
            'father_name',
            'mother_name',
            'dob',
            'phone_no',
            'address',
            'class',
            'roll_no',
            'profile_pic'
        ))){

            throw new GeneralException("Unable to create student,Please try again!");
        }

        return redirect()->route('students.index')->withFlashSuccess("Student added successfully.");
    }

    /**
     * @param Request $request
     * @param Student   $student
     *
     * @return mixed
     */
    public function show(Request $request, Student $student)
    {
        return view('students.show')
            ->withStudent($student);
    }

    /**
     * 
     * @param Student              $student
     *
     * @return mixed
     */
    public function edit( Student $student)
    {
        return view('students.edit')
            ->withStudent($student)->withTeachers(Teacher::pluck('name','id'));
    }

    /**
     * @param StoreRequest $request
     * @param Student     $student
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function update(StoreRequest $request, Student $student)
    {
       
        if(!$student->update($request->only(
            'name',
            'teacher_id',
            'father_name',
            'mother_name',
            'dob',
            'phone_no',
            'address',
            'class',
            'roll_no'
        ))){

            throw new GeneralException("Unable to update student,Please try again!");
        }

        return redirect()->route('students.index')->withFlashSuccess("Student Updated successfully.");
    }

    /**
     * 
     * @param Student              $user
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(Student $student)
    {
       if(!$student->delete()){

        throw new GeneralException("Unable to delete student,Please try again!");

       }

        return redirect()->route('students.index')->withFlashSuccess("Student Deleted successfully.");
    }

    

    
}
