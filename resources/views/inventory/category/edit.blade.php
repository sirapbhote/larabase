<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h1>User Data Edit</h1>
            <hr />
            <form method="post" action="/inventory/Category/edit-post">
                @csrf
                <input type="hidden" name="id" value="{{ $category->id }}">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" name="code" class="form-control" value="{{ $category->code }}" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">
                        Update
                    </button>
                </div>

            </form>
</x-app-layout>