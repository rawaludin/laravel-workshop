<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class ModifyPostMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            $id = $request->route()->getParameter('posts');
            $post = \App\Post::findOrFail($id);
            $user = $this->auth->user();
            if ($post->user_id != $user->id) {
                return redirect()->route('posts.index')->with('status', 'No Access.');
            }
        }
        return $next($request);
    }
}
