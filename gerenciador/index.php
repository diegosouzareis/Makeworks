<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gerenciador de emails</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<link rel="shortcut icon" href="http://makeworks.hol.es/favicon.png">
    <link href="lib/ionic/css/ionic.min.css" rel="stylesheet">

    <script src="lib/ionic/js/ionic.bundle.min.js"></script>
	<script src="todo1.js"></script>
	<script src="todo-services.js"></script>

 <link href="lib/ionic/css/ionicons.css" rel="stylesheet">
   <link href="lib/ionic/css/ionicons.min.css" rel="stylesheet">
   <link href="lib/ionic/fonts/ionicons.svg" rel="stylesheet">
   
   <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link href="lib/ionic/css/style.css" rel="stylesheet">

    <!-- IF using Sass (run gulp sass first), then remove the CSS include above
    <link href="css/ionic.app.css" rel="stylesheet">
    -->

  </head>
  
  <body ng-app="todo" ng-controller="TodoCtrl">

	<ion-header-bar class="bar bar-header bar-light">
		<button class="button button-icon ion-ios-minus-outline" 
          ng-click="data.showDelete = !data.showDelete; data.showReorder = false"></button>
		<h1 class="title">Professores</h1>
		
		<button class="button button-icon ion-ios-keypad-outline"
          ng-click="data.showDelete = false; data.showReorder = !data.showReorder" onClick="history.go(-1);"></button>
	</ion-header-bar>
	
	<ion-content>
	
		<ion-list show-delete="data.showDelete" show-reorder="data.showReorder">
		  <ion-item ng-show="!tasks.length">
			Você não cadastrou nem um professor
		  </ion-item>
		  
		  <ion-item ng-show="tasks.length" ng-repeat="task in tasks track by $index" item="task">
			{{task.task_name}}
			<ion-delete-button class="ion-minus-circled" ng-click="onItemDelete(task.task_id)"></ion-delete-button>
			<ion-option-button class="button-assertive" ng-click="onItemEdit(task.task_id)">Editar</ion-option-button>
			<ion-reorder-button class="ion-navicon" on-reorder="moveItem(task, $fromIndex, $toIndex)"></ion-reorder-button>
		  </ion-item>
		</ion-list>
		
	</ion-content>
	
	
		
	
	<script id="new-task.html" type="text/ng-template">

	  <div class="modal">

		<!-- Modal header bar -->
		<ion-header-bar class="bar-stable">
		  <h1 class="title">Novo cadastro</h1>
		  <button class="button button-clear button-positive" ng-click="closeNewTask()">Cancelar</button>
		</ion-header-bar>

		<!-- Modal content area -->
		<ion-content>

		  <form ng-submit="createTask(task)">
			<div class="list">
			  <label class="item item-input">
				<input type="text" placeholder="Ex: Luis - luis@luis.com" ng-model="task.title">
			  </label>
			</div>
			<div class="padding">
			  <button type="submit" class="button button-block button-positive">Fazer cadastro</button>
			</div>
		  </form>

		</ion-content>

	  </div>

	</script>
	
	<ion-footer-bar class="bar bar-footer bar-light">
<img src="oi.png" class="title">
		
		<button class="button button-icon ion-ios-color-wand-outline" ng-click="newTask()">
		 
		</button>
	</ion-footer-bar>

  </body>

</html>