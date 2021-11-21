<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>postGram</title>
</head>

<body>
    <h4 class="text-center">All Posts</h4>
    <div class="container">
        <table class="table table-bordered shadow table-striped text-center">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Post</th>
                <th>Action</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->post_title}}</td>
                <td>{{$post->post_author}}</td>
                <td>
                    <a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
                    <a href="/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>