<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <title>Document</title>
</head>

<body>


    <form class="form-group" method="POST" action="">
        <button class="btn btn-dark" type="submit">Submit</button>
        <div class="row py-2">
            <div class="col-md-4">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-4">
                <input type="file" name="file" class="form-control" placeholder="image">
            </div>
            <div class="col-md-4">
                <select type="text" name="types" class="form-control" placeholder="Skills">
                    <option value="softSkills">Soft Skills</option>
                    <option value="HardSkills"> Hard Skills</option>
                </select>
            </div>
        </div>
        <h6>Benefits</h6>
        <textarea name="benefits" id="benefits" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor 4.
        </textarea>

        <h6>Description</h6>
        <textarea name="description" id="description" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor 4.
        </textarea>

        <h6>FAQ</h6>
        <textarea name="faq" id="faq" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor 4.
        </textarea>


        <script>
            // Replace the <textarea id="editor1"> with a CKEditor 4
            // instance, using default configuration.
            CKEDITOR.replace('benefits');
            CKEDITOR.replace('description');
            CKEDITOR.replace('faq');
        </script>

    </form>




</body>

</html>
