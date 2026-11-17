<h2>Последние статьи</h2>
<?php foreach ($articles as $a): ?>
    <div class="card">
        <h3><a href="/course_project/public/article/<?= $a['id'] ?>"><?= $a['title'] ?></a></h3>
        <p>Автор: <?= $a['author'] ?></p>
    </div>
<?php endforeach; ?>