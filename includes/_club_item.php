<div class="col">
    <div class="card shadow-sm h-100">
        <div class="card-header">
            <?= $club->name; ?>
        </div>
        <div class="card-body">
        <p class="card-text">
            <?= getAddressString($club) ?>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Visit</button>
            </div>
            <small class="text-body-secondary">(<?= $club->club_id ?>)</small>
        </div>
        </div>
    </div>
</div>
