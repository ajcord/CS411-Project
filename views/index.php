<?php include "../templates/header.php" ?>

<div class="jumbotron text-center">
    <h1>Can I Take This Class?</h1>

    <p>
        Find out whether you'll get into the classes you want at UIUC.
        <a href="about.php">Learn More</a>
    </p>
    
    <form class="form-horizontal" action="/prediction/" method="GET">
        <div class="form-group form-group-lg">
            <label for="course" class="col-sm-2 col-sm-offset-2 control-label">Class</label>
            <div class="col-sm-4">
                <input type="text" id="course" name="q" class="form-control" placeholder="Enter a class" />
            </div>
        </div>
        <div class="form-group form-group-lg">
            <label for="date" class="col-sm-2 col-sm-offset-2 control-label">Registration date</label>
            <div class="col-sm-4">
                <input type="date" id="date" class="form-control" name="date" placeholder="mm/dd/yyyy" />
            </div>
        </div>
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" id="search-button" class="btn btn-primary">Will I Get In?</button>
            </div>
        </div>
    </form>
</div>

<?php include "../templates/footer.php" ?>