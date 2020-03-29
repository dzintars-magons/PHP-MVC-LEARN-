<?php

require_once '../src/classes/Database.php';

require_once '../src/classes/Route.php';

require_once '../controllers/Controller.php';

require_once '../controllers/Index.php';

require_once '../controllers/AboutUs.php';

require_once '../controllers/ContactUs.php';

Route::set('index.php', function(){
    Index::createView('index');
});

Route::set('about-us', function(){
    AboutUs::createView('AboutUs');
});

Route::set('contact-us', function(){
    ContactUs::createView('ContactUs');
});