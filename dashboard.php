<?php
include_once "template/header.php";

switch($_GET['page']){


    case 'beranda':
        include_once "template/bootstrap.php";
        include_once "template/navbar.php";
        include_once "template/sidebarangga.php";
        include_once "beranda.php";
        include_once "template/footer.php";
        break;

    case 'obat':
        include_once "template/bootstrap.php";
        include_once "template/navbar.php";
        include_once "template/sidebarangga.php";
        include_once "view/lihatobat.php";
        break;
    case 'tambahobat':
        include_once "insert/obat.php";
        break;
    case 'prosestambahobat':
        include_once "insert/prosesobat.php";
        break;
    case 'hapusobat':
        include_once "delete/hapusobat.php";
        break;
    case 'editobat':
        include_once "update/editobat.php";
        break;
    case 'proseseditobat':
        include_once "update/proseseditobat.php";
        break;
    
    
    case 'pelanggan':
        include_once "template/bootstrap.php";
        include_once "template/navbar.php";
        include_once "template/sidebarangga.php";
        include_once "view/lihatpelanggan.php";
        break;
    case 'tambahpelanggan':
        include_once 'insert/pelanggan.php';
        break;
    case 'prosespelanggan':
        include_once 'insert/prosespelanggan.php';
        break;
    case 'hapuspelanggan':
        include_once 'delete/hapuspelanggan.php';
        break;
    case 'editpelanggan':
        include_once 'update/editpelanggan.php';
        break;
    case 'proseseditpelanggan':
        include_once 'update/proseseditpelanggan.php';
        break;

    case 'tambahtransaksi':
        include_once 'template/bootstrap.php';
        include_once 'template/navbar.php';
        include_once 'template/sidebarangga.php';
        include_once 'tambahTransaksi.php';
        break;
        
    case 'prosestambahtransaksi':
        include_once 'template/bootstrap.php';
        include_once 'template/navbar.php';
        include_once 'prosestambahtransaksi.php';
        break;

    case 'transaksi_detail':
        include_once 'template/bootstrap.php';
        include_once 'template/navbar.php';
        include_once 'template/sidebarangga.php';
        include_once 'transaksidetail.php';
        break;
    }


include_once "template/footer.php";
?>