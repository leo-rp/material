'use strict';

let snackbar;
let dialogBasic, dialogSimple, dialogConfirmation;



function documentReady() {
  const drawer = mdc.drawer.MDCDrawer.attachTo( document.getElementById( 'drawer' ) );
  const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo( document.getElementById( 'top-app-bar' ) );
  const listObjs = [].slice.call( document.querySelectorAll( '.mdc-list' ) );
  const buttonObjs = [].slice.call( document.querySelectorAll( '.mdc-button' ) );
  
  // For More Info : https://material.io/develop/web/components/auto-init/
  mdc.autoInit();
  
  topAppBar.setScrollTarget( document.getElementById( 'main-content' ) );
  topAppBar.listen( 'MDCTopAppBar:nav', () => {
    drawer.open = !drawer.open;
  } );
  
  
  
  listObjs.forEach( ( listObj ) => {
    mdc.list.MDCList.attachTo( listObj );
  } );
  
  buttonObjs.forEach( ( buttonObj ) => {
    mdc.ripple.MDCRipple.attachTo( buttonObj );
  } );
}
