<?php
use II\Utilities\Configure;
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Politique de Confidentialité</h1>

				<h2>Qui sommes-nous ?</h2>

				<?php
				echo '<h4 class="m-b-0">' . Configure::read('Society.Name') . '</h4>';
				echo Configure::read('Juridique.Adress') . ' - ' . Configure::read('Juridique.Zipcode') . ' ' . Configure::read('Juridique.Town') . ' - ' . Configure::read('Juridique.Country') . '<br>';
				echo Configure::read('Juridique.StatutJuridique');
				if (Configure::read('Juridique.Capital') != '') { echo ', au capital de ' . Configure::read('Juridique.Capital') . ' €'; }
				if (Configure::read('Juridique.IRCS') != '') { echo ', immatriculée au Registre du commerce et des société de ' . Configure::read('Juridique.IRCS'); }
				if (Configure::read('Juridique.NSiren') != '') { echo ', sous le n°SIREN&nbsp;' . Configure::read('Juridique.NSiren'); }
				echo '<br>';
				if (Configure::read('Juridique.TVA') != '') { echo 'N° de TVA&nbsp;:&nbsp;' . Configure::read('Juridique.TVA'); }

				echo '
				<br><br>
				Téléphone : <a href="tel:' . Configure::read('Society.Phone1Link') . '">' . Configure::read('Society.Phone1') . '</a><br>
				Mail : <a href="mailto:' . Configure::read('Society.Mail') . '">' . Configure::read('Society.Mail') . '</a><br>
				Site internet : <a href="' . Configure::read('Society.WebsiteURL') . '" target="_blank">' . Configure::read('Society.Website') . '</a><br><br>';
				?>
				


				<br><br><br>


				<h2>Utilisation des données personnelles collectées</h2>
				<h3>Formulaires de contact</h3>
				<p>Lorsque vous remplissez nos formulaires de contact sur notre site internet, les données inscrites dans le formulaire sont envoyées par mail à la société <?php echo $Confidentialite_NomSociete; ?>. Les données à caractère personnel qui peuvent être recueillies sont :
					<ul>
						<li>Nom / Prénom</li>
						<li>Téléphone</li>
						<li>Email</li>
					</ul>
				</p>
				<p>Notre site internet n'enregistre aucune données à caractère personnel.</p>

				<h3>Utilisation et transmission de vos données personnelles</h3>
				<p>
				Les informations à caractère personnel recueillies font l'objet d'un traitement, informatique ou non, destiné à :
				<ul>
					<li>A la prise de contact</li>
					<li>Effectuer les opérations relatives à la gestion des Clients (devis, commandes, factures, contrats, comptabilité, gestion des comptes.)</li>
					<li>La gestion des demandes de droit d'accès, de rectification et d'opposition</li>
					<li>L'élaboration de statistiques commerciales.</li>
				</ul>
				</p>

				<h3>Cookies</h3>
				<p>Concernant les cookies insérés sur votre navigateur internet, nous vous invitons à consulter notre page dédié : <a href="/cookies/">Cookies</a></p>
				
				<h3>Statistiques et mesures d’audience</h3>
				<p>Afin d'élaborer des statistiques de fréquentation de notre site internet, nous utilisons l'outil Google Analytics. Rendez-vous sur notre page dédiées aux <a href="/cookies/">cookies</a> pour en savoir plus.</p>

				<h2>Durées de stockage de vos données</h2>
				<p>Si vous nous écrivez un mail via nos formulaire de contact, le mail et ses données sont conservés indéfiniment. Vos données seront exploitées dans le cadre d'une demande de contact et de la relation commerciale qui peut en découler.</p>

				<h2>Les droits que vous avez sur vos données</h2>
				<p>Conformément aux articles 39 et suivants de la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, toute personne peut obtenir communication et, le cas échéant, rectification ou suppression des informations la concernant, en s’adressant à <?= Configure::read('Society.Name') . ' - ' . Configure::read('Juridique.Adress') . ' - ' . Configure::read('Juridique.Zipcode') . ' - ' . Configure::read('Juridique.Town') . ' - ' . Configure::read('Juridique.Country'); ?></p>


				<h2>Informations de contact</h2>

				<p><?= Configure::read('Juridique.Name') ?> a désigné un Délégué à la Protection des Données, que vous pourrez contacter aux adresses suivantes :<br>
				<?php
				echo '<strong>Délégué à la Protection des données</strong><br>' . Configure::read('GDPR.DPO') . '<br>' . Configure::read('Juridique.Adress') . '<br>' . Configure::read('Juridique.Zipcode') . ' ' . Configure::read('Juridique.Town') . '<br>' . Configure::read('Juridique.Country') . '<br>';
				echo '
				Mail : <a href="mailto:' . Configure::read('GDPR.Mail') . '">' . Configure::read('GDPR.Mail') . '</a>';
				echo '<br><br>';
				?>
				
				Vous pouvez, en cas de contestation, former une réclamation auprès de la CNIL dont le site internet est accessible à l'adresse suivante <a href="https://www.cnil.fr/fr/plaintes" target="_blank">http://www.cnil.fr</a> et le siège est situé 3 Place de Fontenoy, 75007 Paris. 
				</p>



				<h2>Informations supplémentaires</h2>

				<h3>Procédures mises en œuvre en cas de fuite de données</h3>
				<p>En cas de violation de données à caractère personnel, le responsable du traitement en notifie la violation en question à la CNIL, dans les meilleurs délais et, si possible, 72 heures au plus tard après en avoir pris connaissance, à moins que la violation en question ne soit pas susceptible d'engendrer un risque pour les droits et libertés des personnes physiques. Lorsque la notification à l'autorité de contrôle n'a pas lieu dans les 72 heures, elle est accompagnée des motifs du retard.</p>
				
			

			</div>
		</div>
	</div>
</section>