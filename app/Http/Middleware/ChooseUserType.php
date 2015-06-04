<?php namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;
use Closure;

class ChooseUserType {



	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// $url = $request->path();
			if(\Auth::user()->role==0)
		{
			// return new RedirectResponse(url('/choosetype'))-with(['role'=>'admin']);
			return redirect(url('/choosetype'))/*->withInput(['role'=>'admin'])*/;

		}
	

		return $next($request);
	}

}
