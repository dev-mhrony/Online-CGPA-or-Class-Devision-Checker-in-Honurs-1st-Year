                    <?php

if(isset($_POST['submit'])){
    // Subject Letter Grade
    $fast_sub       = $_POST['fast_sub'];
    $scend_sub      = $_POST['scend_sub'];
    $threed_sub     = $_POST['threed_sub'];
    $four_sub       = $_POST['four_sub'];
    $five_sub       = $_POST['five_sub'];
    $six_sub        = $_POST['six_sub'];

    // Cradit Value
    $fast_cradit    = $_POST['fast_cradit'];
    $scend_cradit   = $_POST['scend_cradit'];
    $Three_cradit   = $_POST['Three_cradit'];
    $Four_cradit    = $_POST['Four_cradit'];
    $Five_cradit    = $_POST['Five_cradit'];
    $six_cratit     = $_POST['six_cratit'];


    
    // Total Letter Point with Cradit
    $fast_mark      = $fast_sub * $fast_cradit;
    $scend_mark     = $scend_sub * $scend_cradit;
    $therd_mark     = $threed_sub * $Three_cradit;
    $four_mark      = $four_sub * $Four_cradit;
    $five_mark      = $five_sub * $Five_cradit;
    $six_mark       = $six_sub * $six_cratit;
    
    // Total Cradit
    $total_cradit   = $fast_cradit + $scend_cradit + $Three_cradit + $Four_cradit + $Five_cradit + $six_cratit ;


    // Total Mark
    $total_mark = $fast_mark + $scend_mark + $therd_mark + $four_mark + $five_mark + $six_mark ;

    // Total CGPA 

    $total_cgpa = $total_mark / $total_cradit;
    
    ;

    header("Location: result.php?cgpa=$total_cgpa");

}

?>

<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->