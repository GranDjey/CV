<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ete indien - Create_mutuelle</title>
    <link rel="icon" sizes="64x64" href="../img2/fav.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin2.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>

<body>
    <div class="row justify-content-center;">
        <div class="col-4" style="text-align:center">
            <button type="submit" class="btn btn-success admin_vid_btn">
                <a class="admin_title_btn_text" href="index_admin.php">Menu admin</a>
            </button>
        </div>
        <div class="col-4" style="text-align:center">
            <h2 class="admin_title" style="margin-top: 0.8em;">AJOUTER UN CLIENT</h2>
        </div>
        <div class="col-4" style="text-align:center">
            <button type="submit" class="btn btn-success admin_mut_btn"">
                <a class=" admin_title_btn_text" href="../main/menu.php">Retour au site</a>
            </button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 form_group">
            <form class="form-group" action="../function/recup_mutuelles.php" method="post"
                enctype="multipart/form-data">
                <fieldset>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="mutuelle">Nom du client</label>
                            <input name="mutuelle" type="text" placeholder="mutuelle" class="form-control" required>
                        </div>
                    </div>
                    <div class="dropdown">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8 drop-content">
                            <label for="password">Mot de passe</label>
                            <input name="password" type="text" placeholder="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="img">Logo</label>
                            <p><input type="file" name="img" id=""></p>
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="tel">Téléphone</label>
                            <input name="tel" type="text" placeholder="tel" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="description">Description du client</label>
                            <textarea class="form-control" name="description" placeholder="description" rows="7"
                                required></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <button type="submit" class="btn btn-success form_btn" name="submit">
                            Ajouter le client
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>