<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Review::with('reserve')->get();
        return response()->json([
            'data' => $item
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Review::create($request->all());
        return response()->json([
            'message' => "来店を確認したのでレビューを投稿できるようになりました。"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewRequest $request, Review $review)
    {
        $login_user = Review::with('reserve')->where('id', $review->id)->first()->reserve->user_id;
        if ($login_user === $request->login_user) {
            $update = [
                'evaluation' => $request->evaluation,
                'comment' => $request->comment,
            ];
            $item = Review::where('id', $review->id)->update($update);
        }
        if ($item) {
            return response()->json(
                [
                    'message' => 'レビューを投稿しました。',
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'message' => 'エラーが発生しました。レビューを投稿できませんでした。',
                ],
                404
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
