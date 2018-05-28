'use strict';

angular.module('Client',['ngResource','ngRoute'])
	.config(function($routeProvider){
		$routeProvider
		.when('/',{
			templateUrl: 'views/user/index.html',
			controller: 'Index'
		})
		.when('/notes/new',{
			templateUrl: 'views/user/create.html',
			controller: 'CreateUsuario'
		})
		.when('/notes/edit/:id',{
			templateUrl: 'views/user/create.html',
			controller: 'EditUsuario'
		})
		.otherwise({
			redirectTo: '/'
		});
	});