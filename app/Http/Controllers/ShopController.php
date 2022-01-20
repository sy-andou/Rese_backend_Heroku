<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

use App\Http\Requests\ShopRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Shop::with('area', 'genre', 'favorite', 'reserve.review')->get();
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
    public function store(ShopRequest $request)
    {
        $item = Shop::create([
            "name" => $request->name,
            "img_pass" => $request->img_pass,
            "summary" => $request->summary,
            "opening_time" => $request->opening_time,
            "closing_time" => $request->closing_time,
            "min_number" => $request->min_number,
            "max_number" => $request->max_number,
            "user_id" => $request->user_id,
            "area_id" => $request->area_id,
            "genre_id" => $request->genre_id
        ]);
        if ($item) {
            return response()->json([
                'message' => "店舗情報を登録しました。"
            ], 201);
        } else {
            return response()->json([
                'message' => "エラーが発生しました。店舗情報を更新できませんでした。"
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        $item = Shop::with('area', 'genre', 'favorite', 'reserve.review')->where('id', $shop->id)->get();
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(ShopRequest $request, Shop $shop)
    {
        $update = [
            "name" => $request->name,
            "img_pass" => $request->img_pass,
            "summary" => $request->summary,
            "opening_time" => $request->opening_time,
            "closing_time" => $request->closing_time,
            "min_number" => $request->min_number,
            "max_number" => $request->max_number,
            "user_id" => $request->user_id,
            "area_id" => $request->area_id,
            "genre_id" => $request->genre_id
        ];
        $item = Shop::where('id', $shop->id)->update($update);
        if ($item) {
            return response()->json(
                [
                    'message' => '店舗情報を更新しました。',
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'message' => 'エラーが発生しました。店舗情報を更新できませんでした。',
                ],
                404
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $item = Shop::where('id', $shop->id)->delete();
        if ($item) {
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
