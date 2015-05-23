<style>
img,a {
    border: 0;
}

#on {
    visibility: visible;
}

#off {
    visibility: hidden;
}

#facebook_div {
    width: 196px;
    height: 340px;
    overflow: hidden;
}

#twitter_div {
    width: 246px;
    height: 353px;
    overflow: hidden;
}

#google_plus_div {
    width: 152px;
    height: 97px;
    overflow: hidden;
    margin-left: 50px;
    margin-top: 10px;
}

#knfeedburner_div {
    width: 300px;
    height: 97px;
    overflow: hidden;
    margin-top: 5px;
    margin-left: -4px;
}

#kakinetwork_div {
    width: 300px;
    height: 97px;
    overflow: hidden;
}/* right side style */#facebook_right {
    z-index: 10005;
    border: 2px solid #3c95d9;
    background-color: #fff;
    width: 196px;
    height: 353px;
    position: fixed;
    right: -200px;
}

#facebook_right img {
    position: absolute;
    top: -2px;
    left: -35px;
}

#facebook_right iframe {
    border: 0px solid #3c95d9;
    overflow: hidden;
    position: static;
    height: 360px;
    left: -2px;
    top: -3px;
}

#twitter_right {
    z-index: 10004;
    border: 2px solid #6CC5FF;
    background-color: #6CC5FF;
    width: 246px;
    height: 353px;
    position: fixed;
    right: -250px;
}

#twitter_right_img {
    position: absolute;
    top: -2px;
    left: -35px;
    border: 0;
}

#google_plus_right {
    z-index: 10003;
    background-color: #F2F2F2;
    border: 2px solid #006ec9;
    border-top: 2px solid #0056a0;
    border-bottom: 2px solid #0056a0;
    border-right: 2px solid #0056a0;
    border-left: hidden;
    width: 152px;
    height: 97px;
    position: fixed;
    right: -154px;
}

#google_plus_right_img {
    position: absolute;
    top: -2px;
    left: -33px;
    border: 0;
}

#feedburner_right {
    z-index: 10003;
    background-color: #fefefe;
    border: 2px solid #5b5b5b;
    border-top: 2px solid #5b5b5b;
    border-bottom: 2px solid #5b5b5b;
    border-right: 2px solid #5b5b5b;
    border-left: hidden;
    width: 300px;
    height: 97px;
    position: fixed;
    right: -303px;
}

#feedburner_right_img {
    position: absolute;
    top: -2px;
    left: -33px;
    border: 0;
}

#kakinetwork_right {
    z-index: 10003;
    border: 2px solid #303030;
    background-color: #fff;
    width: 300px;
    height: 97px;
    position: fixed;
}

#kakinetwork_right img {
    position: absolute;
    top: -2px;
    left: -101px;
}/* left side style */#facebook_left {
    z-index: 10005;
    border: 2px solid #3c95d9;
    background-color: #fff;
    width: 196px;
    height: 353px;
    position: fixed;
    left: -200px;
}

#facebook_left img {
    position: absolute;
    top: -2px;
    right: -35px;
}

#facebook_left iframe {
    border: 0px solid #3c95d9;
    overflow: hidden;
    position: static;
    height: 360px;
    right: -2px;
    top: -3px;
}

#twitter_left {
    z-index: 10004;
    border: 2px solid #6CC5FF;
    background-color: #6CC5FF;
    width: 246px;
    height: 353px;
    position: fixed;
    left: -250px;
}

#twitter_left_img {
    position: absolute;
    top: -2px;
    right: -35px;
    border: 0;
}

#google_plus_left {
    z-index: 10003;
    background-color: #006ec9;
    border: 2px solid #006ec9;
    border-top: 2px solid #0056a0;
    border-bottom: 2px solid #0056a0;
    border-left: 2px solid #0056a0;
    border-right: hidden;
    width: 152px;
    height: 97px;
    position: fixed;
    left: -154px;
}

#google_plus_left_img {
    position: absolute;
    top: -2px;
    right: -33px;
    border: 0;
}

#feedburner_left {
    z-index: 10003;
    background-color: #fefefe;
    border: 2px solid #5b5b5b;
    border-top: 2px solid #5b5b5b;
    border-bottom: 2px solid #5b5b5b;
    border-left: 2px solid #5b5b5b;
    border-right: hidden;
    width: 300px;
    height: 97px;
    position: fixed;
    left: -303px;
}

#feedburner_left_img {
    position: absolute;
    top: -2px;
    right: -33px;
    border: 0;
}

#kakinetwork_left {
    z-index: 10003;
    border: 2px solid #303030;
    background-color: #fff;
    width: 300px;
    height: 97px;
    position: fixed;
}

#kakinetwork_left img {
    position: absolute;
    top: -2px;
    right: -101px;
}

