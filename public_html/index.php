
<html>
<meta name="viewport" content="width=device-width,maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<title>NBA WebSite</title>
<link rel="icon" type="image/png" href="../NBALogos/OrangeBallIcon.png" sizes="16x16">
<script src="angular.min.js"></script>
<script src="angular-route.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/MainApp.css" />



<body ng-app="myApp">


      <div ng-init="MainStyle={'background-color' : 'white'}">
    <table id="TeamsIcons">
  
  <tr>
       <td><P class='' style="font-size:13px; color: hsla(0, 0%, 0%, 0.98); font-family: arial,sans-serif;">CHOOSE TEAM</P></td>
                    <td><a class='aLogoTeam' href="#/!"  style="font-size:13px; color: hsla(0, 0%, 0%, 0.98); font-family: arial,sans-serif;" ng-click="styleSixers=null;styleBulls=null;styleHawks=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/NBAMainTableLogo2.png"  height="35" width="35"></img>MAIN</a></td>
                <td><a class='aLogoTeam' href="#!Bulls" ng-style="styleBulls" ng-click="styleBulls=MainStyle;styleSixers=null;styleHawks=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/BullsMainTableLogo.png"  height="46.5" width="53"></img></a></td>

                   <td><a class='aLogoTeam' href="#!Grizzlies" ng-style="styleGrizzlies" ng-click="styleGrizzlies=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/GrizzliesMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      
  </tr>
  <tr>
       <td><a class='aLogoTeam' href="#!Sixers" ng-style="styleSixers" ng-click="styleSixers=MainStyle;styleHawks=null;styleBulls=null;styleCavs=null;styleHornets=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/SixersMainTableLogo.png"  height="46.5" width="53"></img></a></td>

      <td><a class='aLogoTeam' href="#!Hornets" ng-style="styleHornets" ng-click="styleHornets=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;" ><img src = "../TeamMainLogoTable/HornetsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Cavs" ng-style="styleCavs" ng-click="styleCavs=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/CavsMainTableLogo2.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Mavs" ng-style="styleMavs" ng-click="styleMavs=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/MavsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
  </tr>
  <tr>
      <td><a class='aLogoTeam' href="#!Nuggets" ng-style="styleNuggets" ng-click="styleNuggets=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;stylePistons=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/NuggetsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
            <td><a class='aLogoTeam' href="#!Timberwolves" ng-style="styleTimberwolves" ng-click="styleTimberwolves=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleHeat=null;"><img src = "../TeamMainLogoTable/TimberWolvesMainTableLogo2.png"  height="50" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Rockets" ng-style="styleRockets" ng-click="styleRockets=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;" ><img src = "../TeamMainLogoTable/RocketsMainTableLogo2.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Pacers" ng-style="stylePacers" ng-click="stylePacers=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/PacersMainTableLogo.png"  height="46.5" width="53"></img></a></td>
  </tr>
  <tr>
  <td><a class='aLogoTeam' href="#!Knicks" ng-style="styleKnicks" ng-click="styleKnicks=MainStyle;styleSixers=null;styleHawks=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleBulls=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/KnicksMainTableLogo.png"  height="50" width="53"></img></a></td>

      <td><a class='aLogoTeam' href="#!Lakers" ng-style="styleLakers"ng-click="styleLakers=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;" ><img src = "../TeamMainLogoTable/LakersMainTableLogo.png"  height="46.5" width="53"></img></a></td>
         <td><a class='aLogoTeam' href="#!Clippers" ng-style="styleClippers" ng-click="styleClippers=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/ClippersMainTableLogo2.png"  height="46.5" width="53"></img></a></td>

      <td><a class='aLogoTeam' href="#!Heat" ng-style="styleHeat"ng-click="styleHeat=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;" ><img src = "../TeamMainLogoTable/HeatMainTableLogo2.png"  height="46.5" width="53"></img></a></td>
  </tr>

  <tr>
            <td><a class='aLogoTeam' href="#!Nets" ng-style="styleNets" ng-click="styleNets=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleTimberwolves=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/NetsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Pistons" ng-style="stylePistons" ng-click="stylePistons=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/PistonsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Pelicans" ng-style="stylePelicans" ng-click="stylePelicans=MainStyle;styleKnicks=null;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;"><img src = "../TeamMainLogoTable/PelicansMainTableLogo.png"  height="46.5" width="53"></img></a></td>
        <td><a class='aLogoTeam' href="#!Hawks"  ng-style="styleHawks" ng-click="styleHawks=MainStyle;styleSixers=null;styleBulls=null;styleCavs=null;styleHornets=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleHeat=null;styleBucks=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;"><img src = "../TeamMainLogoTable/HawksMainTableLogo.png"  height="46.5" width="53"></img></a></td>
  </tr>

  <tr>
      <td><a class='aLogoTeam' href="#!Thunder" ng-style="styleThunder" ng-click="styleThunder=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/ThunderMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Magic" ng-style="styleMagic" ng-click="styleMagic=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/MagicMainTableLogo.png"  height="46.5" width="53"></img></a></td>
         <td><a class='aLogoTeam' href="#!Warriors" ng-style="styleWarriors"  ng-click="styleWarriors=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/WarriorsMainTableLogo.png"  height="45" width="50"></img></a></td>
      <td><a class='aLogoTeam' href="#!Suns"  ng-style="styleSuns" ng-click="styleSuns=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;" ><img src = "../TeamMainLogoTable/SunsMainTableLogo2.png"  height="46.5" width="53"></img></a></td>
  </tr>
  <tr>
      <td><a class='aLogoTeam' href="#!Blazers" ng-style="styleBlazers" ng-click="styleBlazers=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/BlazersMainTableLogo2.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Kings" ng-style="styleKings" ng-click="styleKings=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/KingsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Spurs" ng-style="styleSpurs"ng-click="styleSpurs=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/SpursMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Raptors" ng-style="styleRaptors" ng-click="styleRaptors=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleHeat=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/RaptorsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
  </tr>
  <tr>
      <td><a class='aLogoTeam' href="#!Jazz" ng-style="styleJazz" ng-click="styleJazz=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleWizards=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleKnicks=null;" ><img src = "../TeamMainLogoTable/JazzMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Wizards" ng-style="styleWizards" ng-click="styleWizards=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleCeltics=null;styleNets=null;styleTimberwolves=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/WizardsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Celtics" ng-style="styleCeltics" ng-click="styleCeltics=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleBucks=null;stylePelicans=null;styleMagic=null;styleThunder=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleNets=null;styleTimberwolves=null;styleKnicks=null;"><img src = "../TeamMainLogoTable/CelticsMainTableLogo.png"  height="46.5" width="53"></img></a></td>
      <td><a class='aLogoTeam' href="#!Bucks" ng-style="styleBucks" ng-click="styleBucks=MainStyle;styleHawks=null;styleSixers=null;styleBulls=null;styleHornets=null;styleCavs=null;styleMavs=null;styleNuggets=null;stylePistons=null;styleRockets=null;stylePacers=null;styleClippers=null;styleLakers=null;styleGrizzlies=null;styleTimberwolves=null;stylePelicans=null;styleKnicks=null;styleThunder=null;styleMagic=null;styleWarriors=null;styleSuns=null;styleBlazers=null;styleKings=null;styleSpurs=null;styleRaptors=null;styleJazz=null;styleWizards=null;styleCeltics=null;styleNets=null;styleHeat=null;"><img src = "../TeamMainLogoTable/BucksMainTableLogo.png"  height="50" width="53"></img></a></td>
    
  </tr>
