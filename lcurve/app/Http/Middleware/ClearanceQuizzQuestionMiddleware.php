<?php

namespace App\Http\Middleware;

use Closure;

class ClearanceQuizzQuestionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->hasPermissionTo('Administrator Permissions')){
        return $next($request);
      }

      if($request->is('quizzQustions/create')){
        if(Auth::user()->hasPermissionTo('Create QuizzQuestion')){  
          return $next($request);
        }
        abort('401',"You dont have permission");
      }

      if($request->is('quizzQustions/*/edit')){
        if(Auth::user()->hasPermissionTo('Edit QuizzQuestion')){
          return $next($request);
        }
        abort('401',"You dont have permission");
      }

      if($request->isMethod('Delete')){
        if(Auth::user()->hasPermissionTo('Delete QuizzQuestion')){
          return $next($request);
        }
        abort('401',"You dont have permission");
      }
      return $next($request);

    }
}
