<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Kot Brytyjski Krótkowłosy</title>
    <meta name="description" content="Kot Brytyjski Krókowłosy">
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
					<img src="img/bk1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Kot Brytyjski krótkowłosy</span><br/>
					<p>Kot brytyjski krótkowłosy to największy spośród wszystkich kotów krótkowłosych, zachwycający swoją zwartą, mocną i niezwykle proporcjonalną budową ciała. Sylwetka tego kota, określana często mianem cobby, opiera się na szerokiej klatce piersiowej, muskularnych barkach oraz krótkich, silnych łapach zakończonych masywnymi, okrągłymi stopami. Głowa brytyjczyka jest idealnie okrągła, z wyraźnie zaznaczonymi, pełnymi policzkami (szczególnie u kocurów), szeroko rozstawionymi uszami oraz charakterystycznym fałdem skóry na podgardlu. Elementem przyciągającym największą uwagę są ogromne, okrągłe oczy, które u większości odmian barwnych mają głęboki, miedziany lub pomarańczowy odcień. Kolejną unikalną cechą rasy jest jej futro – krótkie, niesamowicie gęste, sprężyste i odstające od ciała, które w dotyku przypomina luksusowy, pluszowy dywan. Chociaż najbardziej klasyczną i rozpoznawalną odmianą jest kot brytyjski niebieski, rasa ta występuje w blisko 150 wariantach kolorystycznych, w tym czarnym, liliowym, czekoladowym, a także w wersjach pręgowanych i szylkretowych.</p>
					<p>Historia kota brytyjskiego jest długa i sięga czasów Cesarstwa Rzymskiego, kiedy to legiony rzymskie najechały na Wyspy Brytyjskie, zabierając ze sobą egipskie koty domowe do ochrony zapasów żywności. Na przestrzeni wieków te sprowadzone czworonogi krzyżowały się z lokalnymi kotami dzikimi, co w surowym wyspiarskim klimacie doprowadziło do wykształcenia odpornych, silnych zwierząt o gęstym futrze. Oficjalne narodziny rasy jako fenomenu hodowlanego datuje się na drugą połowę XIX wieku, a kluczową postacią w jej rozwoju był Harrison Weir, ojciec nowoczesnej felinologii, który zachwycił się tymi pospolitymi dotąd kotami i zaprezentował je na pierwszej wystawie w Crystal Palace w 1871 roku. Wojny światowe doprowadziły rasę na skraj wyginięcia, co zmusiło hodowców do krzyżowania nielicznych ocalałych osobników z kotami perskimi oraz kartuskimi. Te krzyżówki nie tylko uratowały populację, ale nadały brytyjczykom współczesny, bardziej krępy wygląd, masywniejszą głowę oraz niespotykaną wcześniej puszystość i miękkość okrywy włosowej.</p>
					<p>Z charakteru kot brytyjski to uosobienie angielskiego dystyngowania, spokoju oraz zrównoważonego podejścia do życia. Jest to zwierzę niezwykle powściągliwe, ciche i bezkonfliktowe, które rzadko okazuje silne emocje czy wokalizuje bez wyraźnej potrzeby. Brytyjczyki bardzo mocno przywiązują się do swoich opiekunów i uwielbiają przebywać w ich towarzystwie, jednak zachowują przy tym zdrową dawkę niezależności – nie są natrętne i rzadko domagają się noszenia na rękach, preferując leżenie obok człowieka na kanapie. Cechują się umiarkowanym poziomem aktywności; jako kocięta bywają energiczne, lecz z wiekiem stają się statecznymi kanapowcami, które większość dnia spędzają na drzemkach. Ze względu na swój niezwykle łagodny i cierpliwy charakter, doskonale odnajdują się w domach z dziećmi oraz bez problemu akceptują obecność innych zwierząt, zarówno kotów, jak i psów. Nie wykazują skłonności do niszczenia mebli czy skoków na wysokie szafy, zdecydowanie bardziej ceniąc sobie bezpieczną stabilność podłogi.</p>
					<p>Pielęgnacja kota brytyjskiego krótkowłosego jest stosunkowo mało skomplikowana, lecz wymaga regularności, aby utrzymać jego pluszowe futro w doskonałej kondycji. Z racji niesamowitej gęstości okrywy włosowej i obfitego podszerstka, brytyjczyka należy dokładnie wyczesywać raz w tygodniu przy użyciu gęstego grzebienia lub miękkiej szczotki z włosia, natomiast w okresie linienia zabieg ten warto powtarzać nawet co dwa dni, by zapobiec połykaniu martwych włosów.  Najważniejszym aspektem opieki nad tą rasą jest ścisła kontrola diety; ze względu na wrodzony flegmatyczny <img src="img/bk2.png" alt="kot" style="float: left; margin: 10px 10px 0 0;"> styl życia oraz tendencję do obżarstwa, brytyjczyki bardzo łatwo przybierają na wadze, co prowadzi do groźnej otyłości. Posiłki powinny być wysokomięsne, ściśle porcjowane i ubogie w węglowodany. Ponadto, ze względu na specyficzną budowę głowy, należy regularnie kontrolować czystość uszu oraz kącików oczu, a także zapewniać kotu stały dostęp do świeżej wody, co chroni jego układ moczowy przed powstawaniem kamieni struwitowych.</p>
					<p>Zakup kota brytyjskiego krótkowłosego z profesjonalnej, zarejestrowanej w międzynarodowych federacjach hodowli (np. FIFE, TICA, WCF) wiąże się z wydatkiem rzędu od 3500 do 6000 złotych za opcję „na kolanka”. Cena ta odzwierciedla koszty opieki weterynaryjnej, odpowiedniego żywienia oraz kluczowych badań genetycznych rodziców w kierunku kardiomiopatii przerostowej (HCM) oraz wielotorbielowatości nerek (PKD), które są częstymi schorzeniami u tej rasy. Przestrzegamy przed podejrzanie tanimi ofertami bez oficjalnego rodowodu – wspieranie pseudohodowli skutkuje zakupem zwierzęcia schorowanego lub z wadami behawioralnymi. Dla osób o skromniejszym budżecie świetną alternatywą jest adopcja. Brytyjczyki, jako jedna z najpopularniejszych ras, niestety bywają porzucane przez nieodpowiedzialnych ludzi, dlatego stosunkowo często można je znaleźć na stronach fundacji zajmujących się ratowaniem kotów rasowych lub w schroniskach. Przygarnięcie takiego dorosłego pluszaka to wspaniały czyn, dający ogromną satysfakcję i wiernego przyjaciela na lata.</p>
					
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
