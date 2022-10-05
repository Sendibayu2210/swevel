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
