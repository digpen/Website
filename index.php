<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
	<head>
		<title>#digpen - A community of web and IT professionals based in the South West peninsula of the UK</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" href="css/screen.css" rel="stylesheet" media="screen" />
		<script type="text/javascript" src="jscript/jquery.js"></script>
		<script type="text/javascript" src="jscript/common.js"></script>
		<script type="text/javascript" src="jscript/cufon-yui.js"></script>
		<script type="text/javascript" src="jscript/Helvetica_Neue_Light_300.font.js"></script>
		<script type="text/javascript">
			Cufon.replace('h1');
			Cufon.replace('h2');
		</script>
	</head>
	<body> 
		<?php include (substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . "/includes/topbar.php"); ?>	</div>
		</div>
		<div id="main">
			<div id="twitter_events">
				<div id="twitter">
					<h2>Follow <a href="https://www.twitter.com/digpensw" target="_blank">@DigPenSW</a></h2>
					<?
					$doc = new DOMDocument();
					$doc->load('http://twitter.com/statuses/user_timeline/digpensw.xml');
					$count = 0;
					foreach ($doc->getElementsByTagName('status') as $node) {
					
						$count++;
						$content = $node->getElementsByTagName('text')->item(0)->nodeValue;
						$published = $node->getElementsByTagName('created_at')->item(0)->nodeValue;
						$content =  preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $content);
						$content = preg_replace('/(?<=^|\s)@([a-z0-9_]+)/i', '<a href="https://www.twitter.com/$1" target="_blank">@$1</a>', $content);

						?>
						<p>
							<?=$content?>
							<br />
							<em><?=date("D jS M Y", strtotime($published))?></em>
						</p>
						<?
						if ($count == 5) {
							break;
						}
					}
					?>
				</div>
				<div id="events">
					<h2>Come to an event</h2>
					
					
					<div id="future_events">
					  <h3>#digpen</h3>
			    <p><strong><a href="IV/index.php">#dipgen IV Unconference</a></strong><br />
						  10 Mar, Exeter Phoenix </p>
                        <p><strong>#dipgen V Unconference</strong><br />
                      Summer 2012. Date &amp; venue TBC </p>
                        <h3>Other</h3>
                        <p><a href="http://www.cornwalldigital.co.uk/events/50870612/?eventId=50870612&amp;action=detail"><strong>Cornwall Digital Meetup Group</strong></a><br />
                          Wed 8 Feb, Truro
                        </p>
                        <p><strong>PopUp</strong>, Exeter<br />
						9 Feb</p>
                        <p><a href="http://static.ow.ly/docs/geekathon flyer-geeks_ui8.pdf"><strong>24-Hour Charity Geekathon</strong></a><br />
                          10-11 Feb, Pool, Cornwall
                        </p>
	    <p><a href="http://exeter.launch48.com/"><strong>Launch 48</strong></a> - pitch, build and launch an online business in 48 hours.<br />
						  2-4 Mar, Exeter.
						  <br />
					  </p>
						<p><a href="mailto:digpen@digpen.com">Contact us</a> to get your event listed here.</p>
						
						<!--p><a href="#" id="show_past_events">Show past events</a></p-->
					</div>
					
					<div id="past_events">
						<p>
							<strong>Sat 10th Dec 2011,  7pm</strong><br />
							#digpen Xmas Social<br />
							Bistro One, Plymouth
						</p>
						<p>
							<strong>Thurs 7th July 2011</strong><br />
							Design Jam<br />
							Duchy Square Centre, Princetown
						</p>
						
						<p>
							<strong>Sat 11th June 2011</strong><br />
							#digpen III<br />
							University College Falmouth
						</p>
						
						<p>
							<strong>Sat 14th May 2011</strong><br />
							#digpen II<br />
							Exeter
						</p>	
						
						<p>
							<strong>Sat 5th March 2011</strong><br />
							#digpen I<br />
							Plymouth
						</p>			

						<p><a href="#" id="show_future_events">Show future events</a></p>
					</div>
					
				</div>
				<div class="clear"><!-- --></div>
			</div>
			<div id="about">
				<h2>What is #digpen?</h2>
				<p>#digpen is a grassroots movement for people who make websites and other digital things in the South West of England. #digpen is about collaboration, sharing, doing it for ourselves, and making some noise about the web community in Cornwall, Devon and beyond. Mostly we're developers and designers, but it doesn't matter if you're not. </p>

				<p>We like unconferences, design jams, hackdays, barcamps and local meetups. Our group ranges from students to people who've worked in the  industry for years. There's no official membership and no committee. If you want to be part of what's going on please sign up for the mailing list below, follow us on Twitter or <a href="mailto:digpen@digpen.com">email us</a>.</p>
			</div>
			<div id="newsletter_likes">
				<div id="newsletter">
					<h2>Newsletter</h2>
					<p>Sign up for our occasional newsletter, we promise we won’t spam you!</p>
					<p id="newsletter_signup">
						Email: <input type="text" id="email_address" /><br />
						<input type="button" id="signup" value="Sign up" />
						<div class="clear"><!-- --></div>
					</p>
				</div>
				<div id="likes">
					<h2>#digpen likes...</h2>
					<p><a href="http://www.linkedin.com/groups/South-West-UK-Web-Developers-3753579" target="_blank"> South West (UK) Web Developers - </a>LinkedIn discussion Group</p>
					<p><a href="http://www.meetup.com/Exeter-Web-Developers-Meetup/" target="_blank">Exeter Web Dev Meetup</a> - informal meetup roughly once a quarter.</p>
					<p><a href="http://explay.tumblr.com/">Explay</a> - indie games meetup. 1st Monday  every month. Plymouth.</p>
					<p><a href="http://plymouthjelly.co.uk/" target="_blank">Plymouth Jelly</a> - co-working. Last Thurs of every month.</p>
					<p><a href="http://www.facebook.com/popuppage/">Pop-Up</a> -  meetups for creatives &amp; geeks. Totnes,	Taunton	&amp;	Exeter.	</p>
				</div>
				<div class="clear"><!-- --></div>
			</div>
			<div id="contact">
				<h2>Contact the #digpen crew</h2>
				<p>#digpen is what we make it. If you'd like to be part of what we're doing, get in touch. Even if you can only help in a small way, it all makes a difference. </p>
				<p>To get involved or to get access to our skillmap listing web developers in the South West, email <a href="mailto:digpen@digpen.com">digpen@digpen.com</a>.</p>
				<? /*
				<div class="contact_female">
					Sophie Dennis<br />
					Cayenne, Princetown<br />
					<a href="https://www.twitter.com/sophiedennis" target="_blank">@sophiedennis</a><br />
				</div>
				
				<div class="contact_male">
					Andrew McSweeney<br />
					SwankyApple, Exeter<br />
					<a href="https://www.twitter.com/andrewmcsweeney" target="_blank">@andrewmcsweeney</a><br />
				</div>
				
				<div class="contact_female">
					Kat Smith<br />
					Iteracy, Lostwithiel<br />
					<a href="https://www.twitter.com/kat_e_smith" target="_blank">@kat_e_smith</a><br />
				</div>
				*/ ?>
			</div>
		</div>
	</body>
</html>