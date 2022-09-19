jQuery(document).ready(function ($) {
    var janela = $(window),
        body = $('body'),
        htmlTag = $('html'),
        scrollAtual = janela.scrollTop,
        navInternaWrap = $('.nav-interna-wrap'),
        navInterna = $('.nav-interna'),
        navInternaHeight = navInterna.outerHeight();

    ////////////////////////////////// fancybox
    var abrirFancybox = $('.abre-modal');
    abrirFancybox.on('click', function (event) {
        var thisTarget = $(this).data('target');
        event.preventDefault();
        $.fancybox.open(
            $(thisTarget),
            {
                beforeShow: function (instance, slide) {
                    $('html').addClass('noscroll');
                    // console.log('abriu');
                },
                afterClose: function (instance, slide) {
                    $('html').removeClass('noscroll');
                    // console.log('feshow');
                }
            }
        );
    });

    var abrirIMG = $('.afczoom');
    if (abrirIMG.length > 0) { abrirIMG.fancybox(); }        

    //////////////////////////////////////// Menu interno fixo
    if (navInternaWrap.length > 0) {
        navInternaWrap.css('height', navInternaHeight);
        janela.on('scroll', function (event) {
            var scrollHTML = htmlTag.scrollTop();
            if (scrollHTML >= navInternaWrap.offset().top) {
                navInterna.addClass("fixo");
            }
            else {
                navInterna.removeClass("fixo");
            }
        });
    }
    //////////////////////////////////////// JUMP PARA QUALQUER LUGAR
    $(document).on('click', 'a.jump[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
    });

    //////////////////////////////////////// GET MOCKUP HEIGHT
    var mockup = $('.mockup-area'),
        mockupiPad = $('.mockup-area-ipad'),
        almID = $('#ajax-load-more');  
        
    var updateAlturaMockup = function() {
        mockup = $('.mockup-area');
        mockup.each(function (index, el) {
            var height = $(el).height();
            $(el).attr("style", "--alturaMockup: " + height + "px");
        });
    }

    updateAlturaMockup();

    if (almID.length > 0) {
        console.log('tem mockup alm');
        window.almComplete = function (alm) {
            console.log('alm completou');
            updateAlturaMockup();
        }; 
    }

    if (mockupiPad.length > 0) {
        console.log('tem mockup ipad');
        mockupiPad.each(function (index, el) {
            var height = $(el).height();
            $(el).attr("style", "--alturaMockupiPad: " + height + "px");
        });
    }



    //////////////////////////////////////// DEPOIMENTOS
    var clientes = $('.clientes-lista');
    if (clientes.length > 0) {
        // janela.on("load", function () {
        //     clientes.masonry({
        //         itemSelector: '.cliente'
        //     });
        // });
        var masonryArgs = {
            itemSelector: '.cliente',
            percentPosition: true
        };
        clientes.each(function (index, el) {
            var $thisMasonry = $(el);
            $thisMasonry.masonry(masonryArgs);
            $thisMasonry.find('img').each(function (index, el) {
                $(el).on('load', function (event) {
                    console.log('imagem de cliente carregou');
                    $thisMasonry.masonry('layout');
                });
            });
        });
    }

    //////////////////////////////////////// SLIDERS
    var procriativo = $('#processo-criativo'),
        printsTema = $('#prints-template');
    if (procriativo.length > 0) {
        new Splide('#processo-criativo', {
            perMove: 2,
            arrows: true, // 'slider' or false
            pagination: true,
            width: '100%',
            fixedWidth: '50%',
            rewind: true,
            rewindSpeed: 1000,
            trimSpace: false, // true removes empty space from end of list
            breakpoints: {
                479: {
                    fixedWidth: '100%',
                    perMove: 1,
                }
            }
        }).mount();
    }
    if (printsTema.length > 0) {
        new Splide('#prints-template', {
            perMove: 2,
            arrows: true, // 'slider' or false
            pagination: true,
            width: '100%',
            fixedWidth: '50%',
            rewind: true,
            padding: 20,
            rewindSpeed: 1000,
            trimSpace: false, // true removes empty space from end of list
            breakpoints: {
                479: {
                    fixedWidth: '100%',
                    perMove: 1,
                }
            }
        }).mount();
    }
    ////////////////////////////////// abinhas = accordion
    var accordion = $('.aba');
    if (accordion.length > 0) {
        accordion.find('.aba-titulo').on('click', function (event) {
            var $thisArticle = $(this).siblings('.aba-conteudo');
            accordion.find('.aba-titulo').not($(this)).removeClass('ativo');
            $(this).toggleClass('ativo');
            accordion.find('.aba-conteudo').not($thisArticle).slideUp();
            $thisArticle.slideToggle();
        });
    }
    ////////////////////////////////// gruda lateral para indice
    var indice = $('#indice');
    if (indice.length > 0) {
        var colIndice = $("#lateral-post"),
            wrapArtigo = $("#artigo"),
            asideFinal = $('.aside-final'),
            postautoria = $('.post-autoria'),
            posicoesRedesFixas = {},
            attPosicoes = function () {
                posicoesRedesFixas = {
                    comeco:
                        wrapArtigo.offset().top + postautoria.outerHeight(),
                    fim:
                        wrapArtigo.offset().top
                        + wrapArtigo.outerHeight()
                        - asideFinal.outerHeight()
                        - indice.outerHeight()
                        - postautoria.outerHeight() - 30
                }
                console.log(posicoesRedesFixas);
            }
        attPosicoes();
        var timerAttPosicoes = setInterval(attPosicoes, 3000),
            timeOutAttPosicoes = setTimeout(function () { }, 0);
        janela.on('resize', function (event) {
            clearTimeout(timeOutAttPosicoes);
            timeOutAttPosicoes = setTimeout(attPosicoes, 200);
        });
        janela.on('scroll', function (event) {
            var scrollNovo = janela.scrollTop();
            if (scrollNovo >= posicoesRedesFixas.fim) {
                indice.addClass('pos-fixado').removeClass('fixo');
            }
            else if (scrollNovo >= posicoesRedesFixas.comeco) {
                indice.addClass('fixo').removeClass('pos-fixado');
            }
            else {
                indice.removeClass('pos-fixado fixo');
            }
        })
    }
    ////////////////////////////////// MIN HEIGHT PAG SIMPLES ou login
    var pagSimples = $('#pag-simples');
    if (pagSimples.length > 0) {
        var cabecalho = $('header.cabecalho'),
            rodape = $('.rodape'),
            heightTotal = cabecalho.outerHeight() + rodape.outerHeight();
        console.log(heightTotal);
        pagSimples.attr("style", "min-height: calc(100vh - " + heightTotal + "px);");
    }


    ////////////////////////////////// NEWSLETTER
    $("button.assinar-news").wrapInner("<span></span>");


    ////////////////////////////////// ICONES DE AJUDA
    janela.scroll(function () {
        var whats = $('#afc_btwhats'),
            freshworks = $('#freshworks-container iframe#launcher-frame');
        if (whats.length > 0) {
            whats.removeClass("up");
            if (janela.scrollTop() + janela.height() > ($(document).height() - 50)) {
                whats.addClass("up");
            }
        }
        if (freshworks.length > 0) {
            freshworks.removeClass("up");
            if (janela.scrollTop() + janela.height() > ($(document).height() - 50)) {
                freshworks.addClass("up");
            }
        }

    });


    //////////////////////////////////////// LOADER
    // var loader = $('#fakeloader-overlay');
    // if (loader.length > 0) { window.FakeLoader.init({ auto_hide: true }); }
});  