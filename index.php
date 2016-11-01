<!DOCTYPE html>
<html lang="it">
<head>
	
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Calcola i reali costi della tua Partita IVA nel regime forfettario</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">

	<meta property="og:type" content="profile">
	<meta property="og:title" content="Calcola Partita Iva">
	<meta property="og:description" content="Quanto costa aprire una partita IVA col nuovo regime forfettario? Piccola app per una veloce stima e calcolo dei costi e dello sviluppo di una nuova partita IVA col regime forfettario.">
	<meta property="og:url" content="http://demo.orangedropdesign.com/calcolapiva/">
	<meta property="og:image" content="http://demo.orangedropdesign.com/calcolapiva/image.png">

</head>
<body>
	
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-4918423-14', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<!-- Facebook App -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.8&appId=244632782317731";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id="app" class="container py-3">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">

				<h1 class="text-xs-center">Calcola P. IVA</h1>

				<p class="lead text-xs-center">Ovvero, fare una stima veloce per vedere se mi conviene</p>

				<div class="card card-block text-xs-center">

					<div class="fb-like" data-href="http://demo.orangedropdesign.com/calcolapiva/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

				</div>

				<p><img src="image.png" class="img-fluid rounded"></p>

				<p>Questa piccola app serve a fare una stima o un computo veloce di quanto e come potrebbe svilupparsi una attività gestita sulla nuova partita I.V.A. del nuovo regime forfettario.</p>

				<div class="card card-block">

					<div class="form-group">
						<label>Fatturato</label>
						<div class="input-group">
							<span class="input-group-addon">€</span>
							<input class="form-control" type="number" min="0" step="1" v-model="fatturato">
							<span class="input-group-addon">,00</span>
						</div>
						<small class="form-text text-muted">Ovvero: quanto riusciamo a fatturare (e incassare) durante l'anno</small>
					</div>

					<div class="form-group">
						<label>Spesa</label>
						<div class="input-group">
							<span class="input-group-addon">€</span>
							<input class="form-control" disabled type="number" min="0" step="1" v-model="spesa">
						</div>
						<small class="form-text text-muted">Il regime stesso prevede in maniera <strong>forfettaria</strong> che ci sia una spesa del <strong>22%</strong> rispetto al fatturato dichiarato</small>
					</div>

					<div class="form-group">
						<label>Reddito netto</label>
						<div class="input-group">
							<span class="input-group-addon">€</span>
							<input class="form-control" disabled type="number" min="0" step="1" v-model="reddito">
						</div>
						<small class="form-text text-muted">Ovvero: <strong>fatturato - spesa</strong>. Che è poi il valore che prende in considerazione lo Stato per calcolare quante tasse dobbiamo pagare.</small>
					</div>

					<div class="form-group">
						<label>Imposta sostitutiva (prossimo anno)</label>
						<div class="input-group">
							<span class="input-group-addon">€</span>
							<input class="form-control" disabled type="number" min="0" step="1" v-model="sostitutiva">
						</div>
						<small class="form-text text-muted">Ovvero: <strong>tasse</strong> del 5% sul reddito netto.</small>
					</div>

					<div class="form-group">
						<label>Contributi di previdenza sociale (prossimo anno)</label>
						<div class="input-group">
							<span class="input-group-addon">€</span>
							<input class="form-control" disabled type="number" min="0" step="1" v-model="contributi">
						</div>
						<small class="form-text text-muted">Ovvero: <strong>pensione</strong>. Non sono effettivamente tasse ma dei versamenti di previdenza sociale che andranno a comprire la nostra futura pensione.</small>
					</div>

					<div class="form-group">
						<label>Guadagno netto</label>
						<div class="input-group">
							<span class="input-group-addon">€</span>
							<input class="form-control" disabled type="number" min="0" step="1" v-model="netto">
						</div>
						<small class="form-text text-muted">Ovvero: quanto rimane del fatturato a fine anno.</small>
					</div>

				</div>

				<small class="text-muted">
					<strong>Disclaimer</strong>: questa pagina, i calcoli in essa forniti e le informazioni riportate non sono da considerarsi totalmente attendibili. Questo strumento deve essere utilizzato solamente come uno strumento di valutazione e non deve sostituire l'intervento di un professionista che possa dare indicazione precisa e compiere calcoli più dettagliati.
				</small>
	
			</div>
		</div>
	</div>
	
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>

	<script>

	var app = new Vue({

		el: '#app',

		data: {
			/*
			mesi: [
				{ num: 1, nome: 'Gennaio' },
				{ num: 2, nome: 'Febbraio' },
				{ num: 3, nome: 'Marzo' },
				{ num: 4, nome: 'Aprile' },
				{ num: 5, nome: 'Maggio' },
				{ num: 6, nome: 'Giugno' },
				{ num: 7, nome: 'Luglio' },
				{ num: 8, nome: 'Agosto' },
				{ num: 9, nome: 'Settembre' },
				{ num: 10, nome: 'Ottobre' },
				{ num: 11, nome: 'Novembre' },
				{ num: 12, nome: 'Dicembre' }
			],

			mese: 1,
			*/
			
			fatturato: 18000,
			percSpesa: 22

		},

		computed: {

			spesa: function(){
				return (this.fatturato / 100 * this.percSpesa).toFixed(2);
			},

			reddito: function(){
				return (this.fatturato - this.spesa).toFixed(2);
			},

			sostitutiva: function(){
				return (this.reddito / 100 * 5).toFixed(2);
			},

			contributi: function(){
				return (this.reddito / 100 * 27.72).toFixed(2);
			},

			netto: function(){
				return (this.fatturato - this.sostitutiva - this.contributi).toFixed(2);
			}

		}

	})

	</script>

</body>
</html>