OurSpace updated WordPress theme
==================================

INSTALL
1. Back up your existing theme folder before replacing anything.
2. In WordPress Dashboard > Appearance > Themes, note which theme is active.
3. Extract this ZIP. Upload the folder `ourspace-updated-theme` into:
   wp-content/themes/
   (You may rename the folder to `my-custom-portfolio` if you prefer.)
4. If you replace an existing theme, copy these files into that existing theme folder instead of activating a duplicate. Keep the PHP files and the `assets` folder together.
5. In Dashboard > Appearance > Themes, activate the updated theme if needed.
6. For homepage: Settings > Reading > choose a static page if desired. `front-page.php` is the homepage template when this theme is active.
7. Clear cache (if any) and hard refresh the browser with Ctrl+F5.

IMPORTANT
- Keep a backup of your current theme and database.
- `style.css` must remain in the theme root; visual styling is in `assets/css/custom.css`.
- `functions.php` loads the CSS and JS with file modification timestamps to reduce stale browser cache.
- Existing content/pages are not changed by these style updates.
