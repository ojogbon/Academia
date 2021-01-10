<?php

include "call.php";

 include "BlogFunction.php";

include ($_SERVER['DOCUMENT_ROOT']."/". $parent_path.'models/Blog.php');


function doBlogCheck () {

     $blog = new Blog();
    
         if(is_ajax_resquest()){

             $key = "1234567opiuyt";
           

             if(RequestType() === 0){
                 echo json_encode(getAllBlogs($blog));
    //         }else{
    //                 echo 5;
             }
            
        
         }
}

function getAllblogs ($blog){
    return $blog->getAllBlog();
}
doBlogCheck ();
