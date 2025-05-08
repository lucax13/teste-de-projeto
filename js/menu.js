document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('menuNav');
  
    btn.addEventListener('click', function () {
      menu.classList.toggle('show');
    });
  });
  