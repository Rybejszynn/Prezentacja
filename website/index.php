<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Strona internetowa</title>
    <meta name="description" content="Strona internetowa">
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
		  <section>
			  <div id="sidebar1">
				   <span class="bold">Zobacz również:</span>
					<a href="#" class="sbl" title="Przegląd ras psów">
					  <div class="link1"> 
						Rasy psów
					  </div>
					</a>
					<a href="#" class="sbl" title="Idealny kot na początek">
					  <div class="link1"> 
						Jaki kot na początek?
					  </div>
					</a>
					<a href="#" class="sbl" title="Szampony i specyfiki dla twojego kota">
					  <div class="link1"> 
						Jak zadbać o sierść kota?
					  </div>
					</a>
					<a href="#" class="sbl" title="Porady dotyczące opieki nad kotem">
					  <div class="link1"> 
						Jak czesto chodzić do weterynarza?
						</div>
					</a>	
			  </div>
		  </section>
		  <section>
			  <div class="img">
				<img src="img/obrazek1.png" alt="obrazek1">
			  </div>
		  </section>
		  <section>
			<div class="txt1">
			  <span class="bold" style="margin-left: 12px;">O nas</span>
				<p>Przeszlosc</p>
		    </div> 
		  </section>
		  <section>
			<div class="img">
			  <img src="img/obrazek2.png" alt="obrazek2">
			</div>
			<div class="txt1"> 
				<p>Przyszlosc</p>
		    </div>
		  </section>
	    </article>
	    <div style="clear:both"></div>
		<aside>
			<div class="sidebar2">
			  <ol class="boxlist">
				<li>
				  <span class="bold3">Skocz do artykułu</span>
				  <ul>
					<li class="li"><a href="#box1" data-target="#box1" title="przeskocz do artykułu o kocie Dachowym">"Dachowiec"</a></li>
					<li class="li"><a href="#box2" data-target="#box2" title="przeskocz do artykułu o kocie Perskim">Kot Perski</a></li>
					<li class="li"><a href="#box3" data-target="#box3" title="przeskocz do artykułu o kocie Ragdoll">Ragdoll</a></li>
					<li class="li"><a href="#box4" data-target="#box4" title="przeskocz do artykułu o kocie Norweskim">Kot Norweski </a></li>
					<li class="li"><a href="#box5" data-target="#box5" title="przeskocz do artykułu o kocie Brytyjskim krótkowłosym">Brytyjski</a></li>
					<li class="li"><a href="#box6" data-target="#box6" title="przeskocz do artykułu o Kocie Kartuskim">Kot Kartuski</a></li>
					<li class="li"><a href="#box7" data-target="#box7" title="przeskocz do artykułu o Sfinksie">Sfinks</a></li>
					<li class="li"><a href="#box8" data-target="#box8" title="przeskocz do artykułu o  Kocie Devon Rex">Devon Rex</a></li>
					<li class="li"><a href="#box9" data-target="#box9" title="przeskocz do artykułu o  Kocie Savannah">Savannah</a></li>
					<li class="button-up"><a href="#" title="przeskocz na górę"><i class="icon-up-open"></i></a></li>
				  </ul>
				</li>
			  </ol>
			  <div id="button1">
				<a href="#header" title="powrót na górę"></a>
			  </div>
			</div>
		  </aside>
		  <article>
			  <div id="boxes">
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k1.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">"Dachowiec"</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ante tellus, congue dignissim feugiat in, ullamcorper sed nisl. Nunc non diam sit amet est euismod fermentum ut non mi. Sed neque nulla, fermentum nec nisi in, tincidunt euismod odio. In at diam at augue commodo vehicula a eu tellus. Suspendisse ultrices massa non magna congue, in ullamcorper lacus blandit. Nulla finibus lorem a condimentum aliquam. Duis quis suscipit erat. In ante sapien, viverra non mi non, gravida ultricies dui. In scelerisque velit et elit fermentum gravida. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam lobortis est quis massa facilisis hendrerit eu eu metus. Donec accumsan nulla at metus convallis fermentum. In hac habitasse platea dictumst.</p></div>
							<a class="b_link" href="dachowiec"><i class="icon-search"></i></a>
							<div id="box1" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k2.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Kot Perski</span><p>Ut feugiat, mi et luctus pulvinar, nibh dolor sodales nunc, et bibendum lacus orci ac velit. Aliquam aliquet est at consectetur fringilla. Fusce vehicula mollis ante eget ultrices. Suspendisse faucibus urna vel nisi tincidunt tempor. Maecenas hendrerit, leo et blandit sollicitudin, arcu odio euismod diam, in condimentum neque arcu nec nunc. Pellentesque aliquam tempus urna eu bibendum. Sed eget lorem erat. Donec quis fermentum lorem. Aliquam eu feugiat sapien, a faucibus libero. Etiam et ante in neque aliquam cursus eget aliquam diam. Aliquam tempus magna sit amet urna rutrum sagittis. Vestibulum sollicitudin eros turpis, at lacinia velit fermentum ut. In volutpat vestibulum nisl. Morbi luctus ipsum eget quam gravida convallis. Cras sed purus imperdiet, lobortis ante ut, tempor sem.</p></div>
							<a class="b_link2" href="kot-perski"><i class="icon-search"></i></a>
							<div id="box2" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k3.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Ragdoll</span><p>Donec nec nulla porttitor, bibendum est in, lacinia arcu. Quisque eu sagittis magna. Phasellus ut ullamcorper ipsum. In molestie vitae augue sed ornare. Nulla vestibulum fermentum varius. Nulla scelerisque lorem maximus rutrum lobortis. Phasellus tempor sollicitudin elit, a pharetra est. Mauris ac lectus et nisi feugiat fringilla.</p></div>
							<a class="b_link" href="ragdoll"><i class="icon-search"></i></a>
							<div id="box3" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k4.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Kot Norweski Leśny</span><p>Nullam fringilla posuere vulputate. Curabitur id ipsum at lorem vestibulum lacinia in non elit. Phasellus efficitur finibus turpis, in eleifend velit tincidunt sed. Vestibulum efficitur cursus purus, eget blandit dui varius a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam id quam lacus. Suspendisse vel venenatis nisi. Sed malesuada, augue eget bibendum tincidunt, ante lacus faucibus augue, vel ultricies turpis eros vitae sapien. Maecenas est neque, consectetur sed fermentum nec, ultrices ac odio. Nullam ac velit pulvinar, euismod metus in, auctor justo. Etiam sed sollicitudin lectus, eu laoreet nisl. Praesent facilisis nec sem et cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse a efficitur enim. Cras mollis ac neque a dignissim. Curabitur efficitur porttitor nulla, vel sodales tellus porta a.</p></div>
							<a class="b_link2" href="kot-norweski-lesny"><i class="icon-search"></i></a>
							<div id="box4" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k5.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Kot Brytyjski Krótkowłosy</span><p>Ut a condimentum orci. Maecenas lobortis feugiat facilisis. Sed porttitor lectus at mollis molestie. Aenean pharetra libero felis, vel ultrices mauris volutpat eget. Nunc odio eros, auctor imperdiet vehicula a, iaculis quis mauris. Praesent et luctus lectus. Vestibulum nisi mauris, volutpat in volutpat et, convallis eget libero. Ut porta lectus eget arcu congue sodales. Maecenas in interdum augue. Suspendisse potenti. Praesent vel commodo tellus, et hendrerit felis. Cras eleifend ante urna, et convallis sapien porttitor nec. Sed non convallis felis. Mauris sit amet elit vel mi dictum ullamcorper et vitae neque. Nam condimentum justo et enim suscipit, bibendum fringilla nulla mattis. Pellentesque et purus vehicula, malesuada est eget, elementum urna.</p></div>
							<a class="b_link" href="kot-brytyjski-krotkowlosy"><i class="icon-search"></i></a>
							<div id="box5" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k6.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Kot kartuski</span><p>Ut porta nisi odio, pellentesque semper dui volutpat vestibulum. In placerat euismod massa et aliquet. Donec hendrerit, massa eu rutrum vulputate, tortor libero porta velit, nec sagittis enim urna eget augue. Praesent eget faucibus ligula. Maecenas tincidunt ullamcorper diam. Cras ultrices eros vel ornare aliquam. Sed viverra porta mi, quis pharetra nisi ultricies ac. Etiam eu nunc elit. Ut faucibus neque justo, sed pharetra tellus elementum pretium. Nullam at velit accumsan, maximus nisi sagittis, posuere leo. Nam efficitur pulvinar justo, in placerat diam porttitor ut. Suspendisse potenti.</p></div>
							<a class="b_link2" href="kot-kartuski"><i class="icon-search"></i></a>
							<div id="box6" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k7.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Sfinks</span><p>Nam a ornare mauris. Duis eget nulla ac ligula finibus luctus congue non ipsum. Praesent quis ipsum et dolor rhoncus ultricies ac ut lacus. Integer hendrerit fringilla gravida. Duis sagittis aliquet elit, nec maximus ante. Praesent hendrerit lorem ut tincidunt dictum. Sed maximus, turpis vel posuere lacinia, mi mi laoreet est, sit amet laoreet felis nunc in ligula. Aliquam erat volutpat. Praesent nec laoreet felis. Ut nec consequat lacus. Suspendisse tellus mauris, feugiat at aliquet id, aliquet et eros. Fusce interdum sagittis enim, vitae eleifend enim dapibus quis. Cras congue sed felis sed iaculis. Morbi non sem odio. Nulla rutrum eget quam porttitor viverra.</p></div>
							<a class="b_link" href="sfinks"><i class="icon-search"></i></a>
							<div id="box7" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k8.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Kot Devon Rex</span><p>Ut condimentum tempor porttitor. Aliquam gravida lorem nec sem sollicitudin, et porttitor lacus ultricies. Nunc varius laoreet libero, at viverra metus. Vivamus eu posuere urna. Phasellus quis gravida quam. Maecenas ac malesuada purus, id consequat mi. Aenean pulvinar lobortis dui, sit amet posuere justo scelerisque sit amet. Etiam augue arcu, commodo ac elementum in, aliquam quis dolor. Nulla suscipit sodales dui, ut dignissim tellus commodo fringilla. Donec venenatis ligula in elit laoreet, laoreet dapibus augue mollis. Sed non arcu at risus vulputate lobortis ac ut ante. Maecenas tristique nisi sed neque interdum tincidunt. Donec non est convallis, vulputate ligula tempor, malesuada enim. Duis eget arcu orci.</p></div>
							<a class="b_link2" href="kot-devon-rex"><i class="icon-search"></i></a>
							<div id="box8" class="box"><div class="overlay"></div></div>
						</div>
				</section>
				<section>
						<div class="boxb">
							<div class="b-img"><img src="img/k9.png" alt="obrazek kota"></div>
							<div class="b-content"><span class="bold2">Kot Savannah</span><p>Aliquam tortor lorem, efficitur et diam rhoncus, rutrum malesuada erat. Phasellus bibendum aliquet neque, in varius dui luctus a. Aliquam ullamcorper erat eget tortor feugiat, non ornare tortor rutrum. Pellentesque ornare dui sit amet tortor volutpat scelerisque. Suspendisse massa magna, egestas non sem quis, placerat dignissim lorem. Mauris imperdiet mi hendrerit magna bibendum feugiat. Sed sollicitudin vel eros ullamcorper tempus. Curabitur non pharetra ligula. Mauris quis risus sit amet arcu ultrices lacinia. Fusce condimentum mauris est, quis lacinia purus dapibus suscipit. Vestibulum ex nibh, facilisis sit amet gravida id, vestibulum ac libero. Pellentesque in odio nec massa vehicula porttitor a eget velit. Nunc dignissim, ligula et maximus condimentum, leo nibh imperdiet nulla, eu pulvinar sapien nisl et urna. Pellentesque consequat tortor suscipit dolor ultrices ultricies.</p></div>
							<a class="b_link" href="kot-savannah"><i class="icon-search"></i></a>
							<div id="box9" class="box"><div class="overlay"></div></div>
						</div>
				</section>
			  </div> 
		  </article>
		<aside>
			<div class="sidebar2">
			  <a href="https://adsense.google.com/intl/pl_pl/start/" title="Wciąż nic tu nie ma" target="_blank" class="adlink">
				<div class="ad">
				  <span class="bold">Miejsce na reklamy<br/>Miejsce na reklamy<br/>Miejsce na reklamy<br/>Miejsce na reklamy</span>
				</div>
			  </a>
			  <a href="https://adsense.google.com/intl/pl_pl/start/" title="Wciąż nic tu nie ma" target="_blank" class="adlink">
				<div class="ad">
				  <span class="bold">Miejsce na reklamy<br/>Miejsce na reklamy<br/>Miejsce na reklamy<br/>Miejsce na reklamy</span>
				</div>
			  </a>
			</div>
		</aside>
	  </main>  
	  <div style="clear:both"></div>
	  <footer>
		  <div id="footer1"> 
		    <div class="social">
				<a href="https://lego.com" class="sociallink" target="_blank" title="LEGO">  
				  <div id="social1">
					<i class="icon-lego"><br/>LEGO</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://facebook.com" class="sociallink" target="_blank" title="Nasze konto Facebook"> 
				  <div id="social2">
					<i class="icon-facebook"><br/>FaceBook</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://twitter.com" class="sociallink" target="_blank" title="Nasze konto X">
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
				<a href="https://reddit.com" class="sociallink" target="_blank" title="Nasze konto Reddit">
				  <div id="social5">
					<i class="icon-reddit"><br/>Reddit</i>
				  </div>
				</a>
			</div>
			<div class="social">
				<a href="https://bitcoin.org" class="sociallink" target="_blank" title="Nasz portfel kryptowalut">
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
