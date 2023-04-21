<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Online CGPA Result Check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Plugins css -->
    <link
      href="assets/libs/select2/select2.min.css"
      rel="stylesheet"
      type="text/css"
    />


    <!-- App css -->
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- Begin page -->
    <div id="wrapper">
      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page" style="margin: 50px 115px">
        <div class="content">
          <!-- Start Content-->
          <div class="container-fluid">
            <div class="row page-title">
              <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                  <ol class="breadcrumb">
                    <h4 class="mb-1 mt-0">
                      <a href="index.php" style="color: #4b4b5a">Visit main Site </a>
                    </h4>

                    <h4 class="mb-1 mt-0" style="margin-left: 10px">
                      <a href="https://www.facebook.com/dev.mhrony" style="color: #4b4b5a">/ Suport</a>
                    </h4>
                  </ol>
                </nav>
                <h4 class="mb-1 mt-0"><a href="index.php" style="color: #4b4b5a">Online CGPA Result Check</a></h4>
              </div>
            </div>

            <marquee
              behavior=""
              direction=""
              onmouseover="this.stop();"
              onmouseout="this.start();"
            >
              Notes: The sole owner of this code is "Code Camp BD". It is provided free for students only for practice. Driving it in one's own name or selling it for one's own benefit is a punishable offence. Don't forget to subscribe our channel to get updates of all our new videos.
            </marquee>

            <?php 
            
             if(isset($_GET['cgpa'])){
                $result = $_GET['cgpa'];

                $new_result = number_format($result,2);

                $n_result = $new_result;

            ?>
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
            <H1 style="text-align: center; ;margin-top: 100px;">Congratulation Yoour CGPA Result is<samp style="color:red"> <?php echo  $new_result ?></samp> Out Of 4.00</H1>
            <H1 style="text-align: center; ;margin-top: 100px;">Your Class / Devesion = <?php  if($n_result>= 4.00){
                  echo "1st Class / Devision";
                }elseif($n_result>=3.75){
                  echo "1st Class / Devision";
                }elseif($n_result>=3.50){
                  echo "1st Class / Devision";
                }elseif($n_result>= 3.25){
                  echo "1st Class / Devision";
                }elseif($n_result>= 3.00){
                  echo "1st Class / Devision";
                }elseif($n_result>=2.75){
                  echo "2nd Class / Devision";
                }elseif($n_result>=2.50){
                  echo "2nd Class / Devision";
                }elseif($n_result>=2.25){
                  echo "2nd Class / Devision";
                }elseif($new_result>=2.00){
                  echo "3rd Class / Devision";
                }else{
                  echo "Fail";
                }
             }
             ?> </H1>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12" style="margin-left: 240px">
                2023 &copy; Code Camp BD. All Rights Reserved. Crafted with
                <i class="uil uil-heart text-danger font-size-12"></i> by
                <a href="https://www.facebook.com/dev.mhrony" target="_blank">MH RONY</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Plugins Js -->
    <script src="assets/libs/select2/select2.min.js"></script>


    <!-- Init js-->
    <script src="assets/js/pages/form-advanced.init.js"></script>
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
  </body>
</html>
