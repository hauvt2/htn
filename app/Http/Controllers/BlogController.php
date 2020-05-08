<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Users;
use App\Models\News;
use App\Models\Feedback;
use App\Models\NewsComments;
use App\Models\NewsTypes;
use Hash;
use Session;
use Auth;
use DB;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function CmtBlog(Request $req){
            
            $cmt = new NewsComments;
            $cmt->id_news = $req->id_news;
            $cmt->content = $req->content;
            $cmt->name = $req->name;
            $cmt->email = $req->email;
            $cmt->save();
            return redirect()->back();
        }

     public function index()

    {
      
        $data = News::join('news_types', 'news_types.id', '=', 'news.id_type')->select('news.id','news.title','news.summary','news.images','news.created_at','news.views','news_types.name')->paginate(2);

         
        $listcate = NewsTypes::all();
        $recentpost = News::orderBy('created_at','DESC')->limit(4)->get();
        return view('client.news.index',compact('data','listcate','recentpost'));

    }

    public function detail($id)
    {
        $viewcount = DB::table('news')->where('id',$id)->first();
        $count = $viewcount->views + 1;
        $query = DB::table('news')->where('id',$id)->Update(['views'=>$count]);
        $datasingle = News::join('news_types', 'news_types.id', '=', 'news.id_type')->select('news.id','news.title','news.summary','news.images','news.created_at','news.content','news.views','news_types.name')->where('news.id',$id)->first();
        $listcate = NewsTypes::all();

        $recentpost = News::orderBy('created_at','DESC')->limit(4)->get();
        // print_r($datasingle);
        $comment =  NewsComments::where('id_news',$id)->get();
        
       return view('client.news.detail',compact('datasingle','listcate','recentpost','comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}







