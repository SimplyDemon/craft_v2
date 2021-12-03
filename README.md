## TODO

- Добавить ФАК.

- Отрефакторить код.

- Перевести все изображения в webp.

- Выпустить стабильный продакшен.

- Книга рецептов — возможность добавлять рецепты в личный кабинет(там будут все добавленные рецепты и количество
  ресурсов, требуемого для крафта всей книги и отдельных рецептов).

- Добавить комплекты.

- Добавить возможность добавлять сразу сеты предметов (на выбор с щитом или без) в книгу рецептов.

- Добавить инфу от куда спойл, дроп, манор ресурсов и рецептов.

- Добавить какую-то аналитику: самый популярный рецепт, самый популярный ресурс, что чаще добавляют в книгу рецептов.

- Добавить ассортимент мамона.

- Пользователь может указать количество ресурсов, которые у него есть, что бы понимать сколько еще надо

- Добавить возможность указывать лвл крафта для подсчёта шанса рара

- Рассчитывать шанс заточки вещей, скилов, вставки атт.

- Сделать отображение времени респа для таймзоны пользователя. (через tiltoop)

- Доработать чат.

- Учитывать ресурсы, которые крафтятся из других ресурсов.

- Добавить кеширование.

- Добавить стоимость распечатки у мамона, сколько варнишей нужно для распечатки мв. (не нашёл от куда брать данные, т.к.
  цены расходятся с фактическими на сервере)

- Добавить блог для публикации статей, инфы о ченджлогах. (статей пока никаких не будет)

- Калькулятор и таблицу манора.

## DONE

- Сделать предупреждение о переходе на ресурс вместо таргет бланк.
  
- Сбросить цены на куски и предметы.

- В рецепте указать количество гемов, адены(мб древней) для вставки СА, поля sa_red_name, sa_red_description, sa_lvl,
  sa_gem_count.

- Добавить кристаллизацию и стоимость кристаллов при разбиении.

- Добавить больше русификации.

- Добавить Ц предметы.

- Сделать что бы при аякс поиске выводилось 15 результатов и давалась ссылка на полный список.

- Перевести Рар бонусы.

- Добавить микроразметку.

- Для Б, А МВ характеристик сделать жирным heavy, light, robe.

- Добавить шанс расчёта рар для Б, А вещей.

- Показывать для каких вещей нужен ресурс.

- Добавить канониклы для 60% рецов.

- Добавить слова, по которым дополнительно будет происходить поиск.

- Добавить аналитику цен на ресурсы(сингла рецепта), что бы можно было видеть как изменялась цена (графики и процент, на
  сколько изменилось с прошлого обновления).

- Добавить поиск на страницу управления ценами.

- Кнопку сохранения цен сделать sticky.

- Добавить возможность изменять цену на предмет(рецепт) для 100% рецов.

- Удалить цену закупки.

- Переделать страницу всех предметов (добавить поиск без перезагрузки, фильтр по категориям и грейдам).

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

- Добавить сколько стоит распаковка и ассортимент мамона.

## Commands Prod

- php7.4 artisan migrate:fresh --seed
- php7.4 artisan migrate:refresh --path=/database/migrations/2021_11_11_100732_create_raid_bosses_table.php
- php7.4 artisan db:seed --class=RaidBossSeeder

- COMPOSER_MEMORY_LIMIT=-1 composer-php7.4 update

## Optimise

- php7.4 artisan route:cache - cache all routes
- php7.4 artisan route:clear - if need add routes

- php7.4 artisan config:cache - config all caches
- php7.4 artisan config:clear - if need update config
