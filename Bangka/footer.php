<?php
/**
 * @package Field Studio
 * Footer */

?>

<div id="footer">
   <div id="social">
        <a href="http://instagram.com/cherrradactyl" target="_blank"><img src="<?php bloginfo('template_url'); ?>/instagram.png" alt="" /></a>
        <a href="http://twitter.com/cherrradactyl" target="_blank"><img src="<?php bloginfo('template_url'); ?>/twitter.png" alt="" /></a>
        <a href="https://www.researchgate.net/profile/Cher_Chow" target="_blank"><img src="<?php bloginfo('template_url'); ?>/rg.png" alt="" /></a>
    </div>
    <ul id="footer-links">
        <li><a href="<?php get_bloginfo('url'); ?>">Blog</a></li>
        <li><a href="<?php get_bloginfo('url'); ?>/about">About</a></li>
        <li><a href="<?php get_bloginfo('url'); ?>/about#contact">Contact</a></li>
    </ul>
    &copy; Cher Chow. All rights reserved :)
</div>
</div>
</div>
</body>

<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-81793001-1', 'auto');
      ga('send', 'pageview');
    </script>
    
    <script>
	  
        $(document).ready(function(){
            $('#nav-button').click(function(){
                $(this).toggleClass('open');
            });
        });
        
        function toggleNav() {
          var x = document.getElementById("full-nav");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
      
            </script>
</html>