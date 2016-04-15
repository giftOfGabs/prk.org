<div class="upcoming-events">
  <div class="section-header">
    <img src="/<?php print drupal_get_path('theme', 'ffb2014'); ?>/images/FFB_Icons_Calendar.png" alt="Upcoming Events">
    <h2>Upcoming Events</h2>
  </div>
  <div class="section-body <?php print $classes; ?>">
    <ul>
      <?php foreach ($view->style_plugin->rendered_fields as $delta => $item): ?>
        <li><a href="#"><?php print $item['title']; ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="events-link">
      <a href="/events">
        <div class="btn current-events-btn events-btn">Find an event near you</div>
      </a>
    </div>
  </div>
</div>