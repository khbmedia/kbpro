<?php







use Illuminate\Support\Facades\Route;







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






Route::get('/', function () {



    return view('welcome');



});



Route::prefix('admin')->middleware('auth')->group(function(){



    Route::get('/','Backend\DashboardController@index')->name('dashboard');



    // Role



    Route::prefix('role')->group(function(){



        Route::get('/','Backend\RoleController@index')->name('listRole');



        Route::get('/create','Backend\RoleController@create')->name('createRole');



        Route::post('/store','Backend\RoleController@store')->name('storeRole');



        Route::get('/edit/{id}','Backend\RoleController@edit')->name('editRole');



        Route::get('/delete/{id}','Backend\RoleController@destroy')->name('deleteRole');



        Route::get('/search','Backend\RoleController@show')->name('searchRole');



        Route::post('/update/{id}','Backend\RoleController@update')->name('updateRole');



    });



    // Category



    Route::prefix('category')->group(function(){



        Route::get('/','Backend\CategoryController@index')->name('listCategory');



        Route::get('/create','Backend\CategoryController@create')->name('createCategory');



        Route::post('/store','Backend\CategoryController@store')->name('storeCategory');



        Route::get('/edit/{id}','Backend\CategoryController@edit')->name('editCategory');



        Route::get('/delete/{id}','Backend\CategoryController@destroy')->name('deleteCategory');



        Route::get('/search','Backend\CategoryController@show')->name('searchCategory');



        Route::post('/update/{id}','Backend\CategoryController@update')->name('updateCategory');



    });



    // Price



    Route::prefix('price')->group(function(){



        Route::get('/','Backend\PriceController@index')->name('listPrice');



        Route::get('/create','Backend\PriceController@create')->name('createPrice');



        Route::post('/store','Backend\PriceController@store')->name('storePrice');



        Route::get('/edit/{id}','Backend\PriceController@edit')->name('editPrice');



        Route::get('/delete/{id}','Backend\PriceController@destroy')->name('deletePrice');



        Route::get('/search','Backend\PriceController@show')->name('searchPrice');



        Route::post('/update/{id}','Backend\PriceController@update')->name('updatePrice');



    });



    // Frequently



    Route::prefix('frequently')->group(function(){



        Route::get('/','Backend\FrequentlyController@index')->name('listFrequently');



        Route::get('/create','Backend\FrequentlyController@create')->name('createFrequently');



        Route::post('/store','Backend\FrequentlyController@store')->name('storeFrequently');



        Route::get('/edit/{id}','Backend\FrequentlyController@edit')->name('editFrequently');



        Route::get('/delete/{id}','Backend\FrequentlyController@destroy')->name('deleteFrequently');



        Route::get('/search','Backend\FrequentlyController@show')->name('searchFrequently');



        Route::post('/update/{id}','Backend\FrequentlyController@update')->name('updateFrequently');



    });

    // Preference



    Route::prefix('preference')->group(function(){



        Route::get('/','Backend\PreferenceController@index')->name('listPreference');



        Route::get('/create','Backend\PreferenceController@create')->name('createPreference');



        Route::post('/store','Backend\PreferenceController@store')->name('storePreference');



        Route::get('/edit/{id}','Backend\PreferenceController@edit')->name('editPreference');



        Route::get('/delete/{id}','Backend\PreferenceController@destroy')->name('deletePreference');



        Route::get('/search','Backend\PreferenceController@show')->name('searchPreference');



        Route::post('/update/{id}','Backend\PreferenceController@update')->name('updatePreference');

        Route::get('/edit_preference/{type}','Backend\PreferenceController@edit_preference_company')->name('editPreferenceCompany');

        Route::post('/update_preference/{type}','Backend\PreferenceController@update_preference_company')->name('updatePreferenceCompany');



    });

// Blog



    Route::prefix('blog')->group(function(){



        Route::get('/','Backend\BlogController@index')->name('listBlog');



        Route::get('/create','Backend\BlogController@create')->name('createBlog');



        Route::post('/store','Backend\BlogController@store')->name('storeBlog');



        Route::get('/edit/{id}','Backend\BlogController@edit')->name('editBlog');



        Route::get('/delete/{id}','Backend\BlogController@destroy')->name('deleteBlog');



        Route::get('/search','Backend\BlogController@show')->name('searchBlog');



        Route::get('blog_detail/{id}','Backend\BlogController@latest_detail')->name('blogDetail');



        Route::post('/update/{id}','Backend\BlogController@update')->name('updateBlog');



    });





    // Tour



    Route::prefix('tour')->group(function(){



        Route::get('/','Backend\TourController@index')->name('listTour');



        Route::get('/create','Backend\TourController@create')->name('createTour');



        Route::post('/store','Backend\TourController@store')->name('storeTour');



        Route::get('/edit/{id}','Backend\TourController@edit')->name('editTour');



        Route::get('/delete/{id}','Backend\TourController@destroy')->name('deleteTour');



        Route::get('/search','Backend\TourController@show')->name('searchTour');



        Route::get('tour_detail/{id}','Backend\TourController@detail')->name('tourDetail');



        Route::post('/update/{id}','Backend\TourController@update')->name('updateTour');



    });

    Route::post('/uploadFiles','Backend\UploadFileController@store')->name('uploadFile');

    Route::post('/deleteFiles', 'Backend\UploadFileController@delete')->name('deleteFile');

    // Project



    Route::prefix('project')->group(function(){



        Route::get('/','Backend\ProjectController@index')->name('listProject');



        Route::get('/create','Backend\ProjectController@create')->name('createProject');



        Route::post('/store','Backend\ProjectController@store')->name('storeProject');



        Route::get('/edit/{id}','Backend\ProjectController@edit')->name('editProject');



        Route::get('/delete/{id}','Backend\ProjectController@destroy')->name('deleteProject');



        Route::get('/search','Backend\BlogProject@show')->name('searchProject');



        Route::post('/update/{id}','Backend\ProjectController@update')->name('updateProject');



    });

// TravelType



Route::prefix('travel_type')->group(function(){



    Route::get('/','Backend\TravelTypeController@index')->name('listTravelType');



    Route::get('/create','Backend\TravelTypeController@create')->name('createTravelType');



    Route::post('/store','Backend\TravelTypeController@store')->name('storeTravelType');



    Route::get('/edit/{id}','Backend\TravelTypeController@edit')->name('editTravelType');



    Route::get('/delete/{id}','Backend\TravelTypeController@destroy')->name('deleteTravelType');



    Route::get('/search','Backend\BlogTravelType@show')->name('searchTravelType');



    Route::post('/update/{id}','Backend\TravelTypeController@update')->name('updateTravelType');



});



    // Testimonial



    Route::prefix('testimonial')->group(function(){



        Route::get('/','Backend\TestimonialController@index')->name('listTestimonial');



        Route::get('/create','Backend\TestimonialController@create')->name('createTestimonial');



        Route::post('/store','Backend\TestimonialController@store')->name('storeTestimonial');



        Route::get('/edit/{id}','Backend\TestimonialController@edit')->name('editTestimonial');



        Route::get('/delete/{id}','Backend\TestimonialController@destroy')->name('deleteTestimonial');



        Route::get('/search','Backend\TestimonialController@show')->name('searchTestimonial');



        Route::post('/update/{id}','Backend\TestimonialController@update')->name('updateTestimonial');



    });



    // Product



    Route::prefix('product')->group(function(){



        Route::get('/','Backend\ProductController@index')->name('listProduct');



        Route::get('/create','Backend\ProductController@create')->name('createProduct');



        Route::post('/store','Backend\ProductController@store')->name('storeProduct');



        Route::get('/edit/{id}','Backend\ProductController@edit')->name('editProduct');



        Route::get('/delete/{id}','Backend\ProductController@destroy')->name('deleteProduct');



        Route::get('/search','Backend\ProductController@show')->name('searchProduct');



        Route::post('/update/{id}','Backend\ProductController@update')->name('updateProduct');



    });



    // Service



    Route::prefix('service')->group(function(){



        Route::get('/','Backend\ServiceController@index')->name('listService');



        Route::get('/create','Backend\ServiceController@create')->name('createService');



        Route::post('/store','Backend\ServiceController@store')->name('storeService');



        Route::get('/edit/{id}','Backend\ServiceController@edit')->name('editService');



        Route::get('/delete/{id}','Backend\ServiceController@destroy')->name('deleteService');



        Route::get('/search','Backend\ServiceController@show')->name('searchService');



        Route::post('/update/{id}','Backend\ServiceController@update')->name('updateService');



    });



    // Client



    Route::prefix('client')->group(function(){



        Route::get('/','Backend\ClientController@index')->name('listClient');



        Route::get('/create','Backend\ClientController@create')->name('createClient');



        Route::post('/store','Backend\ClientController@store')->name('storeClient');



        Route::get('/edit/{id}','Backend\ClientController@edit')->name('editClient');



        Route::get('/delete/{id}','Backend\ClientController@destroy')->name('deleteClient');



        Route::get('/search','Backend\ClientController@show')->name('searchClient');



        Route::post('/update/{id}','Backend\ClientController@update')->name('updateClient');



    });



    // Users



    Route::prefix('user')->group(function(){



        Route::get('/','Backend\UserController@index')->name('listUser');



        Route::get('/create','Backend\UserController@create')->name('createUser');



        Route::post('/store','Backend\UserController@store')->name('storeUser');



        Route::get('/edit/{id}','Backend\UserController@edit')->name('editUser');



        Route::get('/delete/{id}','Backend\UserController@destroy')->name('deleteUser');



        Route::get('/search','Backend\UserController@show')->name('searchUser');



        Route::post('/update/{id}','Backend\UserController@update')->name('updateUser');



    });



    // Team



    Route::prefix('team')->group(function(){



        Route::get('/','Backend\TeamController@index')->name('listTeam');



        Route::get('/create','Backend\TeamController@create')->name('createTeam');



        Route::post('/store','Backend\TeamController@store')->name('storeTeam');



        Route::get('/edit/{id}','Backend\TeamController@edit')->name('editTeam');



        Route::get('/delete/{id}','Backend\TeamController@destroy')->name('deleteTeam');



        Route::get('/search','Backend\TeamController@show')->name('searchTeam');



        Route::post('/update/{id}','Backend\TeamController@update')->name('updateTeam');



    });



    // Choose Us



    Route::prefix('choose_us')->group(function(){



        Route::get('/','Backend\ChooseUsController@index')->name('listChooseUs');



        Route::get('/create','Backend\ChooseUsController@create')->name('createChooseUs');



        Route::post('/store','Backend\ChooseUsController@store')->name('storeChooseUs');



        Route::get('/edit/{id}','Backend\ChooseUsController@edit')->name('editChooseUs');



        Route::get('/delete/{id}','Backend\ChooseUsController@destroy')->name('deleteChooseUs');



        Route::get('/search','Backend\ChooseUsController@show')->name('searchChooseUs');



        Route::post('/update/{id}','Backend\ChooseUsController@update')->name('updateChooseUs');



    });

    // Social Media

    Route::prefix('social')->group(function(){



        Route::get('/','Backend\SocialController@index')->name('listSocial');

        

        Route::get('/create','Backend\SocialController@create')->name('createSocial');

        

        Route::post('/store','Backend\SocialController@store')->name('storeSocial');

        

        Route::get('/edit/{id}','Backend\SocialController@edit')->name('editSocial');

        

        Route::get('/delete/{id}','Backend\SocialController@destroy')->name('deleteSocial');

        

        Route::get('/search','Backend\SocialController@show')->name('searchSocial');

        

        Route::post('/update/{id}','Backend\SocialController@update')->name('updateSocial');

        

        });

// Destination

Route::prefix('destination')->group(function(){



    Route::get('/','Backend\DestinationController@index')->name('listDestination');

    

    Route::get('/create','Backend\DestinationController@create')->name('createDestination');

    

    Route::post('/store','Backend\DestinationController@store')->name('storeDestination');

    

    Route::get('/edit/{id}','Backend\DestinationController@edit')->name('editDestination');

    

    Route::get('/delete/{id}','Backend\DestinationController@destroy')->name('deleteDestination');

    

    Route::get('/search','Backend\DestinationController@show')->name('searchDestination');

    

    Route::post('/update/{id}','Backend\DestinationController@update')->name('updateDestination');

    

    });



    // Slide



    Route::prefix('Slide')->group(function(){



        Route::get('/','Backend\SlideController@index')->name('listSlide');

        

        Route::get('/create','Backend\SlideController@create')->name('createSlide');

        

        Route::post('/store','Backend\SlideController@store')->name('storeSlide');

        

        Route::get('/edit/{id}','Backend\SlideController@edit')->name('editSlide');

        

        Route::get('/delete/{id}','Backend\SlideController@destroy')->name('deleteSlide');

        

        Route::get('/search','Backend\SlideController@show')->name('searchSlide');

        

        Route::post('/update/{id}','Backend\SlideController@update')->name('updateSlide');

        

        });

    // Booking



Route::prefix('Booking')->group(function(){



    Route::get('/','Backend\BookingController@index')->name('listBooking');

    

    Route::get('/create','Backend\BookingController@create')->name('createBooking');

    

    Route::post('/store','Backend\BookingController@store')->name('storeBooking');

    

    Route::get('/edit/{id}','Backend\BookingController@edit')->name('editBooking');

    

    Route::get('/delete/{id}','Backend\BookingController@destroy')->name('deleteBooking');

    

    Route::get('/search','Backend\BookingController@show')->name('searchBooking');



    Route::get('/update_status/{id}/{status}','Backend\BookingController@update_status')->name('update_status_booking');

    

    Route::post('/update/{id}','Backend\BookingController@update')->name('updateBooking');

    

    });

    Route::get('/logout','Backend\UserController@logout')->name('logouts');







});



