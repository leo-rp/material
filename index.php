<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once( '_head.html' ); ?>
  </head>
  <body class="mdc-typography" ontouchstart="">
    <?php include_once( '_drawer.html' ); ?>
    <div class="mdc-drawer-app-content">
      <?php include_once( '_top-app-bar.html' ); ?>
      <!-- MAIN CONTENT //-->
      <main id="main-content" class="main-content">
        <div class="mdc-top-app-bar--fixed-adjust">
          <!-- list -->
          <section>
            <h3 class="app__title mdc-typography--headline6">Vos applications</h3>
            <div class="mdc-layout-grid">
              <div class="mdc-layout-grid__inner">

                <div class="mdc-layout-grid__cell">
                  <div class="mdc-card  app-card">
                    <div class="mdc-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 app-card__media " style="background-image: url('assets/incwo.png')">
                      </div>
                      <div class="app-card__primary" style="padding: 4px;">
                        <h2 class="app-card__title mdc-typography--headline6">Incwo</h2>
                        <h3 class="app-card__subtitle mdc-typography--subtitle2">Bureau virtuel</h3>
                      </div>                      
                    </div>
                  </div>
                </div>                 

                <div class="mdc-layout-grid__cell">
                  <div class="mdc-card  app-card">
                    <div class="mdc-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 app-card__media" style="background-image: url('assets/xterm.jpg');">                      
                      </div>
                      <div class="app-card__primary" style="padding: 4px;">
                        <h2 class="app-card__title mdc-typography--headline6">Xterm</h2>
                        <h3 class="app-card__subtitle mdc-typography--subtitle2">Bureau virtuel</h3>
                      </div>                      
                    </div>
                  </div>
                </div> 

                <div class="mdc-layout-grid__cell">
                  <div class="mdc-card  app-card">
                    <div class="mdc-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 app-card__media" style="background-image: url('assets/bv-256.jpg');">                      
                      </div>
                      <div class="app-card__primary" style="padding: 4px;">
                        <h2 class="app-card__title mdc-typography--headline6">WSS testing BO APP </h2>
                        <h3 class="app-card__subtitle mdc-typography--subtitle2">Bureau virtuel</h3>
                      </div>                      
                    </div>
                  </div>
                </div> 

                <div class="mdc-layout-grid__cell">
                  <div class="mdc-card  app-card">
                    <div class="mdc-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 app-card__media" style="background-image: url('assets/bv-256.jpg');">                      
                      </div>
                      <div class="app-card__primary" style="padding: 4px;">
                        <h2 class="app-card__title mdc-typography--headline6">incwo magento </h2>
                        <h3 class="app-card__subtitle mdc-typography--subtitle2">Bureau virtuel</h3>
                      </div>                      
                    </div>
                  </div>
                </div> 

                <div class="mdc-layout-grid__cell">
                  <div class="mdc-card  app-card">
                    <div class="mdc-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 app-card__media" style="background-image: url('assets/appli.jpg');">                      
                      </div>
                      <div class="app-card__primary" style="padding: 4px;">
                        <h2 class="app-card__title mdc-typography--headline6">Appli facturation </h2>
                        <h3 class="app-card__subtitle mdc-typography--subtitle2">Application de facturation </h3>
                      </div>                      
                    </div>
                  </div>
                </div> 

                <div class="mdc-layout-grid__cell">
                  <div class="mdc-card  app-card">
                    <div class="mdc-card__primary-action">
                      <div class="mdc-card__media mdc-card__media--16-9 app-card__media" style="background-image: url('assets/bv-256.jpg');">                      
                      </div>
                      <div class="app-card__primary" style="padding: 4px;">
                        <h2 class="app-card__title mdc-typography--headline6">Incwo</h2>
                        <h3 class="app-card__subtitle mdc-typography--subtitle2">Bureau virtuel</h3>
                      </div>                      
                    </div>
                  </div>
                </div> 


              </div>              
            </div>
          </section>


        </div>
      </main>
      <!-- MAIN CONTENT //-->
    </div>
    <?php include_once( '_dialogs.html.php' ); ?>
    <?php include_once( '_snackbar.html' ); ?>
    <script>
      if ( document.readyState === "loading" ) {
        document.addEventListener( "DOMContentLoaded", documentReady );
      } else {
        documentReady();
      }
    </script>
  </body>
</html>
