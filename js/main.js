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

    $scope.getTemplate = function(section) {
        return 'views/projet.html';
    }

    $scope.projets = [
        {
            titre: 'Naughty Factory',
            url: 'naughtyfactory.com',
            tags: [
                { nom:'Bootstrap'},
                { nom:'Javascript'},
                { nom:'Responsive Design'},
                { nom:'AJAX'},
                { nom:'Razor'},
                { nom:'ASP.net'}
            ],
            imagesUrl:[
                { url:"images/portfolio/naughtyfactory-desktop.jpg", class:"desktop"},
                { url:"images/portfolio/naughtyfactory-tablet.jpg", class:"tablet"},
                { url:"images/portfolio/naughtyfactory-mobile.jpg", class:"mobile"}
            ],
            overdescription:"Site à haut traffic créé avec la compagnie M2J Technologies.",
            description:"Travaillant conjointement avec un développeur ASP.NET," +
            "j'ai intégré le design d'un designer dans un site fait à partir de rien. " +
            "J'ai programmé la structure HTML/CSS modulable ( en template )." +
            "Programmation d'intéraction server-client en AJAX et JQuery" +
            "Utilisation  du Framework UI Kendo UI®"
        },
        {
            titre: 'Production et Distribution Compagnie X',
            url: 'bellafd.com',
            tags: [
                { nom:'Wordpress'},
                { nom:'Design'},
                { nom:'Responsive Design'}
            ],
            imagesUrl:[
                { url:"images/portfolio/naughtyfactory-desktop.jpg", class:"desktop"},
                { url:"images/portfolio/naughtyfactory-tablet.jpg", class:"tablet"},
                { url:"images/portfolio/naughtyfactory-mobile.jpg", class:"mobile"}
            ],
            overdescription:"Site web Wordpress ciblant les gens du domaine de la beauté",
            description:"Création du design sur Wordpress," +
            "Programmation des widgets"
        },
        {
            titre: 'Sondage Conseil Québecois du Commerce de Détail',
            url: 'sebastianpilon.com/projets/cqcd',
            tags: [
                { nom:'PHP'},
                { nom:'MySQL'},
                { nom:'Design'},
                { nom:'Jquery'},
                { nom:'Responsive Design'}
            ],
            imagesUrl:[
                { url:"images/portfolio/naughtyfactory-desktop.jpg", class:"desktop"},
                { url:"images/portfolio/naughtyfactory-tablet.jpg", class:"tablet"},
                { url:"images/portfolio/naughtyfactory-mobile.jpg", class:"mobile"}
            ],
            overdescription:"Sondage sur un site web 'responsive' avec collecte de données",
            description:"Design du site web et intégration des éléments." +
            "Conception responsive design pour cibler un maximum d'utilisateurs" +
            "Programmation du côté serveur pour la collecte de données" +
            "Gestion de la base de données MySQL pour sauvegarder les données collectées"
        }
    ]
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