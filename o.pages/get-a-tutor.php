
<?php 

include "../controllers/central.php";
include "../controllers/Student.php";

?>

<!-- 
  About  Author
  And some baic info 
  -->

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="AI Group Developers' - Adejoju Jeremiah">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Tutor | Academia O</title>
    
    <?php require_once '../includes/header.php'; ?>
    
    <!-- page detail - active -->
    <div class="text-center">
      <div id="current-page-detail" class="border border-warning rounded shadow container-fluid w-25">
        <a class="myTextColor tdn text-center h4" href="../index.php">Home</a>
        <div class="animate d-inline"> >>> </div>
        <a class="myTextColor tdn text-danger text-center h4" href="#">Get a Tutor</a>
      </div>
    </div>
   
</div>




<!-- .......................................................Get A Tutor................................................ -->
<div class="container-fluid py-5 orange text-white">
  <div class="container pt-5">

    <p class="h1 text-center font-weight-bold fontStyle text-danger">How To Get A Home Tutor?</p>
    <hr class="styled">
    <br><br>

    <div class="pb-5 how">
      <p class="font-weight-normal text-center h3 pb-5">Getting a <span class="text-danger">Professional Home Tutor</span> is easier than you think. <br> See how<span class="text-danger font-weight-bold"> easy,</span> below.</p>
    </div>

    <!-- Step 1 -->
    <div class="row mb-5 pb-5">
      <div class="col-md-6 text-white pt-lg-3">
          <h4 class="animate display-2 float-left pr-4">01.</h4>
            <div class="text-left">
              <a class="text-danger h2">Place a request:</a>
            </div>
            <div class="text-left pl-5 ml-5">
              <p class="h4 text-justify pt-4 pl-5 padText">Fill in the request form on our website or put a call through to our office.</p>
            </div>
      </div>

      <div class="col-md-6 pt-lg-3">
        <img class="shadow border border-white rounded imgResize" src="../img/tutor-form.jpg" height= 300rem; width= 500rem;>
      </div>
    </div>
    
    <!-- Step 2 -->
    <div class="row mb-5 pb-5">
      <div class="col-md-6 pt-lg-3 imgPD pd">
        <img class="shadow border border-white rounded" src="../img/home-tutor3.jpg" height= 300rem; width= 400rem;>
      </div>

      <div class="col-md-6 pt-lg-3 zid">
          <h4 class="animate display-2 float-left pr-4">02.</h4>
            <div class="text-left">
              <a class="text-warning h2">Select a tutorial schedule:</a>
            </div>
            <div class="text-left pl-5 ml-5">
              <p class="h4 text-justify pt-4 pl-5 padText">Select a schedule that matches your budget and desired learning goals.</p>
            </div>
      </div>
    </div>

    <!-- Step 3 -->
    <div class="row mb-5 pb-5">
      <div class="col-md-6 text-white pt-lg-3">
        <h4 class="animate display-2 float-left pr-4">03.</h4>
          <div class="text-left">
            <a class="text-success h2">Pay a processing fee:</a>
          </div>
          <div class="text-left pl-5 ml-5">
            <p class="h4 text-justify pt-4 pl-5 padText">A non-refundable fee of N500 is required to process your request. We will have to search thoroughly through our database in other to find a tutor that best match your request.</p>
          </div>
      </div>

      <div class="col-md-6 px-lg-5">
        <img class="shadow border border-white rounded" src="../img/get-in-touch.jpg" height= 300rem; width= 400rem;>
      </div>
    </div>

    <!-- Step 4 -->
    <div class="row mb-5 pb-5 imgPD pd">
      <div class="col-md-6 pt-lg-3 imgPD pd pdmore">
        <img class="shadow border border-white rounded" src="../img/get-home-tutor.jpg" height= 300rem; width= 400rem;>
      </div>

      <div class="col-md-6 pt-lg-3 zid">
        <h4 class="animate display-2 float-left pr-4">04.</h4>
          <div class="text-left">
            <a class="text-primary h2">Select your preferred tutor:</a>
          </div>
          <div class="text-left pl-5 ml-5">
            <p class="h4 text-justify pt-4 pl-5 padText">We’ll send you options of tutors near you who are most qualified for your request and have produced good results with kids like yours. Once you select your most preferred tutor, you can begin tutorials. Then watch your kids improve!</p>
          </div>
      </div>
    </div>
    
    <div class="container w-50 py-5">
        <a href="#gtf" class="btn btn-lg btn-block btn-outline-light shadow">Start now!</a>
    </div>

  </div>
