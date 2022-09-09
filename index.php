<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  $server = $_SERVER['REQUEST_URI'] ; ?>
        <?php $home = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        <title>
            Email Template
        </title>

        <meta charset="utf-8">
        <base target="_blank">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $server; ?>css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Cod Box Copy begin -->
        <link href="<?php echo $server; ?>plugin/copy/prism/prism.min.css" rel="stylesheet">
        <link href="<?php echo $server; ?>plugin/copy/code-box-copy/css/code-box-copy.css" rel="stylesheet">
        <!-- Cod Box Copy end -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="<?php echo $server; ?>plugin/copy/prism/prism.min.js"></script>
        <script src="<?php echo $server; ?>plugin/copy/clipboard/clipboard.min.js"></script>
        <script src="<?php echo $server; ?>plugin/copy/code-box-copy/js/code-box-copy.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center sitelogo">
            <a class="imglogos" href="<?php echo $home; ?>" ><img src="<?php echo $server; ?>images/logo.png" alt="logo"> </a>
            <h3>
                DESIGN YOUR PERSONALISED EMAIL SIGNATURE
            </h3>
        </div>
        <div class="container-fluid">
            <div class="row signtemp">
                <div class="col-sm-3 signdetails">
                    <div class="sidebar">
                        <h5 class="plat-1 choose_email">
                            Choose Email Platform
                        </h5>
                        <div class="row">
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="radio" name="htmltemplate" value="1"  checked    >
                                    <img class="mailicon" src="<?php echo $server; ?>images/outlook.jpg" alt="outlook" />
                                    <span class="spanmail">Outlook</span>
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="radio" name="htmltemplate" value="2"  >
                                    <img class="mailicon" src="<?php echo $server; ?>images/outlook365.jpg" alt="office 365" />
                                    <span class="spanmail">Outlook 365</span>
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="radio" name="htmltemplate" value="3"  >
                                    <img class="mailicon" src="<?php echo $server; ?>images/thunderbild.jpg" alt="Thunderbird" />
                                    <span class="spanmail">Thunderbird</span>
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="radio" name="htmltemplate" value="4"  >
                                    <img class="mailicon" src="<?php echo $server; ?>images/gmail.jpg" alt="Gmail" />
                                    <span class="spanmail">Gmail</span>
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="radio" name="htmltemplate" value="5"  >
                                    <img class="mailicon" src="<?php echo $server; ?>images/exchangeserver.jpg" alt="Exchange Server" />
                                    <span class="spanmail">Exchange Server</span>
                                </label>
                            </div>
                            <div class="col-sm-4 col-6">
                                <label>
                                    <input type="radio" name="htmltemplate" value="6"  >
                                    <img class="mailicon" src="<?php echo $server; ?>images/exchange_online.jpg" alt="Exchange Online" />
                                    <span class="spanmail">Exchange Online</span>
                                </label>
                            </div>
                        </div>
                        <a href="#signaturedetail" class="prsnal_data" data-toggle="collapse">
                            <h5 class="plat-1">
                                Enter signature details 
                                <i class="fa fa-angle-right" aria-hidden="true">
                                </i>
                            </h5>
                        </a>
                     <div id="signaturedetail" class="collapse">
                            <div class="row">
                                <a href="#demo" class="prsnal_data collapsed" data-toggle="collapse">
                                    <h5 id="div1" class="subdata">
                                        Personal Data 
                                        <i class="fa fa-angle-right" aria-hidden="true">
                                        </i>
                                    </h5>
                                </a>
                                <div id="demo" class="collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('firstName')">
                                                <label class="data-input-label">First name <input id="firstname" type="text" ng-model="firstName" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="Aiden" draggable="false"></label>
                                            </div>
                                            <div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('lastName')">
                                                <label class="data-input-label">Last name <input type="text" id="lastname" ng-model="lastName" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="Baldwin"></label>
                                            </div>
                                            <div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('title')">
                                                <label class="data-input-label">Job title <input type="text" id="jobtitle" ng-model="title" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="Photography"></label>
                                            </div>
                                            <div class="form-group col-lg-6 " ng-show="$ctrl.isFieldVisible('email')">
                                                <label class="data-input-label">Email address<input type="email" id="email" ng-model="email" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="info@aidenbaldwin.com"></label>
                                            </div>
                                            <div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('phone')">
                                                <label class="data-input-label">Phone number <input type="text" ng-model="phone" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" id="phone" value="+48 75 64 61 001"></label>
                                            </div>
                                            <!--<div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('mobile')">-->
                                            <!--   <label class="data-input-label">Mobile number<input type="text" ng-model="mobile" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" id="mobile" value="(800) 555-0199"></label>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#demo2" class="prsnal_data collapsed" data-toggle="collapse">
                                    <h5 id="div2" class="subdata" >
                                        Company Data 
                                        <i class="fa fa-angle-right" aria-hidden="true">
                                        </i>
                                    </h5>
                                </a>
                                <div id="demo2" class="collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <!--<div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('firstName')">-->
                                            <!--   <label class="data-input-label">Company name <input type="text" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="My Company" id="company" draggable="false"></label>                             -->
                                            <!--</div>-->
                                            <div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('lastName')">
                                                <label class="data-input-label">Website <input type="text"  id="website" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="www.aidenbaldwin.com"></label>
                                            </div>
                                            <div class="form-group col-lg-6" ng-show="$ctrl.isFieldVisible('title')">
                                                <label class="data-input-label">Address 1 <input type="text" id="address1" ng-model="title" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="16 Freedom St, Deer Hill,"></label>
                                            </div>
                                            <div class="form-group col-lg-6 " ng-show="$ctrl.isFieldVisible('email')">
                                                <label class="data-input-label">Address 2<input type="text" id="address2" ng-model="email" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="Poland"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#demo3" class="prsnal_data collapsed" data-toggle="collapse">
                                    <h5 id="div3" class="subdata">
                                        Graphics 
                                        <i class="fa fa-angle-right" aria-hidden="true">
                                        </i>
                                    </h5>
                                </a>
                                <div id="demo3" class="collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <label class="data-input-label" style="text-align:left;"> How to add graphics?</label>
                                            <div class="form-group col-lg-12">
                                               </br> <span class="con_span">Profile Image <span class="errors" id="profileerror" style="color:white;">( Use a square image with a size of 120 x 120 pixels )</span> </span>
                                                <form method="post" action="" enctype="multipart/form-data" id="myform">
                                                    <input type="file" id="myprofile" name="myprofile">
                                                    </form>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <span class="con_span">Signature Image <span class="errors" id="signerror" style=" color:white;">( Use a  image with a size of 250 x 80 pixels )</span></span>
                                                <form method="post" action="" enctype="multipart/form-data" id="myform2">
                                                     <input type="file" id="mysignature" name="mysignature">
                                                </form>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <span class="con_span">Banner Image <span class="errors" id="signerror" style=" color:white;">( Use a  image with a size of 600 x 100 pixels )</span>
                                                </span>
                                                 <form method="post" action="" enctype="multipart/form-data" id="myform3">
                                                 <input type="file" id="mybannerlogo" name="mybannerlogo">
                                                 </form>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <span class="con_span">Banner linking to</span>
                                                <input type="text" id="linking" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://www.codetwo.com/email-signatures/">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <p>
                                                    The default graphics used in this template were designed to be dark mode friendly. If you want your images to look well in dark mode, follow 
                                                    <a href="#" >these guidelines</a>
                                                    .   
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" >
                                <a href="#discliaer" style="display:none;" class="prsnal_data" data-toggle="collapse">
                                    <h5 class="subdata">
                                        Disclaimer Text
                                    </h5>
                                </a>
                                <div id="discliaer" class="collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <textarea id="discliamertext">The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#demo4" class="prsnal_data collapsed" data-toggle="collapse">
                                    <h5 id="div4" class="subdata">
                                        Style 
                                        <i class="fa fa-angle-right" aria-hidden="true">
                                        </i>
                                    </h5>
                                </a>
                                <div id="demo4" class="collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-lg-6" >
                                                <label class="data-input-label">
                                                    First font color </br>
                                                <div class="colorpickers">
                                                    <input type=color id="firstfont" class="colorchnage" value="#009ed5">
                                                    <input type="text" id="firstfontinput"  class="colorchnage data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="#ff0000" draggable="false">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group col-lg-6" >
                                            <label class="data-input-label">
                                                Second font color</br>
                                            <div class="colorpickers">
                                                <input type=color id="secondfont" class="colorchnage" value="#212529">
                                                <input type="text" id="secondfontinput"  class="colorchnage data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="#ff6600">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <label class="data-input-label">
                                            Third font color</br>
                                        <div class="colorpickers">
                                            <input type=color id="thirdfont" class="colorchnage" value="#212529">
                                            <input type="text" id="thirdfontinput"   class="colorchnage data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="#2196f3">
                                        </div>
                                    </label>
                                </div>
                                <div class="form-group col-lg-6 " ng-show="$ctrl.isFieldVisible('email')">
                                    <label class="data-input-label">
                                        Font style
                                        <select id="select-fontfamily" ng-model="fontFamily" ng-change="styleChanged()" class="ng-pristine ng-valid ng-not-empty ng-touched">
                                            <option value="Arial, sans-serif" style="font-family:Arial">Arial</option>
                                            <option value="Tahoma, sans-serif" style="font-family:Tahoma">Tahoma</option>
                                            <option value="Verdana, sans-serif" style="font-family:Verdana">Verdana</option>
                                            <option value="Times New Roman, serif" style="font-family:Times New Roman">Times New Roman</option>
                                            <option value="Comic Sans MS, cursive, sans-serif" style="font-family:Comic Sans MS">Comic Sans MS</option>
                                            <option value="Courier New, monospace" style="font-family:Courier New">Courier New</option>
                                            <option value="Lucida Console, monospace" style="font-family:Lucida Console">Lucida Console</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="#demo5" class="prsnal_data collapsed" data-toggle="collapse">
                        <h5 id="div5" class="subdata">
                            Social Media Links 
                            <i class="fa fa-angle-right" aria-hidden="true">
                            </i>
                        </h5>
                    </a>
                    <div id="demo5" class="collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-lg-6" >
                                    <label class="data-input-label">Twitter<input type="text" id="twitredirect"  class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://twitter.com/MyCompany404" draggable="false"></label>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="data-input-label">Facebook <input type="text" id="fbredirect"  class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://www.facebook.com/MyCompany"></label>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="data-input-label">Linkdin <input type="text" id="linkredirect" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://www.linkedin.com/company/mycompany404"></label>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="data-input-label">Google+ <input type="text" id="youtredirect" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://www.google.com/user/MyCompanyChannel"></label>
                                </div>
                                <!--<div class="form-group col-lg-6" >-->
                                <!--   <label class="data-input-label">Instagram <input type="text" id="instaredirect"  class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://www.instagram.com/mycompany404/"></label>-->
                                <!--</div>-->
                                <!--<div class="form-group col-lg-6" >-->
                                <!--   <label class="data-input-label">Pinterest <input type="text" id="pintredirect" class="data-input-field ng-pristine ng-untouched ng-valid ng-not-empty" Value="https://pinterest.com/mycompany404/"></label>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applysign">
                <h5 class="plat-1" id="apply" >
                    Apply your signature 
                    <i class="fa fa-angle-right" aria-hidden="true">
                    </i>
                </h5>
                <h5 class="plat-1" id="signaturepreview" style="display:none;">
                    Show Signature Preview 
                    <i class="fa fa-angle-right" aria-hidden="true">
                    </i>
                </h5>
            </div>
            <div class="darkmode">
                <label class="datknight">
                   <button type="button" id="d_mode"  class="btn btn-dark"  data-mode="light" data-toggle="modal" data-target="#exampleModal" onclick="toggle(this);">  
                        <img style="width:20px; height:20px;margin-right: 11px;"  src="<?php echo $server; ?>images/dark.png" alt="darkmode"/> Dark Mode Preview
                    </button>
                </label>
            </div>
         </div>
    </div>
    <div   class="col-sm-9 sliderimage">
        <h5 class="plat-1 e_sign">
            Choose Signature Template
        </h5>
        <ul id="image1" class="slicktemplate" style="display: block;">
            <?php for ($i=1; $i <36 ; $i++) { ?>
            <li class="sslic">
                <label>
                    <input type="radio" name="previewslider" value="<?php echo $i; ?>" <?php if($i == 1){  echo 'checked'; }  ?> >
                    <img class="templateicon" src="<?php echo $server; ?>images/light/img-<?php echo $i; ?>.jpg" alt="Gmail" />
                </label>
            </li>
            <?php } ?>
        </ul>
           <ul id="image" class="slicktemplate dark" style="display: block;" >
             <?php for ($i=1; $i <36 ; $i++) { ?>
            <li class="sslic"> 
                <label>
                    <input type="radio" name="previewslider" value="<?php echo $i; ?>" <?php if($i == 1){  echo 'checked'; }  ?> >
                    <img class="templateicon" src="<?php echo $server; ?>images/dark/img-<?php echo $i; ?>.jpg" alt="Gmail" />
                </label>
            </li>
            <?php } ?>
        </ul>
     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="icon-copy" viewBox="0 0 32 32">
                <path d="M20 8v-8h-14l-6 6v18h12v8h20v-24h-12zM6 2.828v3.172h-3.172l3.172-3.172zM2 22v-14h6v-6h10v6l-6 6v8h-10zM18 10.828v3.172h-3.172l3.172-3.172zM30 30h-16v-14h6v-6h10v20z">
                </path>
            </symbol>
        </svg>
        <div id="htmlpreview" style="display:none;">
              <?php for ($i=1; $i < 7; $i++) { ?>
            <div id="templatehtml-<?php echo $i; ?>" class="templatehtml" style="display:none;">
                <?php 
                                            $template = 'template/templatehtml'.$i.'.php';
                                            include($template) ?>
            </div>
            <?php  } ?>
         </div>
         <div id="emailpreview" class="emailcopy" data-mode="light" style="display:block;">
            <?php for ($i=1; $i < 36; $i++) { ?>
            <div id="templatepre-<?php echo $i; ?>" class="templatesignature <?php if($i==1){ echo 'active' ;} ?>"  style="display:none;">
                <?php 
                                             $template = 'template/preview/template-'.$i.'.php';
                                             include($template) ?>
            </div>
            <?php  } ?>
        </div>
    <div id="emailpreview1" class="emailcopy" data-mode="dark" style="display:none;">
            <?php for ($i=1; $i < 36; $i++) { ?>
            <div id="templatepre--<?php echo $i; ?>" class="templatesignature <?php if($i==1){ echo 'active' ;} ?>"  <?php if($i==1){ echo 'style="display:block"'; }else{ echo 'style="display:none"';} ?>>
    <?php 
                                             $darktemplate = 'darktemplate/preview/template-'.$i.'.php';
                                             include($darktemplate) ?>
            </div>
            <?php  } ?>
        </div>
        
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <img id="darkmodslimg" src="
<?php echo $server; ?>images/dark/img-1.jpg" style="padding-bottom:10px">
                    <div class="modal-body">
                        <p>
                            This is the dark mode preview of this signature. It shows how the original template looks like after using the switch background option in Outlook. To learn more about designing dark mode friendly email signatures, check out this article.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>
