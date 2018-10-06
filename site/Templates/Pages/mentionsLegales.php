<?php
use II\Utilities\Configure;
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Mentions légales</h1>

				<h3>La société</h3>
				
				<p>
				<?php
				echo '<h4 class="m-b-0">' . Configure::read('Society.Name') . '</h4>';
				echo Configure::read('Juridique.Adress') . ' - ' . Configure::read('Juridique.Zipcode') . ' ' . Configure::read('Juridique.Town') . ' - ' . Configure::read('Juridique.Country') . '<br>';
				echo Configure::read('Juridique.StatutJuridique');
				if (Configure::read('Juridique.Capital') != '') { echo ', au capital de ' . Configure::read('Juridique.Capital') . ' €'; }
				if (Configure::read('Juridique.IRCS') != '') { echo ', immatriculée au Registre du commerce et des société de ' . Configure::read('Juridique.IRCS'); }
				if (Configure::read('Juridique.NSiren') != '') { echo ', sous le n°SIREN&nbsp;' . Configure::read('Juridique.NSiren'); }
				echo '<br>';
				if (Configure::read('Juridique.TVA') != '') { echo 'N° de TVA&nbsp;:&nbsp;' . Configure::read('Juridique.TVA'); }

				echo '</p><p>
				Téléphone : <a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . '</a><br>
				Mail : <a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a><br>
				Site internet : <a href="' . Configure::read('Society.WebsiteURL') . '" target="_blank">' . Configure::read('Society.Website') . '</a></p>';
				?>

				<h3>Conception du site</h3>

				<p>Conception graphique et développement du site : <?php echo '<a href="' . Configure::read('Developer.WebsiteURL') . '" target="_blank">' . Configure::read('Developer.Name').'</a>, ' . Configure::read('Developer.Baseline') ?>
				<br>
				<?= Configure::read('Developer.Dev') ?>
				<?php
				echo '
				Téléphone : <a href="tel:' . Configure::read('Developer.PhoneLink') . '">' . Configure::read('Developer.Phone') . '</a><br>
				Mail : <a href="mailto:' . Configure::read('Developer.Mail') . '">' . Configure::read('Developer.Mail') . '</a><br>
				Site internet : <a href="' . Configure::read('Developer.WebsiteURL') . '" target="_blank">' . Configure::read('Developer.Website') . '</a>';
				?>
				</p>

				<h3>Hébergement</h3>
				<?= Configure::read('Developer.Hebergement') ?><br><br>

				<h3>Directeur de la publication : <?= Configure::read('Juridique.Publication.Dir') ?></h3>
				<p>Mail : <?php echo '<a href="mailto:' . Configure::read('Juridique.Publication.Mail') . '">' . Configure::read('Juridique.Publication.Mail') . '</a><br>'; ?>
				Ci-après nommé « L’Editeur »</p>


				<h3>Préambule</h3>
				<p>En visitant <?= Configure::read('Society.Website') ?>, vous vous engagez à respecter les conditions générales d’utilisation ci-après énoncées. L’inscription et l’utilisation d’un ou plusieurs services sur le site <?= Configure::read('Society.Website') ?> supposent l’acceptation sans réserve des présentes conditions d’utilisation.</p>


				<h3>Article 1 - Objet</h3>

				<p>La présente notice a pour objet de définir les modalités selon lesquelles l’Editeur met à la disposition des internautes le site Internet <?= Configure::read('Society.Website') ?> (le « Site ») et les conditions selon lesquelles les internautes accèdent et utilisent ce Site. Toute connexion au Site est subordonnée à l’acceptation sans réserve et au respect de la présente notice légale que l’Editeur se réserve de modifier ou de mettre à jour à tout moment.</p>


				<h3>Article 2 - Droit de propriété intellectuelle</h3>

				<p>Le présent site constitue une œuvre dont <?= Configure::read('Juridique.Name') ?> est l’auteur au sens des articles L. 111.1 et suivants du Code de la Propriété Intellectuelle. La conception et le développement dudit site a été assuré par la société <?= Configure::read('Developer.Name') ?>, située <?= Configure::read('Developer.Adress') ?> (<?php echo '<a href="' . Configure::read('Developer.WebsiteURL') . '" target="_blank">site internet</a>' ?>).</p>

				<p>Les photographies, textes, slogans, dessins, images, séquences animées, sonores ou non, ainsi que toutes œuvres intégrées dans le site sont la propriété de <?= Configure::read('Juridique.Name') ?> ou des tiers ayant autorisé <?= Configure::read('Juridique.Name') ?> à les utiliser.</p>


				<h3>Article 3 - Accès Site</h3>

				<p>L’accès au Site est en principe possible 24 heures sur 24, 7 jours sur 7, sauf tous cas de force majeure et sous réserve des interventions de maintenance nécessaires au bon fonctionnement du Site et des matériels sous-jacents ou encore des éventuelles pannes. L’accès au Site se fait à partir du matériel informatique de l’internaute connecté à un réseau de télécommunication permettant l’accès à Internet. Le coût du matériel et de l’accès à un réseau de télécommunication permettant de se connecter au Site est à la charge exclusive des utilisateurs. Les protocoles de communication utilisés sont ceux en usage sur Internet. Les droits d’accès et d’utilisation du Site sont des droits non exclusifs et non transmissibles.</p>

				<p>L’internaute est exclusivement responsable de la pertinence du matériel qu’il utilise et des conditions de son accès aux fins de bénéficier de façon optimale des services offerts par le Site. A cet égard, il est expressément rappelé que tout accès Internet depuis un terminal public requiert des manipulations et vérifications particulières de la part de l’internaute aux fins de s’assurer de la confidentialité de sa consultation et de l’absence d’enregistrements automatiques susceptibles de révéler à des tiers des données confidentielles. L’Editeur décline toute responsabilité quant aux conditions dans lesquelles l’internaute se sera connecté au Site.</p>

				<p>Les législations impératives de certains Etats ou régions autonomes peuvent avoir pour effet de limiter, réglementer voire interdire l’accès au Site. L’internaute devra donc s’assurer, avant toute connexion au Site, qu’une telle connexion ne contreviendra pas à la réglementation applicable à la zone géographique d’où il se connectera. L’Editeur n’encourra aucune responsabilité à cet égard.</p>


				<h3>Article 4 - Données personnelles</h3>

				<p>La société <?= Configure::read('Juridique.Name') ?> dispose de moyens informatiques destinés à gérer plus facilement ces clients et prospects. Les informations enregistrées sont réservées à l’usage unique de <?= Configure::read('Juridique.Name') ?>.</p>

				<p>Conformément aux articles 39 et suivants de la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, toute personne peut obtenir communication et, le cas échéant, rectification ou suppression des informations la concernant, en s’adressant à <?= Configure::read('Society.Name') . ' - ' . Configure::read('Juridique.Adress') . ' - ' . Configure::read('Juridique.Zipcode') . ' - ' . Configure::read('Juridique.Town') . ' - ' . Configure::read('Juridique.Country'); ?>.</p>


				<h3>Article 5 - Modifications du Site</h3>

				<p>L’éditeur se réserve la possibilité de faire évoluer ou de modifier l’interface graphique, le contenu, les fonctionnalités ainsi que les conditions générales du Site.</p>

				<p>Dès leur mise en ligne, ces modifications et mises à jour s’imposent à l’utilisateur qui doit en conséquence se référer régulièrement à cette rubrique pour vérifier les conditions générales en vigueur.</p>


				<h3>Article 6 - Liens hypertextes</h3>

				<p>En toute hypothèse, sont strictement interdits tous liens en provenance de sites contraires aux bonnes mœurs, à caractère violent, pornographique ou pédophile, pouvant porter atteinte à la dignité de la personne humaine ou destinés à exhiber ou vendre des objets, substances et/ou ouvrages interdits ou illicites.</p>

				<p>Liens hypertextes en direction du Site, liens interdits<br>
				Afin de respecter l’intégrité des contenus du Site et d’éviter tout risque de confusion dans l’esprit des internautes quant à la provenance desdits contenus, sont strictement interdits :<br>
				les liens d’insertion automatique permettant à l’internaute de visualiser automatiquement dans un emplacement spécifique des contenus provenant du Site ;<br>
				les liens de cadrage permettant de faire apparaître une page du Site dans un cadre à l’intérieur de la page d’un autre site visité par l’internaute.</p>

				<p>Liens susceptibles d’être autorisés<br>
				les liens simples vers la page d’accueil du Site ;<br>
				les liens simples vers la page d’accueil des différentes rubriques du Site.<br>
				Il est néanmoins rappelé qu’en aucun cas l’existence d’un lien hypertexte en provenance d’un site tiers vers le Site n’induira en lui-même l’existence d’une coopération entre l’Editeur et ce site tiers. L’Editeur n’est pas en mesure d’exercer de contrôle sur le contenu des sites tiers et n’assume par conséquent aucune responsabilité quant aux contenus, produits, services, informations, matériaux, logiciels des sites susceptibles de comporter un lien hypertexte vers le Site.</p>

				<p>Liens hypertextes en direction de sites tiers
				Le Site peut contenir des liens vers des sites de partenaires de l’Editeur ou vers des sites tiers.<br>
				L’Editeur n’exerce aucun contrôle sur ces sites et n’assume par conséquent aucune responsabilité quant à la disponibilité de ces sites, leur contenu, publicité et sur les produits et/ou services disponibles sur ou à partir de ces sites. L’Editeur ne sera aucunement responsable des dommages directs ou indirects pouvant survenir à l’occasion de l’accès de l’internaute sur le site du partenaire et/ou tiers et de l’utilisation des contenus et services de ce site par l’internaute.</p>


				<h3>Article 7 - Limitation de responsabilité</h3>

				<p>L’internaute utilise le site à ses seuls risques. En aucun cas, ni <?= Configure::read('Juridique.Name') ?>, ni ses filiales, ni les membres de son réseau ne pourront être tenus responsables des dommages directs ou indirects, et notamment préjudice matériel, perte de données ou de programme, préjudice financier, résultant de l’accès ou de l’utilisation de ce site ou de tous sites qui lui sont liés.<br>
				Le contenu du site est présenté sans aucune garantie de quelque nature que ce soit.<br>
				Les informations sur les prestations et les produits correspondent à une définition au moment de la mise en ligne ou des mises à jour des différentes pages du site ; elles ne sont données qu’à titre indicatif et ne sauraient être considérées comme constituant une offre contractuelle de produits ou services émanant de <?= Configure::read('Juridique.Name') ?>, de ses filiales ou des membres de son réseau. Les erreurs ou omissions peuvent survenir ne sauraient engager la responsabilité de <?= Configure::read('Juridique.Name') ?>, de ses filiales ou des membres de son réseau.<br>
				L’accès aux produits et services présentés sur le site peut faire l’objet de restrictions. Vous devez donc vous assurer que la loi du pays à partir duquel la connexion est établie vous autorise à accéder à notre site.</p>


				<h3>Article 8 - Compétence juridictionnelle et loi applicable</h3>

				<p>Tout litige se rapportant au Site sera exclusivement porté devant les juridictions du ressort de la cour d’appel de Reims et sera régi et analysé selon la loi française. L’utilisation du Site implique l’accord exprès de l’utilisateur à l’application de la présente clause juridictionnelle.<br>
				Dans le cas où l’une des dispositions de cette notice légale serait jugée illégale, nulle ou inapplicable pour quelque raison que ce soit, elle serait considérée comme ne faisant pas partie de cette notice légale et n’affecterait pas la légalité, la validité et l’application pratique des autres stipulations des présentes.</p>

			</div>
		</div>
	</div>
</section>