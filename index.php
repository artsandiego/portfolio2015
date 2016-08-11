<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--META-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="description" content="Interactive Resume | 2016">
    <meta name="author" content="Artemio A. San Diego | Philippines">

    <!--TITLE AND ICON-->
    <title>Art San Diego</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/branding.png">

    <!--LOCAL-->
    <!--<link rel="stylesheet" type="text/css" href="css/materialize.min.css">-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--INTERNET-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet'>
</head>

<body>
    <?php
//        function modal($message){
    ?>
<!--
    <div class="card hoverable" id="hireme">
        <div class="card-content white-text">
            <span class="task"><?php echo $message;?></span>
        </div>
    </div>
-->
    <?php
//        }
    ?>
    <!--NAVIGATION-->
    <nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="padding-left:0.5em">menu</i></a>
            <ul class="right hide-on-med-and-down" style="padding-right:5em;">
                <li><a href="#about"><i class="material-icons left">perm_identity</i><span class="blue-grey-text lighten-4">About me</span></a></li>

                <li><a href="#skills"><i class="material-icons left">code</i><span class="blue-grey-text lighten-4">Skills</span></a></li>

                <li><a href="#achievements"><i class="material-icons left">thumb_up</i><span class="blue-grey-text lighten-4">What I'm proud of</span></a></li>

                <li><a href="#hire"><i class="material-icons left">work</i><span class="blue-grey-text lighten-4">Hire me</span></a></li>
                
                <li><a href="#contactme"><i class="material-icons left">call</i><span class="blue-grey-text lighten-4">Contact me</span></a></li>
            </ul>
            <ul class="side-nav blue-grey darken-4" id="mobile-demo">
                <li><img id="logo" src="images/logo/branding.png" alt="Branding"></li>
                <li><a href="#about"><i class="material-icons left">perm_identity</i><span class="blue-grey-text lighten-4">About me</span></a></li>

                <li><a href="#skills"><i class="material-icons left">code</i><span class="blue-grey-text lighten-4">Skills</span></a></li>

                <li><a href="#achievements"><i class="material-icons left">thumb_up</i><span class="blue-grey-text lighten-4">What I'm proud of</span></a></li>

                <li><a href="#hire"><i class="material-icons left">work</i><span class="blue-grey-text lighten-4">Hire me</span></a></li>
                
                <li><a href="#contactme"><i class="material-icons left">call</i><span class="blue-grey-text lighten-4">Contact me</span></a></li>
            </ul>
        </div>
    </nav>
    <!--END OF NAVIGATION-->
    <!--PARALLAX-->
<!--
    <div id="parallax-1" class="parallax-image" data-stellar-background-ratio="0.4">
        <center><img id="logo" src="images/logo/branding.png" alt="Branding" width="550px" /></center>
    </div>
-->
    <div class="parallax-container">
        
        <div class="parallax">
            <img src="images/parallax/parallax1.png" alt="background1" width="100%" style="display: block; transform: translate3d(-50%, 394px, 0px);">
        </div>
        
        <center><img id="logo" src="images/logo/branding.png" alt="Branding" width="550px" /></center>
    </div>
    <!--END OF PARALLAX-->
    <!--CONTENT-1-->
    <div id="content-1" class="content">
        <div id="about"></div>
        <div class="container">
            <div id="fadein">
                <div class="hideme">
                    <h1 id="hello-there" class="flow-text">Hello world!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s5 m5 l5">
                    <div class="card hoverable hideme z-depth-4">
                        <div class="card-content">
                            <span class="card-title flow-text">Let me introduce myself...</span>
                            <p class="flow-text">I'm Artemio A. San Diego, aspiring <span id="inserts">Mobile | Front-End Developer</span> and a Graphic Designer wannabe. fresh grad from <a href="http://www.urs.edu.ph/index.php/en/"><span id="inserts" style="cursor:pointer;">University of Rizal System</span></a> with a degree of <span id="inserts">Bachelor of Science in Information Technology</span>.</p>
                            <p class="flow-text">#EagerToLearn
                            <br/>#ReadyToAssist
                            <br/>#WillingToBeTrained</p>
                        </div>
                    </div>
                </div>
                <div class="col s7 m7 7">
                    <center><img id="vector" alt="vector" src="images/other/vector.png" /></center>
                </div>
            </div>
        </div>
    </div>
    <!--END OF CONTENT-1-->
    <!--PARALLAX-->
