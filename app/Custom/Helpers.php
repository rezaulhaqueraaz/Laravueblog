<?php
function imgPathSmall($imgName){
    return asset('imageGallery/img500/'.$imgName);
}
function fullImage($imgName){
    return asset('imageGallery/post/'.$imgName);
}
function thumbnail($imgName){
    return asset('imageGallery/thumbnail/'.$imgName);
}
function make_slug($string) {
    return preg_replace('/\s+/u', '-', trim($string));
}
