<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('videos/upload'); ?>

<label for="title">Titulo</label>
<input type="input" name="title" /><br />

<label for="text">Descripcion</label>
<textarea name="text"></textarea><br />

<label for="name">Nombre Archivo</label>
<textarea name="name"></textarea><br />

<input type="submit" name="submit" value="Upload Video" />

</form>