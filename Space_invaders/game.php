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