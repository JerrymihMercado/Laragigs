<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
        // [
        // [
        //     'id' => 1,
        //     'title' => 'Listing One',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia saepe culpa quis fugiat distinctio laudantium voluptatem modi accusantium neque voluptatum!'
        // ],
        // [
        //     'id' => 2,
        //     'title' => 'Listing Two',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia saepe culpa quis fugiat distinctio laudantium voluptatem modi accusantium neque voluptatum!'
        // ]
        // ] 
    ]);
});

// Route::get('/hello', function(){
//     return response('<h1>Hello world</h1>', 200) 
//     ->header('Content-Type', 'text/plain')
//     ->header('doe', 'bar');
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return($request->name . ' ' . $request->city);
// });

//*single listing
Route::get('/listings/{listing}', function(Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);

    
});
