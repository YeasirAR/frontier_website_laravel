<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

use App\Http\Middleware\Localization;

Route::get('language/{locale}', function ($locale) {
    session()->put('locale', $locale);

    return redirect()->back();
});

Route::middleware([Localization::class])->group(function() {
    Route::view('/', 'home')->name('home');
    Route::view('/philosophy', 'philosophy')->name('philosophy');
    Route::view('/sectors', 'sectors')->name('sectors');
    Route::view('/services', 'services')->name('services');


    Route::get('/experience', function() {

        $key_members = [
            (object) [
                "name" => "experience.section4.keymembers1.name",
                "position" => "experience.section4.keymembers1.position",
                "description" => (object) [
                    "desktop" => "experience.section4.keymembers1.description.desktop",
                    "mobile" => "experience.section4.keymembers1.description.mobile",
                ],
                "img" => "images/members/Head-Shot-1.jpg"
            ],
            (object) [
                "name" => "experience.section4.keymembers2.name",
                "position" => "experience.section4.keymembers2.position",
                "description" => (object) [
                    "desktop" => "experience.section4.keymembers2.description.desktop",
                    "mobile" => "experience.section4.keymembers2.description.mobile",
                ],
                "img" => "images/members/Headshot-Arnaud-1.jpg"
            ],
            (object) [
                "name" => "experience.section4.keymembers3.name",
                "position" => "experience.section4.keymembers3.position",
                "description" => (object) [
                    "desktop" => "experience.section4.keymembers3.description.desktop",
                    "mobile" => "experience.section4.keymembers3.description.mobile",
                ],
                "img" => "images/members/Miles-Headshot-1.jpg"
            ],
            (object) [
                "name" => "experience.section4.keymembers4.name",
                "position" => "experience.section4.keymembers4.position",
                "description" => (object) [
                    "desktop" => "experience.section4.keymembers4.description.desktop",
                    "mobile" => "experience.section4.keymembers4.description.mobile",
                ],
                "img" => "images/members/Jordan-Headshot-1.jpg"
            ],
            (object) [
                "name" => "experience.section4.keymembers5.name",
                "position" => "experience.section4.keymembers5.position",
                "description" => (object) [
                    "desktop" => "experience.section4.keymembers5.description.desktop",
                    "mobile" => "experience.section4.keymembers5.description.mobile",
                ],
                "img" => "images/members/James-Leech-1.jpg"
            ],
        ];

        $advisors = [
            (object) [
                "name" => "experience.section4.advisor1.name",
                "position" => "experience.section4.advisor1.position",
                "description" => (object) [
                    "desktop" => "experience.section4.advisor1.description.desktop",
                    "mobile" => "experience.section4.advisor1.description.mobile",
                ],
                "img" => "images/members/James-Edmiston-1.jpg"
            ],
            (object) [
                "name" => "experience.section4.advisor2.name",
                "position" => "experience.section4.advisor2.position",
                "description" => (object) [
                    "desktop" => "experience.section4.advisor2.description.desktop",
                    "mobile" => "experience.section4.advisor2.description.mobile",
                ],
                "img" => "images/members/MIchael-Tory-1.jpg"
            ],
            (object) [
                "name" => "experience.section4.advisor3.name",
                "position" => "experience.section4.advisor3.position",
                "description" => (object) [
                    "desktop" => "experience.section4.advisor3.description.desktop",
                    "mobile" => "experience.section4.advisor3.description.mobile",
                ],
                "img" => "images/members/Hesketh-2-BW2-1.png"
            ],
        ];

        //dd( $key_members, $advisors );
        return view('experience')
            ->with("key_members", $key_members)
            ->with("advisors", $advisors);

    })->name('experience');

    Route::view('/contact', 'contact')->name('contact');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/news/{slug}', [BlogController::class, 'show'])->name('news.show');
Route::get('/news', [BlogController::class, 'index'])->name('news');
