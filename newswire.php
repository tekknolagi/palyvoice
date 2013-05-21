<?php if(have_posts()): ?>
<nav id="newswire" class="home">
  <h3><a href="#">LATEST NEWS</a></h3>
  <div class="inner">
    <?php while(have_posts()): the_post(); ?>
    <div class="row">
      <h1 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="teaser"><?php the_excerpt(); ?></div>
    </div>
    <?php endwhile; ?>
  </div>
</nav>
<?php endif; ?>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script><script type="text/javascript" src="http://www.rationalsurvey.com/include/js/jquery-plugins/jquery.postmessage.min.js"></script><script type="text/javascript">jQuery(document).ready(function(){jQuery('#frame_embed_6048').attr('src',jQuery('#frame_embed_6048').attr('src')+'#'+encodeURIComponent(document.location.href));pm.bind("autoSize", function(r) {jQuery('#frame_embed_6048').width(r.width).height(r.height);return true;});});</script><iframe id='frame_embed_6048' style="clear: both; margin-top: 20px" scrolling="no" frameborder="0" src="http://www.rationalsurvey.com/studyPeriods/collect/stdy_perd_id/6048/page/1/embed/1"></iframe><a href='http://www.rationalsurvey.com/'>Powered By RationalSurvey</a>-->
