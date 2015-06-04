<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('pdf', function()
{
 $html = '<html style="margin:25px;"><head><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"></head>
<body style="border:solid 5px black;border-radius: 10px;  margin:0px; padding:15px; font-size:16px;">'.
 			'<div style="text-align:center;"><div style="min-width:250; margin:auto; border:double 5px black; display:inline-block; padding:10px;   border-radius: 10px; font-size:23px; font-weight:bold; text-align:center;">This is exam</div></div>
 			<br>
 			<style>
 			.checkmark {
    display:inline-block;
    width: 22px;
    height:22px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
    transform: rotate(45deg);
}

.checkmark_stem {
    position: absolute;
    width:3px;
    height:9px;
    background-color:#000;
    left:11px;
    top:6px;
}

.checkmark_kick {
    position: absolute;
    width:6px;
    height:6px;
    background-color:#000;
    left:8px;
    top:12px;
}
</style>
 			<span class="checkmark">
    <div class="checkmark_stem"></div>
    <div class="checkmark_kick"></div>
</span>
 			<div style="font-weight:bold; " align="left">this is thethis is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the questpodksvopdsopdsion
 			this is the questionldfopj
 			this is the question
 			this is the questionofnndoo
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			this is the question
 			</div>
 			<br>
 			<div style="padding-left:20px;">this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			</div>
 			<div style="padding-left:20px;">this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			</div>
 			<div style="padding-left:20px;">this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			</div>
 			<div style="padding-left:20px;">this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			</div>
 			<div style="padding-left:20px;">this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			this is answer
 			</div>'
             .'</body></html>';
              // return $html;

    return PDF::load($html)->filename('example1.pdf')->show();
});
// Route::get('choosetype',['middleware'=>'auth',function(){

// }]);

Route::group(['middleware'=>['auth','choosetype']], function() 
{   
	Route::get('home','HomeController@index');
	Route::get('student', 'StudentController@index');
});
// Route::any('getthisfile/{filename}', 'FileController@index');
Route::group(['middleware'=>['guest']], function() 
{  
Route::get('login/{oauth?}','LoginController@index');
Route::post('login/{oauth}','LoginController@social');
});
Route::group(['middleware'=>['auth','cantchoosetype']], function() 
{   
	Route::resource('choosetype', 'ChooseController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
