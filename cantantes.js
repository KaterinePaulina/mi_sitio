document.addEventListener('DOMContentLoaded', () => {
    const percentage = 75; // Define el porcentaje aquí
    const maskFull = document.getElementById('maskFull');
    const fill = document.getElementById('fill');

    window.fillCircle = function() {
        const rotateDegree = percentage * 1.8; // 100% es 180 grados
        if (percentage <= 50) {
            maskFull.style.transform = rotate(${rotateDegree}deg);
            fill.style.transform = rotate(0deg);
        } else {
            maskFull.style.transform = rotate(180deg);
            fill.style.transform = rotate(${rotateDegree - 180}deg);
        }
    };
});