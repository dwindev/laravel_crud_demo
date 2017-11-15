<link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="/create/book" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Book Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input name="author" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <a href="/edit/book/{{ $book->id }}" class="btn btn-primary">edit</a>
                            <button onclick="toDelete('{{ $book->id }}')" data-toggle="modal" href='#modal-delete' class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure to delete?</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <form action="/delete/book" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="book-id">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toDelete (id) {
        $('#book-id').val(id)
    }
</script>
