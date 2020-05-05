<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Projects;
use App\Models\ProjectTypes;
use Hash;
use Session;
use Auth;


class ProjectController extends Controller
{
   public function AllProjectCate(){
    $project_cate = ProjectTypes::paginate(5);
    return view('admin.project-cate.all-project-cate',compact('project_cate'));
}

public function ProjectCate(){

    return view('admin.project-cate.create-project-cate');
}

public function SaveProjectCate(Request $req){

    $query = ProjectTypes::create($req->all());
    return redirect()->back()->with('success','Thêm mới thành công');

        // $data = new projectTypes();

        // $data->name = $req->name;
        // $data->status = $req->status;
        // $data->status = $req->status;
        // $data->save();

}


public function editProjectCate($id){
   $projecttype = ProjectTypes::find($id);
   return view('admin.project-cate.edit-project-cate',['projecttype'=>$projecttype]);
}


public function updateProjectCate(Request $req){
        // $this->validate($req,
        //     [
        //         'name' => 'required',
        //         'status' => 'required'
        //  ]
        // );


   $projecttype = ProjectTypes::find($req->id)->update($req->all());

       //  $newstype->save();
   return redirect()->route('admin.all-project-cate')->with('edit-success', 'Sửa thành công');

}


public function deleteProjectCate($id){

    projectTypes::find($id)->delete();
    return redirect()->route('admin.all-project-cate');
}


     //project controller==============================================

public function AllProject(){

    $project2 = Projects::paginate(5);
    return view('admin.project.all-project',compact('project2'));
}

public function project(){
    $pro_type = ProjectTypes::all();
    return view('admin.project.create-project',compact('pro_type'));
}

public function SaveProject(Request $req){

        $this->validate($req,
            [
                'project_name' => 'required',
                'description' => 'required',
                'content' => 'required', 
                'link_demo' => 'required',
                'status' => 'required',
            ]
        );

        if($req->hasFile('images')){
            $file = $req->file('images')->getClientOriginalName();

            $hinh =  str_random(4)."_". $file;

            $path = public_path('img'); 

            $req->file('images')->move($path,$hinh);


        }else{

            $hinh = '';
        }
        
    

    if($req->hasFile('img_detail')){

        $arr = [];
        foreach ($req->img_detail as  $value) {
            $file = $value->getClientOriginalName();

            $hinh =  str_random(4)."_". $file;

            $path = public_path('img'); 

            $value->move($path,$hinh);

            $arr[] = $hinh;

        }


        $tenanh = implode(",", $arr);
      

    }else {
        $tenanh = '';
    }

    // print_r($req->all());
   $data = new Projects();
   $data->project_name = $req->project_name;
   $data->description = $req->description;
   $data->content = $req->content;
   $data->status = $req->status;
   $data->images= $hinh;
   $data->img_detail= $tenanh;
   $data->link_demo= $req->link_demo;
   $data->id_user= Auth::user()->id;
   $data->id_type= $req->id_type;
   $data->save();

   return redirect()->back()->with('success','Thêm mới thành công');
    }


public function editProject($id){
    $pro_type = ProjectTypes::all();
    $project = Projects::find($id);

    return view('admin.project.edit-project',compact('pro_type','project'));


}


public function updateProject(Request $req){


    $project = Projects::find($req->id)->update($req->all());
       //  $projecttype->save();
    return redirect()->route('admin.all-project')->with('edit-success', 'Sửa thành công');
}


public function deleteProject($id){

    Projects::find($id)->delete();
    return redirect()->route('admin.all-project')->with('success', 'Xóa thành công');
}
}
