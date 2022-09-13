<!doctype html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container text-center">
        <h1>Contact us any time</h1>
    </div>
    <div class="container">
        <form action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="Your name please" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Your valid email please" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Message</label>
              <textarea class="form-control" name="message" id="" rows="3" placeholder="Your query"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        </form>

    </div>
</main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
