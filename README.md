## TODO

- Страница предметов грузится слишком долго.

- Посмотреть robots

- На мобилке хедер стрёмный.

- Добавить калькулятор заточки.
    - Показать шанс заточки от текущей до нужной.
    - Показать на сколько изменятся характеристики + хп, если это армор.
    - Показать справа список из категории предмета, к которому он по хаарктеристикам максимально близок.
    - Эмуляция заточки, пользователь пытается заточить пуху и она либо точится, либо ломается.

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

- Калькулятор заточки, сколько будет п.атаки, м.атаки при заточки

- Сделать отображение времени респа для таймзоны пользователя. (через tiltoop)

- Доработать чат.

- Добавить кеширование.

- Добавить стоимость распечатки у мамона, сколько варнишей нужно для распечатки мв. (не нашёл от куда брать данные, т.к.
  цены расходятся с фактическими на сервере)

- Добавить блог для публикации статей, инфы о ченджлогах. (статей пока никаких не будет)

- Калькулятор и таблицу манора.

- Добавить расчёт себестоимость кри при разбиении, когда появится возможность получать цены автоматически. SELECT
  id,name,crystal_count,default_price,default_price/crystal_count as sebestoimost FROM itemdata where crystal_type="b"
  and crystal_count > 0 order by sebestoimost

## DONE

- Добавить уведомления о сообщении.

- Добавить предметы:
    - Мид
    - Топ
    - Дуал мечи
    - Дуал дагеры
    - Спец предметы, как веер
    - Эпик бижу
    - Оли бижу
    - ТВ бижу
    - Пояса

- Добавить страницу Поясов со вставками.

- Добавить гутенберг для описания предметов.

- Добавить описание для сео, контент.

- Добавить страницу Эпик бижи.

- Добавить страницу ТВ бижи.

- Все пухи для сабов вывести в одну опцию. Что бы при клике в фильтре пользователь смог глянуть список всех пух для саб
  квеста.

- Выводить информацию избранного оружия.

- Добавить предметам поколения (морай, веспер, ворпал, элегия), что бы можно было проще рассчитать нужное количество
  репутации для предметов.

- Добавить количество необходимых нубл камней для апа веспера.

- Добавить бонус пвп вставки.

- Добавить для мили физ оружия аттрибут двуручного.

- Добавить уведомления через телегу об ошибках.

- Использовать сессию laravel.

- Добавить аттрибут избранного предметы, как Great Swords для сумонеров, написать почему он топ.

- Добавить п\м атаку для оружия.

- Добавить п деф для брони, щита, сигиля.

- Добавить мдеф для бижи.

- Перейти на php 8.1.

- Добавить дескрипшен.

- Перенести респавн боссов на отдельную страницу, т.к. время загрузки ленты через прокси занимает продолжительное время.

- Использовать прокси для получения информации с ленты

- Учитывать ресурсы, которые крафтятся из других ресурсов.

- Выпустить стабильный продакшен.

- Перевести все изображения в webp.

- Отрефакторить код.

- Больше микроразметки.

- Добавить ФАК.

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
