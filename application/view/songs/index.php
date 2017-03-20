<div class="container">
    <h1>Books</h1>
    <h2>You are in the View: application/view/song/index.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div class="box">
        <h3>Add a Book</h3>
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <label>Book Name</label>
            <input type="text" name="artist" value="" required />
            <label>Revision</label>
            <input type="text" name="track" value="" required />
            <label>Release Year</label>
            <input type="text" name="track" value="" required />
            <label>Description</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of Books: <?php echo $amount_of_books; ?></h3>
        <h3>Amount of Books (via AJAX)</h3>
        <div id="javascript-ajax-result-box"></div>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of Books via Ajax (will be displayed in #javascript-ajax-result-box ABOVE)</button>
        </div>
        <h3>List of Books (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Book Name</td>
                <td>Revision</td>
                <td>Release year</td>
                <td>Description</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->id)) echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->bookname)) echo htmlspecialchars($book->bookname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->revision)) echo htmlspecialchars($book->revision, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->releaseyear)) echo htmlspecialchars($book->releaseyear, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->description)) echo htmlspecialchars($book->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'books/deletebook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'books/editbook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
