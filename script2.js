// JavaScript to open the image overlay
const imageContainers = document.querySelectorAll('.image-container');

imageContainers.forEach(container => {
    container.addEventListener('click', () => {
        const overlay = container.querySelector('.image-overlay');
        overlay.classList.toggle('open');
    });
});
