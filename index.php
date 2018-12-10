<html>
  <head>
    <?php 
      include_once("ClassStyle.php");
      include_once('ClassRandom.php');
    ?>
  </head>
  <body>
        <table>
          <tr>
            <td>
              <a class="positive" style="text-decoration:none" onclick="getText (this)">
              <?php
                $NewObj = new RandomComments();#создаем новые объекты
                echo $NewObj->getAnswer("ru/data_hi_ru.txt");
                echo $NewObj->getAnswer("ru/data_body_one_ru.txt");
                echo $NewObj->getAnswer("ru/data_body_two_ru.txt");
                echo $NewObj->getAnswer("ru/data_end_ru.txt");
                #---------положительный генератор отзывов        
              ?>
            </a><br>
            </td>
          </tr>
          <tr>
            <td>
                <a class="netral" style="text-decoration:none" onclick="getText (this)">
                  <?php
                    echo $NewObj->getAnswer("ru/data_hi_ru.txt");#создаем новые объекты
                    echo $NewObj->getAnswer("ru/data_body_netral_ru.txt");
                    echo $NewObj->getAnswer("ru/data_end_ru.txt");
                    #---------нейтральный генератор
                  ?>
                </a><br>
            </td>
          </tr>
          <tr>
            <td>
                <a class="negative" style="text-decoration:none" onclick="getText (this)">
                  <?php
                    echo $NewObj->getAnswer("ru/data_hi_ru.txt");#создаем новые объекты
                    echo $NewObj->getAnswer("ru/data_body_negative_ru.txt");
                    echo $NewObj->getAnswer("ru/data_end_ru.txt");
                    #---------нетральных генератор отзывов
                  ?>
                </a><br>
            </td>
          </tr>
          <tr>
            <td>
              <br /><br /><br />
            </td>
          </tr>
          <tr>
            <td>
              <a class="positive" style="text-decoration:none" onclick="getText (this)">
              <?php
                $NewObj = new RandomComments();#создаем новые объекты
                echo $NewObj->getAnswer("en/data_hi_en.txt");
                echo $NewObj->getAnswer("en/data_body_one_en.txt");
                echo $NewObj->getAnswer("en/data_body_two_en.txt");
                echo $NewObj->getAnswer("en/data_end_en.txt");
                #---------положительный генератор отзывов        
              ?>
            </a><br>
            </td>
          </tr>
          <tr>
            <td>
                <a class="netral" style="text-decoration:none" onclick="getText (this)">
                  <?php
                    echo $NewObj->getAnswer("en/data_hi_en.txt");#создаем новые объекты
                    echo $NewObj->getAnswer("en/data_body_netral_en.txt");
                    echo $NewObj->getAnswer("en/data_end_en.txt");
                    #---------нейтральный генератор
                  ?>
                </a><br>
            </td>
          </tr>
          <tr>
            <td>
                <a class="negative" style="text-decoration:none" onclick="getText (this)">
                  <?php
                    echo $NewObj->getAnswer("en/data_hi_en.txt");#создаем новые объекты
                    echo $NewObj->getAnswer("en/data_body_negative_en.txt");
                    echo $NewObj->getAnswer("en/data_end_en.txt");
                    #---------нетральных генератор отзывов
                  ?>
                </a><br>
            </td>
          </tr>
        </table>
<script>
    function copy(str){
      let tmp   = document.createElement('INPUT'), // Создаём новый текстовой input
          focus = document.activeElement; // Получаем ссылку на элемент в фокусе (чтобы не терять фокус)

      tmp.value = str; // Временному input вставляем текст для копирования

      document.body.appendChild(tmp); // Вставляем input в DOM
      tmp.select(); // Выделяем весь текст в input
      document.execCommand('copy'); // Магия! Копирует в буфер выделенный текст (см. команду выше)
      document.body.removeChild(tmp); // Удаляем временный input
      focus.focus(); // Возвращаем фокус туда, где был
    }

    function getText (data) {
        copy (data.textContent);
        window.location.reload ();
    }

</script>
  </body>
</html>