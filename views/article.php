<a href="/course_project/public/">← Назад</a>
<h2><?= $article['title'] ?></h2>
<p><strong>Автор:</strong> <?= $article['author'] ?> | <strong>Время чтения:</strong> ~<?= $readingTime ?> мин.</p>
<div><?= nl2br($article['content']) ?></div>