<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Document</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <style>
  .r-link{
  display: var(--rLinkDisplay, inline-flex) !important;
}
.r-link[href]{
  color: var(--rLinkColor) !important;
  text-decoration: var(--rLinkTextDecoration, none) !important;
}
.r-list{
  padding-left: var(--rListPaddingLeft, 0) !important;
  margin-top: var(--rListMarginTop, 0) !important;
  margin-bottom: var(--rListMarginBottom, 0) !important;
  list-style: var(--rListListStyle, none) !important;
}
.menu{
  --rLinkColor: var(--menuLinkColor, currentColor);
}

.menu__link{
  display: var(--menuLinkDisplay, block);
}

.menu__link:focus{
  outline: var(--menuLinkOutlineWidth, 2px) solid var(--menuLinkOutlineColor, currentColor);
  outline-offset: var(--menuLinkOutlineOffset);
}

.menu:hover .menu__link:not(:hover){
  --rLinkColor: var(--menuLinkColorUnactive, rgba(22, 22, 22, .35));
}


.menu{
  background-color: var(--menuBackgroundColor, #f0f0f0);
  box-shadow: var(--menuBoxShadow, 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24));
}

.menu__list{
  display: flex;  
}

.menu__link{
  padding: var(--menuLinkPadding, 1.5rem 2.5rem);
  font-weight: 700;
  text-transform: uppercase;
}

.text-underlined{
  position: relative;
  overflow: hidden;

  will-change: color;
  transition: color .25s ease-out;  
}
.text-underlined::before, 
.text-underlined::after{
  content: "";
  width: 0;
  height: 3px;
  background-color: var(--textUnderlinedLineColor, currentColor);

  will-change: width;
  transition: width .1s ease-out;

  position: absolute;
  bottom: 0;
}

.text-underlined::before{
  left: 50%;
  transform: translateX(-50%); 
}

.text-underlined::after{
  right: 50%;
  transform: translateX(50%); 
}

.text-underlined:hover::before, 
.text-underlined:hover::after{
  width: 100%;
  transition-duration: .2s;
}
.text-underlined::before, 
.text-underlined::after{
  content: "";
  width: 0;
  height: 3px;
  background-color: var(--textUnderlinedLineColor, currentColor);

  will-change: width;
  transition: width .1s ease-out;

  position: absolute;
  bottom: 0;
}

.text-underlined::before{
  left: 50%;
  transform: translateX(-50%); 
}

.text-underlined::after{
  right: 50%;
  transform: translateX(50%); 
}

.text-underlined:hover::before, 
.text-underlined:hover::after{
  width: 100%;
  transition-duration: .2s;
}

.page__custom-settings{
  --menuBackgroundColor: #6c5ce7;
  --menuLinkColor: #fff;
  --menuLinkColorUnactive: #241c69;
  --menuLinkOutlineOffset: -.5rem; 
}

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  margin: 0;
  min-height: 100vh;
  display: flex;  
  flex-direction: column;
}

.page{
  box-sizing: border-box;
  max-width: 100%;
  padding-left: .75rem;
  padding-right: .75rem;
  margin: auto;
}

.page__menu:nth-child(n+2){
  margin-top: 3rem;
}
p{
  text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
  background-color:black;
}
    

.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 90px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
  </style>
  </head>
  <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> LIVE SCORE</h3>
    </div>
  </div>
</div> 
<div class="sticky-top">
<div class="page" style='background:silver;'>
<nav class="page__menu menu">
    <ul class="menu__list r-list">
      <li class="menu__group"><a href="home.php" class="menu__link r-link text-underlined">Home</a></li>
      <li class="menu__group"><a href="highlights.php" class="menu__link r-link text-underlined">Highlights</a></li>
      <li class="menu__group"><a href="standing.php" class="menu__link r-link text-underlined">Standings</a></li> 
     <!-- <li class="menu__group"><a href="insert.php" class="menu__link r-link text-underlined">Form</a></li>-->
    </ul>
  </nav>
</div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
  
        
            <style>  
          table.wrapper{ 
        max-height:240px; 
        border:3px blue; 
        display:flex;  
        overflow-x:auto; 
        overflow-y:hidden; 
        font-size:20px; 
        width:100%;   
        border-spacing:30px; 
        padding-top:0px;  
        white-space:nowrap;  
        background-color:white;
        position:sticky;
        top:73px;
      
          }
          wrapper::webkit-scrollbar{  
            width:0;
           
          }
          ab:hover{
            border:15px solid blue;
          } 
            </style>
            <div style="background-color:blue;">
            <p style="background-color:blue;">
          FIXED MATCHES
THESE ARE FOOTBALL MATCHES OUTCOMES THAT HAVE BEEN INFLUENCED BY THE TOP GUYS TO HAPPEN.
FOR EACH OUTCOMES THERE IS A OF 960,000$ PLACED ON THEM.
WE HELP YOU DETECT THEM AND SHOW YOU, TO EITHER AVOID PLAYING AGAINST IT OR NOT
THE CHOICE IS IN YOUR HANDS
          </p></div>
            <hr>
         
      <table class="wrapper" style="background-color:bisque;"> <div class="sticky-top">
        <tr><th> </th><th style="color:black; font-size:30px;">FOOTBALL PREDICTIONS FILTER </th><th></th><th></th><th></th>
      </tr> 
      <tr><td></td><td></td> <td></td> <td></td> <td></td> <td></tr><tr></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr></div>
        </div>
      <?php 
       echo"<div class='sticky-top'>"; 
      $conn = mysqli_connect("localhost","root","","soccer"); 
      $sql = "SELECT `id`, `Gametype`, `Team1`, `Team2`,`Amountplaced` FROM `input data` WHERE 1"; 
      $team2=$conn->query($sql);      
      if($team2-> num_rows > 0){  
        while($row = $team2-> fetch_assoc()){   
          echo" <div class='wrapper';>";  
           
          echo"<div class='ab' style =' display:flex;white-space:no-wrap justify-content:space-between; align-items:center;'>";  echo"<td style='min-height:100px; box-sizing:border-box; padding:30px; padding-top:0px; padding-left:0px; padding-right:60px;padding-bottom:0px;border:3px dotted black;'>"; echo "<b>";echo $row["Gametype"];echo "</b>";echo "<br>";  echo"</div>";
          echo"<div class='ab'style =' display:flex; justify-content:center; align-items:center;'>";  echo $row["Team1"]; echo"&nbsp;";  echo"vs";echo"&nbsp;";   echo $row["Team2"];echo "<br>";echo "AVERAGE AMOUNT STAKED:";echo $row["Amountplaced"]; echo"</td>";  
 echo "</div>";  echo "</div>";   echo "</div>"; 
 
                    }
    }  
    $conn->close(); 
    echo"</div>";?>
    
  </table>
</head> 
<hr> 
<body>
    <iframe src="https://www.scorebat.com/embed/livescore/" frameborder="0" width="600" height="760" allowfullscreen allow='autoplay; fullscreen' style="width:600px;height:760px;overflow:hidden;display:block;" class="_scorebatEmbeddedPlayer_"></iframe><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://www.scorebat.com/embed/embed.js?v=arrv'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'scorebat-jssdk'));</script> 
    </body>  
    </html>