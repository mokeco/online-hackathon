<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'online-hackathon');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IDoS+2H|Bf#O/$}As0ZV5[=*Mse:]&gnv:U}mk&x]w6t1C5BwxHmUpQ+K#B|(GRM');
define('SECURE_AUTH_KEY',  '&A4b%$.jk&45=g6|#T:$<LtJ#_larVlt&F1IE=+~=-zRQ|a8B4c@VU|N8IGj*-@?');
define('LOGGED_IN_KEY',    'U `m[ i7DL `-*>hbIg]BEuXHDo7ZjuBp+L]Worl?t=29$;|zR e*_r2`&lCQ7Y@');
define('NONCE_KEY',        '|/e*h7A4qF#.tmqK<)uQ3VQ6tdEwi53h h,D}-_m8pRB{1D$u*>aENs;zHeitq>E');
define('AUTH_SALT',        '5hs|h]CkJw/gYBDrXSJ;rm(Wv3]~oA;<EA4Hp.t4nx-&_=3z[_QoZs0ov!+;*CiO');
define('SECURE_AUTH_SALT', '1#!Be@OV)ZWnr00#+Afwg5Vr-};@kE&(2vySI{x oX5dF@rYg}j+=t;JTuoq&$8|');
define('LOGGED_IN_SALT',   '|{]wzZ%49,R_fe<[Ls9uk(Ai<<,%2Iw6[FdWQwB+!U/c*S3K.-+n,Izh6|IkZGC.');
define('NONCE_SALT',       'YD%Pa2A/2T|3v*K;?L2e=Yf|nrixt@72-sKA>KR/ZbO=|gDjiZ>W@f w1Qd~c^dD');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
