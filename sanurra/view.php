<html>

<head>
    <title>View Prking</title>
    <link rel="stylesheet" type="text/css" href="view.css">
</head>

<body>
    <?php

    $connection = new mysqli("localhost", "YOUR_MYSQL_USERNAME", "YOUR_MYSQL_PASSWORD", "YOUR_DATABASE_NAME");
    $query = "SELECT * FROM `floors`";
    $rs = $connection->query($query);

    ?>
    <div class="container">
        <?php
        $floor1_data = $rs->fetch_assoc();

        $total = $floor1_data["totalslot"];
        $occupied = $floor1_data["occupiedslot"];
        $available = $total - $occupied;
        ?>
        <div class="box">
            <div class="icon"><span class="icon-letter">A</span></div>
            <div class="content">
                <h3>Floor A</h3>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Occupied</span>
                    <span>-</span>
                    <span class="span2"><?php echo $occupied; ?></span>
                </p>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Available</span>
                    <span>-</span>
                    <span class="span2"><?php echo $available; ?></span>
                </p>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Total</span>
                    <span>-</span>
                    <span class="span2"><?php echo $total; ?></span>
                </p>
                <a href="#">Read more</a>
            </div>
        </div>
        <?php
        $floor2_data = $rs->fetch_assoc();

        $total2 = $floor2_data["totalslot"];
        $occupied2 = $floor2_data["occupiedslot"];
        $available2 = $total2 - $occupied2;
        ?>
        <div class="box">
            <div class="icon"><span class="icon-letter">B</span></div>
            <div class="content">
                <h3>Floor B</h3>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Occupied</span>
                    <span>-</span>
                    <span class="span2"><?php echo $occupied2; ?></span>
                </p>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Available</span>
                    <span>-</span>
                    <span class="span2"><?php echo $available2; ?></span>
                </p>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Total</span>
                    <span>-</span>
                    <span class="span2"><?php echo $total2; ?></span>
                </p>
                <a href="#">Read more</a>
            </div>
        </div>
        <?php
        $floor3_data = $rs->fetch_assoc();

        $total3 = $floor3_data["totalslot"];
        $occupied3 = $floor3_data["occupiedslot"];
        $available3 = $total3 - $occupied3;
        ?>
        <div class="box">
            <div class="icon"><span class="icon-letter">C</span></div>
            <div class="content">
                <h3>Floor C</h3>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Occupied</span>
                    <span>-</span>
                    <span class="span2"><?php echo $occupied3; ?></span>
                </p>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Available</span>
                    <span>-</span>
                    <span class="span2"><?php echo $available3; ?></span>
                </p>
                <p style="display: flex; justify-content: space-between;">
                    <span class="span1">Total</span>
                    <span>-</span>
                    <span class="span2"><?php echo $total3; ?></span>
                </p>
                <a href="#">Read more</a>
            </div>
        </div>
    </div>
</body>

</html>