Auth::routes();







Route::post('/comment','Backend\CommentController@store')->name('comment');



Route::post('/contact','ContactUsController@store')->name('storeContact');







Route::get('/', 'HomeController@index')->name('home');



Route::get('/about','HomeController@about')->name('about');



Route::get('/latest','HomeController@latest')->name('blog');



Route::get('/our_client','HomeController@client')->name('client');



Route::get('/price','HomeController@price')->name('price');



Route::get('/service','HomeController@service')->name('service');


Route::get('/service_detail/{id}','HomeController@service_detail')->name('service_detail');
Route::get('/project','HomeController@project')->name('project');

Route::get('/project_detail/{id}','HomeController@project_detail')->name('project_detail');

Route::get('/contact','HomeController@contact')->name('contact');



Route::get('/product','HomeController@product')->name('product');



Route::get('/destination','HomeController@destination')->name('destination');



Route::get('/destination_detail/{id}','HomeController@destination_detail')->name('destination_detail');



Route::get('/tour','HomeController@tour')->name('tour');

Route::post('/tour_booking','HomeController@booking')->name('storeBook');



Route::get('/tour_detail/{id}','HomeController@tour_detail')->name('tour_detail');

Route::post('/tour_find','HomeController@find_tour')->name('find_tour');

Route::get('/latest_detail/{id}','HomeController@latest_detail')->name('latest_detail');

Route::get('/team','HomeController@team')->name('team');
Route::get('/team_detail/{id}','HomeController@team_detail')->name('team_detail');
Route::get('/latest_by_category/{id}','HomeController@latest_by_category')->name('latest_by_category');
Route::get('/privacy','HomeController@privacy')->name('privacy');
Route::get('/legal','HomeController@legal')->name('legal');

Route::get('/product_detail/{id}','HomeController@product_detail')->name('product_detail');



Route::get('/project_detail/{id}','HomeController@project_detail')->name('project_detail');



Route::get('/thanks',function(){

    return view('frontend.thanks');

})->name('thanks');







// Detail







