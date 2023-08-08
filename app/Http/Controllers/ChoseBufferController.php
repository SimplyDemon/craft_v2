<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoseBufferController extends Controller
{
    protected string $folderPath = 'pages.chose-buffer.';

    public function index()
    {

        $description = 'Какого выбрать бафера на старте? Всего за пару минут подберёшь идеальный вариант.';
        $content = 'Извечный спорт ВК или ПП? А кого лучше взять магу? Сейчас мы быстро закроем эти вопросы!';

        $questions = [
            [
                'text' => 'Будешь играть маг или физ классом?',
                'class' => 'class-type',
                'answers' => [
                    [
                        'text' => 'Физом',
                        'attribute' => 'physic',
                    ],
                    [
                        'text' => 'Магом',
                        'attribute' => 'mage',
                    ],
                ],
            ],
            [
                'text' => 'Стартанёшь на луке?',
                'class' => 'is-archer',
                'answers' => [
                    [
                        'text' => 'Да',
                        'attribute' => 'archer',
                    ],
                    [
                        'text' => 'Нет',
                        'attribute' => 'not-archer',
                    ],
                ],
            ],
            [
                'text' => 'Докачаешь баффера до 83 уровня?',
                'class' => 'is-lvl-83',
                'answers' => [
                    [
                        'text' => 'Да',
                        'attribute' => '83',
                    ],
                    [
                        'text' => 'Нет',
                        'attribute' => 'not-83',
                    ],
                ],
            ],
            [
                'text' => 'Докачаешь баффера до 78 уровня?',
                'class' => 'is-lvl-78',
                'answers' => [
                    [
                        'text' => 'Да',
                        'attribute' => '78',
                    ],
                    [
                        'text' => 'Нет',
                        'attribute' => 'not-78',
                    ],
                ],
            ],
            [
                'text' => 'Будешь играть сумонером?',
                'class' => 'is-summoner',
                'answers' => [
                    [
                        'text' => 'Да',
                        'attribute' => 'summoner',
                    ],
                    [
                        'text' => 'Нет',
                        'attribute' => 'not-summoner',
                    ],
                ],
            ],
            [
                'text' => 'Будешь юзать Final Servitor (идентичен кову варка, но можно использовать только на суммона)?',
                'class' => 'is-use-final-servitor',
                'answers' => [
                    [
                        'text' => 'Да, буду давать по кд сам',
                        'attribute' => 'use-final-servitor',
                    ],
                    [
                        'text' => 'Нет, я хочу, что бы бафер давал его в макросе',
                        'attribute' => 'not-use-final-servitor',
                    ],
                ],
            ],
        ];

        return view($this->folderPath . 'index', [
            'title' => 'Выбор баффера',
            'description' => $description,
            'content' => $content,
            'questions' => $questions,
            'imagesListSrc' => $this->getImagesListSrc(),
        ]);
    }

    /**
     * @return array
     */
    protected function getImagesListSrc(): array
    {
        $imagesList = [
            'Bless Shield',
            'Counter Critical',
            'Bless the Body',
            'Bless the Soul',
            'Dryad Root',
            'Invigor',
            'Mental Shield',
            'Prophet',
            'Regeneration',
            'Resist Aqua',
            'Resist Dark',
            'Resist Earth',
            'Resist Fire',
            'Resist Holy',
            'Resist Poison',
            'Resist Wind',
            'Spell Force',
            'Holy Weapon',
            'Chain Heal',
            'Holy Pomander',
            'SE',
            'PP',
            'Chant of Victory',
            'Gate Chant',
            'Great Fury',
            'WC',
            'Battle Heal',
            'Heal',
            'Peace',
            'Resurrection',
        ];

        foreach ($imagesList as $imageName) {
            $imagesListSrc[$imageName] = asset("/images/{$imageName}.webp");
        }

        return $imagesListSrc;
    }
}
