<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Kot Norweski leśny</title>
    <meta name="description" content="Kot Norweski leśny">
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
					<img src="img/nl1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Kot Norweski Leśny</span><br/>
					<p>Kot norweski leśny to duży, potężny i niezwykle harmonijnie zbudowany czworonóg, którego wygląd odzwierciedla surowy, skandynawski klimat, z którego się wywodzi. Charakteryzuje się mocną, wydłużoną sylwetką, głęboką klatką piersiową oraz silnym kośćcem, przy czym jego tylne łapy są zauważalnie dłuższe od przednich, co czyni go genialnym skoczkiem. Dorosłe kocury osiągają imponującą wagę od 6 do nawet 9 kilogramów. Głowa ma unikalny kształt trójkąta równobocznego o prostym profilu, bez zaznaczonego przełomu u nasady nosa, ozdobiona dużymi uszami z urokliwymi pędzelkami przypominającymi te u rysia. Największym atutem rasy jest jej dwuwarstwowa, wodoodporna sierść: gęsty, wełnisty podszerstek izoluje od mrozu, a długi, błyszczący i oleisty włos okrywowy chroni przed deszczem i śniegiem. W okresie zimowym koty te zyskują spektakularną, puszystą kryzę wokół szyi oraz bogate „portki” na tylnych nogach, a ich wygląd dopełnia długi, imponujący ogon. Rasa ta występuje w niemal wszystkich odmianach barwnych, z wyjątkiem oznaczeń typu syjamskiego.</p>
					<p>Pochodzenie kota norweskiego leśnego (znanego w ojczyźnie jako Norsk Skogkatt) jest zakorzenione w norweskich mitach i legendach, gdzie olbrzymie koty miały ciągnąć podniebny powóz bogini płodności i miłości, Freyi. W rzeczywistości rasa ta ukształtowała się bez ingerencji człowieka – jej przodkami były prawdopodobnie koty krótkowłose sprowadzone z Wielkiej Brytanii przez wikingów oraz koty długowłose przywiezione przez krzyżowców, które z biegiem stuleci przystosowały się do surowych warunków norweskiej tajgi. Przez wieki koty te pełniły funkcję niezrównanych łowców gryzoni w skandynawskich gospodarstwach wiejskich. Dopiero w latach 30. XX wieku podjęto pierwsze próby ochrony tej rodzimej rasy przed wyginięciem na skutek krzyżowania z kotami domowymi, jednak wybuch II wojny światowej przerwał te działania. Oficjalny program hodowlany reaktywowano w latach 70., a w 1977 roku król Olaf V ogłosił kota norweskiego leśnego oficjalnym, narodowym kotem Norwegii, co otworzyło mu drzwi do międzynarodowych salonów.</p>
					<p>Z charakteru kot norweski leśny to idealny balans pomiędzy niezależnością dzikiego drapieżnika a bezgranicznym przywiązaniem domowego pieszczocha. Są to zwierzęta niezwykle zrównoważone, odważne, pewne siebie i pozbawione agresji, które świetnie adaptują się do zmiennych warunków otoczenia. Choć bardzo mocno kochają swoją ludzką rodzinę i chętnie towarzyszą jej w codziennych czynnościach, rzadko bywają nachalne i potrafią cierpliwie czekać na swoją kolej do pieszczot. Posiadają silny instynkt terytorialny i łowiecki, są niezwykle inteligentne, ciekawskie oraz aktywne, przez co uwielbiają wszelkie zabawy strategiczne i ruchowe. Charakterystyczną cechą rasy jest zamiłowanie do wysokości – ze względu na specyficzną anatomię łap, jako jedne z nielicznych kotów potrafią schodzić z drzew głową w dół i z pasją zdobywają najwyższe punkty w mieszkaniu. Doskonale dogadują się z dziećmi oraz innymi zwierzętami, w tym z psami, pod warunkiem poszanowania ich kocie godności.</p>
					<p>Mimo że futro kota norweskiego leśnego wygląda na niezwykle wymagające, w rzeczywistości jego pielęgnacja jest prostsza niż u persów, ponieważ włos okrywowy ma naturalne właściwości zapobiegające  kołtunieniu. Poza okresem intensywnego, wiosennego linienia, kiedy to kot zrzuca niemal cały zimowy podszerstek i wymaga codziennego szczotkowania, zazwyczaj wystarczy dokładne wyczesanie sierści raz w tygodniu za pomocą metalowego grzebienia. Dieta norwega musi być bogata w wysokiej jakości białko zwierzęce i tłuszcze, aby utrzymać jego muskularną sylwetkę oraz zapewnić zdrowie i blask gęstemu owłosieniu. <img src="img/nl2.png" alt="kot" style="float: left; margin: 10px 10px 0 0;">  Ze względu na wrodzoną potrzebę wspinaczki i obserwacji terenu z góry, absolutnym obowiązkiem opiekuna jest zakup solidnego, sufitowego drapaka o grubych słupach, który wytrzyma ciężar skaczącego, dużego kota. Warto także zabezpieczyć okna oraz balkon mocną siatką, ponieważ ich łowiecki instynkt może popchnąć te odważne zwierzęta do niebezpiecznego skoku za przelatującym ptakiem.</p>
					<p>Zakup rodowodowego kota norweskiego leśnego z profesjonalnej hodowli zrzeszonej w uznanych federacjach (FIFE/WCF/TICA) wiąże się obecnie z kosztem rzędu od 3500 do 6000 złotych za opcję „na kolanka”. Wyższa cena często dotyczy kotów o wyjątkowych predyspozycjach wystawowych lub unikalnym umaszczeniu. Renomowani hodowcy przeznaczają te fundusze na kosztowne badania genetyczne rodziców w kierunku chorób spichrzeniowych (GSD IV) oraz kardiomiopatii przerostowej (HCM), co gwarantuje zdrowie malucha. Należy stanowczo unikać ogłoszeń oferujących „norwegi bez rodowodu” za kilkaset złotych, gdyż wspiera to okrutny proceder pseudohodowli. Zamiast tego warto sprawdzić lokalne schroniska oraz grupy adopcyjne dedykowane kotom leśnym – z powodu ludzkich zdarzeń losowych te wspaniałe olbrzymy czasami tracą dach nad głową. Adopcja dorosłego kota norweskiego leśnego to szansa na zyskanie dumnego, niezwykle lojalnego i fascynującego towarzysza, który wniesie do domu magię skandynawskich lasów.</p>
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
