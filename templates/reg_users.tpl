{* Smarty *}

<!DOCTYPE html>
<html>
<head>
    <title>{$title}</title>
    <link href="../includes/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="center">
        <h1>Registered users</h1>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>email</td>
                    <td>password</td>
                </tr>
            </thead>
            {foreach from=$users item=user}
                <tr>
                    <td>{$user.id}</td>
                    <td>{$user.email}</td>
                    <td>{$user.password}</td>
                </tr>
            {/foreach}
        </table>
    </div>
</body>
</html>


