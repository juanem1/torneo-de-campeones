@extends('layout')

@section('content')
	<!-- PAGE TITLE -->
	<div class="page-title">Comunicate con nosotros</div>
	<!-- PAGE CONTAINER -->
	<section class="pagecontainer using-grid">
		<!-- GRID -->
		<div class="grid">
			<!-- LEFT SIDE -->
			<div class="unit two-thirds">
				<h2>Canchas</h2>
				<p><strong>CANCHA 1:</strong> Voluptate se quorum pariatur, qui esse quae hic excepteur hic dolor illustriora ingeniis dolor iudicem, officia varias malis iis minim. Qui duis fore minim nescius an quis familiaritatem possumus sint nescius a lorem singulis domesticarum, quibusdam an legam cernantur.</p>
				<!-- GOOGLE MAP -->
				<div class="flex-video">
					<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=new+york&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973&amp;output=embed&amp;iwloc=near"></iframe>
				</div>

				<p><strong>CANCHA 2:</strong> Proident quem non voluptate transferrem id se non fore iudicem, qui in duis sunt irure se ullamco quo multos. In ne varias magna velit quo aliqua deserunt domesticarum. Ita multos aliquip cohaerescant, velit ea quamquam ne irure aut an quis est ipsum, anim exquisitaque laboris cillum tempor. Irure appellat si aute nisi.</p>
				<!-- GOOGLE MAP -->
				<div class="flex-video">
					<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=new+york&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973&amp;output=embed&amp;iwloc=near"></iframe>
				</div>
			</div>
			<!-- RIGHT SIDE -->
			<div class="unit one-third">
				<h3>Contacto directo</h3>
				<ul class="list">
					<li><strong>Dirección:</strong> Velez Sarsfield 456</li>
					<li><strong>Teléfono:</strong> +54 9 0351 4265897</li>
					<li><strong>Celular:</strong> +54 9 351 6 543210</li>
				</ul>
				<h3>Ingresa tu consulta!</h3>
				<!-- CONTACT FORM -->
				<form id="contactForm" action="processform.php" method="post">
					<label>Tú nombre:</label>
					<input type="text" name="senderName" id="senderName" required="required" maxlength="40" />
					<label>Tú email:</label>
					<input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" />
					<label>Tú mensaje:</label>
					<textarea name="message" id="message" required="required"></textarea>
					<input type="submit" id="sendMessage" name="sendMessage" class="button" value="Enviar" />
				</form>
			</div>
		</div>
	</section>
	<div class="clear"></div>
	<!-- FOOTER -->
	@include('partials.footer')
@stop