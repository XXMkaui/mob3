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

<h3>Описание бэкенда</h3>
Создадим миграцию для добавления таблицы marvel_characters

![image](https://github.com/user-attachments/assets/9784d4e0-058b-4199-84ad-d24e838a030e)

Создадим сид, для дальнейшего его выполнения (добавления записей в таблицу)

![image](https://github.com/user-attachments/assets/b11ae7c2-4d00-4fe3-8d3a-d94acff2757e)


Создадим ORM-модель для данной таблицы 

![image](https://github.com/user-attachments/assets/f19320f7-3401-4622-a1c3-2c72661017fd)

Создадим маршруты, переходя по которым будем попадать в методы будущего контроллера

![image](https://github.com/user-attachments/assets/e96a4183-5152-48f7-9f50-7af4cee0dc5d)


Создадим контроллер MarvelCharacterController, выполняющий операции с БД. 
Метод getAllHeroes возвращает список героев через пагинацию

![image](https://github.com/user-attachments/assets/20f6bb60-5673-4a91-b51f-f8c052dd07fd)

Метод getHeroById возвращает героя по его ID

![image](https://github.com/user-attachments/assets/d3dc57e5-9c24-45d5-9943-d29e382f11e1)

В docker compose файле укажем, чтобы контейнер app ждал подключения к MySQL перед выполнением миграции и сида.
Чтобы конфликтов не было, указываем конкретные пути

![image](https://github.com/user-attachments/assets/4586f423-3001-4548-be6e-6fdf3d680e6f)