</div>
</div>
<footer>
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color:#fff;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">2022-2023</a>
  </div>
 </footer>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="/emailSignature/plugin/colorpicker/css/colorpicker.css" />
<script type="text/javascript" src="/emailSignature/plugin/colorpicker/js/colorpicker.js"></script>
<script type="text/javascript">
// $(window).resize(function(){location.reload();});
    $(document).ready(function(){
          $('#div2,#div3,#div4,#div5').parent().click(function () {
        if($('#div1').parent().hasClass('collapsed') == false){
            $('#div1').click();
        }
    });
    $('#div1,#div3,#div4,#div5').parent().click(function () {
        if($('#div2').parent().hasClass('collapsed') == false){
            $('#div2').click();
        }
    });
    $('#div2,#div1,#div4,#div5').parent().click(function () {
        if($('#div3').parent().hasClass('collapsed') == false){
            $('#div3').click();
        }
    } );
    $('#div2,#div3,#div1,#div5').parent().click(function () {
        if($('#div4').parent().hasClass('collapsed') == false){
            $('#div4').click();
        }
    });
    $('#div2,#div3,#div4,#div1').parent().click(function () {
        if($('#div5').parent().hasClass('collapsed') == false){
            $('#div5').click();
        }
    });
        $('.slicktemplate').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            autoplay: false,
            autoplaySpeed: 2000,
            dots: false,
            infinite: false,
            arrows: true,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            }
                         ,
                         {
                             breakpoint: 1008,
                             settings: {
                                 slidesToShow: 4,
                                 slidesToScroll: 2
                             }
                         }
                         ,
                         {
                             breakpoint: 800,
                             settings: {
                                 slidesToShow: 1,
                                 slidesToScroll: 1
                             }
                         }
                        ]
        }
                                 );
    }
                     );
    function generateHtml(selector) {
        var d_data= $('input:radio[name=previewslider]:checked').val();
        var element =selector +'-'+ d_data;
        $('#signatureHtmlDestThunderbird').html($('#'+element).html());
        document.querySelectorAll("code").forEach(el => el.innerText = el.innerHTML);
    }
    function generateHtml2(selector) {
        var d_data= $('input:radio[name=previewslider]:checked').val();
        var element =selector +'-'+ d_data;
        $('#signatureHtmlDestExchangeserver').html($('#'+element).html());
        document.querySelectorAll("code").forEach(el => el.innerText = el.innerHTML);
    }
    function generateHtml3(selector) {
        var d_data= $('input:radio[name=previewslider]:checked').val();
        var element =selector +'-'+ d_data;
        $('#signatureHtmlDestExchaneOnline').html($('#'+element).html());
        document.querySelectorAll("code").forEach(el => el.innerText = el.innerHTML);
    }
    function selectElementContentshtml(selector) {
         $('#emailpreview').show();
        $('#emailpreview').css("opacity","0");
                var d_data= $('input:radio[name=previewslider]:checked').val();
        // console.log('d_data');
        console.log('templatepre-'+ d_data);
        el = document.getElementById(selector)
       console.log(el);
         var body = document.body,
            range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            range.selectNodeContents(el);
            sel.addRange(range);
        }
        setTimeout(function(){
            $('#emailpreview').hide();
            $('#emailpreview').css("opacity","1");
        }
                   , 2000);
        document.execCommand("Copy", false, null);
    }
    function selectElementContents(selector) {
//    alert($('#d_mode').data('mode'));
    if($('#d_mode').data('mode') == 'light'){
        $('#emailpreview').show();
        $('#emailpreview').css("opacity","0");
        var d_data= $('input:radio[name=previewslider]:checked').val();
       console.log(selector);
         $('#msghide1'+ d_data).show();
        // alert('#msghide'+ d_data);
        el = document.getElementById(selector +'-'+ d_data)
       // console.log(el);
        var body = document.body,
            range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            range.selectNodeContents(el);
            sel.addRange(range);
        }
        setTimeout(function(){
            $('#emailpreview').hide();
            $('#msghide'+ d_data).hide();
            $('#emailpreview').css("opacity","1");
        }
                   , 2000);
        document.execCommand("Copy");
    }
    else{
        $('#emailpreview1').show();
        $('#emailpreview1').css("opacity","0");
        var d_data= $('input:radio[name=previewslider]:checked').val();
  console.log(selector);
  
          $('#msghide1'+ d_data).show();
        // alert('#msghide'+ d_data);
        el = document.getElementById(selector +'--'+ d_data)
       // console.log(el);
        var body = document.body,
            range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            range.selectNodeContents(el);
            sel.addRange(range);
        }
        setTimeout(function(){
            $('#emailpreview1').hide();
            $('#msghide'+ d_data).hide();
            $('#emailpreview1').css("opacity","1");
        }
                   , 2000);
        document.execCommand("Copy");
    }
    }
    $('#apply').click(function () {
        $('#emailpreview').hide();
        $('#emailpreview1').hide();
        $(this).hide();
        $('#htmlpreview').show();
        $('#signaturepreview').show();
    }
                     );
    $('#signaturepreview').click(function ()
     {
        //  alert($('#d_mode').data('mode'));
    
        if($('#d_mode').data('mode')=='light')

        {
            $('#emailpreview1').hide();
            $('#signaturepreview').hide();
            $('#htmlpreview').hide();
            $(this).hide();
            $('#emailpreview').show();
             $('#apply').show();
        }
          else{
            
             if($('#d_mode').data('mode')=='dark')
              {
                 $('#emailpreview').hide();
                 $('#signaturepreview').hide();
                 $('#htmlpreview').hide();
                 $(this).hide();
                 $('#emailpreview1').show();
                $('#apply').show();
              
            //  $('#emailpreview').show();
            //  $(this).hide();
            //  $('#htmlpreview').hide();
            //     $('#apply').show();
    //      }
    // }
          }
          }
        });

