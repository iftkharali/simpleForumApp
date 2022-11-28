<?php

namespace App\Interfaces;

interface CommentRepositoryInterface 
{
/*     
    public function getById($commentId);
    public function destroy($commentId);
    public function update($commentId, array $data);
 */
    public function create(array $data);
}
