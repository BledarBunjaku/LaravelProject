<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel form</title>    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h3 class="text-center">Please, add new article:</h3>

            @if(Session::get('success'))
            <div class='alert alert-success'>
            {{Session::get('success')}}
            </div>
            @endif

            @if(Session::get('fail'))
            <div class='alert alert-danger'>
            {{Session::get('success')}}
            </div>
            @endif

            <form action='add' method='POST'>

            @csrf

                <div class="form-group">
                        <label  for="">Select an title from list:</label>
                            <select name='title' class="form-control" >
                                <option value='Title 1'>Title 1</option>
                                <option value='Title 2'>Title 2</option>
                                <option value='Title 3'>Title 3</option>
                                <option value='Title 4'>Title 4</option>
                            </select>
                </div>

                <div class="form-group">
                    <label for="">Select an article from list:</label>
                        <select name='status' class="form-control"  >
                            <option value='Status 1'>Status 1</option>
                            <option value='Status 2'>Status 2</option>
                            <option value='Status 3'>Status 3</option>
                        </select>
                </div>

                
                <div class="form-group">
                    <label for="">Date is:</label>
                    <input type="datetime-local" name='date'>  
                </div>

                <div class='form-group'>
                    <button type='submit' class='btn btn-primary btn-block'>Save</button>
                </div>
                <!-- <input type="submit" value="Submit Form" /> -->
            </form>
        </div>
    </div>
</div>

   
</body>
</html>