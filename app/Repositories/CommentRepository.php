<?php

namespace App\Repositories;

use App\Interfaces\CommentRepositoryInterface;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentRepository implements CommentRepositoryInterface 
{

/*     public function getById($postId) 
    {
        return Comment::findOrFail($postId);
    }

    public function destroy($postId) 
    {
        return Comment::destroy($postId);
    }
    
    public function update($postId, array $data) 
    {
        return Comment::whereId($postId)->update($data);
    }
 */
    public function create(array $data) 
    {
        if(auth()->check()){
            return  auth()->user()->comments()->create($data);
        }
        return abort(403);
    }
}