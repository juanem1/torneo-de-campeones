<?php $provincia = isset($provincia) ? $provincia : 'tucuman'; ?>
<footer id="footer">
	<div class="clear"></div>
	<!-- COPYRIGHT -->
	<div class="credits">Torneo de campeones &copy; 2014 | Design by <a target="_blank" href="http://ideasbox.com.ar">ibox</a></div>
	<!-- SOCIAL ICONS -->
	<ul class="social-icons">
		@if ($provincia == 'cordoba')
        <li><a href="https://www.facebook.com/torneodecampeonescdba" target="_blank" ><img class="social-icon" src="/img/social-icons/facebook.png" alt="Facebook" /></a></li>
        @elseif ($provincia == 'catamarca')
        <li><a href="https://www.facebook.com/torneodecampeonescat" target="_blank" ><img class="social-icon" src="/img/social-icons/facebook.png" alt="Facebook" /></a></li>
        @else
        <li><a href="https://www.facebook.com/torneofrancomorales" target="_blank" ><img class="social-icon" src="/img/social-icons/facebook.png" alt="Facebook" /></a></li>
        @endif
		<!--li><a href="#"><img class="social-icon" src="/img/social-icons/twitter.png" alt="Twitter" /></a></li>
		<li><a href="#"><img class="social-icon" src="/img/social-icons/flickr.png" alt="Flickr" /></a></li>
		<li><a href="#"><img class="social-icon" src="/img/social-icons/linkedin.png" alt="Linked in" /></a></li>
		<li><a href="#"><img class="social-icon" src="/img/social-icons/google+.png" alt="Google+" /></a></li>
		<li><a href="#"><img class="social-icon" src="/img/social-icons/vimeo.png" alt="Vimeo" /></a></li>
		<li><a href="#"><img class="social-icon" src="/img/social-icons/youtube.png" alt="YouTube" /></a></li-->
	</ul>
</footer>
<!-- BACK TO TOP BUTTON -->
<a href="#" class="back-to-top"></a>