<?php
$urlTema = get_template_directory_uri();
global $post, $product;
?>

<div class="container pb-3em">
    <div class="prod-mail">
      <div class="prod-mail-cnt">
        <h2>Email <span class="titulo-cursiva cor-azul">marketing</span></h2>
        <p class="mb-10px">Utilize o seu serviço de <strong><em>e-mail marketing favorito</em></strong> ou incorpore um formulário personalizado.</p>
        <?php /* ?>
        <div class="flexb-justify-center hide-mobile">
          <a href="#comprar" class="botao inverso azul jump">comprar<span class="bt-seta"></span></a>
          <a href="#aovivo" class="botao ml-20px azul jump">ver ao vivo<span class="bt-seta"></span></a>
        </div>
        <?php */ ?>
      </div>
      <div class="prod-mail-brands">
        <img src="<?php echo $urlTema; ?>/assets/images/org-azul-3.svg" aria-hidden="true" alt="Grafismo" class="prod-mail-detalhe">
        
        <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewbox="0 0 149 41">
            <path fill="currentColor" fill-rule="nonzero" d="M37.92 28a11.81 11.81 0 01-.8 3.77c-2.35 5.64-7.95 8.79-14.63 8.59-6.23-.2-11.53-3.48-13.86-8.85a6.1 6.1 0 01-3.95-1.6 5.86 5.86 0 01-2.02-3.75 6.37 6.37 0 01.37-2.97l-1.3-1.11C-4.26 17.02 14.42-3.8 20.4 1.43l2.04 2 1.1-.47c5.24-2.18 9.5-1.13 9.5 2.34 0 1.8-1.14 3.9-2.98 5.82a5.88 5.88 0 011.5 2.7c.21.7.32 1.44.33 2.18l.07 2.48c.05 0 .58.16.74.2 1.07.24 2.06.73 2.9 1.44.43.43.72.99.81 1.6.12.79-.08 1.59-.55 2.24.13.27.23.55.32.84l.28.97c.57 0 1.46.66 1.46 2.24zm-16.14 1.04c.16.7.71 1.28 1.41 1.48a7 7 0 001.11.3c4.78.83 9.24-1.91 10.24-2.6.08-.05.13 0 .07.09l-.1.14c-1.23 1.59-4.54 3.43-8.84 3.43-1.88 0-3.75-.66-4.44-1.68-1.07-1.58-.05-3.9 1.73-3.65l.78.09c2.76.27 5.55-.18 8.1-1.3 2.43-1.13 3.34-2.38 3.21-3.38a1.44 1.44 0 00-.42-.83 5.33 5.33 0 00-2.3-1.1c-.38-.1-.65-.17-.93-.26-.5-.17-.75-.3-.8-1.24l-.13-2.45c-.04-1.05-.17-2.47-1.05-3.06a1.42 1.42 0 00-.75-.24c-.15-.01-.3 0-.45.04-.45.1-.85.34-1.17.67A4.06 4.06 0 0124 14.5c-.62-.02-1.28-.12-2.03-.17l-.43-.02a4.05 4.05 0 00-3.9 3.54c-.43 2.96 1.71 4.49 2.33 5.39a.8.8 0 01.17.4.69.69 0 01-.22.43 7.61 7.61 0 00-1.35 7.99c1.56 3.66 6.4 5.36 11.13 3.8.62-.2 1.22-.45 1.8-.75a9.44 9.44 0 002.75-2.07 8.18 8.18 0 002.3-4.5c.13-.95-.08-1.31-.36-1.5-.2-.1-.43-.14-.66-.11a9 9 0 00-.63-2.15 13.89 13.89 0 01-4.5 2.25c-1.96.55-4 .77-6.03.65-1.3-.11-2.17-.5-2.49.57 1.97.66 4.07.88 6.14.63h.01c.06 0 .11.04.11.1 0 .05-.02.1-.07.12-.05.02-2.43 1.13-6.28-.07zM143.76 15a4.04 4.04 0 00-3.68 2.6c-.29.63-.28.82-.49.82-.3 0-.05-.51.1-1.1.15-.67.18-1.37.05-2.05h-3.16v15.18h4.32v-4.81a3.38 3.38 0 002.91 1.79c3.13 0 4.7-2.64 4.7-6.21 0-4.05-1.88-6.22-4.75-6.22zM11.54 24.92c-.4-2.64-2.18-3.57-3.39-3.63-.3-.02-.6 0-.9.06-2.16.44-3.37 2.27-3.13 4.66a4.82 4.82 0 004.41 4.03c.21 0 .41 0 .62-.04 2.18-.37 2.75-2.75 2.4-5.08zm-1.27 2.4c.05.06.06.14.02.2a.91.91 0 01-.85.44 1.2 1.2 0 01-1.06-1.23c0-.41.07-.81.22-1.2.2-.48.02-1.05-.42-1.34a1.16 1.16 0 00-.87-.16c-.29.06-.55.24-.7.49a2.8 2.8 0 00-.3.7c-.1.27-.25.35-.36.33-.05 0-.12-.04-.17-.16-.1-.71.11-1.44.61-1.97a1.87 1.87 0 011.62-.6c.65.1 1.2.5 1.48 1.09.28.7.22 1.52-.18 2.18l-.07.15a.92.92 0 00-.02.84c.11.16.3.25.5.25l.25-.04c.11-.03.23-.06.3.03zm59-12.32c-1.96-.01-3.9.4-5.69 1.2v3.59s2.63-1.51 4.75-1.51c1.7 0 1.91.92 1.83 1.68a8.8 8.8 0 00-1.98-.13c-3.52 0-5.3 1.6-5.3 4.16 0 2.44 2 3.45 3.68 3.45 1.66.06 3.2-.9 3.86-2.43.24-.54.28-.91.48-.91.24 0 .16.26.15.8-.04.76.02 1.52.17 2.27h3.26V21.3c0-3.65-1.3-6.31-5.2-6.31h-.02zm21.4 6.22c0-1.07.98-2.04 2.81-2.04 1.4.03 2.76.44 3.94 1.17V16.2S96.16 15 93.06 15c-3.28 0-6 1.9-6 6.04 0 4.12 2.47 6.4 6 6.4a6.84 6.84 0 004.37-1.51V22a7.5 7.5 0 01-3.93 1.29c-2.09 0-2.84-.96-2.84-2.07zm15.5-6.22c-2.5 0-3.45 2.37-3.64 2.78-.19.4-.29.65-.45.64-.27-.01-.08-.5.03-.82.42-1.35.63-2.75.63-4.16.03-.6-.03-1.2-.19-1.77h-3.72v15.5h4.32v-5.92c0-.96.38-2.65 1.47-2.65.9 0 1.18.67 1.18 2v6.57h4.32v-6.3c0-3.05-.5-5.87-3.95-5.87zM81.6 11.67h4.32v15.5H81.6v-15.5zm29.93 3.62v11.88h4.32V15.29c-.67.3-1.4.46-2.15.42a4.63 4.63 0 01-2.17-.42zm-33.48.42c.74.04 1.48-.11 2.15-.42v11.88h-4.3V15.29l2.15.42zM57.94 15a3.66 3.66 0 00-3.28 2.46c-.24.53-.3.96-.5.96-.28 0-.08-.37-.3-1.2A2.98 2.98 0 0050.77 15c-2 0-2.85 1.68-3.26 2.6-.27.64-.27.82-.49.82-.3 0-.05-.51.1-1.1.15-.67.18-1.37.05-2.05h-3.16v11.89h4.32v-5.91c0-1.17.5-2.65 1.32-2.65.97 0 1.16.74 1.16 2.12v6.45h4.34v-5.92c0-1.04.42-2.65 1.33-2.65.98 0 1.16 1.04 1.16 2.12v6.44h4.25v-7c0-3.1-1.09-5.16-3.96-5.16zm73.28 0a3.66 3.66 0 00-3.27 2.46c-.24.53-.3.96-.5.96-.28 0-.09-.47-.3-1.2a2.94 2.94 0 00-3.09-2.22c-2 0-2.85 1.68-3.26 2.6-.27.64-.27.82-.49.82-.3 0-.05-.51.1-1.1.15-.67.18-1.37.05-2.05h-3.16v11.89h4.32v-5.91c0-1.17.5-2.65 1.32-2.65.97 0 1.16.74 1.16 2.12v6.45h4.34v-5.92c0-1.04.42-2.65 1.33-2.65.98 0 1.16 1.04 1.16 2.12v6.44h4.25v-7c0-3.1-1.09-5.16-3.96-5.16zm11.36 9.6c-.99 0-1.72-1.24-1.72-3 0-1.7.75-3 1.68-3 1.2 0 1.71 1.1 1.71 3 0 1.98-.47 3-1.67 3zm-74.37-.21c-1.03.23-1.56-.08-1.56-.77 0-.94.97-1.31 2.35-1.31.61 0 1.18.05 1.18.05a3.07 3.07 0 01-1.97 2.03zm-40.96-2.47c.27.17.63.1.83-.14.12-.23-.06-.55-.39-.71a.63.63 0 00-.83.14c-.12.24.05.55.4.7zM15.22 8.18a42.4 42.4 0 015.82-4.02c2.04-1.17-1.63-1.9-2.12-2.03-3.02-.82-9.54 3.7-13.7 9.66-1.69 2.4-4.1 6.68-2.95 8.87.41.5.87.94 1.38 1.34a5.16 5.16 0 013.25-2.08 26.5 26.5 0 018.32-11.74zm14.2 11.94l-.19-.02c-.37 0-.67.3-.67.67 0 .36.3.66.67.66.36 0 .66-.3.67-.65a.6.6 0 00-.49-.66zm-7.38-1.21c0-.45.13-.76.48-.81.5-.08.77.32.96 1.03.33.16.61.4.82.7.1.14.11.25.05.3-.09.1-.3 0-.67-.16l-.05-.03v.49c.21.07.4.19.56.36.03.04.04.1.01.15-.05.08-.16.06-.4.04a1.24 1.24 0 00-.27-.03V21c-.19.28-.45.43-.82 0-.14.04-.29.08-.42.14-.12.04-.23.07-.35.09a.11.11 0 01-.08-.03.11.11 0 01-.03-.08.56.56 0 01.23-.36c.11-.1.23-.17.35-.22a3.69 3.69 0 01-.27-.8v-.05c-.53.09-1.05.2-1.55.36-.09-.02-.13-.05-.14-.1-.03-.15.2-.4.44-.57.35-.25.74-.41 1.15-.47zm6.24-.77c.08.42.26.8.51 1.16.26-.03.53-.03.8 0 .15-.46.16-.96.03-1.43-.19-.86-.45-1.38-.98-1.3-.53.08-.55.7-.36 1.57zm82.75-4.87c0-.95 1.18-1.72 2.64-1.72 1.46 0 2.64.77 2.64 1.72 0 .96-1.18 1.73-2.64 1.73-1.46 0-2.64-.77-2.64-1.73zm-35.65 0c0-.95 1.18-1.72 2.64-1.72 1.46 0 2.64.77 2.64 1.72 0 .96-1.18 1.73-2.64 1.73-1.46 0-2.64-.77-2.64-1.73zm-60.7-1.41a15.02 15.02 0 0111.88-2.38c.08.02.13-.11.06-.15A8.47 8.47 0 0023 8.38a.07.07 0 01-.07-.07l.02-.04c.2-.26.42-.5.68-.7a.08.08 0 00.02-.04c0-.04-.03-.07-.06-.07A9.61 9.61 0 0019.24 9h-.04c-.04 0-.06-.02-.06-.06v-.01c.1-.4.26-.77.46-1.12v-.04a.06.06 0 00-.06-.06h-.03a17.32 17.32 0 00-4.93 4.05c-.02 0-.02.03-.02.05 0 .03.03.06.06.06l.04-.01z"></path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewbox="0 0 157 31">
            <path fill="currentColor" fill-rule="nonzero" d="M146.43 26.9c1.46.7 3.05 1.08 4.67 1.1 1.56 0 2.23-.62 2.23-1.32 0-.69-.78-1.1-2.86-1.55-2.91-.65-5.03-1.55-5.03-4.2 0-2.67 2.01-4.13 5.15-4.13 1.81.01 3.61.38 5.27 1.1l-1.19 2.5a12.9 12.9 0 00-4.2-.87c-1.33 0-2 .48-2 1.2s.83 1.1 2.99 1.55c3.11.66 4.95 1.75 4.95 4.22 0 2.47-1.93 4.24-5.43 4.24-2.02.08-4.03-.37-5.84-1.29l1.29-2.56zm-14.55 1.28a7.38 7.38 0 01-5.52 2.47 6.7 6.7 0 01-7.08-6.86 6.81 6.81 0 017.05-7.01 6.74 6.74 0 014.87 1.88 6.48 6.48 0 012.01 4.85c0 .6-.06 1.2-.18 1.77h-10a2.94 2.94 0 001.48 1.92c.61.31 1.29.47 1.97.46h.7a4.92 4.92 0 002.6-1.15l2.1 1.67zm-80.67-4.85a6.45 6.45 0 00-4.18-6.19 6.7 6.7 0 00-2.62-.44h-.08a6.63 6.63 0 00-5.17 2.15 6.98 6.98 0 00-1.88 4.91 6.64 6.64 0 004.24 6.41c.9.36 1.87.51 2.84.46a7.2 7.2 0 005.52-2.48l-1.29-1.09a5 5 0 01-4.18 1.9 5.28 5.28 0 01-5.53-4.53h12.26V23.4l.07-.06zm51.81 5.3a7.52 7.52 0 01-10.08 0 6.75 6.75 0 01-2-4.98 6.64 6.64 0 014.33-6.5c.87-.34 1.79-.5 2.72-.48a7.02 7.02 0 015.04 1.95 6.62 6.62 0 011.99 5.02 6.65 6.65 0 01-2 4.99zm-27.91 1.91a7 7 0 01-5.14-12 6.97 6.97 0 015.14-1.9c1.65-.04 3.26.4 4.67 1.25v-6.1h1.68v18.64h-1.68v-1.17a8.63 8.63 0 01-4.67 1.26v.02zm-15.34 0a7 7 0 01-6.73-4.22 6.92 6.92 0 011.6-7.78 6.97 6.97 0 015.14-1.9 8.65 8.65 0 014.67 1.3v-1.06h1.65v13.57h-1.68V29.3a8.72 8.72 0 01-4.65 1.24h.01-.03.02zm29.66-.1c-.41.06-.83.1-1.25.1-.9.03-1.79-.2-2.55-.7a3.93 3.93 0 01-1.46-3.53V11.8h3.47v14.52c0 .87.48 1.31 1.46 1.31h.33v2.81zm48.94-11.5a5.1 5.1 0 014.25-2.14c.29 0 .58.05.86.14v3.76c-.55-.1-1.11-.18-1.67-.2a3.23 3.23 0 00-3.26 2.15c-.16.44-.22.91-.18 1.38v6.51h-3.48V17.05h3.48v1.88zm-19.09-1.89l-6.48 13.5h-1.65l-6.49-13.5h3.63l3.69 7.66 3.66-7.66h3.64zM34.8 30.45a2.3 2.3 0 01-1.71-.72 2.84 2.84 0 01-.67-2.03V11.78h1.68v15.98c-.01.32.06.64.21.93.08.07.18.13.29.16.11.03.22.04.33.03h.46v1.55h-.59v.02zM12.86.55L1.73 6.75a2.63 2.63 0 00-1.32 2.3V21.6a2.63 2.63 0 001.32 2.26l11.13 6.21a2.73 2.73 0 002.66 0l11.13-6.2a2.62 2.62 0 001.32-2.26V9.05a2.55 2.55 0 00-1.32-2.24L15.52.54C15.12.31 14.66.2 14.2.2c-.47 0-.93.11-1.34.34zm46.97 17.74a5.4 5.4 0 00-3.75 1.55 5.2 5.2 0 00-1.56 3.75 5.22 5.22 0 001.56 3.75 5.3 5.3 0 003.75 1.55 6.7 6.7 0 004.56-1.55v-7.43a6.67 6.67 0 00-4.56-1.56v-.06zm15.28-.02a5.22 5.22 0 00-3.75 1.56 5.22 5.22 0 000 7.49 5.22 5.22 0 003.75 1.56 6.65 6.65 0 004.56-1.56v-7.46a6.82 6.82 0 00-4.56-1.56v-.03zm20.34 8.18a3.61 3.61 0 005.9-1.29c.18-.49.25-1 .22-1.52a3.61 3.61 0 00-2.14-3.56 3.61 3.61 0 00-3.98.73 3.57 3.57 0 00-1.14 2.83 3.66 3.66 0 001.14 2.81zm-82.32.75l-8.92-5.04a2.08 2.08 0 01-1.08-1.76V10.3c.01-.37.11-.73.3-1.05.18-.32.45-.58.78-.75l8.92-5.04a2.28 2.28 0 012.13 0l8.91 5.04a2.09 2.09 0 011.14 1.8v10.1a2.1 2.1 0 01-1.07 1.81l-8.98 5a2.18 2.18 0 01-2.13 0zm.26-20.79l-6.75 3.77a1.57 1.57 0 00-.8 1.35v7.6a1.56 1.56 0 00.8 1.37l6.75 3.8c.24.14.52.21.81.21.28 0 .55-.08.79-.22l6.76-3.79a1.56 1.56 0 00.79-1.37v-7.6c0-.28-.07-.55-.21-.79a1.56 1.56 0 00-.58-.56l-6.76-3.77a1.6 1.6 0 00-.78-.2c-.27 0-.54.07-.77.2h-.05zm25.43 16.44a5.26 5.26 0 015.52-4.5 4.8 4.8 0 014.69 2.68c.28.56.45 1.18.5 1.82H38.82zm90.76-.36a2.75 2.75 0 00-1.1-1.9 3.78 3.78 0 00-4.24.01 2.69 2.69 0 00-1.17 1.9h6.51zM13.65 21.3l-4.46-2.53a1.1 1.1 0 01-.39-.38 1.07 1.07 0 01-.14-.52v-5.04a1.01 1.01 0 01.53-.9l4.46-2.52a1.1 1.1 0 011.08 0l4.46 2.52a1.02 1.02 0 01.53.9v5.04c0 .18-.05.36-.14.52a1.1 1.1 0 01-.39.38l-4.46 2.52a1.3 1.3 0 01-1.08 0zm.27-9l-2.29 1.3a.6.6 0 00-.2.18.57.57 0 00-.08.28v2.58c0 .1.03.2.08.27.05.08.12.15.2.2l2.29 1.28c.09.03.19.03.28 0 .09.03.18.03.26 0l2.31-1.29a.6.6 0 00.19-.2.48.48 0 00.07-.26v-2.58a.5.5 0 00-.07-.27.6.6 0 00-.19-.2l-2.35-1.29a.61.61 0 00-.27 0 .45.45 0 00-.28 0h.05z"></path>
          </svg>

        <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewbox="0 0 119 39">
            <path fill="currentColor" d="M19.63.63a18.86 18.86 0 000 37.7 18.86 18.86 0 000-37.7zm0 .68a18.18 18.18 0 010 36.33 18.18 18.18 0 010-36.33zm0 1.93a16.25 16.25 0 110 32.5 16.25 16.25 0 010-32.5zm90.43 21.72l-5.43-9.41h3.22l3.7 6.65 3.44-6.65h3.15l-9.62 17.86h-3.18l4.72-8.45zM59.64 11.5l-2.35 1.33a3.78 3.78 0 00-1.25-1.42c-.4-.25-.94-.38-1.6-.38-.8 0-1.46.22-1.99.66-.53.43-.8.96-.8 1.6 0 .9.7 1.63 2.09 2.18l1.9.75c1.56.6 2.7 1.32 3.41 2.2a4.75 4.75 0 011.08 3.18c0 1.69-.58 3.09-1.76 4.19a6.2 6.2 0 01-4.4 1.66 6.02 6.02 0 01-4.1-1.41 6.4 6.4 0 01-2-3.99l2.93-.61c.12 1.08.36 1.82.69 2.22.59.8 1.45 1.2 2.6 1.2.9 0 1.65-.29 2.24-.87.6-.58.9-1.31.9-2.2 0-.35-.06-.68-.17-.98a2.5 2.5 0 00-.47-.81c-.23-.25-.5-.5-.85-.7a9.63 9.63 0 00-1.24-.63l-1.85-.74c-2.61-1.06-3.93-2.61-3.93-4.65 0-1.38.55-2.54 1.64-3.46a6.1 6.1 0 014.12-1.4c2.2 0 3.92 1.03 5.16 3.08zm14.43 10.46h-8.65c.08.95.4 1.7.97 2.27.58.55 1.3.83 2.19.83.7 0 1.27-.16 1.72-.48.45-.31.96-.9 1.52-1.76l2.37 1.26c-.37.6-.75 1.1-1.16 1.54a5.75 5.75 0 01-4.54 1.83c-1.8 0-3.25-.56-4.34-1.66a6.11 6.11 0 01-1.64-4.45c0-1.83.53-3.3 1.58-4.44a5.62 5.62 0 014.25-1.67c1.77 0 3.18.53 4.21 1.62 1.02 1.08 1.53 2.57 1.53 4.48v.63zm25.86-14.9h2.8v20.06h-2.8V25.9a5.3 5.3 0 01-3.73 1.55 5.42 5.42 0 01-4.12-1.74 6.3 6.3 0 01-1.62-4.42 6.1 6.1 0 011.62-4.32 5.3 5.3 0 014.05-1.74 5.2 5.2 0 013.8 1.66V7.05zm-22.81 8.49h2.8v1.06a4.63 4.63 0 013.3-1.38c1.4 0 2.5.42 3.27 1.27.69.72 1.03 1.9 1.03 3.52v7.1h-2.8v-6.46c0-1.15-.17-1.93-.5-2.37-.33-.44-.9-.67-1.76-.67-.93 0-1.59.3-1.97.88-.38.58-.57 1.59-.57 3.03v5.59h-2.8V15.55zm-59.86 3.13H22l8.02 8.41H9.24l8.02-8.41zM8.8 11.86l6.82 6.82-6.82 6.81V11.86zm21.66 0l-6.82 6.82 6.82 6.81V11.86zm62.85 9.43c0 1.11.32 2.01.93 2.72.63.7 1.44 1.05 2.4 1.05 1.04 0 1.87-.34 2.5-1.02.64-.7.96-1.6.96-2.7 0-1.07-.32-1.97-.96-2.67a3.19 3.19 0 00-2.47-1.03c-.96 0-1.76.35-2.4 1.04-.64.7-.96 1.58-.96 2.61zm-22.1-1.52c-.38-1.42-1.33-2.13-2.81-2.13a2.9 2.9 0 00-1.76.57 2.86 2.86 0 00-1.02 1.56h5.6z"></path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewbox="0 0 191 27">
            <path fill="currentColor" fill-rule="nonzero" d="M137.01 15.1c0 3.8-2.13 6.43-5.42 6.43-2.65 0-3.67-1.75-3.67-1.75h-.05s.05.43.05 1.08v5.2h-3.07V12.1c0-.34-.22-.5-.52-.5h-.97V8.98h2.68c1.11 0 1.58.47 1.58 1.07v.43h.04s1.03-1.8 3.8-1.8c3.24 0 5.55 2.52 5.55 6.4zM37.68 5.52v17.54h.05c0 .9-.73 1.58-1.58 1.58H1.93a1.54 1.54 0 01-1.58-1.58V2.47c0-.86.72-1.58 1.58-1.58H36.1c.53 0 .98.25 1.26.62C32.93 8.37 26.06 14.66 19 14.5a13.2 13.2 0 01-8.11-2.85A12.84 12.84 0 016.4 4.29h-.77a1.72 1.72 0 00-1.7 1.97l.12.73a15.3 15.3 0 0014.97 12.63c6.22 0 12.86-3.96 18.65-14.1zm107.48 3.16c3.75 0 6.73 2.69 6.73 6.45 0 3.79-2.98 6.44-6.73 6.44-3.72 0-6.7-2.65-6.7-6.44 0-3.8 2.98-6.45 6.7-6.45zm-31.32 8.67s1.58 1.78 3.67 1.78c.94 0 1.66-.38 1.66-1.18 0-1.75-6.48-1.72-6.48-5.68 0-2.48 2.22-3.59 4.78-3.59 1.66 0 4.3.56 4.3 2.56v1.28h-2.69v-.6c0-.6-.84-.84-1.53-.84-1.06 0-1.83.38-1.83 1.1 0 1.92 6.52 1.54 6.52 5.63 0 2.3-2.04 3.76-4.73 3.76-3.37 0-5.12-2.18-5.12-2.18l1.45-2.04zm55.89 0s1.58 1.78 3.67 1.78c.93 0 1.67-.38 1.67-1.18 0-1.75-6.5-1.72-6.5-5.68 0-2.48 2.23-3.59 4.8-3.59 1.65 0 4.3.56 4.3 2.56v1.28h-2.7v-.6c0-.6-.84-.84-1.53-.84-1.06 0-1.83.38-1.83 1.1 0 1.92 6.52 1.54 6.52 5.63 0 2.3-2.04 3.76-4.69 3.76-3.37 0-5.12-2.18-5.12-2.18l1.41-2.04zm15.7-8.67c3.5 0 5.42 2.56 5.42 5.8 0 .35-.09 1.15-.09 1.15h-8.44a3.51 3.51 0 003.67 3.29c1.96 0 3.45-1.36 3.45-1.36l1.28 2.13s-1.88 1.83-4.95 1.83a6.32 6.32 0 01-6.6-6.44c.04-3.76 2.6-6.4 6.26-6.4zM54.83 3.88c4.19 0 6.23 2.16 6.23 2.16l-1.8 2.27s-1.78-1.53-4.38-1.53c-2.95 0-5.5 2.34-5.5 5.8 0 3.7 2.55 6 5.58 6a6.2 6.2 0 004.35-1.78v-1.28c0-.34-.21-.5-.5-.5h-1.03v-2.7h2.77c1.15 0 1.63.47 1.63 1.62v7.3h-2.7v-.81c0-.34.05-.73.05-.73h-.05s-1.83 1.83-5.03 1.83c-4.48 0-8.32-3.4-8.32-8.91a8.56 8.56 0 018.7-8.74zm15.23 4.81c3.5 0 5.42 2.56 5.42 5.8 0 .35-.08 1.15-.08 1.15h-8.45a3.52 3.52 0 003.67 3.29 5.74 5.74 0 003.46-1.36l1.27 2.13s-1.87 1.83-4.95 1.83a6.32 6.32 0 01-6.6-6.44c.04-3.76 2.6-6.4 6.26-6.4zm35.33 0c3.5 0 5.42 2.56 5.42 5.8 0 .35-.09 1.15-.09 1.15h-8.45a3.52 3.52 0 003.68 3.29c1.96 0 3.45-1.36 3.45-1.36l1.28 2.13s-1.87 1.83-4.94 1.83c-4.06 0-6.62-2.94-6.62-6.44.04-3.76 2.6-6.4 6.27-6.4zm-21.84 9.99c-.85 0-2.43-.3-2.43-2.3v-5h2.76v-1.1c0-.9-.38-1.3-1.27-1.3h-1.5V5.67h-2.98v3.33h-1.67v2.43h1.58v5.34c0 4.1 3.42 4.6 5.12 4.6.55 0 .94-.08.94-.08v-2.7c0 .05-.22.1-.55.1zm8.4-14.55c3.09.01 5.3 1.93 5.3 5.16 0 3.07-2.14 4.36-2.86 4.53v.03s.5.26.84.86l1.67 3.28c.25.52.68.56 1.2.56h.3v2.69h-1.62c-1.29 0-1.84-.21-2.4-1.29l-2.17-4.3c-.34-.68-.72-.8-1.62-.8H89v6.39h-3.16V4.13h6.1zm62.21 7.97c0-.34-.17-.5-.52-.5h-.98V8.98h2.82c1.07 0 1.62.52 1.62 1.36v.35c0 .25-.04.51-.04.51h.04a4.7 4.7 0 014.36-2.56c2.72 0 4.26 1.4 4.26 4.65v4.78c0 .34.17.5.51.5h.98v2.57h-2.9c-1.15 0-1.62-.46-1.62-1.62v-5.54c0-1.5-.38-2.52-1.92-2.52a3.34 3.34 0 00-3.28 2.52c-.17.5-.26 1.06-.26 1.61v5.64h-3.03V12.1h-.04zm-9 6.83c2 0 3.66-1.54 3.66-3.84a3.68 3.68 0 00-3.66-3.84c-1.97 0-3.63 1.58-3.63 3.84 0 2.3 1.66 3.84 3.63 3.84zm-14.25 0c1.8 0 3.07-1.5 3.07-3.84 0-2.43-1.41-3.8-3.07-3.8-2.06 0-3.07 1.88-3.07 3.8-.05 2.69 1.44 3.84 3.07 3.84zM72.37 13.5c-.04-1.44-1.07-2.47-2.3-2.47-1.59 0-2.7.94-3 2.47h5.3zm115.37 0c-.05-1.44-1.07-2.47-2.3-2.47-1.59 0-2.7.94-3 2.47h5.3zm-80.04 0c-.05-1.44-1.07-2.47-2.31-2.47-1.58 0-2.69.94-2.98 2.47h5.29zm-16.21-1.36c1.57 0 2.51-.98 2.51-2.69 0-1.67-.94-2.64-2.48-2.64h-2.55v5.33h2.52z"></path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewbox="0 0 200 53">
            <g fill="currentColor">
              <path fill-rule="nonzero" d="M20.752 38.079c7.468 0 13.241-5.655 13.241-12.631 0-6.536-5.423-10.527-9.015-10.527-5.002 0-9.011 3.518-9.582 8.74-.105.968-.87 1.779-1.841 1.772a585.097 585.097 0 0 0-5.442-.02c-.64.003-1.168-.517-1.136-1.157.224-4.53 1.735-8.765 4.616-12.019C14.796 8.621 19.458 6.5 24.978 6.5c9.274 0 18.03 8.447 18.03 18.948 0 11.627-9.611 21.052-22.059 21.052-8.876 0-17.817-5.815-20.938-13.944a.17.17 0 0 1-.008-.093c.041-.242.124-.462.205-.678.119-.314.235-.621.217-.976l-.053-1.133a1.378 1.378 0 0 1 .797-1.315l.451-.21c.515-.24.88-.714.981-1.27a1.752 1.752 0 0 1 1.728-1.433c1.326 0 2.479.883 2.912 2.14 2.084 6.047 5.398 10.49 13.51 10.49ZM185.847 20.472c-1.654 0-2.162-.99-2.162-2.105 0-1.18.413-2.106 2.162-2.106 1.75 0 2.163.926 2.163 2.106 0 1.116-.445 2.105-2.163 2.105ZM155.657 34.163v-8.198l-2.325-.01V25c0-1.039.842-1.88 1.878-1.875l.447.003v-3.477l3.721-1.052v4.529h3.372v.963a1.872 1.872 0 0 1-1.87 1.874h-1.502v7.719c0 1.188.672 1.605 1.538 1.748 1.018.17 1.866.91 1.866 1.945v1.41c-3.524 0-7.125-.156-7.125-4.624Z"></path>
              <path d="M82.249 22.775c-3.722-.096-8.302 2.264-8.302 8.164 0 5.804 4.58 8.1 8.302 8.005 3.815.095 8.365-2.201 8.365-8.005 0-5.9-4.55-8.26-8.365-8.164Zm.028 13.272c-2.704 0-4.623-1.975-4.623-5.228 0-3.094 1.92-5.132 4.624-5.132 2.702 0 4.6 2.034 4.6 5.128 0 3.253-1.899 5.232-4.601 5.232Z"></path>
              <path fill-rule="nonzero" d="M100.387 22.81c3.244 0 6.615.893 6.615 7.27v8.548h-2.074c-1.033 0-1.87-.84-1.87-1.876v-6.99c0-3.03-1.112-4.178-3.054-4.178-1.081 0-2.48.83-3.148 1.499v9.669a1.873 1.873 0 0 1-1.87 1.876h-1.883V23.192h2.099a1.6 1.6 0 0 1 1.558 1.244c.955-1.053 2.195-1.627 3.627-1.627ZM111.255 23.164c.79 0 1.496.499 1.761 1.245l3.406 9.567 3.405-9.567a1.87 1.87 0 0 1 1.761-1.245h2.69l-5.547 14.243a1.87 1.87 0 0 1-1.742 1.193h-2.38l-6.043-15.436h2.689Z"></path>
              <path d="M138.981 37.85c-1.176.48-3.564 1.117-6.044 1.117-4.357 0-7.694-2.52-7.694-8.196 0-5.104 3.234-7.832 7.178-7.832 4.868 0 6.944 3.276 6.728 7.736-.045.921-.845 1.594-1.765 1.594h-8.39c.19 2.487 2.003 3.795 4.389 3.795.936 0 1.921-.048 3.101-.27 1.25-.233 2.497.66 2.497 1.937v.12Zm-3.201-8.197c.256-2.441-1.387-3.78-3.359-3.78s-3.301 1.484-3.428 3.78h6.787Z"></path>
              <path fill-rule="nonzero" d="M144.105 23.196c.71 0 1.33.488 1.498 1.18 1.272-.956 2.862-1.563 3.976-1.563.096 0 .7 0 1.653.128v1.655c0 .89-.767 1.567-1.653 1.567-1.018 0-2.514.382-3.69 1.052v11.417h-3.785V23.196h2.001ZM187.755 36.712V23.151h-1.882c-1.034 0-1.87.84-1.87 1.874v13.562h1.883c1.032 0 1.87-.84 1.87-1.875ZM192.875 34.195v-8.196h-2.513v-.964c0-1.035.837-1.875 1.87-1.875h.643v-3.476l3.722-1.052v4.528h3.37v.964a1.873 1.873 0 0 1-1.869 1.875h-1.501v7.717c0 1.188.672 1.605 1.537 1.75 1.017.169 1.865.907 1.865 1.943v1.41c-3.524 0-7.124-.155-7.124-4.624ZM55.349 27.75c.024-7.217 5.452-11.25 10.66-11.25 2.893 0 5.546.625 7.728 2.188l-.883 1.213a2.282 2.282 0 0 1-2.643.766c-1.316-.522-2.554-.632-3.478-.632-4.262 0-7.476 2.746-7.499 7.714.023 4.97 3.237 7.755 7.499 7.755.924 0 2.162-.11 3.478-.632.932-.37 2.052-.087 2.643.727l.883 1.213C71.555 38.375 68.902 39 66.009 39c-5.208 0-10.636-4.033-10.66-11.25ZM167.394 16.612c1.032 0 1.87.84 1.87 1.876v8.596l7.654-9.644c.352-.48.91-.763 1.506-.763h3.4l-8.655 10.958 8.655 10.952h-3.4a1.866 1.866 0 0 1-1.506-.763l-7.654-9.641v8.529a1.873 1.873 0 0 1-1.87 1.875h-1.98V16.612h1.98Z"></path>
            </g>
          </svg>

      </div>
      <?php /* ?>
      <div class="flexb-justify-center hide-desk">
        <a href="#" class="botao inverso azul"><?php get_template_part('parts/produto/bt','comprar'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
        <a href="#" class="botao ml-20px azul"><?php get_template_part('parts/produto/bt','aovivo'); ?> <i class="fa-light fa-arrow-right-long bt-seta"></i></a>
      </div>
      <?php */ ?>
    </div>
  </div>