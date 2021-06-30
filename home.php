<!DOCTYPE html>
<html>
  <head>
  <script>
             setInterval(showTime, 1000);
             function showTime() {
                 let time = new Date();
                 let hour = time.getHours();
                 let min = time.getMinutes();
                 let sec = time.getSeconds();
                 am_pm = "AM";
                if (hour > 12) {
                     hour -= 12;
                     am_pm = "PM";
                 }
                 if (hour == 0) {
                     hr = 12;
                     am_pm = "AM";
                 }
       
                 hour = hour < 10 ? "0" + hour : hour;
                 min = min < 10 ? "0" + min : min;
                 sec = sec < 10 ? "0" + sec : sec;
       
                 let currentTime = hour + ":" 
                     + min + ":" + sec + am_pm;
       
                 document.getElementById("clock")
                     .innerHTML = 'Time: ' + currentTime;
             }
       
             showTime();
         </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <title>Home - Horizon Photography</title>
  <link rel="stylesheet" href="camera_store.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Lobster" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Nunito" rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="ind_pg.js?v=<?php echo time(); ?>"></script>
  </head>    
  <body onload="checkCookie()">
    <header id="header">
      <a href="home.php"><img id="header-img" src="https://res.cloudinary.com/horizon3902/image/upload/v1607179838/1j_ojFVDOMkX9Wytexe43D6kifGIqxJImB3NwXs1M3EMoAJtliAqh.._fmm1cu.png" alt="logo"/></a>
      
      <nav id="nav-bar">
        <ul id="stuff">
          <li><a  class="nav-link" href="#getst">Get Started</a></li>
          <li><a  class="nav-link" href="#products">Products</a></li>
          <li><a  class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>    
        <div class="parallax">
          <span class="tag">Make the most of your memories, <br>with the best on the market</span>
          <p id="clock"></p>
        </div>

        <div class="vclass" id="getst">
          <p>Get Started with Photography</p>
          <iframe id="video" src="https://www.youtube.com/embed/qzhi_C1Nkzs"></iframe>
      </div>

      <div class="prices-class" id="products">
        <h3 id="prodH" style="text-align: center;">Products</h3>
          <div class="row">
            <div class="column">
              <div class="card" onmouseover="card1in()" onmouseout="card1out()">
                <img class="cams" src="https://res.cloudinary.com/horizon3902/image/upload/v1608350254/transparent_rhmjgu.png" alt="camera1">
                <p style="font-size: 3rem">RTX-3090</p>
                <p style="font-size: 2rem"  id="card1info">Roll over here!</p>
                <p style="font-size: 3rem">₹1,49,999</p>
              </div>
            </div>
            <div class="column">
              <div class="card"  onmouseover="card2in()" onmouseout="card2out()">
                <img class="cams" src="https://res.cloudinary.com/horizon3902/image/upload/v1608355787/oie_transparent_3_f47c4x.png" alt="camera2"> 
                <p style="font-size: 3rem"><br>RTX-2070</p>
                <p style="font-size: 2rem" id="card2info">Roll over here!</p>
                <p style="font-size: 3rem">₹99,999</p>
              </div>
            </div>
            <div class="column">
              <div class="card" onmouseover="card3in()" onmouseout="card3out()">
                <img class="cams" src="https://res.cloudinary.com/horizon3902/image/upload/v1608355606/oie_transparent_2_orgahk.png" alt="camera3">
                <p style="font-size: 3rem"><br>GTX-1660S</p>
                <p style="font-size: 2rem"  id="card3info">Roll over here!</p>
                <p style="font-size: 3rem">₹65,999</p>
              </div>
            </div>
          </div>
    </div>

    <div id="locations">
      <p id="ini">Locations</p>
      <p style="font-family: 'Nunito'; text-align: center; font-size: 2rem">We are present in various locations across India. Visit the store nearest to you!</p>
      <table id="loctable" style="text-align: center;">
        <tr>
            <th>City</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Google Maps Link</th>
        </tr>
        <tr>
            <td>Mumbai</td>
            <td>21, Jump Street. Colaba, 400001</td>
            <td>6823727381</td>
            <td><a class="maplink" href="https://goo.gl/maps/BZuqzEE1NVzBzn7HA" target="_blank">Seaview Studio</a></td>
        </tr>
        <tr>
            <td>Nagpur</td>
            <td>34C, Near Gandhisagar Lake, Empress City, 440018</td>
            <td>7878999987</td>
            <td><a class="maplink" href="https://goo.gl/maps/BZuqzEE1NVzBzn7HA" target="_blank">Lakeview Studio</a></td>
        </tr>
        <tr>
            <td>Bangalore</td>
            <td>441D, Racecourse Road, Basaveshwara Circle, 560001</td>
            <td>5677889987</td>
            <td><a class="maplink" href="https://goo.gl/maps/BZuqzEE1NVzBzn7HA" target="_blank">Stallion Cameras</a></td>
        </tr>
        <tr>
            <td>Chennai</td>
            <td>333, SVP Arcade, Kodambakkam, 600024</td>
            <td>6787678998</td>
            <td><a class="maplink" href="https://goo.gl/maps/BZuqzEE1NVzBzn7HA" target="_blank">Dreamshare Photography</a></td>
        </tr>
        <tr>
            <td>Delhi</td>
            <td>29, Chandani Chowk, 110006</td>
            <td>8798762563</td>
            <td><a class="maplink" href="https://goo.gl/maps/BZuqzEE1NVzBzn7HA" target="_blank">Visionary Camera and Accessories</a></td>
        </tr>

    </table>
      
    </div><br/><br/>

    <div id="wL">
      <p id="ini">Your Wishlist!</p>
      <p style="font-family: 'Nunito'; text-align: center; font-size: 2rem">This is your wishlist. Add and remove elements from here. Never forget your dreams.</p>
      <input type="button" style="font-family: 'Nunito'; color: white; height: 5rem; width: 10rem; border-style:hidden; border-radius: 1rem; background-color: #644496; margin-left: 48%;" value="Add Wish" onclick="addRow('wishList')" /><br/><br/>
      <table id="wishList" width="350px">  
              <tr>  
                   <td><input type="button" style="text-align: center;" name="button1" value="Forget" onclick="removeRow('button1')"></td>  
                   <td>1</td>  
                   <td><textarea></textarea></td>  
              </tr>  
         </table> 
    </div><br/><br/>
    
    <div id="contact">
      <p id="ini">Contact Horizon</p>
      <p style="font-family: 'Nunito'; text-align: center; font-size: 2rem">Fill the <a href="form.xhtml" target="_blank">Customer Info Form</a></p>
      <p style="font-family: 'Nunito'; text-align: center; font-size: 2rem">We are dedicated to provide you the best shopping experience. Leave your email id below and our executive will be in touch with you, shortly.</p>
      <form id="form" action=" ">
          <input
            name="email"
            id="email"
            type="email"
            placeholder="Enter your email address"
            required
          />
          <input id="submit" type="submit" value="Submit"/>
        </form>
      
        <p style="font-family: 'Nunito'; text-align: center; font-size: 2rem">Also, check out our social media channels!</p>
        <ul class="socmed">
          <li><a href="https://www.instagram.com/kshitij_agarkar" target="_blank">Instagram</a></li>
          <li><a href="https://www.instagram.com/kshitij_agarkar" target="_blank">Twitter</a></li>
          <li><a href="https://iiitn.ac.in" target="_blank">YouTube</a></li>
        </ul>
    </div>

    <footer>&#169Horizon Technologies, 2021</footer>
  </body>
</html>
    
    
    
    
      
      
  
      
      

