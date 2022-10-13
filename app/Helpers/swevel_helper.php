<?php

function pageNotFound()
{
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
}

function formatRupiah($rupiah)
{
    echo number_format($rupiah, 0, ',', '.');
}

function Validation()
{
    return \Config\Services::validation();
}

function makeCircle()
{
    $start = 4;
    for ($a = 0; $a < $start; $a++) {
        echo '<div class="d-flex">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<div class="circle"></div>';
        }
        for ($c = $start; $c > $a; $c -= 1) {
            echo '<div class="circle"></div>';
        }
        echo '</div>';
        echo '<br>';
    }
}
