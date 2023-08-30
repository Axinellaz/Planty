<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bd_planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '*.=sS;UYDpGnW.roQ4;Bv!:vs9yjk=q8,=&N)-2tL&];<w%G%>c:}=L_ZX-zh/&V' );
define( 'SECURE_AUTH_KEY',  '#f)((W&@<7TqAeU[B>+4hHJ(syY$z+.}p&(2?KV:AxeSvaH+cjV5<?|_t!|LXY}b' );
define( 'LOGGED_IN_KEY',    '&dhI>spH7vq@z7vO8;X#?<cv$Z@*i[0;V4u_qqb^5|zz#a276hiDF[b^lIMCmn7v' );
define( 'NONCE_KEY',        'J.Z+cYbvc&yeD2uH!JhF-4j@xwX/rg5&OCI2?+Ys=EkVe6gc>lrwp2_cZzw@?Wk7' );
define( 'AUTH_SALT',        '-vxAG6&/B{p8Mus^{1a ]GzHyLpmrfcUY!WK]f%Xg[%7}oO$t_=hgjdFL6&P7N:F' );
define( 'SECURE_AUTH_SALT', 'X_#czBX=.RN/gPbX&6*}=!{&7@I!(rGx{=_&Jb; J7EeTR`F<ah3qN;KTu+qJ?|8' );
define( 'LOGGED_IN_SALT',   ';90E4-Uy;^r,xor/0YVF|er+Mz(/BK_j4i:-/<Xq2_;NsF3aWnr-bclfSG0]OjH5' );
define( 'NONCE_SALT',       'yS+]+*$?tg7$;0!(J]UR!m68P!1O>1P?o>Deb5r5Dh1r3:F f/paVg0$H$stD08B' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
