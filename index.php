<?php
	if (stripos($_SERVER['REQUEST_URI'], 'api') !== false) {
		
		include 'calcul_zile.php';

		if ( is_numeric(substr($_SERVER['REQUEST_URI'], -4)) ) {
			die(returnLegalDays( substr($_SERVER['REQUEST_URI'], -4), 1 ));
		}
		die(json_encode(['error' => 'Link-ul trebuie sa contina anul dorit']));
	}

	$year = date("Y");
	if ( is_numeric(substr($_SERVER['REQUEST_URI'], -4)) ) {
		$year = substr($_SERVER['REQUEST_URI'], -4);
	}
	
	
	$site_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Zile Libere <?php echo $year ?></title>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Site CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url; ?>/css/style.css">
	
	<script src="https://use.fontawesome.com/45050bf34e.js"></script>

	<!-- Jquery -->
	<script
	  src="https://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous"></script>

	<!-- Bootstrap Select -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<!-- Site Js -->
  	<script type="text/javascript" src="<?php echo $site_url; ?>/js/script.js"></script>
</head>
<body>

	<div class="header">
		<div class="container">
			<h1 class="title">Zile libere <span class="the_year"><?php echo $year; ?></span></h1>
			<h2 class="subtitle">Alege anul dorit pentru afisarea zilelor libere legale</h1>
			
			<div class="search_box">
				<select class="selectpicker">
					<?php for ($i = $year - 20; $i <= $year + 20; $i++) { ?>
						<option <?php echo $i == $year ? "selected" : ""; ?> ><?php echo $i; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>

	<div class="container">
		<h3 class="content_title margin-bottom-25">Zile libere <span class="the_year"><?php echo $year; ?></span></h3>

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
					<div class="quote_text"> https://zilelibere.webventure.ro/api/[yyyy] </div>
					<span class="text">si vei primi un raspuns de forma:</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="quote_text">
<pre>
{  
  "name":"Anul Nou",
  "date":[  
     {  
        "date":"2017/01/01",
        "weekday":"Sun"
     },
     {  
        "date":"2017/01/02",
        "weekday":"Mon"
     }
  ]
},
{  
  "name":"Ziua Unirii Principatelor Române",
  "date":[  
     {  
        "date":"2017/01/24",
        "weekday":"Tue"
     }
  ]
}
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
			<span class="developed_by text_right">Dezvoltat de <img src="<?php echo $site_url; ?>/img/logo_webventure.png"></span>
			<span class="copyright">© Copyright <?php echo date('Y'); ?>. Toate drepturile rezervate.</span>
		</div>
	</div>

</body>
</html>