<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>create</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url('../inc/img/background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        /* background: 10px; */
    }

      #form{
        display: flex;
        flex-direction: column;
        width: 30%;
        margin: 7% 12%;
        float: right;
      }
      #form h3{
       background-color: aliceblue;
       width: max-content;
       margin: 0;
       border-radius: 6px 6px 0 0;
       padding: 5px;
      }
    form {
        
        border-radius: 0 6px;
        padding: 5px;
        background-color: aliceblue;

    }

    .form-control {
        display: inline;
        width: 65%;
    }
    label {
        font-weight: 700;
        width: 33%;
    }

    form input {
        width: 70%;
        /* margin: 1em; */
        line-height: 26px;
        font-size: large;
        display: inline-block;
    }
    .mb-3{
        /* display: none; */
        margin: 1em 7%;
    }
    .mb-3.text {
    display: flex;
}

    textarea {
        width: 65%;
        margin:auto;
        align-self: center;
        height: 26px;
       max-height: 200px;
    }

    form select {
        width: fit-content;
        align-self: center;
    }

    .option{
        display: flex;
    }

    .option select{
        margin: auto;
        width: 65%;
    }

    [type=submit]{
    /* display: none; */
    max-width: fit-content;
    margin: 5px 1px 5px 70%;
    }
</style>

<body>
    <!-- <div id="form">
        <form action="create_pro.php" method="post" name='reg' onsubmit="return link()">

            <input type="text" name="first_name" />
            <label for='first_name'>First_name</label>

            <input type="text" name="last_name" />
            <label for='last_name'>last_name</label>

            <input type="email" name="email" />
            <label for='email'>email</label>

            <textarea name="address"></textarea>
            <label for='address'>address</label>

            <label for='phone_number'>phone_number</label>
            <input type="number" name="phone_number" />

            <label for="status">status</label>
            <select name="status">
                <option value="1">Active</option>
                <option value="0">inactive</option>
            </select>

            <input type="submit" value="submit" />
        </form>

    </div> -->
    <div id='form'>
    <h3>Login</h3>
    <form action="create_pro.php" method="post">
        <div class="mb-3">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control" name="first_name">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last name</label>
            <input type="text" class="form-control" name="last_name">
        </div>

                   
        <div class="mb-3">
            <label for='email' class="form-label">email</label>
        <input type="email" name="email"  class="form-control"/>
        </div>

        <div class="mb-3 text">
            <label for="address" class="form-label">Address</label>
            <textarea name="address"></textarea>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone #</label>
            <input type="tel" class="form-control" name="phone_number">
        </div>

        <div class="mb-3 option">
        <label for="status">status</label>
            <select name="status">
                <option value="1">Active</option>
                <option value="0">inactive</option>
            </select>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


    <script>
        function link() {
            if (reg.first_name.value.length < 3) {
                return false
            }
        }
    </script>
</body>

</html>