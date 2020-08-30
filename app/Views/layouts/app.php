<!DOCTYPE html>
<html lang="en">
<?php require_once VIEWS.'/layouts/partials/app/_head.php'; ?>
<body>
<?php require_once VIEWS.'/layouts/partials/app/_nav.php'; ?>

  <aside class="sidebar cart-overlay" id="sidebar">
    
  </aside>

  <main>
    
    <?php include(VIEWS."/".$template); ?>

  </main>
   
   <div class="overlay"></div>
   <?php require_once VIEWS.'/layouts/partials/app/_footer.php'; ?>
   <script src="/assets/js/main.js"></script>
</body>
</html>
