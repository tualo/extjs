<?php

namespace tualo\Office\ExtJS\Middleware;
use tualo\Office\Basic\TualoApplication;
use tualo\Office\Basic\IMiddleware;

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
            }catch(Exception $e){
                TualoApplication::set('maintanceMode','on');
                TualoApplication::addError($e->getMessage());
            }
        },-100); // should be one of the last
    }
}