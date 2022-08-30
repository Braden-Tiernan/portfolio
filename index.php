<html>
  <script>
    var lv1 = [0,0];
    <?php eval('$gv1 = ' . file($_SERVER['DOCUMENT_ROOT'] . "/data/projects.txt")[0] . ';'); ?>
    <?php eval('$gv2 = ' . file($_SERVER['DOCUMENT_ROOT'] . "/data/jobs.txt")[0] . ';'); ?>
  </script>
  <head>
    <title>Braden Tiernan</title>
    <link type="x-image/icon" rel="shortcut icon" href="https://braden.protohub.online/images/jpg1.jpg">
    <link id="pagestyle" rel="stylesheet" type="text/css" href="<?php if (!empty($_COOKIE['mode'])) {if ($_COOKIE['mode'] == "black") {echo "darkss";} else {echo "lightss";}} else {echo "lightss";} ?>">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@PawsCyro" />
    <meta name="twitter:creator" content="@PawsCyro" />
    <meta name="twitter:image" content="https://braden.protohub.online/images/png1.png" />
    <meta property="og:image" content="https://braden.protohub.online/images/png1.png">
    <meta property="og:image:alt" content="Braden Tiernan Logo">
    <meta name="twitter:description" content="Check out Braden Tiernan, and see how he can help you." />
    <meta property="og:title" content="Braden Tiernan" />
    <meta property="og:description" content="Check out Braden Tiernan, and see how he can help you." />
    <meta name="description" content="Check out Braden Tiernan, and see how he can help you." />
    <meta property="twitter:title" content="Check out Braden Tiernan, and see how he can help you." />
    <meta name="keywords" content="braden tiernan, braden, tiernan, braden ronald tiernan, braden r tiernan" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Braden Tiernan"/>
    <meta property="og:url" content="https://protohub.online/" />
    <meta name="DC.title" content="Braden Tiernan" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
  </head>
  <body>
    <div class="s5"></div>
    <div class="s1">
      <div class="s1s1">
        <div class="s1s1s3"></div>
        <h1 class="wsc1 s1s1s1"><span class="s1s1s1s2"><span class="s1s1s1s2s1">Hi, my name is</span>BRADEN</span> TIERNAN.</h1>
        <p class="wsc1 s1s1s2">I’ve been designing with computers since the day I opened my first laptop. The cusp of technology has always fascinated me and I've never been afraid to just jump in and give it a go.</p>
        <p class="wsc1 s1s1s2"><a onClick="window.scroll({top: 999999, left: 0, behavior: 'smooth'});" class="link">contact me &rarr;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onClick="cp('projects');" class="link">see projects &rarr;</a></p>
        <div class="s1s1s4"></div>
        <h1 class="wsc1 s1s1s1sc1">A <sub><sup>little</sup></sub> <a class="s1s1s1s1">About Me.</a></h1>
        <p class="wsc1 s1s1s2">I'm a Full Stack Web Developer building the Front-end/Back-end of Websites and Web Applications that leads to the success of the overall product. Check out some of my work in the Projects section. I also like sharing content related to the stuff that I have learned over the years in Web Development so it can help other people of the Dev Community. I'm open to Job opportunities where I can contribute, learn and grow. If you have a good opportunity that matches my skills and experience then don't hesitate to contact me.</p>
        <p class="wsc1 s1s1s2"><a onClick="window.scroll({top: 999999, left: 0, behavior: 'smooth'});" class="link">contact me &rarr;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onClick="cp('projects');" class="link">see projects &rarr;</a></p>
        <div class="s1s1s5"><img class="wsc1 s1s1s6" src="images/jpg1.jpg"><p class="wsc1 s1s1s2 s1s1s2sc1 linksc2">photographer <a href="https://www.facebook.com/brittany.tiernan.3" target="_blank" class="link">brittany busby</a>*</p></div>
        <div class="s1s1s4"></div>
        <h1 class="wsc1 s1s1s1sc1">Recent Projects.</h1>
        <?php /*
          for ($i = count($gv1), $i2 = 0;($i > 0) && ($i2 < 5); $i--, $i2++) {
            $temp = "";
            if ($gv1[$i - 1][7]) {
              $temp = '<a href="' . $gv1[$i - 1][8] . '" target="_blank"><img class="s1s1s7s2sc1" src="images/svg3.svg?a=c"></a>';
            } else if ($gv1[$i - 1][5]) {
              $temp = '<a href="' . $gv1[$i - 1][6] . '" target="_blank"><img class="s1s1s7s2sc1" src="images/svg5.svg?a=c"></a>';
            }
            echo '<div class="wsc1 s1s1s7"><img onClick="cp(\'projects\');" class="s1s1s7s2" src="images/svg4.svg?a=d">' . $temp . '<div class="s1s1s7s1"><h3 class="s1s1s7s1s1">' . $gv1[$i - 1][0] . '</h3></div><div class="s1s1s7s3"><p class="s1s1s7s3s1">' . $gv1[$i - 1][1] . '</p></div></div>';
          }*/
          for ($i = count($gv1), $i2 = 0;($i > 0) && ($i2 < 3); $i--, $i2++) {
            $temp = ["",""];
            $temp2 = 0;
            $temp3 = "";
            if ($gv1[$i - 1][7]) {
              $temp[$temp2] = '<a href="' . $gv1[$i - 1][8] . '" target="_blank"><img class="s1s1s7s2sc3" src="/images/svg3.svg?a=c"></a>';
              $temp2++;
            }
            if ($gv1[$i - 1][5]) {
              $temp[$temp2] = '<a href="' . $gv1[$i - 1][6] . '" target="_blank"><img class="s1s1s7s2sc3" src="/images/svg5.svg?a=c"></a>';
              $temp2++;
            }
            if ($gv1[$i - 1][3]) {
              $temp3 = '<span class="s1s1s7s4s1">' . $gv1[$i - 1][4] . '&nbsp;-&nbsp;</span>';
            }
            echo '<div class="wsc1 s1s1s7sc1"><img class="s1s1s7s2sc2" src="/images/svg4.svg?a=d"><div class="s1s1s7s1sc1"><h3 class="s1s1s7s1s1sc1">' . $gv1[$i - 1][0] . '</h3></div><p class="s1s1s7s3s1sc1">' . $gv1[$i - 1][1] . '</p><p class="s1s1s7s4">' . $temp3 . $gv1[$i - 1][2] . '</p>' . $temp[0] . $temp[1] . '</div>';
          }
        ?>
        <p class="wsc1 s1s1s2 linksc2"><a onClick="cp('projects');" class="link">see all projects &rarr;</a></p>
        <div class="s1s1s4"></div>
        <h1 class="wsc1 s1s1s1sc1">Where I've Worked.</h1>
        <?php 
          for ($i = count($gv2);$i > 0; $i--) {
            $temp = "";
            if ($gv2[$i - 1][2]) {
              $temp = '<a href="' . $gv2[$i - 1][3] . '" target="_blank"><img class="s1s1s7s2sc1" src="images/svg5.svg?a=c"></a>';
            }
            echo '<div class="wsc1 s1s1s7"><img onClick="cp(\'projects\');" class="s1s1s7s2" src="images/svg4.svg?a=d">' . $temp . '<div class="s1s1s7s1"><h3 class="s1s1s7s1s1">' . $gv2[$i - 1][0] . '</h3></div><div class="s1s1s7s3"><p class="s1s1s7s3s1">' . $gv2[$i - 1][1] . '</p></div></div>';
          }
        ?>
        <p class="wsc1 s1s1s2"><a onClick="cp('projects');" class="link">see my work projects &rarr;</a></p>
        <div class="s1s1s4"></div>
        <h1 class="wsc1 s1s1s1sc1">Favorite Songs.</h1>
        <p class="wsc1 s1s1s2"><iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="width:100%;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/sunroof/1620952862?i=1620953051"></iframe></p>
        <p class="wsc1 s1s1s2"><iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="width:100%;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/venus-flytrap/1440067576?i=1440067591"></iframe></p>
        <p class="wsc1 s1s1s2"><iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="175" style="width:100%;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/amazing/1606962225?i=1606962237"></iframe></p>
        <!--<p class="wsc1 s1s1s2"><a onClick="cp('#');" class="link">ProtoHub &rarr;</a></p>-->
        <div class="s1s1s4"></div>
        <h1 class="wsc1 s1s1s1sc1">Let's Connect.</h1>
        <p class="wsc1 s1s1s2 s1s1s2sc2"><a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%8E%A8%20I%20am%20looking%20for%20a%20UX%2FUI%20Designer.%20Let%27s%20talk" class="linksc1">UI/UX DESIGN</a> <a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%91%A8%E2%80%8D%F0%9F%92%BB%20I%20am%20looking%20for%20a%20master%20of%20code.%20Let%27s%20talk" class="linksc1">FRONTEND DEVELOPMENT</a> <a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%91%A8%E2%80%8D%F0%9F%92%BB%20I%20am%20looking%20for%20a%20master%20of%20code.%20Let%27s%20talk" class="linksc1">BACKEND DEVELOPMENT</a> <a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%91%A8%E2%80%8D%F0%9F%92%BB%20I%20am%20looking%20for%20a%20Shopify%20Developer.%20Let%27s%20talk" class="linksc1">SHOPIFY DEVELOPMENT</a> <a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%92%BC%20Could%20you%20help%20me%20with%20my%20new%20business%3F" class="linksc1">NEW BUSINESS</a> <a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%8D%A6%20mmm...I%20love%20ice%20cream%21%20High%20five%21" class="linksc1">ICE CREAM</a> <a href="mailto:braden.tiernan92@gmail.com?subject=%F0%9F%A4%9D%20Project%20info.%20Let%27s%20talk" class="linksc1">OTHER</a></p>
        <p class="wsc1 s1s1s2 s1s1s2sc1 linksc3"><a href="tel:9182645858" class="link linksc4">(918) 264-5858</a> &nbsp;&bull;&nbsp; <a href="mailto:braden.tiernan92@gmail.com" class="link linksc4">braden.tiernan92@gmail.com</a><br><br><a onClick="window.scroll({top: 0, left: 0, behavior: 'smooth'});" class="link linksc4">back to top &uarr;</a></p>
        <div class="s1s1s2sc3"></div>
        <!--<p class="wsc1 s1s1s2">I’ve been designing with computers since the day I opened my first laptop. The cusp of technology has always fascinated me and I've never been afraid to just jump in and give it a go.</p>
        <p class="wsc1 s1s1s2"><a onClick="cp('#');" class="link">learn about &rarr;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a onClick="cp('#');" class="link">see projects &rarr;</a></p>-->
      </div>
    </div>
    <div class="s4"></div>
    <div class="s2">
      <div class="s2s1"></div>
    </div>
    <div class="s2s2"><div class="s2s2s1"></div></div>
    <div class="s6"><div class="s6s1"></div><p class="s6s2"><a href="tel:9182645858" class="s6s2s2">Phone</a> &bull; <a onClick="window.scroll({top: 999999, left: 0, behavior: 'smooth'});" class="s6s2s2">Email</a> &bull; <a href="https://twitter.com/PawsCyro" target="_blank"><img class="s6s2s1" src="images/svg2.svg?a=c"></a> &bull; <a href="https://www.instagram.com/braden.tiernan/" target="_blank"><img class="s6s2s1" src="images/svg1.svg?a=c"></a> &bull; <a href="https://github.com/Braden-Tiernan" target="_blank"><img class="s6s2s1" src="images/svg3.svg?a=c"></a></p></div>
    <div class="s3"><?php for ($i = 0; $i < 20; $i++) {echo "<div class='s3sc1'>";}; for ($i = 0; $i < 20; $i++) {echo "</div>";}?><h2 class="s3s1"><i>Braden Tiernan.</i></h2></div>
    <img class="s3s2" onClick="cp('/');" src="/images/svg6.svg?c=<?php echo rand(1000,9999)?>">
  </body>
  <script>
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    function lf1() {
      if (lv1[0] >= lv1[1]) {
        setTimeout(() => f1("scheck"), 1000);
      } else {
        setTimeout(lf1, 100);
      }
    }
    lf1();
  
    var f1v1 = true;
    function f1(a) {
      if (a == "scheck") {
        for (var i = 0; i < document.getElementsByClassName("wsc1").length; i++) {
          if (isInViewport(document.getElementsByClassName("wsc1")[i])) {
            document.getElementsByClassName("wsc1")[i].style.animation = "wsc1kf1 1s " + (i * 0.1) + "s forwards 1";
          }
        }
      } else {
        for (var i = 0; i < document.getElementsByClassName("wsc1").length; i++) {
          if (isInViewport(document.getElementsByClassName("wsc1")[i]) && (getComputedStyle(document.getElementsByClassName("wsc1")[i], null)["animation-name"] != "wsc1kf1")) {
            document.getElementsByClassName("wsc1")[i].style.animation = "wsc1kf1 1s 0s forwards 1";
          }
        }
      }
      document.getElementsByClassName("s2s1")[0].style.transform = "translateY(" + -(document.body.scrollTop * 2) + "px)";
      if (isInViewport(document.getElementsByClassName("s1s1s1")[0])) {
        document.getElementsByClassName("s3s1")[0].style.opacity = 0;
        document.getElementsByClassName("s3s1")[0].style.transform = "translateX(-40px)";
        document.getElementsByClassName("s6")[0].style.opacity = 1;
        document.getElementsByClassName("s6")[0].style.transform = "translateX(0px)";
        document.getElementsByClassName("s2s2")[0].style.opacity = 0;
        document.getElementsByClassName("s2s2")[0].style.transform = "translateY(20px)";
        document.getElementsByClassName("s4")[0].style.opacity = 1;
      } else {
        document.getElementsByClassName("s3s1")[0].style.opacity = 1;
        document.getElementsByClassName("s3s1")[0].style.transform = "translateX(0px)";
        document.getElementsByClassName("s6")[0].style.opacity = 0;
        document.getElementsByClassName("s6")[0].style.transform = "translateX(-40px)";
        document.getElementsByClassName("s2s2")[0].style.opacity = 1;
        document.getElementsByClassName("s2s2")[0].style.transform = "translateY(0px)";
        document.getElementsByClassName("s4")[0].style.opacity = 0.6;
      }
      document.getElementsByClassName("s2s2s1")[0].style.width = ((document.body.scrollTop / (document.body.scrollHeight - window.innerHeight)) * 100) + "%";
      //document.getElementsByClassName("s2s2")[0].style.transform = "translateY(" + -document.body.scrollTop + "px)";
      //document.getElementsByClassName("s2s2")[0].style.paddingBottom = (document.body.scrollTop * 3) + "px";
      //document.getElementsByClassName("s2s2")[0].style.paddingRight = ((document.body.scrollTop / (document.body.scrollHeight - window.innerHeight)) * (window.innerWidth - 80)) + "px";
      if (f1v1) {
        setTimeout(f1,50);
      }
    }
    
    document.addEventListener("scroll", s1());
    function s1() {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
    
    function cp(a,b) {
      if (b) {
         window.open(a);
      } else {
        f1v1 = false;
        setTimeout(() => cp2(a,b), 100);
      }
    }
    
    function cp2(a,b) {
      for (var i=0; i < document.getElementsByClassName("wsc1").length; i++) {
        document.getElementsByClassName("wsc1")[i].style.animation = "kf1 1s 0s forwards 1";
      }
      document.getElementsByClassName("s2s1")[0].style.transform = "translateY(0px)";
      document.getElementsByClassName("s3s1")[0].style.opacity = 0;
      document.getElementsByClassName("s3s1")[0].style.transform = "translateX(-40px)";
      document.getElementsByClassName("s2s2")[0].style.opacity = 0;
      document.getElementsByClassName("s2s2")[0].style.transform = "translateY(20px)";
      document.getElementsByClassName("s6")[0].style.opacity = 1;
      document.getElementsByClassName("s6")[0].style.transform = "translateX(0px)";
      document.getElementsByClassName("s4")[0].style.opacity = 1;
      document.getElementsByClassName("s3s2")[0].style.opacity = 0;
      setTimeout(() => window.location = a, 1000);
    }
  </script>
</html>