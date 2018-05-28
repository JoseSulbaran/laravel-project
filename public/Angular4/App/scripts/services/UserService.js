'use strict';

angular.module('Client')
	.factory('UsuarioResource', function($resource) {
		console.log("siiiiiiiii");
		return $resource("http://localhost:8000/angular-usuario/:id", {
			id: "@id"
		}, {
			update: {
				method: "PUT"
			}
		});
	});