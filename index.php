<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial -sacle=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="cglobe.css">
    <title> Cglobe</title>
</head>
<body>

    <div class="header">
        <div class="navbar">
            <img src="cglobe-logo (7).png">
            <div class="country_select" id="country">
                <div class="select">
                    <p id="text"> Select your Country </p>
                    <i class="fa-solid fa-chevron-down" id="moving"></i>
                </div>

                <ul class="option_box" id="list">
                    <li class="option" onclick="myfunction('USA')">
                       <i class="fa-solid fa-location-dot"></i>
                       <p>USA</p>
                    </li>
                    <li class="option" onclick="myfunction('Canada')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Canada</p>
                     </li>
                     <li class="option" onclick="myfunction('India')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>India</p>
                     </li>
                     <li class="option" onclick="myfunction('New York')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>New York</p>
                     </li>
                     <li class="option" onclick="myfunction('Australia')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Australia</p>
                     </li>
                </ul>
            </div>




            <div class="search_box">
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
              <input type="text" class="searchclass" id="searchid" placeholder="Find coupons,giftcards and more...">
               <p><i class="fa-solid fa-magnifying-glass"></i> </p>
            </div>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
            <div class="language">
              
                <p id="eng_tag"> English </p>
                 
                <ul class="hin_eng">
                   <li onclick="languagecglobe('English')">English</li>
                   <li onclick="languagecglobe('हिंदी')">हिंदी</li>
               </ul>
            </div>



            



            <div class="your_logo">
                <div class="girl_img" id="girl_img_id">
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                </div>
            
            
                <div class="dropdown" id="dropdownid">
                    <div class="nameandimg">
                        <img src="D:\WEBAPPLICATION\your profile.png">
                        <p>Pragna</p>
                    </div>

                    <ul>
                        <li>
                            <i class="fa-regular fa-user"></i>
                            <p>My Account</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-box"></i>
                             <p>My Orders</p>
                        </li>
                        <hr>
                        <li>
                            <i class="fa-sharp fa-regular fa-circle-question"></i> 
                             <p>Help</p>
                        </li>
                
                        <li>
                            <i class="fa-solid fa-gear"></i>
                            <p>Setting</p>
                        </li>
                        <hr>
                        
                        <li>
                             <i class="fa-solid fa-arrow-right-to-bracket"></i>
                             <p>Log Out</p>
                        </li> 
                        
                
                    </ul>
                </div>
            </div>

            



<div class="selling_page">
    <a href="login.php">
    <button> </i>
        <p>Logout</p>
    </button>
    </a>
    
