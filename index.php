<!doctype html>

<html>
<head>
    <title>HelloDB</title>
    <meta charset="utf-8"/>
    <link href="style.css" type="text/css" media="all" rel="stylesheet"/>
</head>

<body>

<?php
if (empty($_POST)) { ?>

    <form method="POST" action="response.php">

        <table class="table_style">

            <tr>
                <td>
                    <label for="inpHost">Host</label>
                </td>
                <td>
                    <input type="text" name="host" id="inpHost" required/>
                </td>

            </tr>

            <tr>
                <td>
                    <label for="inpUsername">Username</label>
                </td>
                <td>
                    <input type="text" name="username" id="inpUsername" required/>
                </td>
            </tr>

            <tr>

                <td>
                    <label for="inpPassword">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="inpPassword">
                </td>

            </tr>

            <tr>

                <td>
                    <label for="inpDatabase">Database</label>
                </td>

                <td>
                    <input type="text" required name="db" id="inpDatabase">
                </td>

            </tr>

            <tr>
                <th colspan="2">
                    <input type="submit">
                </th>
            </tr>

        </table>

    </form>

<?php } else { ?>


<?php } ?>


</body>

</html>