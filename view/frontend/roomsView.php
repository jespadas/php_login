<?php
$title = 'Bienvenue';

ob_start();
?>
<table >
    <tr >
        <td>
            UNO
        </td>
        <td>
            DOS
        </td>
        <td>
            TRES
        </td>
        <td>
            CUATRO
        </td>
    </tr>
    <tr>
        <td>
            UNO
        </td>
        <td>
            DOS
        </td>
        <td>
            TRES
        </td>
        <td>
            CUATRO
        </td>
    </tr>
</table>
<form action="index.php" method="post">
<button class="login100-form-btn bottom" onclick="logout()">Log Out</button>
</form>
<?php
$content = ob_get_clean();

require("template.php");