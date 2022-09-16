<div>
    <div class="card">
        <div class="card-header text-center text-light bg-dark">
            <h3>BOOK ENTRY</h3>
        </div>
        <div class="card-body bg-dark">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="author">
                <label for="author">Author</label>
                @error('author')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" wire:model.debounce.500ms="email">
                <label for="email">Authors Email</label>
                @error('email')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="contact_number">
                <label for="contact_number">Contact No.</label>
                @error('contact_number')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <select title="genre" class="form-select" wire:model.defer="genre">
                    <option hidden="true">Select Genre</option>
                    <option selected disabled>Select Genre</option>
                        <option value="Drama">Drama</option>
                        <option value="Horror">Horror</option>
                        <option value="Romantic">Romantic</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Adventure">Adventure</option>
            </select>
            <label for="genre">Genre</label>
            @error('genre')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="year">
                <label for="year">Year</label>
                @error('year')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="addBook()">Add Book</button>
            </div>
        </div>
    </div>
</div>