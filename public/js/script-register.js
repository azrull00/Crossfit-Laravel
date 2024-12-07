// Mengambil elemen HTML
const openPopupBtn = document.getElementById('openPopupBtn');
const popupBox = document.getElementById('popupBox');
const popupOverlay = document.getElementById('popupOverlay');

// EventListener untuk membuka pop-up saat tombol diklik
openPopupBtn.addEventListener('click', function() {
  popupBox.style.display = 'block';
  popupOverlay.style.display = 'block';
});

// EventListener untuk menutup pop-up saat area di luar pop-up diklik
popupOverlay.addEventListener('click', function() {
  popupBox.style.display = 'none';
  popupOverlay.style.display = 'none';
});
