<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Viewer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="back">
       <a href="front.php" ><button id="bac"> <i class="fa fa-times" aria-hidden="true"></i></button></a>
        
    </div>
    
    <div class="container mt-5">
        <h1>Result Viewer</h1>
        <form method="post" action="marksheet.php" id="result-form">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="roll-number">Symbol No:</label>
                        <input type="number" class="form-control" id="symbol" name="mysymbol" placeholder="Enter symbol number" required >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="class">Date Of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="mydob" placeholder="Enter dob" required>
                    </div>
                </div>
                <div class="res">
                    <button type="submit" name="mybtn" class="btn btn-primary btn-block">View Result</button>
                </div>
            </div>
        </form>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
