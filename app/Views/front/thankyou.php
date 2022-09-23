 <!--#include file="../includes/connection.asp"-->
<!--#include file="../includes/globalfunctions.asp"-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Specsmakers </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		
    <!--Tkt42311 Start-->
        <!-- Global site tag (gtag.js) - Google Ads: 1018793024 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1018793024"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'AW-1018793024');
    
  gtag('event', 'conversion', {'send_to': 'AW-1018793024/qXhbCIOi3JUDEMCY5uUD'});

</script>
<!--Tkt42311 End-->

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-126009399-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->		
		
<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<script type="text/javascript">
function Checkbrand(val){
 var element=document.getElementById('brand');
 if(val=='pick a color'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<script type="text/javascript">
function Checkbrand(val){
 var element=document.getElementById('brand');
 if(val=='pick a color'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<SCRIPT language="JavaScript">
// ------------Email Validation
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function echeck(str) 
{
	var at="@"
    var dot="."
    var lat=str.indexOf(at)
    var lstr=str.length
    var ldot=str.indexOf(dot)
    if (str.indexOf(at)==-1)
	{
	    alert("Invalid E-mail ID")
    	return false
	}
 
	if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		alert("Invalid E-mail ID")
		return false
	}
	 
	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		alert("Invalid E-mail ID")
		return false
	}
	 
	if (str.indexOf(at,(lat+1))!=-1){
		alert("Invalid E-mail ID")
		return false
	}
	 
	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		alert("Invalid E-mail ID")
		return false
	}
	 
	if (str.indexOf(dot,(lat+2))==-1){
		alert("Invalid E-mail ID")
		return false
	}
							
	if (str.indexOf(" ")!=-1){
		alert("Invalid E-mail ID")
		return false
	}
	
	return true
}


</SCRIPT>
<script type="text/JavaScript">

function Validate()
{		

			if(document.frmsuggest.txtemail.value != "")
			{
				if(echeck(document.frmsuggest.txtemail.value) == false)
				{
					document.frmsuggest.txtemail.focus();
					return(false);
				}
			}
			
			if(document.frmsuggest.txtmobile.value != "")
			{
				y = document.frmsuggest.txtmobile.value;
				if((y.charAt(0)!="9") && (y.charAt(0)!="8") && (y.charAt(0)!="7") && (y.charAt(0)!="6"))
				{
					alert("Mobile Number should start with 6, 7, 8, 9");
					document.frmsuggest.txtmobile.focus();
					return false
				}
				else if (y.length<10)
				{
					alert("Invalid Mobile Number");
					document.frmsuggest.txtmobile.focus();
					return false;
				}	
			}			
       
            if (document.frmsuggest.txtname.value == "") {
                alert("Please Enter Name");
                return (false);
            }            
            else if (document.frmsuggest.txtmobile.value == "") {
                alert("Please Enter Mobile No.");
                return (false);
            }
            else if (document.frmsuggest.txtemail.value == "") {
                alert("Please Enter Email");
                return (false);
            }
            else if (document.frmsuggest.selCity.value == "") {
                alert("Please Select City");
                return (false);
            }			

}
</script> 
    </head>
    <body>
	

	
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><img src="img/logo.png"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="https://www.specsmakers.in/collections/eyeglasses-gender" class="nav-item nav-link">Eyeglasses</a>
                        <a href="https://www.specsmakers.in/collections/computer-glasses-shop-by-collection-bluezero" class="nav-item nav-link">Computer Glasses</a>
                        <a href="https://www.specsmakers.in/collections/sunglasses" class="nav-item nav-link">Sunglasses</a>
                        <a href="https://www.specsmakers.in/collections/contact-lenses" class="nav-item nav-link">Contact Lenses</a>
                        <a href="https://www.specsmakers.in/collections/accessories" class="nav-item nav-link">Accessories</a>
                        <a href="https://www.specsmakers.in/products/hometryon?variant=39345770135633" class="nav-item nav-link">Home Try-On</a>
                        <a href="https://www.specsmakers.in/pages/store-locator" class="nav-item nav-link">Store Locator</a>
                        <a href="https://www.specsmakers.in/pages/2-specsmakers-franchisee" class="nav-item nav-link">Franchise</a>
                        <a href="https://www.specsmakers.in/products/lensmakers?variant=39339857707089" class="nav-item nav-link">Lensmakers</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    
                    <div class="col-sm-12 col-md-7  d-md-block">
                        <div class="hero-image">
                            <img src="img/banner.jpg" alt="Hero Image">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="input_main">
              <div class="container">
                <form id="frmsuggest" name="frmsuggest" >
				<script>
				  !function(f,b,e,v,n,t,s)
				  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
				  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				  n.queue=[];t=b.createElement(e);t.async=!0;
				  t.src=v;s=b.getElementsByTagName(e)[0];
				  s.parentNode.insertBefore(t,s)}(window, document,'script',
				  'https://connect.facebook.net/en_US/fbevents.js');
				  fbq('set', 'autoConfig', false, '213739212759478');   
				  fbq('init', '213739212759478');
                  fbq('track', 'Lead');			  
				</script>				
                 
                
                 
                 <!--start--->

                    <div class="body-message">
                    <h2>Thank You!</h2>
                    <p>You will shortly get your coupon code via sms</p>
                    <a href="https://www.specsmakers.in/pages/store-locator" target="_blank"> <button name="Locateus " class="butt" type="button" id="frmsuggest-submit">Locate Stores </button></a>
                    </div>
                 <!--end-->

              
                 			 <!--button name="Submit" class="butt" type="submit" id="frmsuggest-submit" onclick="return Validate()" >Submit</button-->
                
                  </form>
				  
 

				<!-- Facebook Pixel Code -->
				<script>
				  !function(f,b,e,v,n,t,s)
				  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
				  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				  n.queue=[];t=b.createElement(e);t.async=!0;
				  t.src=v;s=b.getElementsByTagName(e)[0];
				  s.parentNode.insertBefore(t,s)}(window, document,'script',
				  'https://connect.facebook.net/en_US/fbevents.js');
				  fbq('set', 'autoConfig', false, '213739212759478');   
				  fbq('init', '213739212759478');
                  //fbq('track', 'PageView');			  
				  fbq('track', 'Lead');
				</script>
				<noscript>
				  <img height="1" width="1" style="display:none" 
					   src="https://www.facebook.com/tr?id=213739212759478&ev=Lead&noscript=1"/>
				</noscript>
				<!-- End Facebook Pixel Code -->

 		  
				  
