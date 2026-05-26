<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Dachowiec</title>
    <meta name="description" content="Dachowiec">
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
					<img src="img/da1.png" alt="kot" style="float: right; margin: 0 0 10px 10px;">
					<span class="bold2">Kot rasy mieszanej</span><br/> 
					<p>Kot nierasowy, potocznie i niezwykle sympatycznie nazywany dachowcem, to prawdziwa genetyczna loteria oraz festiwal kociej różnorodności. Ze względu na brak rygorystycznych wzorców rasy, osobniki te mogą przybierać niemal każdy możliwy kształt, rozmiar i umaszczenie. Spotkamy wśród nich zarówno filigranowe, gibkie kotki, jak i potężne, muskularne kocury o wadze przekraczającej nawet 6–7 kilogramów. Ich sierść jest najczęściej krótka, gęsta i lśniąca, choć ze względu na domieszki genów kotów długowłosych zdarzają się osobniki o puszystej kicie czy kryzie wokół szyi. Paleta barw dachowców jest wręcz nieograniczona: od klasycznych, tygrysio pręgowanych (burasów), przez eleganckie czernie, śnieżne biele, energetyczne rudzielce, aż po trójkolorowe kotki szylkretowe (calico) i urocze „krówki”. Oczy dachowców, duże i pełne wyrazu, mienią się odcieniami zieleni, żółci, bursztynu, a u osobników z przewagą bieli bywają nawet błękitne lub różnobarwne. Ta unikalność sprawia, że każdy kot mieszany jest absolutnie jedyny w swoim rodzaju.</p>
					<p>Historia kota domowego nierasowego sięga tysięcy lat wstecz i jest nierozerwalnie związana z rozwojem ludzkiej cywilizacji. Bezpośrednim przodkiem tych zwierząt jest kot nubijski (Felis lybica), który zamieszkiwał obszary Bliskiego Wschodu i Afryki Północnej. To właśnie tam, w rejonie Żyznego Półksiężyca około 9–10 tysięcy lat temu, rozpoczęła się niezwykła relacja człowieka z kotem, wywołana potrzebą ochrony zapasów ziarna przed gryzoniami. W starożytnym Egipcie koty zyskały status istot boskich, a stamtąd, na pokładach fenickich i rzymskich statków handlowych, ruszyły na podbój Europy i reszty świata. Dachowce nie są efektem celowej, sztucznej selekcji hodowlanej prowadzonej przez człowieka, lecz rezultatem setek lat naturalnego przystosowywania się do trudnych warunków środowiskowych. Przez wieki cenione głównie za swoje talenty łowieckie, przetrwały dzięki sprytowi, odporności i doskonałemu zdrowiu, stając się najpopularniejszymi towarzyszami ludzi na całym globie.</p>
					<p>Charakter kota nierasowego jest tak samo nieprzewidywalny i fascynujący, jak jego wygląd zewnętrzny, co czyni obcowanie z nim niesamowitą przygodą. Ponieważ pula genetyczna jest ogromna, w jednym miocie mogą urodzić się zarówno wielkie pieszczochy, jak i zdystansowani, niezależni indywidualiści. Generalnie jednak dachowce słyną z ogromnej inteligencji, bystrości oraz doskonale rozwiniętego instynktu przetrwania, co przekłada się na ich kreatywność w codziennej zabawie. Są to zwierzęta niezwykle ciekawe świata, energiczne i elastyczne – potrafią szybko dostosować się do nowych warunków mieszkaniowych czy rytmu dnia swojego opiekuna. Wiele z nich wykazuje ogromne przywiązanie do człowieka, potrafiąc głośnym mruczeniem domagać się uwagi, asystować przy domowych obowiązkach i spać w łóżku właściciela. Jednocześnie potrafią jasno stawiać granice i potrzebują przestrzeni, w której mogą odpocząć w samotności. Ich instynkt łowiecki pozostaje bardzo silny, dlatego uwielbiają polowania na wędki, piórka czy uciekające myszki z kocimiętką.</p>
					<p>Opieka nad kotem nierasowym jest stosunkowo prosta, co nie oznacza, że można ją traktować po macoszemu. Z racji tego, że większość dachowców ma krótką sierść, ich pielęgnacja ogranicza się do wyczesywania raz w tygodniu (w okresie linienia nieco częściej),  aby usunąć martwy włos i zapobiec tworzeniu się kul włosowych w żołądku. Kluczowym elementem opieki jest zbilansowana dieta bogata w mięso, dostosowana do wieku, wagi oraz poziomu aktywności kota – dachowce, zwłaszcza po zabiegu kastracji, mogą mieć tendencję do nadwagi.<img src="img/da2.png" alt="kot" style="float: left; margin: 4px 10px 0 0;"> Bardzo ważna jest profilaktyka weterynaryjna: regularne odrobaczanie, szczepienia ochronne oraz coroczne badania krwi. Z racji ich wysokiej inteligencji i energii, opiekun musi zadbać o stymulację psychiczną i fizyczną. Niezbędny jest stabilny, wysoki drapak, bezpieczne zabawki oraz zabezpieczenie okien i balkonu siatką, co uchroni ciekawskiego czworonoga przed niebezpiecznym upadkiem podczas obserwacji ptaków.</p>
					<p>Tradycyjny zakup kota nierasowego w sensie komercyjnym na szczęście nie istnieje – handlowanie „dachowcami” za pieniądze jest nielegalne i nieetyczne, gdyż rasowy kot to wyłącznie taki, który posiada rodowód uznanej federacji felinologicznej. Jeśli ktoś żąda pieniędzy za kota bez rodowodu, mamy do czynienia z pseudohodowlą, której pod żadnym pozorem nie należy wspierać. Kwota, jaką przyjdzie nam zapłacić za dachowca, to zazwyczaj symboliczna opłata adopcyjna w schronisku (często pokrywająca koszty szczepień czy kastracji), wynosząca od kilkudziesięciu do około dwustu złotych, bądź też darmowe przygarnięcie zwierzaka z ogłoszenia. Schroniska dla zwierząt, przytuliska oraz fundacje prozwierzęce pękają w szwach od cudownych dachowców w każdym wieku – od malutkich kuleczek po statecznych seniorów. Szukanie przyjaciela w takich miejscach jest najlepszą możliwą decyzją; nie tylko ratujemy w ten sposób kocie życie, ale zyskujemy wiernego, zdrowego i ogromnie wdzięcznego towarzysza na długie lata.</p>
					
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
