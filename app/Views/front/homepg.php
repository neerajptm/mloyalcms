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
                <form id="frmsuggest" name="frmsuggest" method="post" action="default.asp?submit=1">
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
                  fbq('track', 'PageView');			  
				</script>				
                <p class="ent">REGISTER HERE & GET EXTRA RS.2000 OFF DISCOUNT CODE + FREE GIFT ON ALL PURCHASES.</p>
                <p>(Valid only at Ballari Store)</p>
               <!-- <div class="form-group "  style="margin: 24px 0px;">
                  <!--<input type="text" class="  for" placeholder="Name" name="Name">--
				  <input type="text" id="txtname" name="txtname" value="" placeholder="Name" class="for">
                </div>-->
                <div class="form-group">
                  <!--<input type="text" class="for" placeholder="Phone Number" name="Email">-->
				  <input type="tel" name="txtmobile" maxlength="10" onkeypress="return isNumber(event)" data-role="none" class="for" placeholder="Mobile number">
                </div>
              <!--  <div class="form-group">
                  <!--<input type="text" class="for" placeholder="Email ID" name="Email">--
				  <input type="email"  id="txtemail" name="txtemail" class="for" placeholder="Email ID">
                </div>
                 <div class="form-group">
                  <!--<input type="text" class="for" placeholder="City" name="City">--
				  
                    <select name="selCity" class="for" data-role="none">
						    <option value="">-- City Name --</option>
							<%	Dim cityRS,citySQL
								Set cityRS = Server.CreateObject("ADODB.Recordset")
								citySQL = "select city_id,city_name  from tbl_city where status_flag=1"
								cityRS.open citySQL,strcon,3,3
								If Not cityRS.EOF then
									while Not cityRS.EOF
							%>
						    <option value="<%=cityRS("city_id")%>" <% if trim(city_id) = trim(cityRS("city_id")) then %> selected="selected" <% end if %>><%=cityRS("city_Name")%></option>
							<%	    cityRS.movenext
									Wend
								End If
							%>
							</select>				  
				  
				  
                </div>-->
                 
                 <!--<button type="button" class="butt" data-toggle="modal" data-target=".bs-example-modal-new">Submit</button>-->
				 <!--<button name="Submit" class="butt" type="submit" id="frmsuggest-submit" onclick="return Validate()" data-toggle="modal" data-target=".bs-example-modal-new">Submit</button>-->
				 <button name="Submit" class="butt" type="submit" id="frmsuggest-submit" onclick="return Validate()" >Submit</button>
                
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
                  fbq('track', 'PageView');	//enabled on 7june  as part of tkt 42311		  
				  //fbq('track', 'Success'); //commented as part of tkt42311
				</script>
				<noscript>
				  <img height="1" width="1" style="display:none" 
					   src="https://www.facebook.com/tr?id=213739212759478&ev=PageView&noscript=1"/>
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
                      
                            <h2> How to get the discount coupon of Extra Rs.2000 OFF + Free Gift is as below</h2>
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
        
        
        
      
