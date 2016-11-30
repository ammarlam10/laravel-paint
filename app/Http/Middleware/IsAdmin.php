<?php

namespace App\Http\Middleware;

use App\Page;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $url = $request->route()->getPath();
        //echo $request;
        $pages = Page::all();

       // echo $url;
        if($user->admin=='1'){
            return $next($request);
    }
        foreach ($pages as $page) {
            $p = $page->url;

            if (strpos($url, $p) !== false) {
                $page_id=$page->id;
                break;
            }



        }
    //    echo $page_id;
        $result = DB::table('page_user')->where('user_id','=',$user->id)->where('page_id','=',$page_id)->exists();
        if($result){

             return $next($request);
  }
        return redirect('home');
    }

}

      //$page_id = DB::table('pages')->where($request->route()->getPath(),'like',%'url'%)->pluck('id');



//        //    echo $result;
//    if($result){

     //  return $next($request);
//    }
//
//    return redirect('home');


//}




//
//
//
//
//public function handle($request, Closure $next)
//{
//    $user = Auth::user();
//    echo $request->route()->getPath();
////        $page_id = DB::table('pages')->where('url','=',$request->route()->getPath())->pluck('id');
////        //echo $page_id;
////        $result = DB::table('page_user')->where('user_id','=',$user->id)->where('page_id','=',$page_id)->exists();
////        echo $result;
////    if($result){
////
//    return $next($request);
////    }
////
////    return redirect('home');
//
//}
//}
