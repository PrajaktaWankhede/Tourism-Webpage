           
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
               <h1 style="margin-left: 18px;"><b>Ellora Caves</b></h1>
               <br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other">
                   <a class="fh5co-listing-item">
                       <center><img src="images/ELLORA CAVES.jpg" alt="Other" class="img-responsive"></center>
                       <div class="fh5co-listing-copy">
                       </div>
                   </a>
               </div>
               <div>
           <p  style="text-align: justify;font-size:18px;padding:12px;"> These 34 monasteries and temples, extending over more than 2 km, were dug side by side in the wall of a high basalt cliff, not far from Aurangabad, in Maharashtra. Ellora, with its uninterrupted sequence of monuments dating from A.D. 600 to 1000, brings the civilization of ancient India to life.
          </p>
             <p  style="text-align: justify;font-size:18px;padding:12px;"> 
             • It's sanctuaries are devoted to Buddhism, Hinduism and Jainism, it illustrates the spirit of tolerance that was characteristic of ancient India.
             </p>
             
               <br><br><br><br><br><br><br><br><br><br>
               </div>
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
                       
                   $result= mysqli_query($mysqli,"select * from heritage where id=5");
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
                  location.href = "https://www.google.com/maps/dir/Ellora+Caves,+Ellora+Cave+Road,+Ellora,+Maharashtra/Kamalnayan+Bajaj+Hospital,+Beed+Bypass+Road,+Satara+Deolai+Parisar,+Aurangabad,+Maharashtra/@19.9306108,75.1482195,12z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x3bdb93bd138ae4bd:0x574c6482cf0b89cf!2m2!1d75.1779975!2d20.025817!1m5!1m1!1s0x3bdb98f39ca15447:0x96c2632e2aaa42c!2m2!1d75.3150156!2d19.8521702!3e0";
                };
                document.getElementById("i2").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Ellora+Caves,+Ellora+Cave+Road,+Ellora,+Maharashtra/Aurangabad+Railway+station,+Railway+Station+Road,+Pannalal+Nagar,+New+Usmanpura,+Aurangabad,+Maharashtra/@19.9412473,75.1516318,12.24z/data=!4m14!4m13!1m5!1m1!1s0x3bdb93bd138ae4bd:0x574c6482cf0b89cf!2m2!1d75.1779975!2d20.025817!1m5!1m1!1s0x3bdb99b0f3cef4a3:0x7a560b79cfd7746d!2m2!1d75.3108426!2d19.8598802!3e0";
                };
                document.getElementById("i3").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Ellora+Caves,+Ellora+Cave+Road,+Ellora,+Maharashtra/Aurangabad+Central+Bus+Station,+City+Bus+Station+Road,+Mhada,+Aurangabad,+Maharashtra/@19.9364925,75.1486722,12z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x3bdb93bd138ae4bd:0x574c6482cf0b89cf!2m2!1d75.1779975!2d20.025817!1m5!1m1!1s0x3bdb984070d6c223:0x894c399632942754!2m2!1d75.3158908!2d19.8812703!3e0";
                };
                document.getElementById("i4").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Elephanta+Caves,+Gharapuri,+Maharashtra/Hotel+bluebell,+Colaba+Causeway,+opposite+bank+of+Baroda,+Apollo+Bandar,+Colaba,+Mumbai,+Maharashtra/@18.9421878,72.8462901,13468m/data=!3m3!1e3!4b1!5s0x3be7ce8c65717e7b:0x3fd1380729db5c2c!4m14!4m13!1m5!1m1!1s0x3be7c5307da3602f:0xf4ab181b1aaef53f!2m2!1d72.9314864!2d18.9633474!1m5!1m1!1s0x3be7d1785f885d89:0x9ca59433c749fea4!2m2!1d72.8318709!2d18.9233222!3e0";
                };
                document.getElementById("i5").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i6").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Elephanta+Caves,+Gharapuri,+Maharashtra/Phoenix+Palladium,+Senapati+Bapat+Marg,+Lower+Parel,+Mumbai,+Maharashtra/@18.9579404,72.8344093,13467m/data=!3m3!1e3!4b1!5s0x3be7ce8c65717e7b:0x3fd1380729db5c2c!4m14!4m13!1m5!1m1!1s0x3be7c5307da3602f:0xf4ab181b1aaef53f!2m2!1d72.9314864!2d18.9633474!1m5!1m1!1s0x3be7ce8c6043c51b:0x469288721a1d52aa!2m2!1d72.8245993!2d18.994744!3e0";
                };
                document.getElementById("i7").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Elephanta+Caves,+Gharapuri,+Maharashtra/Phoenix+Palladium,+Senapati+Bapat+Marg,+Lower+Parel,+Mumbai,+Maharashtra/@18.9579404,72.8344093,13467m/data=!3m3!1e3!4b1!5s0x3be7ce8c65717e7b:0x3fd1380729db5c2c!4m14!4m13!1m5!1m1!1s0x3be7c5307da3602f:0xf4ab181b1aaef53f!2m2!1d72.9314864!2d18.9633474!1m5!1m1!1s0x3be7ce8c6043c51b:0x469288721a1d52aa!2m2!1d72.8245993!2d18.994744!3e0";
                };
              </script>

             </body>
           </html>