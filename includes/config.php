<?php
// Configurações do Sistema
define('APP_NAME', 'Relatório Digital');
define('APP_VERSION', '1.0.0');
define('DEVELOPER', 'Akilessimiao & Deep AI');
define('TIMEZONE', 'America/Sao_Paulo');

// Configurações de Segurança
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_EXTENSIONS', ['png', 'jpeg', 'jpg']);

// Configurações de Pasta
define('UPLOAD_IMG_DIR', 'assets/img/');
define('UPLOAD_PDF_DIR', 'assets/pdf/');

// =============================================
// ⚠️ ATENÇÃO: NUNCA COLOQUE DADOS REAIS AQUI!
// Use um arquivo .env ou variáveis de ambiente
// =============================================

// Configurações de Banco (LEIA OS COMENTÁRIOS!)
// Para desenvolvimento local:
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_NAME', 'meubanco');
// define('DB_PASS', '');

// Para produção, use variáveis de ambiente ou .env
// define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
// define('DB_USER', getenv('DB_USER') ?: 'root');
// define('DB_NAME', getenv('DB_NAME') ?: 'meubanco');
// define('DB_PASS', getenv('DB_PASS') ?: '');

// Configuração de Timezone
date_default_timezone_set(TIMEZONE);

// Configuração de Erros
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', 'logs/error.log');
?>