</table>


      </div>
    

<div ng-view></div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "../HTML/Main.html",
      
    })
      $routeProvider
    .when("/Blazers", {
        templateUrl : "../HTML/Blazers.html",
        controller : "BlazersCtrl"
    });
       $routeProvider
    .when("/Bucks", {
        templateUrl : "../HTML/Bucks.html",
        controller : "BucksCtrl"
    });
        $routeProvider
    .when("/Bulls", {
        templateUrl : "../HTML/Bulls.html",
        controller : "BullsCtrl"
    });
        $routeProvider
    .when("/Cavs", {
        templateUrl : "../HTML/Cavs.html",
        controller : "CavsCtrl"
    });
       $routeProvider
    .when("/Celtics", {
        templateUrl : "../HTML/Celtics.html",
        controller : "CelticsCtrl"
    })
       $routeProvider
    .when("/Clippers", {
        templateUrl : "../HTML/Clippers.html",
        controller : "ClippersCtrl"
    })
        $routeProvider
    .when("/Grizzlies", {
        templateUrl : "../HTML/Grizzlies.html",
        controller : "GrizzliesCtrl"
    })
    
     $routeProvider
    .when("/Hawks", {
        templateUrl : "../HTML/Hawks.html",
        controller : "HawksCtrl"
    })
    $routeProvider
    .when("/Heat", {
        templateUrl : "../HTML/Heat.html",
        controller : "HeatCtrl"
    })
    $routeProvider
    .when("/Hornets", {
        templateUrl : "../HTML/Hornets.html",
        controller : "HornetsCtrl"
    });
      $routeProvider
    .when("/Jazz", {
        templateUrl : "../HTML/Jazz.html",
        controller : "JazzCtrl"
    });
      $routeProvider
    .when("/Kings", {
        templateUrl : "../HTML/Kings.html",
        controller : "KingsCtrl"
    });
        $routeProvider
    .when("/Knicks", {
        templateUrl : "../HTML/Knicks.html",
        controller : "KnicksCtrl"
    });
     $routeProvider
    .when("/Lakers", {
        templateUrl : "../HTML/Lakers.html",
        controller : "LakersCtrl"
    });
       $routeProvider
    .when("/Magic", {
        templateUrl : "../HTML/Magic.html",
        controller : "MagicCtrl"
    });
        $routeProvider
    .when("/Mavs", {
        templateUrl : "../HTML/Mavs.html",
        controller : "MavsCtrl"
    });
         $routeProvider
    .when("/Nets", {
        templateUrl : "../HTML/Nets.html",
        controller : "NetsCtrl"
    });
         $routeProvider
    .when("/Nuggets", {
        templateUrl : "../HTML/Nuggets.html",
        controller : "NuggetsCtrl"
    });
        $routeProvider
    .when("/Pacers", {
        templateUrl : "../HTML/Pacers.html",
        controller : "PacersCtrl"
    });
          $routeProvider
    .when("/Pelicans", {
        templateUrl : "../HTML/Pelicans.html",
        controller : "PelicansCtrl"
    });
          $routeProvider
    .when("/Pistons", {
        templateUrl : "../HTML/Pistons.html",
        controller : "PistonsCtrl"
    });
          $routeProvider
    .when("/Raptors", {
        templateUrl : "../HTML/Raptors.html",
        controller : "RaptorsCtrl"
    });
             $routeProvider
    .when("/Rockets", {
        templateUrl : "../HTML/Rockets.html",
        controller : "RocketsCtrl"
    });
     $routeProvider
    .when("/Sixers", {
        templateUrl : "../HTML/Sixers.html",
        controller : "SixersCtrl"
    });
       $routeProvider
    .when("/Spurs", {
        templateUrl : "../HTML/Spurs.html",
        controller : "SpursCtrl"
    });
        $routeProvider
    .when("/Suns", {
        templateUrl : "../HTML/Suns.html",
        controller : "SunsCtrl"
    });
         $routeProvider
    .when("/Thunder", {
        templateUrl : "../HTML/Thunder.html",
        controller : "ThunderCtrl"
    });
          $routeProvider
    .when("/Timberwolves", {
        templateUrl : "../HTML/Timberwolves.html",
        controller : "TimberwolvesCtrl"
    });
     $routeProvider
     .when("/Warriors", {
        templateUrl : "../HTML/Warriors.html",
        controller : "WarriorsCtrl"
    });
       $routeProvider
     .when("/Wizards", {
        templateUrl : "../HTML/Wizards.html",
        controller : "WizardsCtrl"
    });
     $routeProvider
     .when("/t", {
        templateUrl : "../HTML/t.html",
        controller : "tCtrl"
    });
});
//POR
//1.BlazersTeamApp
app.controller("BlazersCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
        
	        this.setTab = function(newValue){
			this.BlazersContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.BlazersContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/BlazersTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.BlazersTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/BlazersTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.BlazersNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/BlazersTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.BlazersPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/BlazersTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                else  if(name=="Al-Farouq Aminu"){
                    
                    var name="Al_Farouq_Aminu";
                }
            
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        
			
			
}]);
//MIL
//2.BucksTeamApp
app.controller("BucksCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	       this.setTab = function(newValue){
			this.BucksContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.BucksContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/BucksTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.BucksTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/BucksTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.BucksNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/BucksTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.BucksPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/BucksTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}

			
			
}]);
//CHI
//3.BullTeamsApp
app.controller("BullsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	       this.setTab = function(newValue){
			this.BullsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.BullsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/BullsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.BullsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/BullsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.BullsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/BullsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.BullsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/BullsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}

        
		
			
			
}]);
//CLE
//4.CavsTeamsApp
app.controller("CavsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	       this.setTab = function(newValue){
			this.CavsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.CavsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/CavsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.CavsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/CavsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.CavsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/CavsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.CavsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/CavsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
			
			
}]);
//BOS
//5.CelticsTeamApp
app.controller("CelticsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	      this.setTab = function(newValue){
			this.CelticsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.CelticsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/CelticsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.CelticsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/CelticsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.CelticsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/CelticsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.CelticsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/CelticsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
			
			
}]);
//LAC
//6.ClippersTeamApp
app.controller("ClippersCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	      this.setTab = function(newValue){
			this.ClippersContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.ClippersContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
   
    url: '/index.php/rest/ClippersTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.ClippersTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/ClippersTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.ClippersNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/ClippersTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.ClippersPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/ClippersTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
			
			
}]);
//MEM
//7.GrizzliesTeamApp
app.controller("GrizzliesCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	      this.setTab = function(newValue){
			this.GrizzliesContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.GrizzliesContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
  
    url: '/index.php/rest/GrizzliesTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.GrizzliesTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/GrizzliesTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.GrizzliesNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/GrizzliesTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.GrizzliesPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/GrizzliesTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
			
			
}]);
//ATL
//8.HawksTeamApp
app.controller("HawksCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.HawksContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.HawksContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/HawksTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.HawksTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/HawksTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.HawksNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/HawksTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.HawksPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/HawksTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
			
}]);
//MIA
//9.HeatTeamApp
app.controller("HeatCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.HeatContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.HeatContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/HeatTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.HeatTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/HeatTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.HeatNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/HeatTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.HeatPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/HeatTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}	
			
}]);
//CHA
//10.HornetsTeamApp
app.controller("HornetsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.HornetsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.HornetsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/HornetsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.HornetsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/HornetsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.HornetsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/HornetsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.HornetsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/HornetsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);
//UTA
//11.JazzTeamApp
app.controller("JazzCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.JazzContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.JazzContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
   
    url: '/index.php/rest/JazzTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.JazzTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/JazzTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.JazzNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/JazzTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.JazzPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/JazzTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);
//SAC
//12.kingsTeamApp
app.controller("KingsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.KingsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.KingsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/KingsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.KingsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/KingsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.KingsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/KingsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.KingsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/KingsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                // if(name==''){
                    
                //     var name='';
                // }
                //   if(name=="Royce O'Neale"){
                    
                //     var name="Royce_ONeale ";
                // }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                //   if(name==""){
                    
                //     var name='';
                // }
                else  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);

//NYK
//13.KnicksTeamApp
app.controller("KnicksCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.KnicksContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.KnicksContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/KnicksTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.KnicksTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/KnicksTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.KnicksNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/KnicksTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.KnicksPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/KnicksTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
			
}]);
//LAL
//14.LakersTeamApp
app.controller("LakersCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.LakersContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.LakersContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/LakersTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.LakersTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/LakersTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.LakersNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/LakersTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.LakersPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/LakersTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);
//ORL
//15.MagicTeamApp
app.controller("MagicCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.MagicContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.MagicContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/MagicTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.MagicTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/MagicTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.MagicNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/MagicTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.MagicPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/MagicTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}	
			
}]);

