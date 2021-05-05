<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress_0329' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e6Bvacb|?4s;yf*+&2jZP2WL6Xdui^`}7j]+=iG6eFY[k9G%nOaGBuA8yAob|]0x' );
define( 'SECURE_AUTH_KEY',  '8$nY!p`!zblN$lqM[Zg~1}ERZN1j20G*SISy#<F~L2n0$Ms4*JM%@7j{TCIQ`xPA' );
define( 'LOGGED_IN_KEY',    'nz7QK0<~H5$rM!8H4_D/Z>QXK$~jDTj,AgZbtYv`72;cFfdKWTd@j~BZ0Yt0 S`g' );
define( 'NONCE_KEY',        'A93[]YU7/L:<@y>L+9GB[<hgyS P?.>a#Ets96zXyASDit3q;66FE?EEf[v|[Do6' );
define( 'AUTH_SALT',        'b3dOI_`CPCnLR@6$XrY<}$$79mO3GM,$$p3uHjCecMLx=<U*[(LS]0_p<v67&y4R' );
define( 'SECURE_AUTH_SALT', 'k5eG,gUG wM{bkMPyhcAb1k;0i~k+=eP0J8qD)F`N<}5}r~8 :u3HXb2C#lfJ(nr' );
define( 'LOGGED_IN_SALT',   '>x}EsBm`F*`%]PcEZr<OGR`Fs]Qj@t3mDOwO>~(|/qEhTUcFJ,!eygA;#G(3w N1' );
define( 'NONCE_SALT',       ' K[0p>+Ma|VkypD*E@o5JaOH)s4._/b!``^~SOKxputg4;+}Kbm7S;VPB5B8*}=}' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
