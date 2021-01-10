<?php



/**
 *  this is the controller method for inserting all student
 * into the database (table name = 	student_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $student
 * @param $key
 * @param $fullname
 * @param $school
 * @param $class
 * @param $gender 
 * @param $age
 * @param $goalforchild
 * @param $subjectselected 
 * @param $curriculum
 * @param $prefertutor
 * @param $username
 * @param $password
 * @param $confirmpassword
 ***/

function insertstudent($student,$key, $fullname, $school, $class,$gender,$age,$goalforchild,$subjectselected,
$curriculum,$prefertutor,$username,$password,$confirmpassword){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$fullname,$school,$class,$gender,$age,$goalforchild,$subjectselected,$curriculum,$prefertutor,$username,$password,$confirmpassword])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{
                
              if ( $password !== $confirmpassword ){
                        echo "Password must be Match!";
              }else{
                    if($student->saveStudent(" `student_tbl`(`id`, `fullname`, `school`, `class`, `gender`, `age`, `goalforchild`,
                     `subjectselected`, `curriculum`, `prefertutor`, `username`, `password`, `date`, `status`, `deleted`)",
                        "VALUES (null,'$fullname','$school','$class','$gender','$age','$goalforchild','$subjectselected','$curriculum'
                        ,'$prefertutor','$username','$password',now(),'0','0')")){
    
                            echo "<div class='alert alert-success'><b> Congratulations!</b>  Registion was successfully! <a href='../index.php' >Login to continue to the next step!</a></div>";
                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
                

              }
              
         
        }
    }
}


/**
 *  this is the controller method for inserting all student
 * into the database (table name = 	student_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $student
 * @param $key
 * @param $student_id
 * @param $email
 * @param $phonenumber
 * @param $occupation 
 * @param $fulladdress
 * @param $nearestbusstop
 * @param $relationshipwithlearner 
 ***/

function saveMoreStudentInfo($student,$key, $student_id, $surname, $email, $phonenumber,$occupation,$fulladdress,$nearestbusstop,
$relationshipwithlearner){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$surname,$email,$phonenumber,$occupation,$fulladdress,$nearestbusstop,$relationshipwithlearner])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{
         
                    if($student->saveStudent("  `profile_tbl`(`id`, `student_id`,
                     `surname`, `email`, `phonenumber`, `occupation`, `fulladdress`, `nearestbusstop`, 
                     `relationshipwithlearner`, `date`, `status`, `deleted`)",
                        "VALUES (null,'$student_id','$surname','$email','$phonenumber','$occupation','$fulladdress','$nearestbusstop',
                        '$relationshipwithlearner',now(),'0','0')")){
    
                            echo "<script> window.location.replace('./lesson.php')</script>";
                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
         
         
        }
    }
}



/**
 *  this is the controller method for inserting all student
 * into the database (table name = 	student_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $student
 * @param $key
 * @param $student_id
 * @param $email
 * @param $phonenumber
 * @param $occupation 
 * @param $fulladdress
 * @param $nearestbusstop
 * @param $relationshipwithlearner 
 ***/

function saveMoreStudentInfo_($student,$key, $student_id, $daysperweek, $hoursperday, $fromwhattime,$howlong,$startwhen,$intendedtutoriallocation,
$tutoriallocation,$nearestbusstop){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$daysperweek,$hoursperday,$fromwhattime,$howlong,$startwhen,$intendedtutoriallocation,$tutoriallocation
        ,$nearestbusstop])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{
         
                    if($student->saveStudent("  `lessonschedule_tbl`(`id`, `student_id`, `daysperweek`, `hoursperday`, `fromwhattime`,
                     `howlong`, `startwhen`, `intendedtutoriallocation`, `tutoriallocation`, `nearestbusstop`, `date`, `status`, `deleted`)",
                        "VALUES (null,'$student_id','$daysperweek','$hoursperday','$fromwhattime','$howlong','$startwhen','$intendedtutoriallocation',
                        '$tutoriallocation','$nearestbusstop',now(),'0','0')")){
    
                            echo "<div class='alert alert-success'><b> Congratulations! </b>   you have just successfully requested for a tutor</div>";

                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
         
         
        }
    }
}

/**
 * 
 *  this function handles the student login
 *  the key parameter ensure that this function 
 *  is not available to a non authorized user, while the
 *  staff tag is the unique tag given to every user at registration point.
 * 
 *  @param $student
 *  @param $key 
 *  @param $student_email 
 *  @param $student_password 
 */


function loginStudent ($student,$key, $student_email,$student_password){

    if(!empty($key) && $key === "1234567opiuyt" ){
        
            if((empty($student_email) || empty($student_password)) || (empty($student_email) && empty($student_password)) ){
                    echo "<div class='alert alert-danger'><b>Feilds can't be empty!</b>  please fill and try again.</div>";
            }else{
                    $sql = "select * from student_tbl where username = '$student_email' and password = '$student_password'";
                    $student_Online = $student->getAllStudentBySql($sql);
                    if(count($student_Online) > 0){
                          $_SESSION["student_Online_fullName"] = $student_Online[0]["fullname"];
                          $_SESSION["student_Online_id"] = $student_Online[0]["id"];
                         
                           echo "<script> location.replace('./student');</script>";

                    }else{
                        echo "<div class='alert alert-danger'><b>No User found for this details!</b>   Please try again</div>";
                    }
            }

    }

}



/**
 *  this function handles the 
 *  edit of a student details
 * 
 *  @param $student
 *  @param $key
 *  @param $studentTitle
 *  @param $studentDescription
 *  @param $studentImage
 *  @param $category_id
 *  @param $student_id
 * 
*/

function updateStudentDtails ($student,$key,$studentTitle,$studentDescription, $studentImage,$category_id ,$student_id,$price){


    if(!empty($key) && $key === "1234567opiuyt" ){

        if(isEmpty([$student,$studentTitle,$studentImage,$studentDescription, $student_id,$category_id,$price])){
            echo "<div class='alert alert-danger'><b>Feilds can't be empty! </b>   Please fill up and try again</div>";
        }else{
            $uploaded = uploadImage ($foodImage,"./loadedImage/");
            if ( $uploaded[0] !== "TRUE" || $extra[0] !== "TRUE"){
                      echo $uploaded;
            }else{
                $added = addslashes($studentDescription);
                $sql = "update student set title = '$foodTitle', description = '$added' ,image = '$uploaded[1]' ,path = '$uploaded[2]',category_id = '$category_id',price='$price' where id = '$student_id' ";

                 if ( $student->UpdateStudent($sql) == ""){
                    echo "<div class='alert alert-success'><b> Congratulations! </b>  student details successfully  </div>";
                 }else{
                    echo "<div class='alert alert-danger'><b>Something Happened ! </b>   Please try again</div>";
                 }

            }
        }


    }

}