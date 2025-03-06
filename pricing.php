<?php include('db_connection.php');
// Fetch all packages from database
$sql = "SELECT * FROM prices ORDER BY amount";
$result = $conn->query($sql);
?>
<style>
    .package-heading {
        font-weight: 700;
        font-size: 34px;
    }
</style>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Beauty Pricing</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        
        <!-- First Row - 2 Cards -->
        <div class="row justify-content-center mb-5">
            <?php 
            $count = 0;
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                if($count < 2) { // First two packages
            ?>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4 package-heading"><?php echo $row['package_type']; ?></h3>
                            <p><span class="price"><?php echo intval($row['amount']); ?> TAKA</span> <span class="per">/ one trip</span></p>
                        </div>
                        <ul>
                            <?php 
                            $features = json_decode($row['features'], true);
                            $feature_items = explode(",", $features[0]);
                            foreach($feature_items as $feature) {
                                echo "<li>" . trim($feature) . "</li>";
                            }
                            ?>
                        </ul>
                        <p class="button text-center"><a href="contact.php" class="btn btn-primary btn-outline-primary px-4 py-3">Book now</a></p>
                    </div>
                </div>
            <?php 
                }
                $count++;
            } 
            ?>
        </div>

        <!-- Second Row - 3 Cards -->
        <div class="row justify-content-center">
            <?php 
            // Reset the result pointer
            $result->execute();  // For PDO, we need to execute the query again
            $count = 0;
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                if($count >= 2) { // Skip first two packages
            ?>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry <?php echo ($row['package_type'] == 'Premium') ? 'active' : ''; ?> pb-5 text-center">
                        <div>
                            <h3 class="mb-4 package-heading"><?php echo $row['package_type']; ?></h3>
                            <p><span class="price"><?php echo intval($row['amount']); ?> TAKA</span> <span class="per">/ one trip</span></p>
                        </div>
                        <ul>
                            <?php 
                            $features = json_decode($row['features'], true);
                            $feature_items = explode(",", $features[0]);
                            foreach($feature_items as $feature) {
                                echo "<li>" . trim($feature) . "</li>";
                            }
                            ?>
                        </ul>
                        <p class="button text-center"><a href="contact.php" class="btn btn-primary btn-outline-primary px-4 py-3">Book now</a></p>
                    </div>
                </div>
            <?php 
                }
                $count++;
            } 
            ?>
        </div>
    </div>
</section>