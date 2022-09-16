<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card ">
            <div class="card-header bg-dark">
                <h3 class="text-danger">DELETE BOOK?</h3>
            </div>
            <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>TITLE</th>
                            <td>{{$this->book->title}}</td>
                        </tr>
                        <tr>
                            <th>AUTHOR</th>
                            <td>{{$this->book->author}}</td>
                        </tr>
                        <tr>
                            <th>GENRE</th>
                            <td>{{$this->book->genre}}</td>
                        </tr>
                        <tr>
                            <th>YEAR</th>
                            <td>{{$this->book->year}}</td>
                        </tr>
                        
                    </table>
            </div>
            <div class="card-footer bg-secondary">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-sm btn-danger" wire:click="deleteBook()">Delete</button>
                    <button class="btn btn-sm btn-warning mx-2" wire:click="back()" >Back</button>
                </div>
            </div>
        </div>

    </div>
</div>
