<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StarController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $points = $request->input('point'); // 配列を取得
        $user = Auth::user();
        //ループ処理
        $implementation = false;
        foreach ($points as $key => $value) {
            $star = new Star();
            if ($value >= 1) {
                $star->user_id = $key;
                $star->registration_user_id = $user->id;
                $star->point = $value;
                try {
                    // データベースに保存
                    $star->save();
                    $implementation = true;
                } catch (\Exception $e) {
                    log::error($e->getMessage());
                }
            }
        }
        if ($implementation == true) {
            return back()->with('info', '登録されました。ご協力ありがとうございました。');
        } else {
            return back()->with('error', '最低一名星をつけて下さい');
        }
    }
}
