function togglePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup.style.display === 'none' || popup.style.display === '') {
        popup.style.display = 'block';
    } else {
        popup.style.display = 'none';
    }
}
