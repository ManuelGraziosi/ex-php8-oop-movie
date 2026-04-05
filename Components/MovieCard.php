<div class="card h-100 shadow-sm">
    <div class="card-body d-flex flex-column">

        <!-- Titolo -->
        <h5 class="card-title"><?= $movie->getTitle(); ?></h5>

        <!-- Descrizione -->
        <p class="card-text flex-grow-1">
            <?= $movie->getDescription(); ?>
        </p>

        <!-- Anno -->
        <p class="text-muted small mb-2">
            Anno: <?= $movie->getYear(); ?>
        </p>

        <!-- Generi -->
        <div>
            <?php foreach ($movie->getGenres() as $genre): ?>
                <span class="badge bg-primary me-1">
                    <?= $genre->getName(); ?>
                </span>
            <?php endforeach; ?>
        </div>

    </div>
</div>