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
define( 'DB_NAME', 'yoga' );

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
define( 'AUTH_KEY',         ',p|pr`*B Emk,AXj%bDUFXLy*G?~3.??D8wp8?-EmrIT$>ekFq$+:cO1}&$oL6C$' );
define( 'SECURE_AUTH_KEY',  'MsA8uEMCdUnW/%#B}^<J)hk8;Ep!(WXlMgxHt79}IpbGpS l-H.vb FgNb}p.ad.' );
define( 'LOGGED_IN_KEY',    'GqO@*-Hr*?9J;ouD+4$TWV~OxjAu=:-h~tEj-Q`rbVk(zY,kSE<.X*6HPytfhj.o' );
define( 'NONCE_KEY',        '!yJu%$bjNq)k1sQC^BDzwz~Ur3#H]C&@!-HMe3HF1NBNfxc8|R+O8US@i+:S9_Oi' );
define( 'AUTH_SALT',        'Bi5n|3{@+M9LfX<zE{gC?{Hu0`C.dZL9>oP5}[kq<AY %/:C<M*EqAC|Jl.?J:Fv' );
define( 'SECURE_AUTH_SALT', 'Jh8 /aK#-rDgB>|j6:qs+s< v==34?6R{u1QRC]q!soyh%40E/3DXIn[K8nl>.vC' );
define( 'LOGGED_IN_SALT',   'd*,<axK/!>$E^8,lCW#mw#yE^Vra6RW2%q!@fx8fz;zpn5SSY#>D#cLGMevYjp;/' );
define( 'NONCE_SALT',       '0,-xlv]R3w ) oj1dQs*t>4kdLU[m94!IHf?V7,du63k7?<&RaoHs06gMWHqDzh#' );
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
