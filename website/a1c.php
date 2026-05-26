<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Ragdoll</title>
    <meta name="description" content="Ragdoll">
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
					
					<img src="img/rd1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Kot Ragdoll</span><br/>
					<p>Ragdoll to jeden z największych i najpotężniejszych kotów domowych, ustępujący rozmiarem niemal wyłącznie rasie maine coon. Sylwetka tego kota jest niezwykle masywna, długa i muskularna, z silnie rozwiniętą klatką piersiową. Dorosłe kocury mogą ważyć od 7 do nawet 10 kilogramów. Głowa ragdolla ma kształt szerokiego klina o łagodnie zaokrąglonych konturach. Prawdziwym znakiem rozpoznawczym rasy są jednak jej hipnotyzujące, duże i owalne oczy, które bezwzględnie muszą przybierać intensywnie niebieską barwę. Półdługa, jedwabista sierść z minimalną ilością podszerstka prawie w ogóle się nie kołtuni. Wszystkie ragdolle rodzą się całkowicie białe, a ich docelowe umaszczenie typu syjamskiego wybarwia się w pełni dopiero około trzeciego roku życia.</p>
					<p>Historia rasy ragdoll jest stosunkowo krótka, niezwykle barwna i wiąże się z Kalifornią lat 60. XX wieku. Twórczynią tych niezwykłych kotów była Ann Baker, hodowczyni persów z Riverside, która do stworzenia nowej rasy wykorzystała białą, długowłosą kotkę o imieniu Josephine, przypominającą kota angorskiego. Josephine uległa wypadkowi samochodowemu, po którym została otoczona troskliwą opieką medyczną na uniwersytecie, a jej kolejne mioty zaczęły wykazywać niezwykłe cechy: kocięta były wyjątkowo ufne, łagodne i wiotczały w rękach człowieka. Ann Baker, posiadająca niebywały zmysł marketingowy, uznała to za skutek zmian genetycznych po wypadku i zaczęła celowo krzyżować potomstwo Josephine z kocurami o umaszczeniu syjamskim oraz birmańskim. Hodowczyni zastrzegła nazwę „Ragdoll” w urzędzie patentowym i stworzyła własną organizację IRCA, narzucając bardzo rygorystyczne zasady innym hodowcom. Dopiero na przełomie lat 70. i 80. grupa zbuntowanych pasjonatów wyłamała się spod jej dyktatu, rejestrując ragdolle w tradycyjnych federacjach felinologicznych, co otworzyło rasie drogę do globalnej popularności.</p>
					<p>Nazwa rasy w dosłownym tłumaczeniu oznacza „szmacianą lalkę” i idealnie oddaje unikalną, wręcz legendarną cechę tych zwierząt – wzięte na ręce przez zaufanego człowieka potrafią całkowicie rozluźnić swoje mięśnie, bezwładnie zwisając na ludzkich ramionach. Ragdolle to istoty o anielskim usposobieniu: są niesamowicie łagodne, zrównoważone, pozbawione cienia agresji i bezgranicznie ufne wobec otoczenia. Charakteryzują się iście „psim” przywiązaniem do opiekuna, witają go w drzwiach po powrocie z pracy, nie odstępują na krok i uwielbiają uczestniczyć we wszystkich domowych czynnościach. Są to koty wybitnie naziemne, które rzadko wspinają się na wysokie szafy, zdecydowanie bardziej preferując kanapy i podłogę. Ich delikatność sprawia, że są idealnymi towarzyszami dla rodzin z dziećmi oraz świetnie sprawdzają się w felinoterapii, czyli terapii z udziałem kotów wspierającej osoby chore lub niepełnosprawne. Ragdolle bardzo źle znoszą samotność i potrzebują stałego kontaktu z człowiekiem bądź innym przyjaznym zwierzęciem, a ich cichy i melodyjny głos słyszy się niezmiernie rzadko.</p>
					<p>Choć ragdoll zachwyca swoim bogatym, puszystym futrem, jego pielęgnacja jest zaskakująco łatwa w porównaniu do wspomnianych wcześniej kotów perskich. . Ze względu na specyficzną strukturę włosa i niemal całkowity brak podszerstka, sierść ragdolla nie ma tendencji do filcowania się, dlatego wystarczy ją dokładnie wyczesać raz lub dwa razy w tygodniu przy użyciu metalowego grzebienia z długimi zębami, zwracając szczególną uwagę na pachy oraz pachwiny. Rasa ta rośnie i rozwija się bardzo powoli, osiągając pełną dojrzałość fizyczną oraz ostateczną wagę dopiero w wieku 3–4 lat, co wymaga podawania wysokiej jakości karmy  bogatej w czyste mięso i białko zwierzęce przez cały ten długi okres wzrostu.<img src="img/rd2.png" alt="kot" style="float: left; margin: 10px 10px 0 0;"> Ragdolle mają doskonały apetyt, a z racji ich dość spokojnego i mało aktywnego trybu życia, opiekun musi rygorystycznie kontrolować porcje jedzenia, aby zapobiec otyłości.  Warto pamiętać, że ze względu na swoją bezgraniczną ufność i brak instynktu obronnego, ragdoll absolutnie nie powinien być kotem wychodzącym samopas – na zewnątrz grozi mu zbyt wiele niebezpieczeństw, których nie potrafi właściwie ocenić.</p>
					<p>Zakup rodowodowego szczenięcia rasy ragdoll z legalnej, etycznej hodowli zrzeszonej pod egidą uznanych organizacji felinologicznych (takich jak FPL/FIFE, TICA czy WCF) to wydatek rzędu od 3500 do nawet 6500 złotych za tak zwanego kota „na kolanka” (czyli z obowiązkiem kastracji). Osobniki przeznaczone do celów wystawowych i dalszej hodowli mogą kosztować znacznie więcej, przekraczając kwoty rzędu 9000 złotych. Wysoka cena wynika z kosztownych badań genetycznych, jakim poddawani są rodzice, głównie w celu wykluczenia kardiomiopatii przerostowej (HCM) oraz wielotorbielowatości nerek (PKD). Kategorycznie należy wystrzegać się tanich ofert z pseudohodowli, gdzie koty w typie ragdolla często rodzą się z wadami serca i żyją w złych warunkach. Ze względu na ogromną popularność rasy, ragdolle lub koty bardzo do nich podobne czasami trafiają do schronisk lub pod opiekę fundacji zajmujących się adopcjami kotów rasowych. Adopcja dorosłego ragdolla, porzuconego na przykład z powodu alergii właściciela, to wspaniała okazja do podarowania nowego, kochającego domu temu niezwykle wrażliwemu stworzeniu.</p>
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
