<?php
$title = 'Mon blog';
ob_start();
include_once('functions.php');
?>

<header>
	<h2>En-tête principale</h2>
</header>

<section>
	<header>
		<h2>En-tête section</h2>
	</header>

	<div class="row">
		<div class="col-6">
			<article>
				<header>
					<h2>En-tête article</h2>
				</header>

				<footer>
					<h2>Pied d'article</h2>
				</footer>
			</article>
		</div>

		<div class="col-6">
			<aside>
				<header>
					<h2>En-tête informations</h2>
				</header>

				<footer>
					<h2>Pied d'informations</h2>
				</footer>
			</aside>
		</div>
	</div>

	<footer>
		<h2>Pied de section</h2>
	</footer>
</section>

<header>
	<h2>En-tête principale</h2>
</header>

<!-- Corps de la page -->
Bonjour à tous !
Bienvenue sur mon site web !

<!-- Ceci est un commentaire -->
<p>
	Bonjour et bienvenue sur mon site !<br />
	Ceci est mon premier test alors <mark><strong><em>soyez indulgents</em></strong></mark> s'il vous plaît, j'apprends petit à petit comment cela marche.
</p>

<p>Pour l'instant c'est un peu vide, mais revenez dans 2-3 jours quand j'aurai appris un peu plus de choses, je vous assure que vous allez être surpris !</p>

<h2>Titre important</h2>

<h3>Titre un peu moins important (sous-titre)</h3>

<h4>Titre pas trop important</h4>

<h5>Titre pas important</h5>

<h2>Bienvenue sur OpenClassrooms</h2>

<p>
	Bonjour et bienvenue sur mon site : OpenClassrooms.<br />
	OpenClassrooms, qu'est-ce que c'est ?
</p>

<h2>Des cours pour débutants</h2>

<p>OpenClassrooms vous propose des cours (tutoriels) destinés aux débutants : aucune connaissance n'est requise pour lire ces cours !</p>

<p>Vous pourrez ainsi apprendre, sans rien y connaître auparavant, à créer un site web, à programmer, à construire des mondes en 3D !</p>

<h2>Une communauté active</h2>

<p>
	Vous avez un problème, un élément du cours que vous ne comprenez pas ? Vous avez besoin d'aide pour créer votre site ?<br />
	Rendez-vous sur les forums ! Vous y découvrirez que vous n'êtes pas le seul dans ce cas et vous trouverez très certainement quelqu'un qui vous aidera aimablement à résoudre votre problème.
</p>

<ul>
	<li>Fraises</li>
	<li>Framboises</li>
	<li>Cerises</li>
</ul>

<h2>Ma journée</h2>

<ol>
	<li>Je me lève.</li>
	<li>Je mange et je bois.</li>
	<li>Je retourne me coucher.</li>
</ol>

<p>
	Bonjour. Vous souhaiter visiter <a href="https://openclassrooms.com/" title="Vous ne le regretterez pas !" target="_blank">OpenClassrooms</a> ?<br />
	C'est un bon site ;o)
</p>

<p>Bonjour. Souhaitez-vous consulter <a href="contenu/autredossier/page2.html">la page 2</a> ?</p>

<h2 id="mon_ancre">Titre</h2>

<a href="#mon_ancre">Aller vers l'ancre</a>

<h2>Ma grande page</h2>

<p>
	Aller directement à la partie traitant de :<br />
	<a href="#cuisine" aria-label="La cuisine 1">La cuisine</a><br />
	<a href="#rollers" aria-label="Les rollers 1">Les rollers</a><br />
	<a href="#arc" aria-label="Le tir à l'arc 1">Le tir à l'arc</a><br />
</p>

<h2 id="cuisine">La cuisine</h2>

<p>... (beaucoup de texte) ...</p>

<h2 id="rollers">Les rollers</h2>

<p>... (beaucoup de texte) ...</p>

<h2 id="arc">Le tir à l'arc</h2>

<p>... (beaucoup de texte) ...</p>

<h2>Le Mégamix</h2>

<p>
	Rendez-vous quelque part sur une autre page :<br />
	<a href="ancres.html#cuisine" aria-label="La cuisine 2">La cuisine</a><br />
	<a href="ancres.html#rollers" aria-label="Les rollers 2">Les rollers</a><br />
	<a href="ancres.html#arc" aria-label="Le tir à l'arc 2">Le tir à l'arc</a><br />
</p>

<p><a href="mailto:votrenom@bidule.com">Envoyez-moi un e-mail !</a></p>

<p><a href="monfichier.zip">Télécharger le fichier</a></p>

<p>
	Voici une photo que j'ai prise lors de mes dernières vacances à la montagne :<br />
	<img src="images/montagne.jpg" alt="C'est beau les Alpes quand même !" class="img-fluid">
</p>

<p>
	Vous souhaitez voir l'image dans sa taille d'origine ? Cliquez dessus !<br />
	<a href="images/montagne.jpg"><img src="images/montagne_mini.jpg" alt="Cliquez pour agrandir" class="img-fluid"></a>
</p>

<p>Connaissez-vous le logiciel Bloc-Notes ? On peut faire des sites web avec !</p>

<figure>
	<img src="images/blocnotes.png" alt="Bloc-Notes" class="img-fluid">
	<figcaption>Le logiciel Bloc-Notes</figcaption>
</figure>

<figure>
	<img src="images/internetexplorer.png" alt="Logo Internet Explorer" class="img-fluid">
	<img src="images/firefox.png" alt="Logo Mozilla Firefox" class="img-fluid">
	<img src="images/chrome.png" alt="Logo Google Chrome" class="img-fluid">
	<figcaption>Logos des différents navigateurs</figcaption>
</figure>

<h2>Mon super site</h2>

<p class="introduction">Bonjour et <span class="salutations">bienvenue</span> sur mon site !</p>

<p>Pour le moment, mon site est un peu <em>vide</em>. Patientez encore un peu !</p>

<h3>Titre avec <em>texte important</em></h3>

<h3>Titre</h3>

<p>Paragraphe</p>

