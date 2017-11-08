<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// Fichier source, a modifier dans svn://zone.spip.org/spip-zone/_plugins_/gis/trunk/lang/
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_gis' => 'Aucun point',
	'aucun_objet' => 'Aucun objet',

	// B
	'bouton_annuler_title' => 'Annuler l’édition, effacera toutes les modifications.',
	'bouton_enregistrer_title' => 'Enregistrez vos modifications.',
	'bouton_lier' => 'Lier ce point',
	'bouton_supprimer_gis' => 'Supprimer définitivement ce point',
	'bouton_supprimer_lien' => 'Supprimer ce lien',

	// C
	'cfg_descr_gis' => 'Système d’Information Géographique.<br /><a href="https://contrib.spip.net/4189" class="spip_out">Accéder la documentation</a>.',
	'cfg_inf_adresse' => 'Affiche des champs supplémentaires d’adresse (pays, ville, région, adresse...)',
	'cfg_inf_bing' => 'La couche Bing Aerial nécessite une clé à créer sur <a href=\'@url@\' class="spip_out">le site de Bing</a>.',
	'cfg_inf_geocoder' => 'Activer les fonctions du geocoder (recherche à partir d’une adresse, récupération de l’adresse à partir des coordonnées).',
	'cfg_inf_geolocaliser_user_html5' => 'Si le navigateur de l’utilisateur le permet, son emplacement géographique approximatif est récupéré pour donner la position par défaut lors de la création d’un point.',
	'cfg_inf_google' => 'Les couches Google nécessitent une clé à créer sur <a href=\'@url@\' class="spip_out">le site de GoogleMaps</a>.',
	'cfg_inf_styles' => 'Affiche des champs supplémentaires de style (couleur, opacité, épaisseur...)',
	'cfg_lbl_activer_objets' => 'Activer la géolocalisation sur les contenus :',
	'cfg_lbl_adresse' => 'Afficher les champs d’adresse',
	'cfg_lbl_api' => 'API de cartographie',
	'cfg_lbl_api_key_bing' => 'Clé Bing',
	'cfg_lbl_api_key_google' => 'Clé GoogleMaps',
	'cfg_lbl_api_microsoft' => 'Microsoft Bing',
	'cfg_lbl_geocoder' => 'Geocoder',
	'cfg_lbl_geolocaliser_user_html5' => 'Centrer la carte sur l’emplacement de l’utilisateur à la création',
	'cfg_lbl_layer_defaut' => 'Couche par défaut',
	'cfg_lbl_layers' => 'Couches proposées',
	'cfg_lbl_maptype' => 'Fond cartographique',
    'cfg_lbl_plugins_desactives' => 'Désactiver certains plugins',
	'cfg_lbl_styles' => 'Afficher les champs de styles',
	'cfg_titre_gis' => 'Configuration de GIS',

	// E
	'editer_gis_editer' => 'Modifier ce point',
	'editer_gis_nouveau' => 'Créer un nouveau point',
	'editer_gis_titre' => 'Les points géolocalisés',
	'erreur_geocoder' => 'Aucun résultat pour votre recherche',
	'erreur_recherche_pas_resultats' => 'Aucun point ne correspond à la recherche.',
	'erreur_xmlrpc_lat_lon' => 'La latitude et la longitude doivent être passées en argument',
	'explication_api_forcee' => 'L’API est imposée par un autre plugin ou squelette.',
	'explication_color' => 'Couleur de trait au format CSS (valeur par défaut : #0033FF)',
	'explication_fillcolor' => 'Couleur de remplissage au format CSS (valeur par défaut : héritée de la couleur de trait)',
	'explication_fillopacity' => 'Opacité du remplissage de 0 à 1 (valeur par défaut : 0.2)',
	'explication_import' => 'Importer un fichier au format GPX ou KML.',
	'explication_layer_forcee' => 'La couche est imposée par un autre plugin ou un squelette.',
	'explication_maptype_force' => 'Le fond cartographique est imposé par un autre plugin ou squelette.',
	'explication_opacity' => 'Opacité du trait de 0 à 1 (valeur par défaut : 0.5)',
    'explication_plugins_desactives' => 'Attention, certaines fonctionnalités fournies par ces plugins ne seront plus opérationnelles.',
	'explication_weight' => 'Épaisseur du trait (valeur par défaut : 5)',

	// F
	'formulaire_creer_gis' => 'Créer un point géolocalisé :',
	'formulaire_modifier_gis' => 'Modifier le point géolocalisé :',

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
	'label_code_pays' => 'Code pays',
	'label_code_postal' => 'Code postal',
	'label_color' => 'Couleur',
	'label_departement' => 'Département',
	'label_fillcolor' => 'Couleur de remplissage',
	'label_fillopacity' => 'Opacité de remplissage',
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
	'label_inserer_modele_tooltip' => 'Afficher un tooltip au survol des points',
	'label_inserer_modele_titre_carte' => 'Titre de la carte',
	'label_opacity' => 'Opacité',
	'label_pays' => 'Pays',
	'label_rechercher_address' => 'Rechercher une adresse',
	'label_rechercher_point' => 'Rechercher un point',
	'label_region' => 'Région',
	'label_ville' => 'Ville',
	'label_weight' => 'Épaisseur',
	'lat' => 'Latitude',
	'libelle_logo_gis' => 'LOGO DU POINT',
	'lien_ajouter_gis' => 'Ajouter ce point',
	'lon' => 'Longitude',

	// M
	'message_limite_atteinte' => 'Vous disposez de plus de points géolocalisés que la limite d’affichage actuelle.<br /> Si vous souhaitez tous les afficher, suivez <a href="@url@">ce lien</a>.',

	// O
	'onglet_carte' => 'Carte',
	'onglet_liste' => 'Liste',

	// P
	'placeholder_geocoder' => 'Une adresse, une ville, un pays, un lieu touristique...',

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
	'titre_limite_atteinte' => 'Limite du nombre de points affichés atteinte (@limite@)',
	'titre_nombre_utilisation' => 'Une utilisation',
	'titre_nombre_utilisations' => '@nb@ utilisations',
	'titre_nouveau_point' => 'Nouveau point',
	'titre_objet' => 'Titre',
	'toolbar_actions_title' => 'Annuler le tracé',
	'toolbar_buttons_circle' => 'Tracer un cercle',
	'toolbar_buttons_marker' => 'Tracer un point',
	'toolbar_buttons_polygon' => 'Tracer un polygone',
	'toolbar_buttons_polyline' => 'Tracer une ligne',
	'toolbar_buttons_rectangle' => 'Tracer un rectangle',
	'toolbar_edit_buttons_edit' => 'Modifier l’objet',
	'toolbar_edit_buttons_editdisabled' => 'Aucun objet modifiable',
	'toolbar_edit_buttons_remove' => 'Supprimer un objet',
	'toolbar_edit_buttons_removedisabled' => 'Aucun objet à supprimer',
	'toolbar_edit_handlers_edit_tooltip_subtext' => 'Cliquez sur annuler pour supprimer les modifications',
	'toolbar_edit_handlers_edit_tooltip_text' => 'Déplacez les poignées ou le marker pour modifier l’objet.',
	'toolbar_edit_handlers_remove_tooltip_text' => 'Cliquez sur un objet pour le supprimer',
	'toolbar_finish_text' => 'Terminer',
	'toolbar_finish_title' => 'Terminer le tracé',
	'toolbar_handlers_marker_tooltip_start' => 'Cliquez pour placer le marqueur',
	'toolbar_handlers_polygon_tooltip_cont' => 'Cliquez pour continuer à tracer le polygone',
	'toolbar_handlers_polygon_tooltip_end' => 'Cliquez sur le premier point pour fermer le polygone',
	'toolbar_handlers_polygon_tooltip_start' => 'Cliquez pour commencer à tracer le polygone',
	'toolbar_handlers_polyline_tooltip_cont' => 'Cliquez pour continuer à tracer la ligne',
	'toolbar_handlers_polyline_tooltip_end' => 'Cliquez sur le dernier point pour terminer la ligne',
	'toolbar_handlers_polyline_tooltip_start' => 'Cliquez pour commencer à tracer la ligne',
	'toolbar_handlers_rectangle_tooltip_start' => 'Cliquez et déplacez pour tracer un rectangle',
	'toolbar_handlers_simpleshape_tooltip_end' => 'Relâchez la souris pour terminer le dessin',
	'toolbar_undo_text' => 'Effacer le dernier point',
	'toolbar_undo_title' => 'Effacer le dernier point tracé',

	// Z
	'zoom' => 'Zoom'
);
