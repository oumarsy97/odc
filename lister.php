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
        }

    </style>
</head>
<body>
    <header>
        <form action="" method="post">
            <select name="libelle" id="libelle">
                <?php
                    foreach($datas as $data){
                        echo '<option value="'.$data['libelle'].'">'.$data['libelle'].'</option>';
                    }
                ?>
            </select>

            <select name="category" id="category">
                <?php
                    foreach($datas as $data){
                        echo '<option value="'.$data['category'].'">'.$data['category'].'</option>';
                    }
                ?>
            </select>
            <select name="annee" id="annee">
                <?php
                    foreach($datas as $data){
                        echo '<option value="'.$data['annee'].'">'.$data['annee'].'</option>';
                    }
                ?>
            </select>
        </form>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>libelle</th>
                    <th>category</th>
                    <th>annee de publication</th>
                </tr>
            </thead>
            <tbody>
                <?php var_dump($datas); ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>