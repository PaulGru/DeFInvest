<?php

include '../bdd/bdd.php';
global $db;

//Set la session : acessible seulement pour l'utilisateur qui a rentré ses identifiants.

if(isset($_GET['id']) AND $_GET['id'] > 0){

    $getid = intval($_GET['id']); //sécurise le get
    
    $requser = $db->prepare("SELECT * FROM users WHERE id = :id");
    $requser->execute(['id' => $getid]);

    $userexist = $requser->fetch();

    if($_SESSION['id'] AND $userexist['id'] == $_SESSION['id']){ //on set la session pour qu'un utilisateur non connecté ne puisse pas avoir accès à la session
                                                                 //le AND refuse l'accès à un utilisateur connecté à une session qui n'est pas à lui

        

        $requete = $db->prepare("SELECT * FROM portefeuille WHERE id = :id");
        $requete->execute(['id' => $_GET['id']]);

        $resultat = $requete->fetch();

        ?>

        

            <div class="table-1">

                <h2>Lending</h2>

                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Cryptomonnaie</th>
                            <th>Nombre</th>
                            <th>Rendement</th>
                            <th>Vos récompenses</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>BTC</td>
                            <td><?php echo $resultat['BTC']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ETH</td>
                            <td><?php echo $resultat['ETH']; ?></td>
                            <td>Students</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>BNB</td>
                            <td><?php echo $resultat['BTC']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>DOT</td>
                            <td><?php echo $resultat['DOT']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>SOL</td>
                            <td><?php echo $resultat['SOL']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>EGLD</td>
                            <td><?php echo $resultat['EGLD']; ?></td>
                            <td>dcode</td>
                        </tr>

                    </tbody>
                </table>

            </div>


            <div class="table-2">


                <h2>Staking</h2>

                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Cryptomonnaie</th>
                            <th>Nombre</th>
                            <th>Rendement</th>
                            <th>Vos récompenses</th>
                         </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>ETH</td>
                            <td><?php echo $resultat['ETH']; ?></td>
                            <td>Students</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>BNB</td>
                            <td><?php echo $resultat['BTC']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>DOT</td>
                            <td><?php echo $resultat['DOT']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>SOL</td>
                            <td><?php echo $resultat['SOL']; ?></td>
                            <td>dcode</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>EGLD</td>
                            <td><?php echo $resultat['EGLD']; ?></td>
                            <td>dcode</td>
                        </tr>
                </table>

            </div>


            <div class="table-3">

                <h2>Livret</h2>

                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Vos fonds</th>
                            <th>Rendement</th>
                            <th>Vos récompenses</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Domenic</td>
                            <td>88,110</td>
                            <td>dcode</td>
                        </tr>
                    </tbody>
                </table>

            </div>


    <?php
    }

    
    if(isset($_SESSION['id']) AND $userexist['id'] == $_SESSION['id']){
        ?>
        <a href="../bdd/logout.php" class="deconnexion-button">Se déconnecter</a>
        <?php
}   

} else{
    echo "Vous n'êtes pas connectés.";
}

?>