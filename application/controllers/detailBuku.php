<?php
if ($buku->stok < 1) {
    echo "<i class='btn btn-outline-primary fas fw fa-shooping-cart'> Booking&nbsp;&nbsp 0</i>";
} else {
    echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href=" . base_url('booking/tambahBooking/' . $buku->id)
}
?>

<a class="btn btn-outline-warning fas fw fa-search' href="<?= base_url('home/detailBuku/' . $buku->); ?>""