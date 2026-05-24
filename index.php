<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обробка рядків</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Обробка рядків</h1>
    <form method="post">
      <label>Перший рядок<input name="e"></label>
      <label>Другий рядок<input name="f"></label>
      <button>Порівняти</button>
    </form>
    <?php if (isset($_POST['e'], $_POST['f'])): ?>
      <?php $arr = [trim($_POST['e']), trim($_POST['f'])]; sort($arr, SORT_STRING); ?>
      <div class="result">За алфавітом: <?php echo htmlspecialchars(implode(", ", $arr)); ?></div>
    <?php endif; ?>
  </main>
</body>
</html>
