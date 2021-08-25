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
        $user_to_questions = $user->user_to_questions;

        return $user_to_questions;
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
