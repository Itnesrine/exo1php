<!DOCTYPE html>
<html>

<head>
    <title>Liste des étudiants</title>
</head>

<body>

    <?php
    $etudients = 1;
    ?>

    <table>
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Date de naissance</td>
                <td>Note1</td>
                <td>Note2</td>
                <td>Note3</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $listeEtudients = array(
                array("DUPONT", "Martin", "01/01/1990", "10", "11", "-"),
                array("DURAND", "Eric", "21/10/1980", "14", "07", "-"),
                array("DUCHAMP", "Christophe", "07/08/1990", "20", "16", "-")
            );

            for ($i = 0; $i < count($listeEtudients); $i++) {
            ?>
                <tr>
                    <td><?php echo $listeEtudients[$i][0]; ?></td>
                    <td><?php echo $listeEtudients[$i][1]; ?></td>
                    <td><?php echo $listeEtudients[$i][2]; ?></td>
                    <td><?php echo $listeEtudients[$i][3]; ?></td>
                    <td><?php echo $listeEtudients[$i][4]; ?></td>
                    <td><?php echo $listeEtudients[$i][5]; ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <?php
    echo "Bonjour, je suis un script PHP !";
    ?>

</body>

</html>