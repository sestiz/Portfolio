// Setting angular for templating
var app = angular.module("mainApp", ['ngRoute','ngAnimate']);
app.config(function($routeProvider){
   $routeProvider.when('/', {
           templateUrl : 'views/about.html',
           controller  : 'mainController'
       })

       .when('/about', {
           templateUrl : 'views/about.html',
           controller  : 'mainController'
       })

       .when('/portfolio', {
           templateUrl : 'views/portfolio.html',
           controller  : 'portfolioController'
       })

       .when('/contact', {
           templateUrl : 'views/contact.html',
           controller  : 'contactController'
       })
});

app.controller('mainController', function($scope){
    $scope.animateClass = 'aboutanim';
});

app.controller('portfolioController', function($scope){
    $scope.animateClass = 'portfolioanim';
});

app.controller('contactController', function($scope){
    $scope.animateClass = 'contactanim';
});

$(function(){

    // Modify JQuery to use with animate.css
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            $(this).addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass(animationName + " first second third fourth");
            });
        }
    });

    // Init the scrolling lib
    var scroller = skrollr.init({
        edgeStrategy: 'set',
        documentElement : "skrollrBody",
        skrollrBody:'skrollrBody',
        forceHeight:false
    });

    // Add animation when mouseover menu buttons
    $(".menu .animated").on(
        {
            mouseenter : function(e) {
                $(this).addClass("tada");
            },
            mouseleave : function(e) {
                $(this).removeClass("tada");
            }
        }
    );

    // Animate Buttons on the menu
    $('.about').animateCss('fadeInLeft');
    $('.portfolio').animateCss('fadeInLeft');
    $('.contact').animateCss('fadeInLeft');
    $('.cv').animateCss('fadeInLeft');
});