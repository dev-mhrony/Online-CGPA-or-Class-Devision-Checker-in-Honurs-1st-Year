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
                      <a href="" style="color: #4b4b5a">Visit main Site </a>
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
              নোটিসঃ এখানে আপনি আপনার সাবজেক্ট আকারে তার লেটার গ্রেড সিলেক্ট করুন এবং সেই সাবজেক্ট এর ক্রেডিট সিলেক্ট করুন । 
              
            </marquee>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="sub-header">
                      Student Information
                    </h5>

                    <form class="form-horizontal" action="config.php" method="POST">
                      <div class="row">
                        <div class="col">
                          <!-- Fast Subject -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="fast_sub"
                              >Fast Subject <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="fast_sub"
                                  data-placeholder="Select Your Letter Grade"
                                  name="fast_sub" required
                                >
                                  <option value=""></option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">D</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Scend Subject -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="scend_sub"
                              >Scend Subject <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="scend_sub"
                                  data-placeholder="Select Your Letter Grade"
                                  name="scend_sub" required
                                >
                                  <option value=""></option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">D</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Therd Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="threed_sub"
                              >Therd Subject <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="threed_sub"
                                  data-placeholder="Select Your Letter Grade"
                                  name="threed_sub" required
                                >
                                  <option value=""></option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">D</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Fourth Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="four_sub"
                              >Fourth Subject <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="four_sub"
                                  data-placeholder="Select Your Letter Grade"

                                  name="four_sub" required
                                >
                                  <option value=""></option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">D</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Five Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="five_sub"
                              >Five Subject <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="five_sub"
                                  data-placeholder="Select Your Letter Grade"
                                  name="five_sub" required
                                >
                                  <option value=""></option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">D</option>
                                </select>
                              </div>
                            </div>
                          </div>

                           <!-- Six Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="six_sub"
                              >Six Subject <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="six_sub"
                                  data-placeholder="Select Your Letter Grade"
                                  name="six_sub" required
                                >
                                  <option value=""></option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">D</option>
                                </select>
                              </div>
                            </div>
                          </div>


                        </div>

                        <div class="col">
                           <!-- 1st Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="fast_cradit"
                              >Fast Cradit <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="fast_cradit"
                                  data-placeholder="Select Your 1st Cradit"
                                  name="fast_cradit" required
                                >
                                  <option value=""></option>
                                  <option value="5">5</option>
                                  <option value="4">4</option>
                                  <option value="3">3</option>
                                  <option value="2">2</option>
                                  <option value="1">1</option>
                                </select>
                              </div>
                            </div>
                          </div>

                           <!-- Seven Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="scend_cradit"
                              >Scend Cradit <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="scend_cradit"
                                  data-placeholder="Select Your 2nd Cradit"
                                   name="scend_cradit" required
                                >
                                  <option value=""></option>
                                  <option value=""></option>
                                  <option value="5">5</option>
                                  <option value="4">4</option>
                                  <option value="3">3</option>
                                  <option value="2">2</option>
                                  <option value="1">1</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Seven Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="Three_cradit"
                              >Three Cradit <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="Three_cradit"
                                  data-placeholder="Select Your 3rd Cradit"
 
                                  name="Three_cradit" required
                                >
                                  <option value=""></option>
                                  <option value="5">5</option>
                                  <option value="4">4</option>
                                  <option value="3">3</option>
                                  <option value="2">2</option>
                                  <option value="1">1</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Seven Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="Four_cradit"
                              >Four Cradit <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="Four_cradit"
                                  data-placeholder="Select Your 4th Cradit"
                                  name="Four_cradit" required
                                >
                                  <option value=""></option>
                                  <option value="5">5</option>
                                  <option value="4">4</option>
                                  <option value="3">3</option>
                                  <option value="2">2</option>
                                  <option value="1">1</option>
                                </select>
                              </div>
                            </div>
                          </div>


                          <!-- 5th Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="Five_cradit"
                              >Five Cradit <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="Five_cradit"
                                  data-placeholder="Select Your 5th Cradit"
                                  name="Five_cradit" required
                                >
                                  <option value=""></option>
                                  <option value="5">5</option>
                                  <option value="4">4</option>
                                  <option value="3">3</option>
                                  <option value="2">2</option>
                                  <option value="1">1</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- Seven Subject  -->
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="six_cratit"
                              >Six Cradit <code>*</code></label
                            >
                            <div class="col-lg-9">
                              <div class="form-group mt-3 mt-sm-0">
                                <select
                                  data-plugin="customselect"
                                  class="form-control"
                                  id="six_cratit"
                                  data-placeholder="Select Your 6th Cradit"
                                  name="six_cratit" required
                                >
                                  <option value=""></option>
                                  <option value="5">5</option>
                                  <option value="4">4</option>
                                  <option value="3">3</option>
                                  <option value="2">2</option>
                                  <option value="1">1</option>
                                </select>
                              </div>
                            </div>
                          </div>
                
                        </div>
                      </div>
                      

                      <div
                        class="apply_btn"
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-around;
                          align-content: center;
                          flex-wrap: nowrap;
                        "
                      >
                        <a href="#"
                          ><button type="submit" name="submit" class="btn btn-primary">
                            Check My CGPA or Class / Devision
                          </button></a
                        >
                      </div>
                    </form>
                  </div>
                  <!-- end card-body -->
                </div>

                <!-- end card-->
              </div>
              <!-- end col -->
            </div>
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
                <a href="https://developerrony.com" tarPOST="_blank">MH RONY</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>

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

  </body>
</html>
