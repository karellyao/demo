<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Post;
Route::get('/', function () {
	// $name = 'ouatt';
    // $isWeekend = date('N') >= 6;

    // $post = App\Post::find(1);
    // dd($post->title);

    // $post = new Post;
    // $post->title = 'Mon djoli titre';
    // $post->body = 'Mon dojli contenu';
    // $post->save();  
    
      // dd(Post::all());

    // $post = new Post(['title' => 'Maman', 'body' => 'Jolie Maman']);
    // $post->save();

    // $post = Post::create(['title' => 'Maman 2', 'body' => 'Jolie Maman 2']);

    DB::statement('DROP table posts');


    // $title = "Un super titre";
    // $body = "Un super contenu";
    // DB::insert('INSERT INTO posts(title, body) VALUES(:title, :body)',
    //     [
    //         'title' => $title,
    //         'body' => $body
    //     ]);

    // dump(DB::select('SELECT * FROM posts'));
    // dump(DB::table('posts')->where('id','>=', '2')->get());
    // dump(DB::table('posts')->whereTitleAndBody('juste un titre','juste un contenu')->get());
    
    // DB::table('posts')->insert([
    //     [
    //         'title' => 'magnifique titre 1',
    //         'body' => 'magnifique contenu 1'
    //     ],
    //     [
    //         'title' => 'magnifique titre 2',
    //         'body' => 'magnifique contenu 2'
    //     ]
    // ]);
   
    // dump(DB::table('posts')->whereId(1)->update(['title'=> 'titre 1', 'body' => 'contenu1']));

    // DB::table('posts')->whereId(5)->delete();
    // dump(DB::table('posts')->get());

//1 methode
	// $first_name = 'Ouattara';
	// $last_name = 'Abdoulaye cherif';

    // return view('welcome')->with('first_name', $first_name)->with('last_name', $last_name);

//2 methode

    // return view('welcome')->with([
    // 	'first_name' => $first_name,
    // 	'last_name' => $last_name
    // ]);

//3 methode

    // $data = [
    //  	'first_name' => 'Ouattara',
    //  	'last_name' => 'Abdoulaye'
    //  ];

    //  return view('welcome', $data);

//4 methode


    // $view = View::make('welcome');
    // $view->first_name = 'Ouattara';
    // $view->last_name = 'cherif abdo';

    // return $view;

//5 methode
//compact crée un tableau comme ceci ['first_name'  =>$first_name , 'last_name'=>$last_name]
	// return view('welcome', compact('name'));


	// return view('welcome')->withName('<h1>koko</h1>');

});


// Route::get('/about', function(){
//     return view('pages/about');
// });

Route::get('/help', function(){
  
    return view('pages/help');
});
// //7 methode


Route::get('article/{n}', function($n){

	return view('article')->with('numero', $n);
})->where('n','[0-9]+');
// 6 methode

// Route::get('/events', function(){

// 	$events = [
// 		'faire du php',
// 		'faire du java',
// 		'faire du javascript'
// 	];
// 	return view('events.index', compact('events'));
// });

//8 methode

    // Route::get('events/action', function() {
    //     // return view('events.action');
    // return redirect()->route('events/action/action'); 
        
    // });

// 99 methode

    // Route::get('/', 'WelcomeController@index')->name('home');

//10

// Route::get('article/{n}', 'ArticleController@show');

// Route::get('users', 'UsersController@create');
// Route::post('users', 'UsersController@store');

// Route::get('contact','ContactController@create');
// Route::post('contact','ContactController@store');

// Route::get('/test-contact', function(){
//       return new App\Mail\Contact([
//         'nom' => 'Durand',
//         'email' => 'durand@chezlui.com',
//         'message' => 'Je voulais vous dire que votre site est magnifique !'
//       ]);
// });
