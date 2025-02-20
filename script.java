document.getElementById('uploadForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const fileInput = document.getElementById('fileInput');
  const file = fileInput.files[0];
  
  if (file) {
    const formData = new FormData();
    formData.append('file', file);
    
    // Fazendo a requisição ao backend (exemplo com PHP)
    fetch('upload.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(result => {
      document.getElementById('status').innerText = result;
    })
    .catch(error => {
      document.getElementById('status').innerText = 'Erro ao fazer o upload.';
    });
  }
});
