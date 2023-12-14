<div class="container-fluid" style="height: 30vh;">
    <div class="row d-flex align-items-center justify-content-center">

        <?php
        foreach ($db->osszesTermek() as $row) {
            $card = '<div class="card" style="width: 18rem; margin: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['termek_nev'] . '</h5>' .
                            '<p class="card-text">Ár: ' . $row['ar'] . ' Ft' . '</p>' .
                            '<a href="index.php?menu=home&id=' . $row['termekid'] . '" class="btn btn-primary">Kosárhoz adás</a>
                        </div>
                    </div>';
            echo $card;
        }
        ?>

    </div>
</div>
