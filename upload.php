<?php
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    
    // Verificar se o arquivo foi enviado sem erro
    if ($file['error'] === UPLOAD_ERR_OK) {
        $uploadDirectory = 'uploads/'; // Pasta onde os arquivos serão armazenados
        $filePath = $uploadDirectory . basename($file['name']);
        
        // Mover o arquivo para a pasta de uploads
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            echo 'Arquivo enviado com sucesso!';
        } else {
            echo 'Erro ao salvar o arquivo.';
        }
    } else {
        echo 'Erro no upload do arquivo.';
    }
} else {
    echo 'Nenhum arquivo foi enviado.';
}
?>
