<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\ReserveRequest;

use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Reserve::with('shop.area', 'shop.genre', 'user', 'review')->withTrashed()->get();
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
    public function store(ReserveRequest $request)
    {
        $sameReserves = Reserve::where('shop_id', $request->shop_id)->where('date', $request->date)->where('time', $request->time)->get();
        $sumReserveNumber = 0;
        foreach ($sameReserves as $sameReserve) {
            $sumReserveNumber += $sameReserve['number'];
        }
        $reserveMaxNumber = Shop::where('id', $request->shop_id)->first()->max_number;
        $possibleReserveNumber = $reserveMaxNumber - $sumReserveNumber;
        if ($sumReserveNumber + $request->number <= $reserveMaxNumber) {
            Reserve::create($request->all());
            return response()->json([
                'message' => "予約が完了しました。"
            ], 201);
        } else {
            return response()->json([
                'message' => "予約可能人数を超過しています(残り{$possibleReserveNumber}人まで予約可能)。",
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        $item = Reserve::with('user', 'shop')->where('id', $reserve->id)->first();
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
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(ReserveRequest $request, Reserve $reserve)
    {
        $sameReserves = Reserve::where('shop_id', $request->shop_id)->where('date', $request->date)->where('time', $request->time)->get();
        $sumReserveNumber = 0;
        foreach ($sameReserves as $sameReserve) {
            $sumReserveNumber += $sameReserve['number'];
        }
        $reservedNumber = function ($request, $reserve) {
            if ($reserve->date === $request->date && $reserve->time === $request->time) {
                return $reserve->number;
            } else {
                return 0;
            }
        };
        $reserveMaxNumber = Shop::where('id', $request->shop_id)->first()->max_number;
        $tryReserveNumber = $sumReserveNumber + $request->number - $reservedNumber($request, $reserve);
        $possibleReserveNumber = $reserveMaxNumber - $sumReserveNumber + $reservedNumber($request, $reserve);
        if ($tryReserveNumber <= $reserveMaxNumber) {
            $update = [
                'date' => $request->date,
                'time' => $request->time,
                'number' => $request->number,
            ];
            Reserve::where('id', $reserve->id)->update($update);
            return response()->json(
                [
                    'message' => "予約を更新しました。",
                ],
                201
            );
        } else {
            return response()->json(
                [
                    'message' => "予約可能人数を超過しています(残り{$possibleReserveNumber}人まで予約可能)。",
                ],
                404
            );
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserve $reserve)
    {
        $item = Reserve::where('id', $reserve->id)->delete();
        if ($item) {
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
