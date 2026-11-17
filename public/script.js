const form = document.querySelector('#contactForm');
const toastContainer = document.querySelector('#toast-container');

function showToast(msg, type) {
    const t = document.createElement('div');
    t.className = `toast ${type}`;
    t.textContent = msg;
    toastContainer.appendChild(t);
    setTimeout(() => t.remove(), 3000);
}

function handleSubmit(e) {
    e.preventDefault();
    const name = document.querySelector('#name').value;
    if(name.length < 2) {
        showToast('Имя слишком короткое!', 'error');
        return;
    }
    showToast(`Спасибо, ${name}! Сообщение отправлено.`, 'success');
    form.reset();
}

if (form) form.addEventListener('submit', handleSubmit);