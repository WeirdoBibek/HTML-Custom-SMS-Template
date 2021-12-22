<?php
require_once('../b-datas.php');
error_reporting(0);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custom SMS</title>
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>


  <section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <h2 class="subtitle">
        
          Would you like to send your friend message? <br>
          If yes then try, but make sure you are on VPN. <br>
          If you think it doesn't work then try on your phone.. 
          <font size="4px"> 
            <i class="em em-joy" aria-role="presentation" aria-label="FACE WITH TEARS OF JOY"></i>
          </font>
       
      </h2>
    </div>
  </div>
</section>
<br>

    <div class="container">
       <div class="field is-grouped is-grouped-centered">
<div class="notification is-info is-light">
Always use https:// :)
</div>
</div>
</div>

  <section class="section">

<?php 


if(isset($_GET['success'])) {

    echo '<div class="container">
          <br>
          <div class="notification is-link"> 
          Successfully Sent ;)
          </div>
          </div>
          <br>';
        }

if(isset($_GET['error'])) {

echo '<div class="container">
          <br>
          <div class="notification is-danger"> 
          Something is missing! <br/
          Please check again.
          </div>
          </div>
          <br>'; 
        }

if(isset($_GET['msgerror'])) {

echo '<div class="container">
          <br>
          <div class="notification is-danger"> 
          OOPS !! Make sure you entered the message.
          </div>
          </div>
          <br>'; 
        }

if(isset($_GET['msgmin'])) {

echo '<div class="container">
          <br>
          <div class="notification is-danger"> 
          message must be minimum 3 characters
          </div>
          </div>
          <br>'; 
        }

if(isset($_GET['msgmax'])) {

echo '<div class="container">
          <br>
          <div class="notification is-danger"> 
          Whoo! Max character 240 exceed.
          </div>
          </div>
          <br>'; 
        }
?>


    <div class="container">
   


   <form method=post action=''>
            <div class="field">
  <label class="label">Phone Number</label>
 <div class="field is-expanded">
      <div class="field has-addons">
        <p class="control">
          <a class="button is-static">
            +977
          </a>
        </p>
        <p class="control is-expanded">
            <input class="input" type="number" name="number" placeholder="98--------" required />
        </p>
      </div>
    </div>
</div>

            <div class="field">
  <label class="label">Message</label>
 <div class="field is-expanded">

        <p class="control is-expanded">
            <input class="input" type="text" name="msg" required />
        </p>
    </div>
</div>





            <div class="field">
            <label class="label">SIM Type : <i> NCELL | NTC | SMART | UTL</i></label> 

            </div>

            <br>
            <div class="field is-grouped is-grouped-centered">
            <div class="control">
                <input type="submit" name="success" value="Submit" class="button is-link">
            </div>
            <div class="control">
                <a href="<?php echo $https; ?>/custom/">
                    <button class="button is-link is-light">Cancel</button>
                </a>    
            </div>
            </div>
        </form>

    </div>
  </section>


<?php require_once("../b-last.php"); ?>

  </body>
</html>