<p><img src="flash.gif" alt="Image flottante" class="img-fluid"></p>

<p>Ceci est un texte normal de paragraphe, écrit à la suite de l'image et qui l'habillera car l'image est flottante.</p>

<p>Ce texte est écrit à côté de l'image flottante.</p>

<p class="dessous">Ce texte est écrit sous l'image flottante.</p>

<h2>Qui a éteint la lumière ?</h2>

<p>Brr, il fait tout noir sur ce site, c'est un peu <mark>inquiétant</mark> comme ambiance vous ne trouvez pas ?</p>

<h2>Vive les cupcakes</h2>

<p>J'ai découvert les cupcakes lors d'un voyage à <a href="https://fr.wikipedia.org/wiki/New_York">New York</a>... et depuis c'est une véritable passion. Sur mon site, vous saurez <strong>tout</strong> sur les cupcakes !</p>

<p>Un cupcake ? C'est ça :</p>

<figure>
	<img src="images/photo-1498458555718-c60a99aa4ddc.jpg" alt="" class="img-fluid">
	<figcaption>Un cupcake</figcaption>
</figure>

<p>Délicieux non ? Sur mon site, je vous présenterai :</p>

<ul>
	<li>Les différentes variétés de cupcakes</li>
	<li>Leur histoire</li>
	<li>Leurs recettes</li>
</ul>

<h2>Ma section de page</h2>

<p>Bla bla bla bla</p>

<div id="conteneur">
	<div class="element 1">Element </div>
	<div class="element 2">Element </div>
	<div class="element 3">Element </div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
	<div class="element"></div>
</div>

<h2>La Chine</h2>

<p>On peut aujourd’hui aller de Paris à Pékin en 10h d’avion. Si la Chine semble de moins en moins lointaine, son pouvoir d’attraction et son mystère demeurent. Depuis son ouverture économique commencée en 1992, la voilà devenue enfin accessible aux voyageurs et aux routards. Pour aller en Chine, un simple visa suffit.</p>

<p>Pas facile de découvrir en 3 semaines un pays vaste comme 17 fois la France. Au nord et à Pékin, la Grande Muraille, la Cité interdite, le palais d’Été, les musées et les temples. Au centre du pays, l’Armée enterrée de Xi’an. Non loin de la mer, Shanghai, ville symbole du nouveau capitalisme chinois. Enfin, c’est une autre Chine, raffinée, secrète et poétique, qui se cache dans les jardins de Suzhou ou sur les berges de la rivière Li, dans le Sud, près de Guilin ou encore le long des rizières et plantations de thé du Yunnan. Source : <a href="https://www.routard.com/guide/code_dest/chine.htm" aria-label="Chine | Guide de voyage Chine | Routard.com">Le Routard</a></p>

<h2>L'Espagne</h2>

<p>Diversité des paysages, des cultures, des langues (castillan, catalan, basque), des terroirs et des villes. L’Espagne s’offre à tous les goûts : laissons de côté les plages envahies l’été et la Costa del Sol bétonnée par les complexes hôteliers. Aventurons-nous plutôt dans l’intérieur du pays, superbe et naturel, prodigue en paysages saisissants, en monuments splendides, en modes de vie passionnants…</p>

<p>Pour cela, il suffit parfois de s’éloigner d’une dizaine de kilomètres des foules. Découvrir Salamanque, la petite Rome espagnole, ou Tolède la belle médiévale perchée sur son promontoire. Parcourir le rude plateau de Castille, de Ségovie à Léon, à la découverte de magnifiques cathédrales et d’extraordinaires musées. Goûter à la spécificité de l’âme catalane et à ses trésors artistiques, de Dalí à Gaudí en passant par Tapiès et Miró. Prendre le chemin de Saint-Jacques-de-Compostelle pour admirer les beautés de la rurale Galice, aussi verdoyante que la terre des Basques, à laquelle ils sont tant attachés. Ou, enfin, un soir de fête à Séville, Madrid ou Barcelone, succomber à cet éclatant bonheur de vivre qui est la marque du pays tout entier. Car les nuits y sont souvent plus intenses que les jours. Source : <a href="https://www.routard.com/guide/code_dest/espagne.htm" aria-label="Espagne | Guide de voyage Espagne | Routard.com">Le Routard</a></p>

<p>Ceci est un paragraphe avant le tableau.</p>

<table>
	<caption>Passagers du vol 377</caption>

	<!-- Ici, on écrira le contenu du tableau -->
	<thead> <!-- En-tête du tableau -->
		<tr>
			<th>Nom</th>
			<th>Âge</th>
			<th>Pays</th>
		</tr>
	</thead>

	<tbody> <!-- Corps du tableau -->
		<tr>
			<td>Carmen</td>
			<td>33 ans</td>
			<td>Espagne</td>
		</tr>

		<tr>
			<td>Michelle</td>
			<td>26 ans</td>
			<td>Etats-Unis</td>
		</tr>

		<tr>
			<td>François</td>
			<td>43 ans</td>
			<td>France</td>
		</tr>

		<tr>
			<td>Martine</td>
			<td>34 ans</td>
			<td>France</td>
		</tr>

		<tr>
			<td>Jonathan</td>
			<td>13 ans</td>
			<td>Australie</td>
		</tr>

		<tr>
			<td>Xu</td>
			<td>19 ans</td>
			<td>Chine</td>
		</tr>
	</tbody>

	<tfoot> <!-- Pied de tableau -->
		<tr>
			<th>Nom</th>
			<th>Âge</th>
			<th>Pays</th>
		</tr>
	</tfoot>
</table>

<table>
	<tr>
		<th>Titre du film</th>
		<th>Pour enfants ?</th>
		<th>Pour adolescents ?</th>
	</tr>

	<tr>
		<td>Massacre à la tronçonneuse</td>
		<td>Non, trop violent</td>
		<td>Oui</td>
	</tr>

	<tr>
		<td>Les bisounours font du ski</td>
		<td>Oui, adapté</td>
		<td>Pas assez violent...</td>
	</tr>

	<tr>
		<td>Lucky Luke, seul contre tous</td>
		<td colspan="2">Pour toute la famille !</td>
	</tr>
