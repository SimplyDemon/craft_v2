## TODO

- Поправить баги бета версии.

- Выпустить стабильный продакшен.

- Переделать страницу всех предметов (добавить поиск без перезагрузки, фильтр по категориям и грейдам).

- Добавить шанс расчёта рар для Б, А вещей

- Добавить поиск на страницу управления ценами.

- Добавить микроразметку.

- Доработать чат.

- Добавить возможность посмотреть цены и количество ресурсов на несколько крафтов.

- Добавить вкладки на синглу вещи, что бы можно было смотреть цену по умолчанию и свою цену.

- Книга рецептов - возможность добавлять рецепты в личный кабинет(там будут все добавленные рецепты и количество).

- Добавить блог для публикации статей, инфы о ченджлогах

- Страница, которая показывает сколько ресурсов нужно на каждый рецепт и на весь список в книге рецептов.

- Добавить возможность добавлять сразу сеты предметов в книгу рецептов.

- Пользователь может указать количество ресурсов, которые у него есть, что бы понимать сколько еще надо

- Учитывать ресурсы, которые крафтятся из других ресурсов.

- Добавить инфу от куда спойл, дроп, манор ресурсов и рецептов.

- Добавить какую-то аналитику: самый популярный рецепт, самый популярный ресурс, что чаще добавляют в книгу рецептов

- Добавить аналитику цен ресурса, как она менялась, мб график

- Добавить возможность указывать лвл крафта для подсчёта шанса рара

- Добавить третью кастомную колонку с ценами для пользователей и опцию что бы активировать её.

- Переделать страницу всех вещей

- Сделать отображение времени респа для таймзоны пользователя. (через tiltoop)

- Рассчитывать шанс заточки вещей, скилов, вставки атт.

## DONE

- Улучшить мобильную верстку страницы вещи.

- Добавить 404 страницу.

- Возможно посмотреть несколько крафтов.

- Добавить возможность менять цены прямо на странице, без регистрации, указывать количество, которое есть, что бы цена
  на это не учитывалась.

- Добавить ссылку для просмотра респа рб на главной.

- Галочка слева что бы проигнорировать стоимость определенных ресурсов уже имеющихся в наличии. Может быть актуально
  если хочешь узнать стоимость крафта без кусков и рецепта и без какого либо говна

- Добавить респ х5 РБ

- На странице цен не показывать ресурсы(рецепты), сделать, что бы на странице рецепта ресурса отображалась цена ресурса,
  а не рецепта.

- Добавить респ эпик рб.

- Добавить основу СЕО для индексации.

- Добавить крафт ресурсов.

- Добавить рар инфу Б вещам

- Добавить А Б пухи, бижу

- Мобильное меню на мобилке поправить.

- Добавить А Б вещи

- Добавить крафт сосок.

- Стилизовать кнопку masterwork

- Пофиксить отображение таймера

- Переместить щиты, сигили в броню.

- Выпустить бета версию.

- Создать таблицу и хранить данные о респ рб в ней, обновлять каждые 5 минут

- Добавить респ саб рб.

- Показывать сколько ресурсов нужно на конкретный рецепт (сингла рецепта).

- Заполнить базу рецептами, ресурсами, категориями.

- Страница для заполнения цен на ресурсы, вещи(отдельная роль для этого).

- Личный кабинет пользователя.

- В личном кабинете дать возможность указывать свои цены на ресурсы для лучшего подсчёта стоимости.

- Показывать иконку грейда на сингле

- Отображать рядом цену админа с ресурсом и общей ценой.

- Добавить шанс крафта рара, его бонусы.

- Добавить сервис переписки между админом для общения о багах.

- Разделить контент и доступ на админский и не админский

- Добавить поиск

- Сделать верстку страниц и интегрировать её.

- Заполнить главную страницу

## Commands Prod

- php7.4 artisan migrate:fresh --seed
- php7.4 artisan migrate:refresh --path=/database/migrations/2021_11_11_100732_create_raid_bosses_table.php
- php7.4 artisan db:seed --class=RaidBossSeeder

- COMPOSER_MEMORY_LIMIT=-1 composer-php7.4 update

## Optimise

- php artisan route:cache - cache all routes
- php artisan route:clear - if need add routes

- php artisan config:cache - config all caches
- php artisan config:clear - if need update config
