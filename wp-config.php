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
define( 'DB_NAME', 'db_7conseil' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '7conseil' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'advice7@BA202' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f/q}Tmsh5O>uLObE:lYstk(.MD+Ojt|Wr/:3M%KFK>r`+nsl E?)zs=KLX`cqe6,' );
define( 'SECURE_AUTH_KEY',  'R!)%+m7SYq*-oZf1pN=N_}0Nf4L}JyLaaFHo h.RwKto2*-|#4Qx5i7|%FQO g[y' );
define( 'LOGGED_IN_KEY',    'YOss@M!_IF3G[z[q$`iH><F8f2ln:/xQ|NKEnhuA7tL#iV`:|6-F[f)bktG7]?JS' );
define( 'NONCE_KEY',        'w/GCL|<2AeWca||2.6_(;[:!iM~{hxVC&c7lkmMB(x,+.k$T<PqR%g>33U+RosIm' );
define( 'AUTH_SALT',        'pY)3sUp`/>}.wKz_{%KZdOjG7]hU8zdX2U^1dTw:aIa`Dl$gW`}EqPoRO7U&&~CC' );
define( 'SECURE_AUTH_SALT', 'u~>*]<K+aB_cY)bYb,[Y7WgJ,43w;9Y7.(0Ve$.9ayL+[04o/q;B*]aLkgeHSp8<' );
define( 'LOGGED_IN_SALT',   'gd@T.ILS+$N3{i7aY?i5xO^yI~Z~ou|MpPSE}UN$~GJ<|LxU P.2x>Pdb@/%>!ej' );
define( 'NONCE_SALT',       'DTFl>MR?BzV-|5kG9|[-E[Z-^>3Ke_O|>S>sv8V3TWrd6deKR*VBQhu}uX;bI%nY' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
