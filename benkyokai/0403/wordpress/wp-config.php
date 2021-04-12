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
define( 'DB_NAME', 'wordpress_0403' );

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
define( 'AUTH_KEY',         'P}$j#WN{<ipS5Gy`fqpaw|#.vo)v<!j?H;/<m.3e/VSPGm^V3e~x9rgpy>Hw+lQi' );
define( 'SECURE_AUTH_KEY',  ';,B.At3.~zHu!h=A{d`td;zKC0Ef6!q`~pl(.^Qd)oVfLh]]PB>mKBvqx(!fal9+' );
define( 'LOGGED_IN_KEY',    'iTNd8;ijZ~C,79NOKZ<ZDq<Z+MSnH{F2N,Q>IAAGC&}[!8t+(Y|+GS)e&Z<&}TG5' );
define( 'NONCE_KEY',        '_IwWemCL5C]zrK}d>}=[]#`A)B$ df,=E1n 1`O~j`elIE=f6IBqC3sz6 a(F+{3' );
define( 'AUTH_SALT',        'iM,c24gW-0m$4%S!w:eHKri3=3s#N24q8*8krV3@%m*z2ZD`|Ar%(!Py~KR%qp=N' );
define( 'SECURE_AUTH_SALT', '/HSr_e2?wrg{ Fm/LGgz/tG@[<R~B!/=Th#fg-]t%j|zh7&WGVh?{2URDRkazr}6' );
define( 'LOGGED_IN_SALT',   'qLX8tWx#qFhW`][|Xwhs736WC6*CM9}/[OVaFLBCqz_[uZ|a7k|wL*yE_49pwmf}' );
define( 'NONCE_SALT',       'm/7VCmNEgf`d)D46z&&D}|$[VnLS^ofvJ2Dci+_aS&,3e)_x`H+WWDH0J;4xL WM' );

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
