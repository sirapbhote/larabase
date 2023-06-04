<x-app-layout>
    <div class="card">
        <div class="card-body">
        <h1>User Registration Form</h1>
        <hr/>
    <form method="post" action="/inventory/Category/add-post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
 </div>
    <div class="form-group">
        <label for="code">Code</label>
        <input type="text" name="code" class="form-control" required>
 </div>
    <div class="form-group">
        <button
           class="btn btn-success" >
           Save
        </button>
    </div>

</form>
</x-app-layout> 