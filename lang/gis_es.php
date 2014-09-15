<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/gis?lang_cible=es
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_gis' => 'Ningún punto',
	'aucun_objet' => 'Ningún objeto',

	// B
	'bouton_lier' => 'Asociar este punto',
	'bouton_supprimer_gis' => 'Eliminar definitivamente este punto',
	'bouton_supprimer_lien' => 'Eliminar este enlace',

	// C
	'cfg_descr_gis' => 'Sistema de Información Geográfica.<br /><a href="http://contrib.spip.net/3887">Ir a la documentación</a>.', # MODIF
	'cfg_inf_adresse' => 'Mostrar campos adicionales de dirección (país, ciudad, región, dirección...)',
	'cfg_inf_bing' => 'La capa Bing Aerial necesita crear una clave <a href=\'@url@\' class="spip_out">el sitio de Bing</a>.',
	'cfg_inf_cloudmade' => 'Esta API necesita crear una clave en <a href=\'@url@\'>el sitio de CloudMade</a>.',
	'cfg_inf_geocoder' => 'Activar las funciones del geocoder (búsqueda desde una dirección, recuperación de una dirección partiendo de coordenadas).',
	'cfg_inf_geolocaliser_user_html5' => 'Si el navegador del usuario lo permite, su ubicación geográfica aproximada se recupera para dar la posición por defecto durante la creación de un punto.',
	'cfg_inf_google' => 'Esta API necesita crear una clave en <a href=\'@url@\'>el sitio de GoogleMaps</a>.',
	'cfg_inf_yandex' => 'Esta API necesita crear una clave en <a href=\'@url@\'>el sitio de Yandex</a>.',
	'cfg_lbl_activer_objets' => 'Activar la geolocalización en los contenidos:',
	'cfg_lbl_adresse' => 'Mostrar los campos de dirección',
	'cfg_lbl_api' => 'API de cartografía',
	'cfg_lbl_api_cloudmade' => 'CloudMade',
	'cfg_lbl_api_google' => 'Google Maps v2',
	'cfg_lbl_api_googlev3' => 'Google Maps v3',
	'cfg_lbl_api_key_bing' => 'Clave Bing',
	'cfg_lbl_api_key_cloudmade' => 'Clave CloudMade',
	'cfg_lbl_api_key_google' => 'Clave GoogleMaps',
	'cfg_lbl_api_key_yandex' => 'Clave Yandex',
	'cfg_lbl_api_mapquest' => 'MapQuest',
	'cfg_lbl_api_microsoft' => 'Microsoft Bing',
	'cfg_lbl_api_openlayers' => 'OpenLayers',
	'cfg_lbl_api_ovi' => 'Ovi Nokia',
	'cfg_lbl_api_yandex' => 'Yandex',
	'cfg_lbl_geocoder' => 'Geocoder',
	'cfg_lbl_geolocaliser_user_html5' => 'Centrar el mapa en base a la ubicación del usuario durante la creación',
	'cfg_lbl_layer_defaut' => 'Capa por defecto',
	'cfg_lbl_layers' => 'Capas propuestas',
	'cfg_lbl_maptype' => 'Fondo cartográfico',
	'cfg_lbl_maptype_carte' => 'Mapa',
	'cfg_lbl_maptype_hybride' => 'Híbrido',
	'cfg_lbl_maptype_relief' => 'Relieve',
	'cfg_lbl_maptype_satellite' => 'Satélite',

	// E
	'editer_gis_editer' => 'Modificar este punto',
	'editer_gis_nouveau' => 'Crear un nuevo punto',
	'editer_gis_titre' => 'Puntos geolocalizados',
	'erreur_geocoder' => 'Ningún resultado para su búsqueda:',
	'erreur_recherche_pas_resultats' => 'Ningún punto corresponde a la búsqueda.',
	'erreur_xmlrpc_lat_lon' => 'La latitud y la longitud deben indicarse como parámetros',
	'explication_api_forcee' => 'La API esta impuesta por otro plugin o esqueleto.',
	'explication_import' => 'Importar un archivo en formato GPX o KML.',
	'explication_layer_forcee' => 'La capa se ha impuesto por otro plugin o esqueleto. ',
	'explication_maptype_force' => 'El fondo del mapa está impuesto por otro plugin o esqueleto.',

	// F
	'formulaire_creer_gis' => 'Crear un punto geolocalizado:',
	'formulaire_modifier_gis' => 'Modificar el punto geolocalizado:',

	// G
	'gis_pluriel' => 'Puntos geolocalizados',
	'gis_singulier' => 'Punto geolocalizado',

	// I
	'icone_gis_tous' => 'Puntos geolocalizados',
	'info_1_gis' => 'Un punto geolocalizado',
	'info_1_objet_gis' => '1 objeto asociado a este punto',
	'info_aucun_gis' => 'Ningún punto geolocalizado',
	'info_aucun_objet_gis' => 'Ningún objeto asociado a este punto',
	'info_geolocalisation' => 'Geolocalización',
	'info_id_objet' => 'N°',
	'info_liste_gis' => 'Puntos geolocalizados',
	'info_nb_gis' => '@nb@ puntos geolocalizados',
	'info_nb_objets_gis' => '@nb@ objetos asociados a este punto',
	'info_numero_gis' => 'Punto número',
	'info_objet' => 'Objeto',
	'info_recherche_gis_zero' => 'Ningún resultados para «@cherche_gis@».',
	'info_supprimer_lien' => 'Desunir',
	'info_supprimer_liens' => 'Desunir todos los puntos',
	'info_voir_fiche_objet' => 'Ver la ficha',

	// L
	'label_adress' => 'Dirección',
	'label_code_pays' => 'Código país',
	'label_code_postal' => 'Código postal',
	'label_departement' => 'Departamento',
	'label_import' => 'Importar',
	'label_inserer_modele_articles' => 'asociados a los artículos',
	'label_inserer_modele_articles_sites' => 'asociados a los artículos + sitios',
	'label_inserer_modele_auteurs' => 'asociados a los autores',
	'label_inserer_modele_centrer_auto' => 'Ningún autocentrado',
	'label_inserer_modele_centrer_fichier' => 'No centrar el mapa en los archivos KLM/GPX',
	'label_inserer_modele_controle' => 'Esconder los controles',
	'label_inserer_modele_controle_type' => 'Esconder los tipos',
	'label_inserer_modele_description' => 'Descripción',
	'label_inserer_modele_documents' => 'asociados a los documentos',
	'label_inserer_modele_echelle' => 'Escala',
	'label_inserer_modele_fullscreen' => 'Botón de pantalla completa',
	'label_inserer_modele_gpx' => 'Archivo GPX para sobreponer',
	'label_inserer_modele_hauteur_carte' => 'Altura del mapa',
	'label_inserer_modele_identifiant' => 'Identificador',
	'label_inserer_modele_identifiant_opt' => 'Identificador (opcional)',
	'label_inserer_modele_identifiant_placeholder' => 'id_gis',
	'label_inserer_modele_kml' => 'Archivo KML para sobreponer',
	'label_inserer_modele_kml_gpx' => 'id_document o url',
	'label_inserer_modele_largeur_carte' => 'Anchura del mapa',
	'label_inserer_modele_limite' => 'Número máximo de puntos',
	'label_inserer_modele_localiser_visiteur' => 'Centrar en el visitante',
	'label_inserer_modele_mini_carte' => 'Mini mapa de situación',
	'label_inserer_modele_molette' => 'Desactivar la rueda',
	'label_inserer_modele_mots' => 'asociados a las palabras',
	'label_inserer_modele_objets' => 'Tipo de punto(s)',
	'label_inserer_modele_point_gis' => 'punto único registrado',
	'label_inserer_modele_point_libre' => 'punto único libre',
	'label_inserer_modele_points' => 'Esconder los puntos',
	'label_inserer_modele_rubriques' => 'asociados a las secciones',
	'label_inserer_modele_sites' => 'asociados a los sitios',
	'label_inserer_modele_titre_carte' => 'Título del mapa',
	'label_pays' => 'País',
	'label_rechercher_address' => 'Buscar una dirección',
	'label_rechercher_point' => 'Buscar un punto',
	'label_region' => 'Región',
	'label_ville' => 'Ciudad',
	'lat' => 'Latitud',
	'libelle_logo_gis' => 'LOGOTIPO DEL PUNTO',
	'lien_ajouter_gis' => 'Añadir este punto',
	'lon' => 'Longitud',

	// T
	'telecharger_gis' => 'Descargar en formato @format@',
	'texte_ajouter_gis' => 'Añadir un punto geolocalizado',
	'texte_creer_associer_gis' => 'Crear y asociar un punto geolocalizado',
	'texte_creer_gis' => 'Crear un punto geolocalizado',
	'texte_modifier_gis' => 'Modificar el punto geolocalizado',
	'texte_voir_gis' => 'Ver el punto geolocalizado',
	'titre_bloc_creer_point' => 'Asociar un nuevo punto',
	'titre_bloc_points_lies' => 'Puntos asociados',
	'titre_bloc_rechercher_point' => 'Buscar un punto',
	'titre_nombre_utilisation' => 'Una utilización',
	'titre_nombre_utilisations' => '@nb@ utilizaciones',
	'titre_nouveau_point' => 'Nuevo punto',
	'titre_objet' => 'Título',
	'toolbar_actions_title' => 'Cancelar el trazado',
	'toolbar_buttons_marker' => 'Trazar un punto',
	'toolbar_buttons_polygon' => 'Trazar un polígono',
	'toolbar_buttons_polyline' => 'Trazar una línea',
	'toolbar_handlers_marker_tooltip_start' => 'Haga clic para situar el marcador',
	'toolbar_handlers_polygon_tooltip_cont' => 'Haga clic para continuar trazando el polígono',
	'toolbar_handlers_polygon_tooltip_end' => 'Haga clic sobre el primer punto para cerrar el polígono',
	'toolbar_handlers_polygon_tooltip_start' => 'Haga clic para comenzar a trazar el polígono',
	'toolbar_handlers_polyline_tooltip_cont' => 'Haga clic para continuar trazando la línea',
	'toolbar_handlers_polyline_tooltip_end' => 'Haga clic sobre el último punto para terminar la línea',
	'toolbar_handlers_polyline_tooltip_start' => 'Haga clic para comenzar a trazar la línea',
	'toolbar_undo_text' => 'Borrar el última punto',
	'toolbar_undo_title' => 'Borrar el último punto dibujado',

	// Z
	'zoom' => 'Zoom'
);

?>
