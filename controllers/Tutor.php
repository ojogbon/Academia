<?php



/**
 *  this is the controller method for inserting all product
 * into the database (table name = 	tutor_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $tutor
 * @param $key
 * @param $firstname
 * @param $lastname
 * @param $email
 * @param $phone 
 * @param $password
 * @param $confirmpassword
 ***/

function insertTutor($tutor,$key, $title, $firstname, $lastname,$email,$phone,$whatsapp,$qualification,
$fieldofstudy,$teachingexperience,$subjectofspecialization,$classofspecialization,$gender,$password
,$confirmpassword,$homeaddress,$officeaddress){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$title,$firstname,$lastname,$email,$phone,$whatsapp,$qualification,$fieldofstudy,$teachingexperience
        ,$subjectofspecialization,$classofspecialization,$gender,$password,$confirmpassword,$homeaddress,$officeaddress])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{
                
              if ( $password !== $confirmpassword ){
                        echo "Password must be Match!";
              }else{
                  $added_code = "787sdsd".rand(11111,99999)."89hsdsd";
                    if($tutor->savetutor(" `tutor_tbl`(`id`, `title`, `firstname`, `lastname`, `email`, `phone`,
                     `whatsapp`, `qualification`, `fieldofstudy`, `teachingexperience`, `subjectofspecialization`,
                     `classofspecialization`, `gender`, `password`, `homeaddress`, `officeaddress`, `date`, `status`, `deleted`)",
                        "VALUES (null,'$title','$firstname','$lastname','$email','$phone','$whatsapp','$qualification','$fieldofstudy'
                        ,'$teachingexperience','$subjectofspecialization','$classofspecialization','$gender','$password'
                        ,'$homeaddress','$officeaddress',now(),'0','0')")){
    
                            echo "<div class='alert alert-success'><b> Congratulations!</b>  Registion was successfully!</div>";
                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
                

              }
              
         
        }
    }
}


/**
 * 
 *  this function handles the tutor login
 *  the key parameter ensure that this function 
 *  is not available to a non authorized user, while the
 *  staff tag is the unique tag given to every user at registration point.
 * 
 *  @param $tutor
 *  @param $key 
 *  @param $tutor_email 
 *  @param $tutor_password 
 */


function loginTutor ($tutor,$key, $tutor_email,$tutor_password){

    if(!empty($key) && $key === "1234567opiuyt" ){
        
            if((empty($tutor_email) || empty($tutor_password)) || (empty($tutor_email) && empty($tutor_password)) ){
                    echo "<div class='alert alert-danger'><b>Feilds can't be empty!</b>  please fill and try again.</div>";
            }else{
                    $sql = "select * from tutor_tbl where email = '$tutor_email' and password = '$tutor_password'";
                    $tutor_Online = $tutor->getAlltutorBySql($sql);
                    if(count($tutor_Online) > 0){
                          $_SESSION["tutor_Online_fullName"] = $tutor_Online[0]["firstname"].' '.$tutor_Online[0]["lastname"] ;
                          $_SESSION["tutor_Online_id"] = $tutor_Online[0]["id"];
                         
                           echo "<script> location.replace('./tutor');</script>";

                    }else{
                        echo "<div class='alert alert-danger'><b>No User found for this details!</b>   Please try again</div>";
                    }
            }

    }

}



/**
 *  this function handles the 
 *  edit of a product details
 * 
 *  @param $product
 *  @param $key
 *  @param $productTitle
 *  @param $productDescription
 *  @param $productImage
 *  @param $category_id
 *  @param $product_id
 * 
*/

function updateProductDtails ($product,$key,$productTitle,$productDescription, $productImage,$category_id ,$product_id,$price){


    if(!empty($key) && $key === "1234567opiuyt" ){

        if(isEmpty([$product,$productTitle,$productImage,$productDescription, $product_id,$category_id,$price])){
            echo "<div class='alert alert-danger'><b>Feilds can't be empty! </b>   Please fill up and try again</div>";
        }else{
            $uploaded = uploadImage ($foodImage,"./loadedImage/");
            if ( $uploaded[0] !== "TRUE" || $extra[0] !== "TRUE"){
                      echo $uploaded;
            }else{
                $added = addslashes($productDescription);
                $sql = "update product set title = '$foodTitle', description = '$added' ,image = '$uploaded[1]' ,path = '$uploaded[2]',category_id = '$category_id',price='$price' where id = '$product_id' ";

                 if ( $product->UpdateFood($sql) == ""){
                    echo "<div class='alert alert-success'><b> Congratulations! </b>  Product details successfully  </div>";
                 }else{
                    echo "<div class='alert alert-danger'><b>Something Happened ! </b>   Please try again</div>";
                 }

            }
        }


    }

}