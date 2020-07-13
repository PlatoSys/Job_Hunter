<?php

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
    <table class="table Admin">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Company</th>
            <th scope="col">Labels</th>
            <th scope="col">Check Vacancies</th>
        </tr>
        </thead>
        <tbody>
    <?php $n = 1; ?>
    <?php foreach ($companies as $num => $query) : ?>
        <tr>
            <th scope="row"><?php echo $n ?></th>
            <td><?php echo "<img src='/Companylogos/$query[CompanyName].png'   width='50' height='50'>" ?>     <?php echo $query['CompanyName'];?></td>
            <td><?php echo implode(", ",$labels[$query['CompanyName']]); ?></td>
            <td>
                <form action='/company-vacancies' method='post'>
                    <input type="hidden" value="<?php echo $query['CompanyName'] ?>" name="ID">
                    <input type="submit" class="btn btn-info btn-lg"  value="Check Vacancies">
                </form>
            </td>
        </tr>
    <?php $n++; endforeach; ?>
        </tbody>
    </table>

</body>
</html>
