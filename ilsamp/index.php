<?php
include("connection.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilsamp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- font awesome -->
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" /> -->


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="argon.css">
    <!-- <link rel="stylesheet" href="argon.min.css"> -->
</head>

<body>

    <a href="#top" class="scrolltop text-white">
        <i class="fas fa-angle-up"></i>
    </a>
    <div id="top"></div>

    <div class="header">
        <div class="content">
            <div class="logo">
                <a href=""><img src="images/iit.png" alt=""></a>
            </div>

            <ul class="menu-list">
                    <div class="icon cancel-btn">
                            <i class="fas fa-times"></i>
                        </div>

                <li onclick="change('about')"><a href="#about" class="liab active">About</a></li>
                <li onclick="change('events')"><a href="#events" class="liev ">Activities</a></li>
                <li onclick="change('eligibility')"><a href="#eligibility" class="liel">Eligibility</a></li>
                <li onclick="change('program-benefits')"><a class="lipr" href="#program-benefits">Program Benefits</a></li>
                <li onclick="change('external-resources')"><a href="#external-resources" class="liex">External Sources</a></li>
                <li onclick="change('announcements')"><a href="#announcements" class="liann ">Announcements</a></li>
                <li onclick="change('scholarships')"><a href="#scholarships" class="lisch">Scholarships</a></li>

            </ul>

              <div class="icon menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
        </div>
    </div>

    <div class="banner">
        <div class="banner-heading">
            <p>Illinois Louis Stokes STEM Pathway and <br> <span>Research Alliance (ILSPRA)</span> </p>
        </div>
    </div>

    <div class="restbody">
        <div class="row ">
            <div class="col-md-3 sidebar">
                <div class="items">
                    <div class="line"></div>
                    <div>
                        <ul class="sidebar-list">

                               <li  onclick="change('about')">
                                <span class="dot aboutdot"></span>
                                <a class="sidebar-active abouta" href="#about">About</a>
                            </li>
                           
                              <li onclick="change('events')">
                              <span class="eventsdot"></span>
                              <a href="#events" class=" eventsa">Activities</a></li>

                            

                      
                       
                            <li  onclick="change('eligibility')">
                              <span class="eldot"></span>
                              <a class="ela" href="#eligibility">Eligibility</a></li>
                            <li  onclick="change('program-benefits')">
                              <span class="prdot"></span>
                              <a class="pra" href="#program-benefits">Program Benefits</a></li>
                            <li onclick="change('external-resources')">
                              <span class="exdot"></span>
                              <a class="exa" href="#external-resources">External Sources</a></li>

                                 <li onclick="change('announcements')">
                              <span class="anndot"></span>
                              <a href="#announcements" class="anna">Announcements</a></li>

                                  <li onclick="change('scholarships')">
                              <span class="schdot"></span>
                              <a href="#scholarships" class="scha">Scholarships</a></li>

                        </ul>
                    </div>
                </div>
                <div class="hr"></div>

                <div class="testimonials">
                    <div class="testimonial">
                        <img src="images/Mutis-Ivan.jpg" alt="">
                        <div class="testimonial-content">
                            <b>DR. IVAN MUTIS</b> <br>
                            IIT Coordinator of ILSPRA <br>
                            +1 312 567 3808<br>
                            imutissi@iit.edu
                        </div>

                    </div>

                    
                    <marquee  scrollamount="2" class="apply-scolarship mt-5" direction="up" height="80px"
                    style='background-color : white;'>
                        <p class="text-italic text-dark" style="text-transform:capitalize;font-size : 16px;">
                        <b>
                        Apply to the
                                        ILSPRA Scholarship Program by June 15, 2022. Click <a
                                            href="https://forms.gle/sa7EeTVj1KV7x54c8"> <b>here</b> </a>
                                        to apply.
                        </b>
                         </p>
                    </marquee>

                    <!-- <div class="testimonial">
                        <img src="images/kelly-shepard.jpg" alt="">
                        <div class="testimonial-content">
                            <b>Kelly M.Shepard</b> <br>
                            Research Assistant in Science Education at IIT <br>
                        
                        </div>

                    </div> -->
                </div>
            </div>
            <div class="col-md-8  ">

      



                 <div class="about" id="about">
                    <div class="row">
                    

                        <div class="col-md-7 about-content">
                            <div class="pl-md-5">
                               <div class="head-flex">
                                    <!-- <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-4">
                                    <i class="far fa-lightbulb"></i>
                                </div> -->
                                <h3 class="title  mt-2">ABOUT</h3>
                               </div>
                                <p class="lead"></p>
                                <p>We are part of the Illinois LSAMP STEM Pathway and Research Alliance (ILSPRA). The alliance is reorganized from the Illinois Louis Stokes Alliance for Minority Participation (ILSAMP) and is comprised of a diverse group of 13 public and private universities and community colleges in urban and rural settings within the state of Illinois. 
                                </p>
                                <h5>Objectives</h5>
                                <ul class="ml-4 text-muted">
                                    <li>Provide academic, professional, and social activities to increase URM students’ engagement, retention, and progression to STEM baccalaureate degrees 
                                </li>
                    <li>Promote research and professionalism for selected ILSPRA scholars by facilitating hands-on research experiences </li>
                    <li>Facilitate URM students’ technical and soft skills development by creating a supportive network of connections based on shared backgrounds and experiences</li>
                    <li>Offer development of active engagement classrooms using the Learning Assistant Model</li>           
                </ul>

                       


                              
                            </div>
                        </div>

                            <div class="col-md-5">
                            <div class="card bg-default shadow border-0">
                                <img src="images/graduate.jpg" class="card-img-top ">
                                <blockquote class="card-blockquote">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 583 95" class="svg-bg">
                                        <polygon points="0,52 583,95 0,95" class="fill-default" />
                                        <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                                    </svg>
                                    <h4 class="text-white">NSF FUNDED</h4>
                                    <p class="text-italic text-white">For more information, Please visit the Illinois
                                        Louis Stokes Alliance for
                                        Minority Participation Project <a
                                            href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1411219&HistoricalAwards=false">Here</a>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
                

                            <!-- events -->

                <div class="events" id="events">

                    <!-- carousel -->

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block w-100" src="images/carousel1.png" alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                  <div class="carousel-text">
                                    <!-- <h4 class="text-white">Academic Excellence Workshops (AEW) in Science</h4> -->
                                    <p>Supports the growth and developmental needs of historically underrepresented minority
(URM)students in STEM
Increase the participation of URM in STEM by reducing cultural, structural, and
institutional barriers</p>
                                  </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100"
                                    src="./images/Events1.jpg"
                                        alt="Second slide">
                                    <div class="mask rgba-black-strong"></div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100"
                                    src="./images/Events 2.jpg"
                                        >
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100"
                                    src="./images/Events 3.jpg"
                                        >
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </div>


                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon arrow" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon arrow" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                                    <div class=""> <!-- add right  class to shift to right -->
                      <br>
                                          <!-- <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle mb-4">
                                              <i class="fas fa-calendar-day"></i>
                                          </div> -->
                                          <span class="title ">
                                              ACTIVITIES
                                          </span>
                    </div>
    <br>
                                 <!-- <h5>Activities</h5> -->
                          <div >
                                    <ul class="ml-4 text-muted">
                                    <li>Annual student-centered STEM (ILSPRA) conference</li>
                                    <li>Summer internships</li>
                                    <li>Workshops and webinars about graduate school through the “Thinking about graduate school” series</li>
                                    <li>Active mentorships</li>
                                    <li>Scholarships</li>
                                    <li>Summer research experience programs</li>
                                    <li>Graduate admission support</li>
                                </ul>
                          </div>
                                
                    <!--/.Carousel Wrapper-->
                
                    <br> <br><br>
                </div>

          

           

                <!-- apply section -->

                <div class="apply" id="eligibility">
                    <!--Apply Section -->
                    <div class="row ">
                        <div class="col-md-5 ">
                            <div class="card bg-default ">
                                <img src="images/students.jpg" height="400px" class="card-img-top">
                                <blockquote class="card-blockquote">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 583 95" class="svg-bg">
                                        <polygon points="0,52 583,95 0,95" class="fill-default" />
                                        <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                                    </svg>
                                    <h4 class="text-white">APPLY</h4>
                                    <p class="text-italic text-white" style="text-transform:capitalize;">
                                            Apply to the
                                        ILSPRA Scholarship Program by June 15, 2022. Click <a
                                            href="https://forms.gle/YtjGY2GycvPoJXGB9">here</a>
                                        to apply.
                                </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-7 order-md-2">
                            <div class="pl-md-5">
                               <div class="head-flex">
                                    <!-- <div class="icon icon-lg icon-shape icon-shape-danger shadow rounded-circle mb-4">
                                    <i class="fas fa-cog"></i>
                                </div> -->
                                <h3 class="title  mt-2">APPLICATION <br> ELIGIBILITY</h3> <br>
                               </div>
                               <br>
                                <p style="color: #9199ac;" >Illinois Louis Stokes STEM Pathway and Research Alliance (ILSPRA) is pleased 
                                to announce the Summer 2022 scholarship program. This Summer 2022 scholarship program is aimed to support 
                                students' research activities with amounts ranging from $1,000 to $4,000. </p>
                                
                                <p style="color: #9199ac;" >In order to participate in ILSPRA Summer 2022 scholarship program, students 
                                must complete an application, including details on the proposed or current research activities. It is 
                                expected that at the end of the semester, students showcase their work with a poster presentation that 
                                will take place next coming Fall. Students are also encouraged to showcase their work in the ILSAMP 
                                regional symposium or another related research conference in the student field. </p>
                                
                                <!-- <div class="ml-4 text-muted">
                                    <ul>
                                        <li>United States citizens or Permanent Residents.</li>
                                    <li>Full-time undergraduate students.</li>
                                    <li>Science, technology, engineering, or mathematics (STEM) majors.</li>
                                    <li>Members of an underrepresented minority group.</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--End of Apply Section -->
                </div>

                <!-- program benefits -->
                <div class="programs" id="program-benefits">
                    <!-- <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle mb-4">
                        <i class="fas fa-paper-plane"></i>
                    </div> -->
                    <span class="title ">
                        PROGRAM BENEFITS
                    </span>

                    <div class="row">
                        <div class="col-md-7 ">

                            <p class="lead"></p>
                            <ul>
                                <li>Building community and presenting research at conferences Help students formulate
                                    their
                                    research interests and develop
                                    their research skills.</li>
                                <li>Support research experience (year round).</li>
                                <li>Offer academic and professional development workshops for graduate school
                                    preparation
                                    activities with the goal of
                                    increasing the number of students entering graduate programs and professional
                                    careers in
                                    STEM
                                    Individual academic and holistic advising/coaching is provided for each student
                                    several
                                    times throughout the quarter</li>
                                <li>Build leadership, communication, and presentation skills</li>
                                <li>Students build their STEM research identity/profile</li>
                                <li>Educational, social and networking enrichment opportunities are provided to scholars
                                </li>
                                <li>Community building experiences are offered to students (and faculty) with similar
                                    academic, personal, and professional
                                    interests</li>
                                <li>A summer research program provides students the opportunity to work closely with a
                                    faculty
                                    mentor</li>
                                <li>Field trip and international activities opportunities are available to participants.
                                </li>
                                <li>Support for research presentation in STEM conferences..</li>
                            </ul>
                        </div>
                        <div class="col-md-5 pl-md-5">
                            <div class="card bg-default shadow border-0">
                                <img src="images/contact.jpg" height="400px" class="card-img-top ">
                                <blockquote class="card-blockquote">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 583 95" class="svg-bg">
                                        <polygon points="0,52 583,95 0,95" class="fill-default" />
                                        <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                                    </svg>
                                    <h4 class="text-white">BENEFITS</h4>
                                    <p class="text-italic text-white">IIT ILSPRA offers the following benefits.
                                    </p>
                                </blockquote>
                            </div>
                        </div>


                    </div>


                </div>
                <br> <br>
                <!-- external resouces -->
                <div class="external" id="external-resources">
                    <div class="card extcard pb-4 pl-2 pr-2 ">

                        <div class="row  justify-content-center">
                            <!-- <div class="gift icon icon-lg icon-shape icon-shape-danger shadow rounded-circle ">
                                <i class="fas fa-gift"></i>
                            </div> -->
                            <div class="col-lg-9 text-center mt-5">

                                <h3 class="title">EXTERNAL RESOURCES</h3>
                                <p class="lead">Following resources are listed for your convinience. It is the user’s
                                    responsibility to
                                    verify the quality of the services offered by the listed organizations.</p>
                            </div>
                        </div>

                        <div class="row  justify-content-center resrow" style="margin-top:2rem !important ;">

                          <?php
                            $sql = "SELECT *FROM resourcecolumn ORDER BY columnname";
                            $result = mysqli_query($link , $sql);
                            while ($row = mysqli_fetch_array($result)) {
                              $columnname =$row['columnname'];
                              $rescolumnid = $row['rescolumnid'];
                           ?>
                            <div class="col-lg-6" style="margin-top:2rem">
                                <h5 style="text-transform:uppercase"><?php echo $columnname ?></h5>
                                <ul>
                                  <?php
                                    $sql1 = "SELECT *FROM hyperlinks WHERE resourceid='$rescolumnid' ORDER BY hyperlinkname";
                                    $result1 = mysqli_query($link , $sql1);
                                    while ($row1 = mysqli_fetch_array($result1)) {
                                      $hyperlinkname =$row1['hyperlinkname'];
                                      $redirectionlink = $row1['redirectionlink'];

                                   ?>
                                    <li><a target="_blank"
                                            href="<?php echo $redirectionlink ?>"><?php echo $hyperlinkname ?></a></li>
                                    <?php } ?>


                                </ul>
                            </div>
                          <?php } ?>

                        </div>



                    </div>

                </div>

                <!-- announcements -->

                <div class="announcements" id="announcements">
                    <div class="mtitle">
                         <span class="title ml-3 ">
                       ANNOUNCEMENTS
                    </span>
                    </div>

                    <div class="content mt-4 ">

                       <?php
                            $sql = "SELECT *FROM announcements ORDER BY datetime ";
                            $result = mysqli_query($link , $sql);
                            while ($row = mysqli_fetch_array($result)) {
                              $id = $row['id'];
                                $annname = $row['announcementname'];
                                $timestamp = $row['timestamp'];
                                $categroy = $row['category'];
                                $datetime = $row['datetime'];
                                $announcement = $row['announcement'];
                           ?>

                                <br>
                        <div class="announcement">
                            <div class="">
                               <div class="flex">
                                    <div class="announcement-name">
                                    <?php echo $annname ?>
                                </div>
                                <div class="timestamp">
                                    <?php echo $timestamp ?>
                                </div>
                               </div>
                                <div class="category">
                                    <?php echo $categroy ?>

                                </div>

                                <!-- to show -->

                                <div style="display: none;" class="para" id="<?php echo $id.'parashow'?>">
                                    <?php  echo $announcement ?>
                                </div>

                                <!--  to hide -->
                                <div class="para" id="<?php echo $id.'parahide'?>">

                                
                                    <?php
                                    
                                       if (strlen($announcement) > 200) {
                     $announcement = substr($announcement,0,200).'..';
                   }
                  echo $announcement ?>
                                </div>

                                <button id="<?php echo $id.'readmore'?>" class="read-morebtn" onclick="changeStuffReadMore( '<?php echo $id?>')">Read More</button>
                                
                                

                                <button id="<?php echo $id.'readless'?>" class="read-lessbtn" onclick="changeStuffReadLess('<?php echo $id;?>')">Read Less</button>
                                <div class="mcard-footer">

                                  <?php

                            $sql1 = "SELECT *FROM hashtags WHERE annid = $id";
                            $result1 = mysqli_query($link , $sql1);
                            while ($row1 = mysqli_fetch_array($result1)) {
                                 $hashtagname = $row1['hashtagname'];
                    $redirectionlink = $row1['redirectionlink'];

                           ?>

                                <a style="color: darkblue;" href="<?php echo $redirectionlink ?>" class="ml-1">#<?php echo $hashtagname ?> </a>
                            <?php } ?>
                                        <hr>
                            </div>


                            </div>
                         
                        </div>

                        <?php } ?>

                    </div>
                </div>


                    <!-- scholarships -->
                <div class="scholarship" id="scholarships">
                    <div class="card extcard pb-4 pl-2 pr-2 ">

                        <div class="row  justify-content-center">
                            <!-- <div class="gift icon icon-lg icon-shape icon-shape-danger shadow rounded-circle ">
                                <i class="fas fa-graduation-cap"></i>
                            </div> -->
                            <div class="col-lg-9 text-center mt-5">

                                <h3 class="title">SCHOLARSHIPS</h3>
                                <!-- <p class="lead">Following resources are listed for your convinience. It is the user’s
                                    responsibility to
                                    verify the quality of the services offered by the listed organizations.</p> -->
                            </div>
                        </div>

                        <!-- <div class="row  justify-content-center resrow" style="margin-top:2rem !important ;">

                          <?php
                            $sql = "SELECT *FROM resourcecolumn ORDER BY columnname";
                            $result = mysqli_query($link , $sql);
                            while ($row = mysqli_fetch_array($result)) {
                              $columnname =$row['columnname'];
                              $rescolumnid = $row['rescolumnid'];
                           ?>
                            <div class="col-lg-6" style="margin-top:2rem">
                                <h5 style="text-transform:uppercase"><?php echo $columnname ?></h5>
                                <ul>
                                  <?php
                                    $sql1 = "SELECT *FROM hyperlinks WHERE resourceid='$rescolumnid' ORDER BY hyperlinkname";
                                    $result1 = mysqli_query($link , $sql1);
                                    while ($row1 = mysqli_fetch_array($result1)) {
                                      $hyperlinkname =$row1['hyperlinkname'];
                                      $redirectionlink = $row1['redirectionlink'];

                                   ?>
                                    <li><a target="_blank"
                                            href="<?php echo $redirectionlink ?>"><?php echo $hyperlinkname ?></a></li>
                                    <?php } ?>


                                </ul>
                            </div>
                          <?php } ?>

                        </div> -->



                    </div>

                </div>



                
            </div>
        </div>

    </div>

    <br><br>
    <footer class="footer mt-5" style="border-top: 3px solid #fb6340;padding: 0em !important;">
        <div class="container mt-4">
            <div class="justify-content-center">
                <p style="text-align:center;"><span class="color_13">10 West 33rd Street Perlstein Hall, Suite 224 |
                        Chicago, IL &nbsp;60616 | Phone: 312-567-3808</span></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-4">
                    <a target="_blank" href="https://web.iit.edu/" target="_blank" data-toggle="tooltip"
                        data-original-title="Illinois Institute of Technology">
                        <img src="images/footer.png" class="img-fluid" style="width:100px">
                    </a>
                </div>
                <div class="col-lg-2 col-4">
                    <a target="_blank" href="https://www.nsf.gov" target="_blank" data-toggle="tooltip"
                        data-original-title="National Science Foundation">
                        <img src="images/nsf_logo.png" class="img-fluid" style="width:100px">
                    </a>
                </div>
                <div class="col-lg-2 col-4">
                    <a target="_blank" href="https://lsamp.calpoly.edu/content/undergraduate-scholarship-opportunities"
                        target="_blank" data-toggle="tooltip"
                        data-original-title="Louis Stokes Alliance for Minority and Underrepresented Student Participation in STEM">
                        <img src="images/ilsamp.jpg" class="img-fluid" style="width:100px">
                    </a>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-12">
                    <p class="text-center"><span>© 2018 Illinois Institute of Technology | All rights reserved</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

        <script>

// $(".read-lessbtn").hide();


var width = $(window).width();
if(width  < 1050){
    removeSidebar();
}


$(window).resize(function() {
  var width = $(window).width();
  if(width  < 1050){
    removeSidebar();
}else {
    addSidebar();
}
})


function removeSidebar(){

    $(".sidebar").removeClass("col-md-3");
    $(".sidebar").hide();
    $(".right-content").removeClass("col-md-9");
    $(".right-content").addClass("col-md-12")


}

function addSidebar(){

    $(".sidebar").addClass("col-md-3");
    $(".sidebar").show();
    $(".right-content").removeClass("col-md-12");
    $(".right-content").addClass("col-md-9")


}

function changeStuffReadMore( id){
    $('#'+id+'readmore').hide();
    $('#'+id+'parashow').show();
    $('#'+id+'parahide').hide();

    $('#'+id+'readless').show();
}

function changeStuffReadLess( id){
    $('#'+id+'readmore').show();

    $('#'+id+'parahide').show();

    
      $('#'+id+'parashow').hide();

    $('#'+id+'readless').hide();
}

const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
const body = document.querySelector("body");

$(".menu-list li").click(() => {
    console.log('helo')
    menu.classList.remove("active");
    menuBtn.classList.remove("hide");
    body.classList.remove("disabledScroll");
})

$(".menu-btn").click(() => {
    menu.classList.add("active");
    menuBtn.classList.add("hide");
    body.classList.add("disabledScroll");

})

$(".cancel-btn").click(() => {
    menu.classList.remove("active");
    menuBtn.classList.remove("hide");
    body.classList.remove("disabledScroll");
})




        function change(name){
              if (name=='announcements') {
            addDot('anndot' , 'anna' , 'liann');
          }
         else if(name == 'events'){
            addDot('eventsdot' , 'eventsa' , 'liev');
          }else if (name=='about') {
            addDot('aboutdot' , 'abouta' ,'liab');
          }else if (name == 'eligibility') {
            addDot('eldot' , 'ela' , 'liel');
          }else if (name=='program-benefits') {
            addDot('prdot' , 'pra' , 'lipr');
          }else if (name=='external-resources') {
            addDot('exdot' , 'exa' , 'liex');
          }else if (name=='scholarships') {
            addDot('schdot' , 'scha' , 'lisch');
          }
         
        };


        function addDot(span , a ,nav){
          $(".dot").removeClass('dot');
          $(".sidebar-active").removeClass('sidebar-active');
          $(".menu-list li .active").removeClass('active');
          $("."+span).addClass("dot");
          $("."+a).addClass("sidebar-active")
          $("."+nav).addClass('active');

        }

            window.onscroll = () => {
                if (scrollY > 500) {
                    $(".scrolltop").show();

                } else {
                    $(".scrolltop").hide();
                }
            }

        </script>

</body>

</html>
