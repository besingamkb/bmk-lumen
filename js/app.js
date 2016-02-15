var bmkscript = angular.module('bmkscript', ['ngRoute']);

var controllers = {};

controllers.siteData = function($scope, $http) {
	$http.get('services/public/getSiteData').success(function(data) {
		$scope.siteMeta = data.getSiteData.meta;
		$scope.siteData = data.getSiteData.results;
	})
}


//controllers.siteData = function(){}
bmkscript.controller(controllers);