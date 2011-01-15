<?php

error_reporting(E_ALL);
?>
<html>
<head>
<title>North of Three &mdash; Software Design Australia</title>
<meta name="description" content="North of Three is a software design company based in Australia.">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />

  <style type="text/css" media="screen">
    body{
      margin: 0px;
      padding: 0px;
      font-size: 16px;
      font-family: Georgia, serif;
      background: #FFF;
      color: #111;
      padding-bottom: 30px;
    }
    span.lucida {
        font-family: 'Lucida Grande';
        font-size: 20px;
    }
    p {
        font-size: 20px;
    }
    a.btn {
      -webkit-border-bottom-left-radius: 6px 6px;
      -webkit-border-bottom-right-radius: 6px 6px;
      -webkit-border-top-left-radius: 6px 6px;
      -webkit-border-top-right-radius: 6px 6px;
      border-color: rgb(255, 170, 34);
      padding: 8px 15px;
    }
    #centered{
      text-align: center;
    	margin: 0px auto;
    	width: 600px;
    }
    #innerwrapper{
      position: relative;
      text-align: left;
      border: 1px solid transparent;
    }
    #head {    	
    	border: 1px solid transparent;
    	width: 100%;
        margin-bottom: 10px;
        text-align: center;
    }
    #head heading{
        font-size: 80px;
        display: inline-block;
        margin: 30px auto 0px auto;
    }
    heading.subheading {
        font-size: 15px;
    }
    heading.subheading a {
        font-style: italic;
    }
    #contact {
    	margin-left: 215px;
    }
    article {
        margin-bottom: 15px;
        border-bottom: 1px dotted #CCC;
        padding-bottom: 8px;
        display: block;
    }
    article heading{
        font-size: 13px;
        padding: 0px 0px 3px 0px;
        display: block;
    }
    a,
    article heading a{
        color: #111;
        text-decoration: none;
    }
    article.working-on{
        padding-bottom: 8px;
    }
    article.working-on h2{
        margin-bottom: 8px;
        margin-top: 3px;
    }
    article.working-on p{
        margin-bottom: 8px;
        font-size: 16px;
        margin-top: 4px;
        
    }
    a:hover {
        color: red;
    }
    section.box {
        width: 100%;
    }
    section.box .leftcolumn {
        border-bottom: 1px dotted #CCC;
    }
    section.box .leftcolumn article {
        float: left;
        width: 285px;
        border: none;
    }
    section.box .leftcolumn article:first-child {
        margin-right: 20px;
    }
    section.box h3{
        font-size: 20px;
        border-bottom: 6px solid black;
        display: block;
        font-weight: normal;
        padding-bottom: 6px;
    }
    section.box.left {
        float: left;
        margin-right: 18px;
    }
    section.box.twocol {
        float: left;
        width: 280px;
    }
    section.box.twocol.images a.image {
        display: inline-block;
        width: 132px;
        height: 90px;
        border: 6px solid #EEE;
        margin-bottom: 4px;
    }
    section.box.twocol.images a.image:hover {
        border-color: #DDD;
    }
    
    section.box.twocol:first-child {
        margin-right: 18px;
    }
    
    
    .clr {
        clear: both;
    }
    a.button {
        background-color: #EEE;
        display: inline-block;
        padding: 3px 12px 5px;
        font-size: 14px;
        margin-right: 5px;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
    }
    a.button:hover {
        background-color: red;
        color: white;
    }
    footer {
        display: block;
        margin-top: 18px;
        text-align: center;
    }

  </style>
	
</head>
<body>
	<div id="centered">
		<div id="innerwrapper">
			
			<div id="head">
				<heading>North of Three</heading>
			</div>
			
			<heading class="subheading">North of Three is a software design company based in  Australia. <a href="http://twitter.com/nof3" target="_blank" title="Follow North of Three on Twitter">Follow us on Twitter</a>.</heading>
            
            <section class="box left">
                
                <h3>Software</h3>
                
                <div class="leftcolumn">
                    <article class="working-on">
                        <h2>Sequel Pro</h2>
                        <p>MySQL Database Management for Mac OS X Leopard.</p>
                        <a href="http://www.sequelpro.com/" class="button left" title="Sequel Pro" target="_blank">sequelpro.com</a>
                        <a href="http://www.twitter.com/sequelpro" class="button left" title="Follow Sequel pro on Twitter" target="_blank">@sequelpro</a>
                    
                    </article>

                    <article class="working-on">
                        <h2>Medium Stack</h2>
                        <p>A great way for developers to share images, text and urls.</p>
                        <a href="http://www.mediumstack.com/" class="button left" title="Medium Stack" target="_blank">mediumstack.com</a>
                        <a href="http://www.twitter.com/sequelpro" class="button left" target="_blank">@mediumstack</a>
                    
                    </article>
                    
                    <div class="clr"></div>
                </div>
                
            </section>
            
            <section class="box twocol" style="width: 295px; margin-right: 10px;">
                <h3>We likey <a href="http://mediumstack.com/mattlangtree/ipad_links" class="lucida">&raquo;</a></h3>
		
			<?php

		
			$ch = curl_init();
            $headers = array('HTTP_ACCEPT: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');

            curl_setopt($ch, CURLOPT_URL, "http://mediumstack.com/api/stack/26"); # URL to post to
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); # return into a variable
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers );
            $stacks_json_feed = curl_exec( $ch ); # run!
            curl_close($ch);
		
			$stack = json_decode($stacks_json_feed,true); 
            // print_r($stack);
			?>
		
			<? $i=0; foreach ($stack['item_list']['items'] as $key => $item): ?>
			<?php if ($item['tweet_type'] != 'url' || $i > 6)
			        continue;
			?>
			 	<article>
    			    <heading><a href="<?= $item['url']?>" target="_blank"><?= $item['label']?></a></heading>
    			</article>
			<?php $i++; endforeach; ?>
        </section>
        
        <section class="box twocol images"  style="width: 293px;">
			<h3>In Progress <a href="http://mediumstack.com/sequelpro/screenshots" class="lucida">&raquo;</a></h3>
            
			
			<?php

		
			$ch = curl_init();
            $headers = array('HTTP_ACCEPT: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');

            curl_setopt($ch, CURLOPT_URL, "http://mediumstack.com/api/stack/59"); # URL to post to
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); # return into a variable
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers );
            $stacks_json_feed = curl_exec( $ch ); # run!
            curl_close($ch);
		
			$stack = json_decode($stacks_json_feed,true); 
            // print_r($stack);
			?>
		
			<? $i=0; foreach ($stack['item_list']['items'] as $key => $item): ?>
			<?php if ($item['tweet_type'] != 'image' || $i > 5)
			        continue;
			?>
			 	<a class="image" href="<?= $item['short_url']?>" target="_blank"><img src="<?= $item['image_thumb_src']?>" width="132" height="90"></a>
    			
			<?php $i++; endforeach; ?>
				
		</section>
        
        <div class="clr"></div>

        <footer>
            Powered by <a href="http://www.mediumstack.com/" target="_blank">Medium Stack</a>.
            <br />Copyright &copy; 2011 &mdash; North of Three.
        </footer>
	</div>
</div>
	
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-16037614-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>