<?php
session_start();
require("../conn.php");
if (isset($_POST['simpleCushion_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `cushion_db` where cushionId ='" . $_POST["simpleCushion_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["cushionId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">simpleCushion Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["simpleCushion"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">simpleCushion Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["simpleCushionPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateSimpleCushion">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['magicCushion_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `cushion_db` where cushionId ='" . $_POST["magicCushion_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["cushionId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">magicCushion Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["magicCushion"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">magicCushion Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["magicCushionPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateMagicCushion">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
<?php
if (isset($_POST['whiteShirt_Id'])) {
    //   echo  $_POST["gsm70_Id"];
    $envelopeReq = "select * from `cushion_db` where cushionId ='" . $_POST["whiteShirt_Id"] . "';";
    $data = $con->query($envelopeReq);
    while ($row = $data->fetch_assoc()) {
?>
        <form action="edit/80gsm.php" class="container-fluid" method="POST">
            <input type="hidden" name="70gsm_id" value="<?php echo $row["cushionId"]; ?>">
            <div class="mb-3">
                <label for="70gsmQuantity" class="form-label">whiteShirt Quantity</label>
                <input type="text" class="form-control" id="70gsmQuantity" name="70gsmQuantity" value="<?php echo $row["whiteShirt"]; ?>">
            </div>
            <div class="mb-3">
                <label for="70gsmPrice" class="form-label">whiteShirt Price</label>
                <input type="number" class="form-control" id="70gsmPrice" name="70gsmPrice" value="<?php echo $row["whiteShirtPrice"] ?>" ;>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateWhiteShirt">Update</button>
            </div>
        </form>   
<?php
    }
}
?>
