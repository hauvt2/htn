<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Users;
use App\Models\News;
use App\Models\Feedback;
use App\Models\NewsTypes;
use Hash;
use Session;
use Auth;


class AdminController extends Controller
{

    public function Home(){

    	return view('admin.home.index');
    }


    public function ManageUsers(){

    	return view('admin.account.manage-users');
    }


    public function CreateUsers(){
    	
    	return view('admin.account.create');
    }

    // news category controller====================================

    public function AllNewsCate(){
        $news1 = NewsTypes::paginate(5);
        return view('admin.news-cate.all-news-cate',compact('news1'));
    }

    public function NewsCate(){

        return view('admin.news-cate.create-news-cate');
    }

    public function SaveNewsCate(Request $req){

        $query = NewsTypes::create($req->all());
        return redirect()->back()->with('success','Thêm mới thành công');

        // $data = new NewsTypes();

        // $data->name = $req->name;
        // $data->status = $req->status;
        // $data->status = $req->status;
        // $data->save();

    }


    public function editNewsCate($id){
         $newstype = NewsTypes::find($id);
         return view('admin.news-cate.edit-news-cate',['newstype'=>$newstype]);
 }



 public function updateNewsCate(Request $req){
        // $this->validate($req,
        //     [
        //         'name' => 'required',
        //         'status' => 'required'
        //  ]
        // );


     $newstype = NewsTypes::find($req->id)->update($req->all());

       //  $newstype->save();
     return redirect()->route('admin.all-news-cate')->with('edit-success', 'Cập nhật thành công');

 }


 public function deleteNewsCate($id){

    NewsTypes::find($id)->delete();
    return redirect()->route('admin.all-news-cate')->with('success', 'Xóa thành công');
}


//news controller==============================================

public function AllNews(){
    $news2 = News::paginate(5);
    return view('admin.news.all-news',compact('news2'));
}

public function News(){
    $danhmuc = NewsTypes::all();
    return view('admin.news.create-news',compact('danhmuc'));
}

public function SaveNews(Request $req){

    $this->validate($req,
            [
                'title' => 'required',
                'summary' => 'required',
                'content' => 'required',

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

    if($req->highlight != ''){
        $highlight = $req->highlight;
    }else{
         $highlight = 0;
    }

    $data = new News();
    $data->title = $req->title;
    $data->summary = $req->summary;
    $data->content = $req->content;
    $data->status = $req->status;
    $data->images= $hinh;
    $data->id_user= Auth::user()->id;
    $data->id_type= $req->id_type;
    $data->highlight = $highlight;
    $data->views= 0;
    $data->save();
    

    return redirect()->back()->with('success','Thêm mới thành công');
}


public function editNews($id){
    $danhmuc = NewsTypes::all();
    $news = News::find($id);

    return view('admin.news.edit-news',compact('danhmuc','news'));


}


public function updateNews(Request $req){



        $news = News::find($req->id)->update($req->all());
       // //  $newstype->save();
        return redirect()->route('admin.all-news')->with('edit-success', 'Sửa thành công');
}


public function deleteNews($id){

        News::where('id', $id)->delete();
        return redirect()->back()->with('edit-success', 'Xóa thành công');
    
    }
// =====================contact controller===============

 public function AllContact(){
        $contact1 = Feedback::paginate(5);
        return view('admin.contact.all-contact',compact('contact1'));
    }

  
    public function SaveContact(Request $req){

        $query = Feedback::create($req->all());
        return redirect()->back()->with('success','Gửi thành công');

        // $data = new NewsTypes();

        // $data->name = $req->name;
        // $data->status = $req->status;
        // $data->status = $req->status;
        // $data->save();

    }

}
