<link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
<br><br><br><br>
<div class="container">
        <form action="/update/book/{{ $book->id }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Book Name</label>
                <input value="{{ $book->name }}" name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input value="{{ $book->author }}" name="author" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>