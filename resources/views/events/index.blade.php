<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


            <div class="content">
                <div class="title m-b-md">
                   <h1>Events</h1>
                   <ul>

                   <?php foreach($events as $event): ?>
                    <li><?= $event ?></li>
                   <?php endforeach; ?>

                   </ul>

                </div>
            </div>

    </body>
</html>
