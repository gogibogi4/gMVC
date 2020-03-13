<?php

Route::get('/contact', function () {
    return new ViewResponse('contact');
});

Route::get('/about', function () {
    return new ViewResponse('about');
});

Route::post('/post-test', function ($request) {
    return new JSONResponse($request->getRequestBody());
});

?>