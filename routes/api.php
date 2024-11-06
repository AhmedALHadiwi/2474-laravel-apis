<?php

use App\Http\Controllers\PostStatusController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ReactionTypeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('users', function () {
    return "users Api";
});

//users
Route::resource('users', UserController::class);

//Reaction Type
Route::resource('reaction_type',ReactionTypeController::class);

//Post Statue
Route::resource('post_status',PostStatusController::class);

//Posts
Route::resource('posts',PostController::class);

//Reactions
Route::resource('reactions',ReactionController::class);

//Comments
Route::resource('comments',CommentController::class);

//Replies
Route::resource('replies',ReplyController::class);
