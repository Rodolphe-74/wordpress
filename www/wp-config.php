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

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_ADMIN', true);
}

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Yd)>/.8he$0-NC?5p~}J.gn7$e$MANoD+OF1eNf1,RMd># qifx*+=l<x#SSshsc' );
define( 'SECURE_AUTH_KEY',  '[pY$@F`?TDi>&q.Td#hrT.*cALS[3hg$+]}jUc1sJxs{uI=)hz5b}Vq9jz~G)z0b' );
define( 'LOGGED_IN_KEY',    '5_ODf7.$75be{*>cu4/@qvUgy c6fI;O0HHc7W[~1&^Adjy{`TBMcqe3fg,v*d*%' );
define( 'NONCE_KEY',        '0);JlNr!PZ9WNuhd0+CKu7[k^]+]Pz&VJymW7^TA2d-g?}*{[&eoKhS@w3N9RVRd' );
define( 'AUTH_SALT',        'oc_Nw6~ x524#KwF.9G3fe2Es2`Dl0u1F)n#GLdUftcu4W9$iu-3..NZnm~$9$;K' );
define( 'SECURE_AUTH_SALT', 'pC5Br{#,HA}R:EF~y.RMFbmc_5]er6p_qtiH6|~4v|as3%2Kh2[!{Y7sFC7uOs>L' );
define( 'LOGGED_IN_SALT',   '01fH4D*{?oWjdk8QjZ*mci43f&iH#tC6`!~1qc8.)Yn38/uv^Xr|;K%As%KA%OQ{' );
define( 'NONCE_SALT',       'Mm}uu?:2K5nk 0sAGe%N+3S^aT/q19bF?xX4t)|T,e/t_(.uICrY5>*Y2MI+^)oV' );
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
