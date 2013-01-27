<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// Fichier source, a modifier dans svn://zone.spip.org/spip-zone/_plugins_/gis/trunk/lang/
if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_gis' => 'Aucun point',
	'aucun_objet' => 'Aucun objet',

	// B
	'bouton_lier' => 'Lier ce point',
	'bouton_supprimer_gis' => 'Supprimer définitivement ce point',
	'bouton_supprimer_lien' => 'Supprimer ce lien',

	// C
	'cfg_descr_gis' => 'Système d\'Information Géographique.<br /><a href="http://www.spip-contrib.net/3887" class="spip_out">Accéder la documentation</a>.',
	'cfg_inf_adresse' => 'Affiche des champs supplémentaires d\'adresse (pays, ville, région, adresse...)',
	'cfg_inf_bing' => 'La couche Bing Aerial nécessite une clé à créer sur <a href=\'@url@\' class="spip_out">le site de Bing</a>.',
	'cfg_inf_cloudmade' => 'Cette API nécessite une clé à créer sur <a href=\'@url@\' class="spip_out">le site de CloudMade</a>.',
	'cfg_inf_geocoder' => 'Activer les fonctions du geocoder (recherche à partir d\'une adresse, récupération de l\'adresse à partir des coordonnées).',
	'cfg_inf_geolocaliser_user_html5' => 'Si le navigateur de l\'utilisateur le permet, son emplacement géographique approximatif est récupéré pour donner la position par défaut lors de la création d\'un point.',
	'cfg_inf_google' => 'Cette API nécessite une clé à créer sur <a href=\'@url@\' class="spip_out">le site de GoogleMaps</a>.',
	'cfg_inf_yandex' => 'Cette API nécessite une clé à créer sur <a href=\'@url@\' class="spip_out">le site de Yandex</a>.',
	'cfg_lbl_activer_objets' => 'Activer la géolocalisation sur les contenus :',
	'cfg_lbl_adresse' => 'Afficher les champs d\'adresse',
	'cfg_lbl_api' => 'API de cartographie',
	'cfg_lbl_api_cloudmade' => 'CloudMade',
	'cfg_lbl_api_google' => 'Google Maps v2',
	'cfg_lbl_api_googlev3' => 'Google Maps v3',
	'cfg_lbl_api_key_bing' => 'Clé Bing',
	'cfg_lbl_api_key_cloudmade' => 'Clé CloudMade',
	'cfg_lbl_api_key_google' => 'Clé GoogleMaps',
	'cfg_lbl_api_key_yandex' => 'Clé Yandex',
	'cfg_lbl_api_mapquest' => 'MapQuest',
	'cfg_lbl_api_microsoft' => 'Microsoft Bing',
	'cfg_lbl_api_openlayers' => 'OpenLayers',
	'cfg_lbl_api_ovi' => 'Ovi Nokia',
	'cfg_lbl_api_yandex' => 'Yandex',
	'cfg_lbl_geocoder' => 'Geocoder',
	'cfg_lbl_geolocaliser_user_html5' => 'Centrer la carte sur l\'emplacement de l\'utilisateur à la création',
	'cfg_lbl_layer_defaut' => 'Couche par défaut',
	'cfg_lbl_layers' => 'Couches proposées',
	'cfg_lbl_maptype' => 'Fond cartographique',
	'cfg_lbl_maptype_carte' => 'Carte',
	'cfg_lbl_maptype_hybride' => 'Hybride',
	'cfg_lbl_maptype_relief' => 'Relief',
	'cfg_lbl_maptype_satellite' => 'Satellite',
	'cfg_titre_gis' => 'GIS',

	// E
	'editer_gis_editer' => 'Modifier ce point',
	'editer_gis_explication' => 'Cette page liste l\'ensemble des points géolocalisés du site.',
	'editer_gis_nouveau' => 'Créer un nouveau point',
	'editer_gis_titre' => 'Les points géolocalisés',
	'erreur_recherche_pas_resultats' => 'Aucun point ne correspond à la recherche.',
	'erreur_xmlrpc_lat_lon' => 'La latitude et la longitude doivent être passées en argument',
	'explication_api_forcee' => 'L\'API est imposée par un autre plugin ou squelette.',
	'explication_import' => 'Importer un fichier au format GPX ou KML.',
	'explication_layer_forcee' => 'La couche est imposée par un autre plugin ou un squelette.',
	'explication_maptype_force' => 'Le fond cartographique est imposé par un autre plugin ou squelette.',

	// F
	'formulaire_creer_gis' => 'Créer un point géolocalisé :',
	'formulaire_modifier_gis' => 'Modifier le point géolocalisé :',

	// G
	'gis_pluriel' => 'Points géolocalisés',
	'gis_singulier' => 'Point géolocalisé',

	// I
	'icone_gis_tous' => 'Points géolocalisés',
	'info_1_gis' => 'Un point géolocalisé',
	'info_1_objet_gis' => '1 objet lié à ce point',
	'info_aucun_gis' => 'Aucun point géolocalisé',
	'info_aucun_objet_gis' => 'Aucun objet lié à ce point',
	'info_geolocalisation' => 'Géolocalisation',
	'info_id_objet' => 'N°',
	'info_liste_gis' => 'Points géolocalisés',
	'info_nb_gis' => '@nb@ points géolocalisés',
	'info_nb_objets_gis' => '@nb@ objets liés à ce point',
	'info_numero_gis' => 'Point numéro',
	'info_objet' => 'Objet',
	'info_recherche_gis_zero' => 'Aucun résultat pour « @cherche_gis@ ».',
	'info_supprimer_lien' => 'Détacher',
	'info_supprimer_liens' => 'Détacher tous les points',
	'info_voir_fiche_objet' => 'Voir la fiche',

	// L
	'label_adress' => 'Adresse',
	'label_code_postal' => 'Code postal',
	'label_import' => 'Importer',
	'label_inserer_modele_articles' => 'liés aux articles',
	'label_inserer_modele_articles_sites' => 'liés aux articles + sites',
	'label_inserer_modele_auteurs' => 'liés aux auteurs',
	'label_inserer_modele_centrer_auto' => 'Pas de centrage auto',
	'label_inserer_modele_centrer_fichier' => 'Ne pas centrer la carte sur les fichiers KLM/GPX',
	'label_inserer_modele_controle' => 'Cacher les contrôles',
	'label_inserer_modele_controle_type' => 'Cacher les types',
	'label_inserer_modele_description' => 'Description',
	'label_inserer_modele_documents' => 'liés aux documents',
	'label_inserer_modele_echelle' => 'Echelle',
	'label_inserer_modele_fullscreen' => 'Bouton plein écran',
	'label_inserer_modele_gpx' => 'Fichier GPX à superposer',
	'label_inserer_modele_hauteur_carte' => 'Hauteur de la carte',
	'label_inserer_modele_identifiant' => 'Identifiant',
	'label_inserer_modele_identifiant_opt' => 'Identifiant (optionnel)',
	'label_inserer_modele_identifiant_placeholder' => 'id_gis',
	'label_inserer_modele_kml' => 'Fichier KML à superposer',
	'label_inserer_modele_kml_gpx' => 'id_document ou url',
	'label_inserer_modele_largeur_carte' => 'Largeur de la carte',
	'label_inserer_modele_limite' => 'Nombre de points maximum',
	'label_inserer_modele_localiser_visiteur' => 'Centrer sur le visiteur',
	'label_inserer_modele_mini_carte' => 'Mini carte de situation',
	'label_inserer_modele_molette' => 'Désactiver la molette',
	'label_inserer_modele_mots' => 'liés aux mots',
	'label_inserer_modele_objets' => 'Type de point(s)',
	'label_inserer_modele_point_gis' => 'point unique enregistré',
	'label_inserer_modele_point_libre' => 'point unique libre',
	'label_inserer_modele_points' => 'Cacher les points',
	'label_inserer_modele_rubriques' => 'liés aux rubriques',
	'label_inserer_modele_sites' => 'liés aux sites',
	'label_inserer_modele_titre_carte' => 'Titre de la carte',
	'label_pays' => 'Pays',
	'label_rechercher_address' => 'Rechercher une adresse',
	'label_rechercher_point' => 'Rechercher un point',
	'label_region' => 'Région',
	'label_ville' => 'Ville',
	'lat' => 'Latitude',
	'libelle_logo_gis' => 'LOGO DU POINT',
	'lien_ajouter_gis' => 'Ajouter ce point',
	'lon' => 'Longitude',

	// T
	'telecharger_gis' => 'Télécharger au format @format@',
	'texte_ajouter_gis' => 'Ajouter un point géolocalisé',
	'texte_creer_associer_gis' => 'Créer et associer un point géolocalisé',
	'texte_creer_gis' => 'Créer un point géolocalisé',
	'texte_modifier_gis' => 'Modifier le point géolocalisé',
	'texte_voir_gis' => 'Voir le point géolocalisé',
	'titre_bloc_creer_point' => 'Lier un nouveau point',
	'titre_bloc_points_lies' => 'Points liés',
	'titre_bloc_rechercher_point' => 'Rechercher un point',
	'titre_nombre_utilisation' => 'Une utilisation',
	'titre_nombre_utilisations' => '@nb@ utilisations',
	'titre_nouveau_point' => 'Nouveau point',
	'titre_objet' => 'Titre',

	// Z
	'zoom' => 'Zoom'
);

?>
