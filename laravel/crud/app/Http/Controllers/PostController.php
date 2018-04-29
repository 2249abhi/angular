<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Validator;
use Auth;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::paginate(5);

        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->only('post_type','post_title','post_content');



        $profile    =   new Post; /// create model object
        $validator  =   Validator::make($request->all(),$profile->rules);

        $user = Auth::user();

        if ($validator->fails()) {
            return redirect('post/create')->withErrors($validator);
        }

        $data['author_id']      = Auth::user()->id;
        $data['category_id']    = '1';
        $data['post_slug']      = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->post_title);

        Post::create($data);
        
        return redirect('post/create')->with('status', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.post',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit',compact('post'));
        return View('post.edit')->with('post', $post);
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
        $data = $request->only('post_type','post_title','post_content');  

        $profile    =   new Post; /// create model object
        $validator  =   Validator::make($request->all(),$profile->rules);

        $user = Auth::user();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
            return back()->withErrors($validator);
        }

        $data['author_id']      = Auth::user()->id;
        $data['category_id']    = '1';
        $data['post_slug']      = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->post_title);

        Post::find($id)->update($data);

        $result['res']='1'; 
        return response()->json($result);
        return redirect()->back()->with('status', 'Post created successfully');

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


    public function myposts(Request $request)
    {
        $user = Auth::user();

        return $user->posts()->get();

    }

    public function ajaxtest(Request $request)
    {
            if($request->ajax()){
                //return response()->json(['status'=>'Ajax request']);

                if ($request->isMethod('post')){    
                    return response()->json(['response' => 'This is ajax post method']); 
                }

                return response()->json(['response' => 'This is ajax get method']);

            }
            return response()->json(['status'=>'Http request']);

    }

    public function ajaxpost(Request $request)
    {
            if($request->ajax()){
                if ($request->isMethod('post')){ 

                    //$data = $request->only('post_type','post_title','post_content');

                    return response()->json(['response' => 'data']); 
                }

                

            }
            

    }

    
}
    