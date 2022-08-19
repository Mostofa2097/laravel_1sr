<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function index()
    {
       $data['post_list'] = post::where("rating", 5)->get();
       
       return view('admin.post.index',$data);
    

    }

    public function show($id)
    {
        $post = post::find($id);
        return view('admin.post.show',compact('post'));
    }

    public function create()
    {
         $post = new post();
         $post->title = "dim dim dim dim";
         $post->description = "dimer damonek beshi tai dim vaj abe na ok";
         $post->view_count = 0;
         $post->view_count = 0;
         $post->rating = 5;
         
         $post->save();
         $post->tags()->attach([3,2]);

        // $data = array(
        //  'title'=>'khamuna',
        //  'description'=>"dimer dam baray ami r dim khami na ",
        //  "view_count"=>2,
        //  "rating"=>3,
         
        // );
        //   DB::table('posts')->insert($data);

    }

    public function update($id)
    {

        $post= post::where("view_count",80)->get();
          foreach($post as $p){
                $p->title = "dim ar alu";
                $p->save();
        //$post= post::find($id);
        // if($post){
        //     $post->title = "dimer dam bartei ache amader ar biya hbe nag goo";
        //     $post->save();
        // }
        // else{
        //     echo "no item"  

             }
    }



    public function delete($id)
    {
        $post =post :: find($id);
        if($post){
            $post->delete();
        }
        else{
            echo "not found";
        }


    }
}