</table>

<table>
	<tr>
		<th>Titre du film</th>
		<td>Massacre à la tronçonneuse</td>
		<td>Les bisounours font du ski</td>
		<td>Lucky Luke, seul contre tous</td>
	</tr>

	<tr>
		<th>Pour enfants ?</th>
		<td>Non, trop violent</td>
		<td>Oui, adapté</td>
		<td rowspan="2">Pour toute la famille !</td>
	</tr>

	<tr>
		<th>Pour adolescents ?</th>
		<td>Oui</td>
		<td>Pas assez violent...</td>
	</tr>
</table>

<p>Texte avant le formulaire</p>

<form method="post" action="traitement.php">
	<p>Texte à l'intérieur du formulaire</p>

	<p>
		<label for="pseudo">Votre pseudo :</label>
		<input type="text" name="pseudo" id="pseudo" placeholder="Ex : Zozor" size="30" maxlength="10" class="form-control" />

		<br />
		<label for="pass">Votre mot de passe :</label>
		<input type="password" name="pass" id="pass" class="form-control" />
	</p>

	<p>
		<label for="ameliorer">
			Comment pensez-vous que je pourrais améliorer mon site ?
		</label>

		<br />

		<textarea name="ameliorer" id="ameliorer" rows="10" cols="50" class="form-control">Améliorer ton site ?!
Mais enfin ! Il est tellement génialissime qu'il n'est pas nécessaire de l'améliorer !</textarea>
	</p>

	<p>
		<label for="email-1">Email :</label>
		<input type="email" name="email-1" id="email-1" class="form-control" />
	</p>

	<p>
		<label for="url">URL :</label>
		<input type="url" name="url" id="url" class="form-control" />
	</p>

	<p>
		<label for="tel">Téléphone :</label>
		<input type="tel" name="tel" id="tel" class="form-control" />
	</p>

	<p>
		<label for="number-1">Nombre :</label>
		<input type="number" name="number-1" id="number-1" class="form-control" />
	</p>

	<p>
		<label for="range">Gamme :</label>
		<input type="range" name="range" id="range" />
	</p>

	<p>
		<label for="color">Couleur :</label>
		<input type="color" name="color" id="color" class="form-control" />
	</p>

	<p>
		<label for="date">Date :</label>
		<input type="date" name="date" id="date" class="form-control" />
	</p>

	<p>
		<label for="search-2">Rechercher :</label>
		<input type="search" name="search-2" id="search-2" class="form-control" />
	</p>

	<div class="mb-3">
		<div class="form-check">
			<label for="choix" class="form-check-label">Choix :</label>
			<input type="checkbox" name="choix" id="choix" class="form-check-input" checked />
		</div>
	</div>

	<div class="mb-3">
		<div class="form-check">
			Cochez les aliments que vous aimez manger :<br />
			<input type="checkbox" name="frites" id="frites" class="form-check-input" /> <label for="frites" class="form-check-label">Frites</label><br />
			<input type="checkbox" name="steak" id="steak" class="form-check-input" /> <label for="steak" class="form-check-label">Steak haché</label><br />
			<input type="checkbox" name="epinards" id="epinards" class="form-check-input" /> <label for="epinards" class="form-check-label">Epinards</label><br />
			<input type="checkbox" name="huitres" id="huitres" class="form-check-input" /> <label for="huitres" class="form-check-label">Huitres</label>
		</div>
	</div>

	<fieldset>
		<legend>Âge</legend>

		Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
		<input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
		<input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
		<input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
		<input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>
	</fieldset>

	<fieldset>
		<legend>Continent</legend>

		Sur quel continent habitez-vous ?<br />
		<input type="radio" name="continent" value="europe" id="europe" /> <label for="europe">Europe</label><br />
		<input type="radio" name="continent" value="afrique" id="afrique" /> <label for="afrique">Afrique</label><br />
		<input type="radio" name="continent" value="asie" id="asie" /> <label for="asie">Asie</label><br />
		<input type="radio" name="continent" value="amerique" id="amerique" /> <label for="amerique">Amérique</label><br />
		<input type="radio" name="continent" value="australie" id="australie" /> <label for="australie">Australie</label>
	</fieldset>

	<p>
		<label for="pays">Dans quel pays habitez-vous ?</label><br />

		<select name="pays" id="pays">
			<optgroup label="Europe">
				<option value="france">France</option>
				<option value="espagne">Espagne</option>
				<option value="italie">Italie</option>
				<option value="royaume-uni">Royaume-Uni</option>
			</optgroup>

			<optgroup label="Amérique">
				<option value="canada" selected>Canada</option>
				<option value="etats-unis">Etats-Unis</option>								
			</optgroup>

			<optgroup label="Asie">
				<option value="chine">Chine</option>
				<option value="japon">Japon</option>
			</optgroup>
		</select>
	</p>

	<fieldset>
		<legend>Vos coordonnées</legend> <!-- Titre du fieldset -->

		<div role="group" aria-labelledby="coordonnees">
			<p id="coordonnees">Vos coordonnées</p> <!-- Le groupe réalisé avec des div et les attributs ARIA -->

			<label class="hidden" for="nom">Quel est votre nom ?</label><br />
			<input type="text" name="nom" id="nom" class="form-control" /><br />

			<label for="prenom">Quel est votre prénom ?</label><br />
			<input type="text" name="prenom" id="prenom" class="form-control" autofocus required /><br />

			<label for="email-2">Quel est votre e-mail ?</label><br />
			<input type="email" name="email-2" id="email-2" class="form-control" />
		</div>
	</fieldset>

	<fieldset>
		<legend>Votre souhait</legend> <!-- Titre du fieldset -->

		<p>
			Faites un souhait que vous voudriez voir exaucé :<br />

			<input type="radio" name="souhait" value="riche" id="riche" /> <label for="riche">Etre riche</label><br />
			<input type="radio" name="souhait" value="celebre" id="celebre" /> <label for="celebre">Etre célèbre</label><br />
			<input type="radio" name="souhait" value="intelligent" id="intelligent" /> <label for="intelligent">Etre <strong>encore</strong> plus intelligent</label><br />
			<input type="radio" name="souhait" value="autre" id="autre" /> <label for="autre">Autre...</label>
		</p>

		<p>
			<label for="precisions">Si "Autre", veuillez préciser :</label><br />
			<textarea name="precisions" id="precisions" cols="40" rows="4" class="form-control"></textarea>
		</p>
	</fieldset>

	<label id="birth-date-1" for="birth-date-2">Date de naissance :</label>

	<span>
		<input type="text" name="birth-date-2" id="birth-date-2" aria-labelledby="birth-date-1" aria-describedby="birth-date-format" placeholder="JJ/MM/YYYY" class="form-control" />
		<span id="birth-date-format" class="hidden">JJ/MM/YYYY</span>
	</span>

	<p>
		<input type="submit" value="Envoyer" class="form-control" />
	</p>
