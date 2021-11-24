<?php

define('WP_HOME', 'http://localhost:8888/wordpress/');
define('WP_SITEURL', 'http://localhost:8888/wordpress/');

// define('WP_HOME', 'http://192.168.1.61:8888/wordpress/');
// define('WP_SITEURL', 'http://192.168.1.61:8888/wordpress/');


/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpressb1_20202021' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vcra9<LuO5Ewg8eT47lvt(YWgs>DV,R;v3pq}=zrS;L~)C8du!xEj12ox*}TrBTd' );
define( 'SECURE_AUTH_KEY',  '$v8Z!cKk~~Cki~nq~wC]V{1?+2%QY|:e@aDQo(W0FBBDfoo}V!hv(o7zkaLHHxUo' );
define( 'LOGGED_IN_KEY',    '[wXGC8^ocK!)2ZGn|.Yyeti]ZfBh xD;ltBmu6K%B]ltuNrJGyy,;m[UZ>0g)#=W' );
define( 'NONCE_KEY',        '()CCxq.PsHxO@7GxFmfR!*Yp/vn5ExQN{5P;K_rq9_B:n/u6K)@vP_O:=$f^p.^?' );
define( 'AUTH_SALT',        'Tut3WyHu!CKTN <&%],MF8Sb(Zwg|8}^9*ka_?x!I5/QS1UDo?6lT=hr1V}Z=eF,' );
define( 'SECURE_AUTH_SALT', 'fY,2#K2$]9r>!bj?h`:Gl]rzXsjmOa If>r/U)fF^+p]z!q;_2hxYlQ#5+Tb}l#S' );
define( 'LOGGED_IN_SALT',   'oBS^Zx _V>Ragp1Zs2DSK$v@T}($BQ/Qs49;%Fg-0=.?hklis_Q6d1AEpV;@DNnw' );
define( 'NONCE_SALT',       '|tAs08!;J^UU/mzyj,Y8<qY]mLt!d9~:@5iT.X.E}._[`Zj)$:+<Sl[%.s+de0ci' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
