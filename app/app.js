// Define the `itemApp` module
var itemApp = angular.module('itemApp', []);

// Define the `ItemListController` controller on the `itemApp` module
itemApp.controller('ItemListController', function ItemListController($scope) {
  $scope.items = [
    {
      id: '1',
      name: 'Item 1'
    }, {
      id: '2',
      name: 'Item 2'
    }, {
      id: '3',
      name: 'Item 3'
    }
  ];
});