</form>

<p>Texte après le formulaire</p>

<div>
	<audio controls>
		<source src="hype_home.mp3" type="audio/mp3">
		<source src="hype_home.ogg">
		Veuillez mettre à jour votre navigateur !
	</audio>
</div>

<h2>Tonight In Gotham</h2>

<p>
	No guns, no killing. Well, you see... I'm buying this hotel and setting some new rules about the pool area.
</p>

<p>
	It's not who I am underneath but what I do that defines me. It's ends here. I can't do that as <a class="content-link" href="#">Bruce Wayne</a>... as a man. I'm flesh and blood. I can be ignored, destroyed. But as a symbol, I can be incorruptible, I can be everlasting.
</p>

<p>
	I'm Batman Hero can be anyone. Even a man knowing something as simple and reassuring as putting a coat around a young boy shoulders to let him know the world hadn't ended. 
</p>

<p>
	I seek the means to <a class="content-link" href="#">fight injustice</a>. To turn fear against those who prey on the fearful. I'm not wearing hockey pads. It's not who I am underneath but what I do that defines me.
</p>

<h2>Joker on the loose</h2>

<p>
	Swear to me! I'll be standing where l belong. Between you and the peopIe of Gotham. Well, you see... I'm buying this hotel and setting some new rules about the pool area. No guns, no killing. I will go back to Gotham and I will fight men Iike this but I will not become an executioner.
</p>

<p>
	My anger outweights my guilt. It was a dog. It was a big dog. This isn't a car. I'll be standing where l belong. Between you and the peopIe of <a class="content-link" href="#">Gotham</a>.
</p>

<div>
	<div id="toggleNavbar">
		<div>
			<!-- le contenu de votre menu de navigation ici -->
		</div>
	</div>

	<nav>
		<button aria-controls="toggleNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span></span>
		</button>
	</nav>
</div>

<table>
	<caption>Achats et ventes - 2019</caption>

	<col>
	<colgroup span="2"></colgroup>
	<colgroup span="2"></colgroup>

	<tr>
		<td rowspan="2"></td>
		<th colspan="2" scope="colgroup">Janvier</th>
		<th colspan="2" scope="colgroup">Février</th>
	</tr>

	<tr>
		<th scope="col">Achat</th>
		<th scope="col">Vente</th>
		<th scope="col">Achat</th>
		<th scope="col">Vente</th>
	</tr>

	<tr>
		<th scope="row">Thomas</th>
		<td>50,000</td>
		<td>30,000</td>
		<td>100,000</td>
		<td>80,000</td>
	</tr>

	<tr>
		<th scope="row">Alexandre</th>
		<td>10,000</td>
		<td>5,000</td>
		<td>12,000</td>
		<td>9,000</td>
	</tr>
</table>

<!-- Content of your web page goes here -->
<h2>Your web page</h2>

<p>
	<button class="open-modal-btn">Open modal</button>
</p>

<div class="modal" aria-hidden="true" role="dialog" aria-describedby="modalTitle">
	<div>
		<header>
			<h2 id="modalTitle" class="modal-title">Modal title</h2>
		</header>

		<div>
			<p>Content of your modal window</p>
		</div>

		<button class="modal-close-btn">Close modal</button>
	</div>
</div>

<nav>
	<ul class="main-nav">
		<li class="nav-item">
			<a class="nav-item-link" href="index.html">accueil</a>
		</li>

		<li class="nav-item">
			<a class="nav-item-link" href="products.html">nos produits</a>
		</li>

		<li class="nav-item">
			<a class="nav-item-link" href="about.html">à propos</a>
		</li>
	</ul>
</nav>

<div class="series-frame">
	<h2>The Story of Tau</h2>

	<p id="info-1"></p>
	<p id="episode-info"></p>
</div>

<div class="series-frame">
	<h2>The Story of Tau</h2>

	<p id="first-episode-info"></p>
</div>

<div class="series-frame">
	<h2>The Story of Tau</h2>

	<p id="second-episode-info"></p>
</div>

<div class="series-frame">
	<h2>The Story of Tau</h2>

	<p id="third-episode-info"></p>
</div>

<div class="my-form">
	<label for="day-input">Number of days</label>
	<input id="day-input" type="number" min="1" class="form-control" />
	<button id="calculate-button">Calculate!</button>
	<p id="hours"></p>
	<p id="minutes"></p>
	<p id="seconds"></p>
</div>

<div id="body-2"></div>

<p>Number of episodes: <span id="episodes"></span></p>

<div id="body-3"></div>

<h2>Quel est votre âge?</h2>

<div class="mb-3">
	<div class="form-check">
		<div id="control">
			<input type="checkbox" id="parental" name="parental" class="form-check-input" checked />
			<label for="parental" class="form-check-label">Contrôle parental activé</label>
		</div>
	</div>
</div>

<label for="age" class="form-check-label">Entrez votre âge</label>
<input id="age" type="text" placeholder="entrez votre age" class="form-control" />
<input id="bouton-1" type="button" value="confirmer" class="form-control" />

<h2 id="message-1"></h2>

