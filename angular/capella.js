(function () {
	'use strict';
	var app = angular.module('capella', []);
	app.config(['$locationProvider', function ($locationProvider) {
		$locationProvider.html5Mode({
	        enabled: true,
	        rewriteLinks: false
	    });
	}]);
	
	app.directive("deferredCloak", function () {
	    return {
	        restrict: 'A',
	        link: function (scope, element, attrs) {        
	            attrs.$set("deferredCloak", undefined);
	            element.removeClass("deferred-cloak");
	        }
	    };
	});
})();