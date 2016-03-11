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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', ' localhost');

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
define('AUTH_KEY',         '^Gs:o!YXwT+$qryySMvM`+pk*h_.k;b9~h/(?b0+L8ac~r&?/Y`5_}z_OHfatW_5');
define('SECURE_AUTH_KEY',  '3++Tz(NM|l*0tFe.tI7oE<|nQ{;~h`RkdQgU/(ka~V NdNkGEo51{8#I+Ed~OP+N');
define('LOGGED_IN_KEY',    '6fLy2_^|,kq.mEJrEI;^HNU6u%x3+be*R{ V=L}!|uE`Q<m;phNZAju!N|)<kF*H');
define('NONCE_KEY',        '4}Msp8f,Pc?Ov+M}6L;==-&-g:e?7`3fI2FoiiBAjG6Q=lQZd4I~J5v=F:->A-(I');
define('AUTH_SALT',        '8[.3-oVrjB75.;;; *.;2GUgqN{qCTCZ4[]kG7>{iFA=@[! /]A`orDx)s7{L tJ');
define('SECURE_AUTH_SALT', 'INKqH!]y`b|dmTM6wo~+E:HU8,vp|X|T*,Y?Td-K1Sfw;19+FxQ#y`x>X@yox|6z');
define('LOGGED_IN_SALT',   '8Ecql$!YpW},2Fw~3k%fcN8,RAQ &;|KqC1wDL}hJS;<n?V)1]+vF[5/X%R{N^Rp');
define('NONCE_SALT',       'J5Iqe{e dy2$S_0P!zdv9zO.Qe|-PXaK+hD#?i|jA/)5tw!<{LT~f%sUS-U7W_zg');
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