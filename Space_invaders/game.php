<!doctype html>

<html>
	<head>
		<title>Web-vetn.ru</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
 		<meta charset="utf-8">
		<script src="game.js"></script>
		<link rel="stylesheet" href="styles.css">
		<script src="../webcomponentsjs/webcomponents.js"></script>

  		<link rel="import" href="../components/font-roboto/roboto.html">
  		<link rel="import" href="../components/core-header-panel/core-header-panel.html">
  		<link rel="import" href="../components/core-toolbar/core-toolbar.html">
  		<link rel="import" href="../components/paper-tabs/paper-tabs.html">
  		<link rel="import" href="post-list.html">
  		  <style>
  html,body {
    height: 100%;
    margin: 0;
    background-color: white; /*E5E5E5*/
    font-family: 'RobotoDraft', sans-serif;
  }
  body {
    text-align: center
  }
  core-header-panel {
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch; 
  }
  core-toolbar {
    background: #000; /*03a9f4*/
    color: white;
  }
  #tabs {
    width: 100%;
    margin: 0px auto;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	  text-transform: uppercase;
  }
  .container {
    width: 80%;
  }

  a {
    text-decoration: none;
  }
  a:link, a:visited {
    color: white;
  }

  @media (min-width: 1581px) { /*481*/
    #tabs {
      width: 1200px; /*200*/
    }
    .container {
      width: 1500px; /*400*/
    }
  }
  </style>
	</head>
	<body unresolved>
	  <core-header-panel>
	  <core-toolbar>

      <paper-tabs id="tabs" selected="all" self-end>
        <paper-tab name="all"><a href="Space_invaders/game.php" horizontal center-center layout>Главная</a></paper-tab>
        <paper-tab name="favorites"><a href="#net" horizontal center-center layout>Услуги</a></paper-tab>
        <paper-tab name="creating"><a href="#arr" horizontal center-center layout>Создание сайтов</a></paper-tab>
        <paper-tab name="contacts"><a href="#net1" horizontal center-center layout>Контакты</a></paper-tab>
      </paper-tabs>

    </core-toolbar>
      </core-header-panel>
		<canvas width="800" height="600" id="screen"></canvas>
	</body>
</html>