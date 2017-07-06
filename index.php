<!DOCTYPE html>
<html>
<head>
	<title>Zile Libere</title>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://use.fontawesome.com/45050bf34e.js"></script>

	<script
	  src="https://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous"></script>

  	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

	<div class="header">
		<div class="container">
			<h1 class="title">Zile libere <span class="the_year"><?php echo date("Y"); ?></span></h1>
			<h2 class="subtitle">Alege anul dorit pentru afisarea zilelor libere legale</h1>
			
			<div class="search_box">
				<input type="text" name="year" value="<?php echo date("Y"); ?>" class="input_zile">
				<button class="search">Cauta</button>
			</div>
		</div>
	</div>

	<div class="container">
		<h3 class="content_title">Zile libere <span class="the_year"><?php echo date("Y"); ?></span></h3>

		<div class="days_table clearfix">
			<?php include("getDays.php"); ?>
		</div>
	</div>

	<div class="api_container_wrapper">
		<div class="container">
			<h3 class="content_title">Ai nevoie de un API ?</h3>

			<div class="clearfix row">
				<div class="col-xs-12 col-sm-6">
					<span class="text">Tot ce trebuie sa faci este sa apelezi</span>
					<div class="quote_text"> /getApi.php?year= </div>
					<span class="text">cu anul dorit si vei primi un raspuns de forma:</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="quote_text">
<pre>
[{"name":"Anul Nou","date":[{"date":"2018\/01\/01","weekday":"Monday"},{"date":"2018\/01\/02","weekday":"Tue"}]},{"name":"Ziua Unirii Principatelor Rom\u00e2ne","date":[{"date":"2018\/01\/24","weekday":"Wed"}]},{"name":"Pa\u0219tele Ortodox","date":[{"date":"2018\/04\/08","weekday":"Sun"},{"date":"2018\/04\/09","weekday":"Mon"}]},{"name":"Ziua Muncii","date":[{"date":"2018\/05\/01","weekday":"Fri"}]},{"name":"Ziua Copilului","date":[{"date":"2018\/06\/01","weekday":"Sat"}]},{"name":"Rusalii","date":[{"date":"2018\/05\/28","weekday":"Mon"}]},{"name":"Adormirea Maicii Domnului","date":[{"date":"2018\/08\/15","weekday":"Wed"}]},{"name":"Sf\u00e2ntul Andrei","date":[{"date":"2018\/11\/30","weekday":"Fri"}]},{"name":"Ziua Na\u021bional\u0103 a Rom\u00e2niei","date":[{"date":"2018\/12\/01","weekday":"Sat"}]},{"name":"Cr\u0103ciunul","date":[{"date":"2018\/12\/25","weekday":"Tue"},{"date":"2018\/12\/26","weekday":"Wed"}]}]
</pre>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<h3 class="content_title">Serviciile Webventure Development</h3>

		<div class="row">
			<div class="lista_servicii clearfix">
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-search"></i>
						</div>
						<div class="title_servicii">Analiză de business</div>
						<div class="content_servicii">Luăm ideile și le transformăm în specificații care pot fi utilizate în dezvoltarea produsului. Vă oferim cea mai scurtă și cea mai rapida metoda idee-concept-produs, asigurându-ne că întrebăm totul pentru ca produsul dumneavoastră să aibă succes</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-commenting"></i>
						</div>
						<div class="title_servicii">Consultanță IT</div>
						<div class="content_servicii">Vă vom oferi sfaturi cu privire la soluțiile disponibile pentru nevoile dumneavoastră și vă vom ajuta să implementați soluții specifice.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-database"></i>
						</div>
						<div class="title_servicii">Arhitectură software</div>
						<div class="content_servicii">Pentru ca un produs software să aibă succes trebuie să proiectați totul bine chiar de la început. Infrastructura și arhitectura proiectului determină scalabilitatea acestuia și noi ne vom asigura că  luăm în considerare toate variabilele.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-globe"></i>
						</div>
						<div class="title_servicii">Dezvoltarea aplicațiilor web</div>
						<div class="content_servicii">Având o idee grozavă este important, dar posibilitatea de a o implementa este determinantă pentru nașterea produsului. Ne vom asigura că vom livra conform planului.</div>
					</div>
				</div>
			</div>

			<div class="lista_servicii clearfix">
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-mobile"></i>
						</div>
						<div class="title_servicii">Dezvoltarea aplicațiilor mobile</div>
						<div class="content_servicii">Nu este ușor să construiești o aplicație mobilă de succes, dar noi o putem face. Cu cât este mai ușor pentru publicul dumneavoastră să îl folosească, cu atât mai greu pentru noi să îl dezvoltăm. Dar nu-ți face griji, chiar ne place să facem asta.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-users"></i>
						</div>
						<div class="title_servicii">Echipe dedicate</div>
						<div class="content_servicii">Vă putem instala sau vă putem asista în procesul de instalare, remote sau la punctul dumneavoastră de lucru, cu echipe specializate pentru proiecte de IT.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-certificate"></i>
						</div>
						<div class="title_servicii">Asigurarea calității</div>
						<div class="content_servicii">Ignorate de mulți, foarte importante pentru noi. Știm, chiar Bill Gates a obținut un ecran albastru la lansarea unui produs. Vom face tot posibilul ca asta să fie doar ficțiune pentru tine.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-file-text"></i>
						</div>
						<div class="title_servicii">Management de proiect</div>
						<div class="content_servicii">Modul în care un proiect este gestionat trebuie adaptat la situația reală. Nu există o rețetă universală aici. Metodologia Waterfall sau abordarea agile / scrum, ambele au puncte puternice și slabe. Vom fi capabili să vă sugerăm abordarea ideală, perfect adaptată la situația dumneavoastră reală.</div>
					</div>
				</div>
			</div>

			<div class="lista_servicii clearfix">
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-tachometer"></i>
						</div>
						<div class="title_servicii">Evaluarea performanței</div>
						<div class="content_servicii">Uneori, produsul sau proiectul dumneavoastră nu are acel extra mile pe calea spre succes. Fie că este nevoie de niște modificări minore sau de o regândire a arhitecturii majore, vom afla și vom raporta acest lucru.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-shield"></i>
						</div>
						<div class="title_servicii">Audit de securitate și optimizare</div>
						<div class="content_servicii">Este crucial ca proiectul dumneavoastră să fie sigur și securizat. Putem verifica cât de sigur este produsul dumneavoastră, putem face sugestii și, de asemenea, le putem implementa.</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 wrap_box_servicii">
					<div class="box_servicii">
						<div class="img_servicii">
							<i class="fa fa-wrench"></i>
						</div>
						<div class="title_servicii">Servicii de întreținere</div>
						<div class="content_servicii">Un produs de succes trebuie să fie bine întreținut și în continuă dezvoltare iterativă, pentru a răspunde nevoilor mereu în schimbare ale publicului țintă. Suntem de încredere și în acest domeniu.</div>
					</div>
				</div>
			</div>
		</div>

		<a href="https://www.webventure.ro" class="viziteazasite" target="_blank">Viziteaza site-ul</a>

	</div>

	<div class="footer">
		<div class="container clearfix">
			<span class="copyright">© Copyright <?php echo date('Y'); ?>. Toate drepturile rezervate.</span>
			<span class="developed_by text_right">Dezvoltat de <img src="img/logo_webventure.png"></span>
		</div>
	</div>

</body>
</html>