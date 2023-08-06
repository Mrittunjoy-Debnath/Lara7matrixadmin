<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function addSection()
    {
        return view('admin.section.addsection');
    }
    public function saveSection(Request $request)
    {
        $this->validate($request,[
            'section_name' => 'required',
            'publication_status' => 'required',

        ]);

        $section = new Section();
        $section->section_name = $request->section_name;
        $section->publication_status = $request->publication_status;
        $section->save();

        // $category->create($request->all());
        // return view('admin.category.addcategory');
        return redirect()->route('admin.add-section')->with('success','Section info save successfully');
    }

    public function manageSection()
    {
        $section = Section::all();

        return view('admin.section.managesection',[
            'section' => $section
        ]);
    }

    public function publishedSection($id)
    {
        $section = Section::find($id);
        $section->publication_status = 1;
        $section->save();

        return redirect()->back()->with('success','Section published successfully');
    }

    public function unpublishedSection($id)
    {
        $section = Section::find($id);
        $section->publication_status = 0;
        $section->save();

        return redirect()->back()->with('success','Section unpublished successfully');
    }

    public function editClass($id)
    {
        $section = Section::find($id);

        return view('admin.section.editsection',[
            'section' => $section
        ]);
    }

    public function updateClass(Request $request,$id)
    {
        $this->validate($request,[
            'class_name' => 'required',
            'publication_status' => 'required',

        ]);

        $section = Section::find($id);

        $section->section_name = $request->section_name;
        $section->publication_status = $request->publication_status;
        $section->save();

        return redirect()->route('admin.manage-section')->with('success','Section edited info save successfully');
    }

    public function deleteSection($id)
    {
        $section = Section::find($id);
        $section->delete();

        return redirect()->route('admin.manage-section')->with('success','Section  delete successfully');
    }
}
