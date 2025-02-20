let virusStatus = document.getElementById("virus-status");

function startVirus() {
    virusStatus.innerHTML = "O vírus zen começou a se espalhar lentamente...";

    // Simula o progresso do vírus
    let progress = 0;
    let interval = setInterval(() => {
        progress += 10;
        virusStatus.innerHTML = `O vírus zen se espalhou ${progress}%`;

        if (progress === 100) {
            clearInterval(interval);
            virusStatus.innerHTML = "O vírus zen atingiu 100%! Relaxando agora...";
        }
    }, 1000); // Atualiza a cada segundo
}
