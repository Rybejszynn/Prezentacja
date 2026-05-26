<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Kot Kartuski</title>
    <meta name="description" content="Kot Kartuski">
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
					<img src="img/ka1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Kot Kartuski (Chartreux)</span><br/>
					<p>Kot kartuski, znany również jako chartreux, to rasa średniej do dużej wielkości, która na pierwszy rzut oka emanuje siłą, elegancją oraz zrównoważoną potęgą. Jego ciało jest niezwykle krępe, muskularne i mocne, z szeroką klatką piersiową oraz silnym kośćcem, co sprawia, że kot ten jest zaskakująco ciężki w stosunku do swoich wymiarów – dorosłe kocury mogą ważyć od 6 do nawet 7,5 kilograma. Charakterystyczna głowa o kształcie odwróconego trapezu posiada łagodne kontury, a specyficzny układ pyszczka i pełnych policzków sprawia, że kot ten wygląda, jakby się nieustannie, uroczo uśmiechał. Prawdziwą ozdobą rasy są duże, okrągłe, niezwykle wyraziste oczy o barwie od głębokiego bursztynu do intensywnego złota, w których nie dopuszcza się żadnych domieszek zieleni. Futro kartuza jest krótkie, niezwykle gęste, puszyste i posiada wełnistą strukturę z obfitym podszerstkiem, co zapewnia mu doskonałą wodoodporność. Umaszczenie jest wyłącznie jednolicie niebieskie – dopuszczalne są wszelkie odcienie szarości, od jasnopopielatego po ciemny, łupkowy kolor, pod warunkiem, że barwa jest idealnie czysta i równomierna na całym ciele.</p>
					<p>Historia kota kartuskiego jest jedną z najstarszych wśród europejskich ras i obrosła wieloma fascynującymi legendami, które do dziś budzą emocje wśród historyków felinologii. Jedna z najpopularniejszych opowieści głosi, że przodkowie tych kotów zostali sprowadzeni w XIII wieku z górzystych rejonów dzisiejszego Iranu i Syrii przez rycerzy powracających z wypraw krzyżowych. Koty te miały trafić do klasztoru Wielkiej Kartuzji (Grande Chartreuse) we francuskich Alpach, gdzie mnisi kartuzi hodowali je ze względu na ich niezwykłe talenty łowieckie oraz wełniste futro. Choć współczesne badania podają w wątpliwość bezpośredni udział zakonników w celowej hodowli, nazwa rasy pojawiła się już w XVIII-wiecznych słownikach przyrodniczych, opisując szare koty z Francji. Po I wojnie światowej rasa znalazła się na skraju wyginięcia, jednak dzięki staraniom sióstr Christine i Suzanne Léger, które odkryły naturalną kolonię tych zwierząt na wyspie Belle-Île, rozpoczęto oficjalny program hodowlany. Współczesny chartreux jest dumą francuskiej felinologii i symbolem narodowym tego kraju.</p>
					<p>Z charakteru kot kartuski to uosobienie spokoju, dyskrecji oraz stoickiego wręcz opanowania, co czyni go idealnym i niekłopotliwym towarzyszem codziennego życia. Słynie z tego, że jest kotem niezwykle cichym – rzadko miauczy, a swoje emocje czy prośby wyraża delikatnym, niemal bezgłośnym świergotaniem lub po prostu wymownym spojrzeniem wielkich, bursztynowych oczu. Kartuz wykazuje ogromne, wręcz psie przywiązanie do wybranego opiekuna, chodząc za nim krok w krok, jednak nigdy nie wykazuje cech natręctwa czy chorobliwej zazdrości. Posiada doskonale rozwinięty instynkt łowiecki, jest niezwykle sprytny, inteligentny i uwielbia zabawy w aportowanie zabawek, wykazując przy tym niebywałą skoczność i zwinność. Mimo swojej dużej siły fizycznej, w kontaktach z ludźmi jest niezwykle delikatny, cierpliwy i pozbawiony jakiejkolwiek agresji, dzięki czemu doskonale dogaduje się z dziećmi oraz innymi zwierzętami domowymi. Bardzo dobrze znosi samotność podczas nieobecności właścicieli w pracy, spędzając ten czas na spokojnym wypoczynku.</p>
					<p>Opieka nad kotem kartuskim nie nastręcza wielu trudności, pod warunkiem zachowania systematyczności, zwłaszcza w kwestii dbania o jego unikalne, wełniste futro. Ze względu na ogromną gęstość podszerstka, kota tego należy dokładnie wyczesywać raz w tygodniu przy użyciu metalowego grzebienia o średnim rozstawie zębów oraz miękkiej szczotki, co pozwala skutecznie usunąć martwy włos. <img src="img/ka2.png" alt="kot" style="float: left; margin: 10px 10px 0 0;"> W okresie wiosennego linienia zabieg ten warto powtarzać częściej, ponieważ chartreux potrafi zrzucić imponującą ilość okrywy włosowej, co zwiększa ryzyko tworzenia się kul włosowych w żołądku. Rasa ta ma wrodzony, doskonały apetyt i tendencję do szybkiego przybierania na wadze, dlatego dieta musi być ściśle kontrolowana, oparta na wysokomięsnych karmach bytowych o niskiej zawartości węglowodanów. Ważnym elementem opieki jest zapewnienie kotu stymulacji umysłowej poprzez zabawki interaktywne i drapaki, a także regularna profilaktyka weterynaryjna, w tym coroczne badania krwi i kontrola stanu zdrowia zębów oraz dziąseł.</p>
					<p>Zakup rodowodowego kota kartuskiego z profesjonalnej, etycznej hodowli zrzeszonej w strukturach uznanych federacji felinologicznych (takich jak FIFE, WCF czy TICA) to wydatek rzędu od 4000 do 6000 złotych za opcję „na kolanka”. Ponieważ rasa ta jest w Polsce stosunkowo rzadka i często mylona z popularnym kotem brytyjskim, niezwykle ważne jest weryfikowanie dokumentów i unikanie tańszych ofert z pseudohodowli, które oferują zwierzęta bez rodowodów. Prawdziwy rodowód gwarantuje czystość rasy oraz zdrowie genetyczne, w tym wolność od wad serca czy rzepki kolanowej. Z powodu mniejszej popularności rasy w naszym kraju, znalezienie czystorasowego kartuza bezpośrednio w schronisku graniczy z cudem, jednak czasami dorosłe osobniki trafiają pod opiekę fundacji zajmujących się ratowaniem kotów rasowych na skutek trudnych sytuacji życiowych dotychczasowych właścicieli. Adopcja takiego dojrzałego kota to szansa na podarowanie bezpiecznego schronienia niezwykle dumnemu, mądremu i oddanemu stworzeniu, które odwdzięczy się bezgraniczną miłością.</p>
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
