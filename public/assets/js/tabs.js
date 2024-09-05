// JavaScript to handle tab switching
document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.tab-button').forEach(btn => btn
            .classList.remove('active'));
        document.querySelectorAll('[role="tabpanel"]').forEach(panel =>
            panel.classList.add('hidden'));
        button.classList.add('active');
        const targetId = button.getAttribute('data-tabs-target');
        document.querySelector(targetId).classList.remove('hidden');
    });
});