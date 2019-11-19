window.addEventListener('load', () => {
  function setBodyPadding() {
    const topbar = document.querySelector('#header .topbar');
    document.body.style.paddingTop = `${topbar.clientHeight}px`;
  }

  window.addEventListener('resize', setBodyPadding);
  setBodyPadding();


  // Hamburger
  createHamburger({
    burgerId: 'hamburger',
    navId: 'navigation',
    classBurgerActive: 'open',
    classNavActive: 'show',
  });
});
