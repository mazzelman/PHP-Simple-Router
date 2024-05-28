<!-- views/layout.php -->
<?php require 'partials/header.php'; ?>

<?php
// check if the sidebar is enabled to change the class of the main content
function getContentClass($sidebar) {
  return $sidebar ? 'layout--flex' : 'layout';
}
?>

<div class="<?php echo getContentClass($sidebar); ?>">
  <main class="content<?php echo $sidebar ? '--sidebar' : ''; ?>">
    <?php echo $content; ?>
  </main>

  <?php if ($sidebar): ?>
    <aside class="sidebar">
      <?php require 'partials/sidebar.php'; ?>
    </aside>
  <?php endif; ?>
</div>

<?php require 'partials/footer.php'; ?>

