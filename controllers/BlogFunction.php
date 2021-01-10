<?php


/**
 *  this is the controller method for inserting all blog
 * into the database (table name = 	blog_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $blog
 * @param $key
 * @param $blogTitle
 * @param $blogDescription
 * @param $blogImage
 * @param $staff_id 
 * @param $category_id
 * @param $price
 ***/

function insertBlog($blog,$key, $blogTitle,$blogDescription,$blogImage,$staff_id,$fileName,$types){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$blogTitle,$blogDescription,$blogImage,$staff_id,$fileName])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{

                if($blogImage === "video" || $blogImage === "audio"){

                        $links = $_POST[$fileName];

                        if(isEmpty([$links])){
                            echo "<div class='alert alert-danger'><b>Link Field can't be empty!</b>   Please fill and try again</div>";
                        }else {
                            # code...
                            $added = addslashes($blogDescription);
                            if($blog->saveblog(" `blog_tbl`(`id`, `staff_id`, `title`, `content`, `upload`, `path`, `date`, `status`, `delete`,`type`)",
                                "VALUES (null,'$staff_id','$blogTitle','$added','$links',''
                                ,now(),'0','0','$blogImage')")){
            
                                    echo "<div class='alert alert-success'><b> Congratulations!</b>  blog registered successfully</div>";
                            }else{
            
                                   echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                            }
                        }

                
                
                }else {
                    # code...
                    $uploaded = uploadImage ($fileName,"../loadedImage/");
                    if ( $uploaded[0] !== "TRUE" ){
                              echo $uploaded;
                    }else{
      
                        $added = addslashes($blogDescription);
                          if($blog->saveblog(" `blog_tbl`(`id`, `staff_id`, `title`, 
                          `content`, `upload`, `path`, `date`, `status`, `delete`, `type`)",
                              "VALUES (null,'$staff_id','$blogTitle','$added','$uploaded[1]','$uploaded[2]'
                              ,now(),'0','0','$types')")){
          
                                  echo "<div class='alert alert-success'><b> Congratulations!</b>  blog saved successfully</div>";
                          }else{
          
                                 echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                          }
                      
      
                    }
                }

          
              
         
        }
    }
}



/**
 *  this function handles the 
 *  edit of a blog details
 * 
 *  @param $blog
 *  @param $key
 *  @param $blogTitle
 *  @param $blogDescription
 *  @param $blogImage
 *  @param $category_id
 *  @param $blog_id
 * 
*/

function updateblogDtails ($blog,$key,$blogTitle,$blogDescription, $blogImage,$category_id ,$blog_id,$price){


    if(!empty($key) && $key === "1234567opiuyt" ){

        if(isEmpty([$blog,$blogTitle,$blogImage,$blogDescription, $blog_id,$category_id,$price])){
            echo "<div class='alert alert-danger'><b>Feilds can't be empty! </b>   Please fill up and try again</div>";
        }else{
            $uploaded = uploadImage ($foodImage,"./loadedImage/");
            if ( $uploaded[0] !== "TRUE" || $extra[0] !== "TRUE"){
                      echo $uploaded;
            }else{
                $added = addslashes($blogDescription);
                $sql = "update blog set title = '$foodTitle', description = '$added' ,image = '$uploaded[1]' ,path = '$uploaded[2]',category_id = '$category_id',price='$price' where id = '$blog_id' ";

                 if ( $blog->UpdateFood($sql) == ""){
                    echo "<div class='alert alert-success'><b> Congratulations! </b>  blog details successfully  </div>";
                 }else{
                    echo "<div class='alert alert-danger'><b>Something Happened ! </b>   Please try again</div>";
                 }

            }
        }


    }

}