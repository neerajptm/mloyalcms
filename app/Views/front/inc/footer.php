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

        <!-- JavaScript Libraries -->
        <script src="<?php echo base_url() ?>/public/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url() ?>/public/assets/js/bootstrap.bundle.min.js"></script>
      
        <!-- Template Javascript -->
        <script src="<?php echo base_url() ?>/public/assets/js/main.js"></script>
		
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