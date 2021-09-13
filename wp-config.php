<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'epiz_29724195_trabfun' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'epiz_29724195' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'BO8xH!Nn9U2K' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'sql302.epizy.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nKG )T?T{y.X|6JfSA|x7#02_&cULGgfJa93aK&b.hVQ4A^pR08d}#>~uG!rf]K4' );
define( 'SECURE_AUTH_KEY',  '@.#SkbZG/8R[?a`0gUI/#t@=hdLE04(k>xtdMt7*,Q5=wPn@8?jba,+5$^z`p;+>' );
define( 'LOGGED_IN_KEY',    'aEg),ci?LdQR5f}:f@2``x2G?$B7CKqFn^qt#/<wv5B]uj|P v*% ZNO?#Vmq_p,' );
define( 'NONCE_KEY',        'URJp{CI~f)3:b~ 3&`cTUQi+6L_ u{ao.F{{S+.%]UP?i6~gtAHIP9GU9kV82{$j' );
define( 'AUTH_SALT',        'QSS%QL16T<G;&QgohXXc-Egv#P73E__<>L6Jx+qP4?(!H^qBuaroB*O]@xAv.D3>' );
define( 'SECURE_AUTH_SALT', '.{!cuq1Ob3Bpew*{!y .MMI hsh/iJ{3#4?DNZ{MRyF<IP2wyqz]X:rmIo1)uKOi' );
define( 'LOGGED_IN_SALT',   '~uZ])|m}gXtI/[u+a n2p>. 1)j7TMIW1mMnZ&$s$<V<ZJ2V=Kd./=@qP]KW<-D0' );
define( 'NONCE_SALT',       'aziOaJCh&+5],HQoNL+h;#F?*&l(7h=(RNgk}([G3qj gC].5]A Aul@;,Nlal*w' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
