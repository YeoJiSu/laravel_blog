<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

// php artisan make:controller UserController
class UserController extends Controller
{
    public function getUser($id) {

        $user = User::find($id);
        $only_user = User::find($id);

        // 18번째 라인을 주석으로 없애서 실행해보고 결과 비교하기
        $questions = $user->user_to_questions;

        // 22번째 라인의 $user를 $only_user와 $questions 로 변경해서 결과 비교하기
        return response()->json([
            'data' => $questions
        ]);
    }

    public function createUser(){

        $random_string = md5(microtime());
        $createUser = User::create([
            "name" => "123",
            "user_id" => $random_string,
            "email" => $random_string,
            "password" => $random_string,
            "tel" => $random_string,
            "private" => 0,
            "third_party" => 0,
            "address" => "123"
        ]);

        return $createUser;
    }

    public function createQuestion($user_id) {

        $random_string = md5(microtime());
        $createQuestion = Question::create([
            'user_id' => $user_id,
            'type' => 0,
            'title' => $random_string,
            'content' => $random_string,
            'answer' => $random_string,
        ]);

        return $createQuestion;
    }
}
