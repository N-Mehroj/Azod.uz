<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use App\Models\ReplyMessages;
use App\Models\Discussion;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;
use PDO;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getBlogData()
    {
        $index = Blog::all();
        return $index;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $request = $request->all();
        $blog = Blog::where('id', $request['id'])->orderBy('created_at', 'desc')->first();
        $count = Discussion::where('blog_id', $request['id'])->count();
        // if ($blog->discussion != null) {
            // $discu = Discussion::where('blog_id', $request['id'])->with('user')->with('reply_message')->get();
            // $newData = [];
            // foreach ($discu as $item) {
            //     $newItem = [
            //         'id' => $item['id'],
            //         'message' => $item['message'],
            //         'reply_messageId' => $item['reply_messageId'],
            //         'like_count' => $item['like_count'],
            //         'userId' => $item['userId'],
            //         'blog_id' => $item['blog_id'],
            //         'created_at' => $item['created_at'],
            //         'updated_at' => $item['updated_at'],
            //         'user' => $item['user'],
            //         // 'reply_messages' => $item['reply_message'],
            //     ];
            //     // $newItem['reply'] = [
            //     //     'user' => $item['user'],
            //     // ];

            //     $newData[] = $newItem;
            // }
            // $discu = ReplyMessages::where('id', 2)->with('user')->get();

            // return  $discu;   "userInChat"=>$discu,
            return [$blog,"count"=>$count];
        // } else {
        //     return $blog;
        // }
        // return $request;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
