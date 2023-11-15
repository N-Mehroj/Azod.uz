<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\ReplyMessages;
use App\Http\Requests\StoreDiscussionRequest;
use App\Http\Requests\UpdateDiscussionRequest;
use Illuminate\Http\Request;



class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request = $request->all();

        $request = $request['data'];

        $message = $request['message'];
        $blogId = $request['blogId'];
        $replyId = $request['replyId'];
        $userId = $request['userId'];


        $replyUserId = $request['replyUserId'];

        if ($message != null) {
            if ($replyUserId == null) {
                $disc = new Discussion([
                    'message' => $message,
                    'userId' => $userId,
                    'blog_id' => $blogId,
                ]);
                $disc->save();
                return response()->json(['message' => 'User saved successfully', 'disc' => $disc], 201);
            } else {
                $disc = new ReplyMessages([
                    'message' => $message,
                    'reply_messageId' => $replyId,
                    'userId' => $userId,
                ]);
                $disc->save();
                return response()->json(['message' => 'User saved successfully', 'disc' => $disc], 201);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiscussionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $_GET['data'];
        $discu = Discussion::where('blog_id', $id)->count();
        if ($discu != null) {
        $discu = Discussion::where('blog_id', $id)->with('user', 'reply_message')->orderBy('created_at', 'desc')->get();
            $newData = [];
            // $resData = [];
            foreach ($discu as $items) {
                $newItem = [
                    'id' => $items['id'],
                    'message' => $items['message'],
                    'like_count' => $items['like_count'],
                    'userId' => $items['userId'],
                    'blog_id' => $items['blog_id'],
                    'like_count' => $items['like_count'],
                    'report_count' => $items['report_count'],
                    'user' => $items['user'],
                    'reply_messages' => $items['reply_message'],
                    'created_at' => $items['created_at'],
                    'updated_at' => $items['updated_at'],

                ];
            };

            $newData[] = $newItem;

            return ["userInChat" => $discu];
        }else{
            return ["data" => 'null'];
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiscussionRequest $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discussion $discussion)
    {
        //
    }
}