//DAL
//16.MavsTeamApp
app.controller("MavsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.MavsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.MavsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/MavsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.MavsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/MavsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.MavsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/MavsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.MavsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/MavsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}	
			
}]);
//BRK
//17.NetsTeamApp
app.controller("NetsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.NetsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.NetsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/NetsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.BullsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/NetsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.NetsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/NetsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.NetsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/NetsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}    	
			
}]);

//DEN
//18.NuggetsTeamApp
app.controller("NuggetsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.NuggetsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.NuggetsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/NuggetsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.NuggetsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/NuggetsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.NuggetsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/NuggetsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.NuggetsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/NuggetsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}	
			
}]);
//IND
//19.PacersTeamApp
app.controller("PacersCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.PacersContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.PacersContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/PacersTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.PacersTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/PacersTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.PacersNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/PacersTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.PacersPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/BullsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);
//NOP
//20.PelicansTeamApp
app.controller("PelicansCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.PelicansContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.PelicansContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/PelicansTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.PelicansTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/PelicansTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.PelicansNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/PelicansTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.PelicansPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/PelicansTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);
//DET
//21.PistonsTeamApp
app.controller("PistonsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.PistonsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.PistonsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/PistonsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.PistonsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/PistonsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.PistonsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/PistonsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.PistonsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/PistonsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);

//TOR
//22.RaptorsTeamApp
app.controller("RaptorsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.RaptorsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.RaptorsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/RaptorsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.RaptorsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/RaptorsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.RaptorsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/RaptorsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.RaptorsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/RaptorsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);

//HOU
//23.RocketsTeamApp
app.controller("RocketsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.RocketsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.RocketsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/RocketsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.RocketsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/RocketsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.RocketsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/RocketsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.RocketsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/RocketsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);

//PHI
//24.SixersTeamApp
app.controller("SixersCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.SixersContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.SixersContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    
    url: '/index.php/rest/SixersTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.SixersTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/SixersTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.SixersNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/SixersTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.SixersPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/SixersTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        
			
}]);
//SAS
//25.SpursTeamApp
app.controller("SpursCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.SpursContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.SpursContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                //  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/SpursTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.SpursTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/SpursTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.SpursNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/SpursTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.SpursPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/SpursTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}

        	
			
}]);


//PHO
//26.SunsTeamApp
app.controller("SunsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.SunsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.SunsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
   
    url: '/index.php/rest/SunsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.SunsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/SunsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.SunsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/SunsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.SunsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/SunsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);


//OKC
//27.ThunderTeamApp
app.controller("ThunderCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.ThunderContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.ThunderContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    
    url: '/index.php/rest/ThunderTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.ThunderTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/ThunderTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.ThunderNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/ThunderTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.ThunderPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/ThunderTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);



//MIN
//28.TimberwolvesTeamApp
app.controller("TimberwolvesCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.TimberwolvesContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.TimberwolvesContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/TimberwolvesTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.TimberwolvesTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/TimberwolvesTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.TimberwolvesNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/TimberwolvesTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.TimberwolvesPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/TimberwolvesTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
        	
			
}]);





//GSW
//29.WarriorsTeamApp
app.controller("WarriorsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
        this.setTab = function(newValue){
			this.WarriorsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.WarriorsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/WarriorsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.WarriorsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/WarriorsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.WarriorsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/WarriorsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.WarriorsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/WarriorsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}
    

}]);
//WAS
//30.WizardsTeamApp
app.controller("WizardsCtrl", ['$http', '$scope','$window','$filter',function($http, $scope,$window,$filter){
	     this.setTab = function(newValue){
			this.WizardsContrl = newValue;
		};

		this.isSet = function(tabName){
			return this.WizardsContrl === tabName;
		};
//                this is for the automatic show of team data(is set on 1)
                this.setTab(1)
		this.isSet(1)
                //                this is for the style team data
                $scope.styleTeamData ={
                     "background-color" : "white"
                }
                
//  Get Team Data AUTOMATIC WHEN PAGE LOAD!
$http({
    method: 'get', 
    // url: '/NBAWebSite/API/LakersAPI.php/rest/TeamData'
    url: '/index.php/rest/WizardsTeamData'
}).then(function (response) {
    
    		$scope.TeamData = response.data;
    		
        
    
    
},function (error){
    console.log(error, 'can not get data.');
    
});
                //  Get Team Data
 this.WizardsTeamData=function(){
     
			this.setTab(2)
			this.isSet(2)

$http({
    method: 'get', 
     url: '/index.php/rest/WizardsTeamData'
}).then(function (response) {
   

    
    
},function (error){
    console.log(error, 'can not get data.');
});
 }
        //  Get Team NewRoster
        this.WizardsNewRoster=function(){



                        this.setTab(3)
			this.isSet(3)
            
      $http({
    method: 'get', 
    url: '/index.php/rest/WizardsTeamNewRoster'
}).then(function (response) {
   
    		$scope.NewTeamRoster = response.data;
                
  //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "PLAYER";
//                $scope.reverseSort = true;
                 for(i=0;i<$scope.NewTeamRoster.length;++i){

                     if($scope.NewTeamRoster[i].BirthDate.includes(",")){
            var BirthDate = $scope.NewTeamRoster[i].BirthDate;
             var BirthDateModify = Date.parse(BirthDate);
                         ;
//            var BirthYear= BirthDate[1]; 
////      new Date().getFullYear()  ;
//            var year = currentTime.getFullYear();
//            
//                        console.log(year);
            
//            var Age=Year-BirthYear;
            $scope.NewTeamRoster[i].BirthDate=BirthDateModify;

            
             }
//             HeightModifyToCM
                 if($scope.NewTeamRoster[i].HEIGHT.includes("-")){
            var Height = $scope.NewTeamRoster[i].HEIGHT.split("-");
            var feet= parseInt(Height[0]); 
            var inches=parseInt( Height[1]); 
            var HeightModifyToCM = (feet * 12) + inches;
           var HeightModifyToCMModify= Math.round(HeightModifyToCM / 0.393701);
            $scope.NewTeamRoster[i].HEIGHT=HeightModifyToCMModify;

//            console.log(HeightModifyToCMModify);
            
             }
              //          WEIGHTModifyTokg 
                 if(!!$scope.NewTeamRoster[i].WEIGHT){
                     var pounds=$scope.NewTeamRoster[i].WEIGHT;
                     var kilograms =Math.round(pounds * 0.454);
                   $scope.NewTeamRoster[i].WEIGHT =kilograms;

            
             }

            }
            
            
            
              //  start from the lowest IN EACH COLM
           $scope.sortDataPLAYER= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
            $scope.sortDataPosition= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataHeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
              $scope.sortDataWeight= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
             $scope.sortDataBirthDate= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the HIGHEST IN EACH COLM
                $scope.sortDataEXPERIENCE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
           }
             //  start from the lowest IN EACH COLM
                $scope.sortDataCOLLEGE= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
   
//               $scope.sortData = function (column) {

//                $scope.reverseSort = ($scope.sortColumn == column) ?
//                    !$scope.reverseSort : true;
//                    
//                $scope.sortColumn = column;
//                
//            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
    
    
},function (error){
    console.log(error, 'can not get data.');
});
        }
        
               // Get Team PayRoll
                this.WizardsPayRoll=function(){
                        this.setTab(4)
			this.isSet(4)
                        
                        
                        
      $http({
    method: 'get', 

url: '/index.php/rest/WizardsTeamPayRoll'
}).then(function (response) {
   
    		$scope.TeamPayRoll = response.data;
                $scope.TeamPayRollWithNoCareer=$scope.TeamPayRoll.pop();
// 
                 
                
                
                
              for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].EightNine.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].EightNine.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].EightNine='0.00'
                var res= $scope.TeamPayRoll[i].EightNine;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].EightNine=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].NineTwenty.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].NineTwenty.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].NineTwenty='0.00'
                var res= $scope.TeamPayRoll[i].NineTwenty;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].NineTwenty=a;

            
           
            }
        }
          for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwentyOne.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwentyOne.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwentyOne='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwentyOne;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwentyOne=a;

            
           
            }
        }
         for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyOneTwentyTwo.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyOneTwentyTwo.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyOneTwentyTwo='0.00'
                var res= $scope.TeamPayRoll[i].TwentyOneTwentyTwo;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyOneTwentyTwo=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyTwoTwentyThree.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyTwoTwentyThree.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyTwoTwentyThree='0.00'
                var res= $scope.TeamPayRoll[i].TwentyTwoTwentyThree;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyTwoTwentyThree=a;

            
           
            }
        }
            for(i=0;i<$scope.TeamPayRoll.length;++i){

             if($scope.TeamPayRoll[i].TwentyThreeTwentyFour.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].TwentyThreeTwentyFour.split(',');
            var EightNine= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = EightNine.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;
            
        
        
              

            }
            else{
                $scope.TeamPayRoll[i].TwentyThreeTwentyFour='0.00'
                var res= $scope.TeamPayRoll[i].TwentyThreeTwentyFour;
                var a = parseInt(res);
            $scope.TeamPayRoll[i].TwentyThreeTwentyFour=a;

            
           
            }
        }
             for(i=0;i<$scope.TeamPayRoll.length;++i){
              
           if($scope.TeamPayRoll[i].Guaranteed.includes(",")){
            var NameModifyWithDot = $scope.TeamPayRoll[i].Guaranteed.split(',');
            var Guaranteed= NameModifyWithDot[0]+NameModifyWithDot[1]+NameModifyWithDot[2]; 
            var res = Guaranteed.slice(1);
            var a = parseInt(res);
            $scope.TeamPayRoll[i].Guaranteed=a;
            
        
        
              

            }
            else{
                                $scope.TeamPayRoll[i].Guaranteed='0.00'
                var resa= $scope.TeamPayRoll[i].Guaranteed;
                var ab = parseInt(resa);
            $scope.TeamPayRoll[i].Guaranteed=ab;
            }
             }



                 //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "Player";
