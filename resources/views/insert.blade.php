<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>postGram</title>
</head>

<body>
    <h4 class="text-center">POST</h4>
    <form action="/store" method="POST">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label>title</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="mb-3">
                <label>author</label>
                <input type="text" name="author" class="form-control" />
            </div>
            <div class="mb-3">
                <input type="submit" value="Insert" name="submit" class="btn btn-primary"/>
            </div>
        </div>
    </form>
</body>

</html>