</div>


<!-- ..........................................................FAQS...................................................................... -->
<div class="bg-light">
    <div class="pt-5">
        <p class="display-4 text-muted text-center pt-5 pb-2"><span class="text-danger">F</span><img height="70rem" width="60rem" src="../img/faq.svg"><span class="myTextColor">Qs</span></p>
        <hr class="styled">
    </div>


  <div class="container w-75 pb-5 pt-5">
    <p class="lead text-secondary">By providing top-quality tutoring in line with relevant curriculum, we help students understand various subjects. Whether you need help to prepare for an exam, get homework done, or want to strengthen specific areas, our experienced and fully vetted tutors will help you achieve your goals.</p>
  </div>

  <div class="container w-50">
    <h5 class="text-center">QUESTIONS YOU MAY WANT TO ASK?</h5>
    <hr class="gradient">
  </div>

    <div style="padding-bottom:20%; margin-top:10%;" style="postion:relative;">

        <div class="mt-2" style="postion:absolute; margin-left:40%; transform: rotate(10deg); position: absolute;">
            <img class="border border-danger" style="border-top-right-radius:50px; border-bottom-left-radius:50px;" height="500rem" width="400rem" src="../img/coding3.jpg">
        </div>

        <div class="container ml-auto my-2 pb-3" style="postion:absolute;">
            <div class="row">
                
                <div class="col-lg-6 px-5">
                    <div id="accordion">
                        <div class="card card-accordion">
                            
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <div class="btn w-100 collapse-content text-muted" data-toggle="collapse" data-target="#collapse-q1" aria-expanded="false" aria-controls="collapse-q1">
                                      Where will the Tutorials hold?
                                        <span class="float-right text-bold"> + </span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse-q1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body text-muted">
                                You chose where works best for you. Tutorials may hold in the comfort of your home or your office but must strictly meet up with our tutorial location requirements and guidelines. All tutorials are delivered offline; in-person.
                                </div>
                            </div>
                            
                        </div> 
                    </div>    
                </div>

            </div>

            <div class="row">
                
                <div class="col-lg-6 px-5">
                    <div id="accordion">
                        <div class="card card-accordion">
                            
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <div class="btn w-100 collapse-content text-muted" data-toggle="collapse" data-target="#collapse-q2" aria-expanded="false" aria-controls="collapse-q2">
                                      How much does the Tutorial cost?
                                        <span class="float-right text-bold"> + </span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse-q2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body text-muted">
                                The cost of tutorial will depend on your <strong>geographical area, duration of tutorial per day and the number of students.</strong> You get up to 10% discounts for multiple students. Please note that we require a one-time non-refundable fee of 500 Naira in order to process your request.                            </div>
                            </div>
                            
                        </div> 
                    </div>    
                </div>

            </div>

            <div class="row">
                
                <div class="col-lg-6 px-5">
                    <div id="accordion">
                        <div class="card card-accordion">
                            
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <div class="btn w-100 collapse-content text-muted" data-toggle="collapse" data-target="#collapse-q3" aria-expanded="false" aria-controls="collapse-q3">
                                      How do I pay for my Tutorials?
                                        <span class="float-right text-bold"> + </span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse-q3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body text-muted">
                                  You are required to pay the tutorial fee ahead. You can pay directly to our bank account via bank deposit, mobile transfer or POS. Apart from the above processing fee of 500 Naira, you don't have to pay for anything until we have found your perfect Tutor and you're ready to begin tutorial. We closely monitor tutorial delivery and support you in any emergencies. 
                                </div>
                            </div>
                            
                        </div> 
                    </div>    
                </div>

            </div>

            <div class="row">
                
                <div class="col-lg-6 px-5">
                    <div id="accordion">
                        <div class="card card-accordion">
                            
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <div class="btn w-100 collapse-content text-muted" data-toggle="collapse" data-target="#collapse-q4" aria-expanded="false" aria-controls="collapse-q4">
                                      How do you verify your Tutors?
                                        <span class="float-right text-bold"> + </span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse-q4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body text-muted">
                                Each tutor has been thoroughly screened for the subject expertise, personality, and safety by top professionals in the education industry. We conduct lengthy interviews, request and verify referees and test their knowledge of the subject to ensure your peace of mind.
                                </div>
                            </div>
                            
                        </div> 
                    </div>    
                </div>

            </div>

            <div class="row">
                
                <div class="col-lg-6 px-5">
                    <div id="accordion">
                        <div class="card card-accordion">
                            
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <div class="btn w-100 collapse-content text-muted" data-toggle="collapse" data-target="#collapse-q5" aria-expanded="false" aria-controls="collapse-q5">
                                      How do you ensure quality and effective delivery of Tutorials?
                                        <span class="float-right text-bold"> + </span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse-q5" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body text-muted">
                                Our tutors have undergone various screening phases, and competency assessments. Only the top candidates were interviewed and the very bests were hand-picked. Beyond that, after tutorials, clients do rate tutors' performance and those whose ratings fall below 60 percent are not allowed to continue. So your tutor will either be a newly approved tutor or have been rated above 60 percent by previous clients. 
                                </div>
                            </div>
                            
                        </div> 
                    </div>    
                </div>

            </div>

            <div class="row">
                
                <div class="col-lg-6 px-5">
                    <div id="accordion">
                        <div class="card card-accordion">
                            
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <div class="btn w-100 collapse-content text-muted" data-toggle="collapse" data-target="#collapse-q6" aria-expanded="false" aria-controls="collapse-q6">
                                      How quickly can I get a tutor?
                                        <span class="float-right text-bold"> + </span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse-q6" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body text-muted">
                                We have several verified tutors, and we are sure there are some of them who live in your area. If you pay the processing fee, you can get one within 48 hours. If not, it may take up to 2 weeks for us to recruit one that meets our standards. Just place a request above and we'll take it up from there.                            </div>
                            </div>
                            
                        </div> 
                    </div>    
                </div>

            </div>

        </div>

    </div>
