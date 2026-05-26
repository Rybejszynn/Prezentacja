<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Kot Perski</title>
    <meta name="description" content="Kot Perski">
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
					
					<img src="img/pe1.png" alt="kot" style="float: right; margin: 0 0 10px 10px;">
					<span class="bold2">Kot Perski</span><br/>
					<p>Kot perski to jedna z najbardziej rozpoznawalnych i majestatycznych ras na świecie, będąca synonimem kociej elegancji oraz arystokratycznego wyglądu. Jest to zwierzę średniej do dużej wielkości, o krępej, muskularnej budowie ciała typu cobby, osadzonym na krótkich, grubych i mocnych łapach zakończonych okrągłymi puszystymi stopami. Cechą najbardziej charakterystyczną persa jest jego głowa: okrągła, masywna, z szeroko rozstawionymi, małymi i nisko osadzonymi uszami oraz wyraźnie spłaszczonym pyszczkiem o mocno skróconym nosie z głębokim przełomem (tzw. stopem). Wielkie, okrągłe i szeroko otwarte oczy o niezwykle ufnym spojrzeniu mogą przybierać barwę miedzianą, zieloną lub niebieską, idealnie współgrającą z umaszczeniem. Wyglądu dopełnia zjawiskowa, niezwykle długa, gęsta i miękka w dotyku sierść z obfitym podszerstkiem, która wokół szyi tworzy imponującą kryzę, a na ogonie puszysty pióropusz. Rasa ta występuje w kilkuset wariantach kolorystycznych, od jednolitych białych, czarnych i rudych, przez szylkretowe, dymne, aż po wzorzyste typu colourpoint.</p>
					<p>Korzenie rasy perskiej giną w mrokach tajemnic historycznych, jednak oficjalne zapiski wskazują, że ich przodkowie przybyli do Europy w pierwszej połowie XVII wieku z dawnej Persji (dzisiejszy Iran) oraz Azji Mniejszej. Sprowadzenie tych długowłosych piękności przypisuje się włoskiemu podróżnikowi Pietro Della Valle, który zachwycił się nimi podczas swoich wypraw. Niedługo później podobne koty z Angory (dzisiejsza Ankara) sprowadził do Francji naukowiec Nicolas-Claude Fabri de Peiresc. Początkowo koty te krzyżowano ze sobą, a ich popularność na europejskich salonach eksplodowała w XIX wieku w wiktoriańskiej Anglii, gdzie stały się ulubieńcami samej królowej Wiktorii. To właśnie w Wielkiej Brytanii w 1871 roku zaprezentowano je na pierwszej oficjalnej wystawie kotów rasowych w Crystal Palace i tam też rozpoczęto ich systematyczną hodowlę. Przez kolejne dekady, zwłaszcza w USA, wizerunek persa ewoluował w stronę mocniejszego skrócenia partii twarzowej, co doprowadziło do wyselekcjonowania współczesnego, tak charakterystycznego typu tej rasy.</p>
					<p>Z charakteru kot perski jest uosobieniem spokoju, łagodności oraz flegmatycznego, wręcz stoickiego podejścia do życia. To typowy „kot kanapowy”, który ponad szalone bieganie i wspinaczki po najwyższych meblach przedkłada dostojny odpoczynek na miękkiej poduszce w pobliżu swojego właściciela. Są to zwierzęta niezwykle ciche, rzadko wokalizujące, a jeśli już wydają dźwięki, ich głos jest cichy, melodyjny i delikatny. Persy wykazują ogromne przywiązanie do swojej ludzkiej rodziny, są towarzyskie, ale nigdy nie bywają natrętne ani nachalne w domaganiu się pieszczot. Doskonale odnajdują się w domowym zaciszu, ceniąc sobie przewidywalność, ciszę oraz stały rytm dnia, dlatego hałaśliwe otoczenie może je stresować. Wykazują się ogromną cierpliwością i brakiem agresji, przez co świetnie dogadują się z innymi spokojnymi zwierzętami domowymi oraz starszymi dziećmi, które szanują ich przestrzeń. Mimo swojej pozornej obojętności, potrafią czerpać radość z delikatnej zabawy, jednak to relaks u boku człowieka jest ich ulubionym zajęciem.</p>
					<p>Pielęgnacja kota perskiego to prawdziwe wyzwanie i obowiązek, który wymaga od opiekuna ogromnej systematyczności, cierpliwości oraz wolnego czasu każdego dnia. Ze względu na specyficzną strukturę długiego futra z obfitym podszerstkiem, pers musi być czesany codziennie przy użyciu metalowego grzebienia i pudlówki, w przeciwnym razie jego sierść błyskawicznie zbije się w bolesne kołtuny, które trzeba będzie wycinać. Szczególnej uwagi wymagają także wielkie oczy oraz skrócony pyszczek – z powodu specyficznej budowy  anatomicznej kanaliki <img src="img/pe2.png" alt="kot" style="float: left; margin: 4px 10px 0 0;">łzowe persów często są zatkane, co prowadzi do łzawienia, dlatego oczy należy przemywać specjalnymi preparatami nawet kilka razy dziennie, by uniknąć infekcji i zacieków.  Dieta persa powinna być wysokomięsna i wilgotna, ułatwiająca przełykanie ze względu na budowę szczęki, a także bogata w składniki zapobiegające powstawaniu kul włosowych w przewodzie pokarmowym. Należy również regularnie kontrolować stan czystości okolic intymnych, które przy długim włosie mogą ulegać zabrudzeniu.</p>
					<p>Zakup kota perskiego z legalnej, zarejestrowanej w międzynarodowych federacjach (takich jak FIFE, WCF czy TICA) hodowli wiąże się ze sporym wydatkiem, który w zależności od renomy hodowli, linii genetycznej oraz przeznaczenia kota (na kolanka czy do dalszej hodowli) wynosi zazwyczaj od 3000 do nawet 6000 złotych i więcej. Kupując kota z rodowodem, zyskujemy pewność co do jego czystości rasy oraz faktu, że rodzice byli badani pod kątem groźnych chorób genetycznych, zwłaszcza wielotorbielowatości nerek (PKD), która jest plagą u persów. Zdecydowanie należy unikać tanich ofert z pseudohodowli, gdzie zwierzęta są rozmnażane bez badań i w złych warunków. Jeśli koszty zakupu są zbyt wysokie, warto skierować wzrok ku schroniskom oraz dedykowanym fundacjom (np. pomagającym kotom płaskonosym). Persy, ze względu na trudną pielęgnację, niestety dość często bywają porzucane przez nieodpowiedzialnych właścicieli. Adopcja takiego skrzywdzonego przez los, dorosłego persa to wspaniały gest, który owocuje zyskaniem niezwykle oddanego i wdzięcznego przyjaciela.</p>
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
