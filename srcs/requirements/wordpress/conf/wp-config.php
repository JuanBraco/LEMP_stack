<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'votre_nom_de_bdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'votre_utilisateur_de_bdd' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'votre_mdp_de_bdd' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K0fwFC~;&Jz_k {SFJoizoK)TDadyio!x+Anvh;_~3#4A%sg1{Bw`V@j>mAR6hg2');
define('SECURE_AUTH_KEY',  'Ask6lh2;xcmIM_|qkgH|A3D/oxJ.-plpO+As)%E&n]emON9}SRH31@ywc&_UW-A+');
define('LOGGED_IN_KEY',    'sarrduGo6lNb/&0BMS|J^>(F,#Bm-e|zLz+Cb@BVw$yPNq$T1w3iVt+*$KeJDLk=');
define('NONCE_KEY',        ';[]{~v:HHqqu`2%5USUSqwW7xN!m^Y!)+1]r|s^598r:QD3eQ+wo4SJfHd=2}l{N');
define('AUTH_SALT',        'U~an8AVi?-n<FYA`>90Ur84RSC>B+-5Iib!fb6fJ^1x/(R(oq#|G[vUlKM[*;8,&');
define('SECURE_AUTH_SALT', '9Y,<@dB6x#+m+lKoK?T8;)?,1!RVcoL-:l8cMCJa</#it,5U;]zL :tO qbwMl8(');
define('LOGGED_IN_SALT',   '(BAq:Us-.517.M2+AL!|+LfAJ:#qqd*bz.4<Q_r([z=#ex]G}|A<?0j8~~G%BEAU');
define('NONCE_SALT',       'dk>X4t*Rp2E{fW-a$]1FngAN+4 ~yi$+/]XkIDV/HexP]YsFPHc$YHyF.gMdP_u<');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
?>