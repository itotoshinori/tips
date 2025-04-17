<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = Carbon::now()->subDays(30)->startOfDay(); // 30日前の00:00
        $results = Star::select('user_id', DB::raw('COUNT(*) as count'), DB::raw('SUM(point) as total_point'),
        DB::raw('COUNT(*) as count'), DB::raw('(SUM(point)/COUNT(*)) as averave'))->groupBy('user_id')
        ->where('created_at','>=' ,$date)
        ->orderByDesc('total_point')
        ->orderByDesc('averave')
        ->get(); 
        //return view('members/index', compact('members'));
        return view('stars/index', compact('results'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $points = $request->input('point'); // 配列を取得
        //$user = Auth::user();
        //ループ処理
        $implementation = false;
        foreach ($points as $key => $value) {
            $star = new Star();
            if ($value >= 1) {
                $star->user_id = $key;
                //$star->registration_user_id = $user->id;
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
            return back()->with('info', '登録されました');
        } else {
            return back()->with('error', '最低１名星をつけて下さい');
        }
    }
}
