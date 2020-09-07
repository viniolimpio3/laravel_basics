<?php
function load_module($module=false, $data=false, $template='templates.web_template'){

    if(!$module) return false;

    // $dir = explode( '.', $module );
    // $dir = implode('/',$dir);

    $data['page'] = $module;    

    return view($template, $data);
}   
function anti_injection($str){
    $str = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|hi|'|´|\*|--|\\\\)/i", '', $str);
    $str = trim($str); //limpa espaços vazio
    $str = strip_tags($str); //tira tags html e php
    return $str;
}

function remove_accent($string=NULL){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c c"),$string);
}

function getFileExtension($file){
    if( !$file['size'] > 0 ) return false;
    $ext = end(explode('.',$file['name']));
    return $ext ? $ext : false;
}

function base_url($path=false){
    $url = url('/').'/';
    if($path) $url .= "/$path";
    return $url;
}



?>