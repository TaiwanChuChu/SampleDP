<form method="post" action="{{ route('a01110.stroe') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
