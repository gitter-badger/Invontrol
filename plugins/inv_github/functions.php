<?php
function inv_load_githubStyle() {
		global $db;
		$query = <<<SQL
		SELECT style
		FROM inv_github
SQL;
		$resource = $db->db->prepare( $query );
		$resource->execute();
		foreach($resource as $row){
			switch($row['style']){
				case 'left-red':
				inv_github_topRed();
				break;
				case 'left-green':
				inv_github_topGreen();
				break;
				case 'left-black':
				inv_github_topBlack();
				break;
				case 'left-orange':
				inv_github_topOrange();
				break;
				case 'left-grey':
				inv_github_topGrey();
				break;
				case 'left-dark':
				inv_github_topDark();
				break;
				case 'right-red':
				inv_github_rightRed();
				break;
				case 'right-green':
				inv_github_rightGreen();
				break;
				case 'right-black':
				inv_github_rightBlack();
				break;
				case 'right-orange':
				inv_github_rightOrange();
				break;
				case 'right-grey':
				inv_github_rightGrey();
				break;
				case 'right-dark':
				inv_github_rightDark();
				break;
			}
			
		}
}
function inv_github_Link() {
	global $db;
	$query = <<<SQL
	SELECT link
	FROM inv_github
SQL;
	$resource = $db->db->prepare( $query );
	$resource->execute();
	foreach($resource as $row){
		echo $row['link'];
	}
}
function inv_github_topRed(){
?>
	<a href="https://github.com/<?php inv_github_Link(); ?>" target="_blank">
	<img style="position: absolute; top: 0; left: 0; border: 0;" 
	src="https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" 
	alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png"></a>
<?php
}
function inv_github_topGreen() {
?>
	<a href="https://github.com/<?php inv_github_Link(); ?>" target="_blank">
	<img style="position: absolute; top: 0; left: 0; border: 0;" 
	src="https://camo.githubusercontent.com/121cd7cbdc3e4855075ea8b558508b91ac463ac2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" 
	alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png"></a>
<?php
}
inv_load_githubStyle();



?>

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
</style><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<script type="text/javascript">jQuery(document).ready(function(){ jQuery("#facebook_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#facebook_right").stop(true,false).animate({right: -200}, 500); });    jQuery("#twitter_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#twitter_right").stop(true,false).animate({right: -250}, 500); });     jQuery("#google_plus_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#google_plus_right").stop(true,false).animate({right: -154}, 500); });    jQuery("#feedburner_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#feedburner_right").stop(true,false).animate({right: -303}, 500); });    });</script>
<div id="on">
 <div id="facebook_right" style="top: 18%;">
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=307601162757869";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div id="facebook_div">
   <img src="http://4.bp.blogspot.com/-pzM3IebaPHg/T3BF_Cp5ChI/AAAAAAAABTA/uPlhRvqJF2Y/s1600/helperblogger.com-facebook-icon.png" alt=""/>
   <div class="fb-page" data-href="https://www.facebook.com/pages/Invontrol-CMS/1580135868922227" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Invontrol-CMS/1580135868922227"><a href="https://www.facebook.com/pages/Invontrol-CMS/1580135868922227">Invontrol CMS</a></blockquote></div></div>
  </div>
 </div>
</div>
<div id="on">
 <div id="twitter_right" style="top: 35%;">
  <div id="twitter_div">
   <img id="twitter_right_img" src="http://2.bp.blogspot.com/-DoXgccAh568/T3BGBaBhUUI/AAAAAAAABTY/apMnhTjbnnU/s1600/helperblogger.com-twitter-icon.png"/>
   <script src="http://widgets.twimg.com/j/2/widget.js"></script>
   <script>new TWTR.Widget({version: 2,type: 'profile',rpp: 4,interval: 1000,width: 246,height: 265,theme: {shell: {background: '#63BEFD',color: '#FFFFFF'},tweets: {background: '#FFFFFF',color: '#000000',links: '#47a61e'}},features: { loop: false,live: true,scrollbar: false,hashtags: false,timestamp: true,avatars: true,behavior: 'all' }}).render().setUser('helperblogger').start();</script>
  </div>
 </div>
</div>
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
