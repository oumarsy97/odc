<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table{
            border-collapse: collapse;
            border: 1px solid #ccc;
            width: 100%;
            max-width: 800px;
            font-size: 1.2rem;
            td{
                width: 100px;
                text-align: center;
            }
        }

    </style>
</head>
<body>
    <header>
        <form action="" method="post">
            <select name="libelle" id="libelle">
            <option value="Tous">Tous</option>
                <?php
                    foreach($listLibelle as $data){
                        echo '<option value="'.$data.'">'.$data.'</option>';
                    }
                ?>
            </select>

            <select name="category" id="category">
                <option value="Tous">Tous</option>
                <?php
                    foreach($listCategory as $data){
                        echo '<option value="'.$data.'">'.$data.'</option>';
                    }
                ?>
            </select>
            <select name="annee" id="annee">
                <?php
                    foreach($listDate as $data){
                        echo '<option value="'.$data.'">'.$data.'</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Valider">
        </form>
    </header>
    <main>
        <table>
            <thead>
                <tr><th>Libelle</th><th>Catégorie</th><th>Année</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($donne as $data){?>
                        <tr>

                            <td><?= $data['libelle'] ?></td>
                            <td><?= $data['category'] ?></td>
                            <td><?= $data['year'] ?></td>
                        </tr>
                            <?php }?>
            </tbody>
        </table>
    </main>
</body>
</html>