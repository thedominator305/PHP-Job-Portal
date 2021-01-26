<?php
require_once realpath("vendor/autoload.php");
use Job_Portal\Job;
$portal = new Job();

if (isset($_POST['create_company'])) {
    $data = array();
    $data['company'] = $_POST['company_name'];
    $data['tagline'] = $_POST['company_tagline'];
    $data['ceo'] = $_POST['company_ceo'];
    $data['description'] = $_POST['company_description'];
    $data['email'] = $_POST['company_email'];
    $data['phone'] = $_POST['company_phone'];
    $data['website'] = $_POST['company_website'];
    $data['location'] = $_POST['company_location'];
    $data['establish'] = $_POST['company_establish'];
    $data['facebook'] = $_POST['company_facebook'];
    $data['google'] = $_POST['company_google'];
    $data['twitter'] = $_POST['company_twitter'];
    $data['instagram'] = $_POST['company_instagram'];
    $data['linkedin'] = $_POST['company_linkedin'];
    $data['dribbble'] = $_POST['company_dribbble'];
    $data['about'] = $_POST['company_about'];

    if ($portal->create_company($data)) {
        redirect('job_fetch.php', 'Your job has been listed', 'success');
    } else {
        redirect('job_fetch.php', 'Something went wrong', 'error');
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Job Stock - Responsive Job Portal Bootstrap Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">

</head>
<body>
<div class="Loader"></div>
<div class="wrapper">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index-2.html">
                    <img src="assets/img/logo.png" class="logo logo-scrolled" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="active"><input type="text" class="form-control" placeholder="Find Freelancer"></li>
                    <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Main Pages</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="index-2.html">Home Page 1</a></li>
                                                <li><a href="index-3.html">Home Page 2</a></li>
                                                <li><a href="index-4.html">Home Page 3</a></li>
                                                <li><a href="index-5.html">Home Page 4</a></li>
                                                <li><a href="index-6.html">Home Page 5</a></li>
                                                <li><a href="freelancing.html">Freelancing</a></li>
                                                <li><a href="signin-signup.html">Sign In / Sign Up</a></li>
                                                <li><a href="search-job.html">Search Job</a></li>
                                                <li><a href="accordion.html">Accordion</a></li>
                                                <li><a href="tab.html">Tab Style</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">For Candidate</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                                <li><a href="browse-company.html">Browse Companies</a></li>
                                                <li><a href="create-resume.html">Create Resume</a></li>
                                                <li><a href="resume-detail.html">Resume Detail</a></li>
                                                <li><a href="#">Manage Jobs</a></li>
                                                <li><a href="job-detail.html">Job Detail</a></li>
                                                <li><a href="browse-jobs-grid.html">Job In Grid</a></li>
                                                <li><a href="candidate-profile.html">Candidate Profile</a></li>
                                                <li><a href="manage-resume-2.html">Manage Resume 2</a></li>
                                                <li><a href="company-detail.html">Company Detail</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">For Employer</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="create-job.html">Create Job</a></li>
                                                <li><a href="create-company.html">Create Company</a></li>
                                                <li><a href="manage-company.html">Manage Company</a></li>
                                                <li><a href="manage-candidate.html">Manage Candidate</a></li>
                                                <li><a href="manage-employee.html">Manage Employee</a></li>
                                                <li><a href="browse-resume.html">Browse Resume</a></li>
                                                <li><a href="search-new.html">New Search Job</a></li>
                                                <li><a href="employer-profile.html">Employer Profile</a></li>
                                                <li><a href="manage-resume.html">Manage Resume</a></li>
                                                <li><a href="new-job-detail.html">New Job Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Extra Pages <span class="new-offer">New</span></h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="freelancer-detail.html">Freelancer detail</a></li>
                                                <li><a href="job-apply-detail.html">New Apply Job</a></li>
                                                <li><a href="payment-methode.html">Payment Methode</a></li>
                                                <li><a href="new-login-signup.html">New LogIn / SignUp</a></li>
                                                <li><a href="freelancing-jobs.html">Freelancing Jobs</a></li>
                                                <li><a href="freelancers.html">Freelancers</a></li>
                                                <li><a href="freelancers-2.html">Freelancers 2</a></li>
                                                <li><a href="premium-candidate.html">Premium Candidate</a></li>
                                                <li><a href="premium-candidate-detail.html">Premium Candidate Detail</a></li>
                                                <li><a href="blog-detail.html">Blog detail</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="login.html"><i class="fa fa-pencil" aria-hidden="true"></i>SignIn</a></li>
                    <li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>
                    <li class="left-br"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>

    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Create Company</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Header Title End -->

    <!-- General Detail Start -->
    <div class="detail-desc section">
        <div class="container white-shadow">
            <div class="row">
                <div class="detail-pic js">
                    <div class="box">
                        <input type="file" name="upload-pic[]" id="upload-pic" class="inputfile"/>
                        <label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
                    </div>
                </div>
            </div>

            <div class="row bottom-mrg">
                <form class="add-feild" method="post" action="job_create_company.php">

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="company_tagline" placeholder="Company Tagline">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <select class="form-control input-lg">
                                <option>All Categories</option>
                                <option>Software</option>
                                <option>Hardware</option>
                                <option>Machanical</option>
                                <option>HR/Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="company_ceo" placeholder="Company CEO Name">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" name="company_description"  placeholder="Company Description"></textarea>
                    </div>

            </div>

            <div class="row no-padd">
                <div class="detail pannel-footer">
                    <div class="col-md-12 col-sm-12">
                        <div class="detail-pannel-footer-btn pull-right">
                            <a href="#" class="footer-btn choose-cover">Choose Cover Image</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- General Detail End -->

    <!-- Basic Full Detail Form Start -->
    <section class="full-detail">
        <div class="container">
            <div class="row bottom-mrg extra-mrg">

                <h2 class="detail-title">Work Experience</h2>
                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="company_email" placeholder="Email Address">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" name="company_phone" placeholder="Phone Number">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                        <input type="text" class="form-control" name="company_website" placeholder="Website Address">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" name="company_location" placeholder="Local E.g. It Park New">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                        <input type="text" name="company_establish" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                    </div>
                </div>

                <!--                    <div class="col-md-6 col-sm-6">-->
                <!--                        <div class="input-group">-->
                <!--                            <span class="input-group-addon"><i class="fa fa-users"></i></span>-->
                <!--                            <input type="text" class="form-control" name="company_establish" placeholder="Employee E.g. 100-2500">-->
                <!--                        </div>-->
                <!--                    </div>-->


            </div>

            <div class="row bottom-mrg extra-mrg">

                <h2 class="detail-title">Social Profile</h2>
                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                        <input type="text" class="form-control" name="company_facebook" placeholder="Profile Link">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                        <input type="text" class="form-control" name="company_google" placeholder="Profile Link">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                        <input type="text" class="form-control" name="company_twitter" placeholder="Profile Link">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input type="text" class="form-control" name="company_instagram" placeholder="Profile Link">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                        <input type="text" class="form-control" name="company_linkedin" placeholder="Profile Link">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
                        <input type="text" class="form-control" name="company_dribbble" placeholder="Profile Link">
                    </div>
                </div>


            </div>


            <div class="row bottom-mrg extra-mrg">

                <h2 class="detail-title">About Company</h2>
                <div class="col-md-12 col-sm-12">
                    <textarea class="form-control textarea" name="company_about" placeholder="About Company"></textarea>
                    <h2 class="detail-title">Company Requirements</h2>

                    <textarea class="form-control textarea" name="company_requirements" placeholder="About Company"></textarea>

                </div>


                <div class="col-md-12 col-sm-12">
                    <button class="btn btn-success btn-primary small-btn" name="create_company">Submit your company</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Basic Full Detail Form End -->

    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="row lg-menu">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <img src="assets/img/footer-logo.png" class="img-responsive" alt="" />
                </div>
                <div class="col-md-8 co-sm-8 pull-right">
                    <ul>
                        <li><a href="index-2.html" title="">Home</a></li>
                        <li><a href="blog.html" title="">Blog</a></li>
                        <li><a href="404.html" title="">404</a></li>
                        <li><a href="faq.html" title="">FAQ</a></li>
                        <li><a href="contact.html" title="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-padding">
            <div class="container">
                <div class="col-md-3 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">About Job Stock</h3>
                        <div class="textwidget">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            <p>7860 North Park Place<br>
                                San Francisco, CA 94120</p>
                            <p><strong>Email:</strong> Support@careerdesk</p>
                            <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">All Navigation</h3>
                        <div class="textwidget">
                            <div class="textwidget">
                                <ul class="footer-navigation">
                                    <li><a href="manage-company.html" title="">Front-end Design</a></li>
                                    <li><a href="manage-company.html" title="">Android Developer</a></li>
                                    <li><a href="manage-company.html" title="">CMS Development</a></li>
                                    <li><a href="manage-company.html" title="">PHP Development</a></li>
                                    <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                    <li><a href="manage-company.html" title="">Iphone Developer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">All Categories</h3>
                        <div class="textwidget">
                            <ul class="footer-navigation">
                                <li><a href="manage-company.html" title="">Front-end Design</a></li>
                                <li><a href="manage-company.html" title="">Android Developer</a></li>
                                <li><a href="manage-company.html" title="">CMS Development</a></li>
                                <li><a href="manage-company.html" title="">PHP Development</a></li>
                                <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                <li><a href="manage-company.html" title="">Iphone Developer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Connect Us</h3>
                        <div class="textwidget">
                            <form class="footer-form">
                                <input type="text" class="form-control" placeholder="Your Name">
                                <input type="text" class="form-control" placeholder="Email">
                                <textarea class="form-control" placeholder="Message"></textarea>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="container">
                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
        </div>
    </footer>
    <div class="clearfix"></div>
    <!-- Footer Section End -->

    <!-- Sign Up Window Code -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
                            <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                                <img src="assets/img/logo.png" class="img-responsive" alt="" />
                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="email"  name="email" class="form-control" placeholder="Username" required="">
                                                <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                                                <div class="center">
                                                    <button type="submit" id="login-btn" class="submit-btn"> Login </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="register">
                                <img src="assets/img/logo.png" class="img-responsive" alt="" />
                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text"  name="email" class="form-control" placeholder="Your Name" required="">
                                            <input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
                                            <input type="email"  name="email" class="form-control" placeholder="Username" required="">
                                            <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                                            <div class="center">
                                                <button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sign Up Window -->
    <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
    <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <ul id="styleOptions" title="switch styling">
            <li>
                <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
            </li>
        </ul>
    </div>

    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
    <script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
    <script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
    <script type="text/javascript" src="assets/plugins/js/loader.js"></script>
    <script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
    <!-- Date dropper js-->
    <script src="#"></script>

    <!-- Custom Js -->
    <script src="assets/js/custom.js"></script>

    <script>
        $('#company-dob').dateDropper();
    </script>
    <script src="assets/js/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#styleOptions').styleSwitcher();
        });
    </script>
    <script>
        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
</div>
</body>

<!-- create-company41:40-->
</html>