//                $scope.reverseSort = true;
//                
           //  start from the lowest IN EACH COLM
                     $scope.sortDataPlayer= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
            //  start from the lowest IN EACH COLM
           
        $scope.sortDataSignedUsing= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             //  start from the HIGHEST IN EACH COLM
               $scope.sortData = function (column) {
           
                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }


            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }
              

    
    
},function (error){
    console.log(error, 'can not get data.');
});
                }
        // Get All players stats
    this.getPlayerStats=function(PLAYER){
//        show=1,show each player stats table
			$scope.show=1;
    //        player name to playerAPI
                console.log('Player Name: '+PLAYER);
                var name=PLAYER;
                
                if(name==''){
                    
                    var name='';
                }
                  if(name=="Royce O'Neale"){
                    
                    var name="Royce_ONeale ";
                }
                  if(name=="De'Aaron Fox"){
                    
                    var name='DeAaron_Fox';
                }
                  if(name==""){
                    
                    var name='';
                }
                  if(name=="Tim Hardaway Jr."){
                    
                    var name='Tim_Hardaway_Jr';
                }
                
    else if(name.includes(".")){
            var NameModifyWithDot = name.split('.');
            var NameModifyWithDotNoSpace = name.split(' ');

            var name= NameModifyWithDot[0]+"_"+NameModifyWithDot[1]+"_"+NameModifyWithDotNoSpace[1]; 
            console.log('Player Name Modify: '+name);
        }
         //        player name to playerAPI with no "'" and added "_"
          else if(name.includes("'")){
             var NameModifyWithHighComa = name.split("'");
             var NameModifyWithHighComaNoSpace = name.split(' ');
             var name= NameModifyWithHighComa[0]+"_"+NameModifyWithHighComaNoSpace[1];
             console.log('Player Name Modify: '+name);
             
         }
          //        player name to playerAPI with no "-" and added "_"
        else if(name.includes("-")){
             var NameModifyWithLine = name.split("-");
             var NameModifyWithLineAndSpace=NameModifyWithLine[0].split(" ");

             var name= NameModifyWithLineAndSpace[0]+"_"+NameModifyWithLineAndSpace[1]+"_"+NameModifyWithLine[1];
             console.log('Player Name Modify: '+name);
             
         }
           //        player name to playerAPI with no " " and added "_"(MOST CASESE LIKE stephen_curry)
     else{
    var fields = name.split(' ');
    var name = fields[0]+"_"+fields[1];
    console.log('Player Name Modify: '+name);
       
    }
                
                
                
                
//              player Modal
                var PlayerSeasonStatsModal = document.getElementById('simpleModal');
//              show player modal 
	        PlayerSeasonStatsModal.style.display = 'block';

//		// Get close button
	        var closeBtn = document.getElementsByClassName('closeBtn')[0];
//		// Listen for close click
		closeBtn.addEventListener('click', closeModal);
		// Listen for outside click
		window.addEventListener('click', outsideClick);
                // closeModal function
                 function closeModal(){
			PlayerSeasonStatsModal.style.display = 'none';
		}
		// Function to close modal if outside click
		function outsideClick(e){
			if(e.target == PlayerSeasonStatsModal){
				PlayerSeasonStatsModal.style.display = 'none';
			}
		}	
               

            
$http({
    method: 'get', 
    url: '/index.php/rest/player/'+name
}).then(function (response) {
//              PlayerStats
    		$scope.stats = response.data;
//             display player name(for player number wait for basketball reference to update the tabe).
                $scope.PLAYER = PLAYER;
//             PlayerStats row with no career
                $scope.statsWithNoCareer=$scope.stats.pop();
         
                
                //  GET THE HIGHEST IN EACH COLM
//                $scope.sortColumn = "-Season";
//                $scope.reverseSort = true;
                //  start from the lowest IN EACH COLM
                          $scope.sortDataSeason= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
                 //  start from the HIGHEST IN EACH COLM
                          $scope.sortDataTeam= function (column) {
             $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : false;
                    
                $scope.sortColumn = column;
           }
             
           $scope.sortData = function (column) {

                $scope.reverseSort = ($scope.sortColumn == column) ?
                    !$scope.reverseSort : true;
                    
                $scope.sortColumn = column;
                
            }



            $scope.getSortClass = function (column) {
             
                if ($scope.sortColumn == column) {
                    return $scope.reverseSort
                      ? 'arrow-down'
                      : 'arrow-up';
                }

                return '';
            }

    
},function (response){
    console.log('can not get data.');
});
}	
			
}]);


</script>

</body>
</html>
