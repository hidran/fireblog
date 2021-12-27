<div class='row'>
    <div class='col-md-6 push-md-3'>


        <h1>Create new post</h1>

        <form action="/post/<?= $post->id ?>/store" method='POST'>
            <input type='hidden' name='id' value="<?= $post->id ?>">
            <div class='form-group'>

                <label for='email'>Email</label>
                <input class='form-control'
                       name='email'
                       id='email' type='email' value="<?= $post->email ?>"
                       required>

            </div>
            <div class='form-group'>

                <label for='title'>Title</label>
                <input name='title' class='form-control' value="<?= $post->title ?>" type='text' id='title'
                       required>

            </div>
            <div class='form-group'>

                <label for='message'>Message</label>
                <textarea required name='message' class='form-control' id='message'>
            <?= $post->message ?>
        </textarea>

            </div>
            <div class="form-group text-md-center">
                <button class="btn  btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>
