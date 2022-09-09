<!DOCTYPE html>
<html>
    <head>
        <title>Janakans Website</title>
        <link rel="stylesheet" type="text/css" href="CSS/kontakt.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta name="viewport" content0="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div class="dropdown">
            <nav>
                <img class="logo" src="img/logo.png" >
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a>Uber mich <i class="far fa fa-caret-down"></i></a>
                    <ul>
                        <li><a href="ubermich.html">Uber mich</a></li>
                        <li><a href="heimatland.html">Heimatland</a></li>
                        <li><a href="hobbiys.html">Hobbiys</a></li>  
                    </ul>
                    </li>
                    <li><a href="spiele.html">Spiele</a></li>
                    <li><a>Impressum <i class="far fa fa-caret-down"></i></a>
                    <ul>
                        <li><a href="impressum.html">Impressum</a></li>
                        <li><a href="kontakt1.php">Kontakt</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
        </div>
        <div class="formular">
        <div class="foto"><img class="img" src="img/ich.jpg" width="270px"></div>
        
        <h2>Janakan Selvathas<h2>
        <br><p> Für Kontakt füllen Sie den Formular aus oder schauen sie beim Impressum nach.<p>
        
        <?php
            if(isset($_POST{"submit"})){
                mail("janakanlol@hotmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Geschlecht: '.$_POST["geschlecht"].' Nachricht: '.$_POST["message"]);
                ?>
                <h1> style="color: blue;"> Das Kontaktformular wurde abgesendet!</h1>
                <?php
            }
           ?>
           <h2> Kontaktformular<h2>
           <forum action="kontakt1.php" method="post">
               <input type="text" name="name" placeholder="Name" required><br>
               <input type="text" name="emal" placeholder="E-Mail" required><br>
               <select name="geschlecht">
                   <option value="männlich">Männlich</option>
                   <option value="weiblich">Weiblich</option>
        </select><br>
        <textarea name="message" rows="8" cols="80" required></textarea><br>
        <button type="submit" name="submit">Absenden</button>
        </form>
    </div>
        <footer id="footer">
            <div class="footer-social">
                <ul>
                    <li><a href="https://www.instagram.com/x1solo/?hl=de" target="blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="img/snap.jpg" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="lebenslauf.pdf">Lebenslauf</a></li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="kontakt1.php">Kontakt</a></li>
                </ul>
            </div>
            <div class="footer-unten">
                <p>Made by: Janakan Selvathas</p>
            </div>
        </footer>
    </body>
</html>