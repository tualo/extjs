<?php
namespace tualo\Office\ExtJS\Routes;
use tualo\Office\Basic\TualoApplication;
use tualo\Office\Basic\Route;
use tualo\Office\Basic\IRoute;


class JS implements IRoute{
    public static function register(){

        Route::add('/extjs/lib.js',function(){
            $fname = '/ext-modern-all-debug.js';
            $path = dirname(dirname(__DIR__)).'/ext-7.3.0';
            TualoApplication::contenttype('text/javascript');
            TualoApplication::etagFile($path.$fname);
        });
        Route::add('/extjs/locale.js',function(){
            $fname = '/modern/locale/locale-de.js';
            $path = dirname(dirname(__DIR__)).'/ext-7.3.0';
            TualoApplication::contenttype('text/javascript');
            TualoApplication::etagFile($path.$fname);
        });
    }
}