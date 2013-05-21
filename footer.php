<div class="clear"></div>
</div> <!-- end container -->

<footer class="container_12">
  <div class="links grid_12">
    <div class="grid_4 alpha">
      <ul>
  	<li><a href="/author">Staff</a></li>
  	<li><a href="/voice/about">About</a></li>
      </ul>
    </div>
    <div class="grid_4">
      <ul>
        <!--<li><a href="#">Mobile Site</a></li>-->
<!--    
        <li><a href="http://facebook.com/thepalyvoice">Facebook</a></li>
        <li><a href="http://twitter.com/thepalyvoice">Twitter</a></li>
-->
        <li><a href="http://facebook.com/thepalyvoice">Facebook</a></li>
        <li><a href="http://twitter.com/thepalyvoice">Twitter</a></li>
      </ul>
    </div>
    <div class="grid_4 omega">
      <ul>
  	<li><a href="/voice/ed-guide">Editorial Guidelines</a></li>
        <li><a href="/voice/comment-policy">Comment Policy</a></li>
	<li><a href="/voice/advertising">Advertising</a></li>
        <!--<li><a href="#">Editorial Policy</a></li>
		   <li><a href="#">Comment Policy</a></li>
        <li><a href="#">Ads</a></li>-->
<!--
  	<li><a href="http://archive.palyvoice.com/campanile">Campanile</a></li>
  	<li><a href="http://archive.palyvoice.com/infocus">InFocus</a></li>
  	<li><a href="http://archive.palyvoice.com/verde">Verde Magazine</a></li>
  	<li><a href="http://vikingsportsmag.com">Viking Sports Magazine</a></li>
-->
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="grid_12 copyright">
    Copyright &copy; <?= date('Y', $_SERVER['REQUEST_TIME']); ?> <em>The Paly Voice</em>
  </div>
  <div class="clear"></div>
</footer>
<?php print $closure; ?>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({appId: '143111462403240', status: true, cookie: true,
  xfbml: true});
  };
  (function() {
  var e = document.createElement('script'); e.async = true;
  //e.src = document.location.protocol +
  e.src =	 'http://connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
  }());
</script>
<?php wp_footer(); ?>
</body>
</html>
