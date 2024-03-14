<div>

    <x-flash-message />

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">
                New Post
            </h5> --}}
            <form wire:submit="save">
                {{-- <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" wire:model="form.title" rows="3">
                    @error('form.title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="mb-2">
                    <label for="body" class="visually-hidden">Body</label>
                    <textarea placeholder="What's on your mind?" class="form-control" id="body" wire:model="form.body"></textarea>
                    @error('form.body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-content-end">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>


</div>
