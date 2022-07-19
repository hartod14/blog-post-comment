<div class="bg-light">
    <div class="row justify-content-center align-items-center p-3">
        <div class="col-md-6 mb-3">
            <form method="POST" action="/home" class="">
                @csrf
                <div class="mb-3 mt-4">
                    <label for="body" class="form-label">Create Post</label>
                    <textarea type="text" name="body" class="form-control" id="body" rows="3" placeholder="update your post here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>
