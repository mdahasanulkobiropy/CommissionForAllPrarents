<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="continer">
        <div class="">
            <h2>Send Money for user</h2>
           <div>
                <form action="{{route('store.balance')}}" method="post">
                    @csrf
                    <select class="form-control" name="id">
                        @foreach ($users as $item)           
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <div class="col-8">
                        <label  class="form-control">Ammount</label>
                        <input  class="form-control" type="number" name="balance">
                    </div>
                    <div class="col-8">
                       <button type="submit">Submit</button>
                    </div>

                </form>
           </div>
           <table class="table">
            <thead>
                <tr>
                    <th>sl</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($users as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->balance}}</td>               
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>