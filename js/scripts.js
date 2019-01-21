$(document).ready(function () {
	// $(".menu-collapsed").click(function () {
	// 	$(this).toggleClass("menu-expanded");
	// });

	// navigation fixe

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('#nav-1').fadeIn(); //fondu en entrée
			$('body').addClass('scrolled'); //
		} else {
			$('#nav-1').fadeOut(); //fondu en sortie
			$('body').removeClass('scrolled');
		}
	})



	// Navigation 
	
	const bpNav = 768;
    const burger = $('.nav-toggle');
    // 
    const nav = $(burger.data('target'));

    function setMenu() {
        if ($(window).width() < bpNav && !$('.resp-nav').lenght); {
            // Clone la nav
            //fonction append ajoute avant la balise fermante
            $('body').append('<nav class="resp-nav"></nav>');
            // recupere le contenu de la nav
            const navContent = nav.html();
            // remplit la nav resp avec le contenu cloné
            $('.resp-nav').html(navContent);
            // autre syntaxe : $('.resp-nav').html(nav.html());

            // resp Submenu
            $(".resp-nav .has-sublist > a").click(function () {
                $(".has-sublist ul").slideUp(); //replie les autres listes 
                $(this).next().stop(true).slideToggle();
                $(".has-sublist > a").not(this).removeClass('expanded');
                $(this).toggleClass('expanded'); // permet d'ouvrir alternativement
            });
        }
    }

    setMenu();
    $(window).resize(setMenu); // des qu'il redimensionne lance la fonction pour savoir si doit creer ou non la resp nav

    // Event click burger
    burger.click(function () {
        $('body').toggleClass('nav-expanded');
    });


});