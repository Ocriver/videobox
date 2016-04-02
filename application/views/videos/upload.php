<h2><?php echo $title; ?></h2>

<?php echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>

<?php echo form_open('videos/upload'); ?>

<label for="title">Titulo</label>
<input type="input" name="title" /><br />

<label for="text">Descripcion</label>
<textarea name="text"></textarea><br />

<label for="name">Nombre Archivo</label>
<textarea name="name"></textarea><br />

<label for="mpeg-dash">¿Utilizar Mpeg-Dash?</label>
<input type="checkbox" name="mpeg-dash" value="1" />

<input type="submit" name="submit" value="Upload Video" />

</form>