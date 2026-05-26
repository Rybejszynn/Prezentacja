<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Devon Rex</title>
    <meta name="description" content="Kot Devon Rex">
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
					<img src="img/dr1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Devon Rex</span><br/>
					<p>Devon rex to niezwykły, mały lub średniej wielkości kot, którego unikalny i nieco psotny wygląd sprawia, że często bywa porównywany do elfa, skrzata lub istoty pozaziemskiej. Najbardziej charakterystyczną cechą rasy jest jej specyficzna, krótka okrywa włosowa, która układa się w delikatne, miękkie i regularne fale, przypominające w dotyku ekskluzywny karakuł lub plusz. Futro to, pozbawione większości szorstkich włosów okrywowych, jest niezwykle delikatne i ciepłe. Budowa ciała devona jest smukła i elegancka, lecz zaskakująco muskularna, z szeroką klatką piersiową i długimi, szczupłymi łapami, przy czym tylne kończyny są zauważalnie dłuższe od przednich. Głowa tego kota ma unikalny kształt modyfikowanego klina o mocno zarysowanych kościach policzkowych, krótkim pyszczku i wyrazistym stopie. Ozdobą rasy są osadzone niezwykle nisko i szeroko, gigantyczne uszy, które u nasady są bardzo szerokie, a na końcach lekko zaokrąglone. Duże, szeroko rozstawione oczy w kształcie owali mienią się całą paletą barw, a ich spojrzenie jest pełne wesołego blasku i ciekawości. Rasa ta występuje we wszystkich możliwych odmianach barwnych oraz wzorach umaszczenia.</p>
					<p>Historia rasy devon rex rozpoczęła się stosunkowo niedawno, bo w 1960 roku w angielskim hrabstwie Devon. To właśnie tam, w pobliżu opuszczonej kopalni cyny w Buckfastleigh, Beryl Cox zauważyła dzikiego kocurka o niesamowitym, pofalowanym futrze. Niedługo potem przygarnięta przez nią ciężarna, szylkretowa kotka urodziła miot, w którym znalazł się jeden czarny kocurek o identycznej, pofalowanej sierści i wielkich uszach, któremu nadano imię Kirlee. Początkowo sądzono, że Kirlee jest spokrewniony z odkrytą dziesięć lat wcześniej w sąsiednim hrabstwie rasą cornish rex. Jednak po podjęciu prób krzyżowania okazało się, że wszystkie narodzone kocięta miały prostą sierść. Odkrycie to dowiodło, że pofalowane futro Kirlee było wynikiem zupełnie innej, niezależnej i nowej mutacji genetycznej o charakterze recesywnym. Hodowcy rozpoczęli wówczas odrębny, rygorystyczny program hodowlany, krzyżując Kirlee z kotami domowymi oraz brytyjskimi, aby poszerzyć pulę genową. W 1967 roku rasa została oficjalnie uznana w Wielkiej Brytanii, a niedługo potem podbiła resztę świata.</p>
					<p>Z charakteru devon rex to nieustannie radosny, pełen energii i niezwykle towarzyski czworonóg, który przez całe swoje życie zachowuje mentalność ciekawskiego kociaka. Słynie ze swojego ogromnego, wręcz bezgranicznego przywiązania do człowieka, którego traktuje jak najważniejsze centrum swojego wszechświata. Devony uwielbiają przesiadywać na ludzkich ramionach, niczym małe papugi, tulić się do szyi opiekuna i spać pod kołdrą, czerpiąc z ludzkiego ciała upragnione ciepło. Są to istoty niezwykle inteligentne, bystre i aktywne, które potrafią błyskawicznie nauczyć się aportować małe zabawki, otwierać drzwi czy chodzić na smyczy. Ich niespożyta energia sprawia, że uwielbiają skoki na najwyższe meble i szalone pogonie za piórkami, a ich wesołe, cyrkowe sztuczki potrafią rozczulić każdego domownika. Cechują się łagodnością i kompletnym brakiem agresji, dzięki czemu są genialnymi towarzyszami dla dzieci oraz doskonale dogadują się z innymi kotami i psami. Bardzo źle znoszą samotność i nudę, dlatego potrzebują stałej obecności i uwagi ze strony domowników.</p>
					<p>Mimo że specyficzne futro devon rexa wygląda na delikatne, jego pielęgnacja jest zaskakująco mało skomplikowana, choć wymaga zachowania pewnych specyficznych zasad. Ze względu na delikatną strukturę włosa, devona nie należy czesać tradycyjnymi, twardymi szczotkami, które mogłyby uszkodzić lub wyrywać rzadką okrywę – w zupełności wystarczy regularne, delikatne przecieranie ciała dłonią lub miękką szmatką, co pozwala usunąć martwy włos. Z racji tego, że ich uszy są ogromne i otwarte, <img src="img/dr2.png" alt="kot" style="float: left; margin: 10px 10px 0 0;"> mają tendencję do szybszego gromadzenia ciemnej woskowiny, dlatego należy je regularnie, delikatnie oczyszczać specjalnymi preparatami weterynaryjnymi. Devony wykazują bardzo duży apetyt i doskonałą przemianę materii, ponieważ potrzebują więcej energii do utrzymania stałej temperatury ciała, co sprawia, że ich dieta musi być wysokojakościowa, bogata w mięso i dobrze zbilansowana, by nie doprowadzić do nadwagi. Koty te uwielbiają ciepło i są wrażliwe na przeciągi oraz niskie temperatury, dlatego w chłodniejsze dni warto zapewnić im ciepłe legowiska lub założyć miękki sweterek.</p>
					<p>Zakup rodowodowego kota rasy devon rex z profesjonalnej hodowli zrzeszonej w uznanych federacjach felinologicznych (FIFE, TICA, WCF) to wydatek rzędu od 4000 do 6500 złotych za opcję „na kolanka”. Odpowiedzialni hodowcy przeznaczają te kwoty na badania genetyczne rodziców w kierunku miopatii oraz chorób serca. Należy kategorycznie unikać tanich ogłoszeń z pseudohodowli oferujących zwierzęta bez dokumentów, gdyż często cierpią one na poważne problemy zdrowotne. Jeśli budżet jest ograniczony, warto poszukać devona w fundacjach pomagających kotom rasowym lub w schroniskach. Zdarzają się sytuacje losowe, w których dorosłe osobniki poszukują nowego domu. Adopcja takiego elfa to wspaniały gest, który owocuje zyskaniem najwierniejszego przyjaciela.</p>
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
