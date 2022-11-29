<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;


class PostRepository implements PostRepositoryInterface 
{
    public function getAll() 
    {
        return Post::orderBy('id', 'desc')->get();
    }
    
    public function getById($postId) 
    {
        return Post::findOrFail($postId);
    }

    public function destroy($postId) 
    {
        return Post::destroy($postId);
    }
    
    public function update($postId, array $data) 
    {
        return Post::whereId($postId)->update($data);
    }

    public function create(array $data) 
    {
        return  auth()->user()->posts()->create($data);
    }
}