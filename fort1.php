           
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
               <h1 style="margin-left: 18px;"><b>Red Fort</b></h1>
               <br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other">
                   <a class="fh5co-listing-item">
                       <center><img src="images/img-1.jpg" alt="Other" class="img-responsive"></center>
                       <div class="fh5co-listing-copy">
                       </div>
                   </a>
               </div>
               <div>
           <p  style="text-align: justify;font-size:18px;padding:12px;"> Red Fort
             The Red Fort Complex was built as the palace fort of Shahjahanabad – the new capital of the fifth Mughal Emperor of India, Shah Jahan. Named for its massive enclosing walls of red sandstone, it is adjacent to an older fort, the Salimgarh, built by Islam Shah Suri in 1546, with which it forms the Red Fort Complex.</p>
             <p  style="text-align: justify;font-size:18px;padding:12px;"> 
             • Nahr-i-Behisht (Stream of Paradise) :                      The private apartments consist of a row of pavilions connected by a continuous water channel.
             • The Red Fort is considered to represent the zenith of Mughal creativity which, under the Shah Jahan, was brought to a new level of refinement.
             • Planning of the palace is based on Islamic prototypes, but it also includes architectural elements of Persian, Timurid and Hindu traditions.
             • Red forts architecture includes : garden design, strongly influenced later buildings and gardens in Rajasthan, Delhi, Agra and further afield.
             </p>
             
               <br><br>
               <audio src="audio/red fort.mp3" controls >
                <embed src="audio/red fort.mp3" type="audio" loop="false" autostart="false">
               </audio>
               </div>
               <br><br><br><br><br><br><br><br><br><br>
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
               </div>
               <br><br><br><br><br><br><br><br>
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
               </div>
               <br><br><br><br><br><br><br><br><br>
               <div class="col-md-4 col-sm-4 fh5co-item-wrap" id="other" id="i7>
                 <a class="fh5co-listing-item">
                   <img src="images/atm.png" alt="Other" class="img-responsive" id="i7">
                   <div class="fh5co-listing-copy">
                     <h3">ATM</h3>
                   </div>
                 </a>
                             </div>
             </div><br><br><br>
             <div style="margin-top:50px;text-align:center;">
             <div>
               <p style="font-size: 50px;margin-top:50px;padding-top: 10px;margin-left: 100px;font-weight: 800px;">Geotagged  </p></div>
            
              <table border="1" width="100%" style="text-align: center;font-size: 20px;">
             
                <?php
                   include('a/config2.php');
                       
                   $result= mysqli_query($mysqli,"select * from heritage where id=3");
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
                  location.href = "https://www.google.com/maps/dir/Red+Fort,+Netaji+Subhash+Marg,+Chandni+Chowk,+New+Delhi,+Delhi/J6XQ%2BH5G+Kasturba+Hospital,+Near+Jama+Masjid+Metro+Station,+Gate+No.1,+Kasturba+Hospital+Marg,+Old+Delhi,+New+Delhi,+Delhi+110006/@28.6522237,77.234784,1191m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2m2!1d77.2410203!2d28.6561592!1m5!1m1!1s0x390cfd20987aa351:0xe968a705b8558593!2m2!1d77.2373025!2d28.6492735!3e0";
                };
                document.getElementById("i2").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Red+Fort,+Netaji+Subhash+Marg,+Lal+Qila,+Chandni+Chowk,+New+Delhi,+Delhi/Delhi+Junction,+Mori+Gate,+New+Delhi,+Delhi+110006/@28.6569154,77.2255611,2383m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2m2!1d77.2410203!2d28.6561592!1m5!1m1!1s0x390cfd0f740570d3:0xb788f58c9af6db9!2m2!1d77.2278724!2d28.6614424!3e0";
                };
                document.getElementById("i3").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Red+Fort,+Netaji+Subhash+Marg,+Chandni+Chowk,+New+Delhi,+Delhi/Red+Fort,+Lal+Qila,+Chandni+Chowk,+Delhi,+110006/@28.6529509,77.2365301,781m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2m2!1d77.2410203!2d28.6561592!1m5!1m1!1s0x390cfd1c211c23d7:0x18f24bbe0fcf7bd2!2m2!1d77.23645!2d28.65405!3e0";
                };
                document.getElementById("i4").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Red+Fort,+Netaji+Subhash+Marg,+Chandni+Chowk,+New+Delhi,+Delhi/Hotel+Darshan+Palace+by+WB+Inn,+Pahar+Ganj,+Central+Delhi+XV-3759,+Gali+Nath+Patwa,+Pahar+Ganj,+New+Delhi,+Delhi+110055/@28.6522235,77.2265704,2383m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2m2!1d77.2410203!2d28.6561592!1m5!1m1!1s0x390cfd183200f5b9:0xc1bd8db62e58fcb4!2m2!1d77.2297399!2d28.6500115!3e0";
                };
                document.getElementById("i5").onclick = function () {
                  location.href = "https://www.google.com/maps/place/Chandni+Chowk+Car+Parking/@28.6540996,77.2323645,781m/data=!3m1!1e3!4m9!1m2!2m1!1sparking!3m5!1s0x390cfd1c1cbca0f5:0x14a4917cd319a434!8m2!3d28.6540999!4d77.2355665!15sCgdwYXJraW5nkgELcGFya2luZ19sb3TgAQA";
                };
                document.getElementById("i6").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Red+Fort,+Netaji+Subhash+Marg,+Lal+Qila,+Chandni+Chowk,+New+Delhi,+Delhi/J6WM%2BPP7+5+star+mall,+hawali+azam+khan+new+delhi,+near+by+jamamasjid+110001,+Delhi,+110001/@28.6514117,77.2323167,1191m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2m2!1d77.2410203!2d28.6561592!1m5!1m1!1s0x390cfd371f95c69f:0xcdb56783193f4dcd!2m2!1d77.2343004!2d28.6467714!3e0";
                };
                document.getElementById("i7").onclick = function () {
                  location.href = "https://www.google.com/maps/dir/Red+Fort,+Netaji+Subhash+Marg,+Lal+Qila,+Chandni+Chowk,+New+Delhi,+Delhi/M64M%2BPPW+SBI+ATM,+Bhagirath+Palace,+Chhippy+Wada,+Chandni+Chowk,+New+Delhi,+Delhi+110006/@28.6557355,77.2295104,2383m/data=!3m2!1e3!4b1!4m14!4m13!1m5!1m1!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2m2!1d77.2410203!2d28.6561592!1m5!1m1!1s0x390cfd1b8143cfc7:0xef6e4f63d9406909!2m2!1d77.2344116!2d28.6568561!3e0";
                };
              </script>

             </body>
           </html>