</div>


<!-- ...........................................Registration form................................................ -->  
<div id="gtf" class="container-fluid orange py-5"> 
    
    <div class="container w-50">
      <div class="text-center pb-3">
        <img height= 120px; width= 120px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg">
      </div>

      <h3 class="text-center text-white pb-3 pt-5">HOME TUTOR <span class="text-danger">REQUEST FORM</span></h3>
      <hr class="styled">
    </div>
      
      <ul class="nav nav-tabs container pt-5 px-5" id="myTab" role="tablist">
        <li class="nav-item col-md-3 col-sm-6 bg-danger">
          <a class="nav-link text-white" id="aboutChild-tab" data-toggle="tab" href="#aboutChild" role="tab" aria-controls="aboutChild" aria-selected="true">1.  CHILD's REGISTRATION</a>
        </li>
        <!-- <li class="nav-item col-md-3 col-sm-6 bg-warning">
          <a class="nav-link text-white" id="clientsContact-tab" data-toggle="tab" href="#clientsContact" role="tab" aria-controls="clientsContact" aria-selected="false">2. CLIENT’S CONTACT</a>
        </li>
        <li class="nav-item col-md-3 col-sm-6 bg-info">
          <a class="nav-link text-white" id="lessonSchedule-tab" data-toggle="tab" href="#lessonSchedule" role="tab" aria-controls="lessonSchedule" aria-selected="false">3. LESSON SCHEDULE</a>
        </li>
        <li class="nav-item col-md-3 col-sm-6 bg-success">
          <a class="nav-link text-white" id="attestation-tab" data-toggle="tab" href="#attestation" role="tab" aria-controls="attestation" aria-selected="false">4. ATTESTATION</a>
        </li> -->
      </ul>

      <div class="tab-content container shadow" id="myTabContent">
    
      <!-- .............About Child............ -->
        <div class="tab-pane fade show active p-3" id="aboutChild" role="tabpanel" aria-labelledby="aboutChild-tab">
          <form method="POST" >
            
            <div class="row">
              <div class="col-md-6 shadow p-5">
              <div class="row">
                    <h3 class="text-danger ml-3">Tell us about the child</h3>

                    <div class="form-group col-md-12">
                      <input type="text" id="fullName" class="form-control font-italic" name="con_fullName" placeholder="...full name" required>
                    </div>

                    <div class="form-group col-md-6">
                      <input type="text" id="school" class="form-control font-italic" name="school" placeholder="...school" required>
                    </div>
                    
                    <div class="form-group col-md-6">
                      <input type="text" id="class" class="form-control font-italic" name="class" placeholder="...class" required>
                    </div>
                    
                    <div class="form-group col-md-6">
                      <select class="form-control" id="" name="gender">
                        <option class="font-italic" value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <input type="text" id="age" class="form-control font-italic" name="age" placeholder="...age" required>
                    </div>

                    <div class="unstyled text-white ml-3 mt-3">
                      <h3 class="text-danger">What’s your goal for the child?</h3>

                      <li class="list-unstyled">Exam preparation, Improve generally, Help in the understanding a particular subject/topic, Special needs support.</li>

                      <p class="lead">You can tell us more…</p>

                      <div class="form-group border rounded">
                        <textarea  id="" name="tellusmore" class="form-control font-italic lead" placeholder="Your Message..." required></textarea>
                      </div>
                    </div>

                </div>
              </div>
            
            <!-- ..............colunm2.................... -->
            <div class="col-md-6 shadow p-5">
              <div class="ml-3">

                <h3 class="text-danger">What subject(s) would you like to get tutor(s) for?</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" id="subject_id" name="subjectselected1">
                        <option value="">Select One</option>
                        <option value="English Language (Basic)">English Language (Basic)</option>
                        <option value="Mathematics (Basic)">Mathematics (Basic)</option>
                        <option value="Quantitative Reasoning (Basic)">Quantitative Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Verbal Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Others (Basic)</option>
                        <option value="space"></option>
                        <option value="English Language (JSS)">English Language (JSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (JSS)">Mathematics (JSS)</option>
                        <option value="Social Studies (JSS)">Social Studies (JSS)</option>
                        <option value="Basic Science (JSS)">Basic Science (JSS)</option>
                        <option value="Basic Technology (JSS)">Basic Technology (JSS)</option>
                        <option value="Agricultural Science (JSS)">Agricultural Science (JSS)</option>
                        <option value="Business Studies (JSS)">Business Studies (JSS)</option>
                        <option value="space"></option>
                        <option value="English Language (SSS)">English Language (SSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (SSS)">Mathematics (SSS)</option>
                        <option value="Further Mathematics">Further Mathematics</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Government">Government</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Economics">Economics</option>
                        <option value="Financial Accounting">Financial Accounting</option>
                        <option value="Agricultural Science">Agricultural Science</option>
                      </select>
                      <p class="invalid-feedback"></p>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" id="subject_id" name="subjectselected2">
                        <option value="">Select One</option>
                        <option value="English Language (Basic)">English Language (Basic)</option>
                        <option value="Mathematics (Basic)">Mathematics (Basic)</option>
                        <option value="Quantitative Reasoning (Basic)">Quantitative Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Verbal Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Others (Basic)</option>
                        <option value="space"></option>
                        <option value="English Language (JSS)">English Language (JSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (JSS)">Mathematics (JSS)</option>
                        <option value="Social Studies (JSS)">Social Studies (JSS)</option>
                        <option value="Basic Science (JSS)">Basic Science (JSS)</option>
                        <option value="Basic Technology (JSS)">Basic Technology (JSS)</option>
                        <option value="Agricultural Science (JSS)">Agricultural Science (JSS)</option>
                        <option value="Business Studies (JSS)">Business Studies (JSS)</option>
                        <option value="space"></option>
                        <option value="English Language (SSS)">English Language (SSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (SSS)">Mathematics (SSS)</option>
                        <option value="Further Mathematics">Further Mathematics</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Government">Government</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Economics">Economics</option>
                        <option value="Financial Accounting">Financial Accounting</option>
                        <option value="Agricultural Science">Agricultural Science</option>
                      </select>
                      <p class="invalid-feedback"></p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" id="subject_id" name="subjectselected3">
                        <option value="">Select One</option>
                        <option value="English Language (Basic)">English Language (Basic)</option>
                        <option value="Mathematics (Basic)">Mathematics (Basic)</option>
                        <option value="Quantitative Reasoning (Basic)">Quantitative Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Verbal Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Others (Basic)</option>
                        <option value="space"></option>
                        <option value="English Language (JSS)">English Language (JSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (JSS)">Mathematics (JSS)</option>
                        <option value="Social Studies (JSS)">Social Studies (JSS)</option>
                        <option value="Basic Science (JSS)">Basic Science (JSS)</option>
                        <option value="Basic Technology (JSS)">Basic Technology (JSS)</option>
                        <option value="Agricultural Science (JSS)">Agricultural Science (JSS)</option>
                        <option value="Business Studies (JSS)">Business Studies (JSS)</option>
                        <option value="space"></option>
                        <option value="English Language (SSS)">English Language (SSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (SSS)">Mathematics (SSS)</option>
                        <option value="Further Mathematics">Further Mathematics</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Government">Government</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Economics">Economics</option>
                        <option value="Financial Accounting">Financial Accounting</option>
                        <option value="Agricultural Science">Agricultural Science</option>
                      </select>
                      <p class="invalid-feedback"></p>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" id="subject_id" name="subjectselected4">
                        <option value="">Select One</option>
                        <option value="English Language (Basic)">English Language (Basic)</option>
                        <option value="Mathematics (Basic)">Mathematics (Basic)</option>
                        <option value="Quantitative Reasoning (Basic)">Quantitative Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Verbal Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Others (Basic)</option>
                        <option value="space"></option>
                        <option value="English Language (JSS)">English Language (JSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (JSS)">Mathematics (JSS)</option>
                        <option value="Social Studies (JSS)">Social Studies (JSS)</option>
                        <option value="Basic Science (JSS)">Basic Science (JSS)</option>
                        <option value="Basic Technology (JSS)">Basic Technology (JSS)</option>
                        <option value="Agricultural Science (JSS)">Agricultural Science (JSS)</option>
                        <option value="Business Studies (JSS)">Business Studies (JSS)</option>
                        <option value="space"></option>
                        <option value="English Language (SSS)">English Language (SSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (SSS)">Mathematics (SSS)</option>
                        <option value="Further Mathematics">Further Mathematics</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Government">Government</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Economics">Economics</option>
                        <option value="Financial Accounting">Financial Accounting</option>
                        <option value="Agricultural Science">Agricultural Science</option>
                      </select>
                      <p class="invalid-feedback"></p>
                    </div>
                  </div>
                </div>

                  <div class="col-md-12 p-0">
                    <div class="form-group">
                      <select class="form-control" id="subject_id" name="subjectselected5">
                        <option value="">Select One</option>
                        <option value="English Language (Basic)">English Language (Basic)</option>
                        <option value="Mathematics (Basic)">Mathematics (Basic)</option>
                        <option value="Quantitative Reasoning (Basic)">Quantitative Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Verbal Reasoning (Basic)</option>
                        <option value="Verbal Reasoning (Basic)">Others (Basic)</option>
                        <option value="space"></option>
                        <option value="English Language (JSS)">English Language (JSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (JSS)">Mathematics (JSS)</option>
                        <option value="Social Studies (JSS)">Social Studies (JSS)</option>
                        <option value="Basic Science (JSS)">Basic Science (JSS)</option>
                        <option value="Basic Technology (JSS)">Basic Technology (JSS)</option>
                        <option value="Agricultural Science (JSS)">Agricultural Science (JSS)</option>
                        <option value="Business Studies (JSS)">Business Studies (JSS)</option>
                        <option value="space"></option>
                        <option value="English Language (SSS)">English Language (SSS)</option>
                        <option value="Literature-in-English">Literature-in-English</option>
                        <option value="Mathematics (SSS)">Mathematics (SSS)</option>
                        <option value="Further Mathematics">Further Mathematics</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Government">Government</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Economics">Economics</option>
                        <option value="Financial Accounting">Financial Accounting</option>
                        <option value="Agricultural Science">Agricultural Science</option>
                      </select>
                      <p class="invalid-feedback"></p>
                    </div>
                  </div>

                </div>   

                <h5 class="text-danger ml-3 mt-3">What curriculum is used at your child’s school?</h5>
                  <div class="col-md-12 p-0">
                    <div class="form-group">
                      <select class="form-control" id="subject_id" name="curriculum">
                        <option value="">Select One</option>
                        <option value="Nigerian">Nigerian</option>
                        <option value="British">British</option>
                        <option value="American">American</option>
                        <option value="Not Sure">Not Sure</option>
                      </select>
                      <p class="invalid-feedback"></p>
                    </div>
                  </div>

                <h5 class="text-danger ml-3 mt-3">Do you prefer a Male or Female Tutor?</h5>
                  <div class="col-md-12 p-0">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-3">
                          <label class="mx-4 text-danger" for="male">Male</label>
                          <input id="male" name="prefertutor" type="radio" value="male">
                          </div>

                          <div class="col-3">
                          <label class="mx-4 text-danger" for="female">Female</label>
                          <input id="female" name="prefertutor" type="radio" value="female">
                          </div>

                          <div class="col-3">
                          <label class="mx-4 text-danger" for="other">Any</label>
                          <input id="any" name="prefertutor" type="radio" value="any">
                          </div>

                        </div>
                      <p class="invalid-feedback"></p>
                    </div>	
                  </div>
                  <hr>
                  <h5 class="text-danger ml-3 mt-3">Login Details!</h5>
                  <div class="col-md-12 p-0">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-12">
                          <label class="mx-4 text-danger" for="male">Username</label>
                          <input id="male" class="form-control" name="username" type="text" placeholder="Username...">
                          </div>

                          <div class="col-12">
                          <label class="mx-4 text-danger" for="female">Password</label>
                          <input id="male" class="form-control" name="password" type="password" placeholder="Password...">
                          </div>

                          <div class="col-12">
                          <label class="mx-4 text-danger" for="other">Confirm Password</label>
                          <input id="male" class="form-control" name="conpassword" type="password" placeholder="Confirm Password...">
                          </div>

                        </div>
                      <p class="invalid-feedback"></p>
                    </div>	
                  </div>
              </div>
            
            </div>

            <!-- Client's Contact -->
            <div class="container w-50 py-3">
              <button type="submit" style="    border-color: #fff;
    color: #fff;" class="btn shadow" name="savethestudentdetail" >Register! to Continue your process</button>
              <!-- <a class="btn btn-sm btn-block btn-outline-light shadow" id="clientsContact-tab" data-toggle="tab" href="#clientsContact" role="tab" aria-controls="clientsContact" aria-selected="false">2. CLIENT’S CONTACT</a> -->
            </div>

            <?php 
            
                if(isset($_POST["savethestudentdetail"])){
                      
                  $con_fullName = $_POST["con_fullName"];
                    $school = $_POST["school"];
                    $class = $_POST["class"];
                    $gender = $_POST["gender"];
                    $age = $_POST["age"];
                    $tellusmore = $_POST["tellusmore"];
                    $subjectselected1 = $_POST["subjectselected1"];
                    $subjectselected2 = $_POST["subjectselected2"];
                    $subjectselected3 = $_POST["subjectselected3"];
                    $subjectselected4 = $_POST["subjectselected4"];
                    $subjectselected5 = $_POST["subjectselected5"];
                    $curriculum  = $_POST["curriculum"];
                    $prefertutor  = $_POST["prefertutor"];

                    $username = $_POST["username"];
                    $password  = $_POST["password"];
                    $conpassword  = $_POST["conpassword"];

                    $subjectselected = $subjectselected1 ." ".$subjectselected2 ." ".$subjectselected3 ." ".$subjectselected4 ." ".$subjectselected5;


                    $key = "1234567opiuyt";

                 

                    insertstudent($student,$key, $con_fullName, $school, $class,$gender,$age,$tellusmore,$subjectselected,
                      $curriculum,$prefertutor,$username,$password,$conpassword);
                
                }

            
            ?>

            
          </form>
        </div>


      <!-- .............Client's Contact............ -->
        <div class="tab-pane fade p-3" id="clientsContact" role="tabpanel" aria-labelledby="clientsContact-tab">
          <form action="register.php" method="POST" enctype="text/plain">

          <div class="row shadow">

            <div class="col-lg-6 shadow p-5">

                <div class="col-12">
                  <div class="form-group">
                      <label class="text-danger font-weight-bold" for="">Surname</label>
                      <input type="text" class="form-control" name="firstname" value="" placeholder="Enter Your First Name" required>
                  
                      <div class="invalid-feedback"></div>
                  </div>
              </div>
                  
              <div class="col-12">
                  <div class="form-group">
                      <label class="text-danger font-weight-bold">First Name</label>
                      <input type="text" class="form-control" name="lastname" value="" placeholder="Enter Your Surname" required>
                  
                      <div class="invalid-feedback"></div>
                  </div>
              </div>
                  
              <div class="col-12">
                  <div class="form-group">
                      <label class="text-danger font-weight-bold" for="">Email</label>
                      <input type="text" class=" form-control bg-light" name="email" value="" placeholder="Enter Your Email" required>
                  
                      <div class="invalid-feedback"></div>
                  </div>
              </div>

              <div class="col-12">
                  <div class="form-group">
                      <label class="text-danger font-weight-bold" for="">Phone Number</label>
                      <div class="input-group">
                          <input type="text" class=" form-control bg-light" name="phone" value="" placeholder="Enter Your Phone Number" required>

                          <div class="invalid-feedback"></div>
                      </div>
                  </div>
              </div>

            </div>


            <div class="col-lg-6 shadow p-5">
                    
              <div class="col-12">
                  <div class="form-group">
                      <label class="text-danger font-weight-bold" for="">Occupation</label>
                      <input type="text" class="form-control bg-light" name="occupation" value="occupation" placeholder="Occupation">
                  </div>
              </div>

              <div class="col-12">
                  <div class="form-group">
                      <label class="text-danger font-weight-bold" for="">Full Address</label>
                      <input type="text" class="form-control bg-light" name="full_address" value="full_address" placeholder="Full Address">
                  </div>
              </div>

              <div class="col-12">
                  <div class="form-group">
                        <label class="text-danger font-weight-bold" for="">Nearest Bus-stop</label>
                        <input type="text" class="form-control bg-light" name="nearest-bus-stop" value="nearest-bus-stop" placeholder="Nearest Bus-stop">
                  </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                    <label for="relationship" class="label font-weight-bold text-danger">Please tell us your relationship with the learner?</label>
                      <select class="form-control" id="relationship" name="relationship">
                        <option value="I am the Learner">I am the learner</option>
                        <option value="Parent of the Learner">Parent of the learner</option>
                        <option value="Family member of the learner (but not the parent)">Family member of the learner (but not the parent)</option>
                      </select>
                      <p class="invalid-feedback"></p>
                </div>
              </div>

            </div>

          </div>

          <!-- .............Lesson Schedule............ -->
          <div class="container w-50 py-3">
            <a class="btn btn-sm btn-block btn-outline-light shadow" id="lessonSchedule-tab" data-toggle="tab" href="#lessonSchedule" role="tab" aria-controls="lessonSchedule" aria-selected="false">3. LESSON SCHEDULE</a>
          </div>

        </form>
      </div>

      <div class="tab-pane fade show p-3" id="lessonSchedule" role="tabpanel" aria-labelledby="lessonSchedule-tab">
        <form action="register.php" method="POST" enctype="text/plain">

        <div class="row shadow">
          <div class="col-lg-6 shadow p-5">

            <div class="col-12">
              <div class="form-group">
                  <label for="workDays" class="label font-weight-bold text-danger">How many days per week do you want the lesson to hold?</label>
                    <select class="form-control" id="workDays" name="">
                      <option value="Monday">Monday</option>
                      <option value="Tuesday">Tuesday</option>
                      <option value="Wednesday">Wednesday</option>
                      <option value="Thursday">Thursday</option>
                      <option value="Friday">Friday</option>
                      <option value="Saturday">Saturday</option>
                      <option value="Sunday">Sunday</option>
                    </select>
                    <p class="invalid-feedback"></p>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                  <label for="workHours" class="label font-weight-bold text-danger">How many hours per day?</label>
                    <select class="form-control" id="workHours" name="">
                      <option value="1 hour per day">1 hour per day</option>
                      <option value="2 hours per day">2 hours per day</option>
                      <option value="3 hours per day">3 hours per day</option>
                      <option value="4 hours per day">4 hours per day</option>
                    </select>
                    <p class="invalid-feedback"></p>
              </div>
            </div>
        	
            <div class="col-12">
                <div class="form-group">
                    <label class="text-danger font-weight-bold" for="">From what time? e.g 4:00pm</label>
                    <input type="text" class="form-control bg-light" name="home_address" value="" placeholder="From what time?">
                </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                  <label for="" class="label font-weight-bold text-danger">For how long do you want the lesson to hold?</label>
                    <select class="form-control  " id="" name="">
                      <option value="1 week">1 week</option>
                      <option value="2 weeks">2 weeks</option>
                      <option value="1 months">1 months</option>
                      <option value="3 months">3 months</option>
                      <option value="6 months">6 months</option>
                      <option value="1 year">1 year</option>
                      <option value="More than a Year">More than a Year</option>
                    </select>
                    <p class="invalid-feedback"></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 shadow p-5">
            <div class="col-12">
              <div class="form-group">
                  <label for="" class="label font-weight-bold text-danger">How soon do you want to start?</label>
                    <select class="form-control  " id="" name="">
                      <option value="If possible, tomorrow">If possible, tomorrow</option>
                      <option value="This week">This week</option>
                      <option value="Next week">Next week</option>
                      <option value="In two weeks">In two weeks</option>
                      <option value="In three weeks">In three weeks</option>
                      <option value="In one month">In one month</option>
                    </select>
                    <p class="invalid-feedback"></p>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                  <label for="" class="label font-weight-bold text-danger">What is your intended tutorial location?</label>
                    <select class="form-control" id="" name="">
                      <option value="My Home">My Home</option>
                      <option value="My Office">My Office</option>
                      <option value="Others">Other?
                      <input type="password" class="form-control bg-light" name="" value="" placeholder="Other, where?">
                      </option>
                    </select>
                    <small class="text-muted">If other, then fill the field.</small>
                    <p class="invalid-feedback"></p>
              </div>
            </div>
	
            <div class="col-12">
                <div class="form-group">
                    <label class="text-danger font-weight-bold" for="">Write the full address of the tutorial location</label>
                    <input type="password" class="form-control bg-light" name="tutorial_location" value="" placeholder="Location?">
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-group">
                    <label class="text-danger font-weight-bold" for="">What is the nearest bus-stop to this place?</label>
                    <input type="password" class="form-control bg-light" name="Nearest_busstop_to_tutorial_location" value="" placeholder="Nearest_busstop">
                </div>
            </div>

          </div>
        </div>

      <!-- .............Attestation............ -->
        <div class="container w-50 py-3">
          <a class="btn btn-sm btn-block btn-outline-light shadow" id="attestation-tab" data-toggle="tab" href="#attestation" role="tab" aria-controls="attestation" aria-selected="false">4.  ATTESTATION</a>
        </div>

        </form>
      </div>

        <div class="tab-pane fade p-3 text-center" id="attestation" role="tabpanel" aria-labelledby="attestation-tab">
          
            <div class="shadow">
                <form class="form-inline container w-75 my-5 py-5">

                  <span class="h1 pr-3">I,</span>

                    <select class="form-control shadow" id="subject_id" name="subject_id">
                      <option value="">Mr</option>
                      <option value="Nigerian">Mrs</option>
                    </select>

                      <input class="form-control text-center shadow" type="text" name="full_name" placeholder="Enter your full name">
                      <span class="h1">,</span>
                      
                      <span class="h2 mt-3">hereby attest that the information provided is genuine and that I agree with the <a href="terms-and-policies.php" class="text-light">tutorial and payment policies.</a></span>

                </form>
            </div>

            <div class="container w-50 pb-3">
              <button class="btn btn-sm btn-block btn-outline-light shadow" type="submit" name="submit">COMPLETE!</a>
            </div>

      </div>


  </div>
</div>


<!-- Become Tutor -->
<div class="p-5" style="background: #f4f4f4;">
  <h1 class="text-center fontStyle pt-5 text-danger">Become<span class="myTextColor"> a Tutor</span></h1>
  <hr class="styled">

  <p class="lead font-weight-bold text-center text-muted pt-3">Academia O' provides an avenue for experienced teachers to manage and grow their home tutoring business. <br><br> Are you experienced in teaching?</p>

  <div class="container w-50">
    <a href="o.pages/become-a-tutor.php" class="btn btn-block btn-lg orange text-white mb-5">Apply now!</a>
  </div>
</div>


<!-- .................................................Contact Us......................................................... -->
<div class="container-fluid py-5">
  <div class="pt-5 pt-5 container w-75">
      <h2 class="text-center text-danger pb-2">Get In Touch</h2>
      <hr class="styled">
      <h3 class="text-center myTextColor pt-4">Do you have question you'd love to ask?</h3>
      <br>
      <p class="text-center text-muted lead">Your feedbacks are very important to us as it can help us improve on our services. We'll also like to know how our tutors are doing.</p>    
  </div>
  <br>

  <div class="row container mx-auto">
    <div class="col-md-4">
    <a class="myTextColor lead font-weight-bold" href="tel:07087767178"><img class="shadow" src="../img/icons/call.png">Give Us a Call</a>
    </div>
    <div class="col-md-4">
    <a class="text-success lead font-weight-bold" href="https://api.whatsapp.com/send?phone=2347087767178"><img class="shadow" src="../img/icons/wa1.jpg" style="border-radius: 50%;">Chat Us on WhatsApp</a>
    </div>
    <div class="col-md-4">
    <a class="text-danger lead font-weight-bold" href="mailto:academiao.mail@gmail.com"><img class="shadow" src="../img/icons/gm1.jpg" style="border-radius: 50%;">Send us a mail</a>
    </div>
  </div>

</div>

<!-- ............................................................................. -->
<?php require_once '../includes/footer.php'; ?>