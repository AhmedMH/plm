<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller {

	public function __construct()
	{

	/*	$this->middleware('nocache');
		$this->middleware('guest');*/
	}

		public function index($oauth=null)
		{
			
		if($oauth != null)
		{
			if(\Request::has('code') || \Request::has('oauth_token'))
			{
				$user = \Socialite::driver($oauth)->user();
				// dd($user);
				$social_id=$user->getId();
				$finduser = \App\User::firstOrNew([$oauth.'_id'=>$social_id]);
				
				if(! $finduser->exists)
				{
					$finduser = \App\User::firstOrNew(['email'=>$user->getEmail()]);
					$oauthid=$oauth.'_id';
					if(! $finduser->exists)
				{	
					$finduser->name=$user->getName();
					$finduser->email=$user->getEmail();
					$finduser->password=\Crypt::encrypt(md5(mt_rand()));
					if(isset($user->user['gender'])) 
					{
					$finduser->gender=$user->user['gender'];
					}
				}
				//dd($user->id);
					$finduser->$oauthid=$social_id;
					$finduser->save();
				}
				\Auth::login($finduser,true);
				$avatar='imgs/users/user_avatar_'.\Auth::User()->id.'.png';
				if(!file_exists($avatar)) file_put_contents($avatar,file_get_contents($user->getAvatar().'&sz=160&width=160&height=160'));
				/*$avatar='user_avatar_'.\Auth::User()->id.'.png';
				if(! \Storage::disk('local')->exists($avatar)) \Storage::disk('local')->put($avatar, file_get_contents($user->getAvatar().'&sz=160&width=160&height=160'));*/
				return redirect('home');


/*
// All Providers
$user->getId();
$user->getNickname();
$user->getName();
$user->getEmail();
$user->getAvatar();*/

/*echo $user->getId().'<br>';
echo $user->getNickname().'<br>';
echo $user->getName().'<br>';
echo $user->getEmail().'<br>';
echo $user->getAvatar().'&sz=160&width=160&height=160<br>';
$user->facebook_id=$user->id;

dd($user);*/

			}
		}

			return view('login');
		}


	public function social ($oauth)
	{

		return \Socialite::with($oauth)->redirect();
		


	}

}
