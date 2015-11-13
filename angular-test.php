<!doctype html>
<html ng-app="ui.bootstrap.demo">
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.js"></script>
		<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.14.3.js"></script>
		<script src="angular-tabs.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>

		<div ng-controller="TabsDemoCtrl">
			<p>Select a tab by setting active binding to true:</p>
			<p>
				<button type="button" class="btn btn-default btn-sm" ng-click="tabs[0].active = true">Select second tab</button>
				<button type="button" class="btn btn-default btn-sm" ng-click="tabs[1].active = true">Select third tab</button>
			</p>
			<p>
				<button type="button" class="btn btn-default btn-sm" ng-click="tabs[1].disabled = ! tabs[1].disabled">Enable / Disable third tab</button>
			</p>
			<hr />

			<uib-tabset>
				<uib-tab heading="Static title">Static content</uib-tab>
				<uib-tab ng-repeat="tab in tabs" heading="{{tab.title}}" active="tab.active" disable="tab.disabled">
					{{tab.content}}
				</uib-tab>
				<uib-tab select="alertMe()">
					<uib-tab-heading>
						<i class="glyphicon glyphicon-bell"></i> Alert!
					</uib-tab-heading>
					I've got an HTML heading, and a select callback. Pretty cool!
				</uib-tab>
			</uib-tabset>

			<hr />

			<uib-tabset vertical="true" type="pills">
				<uib-tab heading="Vertical 1">Vertical content 1</uib-tab>
				<uib-tab heading="Vertical 2">Vertical content 2</uib-tab>
			</uib-tabset>

			<hr />

			<uib-tabset justified="true">
				<uib-tab heading="Justified">Justified content</uib-tab>
				<uib-tab heading="SJ">Short Labeled Justified content</uib-tab>
				<uib-tab heading="Long Justified">Long Labeled Justified content</uib-tab>
			</uib-tabset>
		</div>
	</body>
</html>
