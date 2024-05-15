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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'Wi/kVS5?yahSAHwGM>V>m],]Ivl%fT@z0zX6Rc/k{g: ^Wc@SjmGXPL,{FfisM5*' );
define( 'SECURE_AUTH_KEY',  'C#oBNMuK@|mUK#&<WgU0/Tn/#,wc];Z}ryFY@9YuR8`ufLp(m%5mg$R;zx]t1%PM' );
define( 'LOGGED_IN_KEY',    '9Ahmv1Oj|W>YY!^hr:gA9*oKfphndCv6&.B1p3T5ny/!@vR)8a`Hmq:$:*S!<j0T' );
define( 'NONCE_KEY',        'OJ5f3$`p_.S[1*F5D^1=F+(c9,r=hg}ZdmBD>t3zEr$-QnCWhXh{$DVvV54iX;(;' );
define( 'AUTH_SALT',        'NXcqL12o-NkG%bB~jnJt3BI5: 5xx^!624Q+3q`H>6P|#M;QMU,zx>9Cvi)J[m{V' );
define( 'SECURE_AUTH_SALT', '^p}{LeLPd;T1nbh_(9~}Z1{~|b4u;D&#(pmNiB0RY%8AmS2<QLEz@2qzEp3|Yq~^' );
define( 'LOGGED_IN_SALT',   '@R)JGpuZbJ&R&n91K`xn*A-+K%Y3~xrT<d&QK;ywwT0&o~clx%oQQ<vD&;TiWv<:' );
define( 'NONCE_SALT',       'e<X1^X<UHHtJTy(_z-=E(Y-ZFV=y;=t`7mgM|R QqtTjC}75Lqy#[DB$_tRY{]=?' );
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
