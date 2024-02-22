<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * 스카우트 테스트
     *
     * 테스트 모델 불러 오기
     *
     * @param Request $req Description
     * @return type
     * @throws conditon
     **/
    public function ScoutTest(Request $req)
    {
        $test = Test::search($req->name);
        dump($test);
    }
}
