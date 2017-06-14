<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FsHgQt$k@NGAMX6>UzwliX8J4K|pemz(J7gN} wRwxZ`m~YICl9q$I0JN.Tp}O_4');
define('SECURE_AUTH_KEY',  'Rx^_@*vy#(~PRZ8d*1Eh1?+HBkkTd!i8]1`:JlrpV]>rs!Jai(v[S8N#N&i[VzCU');
define('LOGGED_IN_KEY',    '1:WW09PX@wdxwUkciLT`Yqp!y}jqoKF)kbJ/#Jrw71aNVJy)Dd0Lq?+mAwLu1e_`');
define('NONCE_KEY',        'Z(G_f:?Tl<uc)dSC|Gh b!,2-,K&QjmM3dMd!K{}_+^* >[7r?712cm~hbcRi4Xm');
define('AUTH_SALT',        'zajy{)EEjLAbM]0Fm.dB8v,-e}yi_FT>0c6k^~Q9hE~83jACw[n@+2pbA_XV^?=/');
define('SECURE_AUTH_SALT', '|!T_HeRpCC!R,lhf>@ClukR]]4)GPvqQ@PN4U_y$! k071i}yVoMRDD#ZM|ffnDS');
define('LOGGED_IN_SALT',   '22?}df>O/flVJV>1|b(WGtq+[6g6?3-*vf3!Ifk+v$Xk}Y6`Qs)XUL`8;-//v nX');
define('NONCE_SALT',       'G-=Q`yHHv;!B0}x+#ngF@[Mevu:?emVLYsdP`0?xh~k6R3$~o;D{DrxeAUUY/~+P');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');