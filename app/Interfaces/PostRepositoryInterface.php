<?php

namespace App\Interfaces;

interface PostRepositoryInterface 
{
    public function getAll();
    public function getById($postId);
    public function destroy($postId);
    public function update($postId, array $data);
    public function create(array $data);
}
