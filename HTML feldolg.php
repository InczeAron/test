<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Feldolgozas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        header
            {
            padding: 0.3em; 
            color: white;
            background-color: silver;
            clear: left;
            }
        ul  {
            float:left;
            width:100%; /* A menü az alatta levő szövegtől elválik, birtokolja a teljes vízszintes sávját. */
            padding:0;
            margin:0;
            list-style-type:none;
            }        
        a   {
            float:left;
            width:auto; /* Fix szélességű gombok érhetők el. Érdemes azonban vigyázni ezzel a módszerrel, mert ha a szöveg nem fér ki, a dizájn szétesik. */
            text-decoration:none; /* Ne legyen aláhúzva a link. */
            color:white;
            font-size: 90%;
            background-color:mediumvioletred;
            padding:0.2em 0.3em;
            border-right:0px solid white;
            border-radius: 1px;
            }
    .active {background-color:#C0C0C0;}
    .keret  {border-style: inset;}
    .kozep  {
                margin: auto;
                max-width: 800px;
            }
    
    a:hover { background-color:#C0C0C0} /* Az egérkurzorra színváltással reagál a menüpont. */
    li { display:inline } /* Ez a sor oldja meg, hogy a menüpontok egymás mellé kerüljenek. */
    
    footer{
        border-radius: 10px;
    margin: 10px;
    padding: 5px 20px;
    background-color: #87CEFA;
    }
        /*1 {border-style: dotted}
        h2 {border-style: double}*/
        //p {border-style: inset}
        body {background-image: url('background.jpg')}
        
        </style>
        <link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">
    </head>
    <body>
        <div class="kozep">
            <ul>
                <li><a href="index.html">Bemutatkozás</a></li>
                <li><a href="termekek.html">Szolgáltatások</a></li>
                <li><a href="kapcsolat.html">Elérhetőségek</a></li>
                <li><a href="uzenet.html" class="active">Írj nekünk</a></li>
            </ul><br>
        <header><p class="keret"><b>.:Üdvözöljük a Bikk-Makk Kft. honlapján:.<br></b></p></header>
        <br>
        <img src="images.gif" width="57" height="47" style="float: left" alt="Email gifje" title="Üzenet jött!">
        <br><FONT COLOR="FFFFFF" FACE="Verdana, Arial">
        <span style="padding-left: 1em">Önnek üzenete érkezett a honlapról!</span>
        <?php
        print "<P>\n\n<hr></P>";
        print "Feladó: <b>".$_POST['Felhasznalo']."</b><P><hr>\n\n</P>";
        print "Email cím: <b>".$_POST['Email']."</b><P><hr>\n\n</P>";
        print "Neme: <b>".$_POST['nem']."</b><P><hr>\n\n</P>";
        print "Az üzenet szövege: ".$_POST['szov'];
        ?>
         </FONT>
         <br><br><ul><a href="index.html">Vissza a kezdőlapra</a></ul>
        </div>
    </body>
</html>
