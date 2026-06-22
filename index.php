<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Akilessimiao">
    <title>Gerador de Relatório Técnico com Assinatura</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>📄 <span>Relatório Digital</span></h1>
        <h3>Preencha os dados e emita o relatório com assinatura digital</h3>

        <?php if(isset($_SESSION['mensagem'])): ?>
            <div class="alert alert-<?= $_SESSION['tipo'] ?>">
                <?= $_SESSION['mensagem'] ?>
                <?php unset($_SESSION['mensagem'], $_SESSION['tipo']); ?>
            </div>
        <?php endif; ?>

        <form action="gerar_relatorio.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cliente">👤 Nome do Cliente:</label>
                <input type="text" id="cliente" name="cliente" required placeholder="Ex: João Silva">
            </div>

            <div class="form-group">
                <label for="email">📧 E-mail do Cliente:</label>
                <input type="email" id="email" name="email" required placeholder="cliente@email.com">
            </div>

            <div class="form-group">
                <label for="endereco">📍 Endereço do Projeto:</label>
                <input type="text" id="endereco" name="endereco" required placeholder="Ex: Rua das Flores, 123 - São Paulo/SP">
            </div>

            <div class="form-group">
                <label for="titulo">📌 Título do Relatório:</label>
                <input type="text" id="titulo" name="titulo" required placeholder="Ex: Análise de Desempenho - Sistema Web">
            </div>

            <div class="form-group">
                <label for="descricao">📝 Descrição do Serviço:</label>
                <textarea id="descricao" name="descricao" rows="6" required placeholder="Descreva detalhadamente o serviço realizado..."></textarea>
            </div>

            <div class="form-group">
                <label for="tecnologias">🛠️ Tecnologias Utilizadas:</label>
                <input type="text" id="tecnologias" name="tecnologias" required placeholder="Ex: PHP, MySQL, JavaScript, HTML, CSS">
            </div>

            <div class="form-group">
                <label for="prazo">⏱️ Prazo de Execução:</label>
                <input type="text" id="prazo" name="prazo" required placeholder="Ex: 5 dias úteis">
            </div>

            <div class="form-group">
                <label for="assinatura">🖊️ Upload da Assinatura Digital (PNG/JPEG):</label>
                <input type="file" id="assinatura" name="assinatura" accept=".png,.jpg,.jpeg" required>
                <small>📌 Envie a imagem da assinatura do cliente (fundo transparente recomendado - máximo 5MB)</small>
            </div>

            <button type="submit" class="btn-primary">📄 Gerar Relatório e Assinar</button>
        </form>
        
        <br>
        <hr>
        <p style="text-align: center; font-size: 12px; color: #999; margin-top: 20px;">
            🔒 Documento com validação legal • Hash SHA-256 de integridade
            <br>
            <span style="color: #764ba2;">🚀 Desenvolvido por Akilessimiao com assistência de Deep AI</span>
        </p>
    </div>
</body>
</html>
