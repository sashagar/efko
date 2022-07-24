## Тестовое задание
Тестовое задание для Веб-программиста

Если Вы не знакомы с Yii2, то можете выполнить задачу на удобном для вас фреймворке.

Требуется выполнить задание и прислать нам ссылку на ваш репозиторий. Либо, если вы желаете использовать другой фреймворк то можете написать на php с ипользованием MVC.

### Задача:
Нужно сделать простую систему.

Есть рядовой сотрудник, который может:
- ввести начало и конец отпуска;
- посмотреть какие даты отпусков у других сотрудников.
- скорректировать свои даты.

Есть Руководитель, который может:
- так же посмотреть какие даты ввели сотрудники.
- поставить признак, что данные по отпуску конкретного сотрудника зафиксированы.

После этого сотрудник не может скорректировать свои даты

Не обязательно (если желаете лучше продемонстрировать свои умения)
- Дополнительный функционал для страницы списка отпусков
- Оформление readme и других вспомогательный решений

---

К сожалению, удалось выполнить только часть задания. Старался сделать на фреймворке yii2, так как основной фреймворк, на котором работает фирма на нем.

Реализовал.
- ресгистрацию сотрудников (для роди руководителя нужно в базе выставить руками role_id = 2)
- Вход пользователей в систему
- Добавление дат отпуска
- Редактирование / удаление своей записи, если отпуск имеет статус "В ожидании"
- Добавлена связь между отпуском и сотрудниками.
- если пользоваетель логируется как сотрудник, то его редиректит на страницу my-vacations, руководителя на vacations(нерелаизована страница и логика)

Не реализовано
- Одобрение/отклонение со стороны руководителя. Причина: не смог разобраться со связями, не совсем понятно как их использовать в yii. Надо изучать и практиковаться.
- просмотр отпусков других сотрудников. Причина: не смог разобраться со связями. 

Замысел был такой, подтянуть все одобренные отпуска,которые кончаются не раньше завтрашнего(сегодняшнего) дня. и имена(username) сотрудников.

Что тут еще можно было реализовать:
- Чтобы скрипт учитывал количество дней отпуска в году
- система отгулов. 
- период между отпусками, если сотрудник берет в году 2 и более отпусков с расчетом количества дней.
- Также можно добавить колонку для пользователей - дата начала работы, чтобы новичкам назначать отпуск после какого-то периода времени
- Если руководитель ставит "canceled" статус, можно добавить колонку для комментария. Либо сделать список причин, объясняющих отмену отпуска.
- по фронтовой части надо связать 2 поля наподобии, бронирования авиабилетов, чтобы даты между собой были связаны.
- также необходимо постаивть проверки на backend части.