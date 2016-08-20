<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fimtattoo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e54j#V9Xf%c`wz%K#y@wUdhm}qD1fYS@QAgR2rD6Y#V4e[f;:Y6[RUpN0e#`uyqQ');
define('SECURE_AUTH_KEY',  '%$VmSNUPRUVN`*o(W_D0TUef19FQy+I5f+;T3?C tOOvYV+3<%Jy)4M>`VbLYJ{g');
define('LOGGED_IN_KEY',    'd2v29k$Ru0:dLX)=m6^w5uM>Ni0D91~.sE>gpW &mP&?x#VTqrQM} nJM5pb+NAt');
define('NONCE_KEY',        'bD_Rpmqz5d4&Nmr&wU{zrt tpVGKHLvTe1^x88T|n,`Ac!vhD4x!~v0@uY12[2Tc');
define('AUTH_SALT',        'scK0]e<hUszgwf7VO3r&?%PBAVeW}!,BleSwK3K#CCdXa-3x#<?:9=Ux&hADCd~,');
define('SECURE_AUTH_SALT', '1K5o0=,%E${!|2#GjFAfN#F.a-L_8U~.R6)v>Cn;!y~J;i!@&mMl4v`/HR{vxGSG');
define('LOGGED_IN_SALT',   '9P4mVGN)c5w&Jr<#r*`UMF7v vu 9<t)bL>V@2[H^My[fFcx/ws77a5GM-g{[F]<');
define('NONCE_SALT',       '`nd:nOH+LP/68-rCqFL@5e6a8WUJ!U<h?y*<[L_tj>{?&UE2Hu{y/rFmG~a_?/#6');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
