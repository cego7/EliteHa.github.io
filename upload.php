<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        echo json_encode(["success" => true, "message" => "Arquivo enviado com sucesso!", "path" => $targetFilePath]);
    } else {
        echo json_encode(["success" => false, "message" => "Falha ao enviar o arquivo."]);
    }
}
?>