<!--
    <div id="parallax-2" class="parallax-image" data-stellar-background-ratio="0.4">
        
    </div>
-->
    <div class="parallax-container">
        
        <div class="parallax">
            <img src="images/parallax/parallax2.png" alt="background2" width="100%" style="display: block; transform: translate3d(-50%, 394px, 0px);">
        </div>
        
        <div id="skills"></div>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 id="skills" class="hideme">Current skill set</h1>
                </div>
            </div>
            <center>
                <div class="row">
                    <div class="button-group filters-button-group">
                        <div class="col s3 m3 l3">
                            <button id="all-btn" class="btn blue-grey darken-3 waves-effect waves-light is-checked" data-filter="*">
                                <center><span id="btn-text">All</span></center>
                            </button>
                        </div>
                        <div class="col s3 m3 l3">
                            <button id="familiar-btn" class="btn blue-grey darken-3 waves-effect waves-light" data-filter=".beginner">
                                <center><span id="btn-text">Beginner</span></center>
                            </button>
                        </div>
                        <div class="col s3 m3 l3">
                            <button id="experienced-btn" class="btn blue-grey darken-3 waves-effect waves-light" data-filter=".intermediate">
                                <center><span id="btn-text">Intermediate</span></center>
                            </button>
                        </div>
                        <div class="col s3 m3 l3">
                            <button id="interested-btn" class="btn blue-grey darken-3 waves-effect waves-light" data-filter=".interested">
                                <center><span id="btn-text">Interests</span></center>
                            </button>
                        </div>
                    </div>
                </div>
            </center>
            <div class="row grid">
                <div class="col s4 m3 l2 element-item intermediate" data-category="intermediate">
                    <div class="skills-container">
                        <img src="images/skills/java.png" alt="java" class="bar_bg hoverable tooltipped" id="java" data-position="top" data-delay="50" data-tooltip="Java">
                        <div id="bar_java" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_java"></p>
                        </div>
                    </div>
                </div>

                <div class="col col s4 m3 l2 element-item intermediate" data-category="intermediate">
                    <div class="skills-container">
                        <img src="images/skills/android.png" alt="android" class="bar_bg hoverable tooltipped" id="android" data-position="top" data-delay="50" data-tooltip="Android">
                        <div id="bar_android" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_android"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item intermediate" data-category="intermediate">
                    <div class="skills-container">
                        <img src="images/skills/php.png" alt="php" class="bar_bg hoverable tooltipped" id="php" data-position="top" data-delay="50" data-tooltip="PHP">
                        <div id="bar_php" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_php"></p>
                        </div>
                    </div>
                </div>
                <div class="col s4 m3 l2 element-item intermediate" data-category="intermediate">
                    <div class="skills-container">
                        <img src="images/skills/htmlcss.png" alt="htmlcss" class="bar_bg hoverable tooltipped" id="htmlcss" data-position="top" data-delay="50" data-tooltip="HTML5 | CSS3">
                        <div id="bar_htmlcss" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_htmlcss"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item beginner" data-category="beginner">
                    <div class="skills-container">
                        <img src="images/skills/jsjquery.png" alt="jsjquery" class="bar_bg hoverable tooltipped" id="jsjquery" data-position="top" data-delay="50" data-tooltip="Javascript | JQuery">
                        <div id="bar_jsjquery" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_jsjquery"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item intermediate" data-category="intermediate">
                    <div class="skills-container">
                        <img src="images/skills/cssframework.png" alt="cssframeworks" class="bar_bg hoverable tooltipped" id="cssframeworks" data-position="top" data-delay="50" data-tooltip="CSS Frameworks">
                        <div id="bar_cssframeworks" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_cssframeworks"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item intermediate" data-category="intermediate">
                    <div class="skills-container">
                        <img src="images/skills/sql.png" alt="sql" class="bar_bg hoverable tooltipped" id="sql" data-position="top" data-delay="50" data-tooltip="SQL | MySQL | MySQli">
                        <div id="bar_sql" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_sql"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item beginner" data-category="beginner">
                    <div class="skills-container">
                        <img src="images/skills/git.png" alt="git" class="bar_bg hoverable tooltipped" id="git" data-position="top" data-delay="50" data-tooltip="Version Control System (GIT)">
                        <div id="bar_git" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_git"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item beginner" data-category="beginner">
                    <div class="skills-container">
                        <img src="images/skills/networking.png" alt="networking" class="bar_bg hoverable tooltipped" id="networking" data-position="top" data-delay="50" data-tooltip="Computer Networking | Computer Hardware">
                        <div id="bar_networking" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_networking"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item beginner" data-category="beginner">
                    <div class="skills-container">
                        <img src="images/skills/aips.png" alt="illustrator|Photoshop" class="bar_bg hoverable tooltipped" id="aips" data-position="top" data-delay="50" data-tooltip="Adobe Illustrator | Photoshop">
                        <div id="bar_aips" class="bar" style="height: 2px; width: 100%; background-color: rgba(15, 36, 41, 0.77); border-top: 5px solid rgba(77, 201, 77, 0.71);">
                            <p class="desc_aips"></p>
                        </div>
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item interested" data-category="interested">
                    <div class="skills-container">
                        <img src="images/skills/unity.png" alt="unity" class="bar_bg hoverable tooltipped" data-position="top" data-delay="50" data-tooltip="Unity Game Engine">
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item interested" data-category="interested">
                    <div class="skills-container">
                        <img src="images/skills/laravel.png" alt="laravel" class="bar_bg hoverable tooltipped" data-position="top" data-delay="50" data-tooltip="Laravel Framework">
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item interested" data-category="interested">
                    <div class="skills-container">
                        <img src="images/skills/ios.png" alt="ios" class="bar_bg hoverable tooltipped" data-position="top" data-delay="50" data-tooltip="Objective-C | Swift">
                    </div>
                </div>

                <div class="col s4 m3 l2 element-item interested" data-category="interested">
                    <div class="skills-container">
                        <img src="images/skills/hybrid.png" alt="phonegap|cordova" class="bar_bg hoverable tooltipped" data-position="top" data-delay="50" data-tooltip="PhoneGap | Cordova">
                    </div>
                </div>
            </div>

            <div class="card hoverable z-depth-4" id="experienced">
                <div class="card-content">
                    <span class="card-title flow-text">intermediate</span>
                    <p>I enjoy developing web and mobile applications, I am using Java for Android and Android Studio in developing android applications. I also used PHP, HTML5|CSS3, JS|Jquery, SQL and some <span id="inserts" class="tooltipped" data-position="top" data-delay="50" data-tooltip="MaterializeCSS | nicescroll.js | Isotope" style="cursor:pointer;">CSS frameworks</span> to develop this website.</p>
                </div>
            </div>

            <div class="card hoverable z-depth-4" id="familiar">
                <div class="card-content">
                    <span class="card-title flow-text">Beginner</span>
                    <p>I am currently using git to organize my projects, also, I'm using photoshop and illustrator in designing  websites, I am also familiar with computer network and hardware.</p>
                </div>
            </div>

            <div class="card hoverable z-depth-4" id="interested">
                <div class="card-content">
                    <span class="card-title flow-text">Interests</span>
                    <p>I always wanted to learn how to develop mobile games using unity game engine, I'm also interested in developing iOS applications and developing website using laravel framework. Being able to use HTML|CSS|JS in developing hybrid mobile applications is one of my goals.</p>
                </div>
            </div>
        </div>
    </div>
    <!--END OF PARALLAX-->
    <!--CONTENT-2-->
    <div id="content-2" class="content">
        <div id="achievements"></div>
        <div class="container">
            <div class="row">
                <div class="col s7">
                    <h1 id="achievements" class="hideme">Achievements</h1>
                </div>
                <div class="col s5">
                    <h1 id="experience-title" class="hideme">Experience</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s7">
                    <ul class="collapsible popout" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">stars</i>April 12, 2016</div>
                            <div class="collapsible-body">
                                <p id="collapsible-title" class="flow-text" >Service Award</p>
                                <p class="flow-text">This academic award was given to me for being participative in school activities and for obtaining a weighted average of 1.57.</p>
                                <center>
                                    <hr/>
                                </center>
                                <p id="collapsible-title" class="flow-text">Best Software Developmental Study</p>
                                <p class="flow-text">This academic award was given to me for winning the Best Software Developmental Study during the 12th Campus Student Research Congress.</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">grade</i>January 19, 2016</div>
                            <div class="collapsible-body">
                                <p id="collapsible-title" class="flow-text">NCII CSS Certificate</p>
                                <center>
                                    <hr/>
                                </center>
                                <p class="flow-text">A passer of National Certificate II in Computer Systems Servicing issued by TESDA.</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">speaker_notes</i>October 6, 2015</div>
                            <div class="collapsible-body">
                                <p id="collapsible-title" class="flow-text">Business Idea and Development Award (BIDA) 2015</p>
                                <center>
                                    <hr/>
                                </center>
                                <p class="flow-text">Finalist, 4th Place
                                    <br/>Got this certificate by participating and representing our university in the annual BIDA held at PCCI, Taguig City.</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">android</i>September 4, 2015</div>
                            <div class="collapsible-body">
                                <p id="collapsible-title" class="flow-text">Resource Speaker</p>
                                <center>
                                    <hr/>
                                </center>
                                <p class="flow-text">Certificate of Appreciation was given to me because of my service as a Resource Speaker for the seminar in Android Programming. I dicussed the history of Android including the configuration of Android SDK and ADT in Eclipse and some basic syntax of Java for Android.</p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">library_books</i>March 25, 2015</div>
                            <div class="collapsible-body">
                                <p id="collapsible-title" class="flow-text">Thesis</p>
                                <center>
                                    <hr/>
                                </center>
                                <p class="flow-text">Being able to finish my thesis alone, with a rating of 1.02 and won as the Best Software Developmental Study is a huge success for me.</p>
                                <p class="flow-text">My thesis is a web-based research archive for our university developed using PHP some javascript, bootstrap, jQuery and MySQLi. thanks to God I managed to finish it on time, got the highest rating in our college and won as the best software developmental study in our campus. </p>
                                <center><a class="link" href="http://ursbresearcharchive.uphero.com" target="_blank">URSB Research Archive</a></center>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s5">
                    <div class="card hoverable hideme z-depth-4" id="experience">
                        <img src="images/other/corporate.png" alt="corporate" style="height: auto; width: 100%;" />
                        <div class="card-content white-text">
                            <span class="card-title flow-text">Student Trainee (OJT)</span>
                            <span id="inserts"><p class="flow-text">MSI-ECS Phils. Inc.</p></span>
                            <p class="flow-text">Was assigned to develop simple web-based applications using VB.NET (ASP.NET).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        
        <div class="parallax">
            <img src="images/parallax/parallax3.png" alt="background3" width="100%" style="display: block; transform: translate3d(-50%, 394px, 0px);">
        </div>
        
        <div id="hire"></div>
            <div class="container">
                <div class="row">
                    <div class="col s5 m6 l6">
                        <h1 id="hire-me" class="hideme">Hire me</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="card hoverable hideme z-depth-4">
                            <div class="card-content white-text">
                                <span class="card-title flow-text">Why should you hire me?</span>
                                <p>I am an Information Technology graduate, specializing in Mobile and Front-End development. I have accomplished different tasks that requires technical and software skills during college. I am a fresher, however, I can assure you that I am passionate in this career I am pursuing, and I am enthused to deliver high-quality work.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 m4 l2">
                        <div class="card hoverable hideme z-depth-4">
                            <div class="card-content white-text">
                                <a target="_blank" href="resume.php?filename=<?php echo "resume.pdf";?>"><img class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Art's Resume" src="images/other/resume.png" alt="resume" style="height:auto; width:100%"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-3" class="content">
            <div id="contactme"></div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h1 id="experience-title" class="hideme">Contact me</h1>
                        <center>
                            <div class="row">
                                <div class="col s3">
                                    <center><a href="https://ph.linkedin.com/in/artemiosandiego" target="_blank"><img src="images/other/linkedin.png" alt="linkedin" height="auto" width="100%" class="tooltipped" data-position="top" data-delay="50" data-tooltip="LinkedIn Account" /></a></center>
                                </div>
                                <div class="col s3">
                                    <center><div id="gmail"><img src="images/other/mail.png" alt="gmail" height="auto" width="100%" class="tooltipped" data-position="top" data-delay="50" data-tooltip="E-Mail Address"/></div></center>
                                </div>
                                <div class="col s3">
                                    <center><div id="mobile"><img src="images/other/mobile.png" alt="mobile" height="auto" width="100%" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Mobile Number"/></div></center>
                                </div>
                                <div class="col s3">
                                    <center><a href="https://www.facebook.com/asd.artsandiego" target="_blank"><img src="images/other/facebook.png" alt="facebook" height="auto" width="100%" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook Account"/></a></center>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-action-btn vertical click-to-toggle" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large blue-grey darken-4">
              <i class="material-icons">menu</i>
            </a>
            <ul>
              <li><a class="btn-floating blue-grey darken-4" href="https://ph.linkedin.com/in/artemiosandiego" target="_blank"><img src="images/other/linkedin.png" alt="linkedin" height="auto" width="100%" class="tooltipped" data-position="top" data-delay="50" data-tooltip="LinkedIn Account" /></a></li>
              <li>
                  <span class="btn-floating blue-grey darken-4 gmail">
                      <img src="images/other/mail.png" alt="gmail" 
                           height="auto" width="100%" 
                           class="tooltipped" data-position="top" data-delay="50" data-tooltip="E-Mail Address"
                           />
                  </span>
              </li>
              <li><div class="btn-floating blue-grey darken-4 mobile">
                     <img src="images/other/mobile.png" alt="mobile" 
                          height="auto" width="100%"
                          class="tooltipped" data-position="top" data-delay="50" data-tooltip="Mobile Number"/>
                  </div>
              </li>
              <li><a class="btn-floating blue-grey darken-4" href="https://www.facebook.com/asd.artsandiego" target="_blank"><img src="images/other/facebook.png" alt="facebook" height="auto" width="100%" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook Account"/></a></li>
            </ul>
        </div>
        <footer class="info">
            <div id="toTop">
                <a href="#"><img src="images/logo/branding.png" alt="branding" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Back to Top"></a>
            </div>
            <p>&copy; 2016 | Artemio San Diego</p>
        </footer>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!--<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <!--<script type="text/javascript" src="js/materialize.min.js"></script>-->
        <script type="text/javascript">
            $(document).ready(function () {
                
                //TOAST ON CLICK
                $('#gmail').click(function() {
                    var $toastContent = $('<span id="toast">asd.artsandiego@gmail.com</span>');
                    Materialize.toast($toastContent, 5000);
                });
                
                $('#mobile').click(function() {
                    var $toastContent = $('<span id="toast">+639361443777</span>');
                    Materialize.toast($toastContent, 5000);
                });
                
                $('.gmail').click(function() {
                    var $toastContent = $('<span id="toast">asd.artsandiego@gmail.com</span>');
                    Materialize.toast($toastContent, 5000);
                });
                
                $('.mobile').click(function() {
                    var $toastContent = $('<span id="toast">+639361443777</span>');
                    Materialize.toast($toastContent, 5000);
                });
                
                //PARALLAX
                $('.parallax').parallax();
                
                //NAVIGATION
                $(".button-collapse").sideNav();

                //COLLAPSIBLE
                var collapsible = [
                    {
                        selector: '.collapsible'
                        , offset: 0
                        , callback: function () {
                            Materialize.showStaggeredList(".collapsible");
                            $('.collapsible').animate({
                                'opacity': '1'
                            }, 1000);
                        }
                }
            ];
                Materialize.scrollFire(collapsible);

                //SKILLS
                var $toastContent = $('<span id="toast">Hover on an icon to show the level of proficiency.</span>');
                var skills = [
                    {
                        selector: '#skills'
                        , offset: 500
                        , callback: function () {
                            Materialize.toast($toastContent, 5000);
                        }
                    }
                ];

                Materialize.scrollFire(skills);

                //TOOLTIP
                $('.tooltipped').tooltip({
                    delay: 50
                });
                
            });
        </script>
        <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
        <!--<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>-->
        <script type="text/javascript">
            $(document).ready(function () {
                // init Isotope
                var $grid = $('.grid').isotope({
                    itemSelector: '.element-item'
                });
                // filter functions
                var filterFns = {
                    // show if number is greater than 50
                    numberGreaterThan50: function () {
                        var number = $(this).find('.number').text();
                        return parseInt(number, 10) > 50;
                    }, // show if name ends with -ium
                    ium: function () {
                        var name = $(this).find('.name').text();
                        return name.match(/ium$/);
                    }
                };
                // bind filter button click
                $('.filters-button-group').on('click', 'button', function () {
                    var filterValue = $(this).attr('data-filter');
                    // use filterFn if matches value
                    filterValue = filterFns[filterValue] || filterValue;
                    $grid.isotope({
                        filter: filterValue
                    });
                });
                // change is-checked class on buttons
                $('.button-group').each(function (i, buttonGroup) {
                    var $buttonGroup = $(buttonGroup);
                    $buttonGroup.on('click', 'button', function () {
                        $buttonGroup.find('.is-checked').removeClass('is-checked');
                        $(this).addClass('is-checked');
                    });
                });
            });
        </script>
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
</body>

</html>