<div class="series-frame">
	<h2>The Story of Tau</h2>

	<p id="tau-info">Average rating: <span id="tau-score"></span></p>
</div>

<div class="series-frame">
	<h2>The Hero of Old Meldrum</h2>

	<p id="colin-info">Average rating: <span id="colin-score"></span></p>
</div>

<div class="series-frame">
	<h2>The Bugs of Isla Clara</h2>

	<p id="clara-info">Average rating: <span id="clara-score"></span></p>
</div>

<button id="refresh">Check ratings</button>
<div id="body-4"></div>

<h2>Calculer la factorielle</h2>

<label for="number-2" class="form-check-label">Entrez nombre</label>
<input id="number-2" type="text" placeholder="entrez nombre" class="form-control" />
<input id="bouton-2" type="button" value="Calculer" class="form-control" />

<h2 id="message-2"></h2>

<p>Page content here</p>

<div>
	<audio controls>
		<source src="hype_home.mp3" type="audio/mp3">
		Votre navigateur ne supporte pas la balise audio
	</audio>
</div>

<div>
	<video width="320" height="240" controls>
		<source src="couloir.mp4" type="video/mp4">
		<track src="captions_en.vtt" kind="captions" srclang="en" label="english_captions">
		<track src="captions_es.vtt" kind="captions" srclang="es" label="spanish_captions">
		Votre navigateur ne supporte pas la balise video
	</video>
</div>

<!--  canvas  -->
<canvas id="dessin-1" width="230" height="80">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="dessin-2" width="70" height="100">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="dessin-3" width="230" height="80">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="dessin-4" width="200" height="160">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="dessin-5" width="180" height="210">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="dessin-6" width="200" height="160">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="dessin-7" width="120" height="150">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<p>Détection du déplacement et de sa fin avec jQuery. (Déplacer l'image)</p>
<p id="info-2"></p>
<div id="image1"><img src="images/HTML5-logo.png" draggable="true" width="100" height="100" alt="" class="img-fluid"></div>
<div id="cible">Ce conteneur acceptera l'élément déplacé.</div>

<h2>Les billes dans les boîtes</h2>

<!-- information -->
<p id="info-3"></p>

<!-- les boîtes -->
<div id="boite1"></div>
<div id="boite2"></div>

<!-- les billes -->
<canvas id="bille1" width="40" height="40" draggable="true">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="bille2" width="40" height="40" draggable="true">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="bille3" width="40" height="40" draggable="true">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="bille4" width="40" height="40" draggable="true">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<canvas id="bille5" width="40" height="40" draggable="true">
	Texte pour les navigateurs qui ne supportent pas canvas
</canvas>

<p>Bonjour, je suis un <em>paragraphe</em> de texte !</p>

<?php
echo "<p>Hello world</p>";
echo "<p>Exécution de PHP</p>";
?>

<h2>Page de test</h2>

<p>
	Cette page contient <strong>uniquement</strong> du code HTML.<br />
	Voici quelques petites tests :
</p>

<p>
	Cette page contient du code HTML avec des balises PHP.<br />
	<?php /* Insérer du code PHP ici */ ?>
	Voici quelques petits tests :
</p>

<ul>
	<li style="color: blue;">Texte en bleu</li>
	<li style="color: red;">Texte en rouge</li>
	<li style="color: green;">Texte en vert</li>
</ul>

<?php
/* Encore du PHP
Toujours du PHP */
?>

<h2>Ma page web</h2>

<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

<p>
	Bonjour <!-- Insérer le pseudo du visiteur ici --> !
</p>

<?php
/* Le code PHP se met ici
Et ici
Et encore ici*/
?>

<h2>Page de test</h2>

<?php
echo "<p>Ceci est du texte</p>";

/* Ou bien, avec des parenthèses */
echo("<p>Ceci est du texte</p>");
echo "<p>Ceci est du <strong>texte</strong></p>";
echo "<p>Cette ligne a été écrite \"uniquement\" en PHP.</p>";
?>

<h2>Affichage de texte avec PHP</h2>

<p>
	Cette ligne a été écrite entièrement en HTML.<br />
	<?php echo("Celle-ci a été écrite entièrement en PHP."); ?>
</p>

<?php
echo "<p>J'habite en Chine.</p>"; // Cette ligne indique où j'habite

// La ligne suivante indique mon âge
/* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
echo "<p>J'ai 92 ans.</p>";

$userAge = 17; // La variable est créée et vaut 17
$userAge = 23; // La variable est modifiée et vaut 23
$userAge = 55; // La variable est modifiée et vaut 55

$fullname = 'Mathieu Nebra';
echo '<p>Bonjour ' . $fullname . ' et bienvenue sur le site !</p>'; // OK

$email = 'mathieu.nebra@exemple.com';

$variable = 'Mon "nom" est Mathieu';
$variable = "Je m'appelle Mathieu";

$price = 57.3;

$isAuthor = true;
$isAdministrator = false;

$noValue = NULL;

$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6

$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150

$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1

$isEnabled = true; // La condition d'accès
echo "<p>";

if ($isEnabled == true) {
	echo "Vous êtes autorisé(e) à accéder au site";
}
else {
	echo "Accès refusé";
}

echo "</p>";

$isAllowedToEnter = "Oui";

// Si on a l'autorisation de rentrer
if ($isAllowedToEnter == "Oui") {
	// instructions à exécuter quand on est autorisé à rentrer
} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter == "Non") {
	// instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
	echo "<p>Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?</p>";
}

$isAllowedToEnter = true;
echo "<p>";

if ($isAllowedToEnter) {
	echo "Bienvenue petit nouveau. :o)";
}
else {
	echo "T'as pas le droit d'entrer !";
}

echo "</p>";

// Si pas autorisé
if (! $isAllowedToEnter) {

}

$isOwner = false;
$isAdmin = true;
echo '<p>';

if (($isEnabled && $isOwner) || $isAdmin) {
	echo 'Accès à la recette validé';
} else {
	echo 'Accès à la recette interdit';
}

echo '</p>';

$chickenRecipesEnabled = true;

if ($chickenRecipesEnabled): // Ne pas oublier le ":"
?>
	<h2>Liste des recettes à base de poulet</h2>
<?php
endif; // Ni le ";" après le endif

$grade = 16;
echo "<p>";

if ($grade == 0) {
	echo "Tu es vraiment un gros nul !!!";
}

elseif ($grade == 5) {
	echo "Tu es très mauvais";
}

elseif ($grade == 10) {
	echo "Tu as pile poil la moyenne, c'est un peu juste...";
}

elseif ($grade == 12) {
	echo "Tu es assez bon";
}

elseif ($grade == 16) {
	echo "Tu te débrouilles très bien !";
}

elseif ($grade == 20) {
	echo "Excellent travail, c'est parfait !";
}

else {
	echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

echo "</p>";

$grade = 10;
echo "<p>";

switch ($grade) // on indique sur quelle variable on travaille
{
	case 0:
		echo "Tu es vraiment un gros nul !!!";
	break;

	case 5:
		echo "Tu es très mauvais";
	break;

	case 10:
		echo "Tu as pile poil la moyenne, c'est un peu juste...";
	break;

	case 12:
		echo "Tu es assez bon";
	break;

	case 16:
		echo "Tu te débrouilles très bien !";
	break;

	case 20:
		echo "Excellent travail, c'est parfait !";
	break;

	default:
		echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

echo "</p>";

$userAge = 24;

if ($userAge >= 18) {
	$isAdult = true;
}
else {
	$isAdult = false;
}

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);

// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rd';
$userAg2 = 28;

$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo '<p>';
echo $user1[0] . '<br />'; // "Mickaël Andrieu"
echo $user1[1] . '<br />'; // "email"
echo $user1[2]; // 34
echo '</p>';

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo '<p>' . $users[1][1] . '</p>'; // "mathieu.nebra@exemple.com"

$lines = 1;
echo '<p>';

while ($lines <= 100) {
	echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.';
	$lines++;

	if ($lines <= 100) {
		echo '<br />';
	}
}

echo '</p>';

$lines = 1;
echo '<p>';

while ($lines <= 100)
{
	echo 'Ceci est la ligne n°' . $lines;
	$lines++;

	if ($lines <= 100) {
		echo '<br />';
	}
}

echo '</p>';

/*

Ceci est la ligne n°1
Ceci est la ligne n°2
*
*/

$lines = 3;
$counter = 0;
echo '<p>';

while ($counter < $lines) {
	echo $users[$counter][0] . ' ' . $users[$counter][1];
	$counter++;

	if ($counter < $lines) {
		echo '<br />';
	}
}

echo '</p>';
echo '<p>';

for ($lines = 0; $lines <= 2; $lines++)
{
	echo $users[$lines][0] . ' ' . $users[$lines][1];

	if ($lines < 2) {
		echo '<br />';
	}
}

echo '</p>';

$recipeTitle = 'Cassoulet';
echo "<p>La recette du " . $recipeTitle . "</p>";

$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';

$recipes = array();
$recipes[] = 'Cassoulet'; // Créera $recipes[0]
$recipes[] = 'Couscous'; // Créera $recipes[1]
$recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]