var clicked = false;
  function toggle(datas){
    if($(datas).data('mode') == 'light'){
        $(datas).data('mode','dark');
    }
    else{
        $(datas).data('mode','light');
    }
    var myboxx=document.getElementById("image1");
    var darksliders =document.getElementById("image");
    var emaildark =document.getElementById("emailpreview1");
    var emaillight =document.getElementById("emailpreview");
     if(!clicked){
       clicked = true;
        document.getElementById("d_mode").innerHTML = '<img style="width:20px; height:20px;margin-right: 11px;" src="/emailSignature/images/light.png" alt="lightmode">' + "Light Mode Preview";
      if(myboxx.style.display=="block")
    {
        myboxx.style.display="none";
        emaillight.style.display="none";
        darksliders.style.display="block";
        emaildark.style.display="block";
    }
    }
    else{
        clicked = false;
        document.getElementById("d_mode").innerHTML =  '<img style="width:20px; height:20px;margin-right: 11px;" src="/emailSignature/images/dark.png" alt="darkmode">' + "Dark Mode Preview";
       var darksliders=document.getElementById("image");
        var myboxx=document.getElementById("image1");
        var emaildark =document.getElementById("emailpreview1");
        var emaillight =document.getElementById("emailpreview");
     if(darksliders.style.display=="block")
    {
        darksliders.style.display="none";
        emaildark.style.display="none";
        myboxx.style.display="block";
        emaillight.style.display="block";
    }
    }
    }
   $('#select-fontfamily').on('change', function() {
        $('.left_aiden').css('font-family', $(this).find(":selected").val());
        $('.secondcolors').css('font-family', $(this).find(":selected").val());
        $('.thirdcolors').css('font-family', $(this).find(":selected").val());
    }
    );
    
    $(document).ready(function(){
    $('input:radio[name=previewslider]').change(function () {
      
    $('.templatesignature').each(function () {
                    var optionValue = $(this).parent();
              //  console.log(optionValue.css('display'));
                if(optionValue.css('display') == 'block'){
                    $(this).hide();
                }
                });

    $('#mybannerlogo').parent().parent().show();
    $('#myprofile').parent().parent().show();
    $('#mysignature').parent().parent().show();
    $('#linking').parent().parent().show();
        radioValue=  $(this).val();
       // alert(radioValue );
 
       setTimeout(function() {
            $('#radioValue').hide();
                    }, 10);
        if(radioValue){
           // alert('#templatepre--'+radioValue);
            $('#templatepre-'+radioValue).show();
            $('#templatepre--'+radioValue).show();

            // $('#templatepre--'+radioValue).show();
            $(".templatesignature").removeClass("active");
            $('#templatepre-'+radioValue).addClass("active");
             $('#templatepre--'+radioValue).addClass("active");
        }
        // setTimeout(function() {
        //     $('#radioValue').hide();
        //             }, 20);
    
        if($('.templatesignature').hasClass('active')){
            if($(".active").find( "#fontcolor" )){
                var fontcolor =  $(".active").find( "#fontcolor" ).css('color');
                hexc(fontcolor);
                $('#firstfontinput').val(color);
                $('#firstfont').val(color);
            }
        }
        if($('.templatesignature').hasClass('active')){
            if($(".active").find( ".secondcolors" )){
                var secondcolors =  $(".active").find( ".secondcolors" ).css('color');
                hexc(secondcolors);
                $('#secondfontinput').val(color);
                $('#secondfont').val(color);
            }
        }
        if($('.templatesignature').hasClass('active')){
            if($(".active").find( ".thirdcolors" )){
                var thirdcolors =  $(".active").find( ".thirdcolors" ).css('color');
                hexc(thirdcolors);
                $('#thirdfontinput').val(color);
                $('#thirdfont').val(color);
            }
        }
        if($(".active").find( "#firstnametemplate" )){
            if($('.templatesignature').hasClass('active')){
                var firstnametemplate =  $(".active").find( "#firstnametemplate" ).text();
                $('#firstname').val(firstnametemplate);
            }
        }
        if($(".active").find( "#lastnametemplate" )){
            if($('.templatesignature').hasClass('active')){
                var lastnametemplate =  $(".active").find( "#lastnametemplate" ).text();
                $('#lastname').val(lastnametemplate);
            }
        }
        if($(".active").find( "#jobtitletemplate" )){
            if($('.templatesignature').hasClass('active')){
                var jobtitletemplate =  $(".active").find( "#jobtitletemplate" ).text();
                $('#jobtitle').val(jobtitletemplate);
            }
        }
        if($(".active").find( "#emailtemplate" )){
            if($('.templatesignature').hasClass('active')){
                var emailtemplate =  $(".active").find( "#emailtemplate" ).text();
                $('#email').val(emailtemplate);
            }
        }
        if($(".active").find( "#phonetemplate" )){
            if($('.templatesignature').hasClass('active')){
                var phonetemplate =  $(".active").find( "#phonetemplate" ).text();
                $('#phone').val(phonetemplate);
            }
        }
        if($(".active").find( "#websitetemplate" )){
            if($('.templatesignature').hasClass('active')){
                var websitetemplate =  $(".active").find( "#websitetemplate" ).text();
                $('#website').val(websitetemplate);
            }
        }
        if($(".active").find( "#address1template" )){
            if($('.templatesignature').hasClass('active')){
                var address1template =  $(".active").find( "#address1template" ).text();
                $('#address1').val(address1template);
            }
        }
        if($(".active").find( "#address2template" )){
            if($('.templatesignature').hasClass('active')){
                var address2template =  $(".active").find( "#address2template" ).text();
                $('#address1').val(address2template);
            }
        }
        if($(".active").find( "#mobiletemplate" ).length == 0){
            if($('.templatesignature').hasClass('active')){
                $('#mobile').parent().parent().hide();
            }
        }
        if($(".active").find( "#companynametemplate" ).length == 0){
            if($('.templatesignature').hasClass('active')){
                $('#company').parent().parent().hide();
            }
        }
        if($(".active").find( "#logoimgtemplate" ).length == 0){
            if($('.templatesignature').hasClass('active')){
                $('#mysignature').parent().parent().hide();
            }
        }
        if($(".active").find( "#profileimgtemplate" ).length == 0){
            if($('.templatesignature').hasClass('active')){
                $('#myprofile').parent().parent().hide();
            }
        }
        if($(".active").find( "#bannerimgtemplate" ).length == 0){
            if($('.templatesignature').hasClass('active')){
                $('#mybannerlogo').parent().parent().hide();
                $('#linking').parent().hide();
            }
        }
    });
    });

    function hexc(colorval) {
        var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
        delete(parts[0]);
        for (var i = 1; i <= 3; ++i) {
            parts[i] = parseInt(parts[i]).toString(16);
            if (parts[i].length == 1) parts[i] = '0' + parts[i];
        }
        color = '#' + parts.join('');
    }
    $('input:radio[name=htmltemplate]').change(function () {
        $('.templatehtml').hide();
        radiohtml=  $(this).val();
        if(radiohtml){
            //  alert('#templatehtml'+radiohtml);
            $('#templatehtml-'+radiohtml).show();
        }
    }
    );

    $(document).ready(function(){
        $('#mybannerlogo').parent().parent().hide();
        var radioValue = $("input[name='previewslider']:checked").val();
        if(radioValue){
            $('#templatepre-'+radioValue).show();
            // $('#templatepre--'+radioValue).show();
        }
        var radioValue2 = $("input[name='htmltemplate']:checked").val();
        if(radioValue2){
            $('#templatehtml-'+radioValue2).show();
        }
        setTimeout(function() {
            $('#image').hide();
                    }, 20);
    //    $('#image').hide();
    }
                     );
    $(document).ready(function(){
        $('#myprofile').change(function (e) {
            var fd = new FormData();
            var files = $('#myprofile')[0].files[0];
           console.log(files['size']);
            fd.append('file',files);
            $.ajax({
                url: 'upload.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        $dataurl = "<?php echo $home; ?>"+response;
                        if($('.templatesignature').hasClass('active')){
                            $(".templatesignature").find( "#profileimgtemplate" ).attr('src',$dataurl);
                        }
                    }
                    else{
                        alert('file not uploaded');
                    }
                }
                ,
            }
                  );
            }
                              );
        $('#mysignature').change(function (e) {
            var fd = new FormData();
            var files = $('#mysignature')[0].files[0];
            fd.append('file',files);
            console.log(files);
            $('#signerror').hide();
            $.ajax({
                url: 'upload.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        $dataurl = "<?php echo $home; ?>"+response;
                        if($('.templatesignature').hasClass('active')){
                            $(".templatesignature").find( "#logoimgtemplate" ).attr('src',$dataurl);
                        }
                    }
                    else{
                        alert('file not uploaded');
                    }
                }
                ,
            }
                  );
        
        }
                                );
        $('#mybannerlogo').change(function (e) {
            var fd = new FormData();
            var files = $('#mybannerlogo')[0].files[0];
            fd.append('file',files);
                $.ajax({
                url: 'upload.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        $dataurl = "<?php echo $home; ?>"+response;
                        if($('.templatesignature').hasClass('active')){
                            $(".templatesignature").find( "#bannerimgtemplate" ).attr('src',$dataurl);
                        }
                    }
                    else{
                        alert('file not uploaded');
                    }
                }
                ,
            }
                  );
        
        }
                                 );
        $(".colorchnage").on("input", function(){
            //alert($(this).val());
            $(this).siblings().val($(this).val());
        }
                            );
        $("#firstfont ,#firstfontinput").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#fontcolor" ).css('color',$(this).val());
            }
        }
                                           );
        $("#secondfont ,#secondfontinput").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( ".secondcolors" ).css('color',$(this).val());
            }
        }
                                             );
        $("#thirdfont ,#thirdfontinput").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( ".thirdcolors" ).css('color',$(this).val());
            }
        }
                                           );
        $("#firstname").on("input", function(){
            //alert($('.templatesignature').hasClass('active'));
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#firstnametemplate" ).text($(this).val());
            }
        }
                          );
        $("#lastname").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#lastnametemplate" ).text($(this).val());
            }
        }
                         );
        $("#jobtitle").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#jobtitletemplate" ).text($(this).val());
            }
        }
                         );
        $("#email").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#emailtemplate" ).text($(this).val());
            }
        }
                      );
        $("#mobile").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#mobiletemplate" ).text($(this).val());
            }
        }
                       );
        $("#phone").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#phonetemplate" ).text($(this).val());
            }
        }
                      );
        $("#company").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#companynametemplate" ).text($(this).val());
            }
        }
                        );
        $("#website").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#websitetemplate" ).text($(this).val());
            }
        }
                        );
        $("#address1").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#address1template" ).text($(this).val());
            }
        }
                         );
        $("#address2").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#address2template" ).text($(this).val());
            }
        }
                         );
        $("#linking").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#bannerlinking" ).attr('href',$(this).val());
            }
        }
                        );
        $("#twitredirect").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#twitterredirect" ).attr('href',$(this).val());
            }
        }
                             );
        $("#fbredirect").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#facebookredirect" ).attr('href',$(this).val());
            }
        }
                           );
        $("#linkredirect").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#linkdinredirect" ).attr('href',$(this).val());
            }
        }
                             );
        $("#youtredirect").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#youtuberedirect" ).attr('href',$(this).val());
            }
        }
                             );
        $("#instaredirect").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#instagramredirect" ).attr('href',$(this).val());
            }
        }
                              );
        $("#pintredirect").on("input", function(){
            if($('.templatesignature').hasClass('active')){
                $(".templatesignature").find( "#pinterstredirect" ).attr('href',$(this).val());
            }
        }
                             );
    }
                     );

</script>