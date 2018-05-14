<?php
    date_default_timezone_set('Europe/Copenhagen');
    include 'dph.inc.php';
    include 'comments.inc.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="site">
        <meta name="keywords" content="HTML,CSS">
        <meta name="author" content="Netanel Dorothea">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <title>index</title>
    </head>

    <body>
        <div class="img1">
            <h1>Massage Lounge</h1>
        </div>

        <section>
            <h2>wie zijn wij</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in. Distinctio provident dolorem modi cumque illo enim quidem tempora deserunt nostrum voluptate labore repellat quisquam quasi cum suscipit dolore ab consequuntur, ad porro earum temporibus. Laborum ad temporibus ex, omnis!</p>
        </section>

        <div class="img2">
            <h1>Onze specialiteiten</h1>
        </div>

        <section style="background-color:#d1c5b5;">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.</p>
            <a href="#">
                <div class="button_1">Reserveren</div>
            </a>
        </section>

        <div class="img3">
            <h1>Recensies</h1>
        </div>

        <div class="comment_section">

            <?php
            
            echo
            "<form class='typ_box' method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            
            <textarea class='typ' name='message' required></textarea>
            
            <button class='button' name='commentSubmit' type='submit'></button>
        </form>";
            
            echo getComments($conn);
        ?>

        </div>

        <div class="img4">
            <h1>Massage Lounge</h1>
        </div>
    </body>

    </html>
