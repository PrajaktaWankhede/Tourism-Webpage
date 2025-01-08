           
           <!doctype html>
           <html lang="en">
             <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
               
               <!-- Bootstrap -->
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
           
               <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
               <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
               <!--[if lt IE 9]>
                 <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
                 <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
               <![endif]-->
             </head>
             <body>
               <br>
               <h1 style="margin-left: 18px;"><b>Sun Temple</b></h1>
               <br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other">
                   <a class="fh5co-listing-item">
                       <center><img src="images/konark.png" alt="Other" class="img-responsive"></center>
                       <div class="fh5co-listing-copy">
                       </div>
                   </a>
               </div>
               <div>
           <p  style="text-align: justify;font-size:18px;padding:12px;">The Konark or Konarak Sun temple is dedicated to the Hindu sun god Surya, and, conceived as a giant stone chariot with 12 wheels, it is the most famous of the few sun temples built in India.</p>
           <p  style="text-align: justify;font-size:18px;padding:12px;"> 
             
• These forts•It was built c. 1250 CE by King Narasimhadeva I (r. 1238-1264 CE) of the Eastern Ganga dynasty (8th century CE - 15th century CE).
<br>
•Konarak stands as a classic example of Hindu temple architecture, complete with a colossal structure, sculptures and artwork on myriad themes.</p>
             
               <br>
               <audio src="audio/suntemple.mpeg" controls >
                <embed src="audio/suntemple.mpeg" type="audio" loop="false" autostart="false">
               </audio>
              
               </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
               <span style="font-size: 30px;margin-left: 10px;font-weight: 800px;">Maps: </span>
               <br><br><br>
               <div>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other" id="i1">
                 <a class="fh5co-listing-item">
                   <img src="images/hospital.jpeg" alt="Other" class="img-responsive" id="i1">
                   <div class="fh5co-listing-copy">
                     <h3>Hospital</h3>
                   </div>
                 </a>
               </div>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other"  id="i2">
                 <a class="fh5co-listing-item">
                   <img src="images/train.jpeg" alt="Other" class="img-responsive" id="i2">
                   <div class="fh5co-listing-copy">
                     <h3>Railway Station</h3>
                   </div>
                 </a>
               </div>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other" id="i3">
                 <a class="fh5co-listing-item">
                   <img src="images/bus.jpeg" alt="Other" class="img-responsive" id="i3">
                   <div class="fh5co-listing-copy">
                     <h3>Buss Stand</h3>
                   </div>
                 </a>
               </div><br><br><br><br><br><br><br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other" id="i4">
                 <a class="fh5co-listing-item">
                   <img src="images/hotel.jpeg" alt="Other" class="img-responsive" id="i4">
                   <div class="fh5co-listing-copy">
                     <h3>Hotel</h3>
                   </div>
                 </a>
               </div>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other" id="i5">
                 <a class="fh5co-listing-item">
                   <img src="images/parking.jpeg" alt="Other" class="img-responsive" id="i5">
                   <div class="fh5co-listing-copy">
                     <h3>Parking</h3>
                   </div>
                 </a>
               </div>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other"  id="i6">
                 <a class="fh5co-listing-item">
                   <img src="images/shop.jpeg" alt="Other" class="img-responsive" id="i6">
                   <div class="fh5co-listing-copy">
                     <a href=""><h3 >Shopping Mall</h3></a>
                   </div>
                 </a>
               </div><br><br><br><br><br><br><br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other" id="i7">
                 <a class="fh5co-listing-item">
                   <img src="images/atm.png" alt="Other" class="img-responsive" id="i7">
                   <div class="fh5co-listing-copy">
                     <h3>ATM</h3>
                   </div>
                 </a>
                             </div>
             </div><br><br><br>
             <div style="margin-top:50px;text-align:center;">
             <div>
               <p style="font-size: 50px;margin-top:50px;padding-top: 50px;margin-left: 100px;font-weight: 800px;">Geotagged  </p></div>
            
              <table border="1" width="100%" style="text-align: center;font-size: 20px;">
             
                <?php
                   include('a/config2.php');
                       
                   $result= mysqli_query($mysqli,"select * from heritage where id=9");
                    while($r=mysqli_fetch_array($result))
                    {
                     
                ?>
                  
                    <tr>
                    <th>Place Name</th><td><?php echo $r['placename']?></td>
                    </tr>
                    <tr>
                    <th>Location</th><td><?php echo $r['Location']?></td>
                    </tr><tr>
                    <th>Area</th><td><?php echo $r['area']?></td>
                    </tr><tr>
                    <th>Visitor</th> <td><?php echo $r['visitors']?></td>
                    </tr>
                    <tr>
                    <th>Official website</th>  <td><?php echo $r['official_website']?></td>
                    </tr>
                    <tr>
                    <th>Coordinates</th>  <td><?php echo $r['coordinates']?></td>
                    </tr>
                    <tr>
                    <th>Built</th>  <td><?php echo $r['built']?></td>
                    </tr>
                    <tr>
                    <th>Built For</th>  <td><?php echo $r['built_for']?></td>
                    </tr>
                    <tr>
                    <th>Height</th>  <td><?php echo $r['height']?></td>
                    </tr>
                    <tr>
                    <th>Architectural style</th>  <td><?php echo $r['architectural_style']?></td>
                    </tr>
                    <tr>
                    <th>Architect</th> <td><?php echo $r['architect']?></td>
                    </tr>
                    <tr>
                    <th>Governing Body</th>  <td><?php echo $r['governing_body']?></td>
                     </tr>
                    
                 
                
                <?php } ?>
               </tbody>

             </table>
             </div>
               <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
               <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
               <!-- Include all compiled plugins (below), or include individual files as needed -->
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

               <script type="text/javascript">
                document.getElementById("i1").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Konark+Sun+Temple,+Konark,+Odisha/V3RX%2B84F+%E0%AC%95%E0%AD%8B%E0%AC%A3%E0%AC%BE%E0%AC%B0%E0%AD%8D%E0%AC%95+%E0%AC%A1%E0%AC%BE%E0%AC%95%E0%AD%8D%E0%AC%A4%E0%AC%B0%E0%AC%96%E0%AC%BE%E0%AC%A8%E0%AC%BE+Konark+Hospital,+Konark+-+Kakatpur+Rd,+Konark,+Odisha+752111/@19.8892812,86.0951015,418m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x3a19f2a097819bbf:0xed9983ca391e3247!2m2!1d86.0945364!2d19.8875953!1m5!1m1!1s0x3a19f2a6eb40f599:0xe15304396f483008!2m2!1d86.0974845!2d19.8909672!3e0"};
                document.getElementById("i2").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Konark+Sun+Temple,+Konark,+Odisha/Puri,+Odisha+752002/@19.8476131,85.9037816,26787m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x3a19f2a097819bbf:0xed9983ca391e3247!2m2!1d86.0945364!2d19.8875953!1m5!1m1!1s0x3a19c6a7db9f1e89:0x59c1ead6920ab47f!2m2!1d85.8380287!2d19.8077433!3e0"};
                document.getElementById("i3").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Konark+Sun+Temple,+Konark,+Odisha/V4R2%2BHVH+Konark+Bus+Stand,+Konark+Local+Bus+Stand,+Konark,+Odisha+752111/@19.8900134,86.0964177,837m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x3a19f2a097819bbf:0xed9983ca391e3247!2m2!1d86.0945364!2d19.8875953!1m5!1m1!1s0x3a19f30646c07a75:0x15ed7c36de878842!2m2!1d86.1022192!2d19.891428!3e0";
                };          
                document.getElementById("i4").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Konark+Sun+Temple,+Konark,+Odisha/Labanya+Lodge,+Konark+Rd,+Konark,+Odisha+752111/@19.8860191,86.0953706,418m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x3a19f2a097819bbf:0xed9983ca391e3247!2m2!1d86.0945364!2d19.8875953!1m5!1m1!1s0x3a19f2a1f18a56bd:0x1979c39130ed57db!2m2!1d86.0982709!2d19.8844247!3e0";
                };
                document.getElementById("i5").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i6").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Konark+Sun+Temple,+Konark,+Odisha/V3PX%2BFHX+Konark+Urban+Market+Place,+Konark,+Odisha+752111/@19.8859134,86.0959091,418m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x3a19f2a097819bbf:0xed9983ca391e3247!2m2!1d86.0945364!2d19.8875953!1m5!1m1!1s0x3a19f2a17ff84961:0x45de30aee0a6a1e7!2m2!1d86.0989495!2d19.8861881!3e0";
                };
                document.getElementById("i7").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Konark+Sun+Temple,+Konark,+Odisha/V3QX%2B86J+State+Bank+ATM,+Path+from+Bus+Stop+%26+Parking+Lot+to+Sun+Temple,+Konark,+Odisha+752111/@19.8880461,86.0951923,418m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x3a19f2a097819bbf:0xed9983ca391e3247!2m2!1d86.0945364!2d19.8875953!1m5!1m1!1s0x3a19f2a145ac204f:0x7932eef8262d938b!2m2!1d86.0980029!2d19.8883285!3e0";
                };
              </script>

             </body>
           </html>