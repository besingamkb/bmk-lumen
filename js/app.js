var bmkscript = angular.module('bmkscript', ['ngRoute']);

var controllers = {};

controllers.siteData = function($scope, $http) {
	$http.get('services/public/getSiteData').success(function(data) {
		$scope.siteMeta = data.getSiteData.meta;
		$scope.siteData = data.getSiteData.results;
	});
}

controllers.getSkills = function($scope, $http) {
	// todo
	$http.get('services/public/getSkillsData').success(function(data) {
		$scope.skills = data;
	})
}


//controllers.siteData = function(){}
bmkscript.controller(controllers);