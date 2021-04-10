<html lang="ru">
  <head>
      <title>Задание 4</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="style.css" type="text/css" rel="stylesheet">
  </head>
  <body>

    <form action="" method="POST">
        <?php
       
        if (!empty($messages)) {
          print('<div id="messages">');
          // Выводим все сообщения.
          foreach ($messages as $message) {
            print($message);
          }
          print('</div>');
        }   
        ?>

      <!-- Поле имени -->
      <label for="nameInput">Имя </label>
      <input id="nameInput" name="name" type="text" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>" />

      <!-- Поле Email -->
      <label for="emailInput">Email </label>
      <input id="emailInput" name="email" type="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" />

      <!-- Поле года рождения -->
       <label for="yearInput">Год рождения </label>
      <input id="yearInput" name="year" type="text" value="<?php print $values['year']; ?>" />

      <!-- Поле выбора пола -->
      <label>Пол</label>
      <label>
          <input type="radio" name="sex" value="male" <?php if ($values['sex'] == 'male') print("checked"); ?> >
           Мужчина
      </label>
      <label>
          <input type="radio" name="sex" value="female" <?php if ($values['sex'] == 'female') print("checked"); ?> >
           Женщина
      </label>

      <!-- Количество конечностей -->
      <label>Количество конечностей</label>
      <label>
          <input type="radio" name="limbs" value="2" <?php if ($values['limbs'] == 2) print("checked"); ?> >
           2
      </label>
      <label>
          <input type="radio" name="limbs" value="4" <?php if ($values['limbs'] == 4) print("checked"); ?> >
           4
      </label>
      <label>
          <input type="radio" name="limbs" value="8" <?php if ($values['limbs'] == 8) print("checked"); ?> >
           8
      </label>

      <!-- Суперспособности -->
      <label for="powersSelect">Суперспособности</label>
      <select id="powersSelect" <?php if ($errors['powers']) {print 'class="error"';} ?> name="powers[]" multiple size="4">
         <?php
            foreach ($powers as $key => $value) {
                $selected = empty($values['powers'][$key]) ? '' : ' selected="selected" ';
                printf('<option value="%s",%s>%s</option>', $key, $selected, $value);
            }
         ?>
      </select>

      <!-- Биография -->
      <label for="bioArea">Биография</label>
      <textarea id="bioArea" name="bio" rows="8" cols="30" placeholder="Напишите что-нибудь о себе..." <?php if ($errors['bio']) {print 'class="error"';} ?>><?php print $values['bio']; ?></textarea>

      <!-- Чекбокс -->
      <label <?php if ($errors['check']) {print 'class="error"';} ?>><input type="checkbox" name="check" value="ok"> С контрактом ознакомлен(а)</label>

      <!-- Кнопка -->
      <input type="submit" value="Отправить" />
    </form>
  </body>
</html>