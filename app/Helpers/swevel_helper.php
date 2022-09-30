<?php 

function pageNotFound(){
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
}