echo '<p>' . $recipes[1] . '</p>'; // Cela affichera : Couscous

// Une bien meilleure façon de stocker une recette !
$recipe = [
	'title' => 'Cassoulet',
	'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
	'author' => 'john.doe@exemple.com',
	'enabled' => true,
];

$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;

echo '<p>' . $recipe['title'] . '</p>';

/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
	['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
	['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
];

echo '<p>';

for ($lines = 0; $lines <= 1; $lines++) {
	echo $recipes[$lines][0];

	if ($lines < 1) {
		echo '<br />';
	}
}

echo '</p>';
echo '<p>';

foreach ($recipes as $recipe) {
	echo $recipe[0] . '<br />'; // Affichera Cassoulet, puis Couscous
}

echo '</p>';

$recipe = [
	'title' => 'Cassoulet',
	'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
	'author' => 'mickael.andrieu@exemple.com',
	'enabled' => true,
];

echo '<p>';

foreach ($recipe as $value) {
	echo $value . '<br />';
}

echo '</p>';

$recipes = [
	[
		'title' => 'Cassoulet',
		'recipe' => '',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => true,
	],
	[
		'title' => 'Couscous',
		'recipe' => '',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => false,
	],
	[
		'title' => 'Escalope milanaise',
		'recipe' => '',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => true,
	],
	[
		'title' => 'Salade Romaine',
		'recipe' => '',
		'author' => 'laurene.castor@exemple.com',
		'is_enabled' => false,
	],
];

echo '<p>';

foreach ($recipes as $recipe) {
	echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . '<br />';
}

echo '</p>';

$recipe = [
	'title' => 'Salade Romaine',
	'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
	'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
	echo '<p>La clé "title" se trouve dans la recette !</p>';
}

if (array_key_exists('commentaires', $recipe))
{
	echo '<p>La clé "commentaires" se trouve dans la recette !</p>';
}

echo '<p>';

foreach($recipe as $property => $propertyValue)
{
	echo '[' . $property . '] vaut ' . $propertyValue . '<br />';
}

echo '</p>';

$recipes = [
	[
		'title' => 'Cassoulet',
		'recipe' => '',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => true,
	],
	[
		'title' => 'Couscous',
		'recipe' => '',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => false,
	],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';

$users = [
	'Mathieu Nebra',
	'Mickaël Andrieu',
	'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '<p>"Mathieu" se trouve en position ' . $positionMathieu . '<br />';

$positionLaurene = array_search('Laurène Castor', $users);
echo '"Laurène se trouve en position ' . $positionLaurene . '</p>';

if (in_array('Mathieu Nebra', $users))
{
	echo '<p>Mathieu fait bien partie des utilisateurs enregistrés !</p>';
}

if (in_array('Arlette Chabot', $users))
{
	echo '<p>Arlette fait bien partie des utilisateurs enregistrés !</p>';
}
?>

<h2>Affichage des recettes</h2>

<!-- Boucle sur les recettes -->
<?php
$recipes = [
	[
		'title' => 'Cassoulet',
		'recipe' => 'Etape 1 : des flageolets !',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => true,
	],
	[
		'title' => 'Couscous',
		'recipe' => 'Etape 1 : de la semoule',
		'author' => 'mickael.andrieu@exemple.com',
		'is_enabled' => false,
	],
	[
		'title' => 'Escalope milanaise',
		'recipe' => 'Etape 1 : prenez une belle escalope',
		'author' => 'mathieu.nebra@exemple.com',
		'is_enabled' => true,
	],
];

// AVANT

foreach($recipes as $recipe) :
?>
	<!-- si la clé existe et a pour valeur "vrai", on affiche -->
	<?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true): ?>
		<article>
			<header>
				<h3><?php echo $recipe['title']; ?></h3>
			</header>

			<div><?php echo $recipe['recipe']; ?></div>

			<footer>
				<i><?php echo $recipe['author']; ?></i>
			</footer>
		</article>
	<?php endif; ?>
<?php
endforeach;

// APRES

// construire l'affichage HTML des recettes
foreach(get_recipes($recipes) as $recipe) {
	// echo $recipe['title'] ..
}

$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);

echo '<p>La phrase ci-dessous comporte ' . $length . ' caractères :<br />' . $recipe . '</p>';
echo '<p>' . str_replace('c', 'C', 'le cassoulet, c\'est très bon') . '</p>';

$recipe = [
	'title' => 'Salade Romaine',
	'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
	'author' => 'laurene.castor@exemple.com',
	'is_enabled' => true,
];

// mieux
$isEnabled = $recipe['is_enabled'];

// encore mieux !
if (array_key_exists('is_enabled', $recipe)) {
	$isEnabled = $recipe['is_enabled'];
} else {
	$isEnabled = false;
}

echo sprintf(
	'<p>%s par "%s" : %s</p>',
	$recipe['title'],
	$recipe['author'],
	$recipe['recipe']
);

$year = date('Y');
echo '<p>' . $year . '</p>';

// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo '<p>Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour . 'h' . $minute . '</p>';

// 2 exemples
$romanSalad = [
	'title' => 'Salade Romaine',
	'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
	'author' => 'laurene.castor@exemple.com',
	'is_enabled' => true,
];

$sushis = [
	'title' => 'Sushis',
	'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
	'author' => 'laurene.castor@exemple.com',
	'is_enabled' => false,
];

// Répond true !
$isRomanSaladValid = isValidRecipe($romanSalad);

// Répond false !
$isSushisValid = isValidRecipe($sushis);

$id_news = 5;

echo "<p>Bonjour !</p>";

$fichier = fopen("fichier.txt", "r");
?>

<h2>Liste des recettes</h2>

<!-- Plus facile à lire -->
<?php
foreach(get_recipes($recipes) as $recipe) {
	echo display_recipe($recipe);
}
?>

<p><a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a></p>

<form action="contact.php" method="GET">
	<!-- données à faire passer à l'aide d'inputs -->
	<div class="mb-3">
		<input name="nom" class="form-control" />
	</div>

	<div class="mb-3">
		<input name="prenom" class="form-control" />
	</div>
</form>

<form action="submit_contact.php" method="POST" enctype="multipart/form-data">
	<!-- champs de formulaire -->
	<!-- Ajout des champs email et message -->
	<div class="mb-3">
		<label for="email" class="form-label">Email</label>
		<input type="email" name="email" id="email" class="form-control" />
	</div>

	<div class="mb-3">
		<label for="message" class="form-label">Votre message</label>
		<textarea placeholder="Exprimez vous" name="message" id="message" class="form-control"></textarea>
	</div>

	<!-- Ajout d'un champ d'upload ! -->
	<div class="mb-3">
		<label for="screenshot" class="form-label">Votre capture d'écran</label>
		<input type="file" class="form-control" id="screenshot" name="screenshot" />
	</div>
	<!-- Fin ajout du champ -->

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Envoyer</button>
	</div>
</form>

<form method="post" action="submit_form.php">
	<p>
		On insérera ici les éléments de notre formulaire.
	</p>

	<div class="mb-3">
		<input type="text" name="nom" value="Mateo21" class="form-control" />
	</div>

	<input type="hidden" name="pseudo" value="Mateo21" />
</form>

<p>Bonjour <?php echo $_COOKIE['LOGGED_USER']; ?> !</p>

<?php
try
{
	// Souvent on identifie cet objet par la variable $conn ou $db
	// On se connecte à MySQL
	$mysqlClient = new PDO(
		'mysql:host=localhost;dbname=my_recipes;charset=utf8',
		'root',
		'root',
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	);
}
catch (Exception $e)
{
	// En cas d'erreur on affiche un message et on arrête tout
	die('<p>Erreur : ' . $e->getMessage() . '</p>');
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';
$recipesStatement = $mysqlClient->prepare($sqlQuery);

if (!$recipesStatement->execute([
	'author' => 'mathieu.nebra@exemple.com',
	'is_enabled' => true,
])) {
	echo '<p>PDOStatement::execute a retourné faux</p>';
} else {
	$recipes = $recipesStatement->fetchAll();

	// On affiche chaque recette une à une
	foreach ($recipes as $recipe) {
	?>
		<p><?php echo $recipe['author']; ?></p>
	<?php
	}
}
?>

<h2>Mon super blog !</h2>

<p>Contenu de la page</p>
<p>Derniers billets du blog :</p>

<?php
while ($data = $posts->fetch())
{
?>
	<article>
		<header>
			<h3>
				<?= htmlspecialchars($data['title']) ?>
				<em>le <?= $data['creation_date_fr'] ?></em>
			</h3>
		</header>

		<p><?= nl2br(htmlspecialchars($data['content'])) ?></p>

		<footer>
			<p><em><a href="?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em></p>
		</footer>
	</article>
<?php
} // Fin de la boucle des billets
$posts->closeCursor();

$date = new DateTime;

// déclaration de référence à un l'objet
function foo(DateTime $date) {
	$date->modify('+1 day'); // permet d'ajouter 1 jour à la date
}

$date = new DateTime;
foo ($date);

// $date est maintenant au lendemain

$dateUne = new DateTime;
$dateDeux = $dateUne;

$dateDeux->modify('+1 day');

var_dump($dateUne, $dateDeux);

// $dateUne et $dateDeux désignent le même objet en mémoire
// Ils sont donc tous les deux au lendemain

$date = new DateTime;
echo '<p>' . $date->format('d/m/Y') . '</p>';

// D'abord, l'exemple sans chaînage :
$date = new DateTime;
$newDate = $date->modify('+1 day');

echo '<p>' . $date->format('d/m/Y') . '<br />';
echo $newDate->format('d/m/Y') . '</p>';

// Maintenant avec le chaînage. Nous exploitons directement
// l'objet qui nous est retourné sans le stocker dans une variable :
$formatedDate = $date->modify('+1 day')->format('d/m/Y');
echo '<p>' . $formatedDate . '</p>';

$date = new DateTimeImmutable;
$newDate = $date->modify('+1 day');

echo '<p>' . $date->format('d/m/Y') . '<br />';
echo $newDate->format('d/m/Y') . '</p>';

require_once('Domain/User/User.php');

use Domain\Forum\Message;
use Domain\User\User;

$user = new User;
$user->name = 'Greg';

require_once('RuntimeException.php');

/**
 * @var string $text le contenu du message
 * @return bool true en cas de succès
 * @throw Exception on error
 */
function sendEmail(string $text): bool
{
	if (/*on simule que l'envoie du message réussie*/ false)
	{
		// l'exception jetée avec son message et son code d'erreur
		throw new EmailSendingErrorException();
	}

	return true;
}

/**
 * @var string $text le contenu du message
 * @return bool true en cas de succès
 * @throw Exception on error
 */
function sendNotification(string $text): bool
{
	if (/*on simule que l'envoie de notification échoue*/ true)
	{
		// l'exception jetée avec son message et son code d'erreur
		throw new NotificationSendingErrorException();
	}

	return true;
}

/**
 * @var string $text le contenu du message
 * @return bool true en cas de succès
 * @throw Exception on error
 */
function sendMessage(string $text): bool
{
	if (10 > strlen($text))
	{
		// l'exception jetée avec son message et son code d'erreur
		throw new ShortTextException();
	}

	try {
		sendNotification($text);
	} catch (NotificationSendingErrorException $e) {
		// Envoyez vous une alerte
		// pour vous prévenir que les notifications ne marche pas ;)
	} finally {
		// finally permet d'exécuter du code quoi qu'il arrive :)
		sendEmail($text);
		// si une exception est jetée par sendEmail,
		// Le return n'est jamais exécuté
		return true;
	}

	sendEmail($text);

	return true;
}

try {
	sendMessage('Hello, ici Greg "pappy" Boyington');
} catch (ShortTextException $e) {
	echo '<p>' . $e->getMessage() . '</p>';
} catch (EmailSendingErrorException $e) {
	echo '<p>Une erreur est survenue lors de l\'envoi du message, nos équipes ont été prévenues veuillez réessayer plus tard</p>';
} catch (Exception $e) {
	echo '<p>Une erreur inattendue est survenue, nos équipes ont été prévenues, veuillez réessayer plus tard</p>';
}

require_once('A.php');

$b = new B();

echo '<p>' . $b->helloWorld() . '</p>';

require_once('Order.php');

try {
    throw new InvalidShippingCostException();
} catch (InvalidShippingCostException $e) {
    echo '<p>ERREUR!</p>';
}

try {
    throw new BadFormattedCostException();
} catch (InvalidShippingCostException $e) {
    echo '<p>ERREUR 2!</p>';
}

require_once('Fan.php');

$concertsPlanner = new ConcertsPlanner();

// ...

require_once('Customer.php');

$customer = new Customer();
?>

<h2>To do list</h2>

<ol>
	<li><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql">Concevez votre site web avec PHP et MySQL</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript">Apprenez à programmer avec JavaScript</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web?archived-source=1916641">Écrivez du JavaScript pour le web</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/2434016-developpez-des-sites-web-avec-java-ee">Développez des sites web avec Java EE</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/235344-apprenez-a-programmer-en-python">Apprenez à programmer en Python</a></li>
	<li><a href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-django">Découvrez le framework Django</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/3829076-lancez-une-campagne-facebook-ads">Lancez une campagne Facebook Ads</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/4011851-initiez-vous-au-machine-learning">Initiez-vous au Machine Learning</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux">Reprenez le contrôle à l'aide de Linux !</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/6573181-adoptez-les-api-rest-pour-vos-projets-web">Adoptez les API REST pour vos projets web</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/6951236-mettez-en-place-votre-environnement-python">Mettez en place votre environnement Python</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/4452741-decouvrez-les-librairies-python-pour-la-data-science">Découvrez les librairies Python pour la Data Science</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python">Apprenez la programmation orientée objet avec Python</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp">Sécurisez vos applications web avec l'OWASP</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/1959476-administrez-vos-bases-de-donnees-avec-mysql">Administrez vos bases de données avec MySQL</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php">Adoptez une architecture MVC en PHP</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php">Programmez en orienté objet en PHP</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5">Construisez un site web à l’aide du framework Symfony 5</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/6031956-creez-une-application-web-en-php-de-qualite-professionnelle?status=published">Créez une application web en PHP de qualité professionnelle</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/4087056-testez-et-suivez-letat-de-votre-application-php">Testez et suivez l'état de votre application PHP</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/4087076-testez-fonctionnellement-votre-application-symfony">Testez fonctionnellement votre application Symfony</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/4939956-surveillez-la-performance-de-votre-application-php">Surveillez la performance de votre application PHP</a></li>
	<li><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5">Construisez un site web à l’aide du framework Symfony 5</a></li>
</ol>

<footer>
	<h2>Pied principal</h2>
</footer>

<?php
$content = ob_get_clean();
require('template.php');
?>
