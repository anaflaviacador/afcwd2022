jQuery(document).ready(function ($) {
    var janela = $(window),
        janelaWidth = $(window).width(),
        tagArtigo = $('article');
    var $indice = $("ul.indice");
    var nomeHeadings = ["h2", "h3", "h4", "h5"];
    var $headingsPost = tagArtigo.children(nomeHeadings.join(", "));
    var contagemHeadings = {};
    for (var i = 0; i < nomeHeadings.length; i++) {
        contagemHeadings[nomeHeadings[i]] = 0;
    }
    var $templateItemIndice = $("<li class=\"indice-li\"><a class=\"indice-li-link jump\" href=\"\"><strong class=\"indice-num\"></strong><span></span></a></li>");
    $headingsPost.each(function (index, el) {
        var thisTagName = $(el).prop("tagName").toLowerCase();
        var thisID = $(el).attr("id");
        var thisTexto = $(el).text();
        var thisHierarquia = nomeHeadings.indexOf(thisTagName);
        contagemHeadings[thisTagName]++;
        var thisNumero = String(contagemHeadings[thisTagName]);
        for (var i = thisHierarquia + 1; i < nomeHeadings.length; i++) {
            contagemHeadings[nomeHeadings[i]] = 0;
        }
        for (var i = thisHierarquia - 1; i >= 0; i--) {
            thisNumero = contagemHeadings[nomeHeadings[i]] + "." + thisNumero;
        }
        var $cloneItemIndice = $templateItemIndice.clone();
        $cloneItemIndice
            .find("a")
            .attr("href", "#" + (thisID ? thisID : ""))
            .find("strong")
            .text(thisNumero)
            .end().find("span").text(thisTexto);
        $indice.append($cloneItemIndice);
    });
}); 