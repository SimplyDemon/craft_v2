<div class="why-not why-not__pp">
    <div class="d-none why-not-pp-before-83-default">Самый значимый скил у <b>ПП</b> для физов
        - {!! getSkillIconImg('Counter Critical', $imagesListSrc['Counter Critical']) !!} <b>Counter Critical</b> на 83
        лвле,
        но т.к. ты не планируешь качать сапортов до этого уровня, то <span class="why-not__pp-default"><b>Warcryer</b>
            лучший выбор
            из-за {!! getSkillIconImg('Chant of Victory', $imagesListSrc['Chant of Victory']) !!} <b>Chant of
                Victory</b>, который
            даёт мощь крита и хп, а с помощью {!! getSkillIconImg('Gate Chant', $imagesListSrc['Gate Chant']) !!} <b>Gate
                Chant</b>
            можно быстро регрупать пати, если примешь решение докачать варка до 83 уровня, то можно будет
            выбивать {!! getSkillIconImg('Great Fury', $imagesListSrc['Great Fury']) !!} прок, который на 8 секунд
            увеличивает атак спид на 50%. Рекомендую обзавестись <a
                href="{{ route( 'recipes.show',  \App\Models\Recipe::where('name', 'Staff of Evil Spirits')->first())}}"
                target="_blank">Staff of Evil Spirits</a>
            для {!! getSkillIconImg('Bless the Body', $imagesListSrc['Bless the Body']) !!} блес хп и <a
                href="{{ route( 'recipes.show',  \App\Models\Recipe::where('name', 'Hell Knife')->first())}}"
                target="_blank">Hell Knife</a>
            для {!! getSkillIconImg('Mental Shield', $imagesListSrc['Mental Shield']) !!} ментала.</span>
    </div>
    <div class="d-none why-not-pp-archer">
        Самый значимый скил у <b>ПП</b> для физов
        - {!! getSkillIconImg('Counter Critical', $imagesListSrc['Counter Critical']) !!} <b>Counter Critical</b>, но он
        не работает на лучников, поэтому <span class="why-not__for-pp-default"></span>
    </div>
</div>
