'use strict';

flatpickr('#lot-date', {
  enableTime: false,
  dateFormat: "Y-m-d",
  locale: "ru"
});

document.getElementById('email').addEventListener('change', function() {
  let email = this.value;
  if (!email.match(/^[^@\s]+@[^@\s]+\.[^@\s]+$/)) {
      alert('Введите корректный email');
  }
});

document.getElementById('password').addEventListener('change', function() {
  let password = this.value;
  if (password.length < 7) {
      alert('Пароль должен содержать минимум 7 символов');
  }
});

document.getElementById('confirm-password').addEventListener('change', function() {
  let confirmPassword = this.value;
  let password = document.getElementById('password').value;
  if (password !== confirmPassword) {
      alert('Пароли не совпадают');
  }
});


document.getElementById('name').addEventListener('change', function() {
  let message = this.value;
  let cleaned = message.replace(/[\s\-()]/g, '');
  if (!/^[A-Za-zА-Яа-яЁё]+$/.test(cleaned)) {
      alert('Имя должно содержать только буквы');
  }
});
// Пример использования
document.getElementById('message-phone').addEventListener('change', function() {
  let phoneNumber = this.value;
  let cleaned = phoneNumber.replace(/[\s\-()]/g, '');
  if (!/^(\+?\d{1,3})?[0-9]{10}$/.test(cleaned)) {
      alert('Введите корректный номер телефона');
  }
});