.box-title1 {
    border: 1px solid #ddd;
/*border-radius*/
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
/*box-shadow*/
    -webkit-box-shadow: 5px 5px 5px #CCCCCC;
    -moz-box-shadow: 5px 5px 5px #CCCCCC;
    box-shadow: 5px 5px 5px #CCCCCC;
    padding: 10px;
    margin: 10px 0;
}

.enteryouremail {
    background: #fff !important;
    border: 1px solid #d2d2d2;
    padding: 0px 8px 0px 8px;
    color: #a19999;
    font-size: 12px;
    height: 25px;
    width: 165px;
/*border-radius*/
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    margin: 0px;
}

.submitbutton {
    background: #F2F2F2;
    border: 1px solid #F66303;
/*box-shadow*/
    -webkit-box-shadow: 3px 3px 3px #666;
    box-shadow: 3px 3px 3px #666;
    font: bold 12px Arial, sans-serif;
    color: #000000;
    height: 25px;
    padding: 0 12px 0 12px;
    margin: 0 0 0 5px;
/*border-radius*/
    -webkit-border-radius: 5px;
    border-radius: 5px;
    cursor: pointer;
}
</style>
<!--Facebook Data-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<script type="text/javascript">jQuery(document).ready(function(){ jQuery("#facebook_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#facebook_right").stop(true,false).animate({right: -200}, 500); });    jQuery("#twitter_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#twitter_right").stop(true,false).animate({right: -250}, 500); });     jQuery("#google_plus_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#google_plus_right").stop(true,false).animate({right: -154}, 500); });    jQuery("#feedburner_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#feedburner_right").stop(true,false).animate({right: -303}, 500); });    });</script>
<?php 
function inv_socialMediaFacebook() {
	global $db;
	$query = <<<SQL
	SELECT script 
	FROM inv_socialmedia
	WHERE name = :facebook
	AND enabled = :true
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':facebook'	=> 'Facebook',
	':true'	=> '1',
	));
	
	if($resource->rowCount() < 1 ){
	}
	else{
		foreach($resource as $row) {
			?>
<div id="on">
 <div id="facebook_right" style="top: 18%;">
 <div id="fb-root"></div>

  <?php echo $row['script']; ?>
 </div>
</div>
		<?php } 
	}
}
function inv_socialMediaTwitter(){
	global $db;
	$query = <<<SQL
	SELECT script
	FROM inv_socialmedia
	WHERE enabled = :true
	AND name = :twitter
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute( array (
	':true'	=> '1',
	':twitter' => 'Twitter',
	));
	if($resource->rowCount()<1){
		
	}
	else{
		foreach($resource as $row){
			?>
			<div id="on">
 <div id="twitter_right" style="top: 35%;">
  <div id="twitter_div">
   <img id="twitter_right_img" src="http://2.bp.blogspot.com/-DoXgccAh568/T3BGBaBhUUI/AAAAAAAABTY/apMnhTjbnnU/s1600/helperblogger.com-twitter-icon.png"/>
   <script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>
   <?php echo $row['script']; ?>
   </div>
 </div>
</div>
			<?php
		}
	}
}?>
<?php inv_socialMediaFacebook(); 
	  inv_socialMediaTwitter();
	  ?>

<div id="on">
 <div id="google_plus_right" style="top: 52%;">
  <div id="google_plus_div">
   <img id="google_plus_right_img" src="http://1.bp.blogspot.com/-08OfKvSFgp8/T3BF_ifkYhI/AAAAAAAABTI/H-tCpPulBME/s1600/helperblogger.com-google-plus-icon.png"/>
   <div style="float:left;margin:10px 10px 10px 0;">
    <g:plusone size="tall" expr:href="data:post.url"></g:plusone>
   </div>
  </div>
 </div>
 <div id="on">
  <div id="feedburner_right" style=" top: 69%;">
   <div id="knfeedburner_div">
    <center>
    <h4 style="color:#F66303;">You can also receive Free Email Updates:</h4>
    <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=hblogger', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
     <input gtbfieldid="10" class="enteryouremail" name="email" value="Enter your email here..." onblur="if (this.value == &#39;&#39;) {this.value = &#39;Enter your email here...&#39;;}" onfocus="if (this.value == &#39;Enter your email here...&#39;) {this.value = &#39;&#39;;}" type="text"/><input value="hblogger" name="uri" type="hidden"/><input value="Submit" class="submitbutton" type="submit"/>
    </form>
    </center><img id="feedburner_right_img" src="http://2.bp.blogspot.com/-92lVWafnEt0/T3BGAWfGPKI/AAAAAAAABTQ/r61lpGWJqew/s1600/helperblogger.com-subscribe-icon.png"/>
   </div>
  </div>
 </div>
</div>