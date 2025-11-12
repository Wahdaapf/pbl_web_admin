
<title>404 Page not found! - <?= APP_NAME ?></title>

<center>
  <h1>404</h1>
  <h2>Page not found!</h2>
  <br>
  <a href="<?=ROOT?>"
    hx-get="<?=ROOT?>/login"
    hx-target="#page_content_container"
    hx-swap="outerHTML"
    hx-push-url="<?=ROOT?>"
    hx-indicator="#loading">Return to Login</a>
</center>