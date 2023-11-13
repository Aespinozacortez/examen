<?php

function ctrlpass($request, $response, $container){
    $pass = $request->get(INPUT_GET,"pass");
    $password = "123";

    if($pass==$password){
        $response->setSession("identified",true);
    }else{
        http_response_code(500);    }
    die();
}