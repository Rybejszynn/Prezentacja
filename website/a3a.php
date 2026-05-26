<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sfinks</title>
    <meta name="description" content="Sfinks">
    <meta name="keywords" content="projekt, informatyka, LO1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Bartosz Celeszczuk">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="css/fontello.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap"  rel="stylesheet">
   
    <script type="text/javascript">
	  
	  function counting()
	  {
	    let clock = new Date();
	    let  hour = clock.getHours();
		if(hour<10) hour = "0"+hour;
	    let  minute = clock.getMinutes();
		if(minute<10) minute = "0"+minute;
	    let  second = clock.getSeconds();
		if(second<10) second = "0"+second;
	
	  document.getElementById("clock2").innerHTML = hour+":"+minute+":"+second;
	  setTimeout("counting()",1000);
	  }
	</script>
   </head>

  <body onload="counting();">
    <div id="container">
      <header>
	    <div class="header">
			<div id="h1"> Współczesne rasy kotów</div> 
			<div id="h2"> Zobacz nasze artykuły na temat ras kotów z całego globu</div>  
		</div>
	  </header>
	  <div class="menu1">
		<div id="logo">
			<img src="img/logo.png">
		</div>
		  <nav>
			<div id="menu2">
			  <ol class="menulist">
				<li>
				  <a href="strona-glowna" title="Powrót na stronę główną">
					Strona główna
				  </a>
				</li>
				<li>
				  Najpopularnejsze 
				  <ul>
					<li><a href="dachowiec">"dachowiec"</a></li>
					<li><a href="kot-perski">Perski</a></li>
					
				  </ul>
				</li>
				<li>
				  Długowłose
				  <ul>
					<li><a href="ragdoll">Ragdoll</a></li>
					<li><a href="kot-norwerski">Norwerski</a></li>
				  </ul>
				</li>
				<li>
				  Krótkowłose
				  <ul>
					<li><a href="kot-brytyjski-krotkowlosy">Brytyjski</a></li>
					<li><a href="kot-kartuski">Kartuski</a></li>
				  </ul>
				</li>
				<li>
				  Egzotyczne
				  <ul>
					<li><a href="sfinks">Sfinks</a></li>
					<li><a href="kot-devon-rex">Devon Rex</a></li>
					<li><a href="kot-savannah">Savannah</a></li>
				  </ul>
				</li>
			  </ol>
			</div>
		  </nav>
		  <div id="clock1">
		    <div id="clock2">
		      godzina
		    </div>
		  </div>
	  </div>
	  <div style="clear:both"></div>
	  <main>  
		<article>
		  <div id="sidebars">
			    <div id="sidebar1" style="margin-top:20px;">
					<span class="bold"> Zobacz również: </span>
					<a href="https://youtube.com" class="sbl" title="link" target="_blank">
					<div class="link1"> 
						Link1
					</div>
					</a>
					<a href="https://youtube.com" class="sbl" title="link" target="_blank">
					<div class="link1"> 
						link2
					</div>
					</a>
					<a href="https://youtube.com" class="sbl" title="link" target="_blank">
					<div class="link1"> 
						link3
					</div>
					</a>
					<a href="https://youtube.com" class="sbl" title="link" target="_blank">
					<div class="link1"> 
						link4
					</div>
					</a>	
			    </div>
			  <div style="clear:both"></div>
				<div class="sidebar2" style="height: 500px; margin-top: 10px;">
				<ol class="boxlist" style="padding: 0;">
					<li>
						<div id="browser">
							<form action="browser.php" method="post">
								<fieldset>
									<legend>Wyszukaj wpis</legend>
									<div><input type="text" id="text" name="link" placeholder="<?php $placeholder = "Wpisz nazwę artykułu";
									echo $placeholder ?>" required>
									<input type="submit" id="submit"  value="Szukaj" ></div>
									
								</fieldset>
							</form>
					    </div>
				    </li>
				</ol>
				</div>
			</div>
			<section>
				<div id="content">
					<img src="img/sf1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Sfinks Kanadyjski</span><br/>
					<p>Kot sfinks to bez wątpienia jedna z najbardziej oryginalnych i egzotycznych ras na świecie, która przyciąga wzrok swoim całkowicie unikalnym, wręcz kosmicznym wyglądem. Główną cechą wyróżniającą tego kota jest pozorna bezwłosość – w rzeczywistości jego skóra nie jest całkowicie naga, lecz pokryta delikatnym, niemal niewidocznym puchem, który w dotyku przypomina luksusowy zamsz lub ciepłą brzoskwinię. Sylwetka sfinksa jest średniej wielkości, lecz zaskakująco muskularna, z szeroką klatką piersiową i charakterystycznym, zaokrąglonym brzuchem, dającym efekt „najedzonego kotka”. Jego głowa ma kształt zmodyfikowanego klina o wyrazistych kościach policzkowych, ozdobiona gigantycznymi, szeroko rozstawionymi uśpionymi uszami, które przypominają uszy nietoperza. Kolejnym elementem przyciągającym uwagę są duże, skośnie osadzone oczy w kształcie cytryny, emanujące głębokim i inteligentnym spojrzeniem. Skóra sfinksa jest mocno pomarszczona, zwłaszcza wokół pyszczka, na czole, szyi oraz barkach, a brak wibrysów (wąsów) lub ich szczątkowa forma dopełnia ten niezwykły, mistyczny wizerunek.</p>
					<p>Wbrew powszechnym skojarzeniom z dawnym Egiptem, historia współczesnego sfinksa wcale nie narodziła się w cieniu piramid, lecz w mroźnej Kanadzie. Rasa ta jest stosunkowo młoda, a jej oficjalny początek datuje się na 1966 rok w Toronto, kiedy to w miocie zwykłej, krótkowłosej kotki domowej narodził się zupełnie nagi kocur o imieniu Prune. Zjawisko to było wynikiem spontanicznej, naturalnej mutacji genetycznej o charakterze recesywnym. Zafascynowani tym faktem hodowcy podjęli próby utrwalenia tej niezwykłej cechy poprzez krzyżowanie Prune’a z jego matką oraz innymi kotami, jednak pierwotna linia szybko wygasła z powodu problemów zdrowotnych. Przełom nastąpił w latach 70. XX wieku w Minnesota oraz ponownie w Kanadzie, gdzie znaleziono kolejne nagie koty, które skrzyżowano z rasą devon rex posiadającą podobne predyspozycje genetyczne. To właśnie te skrupulatnie prowadzone linie hodowlane dały początek znanej nam dzisiaj rasie sfinksa kanadyjskiego, która pod koniec lat 90. została oficjalnie uznana przez największe światowe federacje felinologiczne.</p>
					<p>Pod kontrowersyjnym i chłodnym wyglądem sfinksa kryje się jedno z najbardziej prospołecznych, gorących i wręcz uzależnionych od człowieka kocich serc. Sfinksy słyną ze swojego absolutnie wyjątkowego, „psiego” charakteru – są niesamowicie towarzyskie, czułe, radosne i pozbawione jakichkolwiek barier w kontaktach z ludźmi. Kochają być w centrum uwagi, witają domowników w drzwiach z głośnym mruczeniem, chodzą za nimi krok w krok i z pasją asystują przy każdej możliwej czynności. Z racji braku futra, sfinksy uwielbiają ciepło, dlatego ich ulubionym zajęciem jest spanie pod kołdrą z opiekunem, przesiadywanie na ludzkich kolanach lub tulenie się do szyi. Są to zwierzęta niezwykle inteligentne, aktywne i ciekawskie, które uwielbiają zabawy interaktywne, potrafią uczyć się sztuczek, a ich wesołe, cyrkowe akrobacje potrafią rozbawić każdego do łez. Doskonale dogadują się z dziećmi, psami oraz innymi kotami, wykazując się przy tym ogromną cierpliwością, brakiem agresji i ogromną empatią wobec nastrojów swojego właściciela.</p>
					<p>Opieka nad sfinksem diametralnie różni się od pielęgnacji kotów z tradycyjnym futrem i wymaga od opiekuna dużej dawki zaangażowania oraz systematyczności. Ponieważ skóra sfinksa produkuje sebum (łój skórny), które u innych kotów jest wchłaniane przez sierść, na ciele nagusa gromadzi się tłusta warstwa, którą należy regularnie usuwać. Kot ten wymaga kąpieli raz na dwa tygodnie przy użyciu delikatnych, dedykowanych szamponów dla zwierząt lub regularnego  przecierania  ciała wilgotnymi chusteczkami bezalkoholowymi. <img src="img/sf2.png" alt="kot" style="float: left; margin: 6px 10px 0 0;"> Szczególnej i codziennej  uwagi wymagają wielkie uszy oraz kąciki oczu, w których szybko odkłada się ciemna wydzielina,  a także fałdy skórne, podatne na odparzenia i infekcje bakteryjne. Sfinksy mają znacznie szybszą przemianę materii, ponieważ potrzebują więcej energii do utrzymania stałej temperatury ciała, co oznacza, że ich dieta musi być wysokokaloryczna, bogata w czyste mięso i podawana w częstszych, mniejszych porcjach. Zimą należy chronić je przed przeciągami, ubierając w specjalne kocie sweterki, natomiast latem unikać silnego słońca, by zapobiec oparzeniom skóry.</p>
					<p>Zakup rodowodowego sfinksa kanadyjskiego z profesjonalnej, zarejestrowanej w międzynarodowych organizacjach (takich jak FIFE, TICA, WCF) hodowli to spory wydatek, kształtujący się zazwyczaj w granicach od 4000 do nawet 7000 złotych za kota w opcji „na kolanka”. Wysoka cena jest w pełni uzasadniona ogromnymi kosztami opieki nad kotkami i młodymi oraz koniecznością wykonywania regularnych, specjalistycznych badań kardiologicznych rodziców (przede wszystkim echokardiografii serca w celu wykluczenia kardiomiopatii przerostowej HCM). Należy kategorycznie unikać podejrzanie tanich ogłoszeń z pseudohodowli, gdyż niefachowe krzyżowanie tych kotów prowadzi do ciężkich wad genetycznych i chorób skóry. Ze względu na specyficzne wymagania pielęgnacyjne i zdrowotne, sfinksy czasami trafiają do adopcji – bywają porzucane przez osoby, które przeceniły swoje możliwości. Szukanie sfinksa w schroniskach czy na stronach fundacji dedykowanych kotom bezwłosym to wspaniała i szlachetna droga, pozwalająca podarować dom stworzeniu, które nad życie potrzebuje ludzkiego ciepła.</p>
				</div> 
			</section>
			<aside>
			<div class="sidebar2" style="height:796px;">
				<a href="https://adsense.google.com/intl/pl_pl/start/" title="Wciąż nic tu nie ma" target="_blank" class="adlink">
				<div class="ad">
					<span class="bold">Miejsce na reklamy<br/>Miejsce na reklamy<br/>Miejsce na reklamy<br/>Miejsce na reklamy</span>
				</div>
				</a>
			</div>
		</aside>
		</article>
	  </main>  
	  <div style="clear:both"></div>
	  <footer>
		  <div id="footer1"> 
		    <div class="social">
				<a href="https://youtube.com" class="sociallink" target="_blank" title="Nasze konto LEGO">  
				  <div id="social1">
					<i class="icon-lego"><br/>LEGO</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://youtube.com" class="sociallink" target="_blank" title="Nasze konto Facebook"> 
				  <div id="social2">
					<i class="icon-facebook"><br/>FaceBook</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://youtube.com" class="sociallink" target="_blank" title="Nasze konto X">
				 <div id="social3">
					<i class="icon-twitter"><br/>X</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://youtube.com" class="sociallink" target="_blank" title="Nasze konto Youtube">
				  <div id="social4">
					<i class="icon-youtube"><br/>YouTube</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://youtube.com" class="sociallink" target="_blank" title="Nasze konto Reddit">
				  <div id="social5">
					<i class="icon-reddit"><br/>Reddit</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://youtube.com" class="sociallink" target="_blank" title="Nasze konto Bitcoin">
				  <div id="social6">
					<i class="icon-bitcoin"><br/>BitCoin</i>
				  </div>
				</a>
			</div>
		  </div> 
		  <div id="footer2">
	        &copy; 2026 JDOZ. Wszelkie prawa zastrzeżone.
	      </div>
		</footer>
	</div>
	
<script>
document.querySelectorAll('ol.boxlist > li > ul > li.li > a').forEach(function(button) {
    button.addEventListener('click', function(e) {
        e.preventDefault();

        const targetSelector = this.dataset.target;
        const targetElement = document.querySelector(targetSelector);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });

            targetElement.classList.add('overlay');

            setTimeout(() => {
                targetElement.classList.remove('overlay');
            }, 1000);
        }
    });
});
</script>

  </body>


</html>
