<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Only allow users to edit their own posts.
        Gate::define('editPost', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        //Only admin or same user can delete posts.
        Gate::define('deletePost', function (User $user, Post $post) {
            return (($user->id === $post->user_id) || ($user->isAdmin == 1));
        });

        //Only admin or same user can delete posts.
        Gate::define('deleteComment', function (User $user, Comment $comment) {
            return (($user->id === $comment->user_id) || ($user->isAdmin == 1));
        });
    }
}
