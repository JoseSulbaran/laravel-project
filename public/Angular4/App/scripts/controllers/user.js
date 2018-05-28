'use strict';

angular.module('Client')
	.controller('Index', function($scope, UsuarioResource, $location, $timeout) {
		$scope.Notes = UsuarioResource.query();

		$scope.removeNote = function(id) {
			UsuarioResource.delete({
				id: id
			});
			Materialize.toast('Usuario Eliminado.', 5000, 'green accent-4');
			$timeout(function() {
				$location.path('/');
			}, 1000);
		};
	})
	.controller('CreateUsuario', function($scope, UsuarioResource, $location, $timeout) {
		$scope.title  = "User new";
		$scope.button = "Guardar";
		$scope.User  = {};
		/*var currentTime = new Date();
		$scope.currentTime = currentTime;
		$scope.month = ['Januar', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		$scope.monthShort = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
		$scope.weekdaysFull = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		$scope.weekdaysLetter = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];
		$scope.disable = [false, 1, 7];
		$scope.today = 'Today';
		$scope.clear = 'Clear';
		$scope.close = 'Close';
		var days = 15;
		$scope.minDate = (new Date($scope.currentTime.getTime() - ( 1000 * 60 * 60 *24 * days ))).toISOString();
		$scope.maxDate = (new Date($scope.currentTime.getTime() + ( 1000 * 60 * 60 *24 * days ))).toISOString();
		$scope.onStart = function () {
		    console.log('onStart');
		};
		$scope.onRender = function () {
		    console.log('onRender');
		};
		$scope.onOpen = function () {
		    console.log('onOpen');
		};
		$scope.onClose = function () {
		    console.log('onClose');
		};
		$scope.onSet = function () {
		    console.log('onSet');
		};
		$scope.onStop = function () {
		    console.log('onStop');
		};

		*/
		
		$scope.saveNote = function() {
			UsuarioResource.save($scope.User);
			Materialize.toast('Usuario creado.', 5000, 'green accent-4');
			$timeout(function() {
				$location.path('/');
			}, 1000);
		};
	})
	.controller('EditUsuario', function($scope, UsuarioResource, $location, $timeout, $routeParams) {
		$scope.title  = "Editar Usuario";
		$scope.button = "Actualizar";
		$scope.User   = UsuarioResource.get({
			id:$routeParams.id
		})
		
		$scope.saveNote = function() {
			UsuarioResource.update($scope.User);
			Materialize.toast('Usuario actualizado.', 5000, 'green accent-4');
			$timeout(function() {
				$location.path('/');
			}, 1000);
		};
	});