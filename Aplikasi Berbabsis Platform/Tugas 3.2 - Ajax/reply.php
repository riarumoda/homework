<?php
if (isset($_POST["msg"])) {
    $pesan = htmlspecialchars($_POST["msg"]);
    echo "<strong>Reply:</strong> " . $pesan . " <small>(" . date('H:i:s') . ")</small>";
} else {
    echo "Error: Data tidak diterima.";
}
?>
