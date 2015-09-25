<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'kavian');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hLczoqDLFIZQ&0@(W-8TR%Cj+tl3MV9Pt3N#P/N)zY2e|GF-[x@ j1>)/46mB#+%');
define('SECURE_AUTH_KEY',  'SF-,Y!+|Rm&oa_9,)hP390pTK[mi#i9,!`FDv*>TH@]X~$Ng/;b2IqA<@&PiVF@H');
define('LOGGED_IN_KEY',    '-TXAL4VQ|7ZA4?Wsj+,|%EBB/M:76*-D!qMP-GtbFzDuDnX*We08-2EW+nIOrj3F');
define('NONCE_KEY',        'j%aJ!IP{}]Kvh.]ua3H,eO#GN[P0v-rVTWpyO~[41>YkJs o:UZ-b5C7QZg=+bJv');
define('AUTH_SALT',        'i!/Xckla&78Ea/ztu^1s?Zn4]bj=-S o??Eey0C&FICH$(aAa=5!`>q7$iV*)6NB');
define('SECURE_AUTH_SALT', 'aazE?+)2eBSgQm05Jz1Q,Kj h@nm0@7h<PtL`12lQi0~B<a[uvPn5g1N~p;?gg:`');
define('LOGGED_IN_SALT',   '[Ok&hz*:&QqqgwXNSZ#,,4Z1xDB%IHG |5lt?L>:j>hF=hxr`;;@P?i]/z!cc2lO');
define('NONCE_SALT',       'r[nWK5<B+$S$f1A6vn/xdOI+2>8Y{ND]z5P/I2meiN]VG,JN?-,U$R!jEOtb;^^F');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'kv_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');