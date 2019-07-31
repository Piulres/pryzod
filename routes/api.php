<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('categories', 'CategoriesController', ['except' => ['create', 'edit']]);

        Route::resource('books', 'BooksController', ['except' => ['create', 'edit']]);

});
