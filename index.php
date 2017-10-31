<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/style.css">
    <title></title>
  </head>
  <body>
    <div class="title">
      <h1>PHPMailer Setup</h1>
    </div>
      <div class='the-form'>
        <form class="" action="info.php" method="post">

           <div class=' inputs name'>  <label for="name">your name</label>
            <input type="text" name="name" placeholder="name" value="">
           </div>

            <div class=' inputs address'><label for="address">email address</label>
            <input id='addressInput' type="text" name="address" placeholder="email address" value="">
           </div>

            <div class='inputs message'><label for="message">Message</label>
            <textarea rows="4" cols="50" type="text" name="body" placeholder="your message" value=""></textarea>
           </div>

            <button type="submit" name="button">submit</button>
          </form>
      </div>
  </body>
</html>
