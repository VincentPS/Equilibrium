<div class="container">
    <h1>NoteController/edit/:note_id</h1>

    <div class="box">
        <h2>Edit a note</h2>

        <?php $this->renderFeedbackMessages(); ?>

        <?php if ($this->note) { ?>
            <form method="post" action="<?php echo Config::get('URL'); ?>note/editSave">
                <label>Change text of note: </label>
                <input type="hidden" name="note_id" value="<?php echo htmlentities($this->note->note_id); ?>" />
                <input type="text" name="note_text" value="<?php echo htmlentities($this->note->note_text); ?>" />
                <input type="submit" value='Change' />
            </form>
        <?php } else { ?>
            <p>This note does not exist.</p>
        <?php } ?>
    </div>
</div>
