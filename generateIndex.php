<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio de Felix Martins</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
	<header id="header">
		<span id="topname">Portfolio de Felix Martins</span>
		<a href="javascript:setFullScreen()" class="bouton border"><img src="img/header-squares.png" alt="placeholder"></a><a href="javascript:closeWindow()" class="bouton border"><img src="img/header-x.png" alt="placeholder"></a>
	</header>

	<main>
		<div id="presentation" class="block border">
			<h1>
				<a href="javascript:showBloc('presentationcontent')"></a>
				<a href="javascript:hideBloc('presentationcontent')" class="bouton border"><img src="img/header-minus.png" alt="placeholder"></a>
			</h1>
			<div class="show" id="presentationcontent">
				<div id="presentationcontentaside" class="show">
					<h2>Felix Martins</h2>
					<ul>
						<li class="border">Etudiant en BUT2 informatique à l'UGA</li>
						<li class="border">Développeur backend</li>
						<li class="border">Futur ingénieur réseau</li>
					</ul>
				</div>
				<img src="/img/me.jpeg" alt="Photo de Felix Martins">
			</div>
		</div>
		<div id="mesprojets" class="block border show">
			<h1>
				<a href="javascript:showBloc('mesprojets')">Mes projets</a>
				<a href="javascript:hideBloc('mesprojets')" class="bouton border"><img src="img/header-minus.png" alt="placeholder"></a>
			</h1>
			<div class="mesprojets">
				<div class="SAEmenu" id="SAE1012menu">
					<a class="border" href="javascript:displayProjet('SAE1012')">Implémentation d'un besoin client et comparaison d'approches algorithmiques</a>
				</div>
				<div class="SAEmenu" id="SAE203menu">
					<a class="border" href="javascript:displayProjet('SAE203')">Installation de services réseaux</a>
				</div>
				<div class="SAEmenu" id="SAE204menu">
					<a class="border" href="javascript:displayProjet('SAE204')">Exploitation d'une base de données</a>
				</div>
				<div class="SAEmenu" id="SAE201256menu">
					<a class="border" href="javascript:displayProjet('SAE201256')">Développement d'une application lourde</a>
				</div>
			</div>
		</div>
		<div class="SAE block border" id="SAE1012">
			<h1>
				<a href="javascript:showBloc('SAE1012')">Implémentation d'un besoin client et comparaison d'approches algorithmiques</a>
				<a href="javascript:hideBloc('SAE1012')" class="bouton border"><img src="img/header-x.png" alt="placeholder"></a>
			</h1>
			<div class="SAEcontent">
				<div class="SAEtext">
					<h2>Implémentation d'un besoin client et comparaison d'approches algorithmiques</h2>
					<div class="SAEmoodles">
						<span class="border bouton SAEmoodle" title="Correspondance avec le Programme National"><a href="https://cache.media.education.gouv.fr/file/SP4-MESRI-26-5-2022/14/6/spe617_annexe15_1426146.pdf#page=62" target="_blank"><img src="img/sheet.png" alt="Icone de feuille"></a></span>
						<span class="border bouton SAEmoodle" title="GitHub du projet"><a href="https://github.com/Elfix3123/SAE1.01-02" target="_blank"><img src="img/github.png" alt="Icone de Github"></a></span>
						<span class="border SAEmoodle" title="Taille de l'équipe projet"><img src="img/people.png" alt="Personnages" ><span>2 personnes</span></span>
						<span class="border SAEmoodle" title="Charge totale du projet"><img src="img/clock.png" alt="Horloge"><span>40 heures/homme</span></span>
						<span class="border SAEmoodle" title="Technologies utilisées"><img src="img/java.png" alt="Java"></span>
					</div>
					<p>
						<p>
							Ce projet concernait dans notre cas la classification de dépêches en plusieurs catégories (sport,
							économie, santé…) en fonction des mots qu'elles contenaient. Nous avons dû pour cela créer
							un programme qui, à partir d'un lexique associant certains mots à un score pour chaque
							catégorie, associe à chaque dépêche un score pour chaque catégorie. Cette approche nous a
							permis de nous rendre compte que les lexiques construits manuellement étaient parfois
							insuffisants pour avoir des résultats précis et nous a conduit à automatiser cette création avec
							du machine learning : à partir d'un ensemble de dépêches à la catégorie connue, nous avons
							pu identifier les mots revenants le plus souvent pour chaque catégorie et ainsi associer un
							score plus adapté à chaque mot. 
						</p>
						<p>
							Nous avons également dû mesurer en temps et en nombre
							d'opérations notre programme, nous conduisant par exemple à trier les mots des lexiques afin
							de pouvoir rechercher le mot voulu en un nombre d'opérations plus faible.
						</p> 	
						<p>
							Enfin, nous avons pu
							implémenter certaines extensions comme la lecture d'un flux RSS pour continuer à entraîner
							notre programme au delà de l'échantillon fourni, ou encore l'implémentation de la méthode des
							k plus proches voisins à la place des score pour trouver les dépêches partageant le plus de
							mots en commun. Nous n'avons pas réussi à complètement implémenter ces extensions.
						</p>
					</p>
				</div>
				<div class="SAEimg"></div>
			</div>
		</div>
		<div class="SAE block border" id="SAE203">
			<h1>
				<a href="javascript:showBloc('SAE203')">Installation de services réseau</a>
				<a href="javascript:hideBloc('SAE203')" class="bouton border"><img src="img/header-x.png" alt="placeholder"></a>
			</h1>
			<div class="SAEcontent">
				<div class="SAEtext">
					<h2>Installation de services réseau</h2>
					<div class="SAEmoodles">
						<span class="border bouton SAEmoodle" title="Correspondance avec le Programme National"><a href="https://cache.media.education.gouv.fr/file/SP4-MESRI-26-5-2022/14/6/spe617_annexe15_1426146.pdf#page=86" target="_blank"><img src="img/sheet.png" alt="Icone de feuille"></a></span>
						<span class="border SAEmoodle" title="Taille de l'équipe projet"><img src="img/people.png" alt="Personnages" ><span>1 personne</span></span>
						<span class="border SAEmoodle" title="Charge totale du projet"><img src="img/clock.png" alt="Horloge"><span>20 heures/homme</span></span>
					</div>
					<p>
						Ce projet concernait l'installation d'un serveur Debian 12 équipé d'Apache, PostgreSQL et PHP. Il a dans ce cadre
						été nécessaire de créer un guide complet d'installation en anglais qui permette de reproduire notre installation et qui soit
						compréhensible par tout le monde.
					</p>
					<p>
						Le serveur a été installé sur une machine virtuelle Qemu, et a été configuré de l'installation d'une version de Debian
						sans serveur X jusqu'à la configuration de PHP et de PostgreSQL pour l'interrogation depuis un poste distant. Ainsi,
						la configuration terminée permettait de se connecter à une base de donnée depuis un poste distant ainsi que d'héberger et de
						permettre la consultation de sites HTML et PHP.
					</p>
				</div>
				<div class="SAEimg"></div>
			</div>
		</div>
		<div class="SAE block border" id="SAE204">
			<h1>
				<a href="javascript:showBloc('SAE204')">Exploitation d'une base de données</a>
				<a href="javascript:hideBloc('SAE204')" class="bouton border"><img src="img/header-x.png" alt="placeholder"></a>
			</h1>
			<div class="SAEcontent">
				<div class="SAEtext">
					<h2>Exploitation d'une base de données</h2>
					<div class="SAEmoodles">
						<span class="border bouton SAEmoodle" title="Correspondance avec le Programme National"><a href="https://cache.media.education.gouv.fr/file/SP4-MESRI-26-5-2022/14/6/spe617_annexe15_1426146.pdf#page=87" target="_blank"><img src="img/sheet.png" alt="Icone de feuille"></a></span>
						<span class="border SAEmoodle" title="Taille de l'équipe projet"><img src="img/people.png" alt="Personnages" ><span>2 personnes</span></span>
						<span class="border SAEmoodle" title="Charge totale du projet"><img src="img/clock.png" alt="Horloge"><span>60 heures/homme</span></span>
						<span class="border SAEmoodle" title="Technologies utilisées"><img src="img/psql.png" alt="PostgreSQL"></span>
						<span class="border SAEmoodle" title="Technologies utilisées"><img src="img/r.png" alt="R"></span>
					</div>
					<p>
						Ce projet consistait en la création d'un rapport en anglais concernant un ensemble de données extraites d'une base
						de données contenant des informations nutritionnelles sur des produits alimentaires. Nous avons dans ce cadre été 
						jugés sur notre capacité à trier une base de données selon des critères précis, mais également à en extraire des 
						informations pertinentes dans le cadre de notre étude et à les présenter visuellement.
					</p>
					<p>
						Dans notre cas, le sujet de l'étude était l'étude de l'éventuel lien entre les apports nutritionnels et le Nutriscore
						sur un échantillon composé de produits à base de viande transformée aux Etats-Unis. Nous avons choisi une approche
						du sujet en deux parties; ainsi, après avoir fait des observations générales sur l'échantillon, comme la proportion
						de produits pour chaque Nutriscore, nous avons étudié le lien entre des métriques précises comme la quantité de
						protéines ou de graisse pour 100g de produit et le Nutriscore. Ainsi, nous avons pu conclure en indiquant dans quelle
						mesure les apports nutritionnels influent sur le Nutriscore sur notre échantillon.
					</p>
				</div>
				<div class="SAEimg"></div>
			</div>
		</div>
		<div class="SAE block border" id="SAE201256">
			<h1>
				<a href="javascript:showBloc('SAE201256')">Développement d'une application lourde</a>
				<a href="javascript:hideBloc('SAE201256')" class="bouton border"><img src="img/header-x.png" alt="placeholder"></a>
			</h1>
			<div class="SAEcontent">
				<div class="SAEtext">
					<h2>Développement d'une application lourde</h2>
					<div class="SAEmoodles">
						<span class="border bouton SAEmoodle" title="Correspondance avec le Programme National"><a href="https://cache.media.education.gouv.fr/file/SP4-MESRI-26-5-2022/14/6/spe617_annexe15_1426146.pdf#page=84" target="_blank"><img src="img/sheet.png" alt="Icone de feuille"></a></span>
						<span class="border SAEmoodle" title="Taille de l'équipe projet"><img src="img/people.png" alt="Personnages" ><span>6 personnes</span></span>
						<span class="border SAEmoodle" title="Charge totale du projet"><img src="img/clock.png" alt="Horloge"><span>120 jours/homme</span></span>
						<span class="border SAEmoodle" title="Technologies utilisées"><img src="img/java.png" alt="Java"></span>
					</div>
					<p>
						Ce projet consistait en la création d'une application lourde de gestion d'évènements. La technologie utilisée nous
						a été imposée, étant JavaFX, et nous avons ainsi du créer une application de gestion temporelle et logique d'évènements
						de notre choix en suivant une démarche de gestion de projet.
					</p>
					<p>
						Notre équipe projet a décidé de créer une applciation de gestion de tournois de jeux vidéos, avec des fonctionnalités
						permettant de gérer en local des tournois, composés d'équipes elles mêmes composées de joueurs, ainsi que leur organisation
						temporelle et logique. Après une étape de gestion de projet et de conception en UML, nous avons pu développer l'application
						pendant une semaine, que nous avons présenté en français et en anglais lors de soutenances orales.
					</p>
				</div>
				<div class="SAEimg"></div>
			</div>
		</div>
		<div id="cv" class="block border">
			<h1>
				<a href="javascript:showBloc('cvcontent')">Qui suis-je ?</a>
				<a href="javascript:hideBloc('cvcontent')" class="bouton border"><img src="img/header-minus.png" alt="placeholder"></a>
			</h1>
			<div id="cvcontent" class="show">
				<div class="timeline">
					<div class="date">
						<div class="circle">2016</div>
						<div class="line">Entrée au collège Le Vergeron</div>
					</div>
					<div class="date">
						<div class="circle">2020</div>
						<div class="line">Obtention du brevet mention très bien <br> Entrée au lycée <a href="https://ferdinand-buisson.ent.auvergnerhonealpes.fr/">Ferdinand Buisson</a>, section scientifique</div>
					</div>
					<div class="date">
						<div class="circle">2023</div>
						<div class="line">Obtention du Baccalauréat mention très bien <br> Entrée à l'<a href="https://iut2.univ-grenoble-alpes.fr/">IUT2 UGA</a> pour un BUT informatique</div>
					</div>
					<div class="date">
						<div class="circle">2024</div>
					</div>
				</div>
				<div class="moodles">
					<span class="border moodle" title="Maitrîse du français"><img src="img/fr.png" alt="Drapeau français"><span class="progress">▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de l'anglais"><img src="img/en.png" alt="Drapeau anglais"><span class="progress">▓▓▓▓▓▓▓▓▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de l'espagnol"><img src="img/es.png" alt="Drapeau espagnol"><span class="progress">▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de Python"><img src="img/py.png" alt="Logo Python"><span class="progress">▓▓▓▓▓▓▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de Java"><img src="img/java.png" alt="Logo Java"><span class="progress">▓▓▓▓▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de PSQL"><img src="img/psql.png" alt="Logo PSQL"><span class="progress">▓▓▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de HTML/CSS"><img src="img/html.png" alt="Logo HTML"><span class="progress">▓▓▓▓</span></span>
					<span class="border moodle" title="Maitrîse de R"><img src="img/r.png" alt="Logo R"><span class="progress">▓▓</span></span>

				</div>
				<div class="bio">
					<h2>Qui suis-je ?</h2>
					<p>
						Passionné depuis toujours par les jeux vidéo et l'informatique, j'ai très tôt voulu devenir développeur de jeux vidéo. 
						J'ai dans ce cadre intégré le lycée Ferdinand Buisson, choisissant comme spécialités l'informatique et les mathématiques. 
						Après avoir obtenu mon baccalauréat mention très bien, j'ai intégré l'IUT2 de Grenoble pour un BUT informatique. Épanoui 
						dans mes études, je suis particulièrement attiré par les aspects de réseau et de gestion de l'informatique.
					</p>
					<p>
						J'adore apprendre de nouvelles choses et tout faire moi-même : j'ai une montagne de petits projets personnels qui ne sont 
						utiles qu'à moi, comme un bot Discord, un programme de tri de mes playlists Spotify ou encore un script d'automatisation 
						du transfert de ma sauvegarde d'Animal Crossing de ma 2DS vers mon PC. Cette versatilité me permet de maîtriser facilement 
						de nouvelles technologies et de m'adapter à de nouveaux environnements.
					</p>
					<p>
						En dehors de mes études, je suis évidemment passionné de jeux vidéo, mais également de musique que je pratique depuis 10 ans,
                        personnellement et au sein d'un ensemble de percussions dont je fais partie. J'exprime également ma créativité à travers
                        la photographie et la broderie.
					</p>
				</div>
			</div>
		</div>
	</main>

	<footer id="navbar" class="border">
		<div id="navbarnav">
			<a href="#presentation" title="Presentation"><img class="border bouton" src="img/people.png" alt="Icone de personnes"></a>
			<a href="#mesprojets" title="Mes projets"><img class="border bouton" src="img/explorer.png" alt="Icone de dossiers"></a>
			<a href="#cv" title="Qui suis-je ?"><img class="border bouton" src="img/cv.png" alt="Icone de feuille"></a>
		</div>
		<div id="navbarmoodles">
			<a href="https://github.com/Elfix3123" title="Mon GitHub" class="border bouton"><img src="img/github.png" alt="Icone de Github"></a>
			<a href="mailto:martinst@etu.univ-grenoble-alpes.fr" title="Envoyer un mail" class="border bouton"><img src="img/mailto.png" alt="Icone de courriel"></a>
			<span id="currenttime"></span>
		</div>
	</footer>
	<script src="script.js"></script>
</body>
</html>