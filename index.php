<?php include 'header.php'; ?>
<style>
		/* Prevents slides from flashing */
	#slides {
		display: none;
	}
</style>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="script/jquery.slides.min.js"></script>

<script>
	$(function () {
		$("#slides").slidesjs({
			width: 760,
			height: 280,
			play: {
				active: true,
				// [boolean] Generate the play and stop buttons.
				// You cannot use your own buttons. Sorry.
				effect: "slide",
				// [string] Can be either "slide" or "fade".
				interval: 5000,
				// [number] Time spent on each slide in milliseconds.
				auto: true,
				// [boolean] Start playing the slideshow on load.
				swap: true,
				// [boolean] show/hide stop and play buttons
				pauseOnHover: true,
				// [boolean] pause a playing slideshow on hover
				restartDelay: 2500
				// [number] restart delay on inactive slideshow
			}
		});
	});
</script>
<h1>Wir lieben es, unsere Kunden zu begeistern</h1>

<div id="slideplaceholder">
	<div id="slides">
		<img src="gfx/home/slide1.jpg">
		<img src="gfx/home/slide2.jpg">
		<img src="gfx/home/slide3.jpg">
	</div>
</div>

<ul class="love">
	<li>
		<img src="gfx/home/detail.png"/>

		<div>
			Wir lieben das Detail
		</div>
	</li>
	<li>
		<img src="gfx/home/forderung.png"/>

		<div>
			Wir lieben die Herausforderung
		</div>
	</li>
	<li>
		<img src="gfx/home/beruf.png"/>

		<div>
			Wir lieben unseren Beruf
		</div>
	</li>
</ul>
<p class="we">
	Wir, die Vielmetter GbR, sind ein Meisterbetrieb rund um das Bauhandwerk mit Schwerpunkt auf Fliesenleger- und
	Maurerarbeiten.
	Wir sind ein solides, schwäbisches Unternehmen, das sowohl Wert auf Tradition legt als auch auf dem neusten Stand
	der Technik arbeitet.
	Wir wollen unsere Kunden nicht nur zufrieden stellen, wir wollen Sie, unseren Kunden, begeistern!
	Wir sind ehrlich und beraten Sie offen und transparent. Und wir hassen leere Floskeln.
</p>

<h2>Geschichte</h2>
Vielmetter wurde 2008 von <a href="team.php#elmar">Elmar Vielmetter</a> und <a href="team.php#dominik">Dominik
	Rieß</a> gegründet.
Die Zusammenarbeit zwischen den beiden beginnt aber schon früher. Elmar gründete nach erfolgreicher
Meisterprüfung im Jahr 2000 eine eigene Firma als Fliesenlegermeister.
Nach der erfolgreichen Meisterprüfung zum Maurermeister gründet Dominik Rieß im Jahr 2003 ebenfalls seine eigene
Firma.
In den darauf folgenden Jahren wird die Zusammenarbeit zwischen den beiden immer enger, so dass beide sich 2008
dazu entschliessen,
zusammen die Firma Vielmetter GbR zu gründen.
In den fünf Jahren ihres Bestehens konnte die Vielmetter GbR kontinuierlich aber gesund wachsen, so dass wir
Jahr für Jahr wertvolle neue Mitarbeiter begrüßen durften.
Unsere Firma hat ein Gesicht. Machen Sie sich selbst <a href="team.php">ein Bild davon</a>.

<h2>Darum sind wir der richtige Ansprechpartner</h2>
<ul class="partner">
	<li>
		Wir bieten ein umfassendes <a href="work.php">Spektrum an Leistungen</a> rund um Aufbau und Renovierung.
	</li>
	<li>
		Selbst wenn wir einmal nicht mehr weiter wissen: Wir haben ein ausgedehntes und vielfach praxiserprobtes
		Partnernetzwerk
	</li>
	<li>
		Wir denken für Sie mit und voraus. Wir überlegen mit Ihnen, wie Ihr Wunschobjekt fertig aussehen soll und
		legen zusammen mit Ihnen die notwendigen Schritte fest, um Ihr Ziel gemeinsam zu erreichen.
	</li>
	<li>
		Wir sind ein flexibles, dynamisches und hochqualifiziertes Team
	</li>
	<li>
		Wir arbeiten mit einer Vielfalt an <a href="work.php#staubfrei">hochwertigen Werkzeugen</a> auf dem neuesten
		Stand der Technik
	</li>
	<li>
		Wie unser ehemaliger Staatsminister bereits sagte: Wir können alles außer Hochdeutsch
	</li>
</ul>


<p class="contactUs">
	Haben Sie Fragen? Wir beantworten Sie Ihnen gerne per Mail an
	<a href="mailto:info@e-vielmetter.de">info@e-vielmetter.de</a>
	oder per Telefon unter <span class="linkColor">0711 577 05 56</span>
</p>

<?php include 'footer.php'; ?>
