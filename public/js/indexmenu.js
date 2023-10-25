function indexhome() {
    const contenedorMontack = document.getElementById('index-montack');
    const montack = document.getElementById('image-montack-index');

    const contenedorTotaltech = document.getElementById('index-totatech');
    const montackTotaltech = document.getElementById('image-totaltech-index');
    
    contenedorMontack.addEventListener('mouseover', () => {
        montack.style.transform = 'scale(1.2)';
    });

    contenedorMontack.addEventListener('mouseout', () => {
        montack.style.transform = 'scale(1)';
    });

    contenedorTotaltech.addEventListener('mouseover', () => {
        montackTotaltech.style.transform = 'scale(1.2)';
    });

    contenedorTotaltech.addEventListener('mouseout', () => {
        montackTotaltech.style.transform = 'scale(1)';
    });
  }

  document.addEventListener('DOMContentLoaded', indexhome);