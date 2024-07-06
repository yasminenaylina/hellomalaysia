document.addEventListener('DOMContentLoaded', () => {
    const favoriteIcons = document.querySelectorAll('[id^="favorite-"]');
  
    favoriteIcons.forEach((icon) => {
      const locationId = icon.id.replace('favorite-', '');
      let isLoggedIn = isLoggedIn; // Use the global isLoggedIn variable
  
      // Initialize icon state based on logged in status
      if (!isLoggedIn) {
        // User is not logged in, keep it as regular (empty) heart
        icon.classList.add('far', 'fa-heart');
        icon.classList.remove('fas'); // Ensure it's not solid (filled)
        icon.addEventListener('click', () => {
          alert('Please log in to add to favorites.');
        });
      } else {
        // User is logged in, initialize based on favorites state
        const favorites = JSON.parse(localStorage.getItem('favorites')) || {};
        if (favorites[locationId]) {
          icon.classList.add('fas', 'fa-heart');
        } else {
          icon.classList.add('far', 'fa-heart');
        }
        icon.addEventListener('click', () => toggleFavorite(locationId));
      }
    });
  });
  
  function toggleFavorite(locationId) {
    // If not logged in, prevent toggle and show alert
    if (!isLoggedIn) {
      alert('Please log in to manage favorites.');
      return;
    }
  
    const favoriteIcon = document.getElementById(`favorite-${locationId}`);
    const isFavorite = favoriteIcon.classList.contains('fas');
  
    if (isFavorite) {
      // Remove from favorites
      favoriteIcon.classList.remove('fas');
      favoriteIcon.classList.add('far');
      removeFromFavorites(locationId);
    } else {
      // Add to favorites
      favoriteIcon.classList.remove('far');
      favoriteIcon.classList.add('fas');
      addToFavorites(locationId);
    }
  
    // Update localStorage
    updateLocalStorage(locationId);
  }
  
  function updateLocalStorage(locationId) {
    const favoriteIcon = document.getElementById(`favorite-${locationId}`);
    const isFavorite = favoriteIcon.classList.contains('fas');
    let favorites = JSON.parse(localStorage.getItem('favorites')) || {};
  
    if (isFavorite) {
      favorites[locationId] = true;
    } else {
      delete favorites[locationId];
    }
  
    console.log('Updating localStorage:', favorites);
    localStorage.setItem('favorites', JSON.stringify(favorites));
  }
  
  function addToFavorites(locationId) {
    // Implement add to favorites logic (e.g., AJAX request, etc.)
    console.log(`Adding location ${locationId} to favorites.`);
  }
  
  function removeFromFavorites(locationId) {
    // Implement remove from favorites logic (e.g., AJAX request, etc.)
    console.log(`Removing location ${locationId} from favorites.`);
  }
  
  // Add event listener to persist favorites to localStorage on page unload
  window.addEventListener('beforeunload', () => {
    console.log('Before unload event triggered!');
    const favorites = JSON.parse(localStorage.getItem('favorites')) || {};
    localStorage.setItem('favorites', JSON.stringify(favorites));
  });

  <script>
    // Initialize favorites object from localStorage
let favorites = JSON.parse(localStorage.getItem('favorites')) || {};

// Function to toggle favorite status
function toggleFavorite(locationId) {
  if (!isLoggedIn) {
    alert("You must be logged in to mark a location as a favorite.");
    return;
  }

  const favoriteIcon = document.getElementById(`favorite-${locationId}`);
  const isFavorite = favoriteIcon.classList.contains('fas');

  if (isFavorite) {
    delete favorites[locationId];
  } else {
    favorites[locationId] = true;
  }

  // Update localStorage with the new favorites object
  localStorage.setItem('favorites', JSON.stringify(favorites));

  // Toggle the favorite icon class
  favoriteIcon.classList.toggle('fas');
}

// Function to initialize favorite icons on page load
function initFavorites() {
  if (isLoggedIn) {
    for (const locationId in favorites) {
      const favoriteIcon = document.getElementById(`favorite-${locationId}`);
      if (favoriteIcon) {
        favoriteIcon.classList.add('fas');
      }
    }
  } else {
    for (const locationId in favorites) {
      const favoriteIcon = document.getElementById(`favorite-${locationId}`);
      if (favoriteIcon) {
        favoriteIcon.classList.remove('fas');
      }
    }
  }
}

// Function to reset favorite icons when user signs out
function resetFavorites() {
  for (const locationId in favorites) {
    const favoriteIcon = document.getElementById(`favorite-${locationId}`);
    if (favoriteIcon) {
      favoriteIcon.classList.remove('fas');
    }
  }
  localStorage.removeItem('favorites');
}

// Initialize favorite icons on page load
initFavorites();

// Reset favorite icons when user signs out
<?php if (!isset($_SESSION['loggedIn']) ||!$_SESSION['loggedIn']) :?>
  resetFavorites();
<?php endif;?>
</script>

<script>
// When user logs out
function logout() {
  // Send AJAX request to store favorite state on server
  $.ajax({
    type: 'POST',
    url: 'store-favorites.php',
    data: { favorites: JSON.stringify(favorites) },
    success: function() {
      // Log out user
      window.location.href = 'logout.php';
    }
  });
}

// When user logs in
function login() {
  // Send AJAX request to retrieve favorite state from server
  $.ajax({
    type: 'POST',
    url: 'get-favorites.php',
    success: function(data) {
      // Update favorite icons based on retrieved favorite state
      favorites = JSON.parse(data);
      initFavorites();
    }
  });
}




</script>