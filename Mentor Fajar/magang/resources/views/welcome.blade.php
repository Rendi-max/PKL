<!DOCTYPE html>
<html>
<head>
<title>Halaman Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /* Include the padding and border in an element's total width and height */
    * {
    box-sizing: border-box;
    }

    /* Remove margins and padding from the list */
    ul {
    margin: 0;
    padding: 0;
    }

    /* Style the list items */
    ul li {
    cursor: pointer;
    position: relative;
    padding: 12px 8px 12px 40px;
    list-style-type: none;
    background: #eee;
    font-size: 18px;
    transition: 0.2s;

    /* make the list items unselectable */
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    /* Set all odd list items to a different color (zebra-stripes) */
    ul li:nth-child(odd) {
    background: #f9f9f9;
    }

    /* Darker background-color on hover */
    ul li:hover {
    background: #ddd;
    }

    /* When clicked on, add a background color and strike out text */
    ul li.checked {
    background: #888;
    color: #fff;
    text-decoration: line-through;
    }

    /* Add a "checked" mark when clicked on */
    ul li.checked::before {
    content: '';
    position: absolute;
    border-color: #fff;
    border-style: solid;
    border-width: 0 2px 2px 0;
    top: 10px;
    left: 16px;
    transform: rotate(45deg);
    height: 15px;
    width: 7px;
    }

    /* Style the close button */
    .close {
    position: absolute;
    right: 0;
    top: 0;
    padding: 12px 16px 12px 16px;
    }

    .close:hover {
    background-color: #f44336;
    color: white;
    }

    /* Style the header */
    .header {
    background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
    padding: 30px 40px;
    color: black;
    text-align: center;
    }

    /* Clear floats after the header */
    .header:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Style the input */

    /* Style the "Add" button */
    .addBtn {
    padding: 10px;
    width: 25%;
    background: #d9d9d9;
    color: #555;
    float: left;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 0;
    }

    .addBtn:hover {
    background-color: #bbb;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: lime" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#" ><b>Navbar</b></a>
            <form class="d-flex" action="logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-none">Logout</button>
            </form>
        </div>
    </nav>
    <div id="myDIV" class="header mt-2">
        <h2 style="margin:5px">My To Do List</h2>
        <form action="{{ route('task.store') }}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" name="task" class="form-control" placeholder="Title..." required>
                <button type="submit" class="btn btn-info">Add</button>
            </div>
        </form>
    </div>
    <div style="margin:50px" class="card">
        <div class='card-tittle ms-2'>
            <h3 style="border-bottom: 1px solid black" class="me-2"> List acctivity </h3>
        </div>
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <tr>
                    <th>Activity</th>
                    <th class="d-flex">Opsion</th>
                </tr>
                    @foreach ($tasks as $task)
                         @if ($task->status == 0)
                        <tr>
                            <td>{{ $task->task }}</td>
                            <td class="d-flex ">
                                        <a href="{{ route('task.edit',$task->id_task) }}" class="btn btn-success me-1">Done</a>
                                        <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $task->id_task }}">
                                            Edit
                                        </button>
                                        <form action="{{ route('task.destroy',$task->id_task) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Remove</button>
                                        </form>
                            </td>
                        </tr>
                        {{-- Edit Modal --}}
                        <div class="modal fade" id="exampleModal{{ $task->id_task }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Activity</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('edittask.update', $task->id_task) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="modal-body">
                                        <input type="text" class="form-control" name="task"  id="" value="{{ $task->task }}" required>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                    @endforeach
            </table>
        </div>
        
    </div>
    <div style="margin:50px" class="card">
        <div class='card-tittle ms-2'>
            <h3 style="border-bottom: 1px solid black" class="me-2"> Last acctivity </h3>
        </div>
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <tr>
                    <th>Activity</th>
                    <th class="d-flex">Opsion</th>
                </tr>
                
                    @foreach ($tasks as $task)
                        @if ($task->status == 1)
                        <tr>
                            <td>{{ $task->task }}</td>
                            <td class="d-flex">
                                <form action="{{ route('task.update',$task->id_task) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning me-1">Undone</button>
                                </form>
                                <form action="{{ route('task.destroy',$task->id_task) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
