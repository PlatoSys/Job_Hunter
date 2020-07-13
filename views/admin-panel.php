<?php
$companies = new \app\database\database();
$companies = $companies->getCompanies();

$labels = ["IT","HR","Economics"]
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
    <button class="btn btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Add Company
    </button>
    <button class="btn btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
        Add Vacancy
    </button>
</p>
<div class="collapse Admin" id="collapseExample">
    <div class="card card-body btn-lg">
        <form action="/admin-panel" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Company">Enter Company Name</label>
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="companyname" placeholder="Enter Company">
                </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="post_image"
                       aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="collapse" id="collapseExample2">
    <div class="card card-body btn-lg">
        <form action="/admin-panel" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Company">Enter Vacancy Name</label>
                <input type="text" class="form-control" name="vacancyname" placeholder="Enter Company">
            </div>
            <div class="form-group">
                <label for="Company">Enter Vacancy Details</label>
                <textarea class="form-control" rows="25" cols="50"  name="vacancydetails" placeholder="Enter Vacancy Details"></textarea>
            </div>
            <div class="form-group">
                <label for="Company">Enter Salary or Range</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="salary" placeholder="Enter Salary">
            </div>
            <div class="form-group">
                <label for="Company">Enter City</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="city" placeholder="Enter City">
            </div>
            <div class="form-group">
                <label for="inputState">Choose Company</label>
                <select id="inputState" name="companynameforvacancy" class="form-control">
                    <option selected>Choose...</option>
                    <?php foreach ($companies as $num => $query) : ?>
                        <?php echo "<option>" . $query['CompanyName'] . "</option>" ?>
                    <?php      endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputState">Choose Label</label>
                <select id="inputState" name="label" class="form-control">
                    <option selected>Choose...</option>
                    <?php foreach ($labels as $label) : ?>
                        <?php echo "<option>" . $label . "</option>" ?>
                    <?php      endforeach ?>
                </select>
            </div>
            <div class="form-group ">
                <label for="example-date-input" class="col-form-label">Start Date</label><br>
                <input class="form-control" name="startdate" type="date" id="example-date-input">
            </div>
            <div class="form-group">
                <label for="example-date-input" class="col-form-label">End Date</label><br>
                <input class="form-control" name="enddate" type="date" id="example-date-input">
            </div>
            <div class="form-group">
                <label for="inputState">Choose Status</label>
                <select id="inputState" name="status" class="form-control">
                    <option selected>0</option>
                    <option>1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


</body>
</html>