<div class="modal fade" tabindex="-1" id="bs-example-modal-new" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    
    <!-- Modal Content: begins -->
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         
      </div>
    
      <!-- Modal Body -->  
      <div class="modal-body">
        <div class="body-message">
          <h2>Thank You!</h2>
          <p>You will shortly get your coupon code via sms</p>
         <a href="https://www.specsmakers.in/pages/store-locator" target="_blank"> <button name="Locateus " class="butt" type="submit" id="frmsuggest-submit">Locate Stores </button></a>
        </div>
      </div>
    
      
    
    </div>
    <!-- Modal Content: ends -->
    
  </div>
  
</div>
                  
                  
                  </div> 
                  </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-9 col-md-9">
                        <div class="section-header text-left">
                      
                            <h2>How to get the discount coupon of Extra Rs.2000 OFF + Free Gift is as below </h2>
                        </div>
                        <div class="about-text" style="color: #000;">
                            <p>
                                &#8226;  Register here </p>
                                <p>
                                    &#8226;  Get your coupon code for an extra Rs.2000 OFF + Free Gift on your registered mobile number </p>
                                    <p>
                                        &#8226;   The coupon of Extra Rs.2000 is applicable on a minimum order value of Rs.3500 </p>
                                        <p>
                                            &#8226;  Redeem the coupon only in Thoppumpady Ernakulam Store on the opening date. </p>
                                            <p>
                                                &#8226;  Offer is valid from 19th – 21st August 2022</p>
                                                <p>
                                                    &#8226;  T&Cs Apply</p>
                           
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

 
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                            <img src="img/blog-1.jpg" class="img-fluid">
                               
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                   <h2 class="hed">  PROGRESSIVES</h2>
                                    <p style="    padding: 8px 22px;">
                                      
Don't struggle with a single vision or Bi-Focals. Switch to superior Specsmakers Progressives today.<br><br>
<strong>Starting from <span style="color: #00458c;">Rs3000</span></strong>

                                    </p>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action"><br><br>
                                    <a class="btn" href="https://www.specsmakers.in" target="_blank">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <img src="img/blog-2.jpg" class="img-fluid">
                            </div> <div class="price-body">
                              <div class="price-description">
                                   <h2 class="hed">  FLEX</h2>
                                    <p style="    padding: 8px 22px;">
                                      
