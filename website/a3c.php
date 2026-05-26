<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Kot Savannah</title>
    <meta name="description" content="Kot Savannah">
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
					<img src="img/sa1.png" alt="kot" style="float: right; margin: 0 0 6px 10px;">
					<span class="bold2">Kot Savannah</span><br/>
					<p>Kot savannah to uderzająco piękna, wysoka i pełna dzikiej elegancji rasa, będąca bezpośrednią hybrydą kota domowego i afrykańskiego serwala. Sylwetka tego kota jest niezwykle smukła, wydłużona i atletyczna, o potężnym kośćcu i silnym umięśnieniu, które kryje się pod niezwykle giętkim ciałem. Cechą najbardziej rzucającą się w oczy są nieziemsko długie, szczupłe łapy, przy czym tylne kończyny są lekko uniesione, co nadaje kotu dumny, drapieżny chód. Wielkość osobnika zależy od pokolenia (F1–F5) – najwcześniejsze generacje mogą ważyć nawet do 12–15 kilogramów i osiągać imponujące rozmiary. Głowa o kształcie małego klina jest proporcjonalnie mniejsza od reszty ciała, ozdobiona wielkimi, wysoko osadzonymi, zaokrąglonymi uszami, na których z tyłu widnieją jasne plamki (tzw. ocelli). Oczy o unikalnym kształcie migdałów posiadają ciemne linie łzowe w kącikach, co upodabnia ich wyraz twarzy do geparda. Krótkie, gęste i sprężyste futro pokryte jest wyrazistym wzorem ciemnobrązowych lub czarnych cętek na złotawym, beżowym lub srebrzystym tle, a wygląd dopełnia dość krótki ogon w czarne ringi.</p>
					<p>Historia rasy savannah narodziła się w Stanach Zjednoczonych i jest efektem fascynacji dzikim pięknem afrykańskiej fauny. Pierwszy udany eksperyment hodowlany miał miejsce 7 kwietnia 1986 roku, kiedy to amerykańska hodowczyni Judy Frank doprowadziła do skrzyżowania samca dzikiego serwala afrykańskiego z kotką rasy syjamskiej. W wyniku tego niezwykłego skojarzenia na świat przyszła jedna kotka, której nadano imię Savannah – to właśnie od niej cała rasa wzięła swoją oficjalną nazwę. Pomysłem zachwycili się kolejni hodowcy, Patrick Kelley oraz Joyce Sroufe, którzy opracowali rygorystyczny program hodowlany i stworzyli wzorzec rasy. Celem było wyhodowanie kota, który zachowa zjawiskowy, egzotyczny wygląd dzikiego drapieżnika, ale jednocześnie będzie posiadał łagodny charakter domowego pieszczocha. Międzynarodowa organizacja TICA oficjalnie zarejestrowała rasę w 2001 roku. Do dziś stopień spokrewnienia z dzikim przodkiem oznacza się symbolem F (Filial generation), gdzie F1 to bezpośrednie potomstwo serwala, a wyższe numery oznaczają dalsze pokolenia.</p>
					<p>Z charakteru kot savannah to istny wulkan energii, niezwykła inteligencja oraz niespotykane u innych kotów „psie” przywiązanie do ludzkiej rodziny. Są to zwierzęta niezwykle aktywne, dynamiczne i ciekawskie, które przez cały dzień poszukują stymulacji i absorbujących wyzwań. Posiadają niesamowitą sprawność fizyczną – potrafią z miejsca wyskoczyć na wysokość ponad dwóch metrów, dlatego najwyższe półki i szafy w domu błyskawicznie stają się ich rewirem. Savannah słyną z ogromnej lojalności wobec opiekuna; witają go w drzwiach, chodzą za nim jak cień, uwielbiają aportować zabawki i doskonale uczą się chodzenia na smyczy podczas regularnych spacerów. W przeciwieństwie do większości kotów, rasa ta wręcz uwielbia wodę – potrafią bez oporów wskoczyć do wanny, brodzić w zlewie czy bawić się strumieniem z kranu. Ich usposobienie jest przyjazne i radosne, jednak z racji silnego charakteru i niespożytej energii wymagają konsekwencyjnego wychowania. Dobrze dogadują się z innymi aktywnymi zwierzętami, lecz ich silny instynkt łowiecki sprawia, że małe gryzonie czy ptaki nie są w ich obecności bezpieczne.</p>
					<p>Opieka nad kotem savannah wymaga od właściciela sporego zaangażowania, przestrzeni oraz odpowiedniej wiedzy, zwłaszcza w przypadku bliższych generacji (F1–F3). Sama pielęgnacja krótkiego i zwartego futra jest banalnie prosta i ogranicza się do wyczesania raz w tygodniu gumowym zgrzebłem w celu usunięcia martwego włosa. Prawdziwym wyzwaniem jest zapewnienie kotu odpowiedniej stymulacji psychofizycznej – niezbędne są wysokie, stabilne drapaki, tunele, zabawki interaktywne oraz codzienna dawka intensywnej zabawy łowieckiej z opiekunem.  Dieta rasy savannah musi być bezwzględnie najwyższej jakości, <img src="img/sa2.png" alt="kot" style="float: left; margin: 10px 10px 0 0;"> oparta na wysokomięsnych karmach lub odpowiednio zbilansowanej diecie typu BARF (surowe mięso z suplementami),  ponieważ ich układ pokarmowy potrzebuje dużej ilości czystego białka zwierzęcego i tauryny. Opiekun musi również zadbać o bezwzględne zabezpieczenie okien i balkonu mocną siatką oraz przygotowanie bezpiecznej przestrzeni w domu, eliminując delikatne przedmioty, które mogłyby zostać strącone podczas szalonych skoków tego sprytnego olbrzyma.</p>
					<p>Zakup rodowodowego kota rasy savannah to jedna z najdroższych inwestycji w świecie felinologii, a ostateczna cena zależy bezpośrednio od generacji i stopnia pokrewieństwa z dzikim serwalem. Kocięta z bliskiego pokolenia F1, ze względu na ogromne trudności hodowlane i rzadkość, mogą kosztować od 15 000 do nawet 50 000 złotych i więcej. Bardziej popularne i przystosowane do typowego życia domowego pokolenia (F4 i F5) z legalnych hodowli TICA to wydatek rzędu od 4500 do 8000 złotych za opcję „na kolanka”. Należy bezwzględnie unikać podejrzanie tanich ogłoszeń z pseudohodowli, gdyż niekontrolowane krzyżówki mogą skutkować agresją lub ciężkimi chorobami genetycznymi. Szukanie rasowego kota savannah w tradycyjnych schroniskach graniczy z cudem ze względu na unikalność rasy. Czasami jednak, z powodu trudnego i wymagającego charakteru, dorosłe osobniki bywają oddawane przez właścicieli pod opiekę wyspecjalizowanych fundacji. Adopcja takiego kota to ogromna odpowiedzialność, wymagająca doświadczenia w pracy z kotami wymagającymi, ale dająca szansę na zyskanie fascynującego przyjaciela.</p>
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
