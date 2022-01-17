export default {
  init() {
    // JavaScript to be fired on all pages

        const open_menu = document.querySelectorAll('.toggle-menu');
        const mega_menu = document.querySelector('#popout-menu');
        const bg_overlay = document.querySelector('.bg-overlay');
        const mega_menu_close = document.querySelector('#close');

        open_menu.forEach(toggle => {
            toggle.addEventListener('click', () => {
                mega_menu.classList.add('active');
                bg_overlay.classList.add('active');
            })
        });

        mega_menu_close.addEventListener('click', () => {
            bg_overlay.classList.remove('active');
            mega_menu.classList.remove('active');
        });

        bg_overlay.addEventListener('click', () => {
            bg_overlay.classList.remove('active');
            mega_menu.classList.remove('active');
        });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
