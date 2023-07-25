<?php
    require_once '_functions.php';
    $clubs = getClubs();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRS Clubs List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '_header.php'; ?>

    <div class="py-5 bg-body-tertiary">
        <div class="container">
            <?php if (isset($clubs) && (count($clubs) > 0)): ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($clubs as $club): ?>
                        <?php include '_club_item.php'; ?>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <?php include '_no_clubs_found.php'; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
