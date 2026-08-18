# CLAUDE.md

## Project Type
This project is a custom WordPress theme for a site.

Agents must strictly follow the rules below.

---

## Stack & Environment (MANDATORY)
- WordPress (classic theme, no page builders)
- WooCommerce
- PHP 8.0+
- Advanced Custom Fields PRO (ACF PRO)
- WPForms (for forms and lead capture)
- LiteSpeed Web Server
- Linux hosting managed via cPanel (no WHM access)
- Development via Visual Studio Code
- Front-end designed in Webflow and exported as HTML to WordPress
- Styles written in Sass / SCSS with heavy use of CSS variables
- JavaScript: Vanilla JS only (no jQuery)

---

## Absolute Restrictions
- Do NOT install new plugins unless explicitly requested
- Do NOT modify the database schema
- Do NOT create custom database tables
- Do NOT use frameworks such as React, Vue, Bootstrap, Tailwind, Webpack, etc.
- Do NOT use jQuery

---

## Code Architecture Rules
- Prefer WordPress native functions and APIs
- Prefer hooks and filters over template overrides
- Keep code focused on performance, security, and minimal.
- Prioritize the front-end code when applying PHP code. If you need to change the HTML, explain why
- Avoid unnecessary abstractions
- Always prevent null or invalid values from breaking the UI
- Apply the ACF fields as instructed in the .json file in the /acf-json folder
- Apply internationalization strings inline in PHP code (do not convert them to variables). Always respect the textdomain in style.css

---

## Naming Conventions (MANDATORY)
- All WordPress functions must start with: `afc_`
- All custom Gutenberg blocks must start with: `afcblock_`

---

## CSS Rules
- Use Flexbox and Grid
- Media queries must follow:
  - 1440px
  - 991px
  - 767px
  - 479px
- Prefer semantic class naming (BEM or similar)
- Focus on legibility, spacing, and modular structure
- Avoid CSS frameworks

---

## JavaScript Rules
- Vanilla JS only
- Encapsulate logic using `DOMContentLoaded`, IIFE, or similar
- Use JS only for light interactions (toggles, tabs, sliders, class manipulation)
- Avoid global scope pollution

---

## theme.json Rules

### When to use theme.json vs CSS
- Prefer `theme.json` for anything that belongs to the design system: colors, typography, spacing, borders, shadows, layout dimensions
- Use CSS only when `theme.json` cannot express the rule, and always explain why
- Never use `!important` or overrides that break the editor experience

### Structural rules
- Never invent unsupported keys — use only officially documented properties
- Always maintain the correct `$schema` version
- Keep `settings` (design tokens and permissions) clearly separated from `styles` (visual application)
- Use `elements` and `blocks` only when strictly necessary — avoid excessive granularity
- Preset slugs must always be in `kebab-case`

### Units and values
- Prefer `rem` for all sizing; use `px` only when semantically justified
- Typography must always include correct font fallbacks
- Minimize font-size variations — avoid large sets of redundant presets

### Color and typography settings
Dominate and apply correctly:
- `color`: palette, gradients, duotone, custom, defaultPalette
- `typography`: fontFamilies, fontSizes, fluid typography
- `spacing`: spacingSizes, units, blockGap
- `layout`: contentSize, wideSize
- `border`, `shadow`, `dimensions`

### Styles
Apply correctly:
- Global styles: body, text, links
- Elements: h1–h6, link, button
- Specific blocks: `core/button`, `core/navigation`, `core/group`, `core/columns`, `core/image`, etc.
- Reference generated CSS custom properties via `var(--wp--preset--...)`

### Editor integrity
- Never disable native editor controls without explicit justification
- Always maintain legibility and contrast in the editor view
- Do not generate solutions that break the editing experience

### Checklist before delivering any theme.json output
- [ ] No duplication between `settings` and `styles`
- [ ] All preset slugs are `kebab-case` and consistent
- [ ] Units are coherent (`rem` preferred)
- [ ] Typography includes fallbacks
- [ ] Editor UI remains functional and readable
- [ ] No unnecessary presets or unused tokens

### Delivery format for theme.json requests
1. Start with a bullet summary of what will be changed and why
2. Deliver the full `theme.json` or targeted diff/snippet in a code block
3. Add external comments (outside the JSON) explaining:
   - Why each adjustment exists
   - How it affects front-end vs editor
   - Potential side effects
4. Close with "Notas rápidas" bullets: impacts, caveats, and next steps
5. If CSS is needed to complement the solution, deliver it minimally and explain why `theme.json` alone was insufficient

---

## Documentation & Comments

Documentation must be **concise**. Comment to orient, not to narrate.

- ACF docs reference: https://www.advancedcustomfields.com/resources/  
- Gutenberg Block Editor Handbook reference: https://developer.wordpress.org/block-editor/
- WPForms docs reference: https://wpforms.com/developers/

- Function docblocks: a single line saying **what the function does**. Do NOT add `@param`/`@return` tags, hook/filter call chains, ordering lists, or step-by-step breakdowns.
- Inline/variable comments: a **basic description** only. Do not explain the full HTML structure, restate what the code obviously does, or list everything that is included/excluded — unless explicitly requested.
- Add an inline comment only where the reasoning is non-obvious (a real gotcha, a fallback, a deliberate choice). When in doubt, leave it out.
- Section banners (`==== TÍTULO ====`) are kept, but their description text must stay short — one line, not a paragraph.

Example — go from this:

```php
/*
 * Exibe o cabeçalho de título em páginas internas, arquivos e busca.
 *
 * Incluídos:
 *  - Páginas internas sem template (is_page + not is_page_template)
 *  - Todos os arquivos: CPT, category, tag, taxonomia, autor, data (is_archive)
 *  - Resultados de busca (is_search)
 *
 * Excluídos:
 *  - Página inicial (is_front_page) — estrutura própria via front-page.php
 *  - ...
 */
```

to this:

```php
/*
 * Exibe o cabeçalho de título em páginas internas, arquivos e busca, CPTs. Exclui homepage, singles e páginas com template dedicado.
 */
```

### Language of Documentation

- All code comments and docblocks MUST be written in **Portuguese (pt-BR)**.
- Variable names, function names, hooks, and filters MUST remain in English (following WordPress standards).
- Inline comments should prioritize clarity for Portuguese-speaking developers.
- Do not mix languages inside the same comment block.
- The commit should not contain the co-authorship signature of any artificial intelligence, such as Claude Code, Codex, Cursor, Copilot, etc.