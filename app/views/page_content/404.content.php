
<title>404 Page not found! - <?= APP_NAME ?></title>

<center>
  <h1>404</h1>
  <h2>Page not found!</h2>
  <br>
  <a href="<?=ROOT?>"
    hx-get="<?=ROOT?>/home"
    hx-target="#page_content_container"
    hx-swap="outerHTML"
    hx-push-url="<?=ROOT?>"
    hx-indicator="#loading">Return to Home</a>
</center>