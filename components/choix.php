

<form action="./api/submit.php" method="post">
    <div class="form-group">
        <label for="produit1"><?php echo $produit1['nom'] ?></label>
        <input type="number" class="form-control" id="produit1" name="produit1" required>
    </div>
    <div class="form-group">
        <label for="produit2"><?php echo $produit2['nom'] ?></label>
        <input type="number" class="form-control" id="produit2" name="produit2" required>
    </div>
    <div class="form-group">
        <label for="produit3"><?php echo $produit3['nom'] ?></label>
        <input type="number" class="form-control" id="produit3" name="produit3" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>