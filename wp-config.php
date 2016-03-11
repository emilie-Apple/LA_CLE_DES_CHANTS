<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lacledeschants');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ya]dPD`~SIaMI$,4pKMP~oEz` <7L6b8}0;C3ZrCu<[hQtCA~odp4CLT;}^=SNJ/');
define('SECURE_AUTH_KEY',  '++}m|USvfx@ J#<a 7;:6{iBTgkn24Gh)2p j?!Dh.UC-3aE0:Z[ZR-EvCb]N$&#');
define('LOGGED_IN_KEY',    'N/8A-eUcuv8s,ZrNK.]#G0noz;-@ P^1qv|Z+9P[+OV_n&4~m`V~kl_FMo1(Q&0A');
define('NONCE_KEY',        'dXnI^GkWkr,k1Dk@ZO<m+sU_Dk#=D<Lg,mRzz|-m^|-iRdA 8 PgOVHrj9%@,ivf');
define('AUTH_SALT',        'bVi=8yDszK-e5.<QnM`u+:kv_U#9/l[bm:m_8PtDu4aLsOl%2b=|}sFoKiO3~d~/');
define('SECURE_AUTH_SALT', ',(-tj33tF7+2S#.@hVcF*dx:e8gE@@lwHr/9.BG0!k@CshLB+PU]-w}6eK4!2,u:');
define('LOGGED_IN_SALT',   '||KpHP5|9 M0kIlNGHdj1-Lx4h:Y5y8ZcQ|gWzec  ?6FnOiyQIu(o9e:7lHVE)g');
define('NONCE_SALT',       '-j1+#j;<zNy$hrflUqo}#xuHrJQtD^n#%!IL3H]Fm3.%!#-!-_ KmU3Fk|}-hZ2j');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');