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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '39rANijDLZRIYOI0' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ')5GKW;x6~J+B{j?XF&6C%&gbpd!HkCtE)qM;]9z#0y0qAZ)wwsKjI!8y<G|8kQ1H' );
define( 'SECURE_AUTH_KEY',  '?N{7j&ywaD2,-*]pEGG4hen6rOR{)seNj-^--b~pEdcQ9G,L=9>U|/r8G`9wv<F`' );
define( 'LOGGED_IN_KEY',    'EwudL$b:wGcak1u6.=< +MXwXVH>Gc*_n;~VXly(3~t%JYq$uuX(9(_[M_/2T{n#' );
define( 'NONCE_KEY',        'I]nGrN91}rPv/3;dMssEy4[6hHu3!H<VXosw%:lsNC-jS}m4|~dN0n0z/j3H|_- ' );
define( 'AUTH_SALT',        '!MswwQ?>rt05wt5Au+2@@M(cQ9H<Om]Q0Jlaxr@ z]n#d+0lKV`%kq?czR]hI]IQ' );
define( 'SECURE_AUTH_SALT', '^W4+@S^<)!2,|2oNVxZEHjnQcR)ey>n*!oaQq^v[>?b$X_P6wkg_8=u<Bqmd9RY@' );
define( 'LOGGED_IN_SALT',   '$Uc{P!]qPLCxw1&;ffIQ~bIJn5E* y}xJ?FNP^hN?h1^hqOP<lIM] 6Mx=z<qta[' );
define( 'NONCE_SALT',       'UsaVrF!v#4vSi,xsU`aBX,Q>#B*w~qWx)EQ!O@Q3j|v_WD{d|~fnXGYXKnTZ0IJ/' );
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
