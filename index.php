<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirePhpCon</title>
</head>
<body>
    <input type="button"  value="Click ME!!" id="toggle">
    
    
<!-- Firebase Scripts -->
    
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
    
    
    
<!--you will not get this js url from firebase cdn-->
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>
    
    
    
    

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    Pleas copy relevent codes from the firebase project settings>>Firebase SDK snippet>>CDN
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
    
<!-- EOF Firebase Scripts -->
    
<!-- My Firebase Controlling Script -->
<script src="./func.js"></script> 
<!-- EOF My Firebase Controlling Script -->  
    
</body>
</html>



