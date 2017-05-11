<?php BeginForm('contact_identity'); ?>

<div class="form-group">
	<label for="gender">Sexe</label>
    <select class="form-control" name="gender">
      <option <?php echo (strcasecmp($row["gender"], 'M') == 0 ? 'selected' : ''); ?>>M</option>
      <option <?php echo (strcasecmp($row["gender"], 'F') == 0 ? 'selected' : ''); ?>>F</option>
    </select>
</div>

<?php
AddTextBox($row, 'title', 'Titre', '');
AddTextBox($row, 'first_name', 'Prénom', '');
AddTextBox($row, 'last_name', 'Nom', '');

EndForm('contact_identity', '../controllers/contact_controller.php?type=update');
?>