Try our Flex frames made from TR or Toughened Resin. These frames are so light and comfortable, you wouldn't even feel them on your nose.<br><br>
<strong>Starting from <span style="color: #00458c;">Rs2000</span></strong>

                                    </p>
                                </div>
                                </div>
                                
                            
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="https://www.specsmakers.in/collections/light-weight" target="_blank">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <img src="img/blog-3.jpg" class="img-fluid">
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <h2   class="hed">  PEEPSTAR</h2>
                                    <p style="    padding: 8px 22px;">
                                      
Our Peepstar collection are specially made for kids of all ages. Vibrant and Colourful there is a peepstar for the star in your home.<br><br>
										<strong>Starting form <span style="color: #00458c;">Rs1000</span></strong>


                                    </p>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="https://www.specsmakers.in/collections/peepstar" target="_blank">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <img src="img/blog-4.jpg" class="img-fluid">
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                  <h2  class="hed">  
BLUE ZERO
</h2>
                                    <p style="    padding: 8px 22px;">
                                      
kids studying from home?
Get your child a Blue Zero eyewear.
Protect their eyes from 
harmful blue light coming from their laptops and mobile devices <br><br>
									<strong>	Starting form <span style="color: #00458c;">Rs2000</span></strong>
                                    </p>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href=" https://www.specsmakers.in/collections/computer-glasses-shop-by-collection-bluezero" target="_blank">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        
   <!-- Price Start -->
        <div class="class">
            <div class="container" style="    border: 5px solid #feecd4; padding: 20px 0px; margin-bottom: 35px;">
                
                <div class="row">
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.0s" style="text-align: center;">
                        <div class="price-item">
                            <div class="price-header">
                            <img src="img/1.jpg" class="img-fluid">
                               
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                              <strong>     14 DAYS</strong><br>
RETURN

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s" style="text-align: center;">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <img src="img/2.jpg" class="img-fluid">
                            </div>
                             <div class="price-body">
                                <div class="price-description">
                              <strong>     ONE YEAR </strong><br>
UNCONDITIONAL
WARRANTY*


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">
                        <div class="price-item">
                            <div class="price-header">
                                <img src="img/3.jpg" class="img-fluid">
                            </div>
                              <div class="price-body">
                                <div class="price-description">
                              <strong>   AFFORDABLE  </strong><br>
PRICES


                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s" style="text-align: center;">
                        <div class="price-item">
                            <div class="price-header">
                                <img src="img/4.jpg" class="img-fluid">
                            </div>
                             <div class="price-body">
                                <div class="price-description">
                              <strong>   CASH   </strong><br>
DELIVERY


                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        
        <!-- Footer Start -->
        <div class="class">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.0s" style="text-align: center;">
                        <div class="price-item">
                            <div class="price-header">
                            <img src="img/logo.png" class="img-fluid">
                               
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s" style="text-align: center;">
                        <div class="price-item featured-item">
                            
                             <div class="price-body">
                                <div class="price-description">
                               <div class="footer-social" style="font-size: 25px;
    color: #b1b1b1;
    letter-spacing: 20px;
    text-align: right; margin-top: 21px;"> 
                           <a href="https://www.facebook.com/Specsmakersopticiansindia/"><i class="fab fa-facebook-f" style=" color: #b1b1b1;"></i></a>
                            <a href="https://twitter.com/specsmakersopt?lang=en"><i class="fab fa-twitter" style=" color: #b1b1b1;"></i></a>
                            <a href="https://www.instagram.com/specsmakersofficial/?hl=en"><i class="fab fa-instagram" style=" color: #b1b1b1;"></i></a>
                            <a href="https://www.linkedin.com/company/specsmakers/"><i class="fab fa-linkedin" style=" color: #b1b1b1;"></i></a>
                           
                             
                        </div>
 <p style="font-size: 14px;
    color: #b1b1b1;
     
    text-align: right; margin-top: 21px;">20, Kannadasan Rd, Parthasarathi Puram, <br>T. Nagar, Chennai, Tamil Nadu 
info@specsmakers.in || 97915 97915<br>
copyright 2021. Specsmakers Opticians Pvt. Ltd </p>

                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
        <!-- Footer End -->
     <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
		
		<script>
			console.log(window.location.search);
			//window.location.
			
			var msg  = window.location.search
			var find_key = msg.split("=");
			console.log(find_key[1]);
			if(find_key[1]=="success"){				
				$("#bs-example-modal-new").modal("show");
			}
			
		</script>
		
    </body>
</html>
