           
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
               <h1 style="margin-left: 18px;"><b>Hill Forts of Rajasthan.</b></h1>
               <br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other">
                   <a class="fh5co-listing-item">
                       <center><img src="images/HILL FORT RAJASTHAN.png" alt="Other" class="img-responsive"></center>
                       <div class="fh5co-listing-copy">
                       </div>
                   </a>
               </div>
               <div>
           <p  style="text-align: justify;font-size:18px;padding:12px;">The hill forts of Rajasthan is a serial site, comprises six majestic forts of Chittorgarh, Kumbhalgarh, Sawai Madhopur, Jhalawar, Jaipur and Jaisalmer. </p>
             <p  style="text-align: justify;font-size:18px;padding:12px;"> 
             
• These forts are boasting the legacy of Rajputana Empire of 8th to 18th centuries.
• These forts used the natural defenses provided by the landscape: deserts, rivers, hills, and dense forests.
• These forts have big water harvesting structures which are still in use.</p>
             
               <br>
               <audio src="audio/hill.mpeg" controls >
                <embed src="audio/hill.mpeg" type="audio" loop="false" autostart="false">
               </audio>
               </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
                       
                   $result= mysqli_query($mysqli,"select * from heritage where id=4");
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
                  location.href = "";
                };
                document.getElementById("i2").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i3").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i4").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i5").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i6").onclick = function () {
                  location.href = "";
                };
                document.getElementById("i7").onclick = function () {
                  location.href = "";
                };
              </script>

             </body>
           </html>