<h2>Запуск проекта</h2>
Выполните клонирование репозитория<br>
<code>git clone https://github.com/XXMkaui/mob_omsu</code>
<br><br>
Перейдите в директорию с клонированным репозиторием и выполните команду<br>
<code>docker compose up</code><br>
Данная команда установит все зависимости, выполнит миграции и сиды
<br><br>
Дождитесь, пока в консоли не появится сообщение об успешной миграции и
готовности к обработке соединений<br>

![waitFor](https://github.com/user-attachments/assets/cb7bdc15-0d7a-4649-bd86-0490bed81da7)
<br><br>
Можно убедиться, что составляющие compose stack запущены в docker<br>
![dockerDesktop](https://github.com/user-attachments/assets/b874ab1d-7e17-436c-8eb6-9768f4b45a3d)
<br><br>
Теперь перейдя ссылке ниже можно увидеть стартовую страницу laravel<br>
<code>http://localhost:8000/</code>

<h3>Доступные API</h3>
1. Маршрут для получения списка всех героев через пагинацию<br>

![characters](https://github.com/user-attachments/assets/dd9f2438-d071-4fb8-be51-73dc576af99e)
<br>
<br>
2. Маршрут для получения информации о герое по его ID<br>

![characterById](https://github.com/user-attachments/assets/a02d53cb-c47f-4175-989e-fbfb9c6dcaf8)

<h3>Структура таблицы</h3>

![table](https://github.com/user-attachments/assets/00498d2b-f678-45a7-8c91-df029b26f406)


