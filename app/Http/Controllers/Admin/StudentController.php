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
        // $student = DB::table('students')
        // ->join('schools','students.school_id','=','schools.id')
        // ->join('class_models','students.class_id','=','class_models.id')
        // ->join('sections','students.section_id','=','sections.id')
        // ->select('students.*','schools.school_name','class_models.class_name','sections.section_name')
        // ->get();

        $school_id = School::all();
        $class_id = ClassModel::all();
        $section_id = Section::all();
        return view('admin.student.managestudent',[
            'school_id' => $school_id,
            'class_id' => $class_id,
            'section_id' => $section_id,
        ]);



    }


    public function showStudent(Request $request)
    {
        $this->validate($request,[
            'school_id' => 'required',
            'class_id' => 'required',
            'section_id' => 'required',

        ]);

        // $school_id = $request->school_id;
        // $class_id = $request->class_id;
        // $section_id = $request->section_id;

        // $student = new Student();
        $student = Student::where('school_id',$request->school_id)
                ->where('class_id',$request->class_id)
                ->where('section_id',$request->section_id)
                ->get();


        // $student = Student::where('students.school_name',=,$school_name,)

        return view('admin.student.showstudent',[
            'student'=> $student,
        ]);
    }

    public function findStudent(){
        return view('admin.student.findstudent');
    }

    public function showClass6SecA()
    {
        $student = Student::where('class_id',1)
        ->where('section_id',1)
        ->where('publication_status',1)
        ->get();
        return view('admin.student.class6sectiona',[
            'student'=>$student,
        ]);
    }

    // public function paymentStudent($id)
    // {

    // }

}
