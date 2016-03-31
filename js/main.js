// Setting angular for templating
var app = angular.module("mainApp", ['ngRoute','ngAnimate','ngSanitize']);
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

    $scope.articleClass = function(projet){
        return projet.class;
    };

    $scope.projets = [
        {
            titre: 'Naughty Factory',
            class: 'nf',
            url: 'http://www.naughtyfactory.com',
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
            description:"Travaillant conjointement avec un développeur <strong>ASP.NET</strong><br>" +
            "Intégration du design de site web<br>" +
            "Programmation de la structure <strong>HTML/CSS</strong> modulable ( en template )." +
            "Programmation d'intéraction server-client en <strong>AJAX</strong>,<strong>JSON</strong> et <strong>jQuery</strong><br>" +
            "Utilisation  du Framework UI <strong>Kendo UI</strong>®<br>"
        },
        {
            titre: 'Production et Distribution Compagnie X',
            class: 'pdx',
            //url: 'http://www.bellafd.com',
            url: '#',
            tags: [
                { nom:'Wordpress'},
                { nom:'Design'},
                { nom:'Responsive Design'}
            ],
            imagesUrl:[
                { url:"images/portfolio/bella-desktop.jpg", class:"desktop"},
                { url:"images/portfolio/bella-tablet.jpg", class:"tablet"},
                { url:"images/portfolio/bella-mobile.jpg", class:"mobile"}
            ],
            overdescription:"Site web Wordpress ciblant les gens du domaine de la beauté",
            description:"Prise en compte des demandes du client.<br>" +
            "Création du design sur Wordpress.<br>" +
            "Programmation des widgets.<br>"
        },
        {
            titre: 'Sondage Conseil Québecois du Commerce de Détail',
            class: 'cqcd',
            url: 'portfolio/cqcd',
            tags: [
                { nom:'PHP'},
                { nom:'MySQL'},
                { nom:'Design'},
                { nom:'Jquery'},
                { nom:'Responsive Design'}
            ],
            imagesUrl:[
                { url:"images/portfolio/cqcd-desktop.jpg", class:"desktop"},
                { url:"images/portfolio/cqcd-tablet.jpg", class:"tablet"},
                { url:"images/portfolio/cqcd-mobile.jpg", class:"mobile"}
            ],
            overdescription:"Sondage sur un site web 'responsive' avec collecte de données",
            description:"Design du site web et intégration des éléments.<br>" +
            "Conception responsive design pour cibler un maximum d'utilisateurs.<br>" +
            "Programmation du côté serveur en <strong>PHP</strong> pour la collecte de données.<br>" +
            "Gestion de la base de données <strong>MySQL</strong> pour sauvegarder les données collectées.<br>"
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

    // Menu display on mobile event
    $(".mobileMenuButton").on("click",function(e){
        $(".menu").toggle(function(){
            $(".mobileMenuButton").toggleClass("opened");
            $("html").toggleClass("full");
        });
    });

    // On resize close menu if on mobile
    // NOT WORKING YET
    $(document).resize(function(e){
        var $menu = $(".menu");
        if(window.innerWidth < 768){
            $menu.hide();
        }else{
            $menu.show();
        }
    })

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
            },
            click : function(e){
                if(isMobileSize()){
                    $(".mobileMenuButton").trigger("click");
                }
            }
        }
    );

    // Animate Buttons on the menu
    $('.about').animateCss('fadeInLeft');
    $('.portfolio').animateCss('fadeInLeft');
    $('.contact').animateCss('fadeInLeft');
    $('.cv').animateCss('fadeInLeft');

    function isMobileSize(){
        screen_width = document.documentElement.clientWidth;
        if(screen_width < 768){
            return true;
        }
        return false
    }
});