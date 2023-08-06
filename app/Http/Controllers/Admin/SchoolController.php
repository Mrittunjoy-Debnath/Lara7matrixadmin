<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function addSchool()
    {
        return view('admin.school.addschool');
    }
    public function saveSchool(Request $request)
    {
        $this->validate($request,[
            'school_name' => 'required',
            'publication_status' => 'required',

        ]);

        $school = new School();
        $school->school_name = $request->school_name;
        $school->publication_status = $request->publication_status;
        $school->save();

        // $category->create($request->all());
        // return view('admin.category.addcategory');
        return redirect()->route('admin.add-school')->with('success','School info save successfully');
    }

    public function manageSchool()
    {
        $school = School::all();

        return view('admin.school.manageschool',[
            'school' => $school
        ]);
    }

    public function publishedSchool($id)
    {
        $school = School::find($id);
        $school->publication_status = 1;
        $school->save();

        return redirect()->back()->with('success','School published successfully');
    }

    public function unpublishedSchool($id)
    {
        $school = School::find($id);
        $school->publication_status = 0;
        $school->save();

        return redirect()->back()->with('success','School unpublished successfully');
    }

    public function editSchool($id)
    {
        $school = School::find($id);

        return view('admin.school.editschool',[
            'school' => $school
        ]);
    }

    public function updateSchool(Request $request,$id)
    {
        $this->validate($request,[
            'school_name' => 'required',
            'publication_status' => 'required',

        ]);

        $school = School::find($id);

        $school->school_name = $request->school_name;
        $school->publication_status = $request->publication_status;
        $school->save();

        return redirect()->route('admin.manage-school')->with('success','School edited info save successfully');
    }

    public function deleteSchool($id)
    {
        $school = School::find($id);
        $school->delete();

        return redirect()->route('admin.manage-school')->with('success','School  delete successfully');
    }
}
