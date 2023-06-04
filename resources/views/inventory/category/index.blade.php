<x-app-layout>
    <div class="card">
    </div class="card body">
    <a href="/inventory/Category/add" class="btn btn-primary">
        User Registration
    </a>
    <hr />

    <table class="table table-striped table hover">

        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Name
                </th>
                <th>
                    Code
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($CategoeyList as $category)
            <tr>
                <td>
                    {{$category->id }}
                </td>
                <td>
                    {{$category->name }}
                </td>
                <td>
                    {{$category->code }}
                </td>
                <td> <a href="/inventory/Category/edit?categoryId={{ $category->id}}" class="btn btn-info">
                        Edit Me
                    </a>
                    <a href="/inventory/Category/delete?categoryId={{ $category->id}}" class="btn btn-info">
                        Delete Me 
                    </a>
                </td>
            </tr> 
            @endforeach



        </tbody>
    </table>
    </div>
    </div>
</x-app-layout>