<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Post;
use App\User;



class PostPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, Post $post) {
        return $user->id == $post->user_id;
    }
    
    public function update(User $user, Post $post) {
        return $user->id == $post->user_id;
    }
    
    public function edit(User $user, Post $post) {
        return $user->id == $post->user_id;
    }
    
}
