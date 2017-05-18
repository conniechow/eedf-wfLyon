<?php $this->layout('layout-admin',['title'=>'Dashboard']); ?>
<?php $this->start('googleapis') ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="Client ID">





<?php $this->stop('googleapis') ?>

<?php $this->start('main_content') ?>
<h2>Login</h2>
<?php print 'é' ?>
<?php print strlen('é') ?>
<?php print ' ' ?>
<?php print mb_strlen('é') ?>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<br><br>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
<?php $this->stop('main_content') ?>
