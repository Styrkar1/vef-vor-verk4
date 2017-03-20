<div class="container">
    <h2>You are in the View: application/view/song/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a book</h3>
        <form action="<?php echo URL; ?>books/updatebook" method="POST">
            <label>Book Name</label>
            <input autofocus type="bookname" name="artist" value="<?php echo htmlspecialchars($book->bookname, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Revision</label>
            <input type="text" name="revision" value="<?php echo htmlspecialchars($book->revision, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Release Year</label>
            <input type="text" name="releaseyear" value="<?php echo htmlspecialchars($book->releaseyear, ENT_QUOTES, 'UTF-8'); ?>" />
            <label>Description</label>
            <input type="text" name="description" value="<?php echo htmlspecialchars($book->description, ENT_QUOTES, 'UTF-8'); ?>" required />
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_book" value="Update" />
        </form>
    </div>
</div>

