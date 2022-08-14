<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html lang="en"> 
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
  align-items:center;
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
   <header>
   <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> LIVE SCORE</h3>
    </div>
  </div>
</div>
   <div class="page">
<nav class="page__menu menu">
    <ul class="menu__list r-list">
      <li class="menu__group"><a href="home.php" class="menu__link r-link text-underlined">Home</a></li>
      <li class="menu__group"><a href="highlights.php" class="menu__link r-link text-underlined">Highlights</a></li>
      <li class="menu__group"><a href="standing.php" class="menu__link r-link text-underlined">Standings</a></li> 
     <!-- <li class="menu__group"><a href="insert.php" class="menu__link r-link text-underlined">Form</a></li>-->
    </ul>
  </nav>
</div>
    </header>
    <hr>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <div class="container"> 
</div> 
<body>  
<table> 
        <tr> 
 <td style="font-size:20px";> </td>
        </tr>   
        <div class="jumbotron d-flex align-items-center">
  <div class="container">
<?php  
      $conn = mysqli_connect("localhost","root","","links"); 
      $sql = "SELECT `id`, `link` FROM `abcd` WHERE 1";
      $result=$conn->query($sql);      
      if($result-> num_rows > 0){  
        while($row = $result-> fetch_assoc()){     
       echo "<div align='center'>"; echo "<br>"; echo $row["link"];   echo "</div>";                 }
    }  
    $conn->close();  
    ?></table> </div></div>
    </html>