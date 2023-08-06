<?php

namespace App\Http\Controllers\Admin;

use App\ClassModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function addClass()
    {
        return view('admin.class.addclass');
    }
    public function saveClass(Request $request)
    {
        $this->validate($request,[
            'class_name' => 'required',
            'publication_status' => 'required',

        ]);

        $class = new ClassModel();
        $class->class_name = $request->class_name;
        $class->publication_status = $request->publication_status;
        $class->save();

        // $category->create($request->all());
        // return view('admin.category.addcategory');
        return redirect()->route('admin.add-class')->with('success','Class info save successfully');
    }

    public function manageClass()
    {
        $class = ClassModel::all();

        return view('admin.class.manageclass',[
            'class' => $class
        ]);
    }

    public function publishedClass($id)
    {
        $class = ClassModel::find($id);
        $class->publication_status = 1;
        $class->save();

        return redirect()->back()->with('success','Class published successfully');
    }

    public function unpublishedClass($id)
    {
        $class = ClassModel::find($id);
        $class->publication_status = 0;
        $class->save();

        return redirect()->back()->with('success','Class unpublished successfully');
    }

    public function editClass($id)
    {
        $class = ClassModel::find($id);

        return view('admin.class.editclass',[
            'class' => $class
        ]);
    }

    public function updateClass(Request $request,$id)
    {
        $this->validate($request,[
            'class_name' => 'required',
            'publication_status' => 'required',

        ]);

        $class = ClassModel::find($id);

        $class->class_name = $request->class_name;
        $class->publication_status = $request->publication_status;
        $class->save();

        return redirect()->route('admin.manage-class')->with('success','Class edited info save successfully');
    }

    public function deleteClass($id)
    {
        $class = ClassModel::find($id);
        $class->delete();

        return redirect()->route('admin.manage-class')->with('success','Class  delete successfully');
    }
}
