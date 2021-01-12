<?php

namespace Tualo\Office\ExtJS\Middlewares;
use Tualo\Office\Basic\TualoApplication;
use Tualo\Office\Basic\IMiddleware;

class JS implements IMiddleware{
    public static function register(){
        TualoApplication::use('extjs',function(){
            try{
                
                TualoApplication::javascript( 
                    'cmp_ext', 
                    './extjs/lib.js',
                    [],
                    -100 
                );
                TualoApplication::javascript( 
                    'cmp_ext_locale', 
                    './extjs/locale.js',
                    [],
                    -100 +1000
                );
            }catch(Exception $e){
                TualoApplication::set('maintanceMode','on');
                TualoApplication::addError($e->getMessage());
            }
        },-100); // should be one of the last
    }
}