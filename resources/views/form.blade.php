<!doctype html>
<html lang="en">

<head>
  <title>form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>


<body>

    <div class="container mt-5">
        <h1>Form</h1>
        <form action="{{Route('form')}}" class="form-group" method="post">

            @csrf
            <label for="name">name</label>
            <input type="name" class="form-control" name="name" value="{{old('name')}}">

            <span class="text-danger">
                @error('name')
                  {{$message}}
                @enderror
            </span>
            <br>

            <label for="email">email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">

            <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
            </span>
            <br>

            <label for="password">password</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}">

            <span class="text-danger">
                @error('password')
                  {{$message}}
                @enderror
            </span>
            <br>


            <input type="submit" class="btn btn-danger mt-4">

        </form>
    </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>

