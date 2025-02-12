<!DOCTYPE html>
   <html>
   <head>
   <title>Pop-up Example</title>
   <style>
   /* CSS for the pop-up */
   #popup {
   position: fixed; /* Stay in place */
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%); /* Center the pop-up */
   background-color: white;
   padding: 20px;
   border: 1px solid #ccc;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
   z-index: 1000; /* Ensure it's on top */
   display: none; /* Hidden by default */
   }

   #popup .close-button {
   position: absolute;
   top: 10px;
   right: 10px;
   cursor: pointer;
   }
   </style>
   </head>
   <body>

   <div id="popup">
   <span class="close-button" onclick="tutupPopup()">X</span>
   <h2>Welcome!</h2>
   <p>This is a pop-up ad.</p>
   <img src="your-image.jpg" alt="Ad Image">
   </div>

   <script>
   // JavaScript to show the pop-up

   // Function to set a cookie
   function setCookie(name, value, days) {
     var expires = "";
     if (days) {
       var date = new Date();
       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
       expires = "; expires=" + date.toUTCString();
     }
     document.cookie = name + "=" + (value || "")  + expires + "; path=/";
   }

   // Function to get a cookie
   function getCookie(name) {
     var nameEQ = name + "=";
     var ca = document.cookie.split(';');
     for(var i = 0; i < ca.length; i++) {
       var c = ca[i];
       while (c.charAt(0) == ' ') c = c.substring(1, c.length);
       if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
     }
     return null;
   }

   function showPopup() {
   var popup = document.getElementById("popup");
   popup.style.display = "block";
   }

   function tutupPopup() {
   var popup = document.getElementById("popup");
   popup.style.display = "none";
   // Set a cookie so the popup doesn't show again for a set time
   setCookie('popupShown', 'true', 1); // Show popup once per day
   }

   // Check if the cookie exists. If not, show the popup
   window.onload = function() {
   if (!getCookie('popupShown')) {
   showPopup();
   }
   };
   </script>

   </body>
   </html>