</div>













        </div>
    </div>


    <div class="ad_img">
        <img src="Slider_R_DigitalCoupons-1-scaled.jpg">
        
    </div>






    

    <div class = "coupons">
        <div class=" First_row">
            <div class="box">
                <a href = "D:\WEBAPPLICATION\c1.html" target="_blank">
                <img src="coupon1.png"></a>
                <h2>₹10</h2>
                <p>Lipstick Kit--ID:01</p>
                <div class="address_data">
                    <P>Expiry:Aug 31,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                    
                </div>
            </div>
            <div class="box">
                 <a href = "D:\WEBAPPLICATION\c1.html" target="_blank">
                 <img src="IMG_20230801_115723.jpg"></a>
                 <h2> ₹5</h2>
                 <p>Audible--ID:02</p>
                 <div class="address_data">
                     <p>Expiry:Sep 1,2023&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
               
                 </div>
            </div>
            <div class="box">
                    <a href = "#"></a>
                    <img src="IMG_20230801_115626.jpg">
                    <h2> ₹10</h2>
                    <p>SUGAR POP--ID:03</p>
                    <div class="address_data">
                         <P>Expiry:Aug 31,2023&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                         
                    </div>
            </div>
            <div class="box">
                <a href = "#"></a>
                <img src="IMG_20230801_115657.jpg">
                <h2> ₹5</h2>
                <p>Zepto--ID:04</p>
                <div class="address_data">
                    <P>Expiry:Aug 10,2023&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                </div>
            </div>
        </div>
        <div class=" First_row">
            <div class="box">
                <a href = "#"></a>
                <img src="IMG_20230801_115645.jpg">
                <h2> ₹20</h2>
                <p>Aqualogica--ID:05</p>
                <div class="address_data">
                    <P>Expiry:Aug 31,2023&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                    
                </div>
            </div>
            <div class="box">
                 <a href = "#"></a>
                 <img src="IMG_20230801_115555.jpg">
                 <h2> ₹15</h2>
                 <p>Mamaearth--ID:06</p>
                 <div class="address_data">
                     <P>Expiry:Aug 6,2023&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                     
                 </div>
            </div>
            <div class="box">
                    <a href = "#"></a>
                    <img src="IMG_20230801_115752.jpg">
                    <h2> ₹30</h2>
                    <p>Skullcandy India--ID:07</p>
                    <div class="address_data">
                         <P>Expiry:Aug 20,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                         
                    </div>
            </div>
            <div class="box">
                <a href = "#"></a>
                <img src="IMG_20230801_115832.jpg">
                <h2> ₹10</h2>
                <p>The Moms Co.--ID:08</p>
                <div class="address_data">
                    <P>Expiry:Aug 12,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                    
                </div>
            </div>
        </div>





    </div>   




    
    <div class="Lode_more">
        <button id="Lode_more_id">Lode More</button>
         <div class="lode_More_coupons" id="lode_more_coupons_id">
            <div class=" First_row">
                <div class="box">
                    <a href = "#"></a>
                    <img src="IMG_20230801_115555.jpg">
                    <h2> ₹15</h2>
                    <p>Mamaearth--ID:09</p>
                    <div class="address_data">
                        <P>Expiry:Aug 6,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                      
                    </div>
                </div>
                <div class="box">
                     <a href = "#"></a>
                     <img src="IMG_20230801_115626.jpg">
                     <h2> ₹10</h2>
                     <p>SUGAR POP--ID:10</p>
                     <div class="address_data">
                         <P>Expiry:Aug 31,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                        
                     </div>
                </div>
                <div class="box">
                        <a href = "#"></a>
                        <img src="IMG_20230801_115645.jpg">
                        <h2> ₹20</h2>
                        <p>Aqualogica--ID:11</p>
                        <div class="address_data">
                             <P>Expiry:Aug 31,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                             
                        </div>
                </div>
                <div class="box">
                    <a href = "#"></a>
                    <img src="IMG_20230801_115657.jpg">
                    <h2> ₹5</h2>
                    <p>Zepto--ID:12</p>
                    <div class="address_data">
                        <P>Expiry:Aug 10,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                        
                    </div>
                </div>
            </div>
            <div class=" First_row">
                <div class="box">
                    <a href = "#"></a>
                    <img src="IMG_20230801_115723.jpg">
                    <h2> ₹5</h2>
                    <p>Audible--ID:13</p>
                    <div class="address_data">
                        <P>Expiry:Sep 1,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                       
                    </div>
                </div>
                <div class="box">
                     <a href = "#"></a>
                     <img src="IMG_20230801_115752.jpg">
                     <h2> ₹30</h2>
                     <p>Skullcandy India--ID:14</p>
                     <div class="address_data">
                         <P>Expiry:Aug 20,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                         
                     </div>
                </div>
                <div class="box">
                        <a href = "#"></a>
                        <img src="IMG_20230801_115832.jpg">
                        <h2> ₹10</h2>
                        <p>The Moms Co.--ID:15</p>
                        <div class="address_data">
                             <P>Expiry:Aug 12,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                             
                        </div>
                </div>
                <div class="box">
                    <a href = "#"></a>
                    <img src="coupon1.png">
                    <h2> ₹10</h2>
                    <p>Lipstick Kit--ID:16</p>
                    <div class="address_data">
                        <P>Expiry:Aug 31,2023 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://forms.gle/fhnFg8yXekNrVo6BA">Chat</a></P>
                        
                    </div>
                </div>
            </div>
    
    
    
                 


         </div>
    </div>
    <div class="Main_footer">
        <div class="footer">
            <div class="footer_box">
                <h2> POPULAR LOCATIONS</h2>
                <P> Mumbai</P>
                <P>Kolkata</P>
                <P> Chennai</P>
                <P> Pune</P>
                
            </div>
            <div class="footer_box">
                <h2>TRENDING LOCATIONS</h2>
                <P> Bhubaneshwar</P>
                <P>Hyderabad</P>
                <P> Chandigarh</P>
                <P> Nashik</P>
                
            </div>
            <div class="footer_box">
                <h2>ABOUT US</h2>
                <P> About Cglobe Group </P>
                <P>Careers</P>
                <P> Contact Us</P>
                <P> Cglobe people</P>
                
            </div>
            <div class="footer_box">
                <h2>Cglobe</h2>
                <P> Help</P>
                <P>Sitemap</P>
                <P>Legal & Privacy information</P>
                <P> Blog</P>
                
            </div>
        </div>
    </div>

    </div>

    <script>
    
        let country = document.getElementById('country');
        let moving = document.getElementById('moving');
        let text = document.getElementById('text');
        let list = document.getElementById('list');

        country.addEventListener('click', () =>{
               list.classList.toggle('hidden')
               moving.classList.toggle('rotated')
        }); 
        function myfunction(anyone){
                text.innerHTML =  anyone;
        } 


        let eng_tag = document.getElementById('end_tag');
        let hin_eng = document.querySelector('.hin_eng');
        let language = document.querySelector('.language');

        language.addEventListener('click', () =>{
            hin_eng.classList.toggle('display_div')
        });
         function languagecglobe(anything){
            eng_tag.innerHTML = anything;
            
        }

        



        
        
        
        let Lode_more_id = document.getElementById('Lode_more_id');
        let lode_more_coupons_id = document.getElementById('lode_more_coupons_id');

        Lode_more_id.addEventListener('click', () => {
              lode_more_coupons_id.style = 'display:block';
              Lode_more_id.style = 'display: none';
        });







    </script>
</body>
</html>

