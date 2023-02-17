const modal = document.querySelector('.modal');
const modalBtn = document.querySelector('.modal-close');

modalBtn.addEventListener('click', () => modal.classList.remove('is-active'));
