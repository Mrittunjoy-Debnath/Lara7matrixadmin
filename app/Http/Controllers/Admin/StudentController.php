<?php

namespace App\Http\Controllers\Admin;

use App\ClassModel;
use App\Http\Controllers\Controller;
use App\School;
use App\Section;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addStudent()
    {
        $school = School::where('publication_status',1)->get();
        $class = ClassModel::where('publication_status',1)->get();
        $section = Section::where('publication_status',1)->get();

        return view('admin.student.addstudent',[
            'school'=>$school,
            'class' =>$class,
            'section' =>$section,
        ]);
    }
    public function saveStudent(Request $request)
    {
        $this->validate($request,[
            'school_id' => 'required',
            'class_id' => 'required',
            'section_id' => 'required',
            'student_name' => 'required',
            'father_name' => 'required',
            'mobile_number' => 'required',
            'student_village' => 'required',
            'publication_status' => 'required',

        ]);

        $student = new Student();
        $student->school_id = $request->school_id;
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->mobile_number = $request->mobile_number;
        $student->student_village = $request->student_village;
        $student->publication_status = $request->publication_status;
        $student->save();

        // $category->create($request->all());
        // return view('admin.category.addcategory');
        return redirect()->route('admin.add-student')->with('success','Student info save successfully');
    }

    public function manageStudent()
    {
        // $student = Student::all();

        $student = DB::table('students')
        ->join('schools','students.school_id','=','schools.id')
        ->join('class_models','students.class_id','=','class_models.id')
        ->join('sections','students.section_id','=','sections.id')
        ->select('students.*','schools.school_name','class_models.class_name','sections.section_name')
        // ->select('students.*')->where('students.school_id','=','schools.id' , 'students.class_id','=','class_models.id' , 'students.section_id','=','sections.id')
        ->get();

        return view('admin.student.managestudent',[
            'student' => $student,
        ]);



    }


    public function showStudent($id1,$id2,$id3)
    {

        // $school_id = $request->school_id;
        // $class_id = $request->class_id;
        // $section_id = $request->section_id;

        $student = Student::where('school_id',$id1)
                ->where('class_id',$id2)
                ->where('section_id',$id3)
                ->where('publication_status',1)
                ->get();


        // $student = Student::where('students.school_name',=,$school_name,)

        return view('admin.student.showstudent',[
            'student'=> $student,
        ]);
    }


}
