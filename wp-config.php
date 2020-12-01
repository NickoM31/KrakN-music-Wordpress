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
define( 'DB_NAME', 'siteKonyD' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c9/B%.ysgCt(*6o &eLbgX?FhI9{`(/sv%P1`B>YX~jD(DMbWuQzf*1cwen#EQrb' );
define( 'SECURE_AUTH_KEY',  'UPu|VTdqSP2;s^Vhcb8},@fR~0PG#*Zp:*<b!ahg ,>ls&y(S#d3z_>cDvtT<`-L' );
define( 'LOGGED_IN_KEY',    'WqIL<.QHDYq%c@%a}QqUWRNq(e(g@Qp8`bef^Sh*:6{H/~,VsCdi9~}#1G?&A5>0' );
define( 'NONCE_KEY',        '604%C~G{1-9kofACK4*,mMGZ_2W-%I;Y+au0-BcW0%37|X0)mVAdm&*_16v;(x6B' );
define( 'AUTH_SALT',        'VE~A<Ar_uG=9jjYS$7wf@?ewZqZHj*9[rLd-()>qs[cOz <&25};&l9{b/eBv)(6' );
define( 'SECURE_AUTH_SALT', 'ozLS<f*%ssOe|;:zW,jX?V B^B|SGzJ1?+=$S#7Mk}dR ,k[F<F{|XKmi21afjx^' );
define( 'LOGGED_IN_SALT',   'nR#_S=L]>Lvw3HEI$tT?C@(v9l=Q%=)%? %@oa+1^+xIayKjvNcnU)]NnS~&czCd' );
define( 'NONCE_SALT',       '!4mZU/Jyh8;fsmORd}1MIcf:|_1]QWqa_ vKrf:0@?y}qb{TsAcyh;7e)E!KEcp]' );
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
