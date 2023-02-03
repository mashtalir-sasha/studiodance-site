<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Timetabe;
AdminSection::registerModel(Timetabe::class, function (ModelConfiguration $model) {

    $model->setTitle('Розклад');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('time')->setLabel('Час'),
            AdminColumn::text('created_at')->setLabel('Дата створення'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни'),
        ]);
        $display->setApply(function ($query) {
            $query->orderBy('time');
        });
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('time', 'час')->required(),
                    ];
                }),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::html('<h2>Зал №1</h2><br>'),

                        AdminFormElement::html('<h4>Понеділок</h4>'),
                        AdminFormElement::text('monday1_title', 'заголовок'),
                        AdminFormElement::text('monday1_text1', 'текст 1'),
                        AdminFormElement::text('monday1_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Вівторок</h4>'),
                        AdminFormElement::text('tuesday1_title', 'заголовок'),
                        AdminFormElement::text('tuesday1_text1', 'текст 1'),
                        AdminFormElement::text('tuesday1_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Середа</h4>'),
                        AdminFormElement::text('wednesday1_title', 'заголовок'),
                        AdminFormElement::text('wednesday1_text1', 'текст 1'),
                        AdminFormElement::text('wednesday1_text2', 'текст 2'),


                        AdminFormElement::html('<h4>Четверг</h4>'),
                        AdminFormElement::text('thursday1_title', 'заголовок'),
                        AdminFormElement::text('thursday1_text1', 'текст 1'),
                        AdminFormElement::text('thursday1_text2', 'текст 2'),

                        AdminFormElement::html('<h4>П\'ятниця</h4>'),
                        AdminFormElement::text('friday1_title', 'заголовок'),
                        AdminFormElement::text('friday1_text1', 'текст 1'),
                        AdminFormElement::text('friday1_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Субота</h4>'),
                        AdminFormElement::text('saturday1_title', 'заголовок'),
                        AdminFormElement::text('saturday1_text1', 'текст 1'),
                        AdminFormElement::text('saturday1_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Неділя</h4>'),
                        AdminFormElement::text('sunday1_title', 'заголовок'),
                        AdminFormElement::text('sunday1_text1', 'текст 1'),
                        AdminFormElement::text('sunday1_text2', 'текст 2'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::html('<h2>Зал №2</h2><br>'),
                        
                        AdminFormElement::html('<h4>Понеділок</h4>'),
                        AdminFormElement::text('monday2_title', 'заголовок'),
                        AdminFormElement::text('monday2_text1', 'текст 1'),
                        AdminFormElement::text('monday2_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Вівторок</h4>'),
                        AdminFormElement::text('tuesday2_title', 'заголовок'),
                        AdminFormElement::text('tuesday2_text1', 'текст 1'),
                        AdminFormElement::text('tuesday2_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Середа</h4>'),
                        AdminFormElement::text('wednesday2_title', 'заголовок'),
                        AdminFormElement::text('wednesday2_text1', 'текст 1'),
                        AdminFormElement::text('wednesday2_text2', 'текст 2'),


                        AdminFormElement::html('<h4>Четверг</h4>'),
                        AdminFormElement::text('thursday2_title', 'заголовок'),
                        AdminFormElement::text('thursday2_text1', 'текст 1'),
                        AdminFormElement::text('thursday2_text2', 'текст 2'),

                        AdminFormElement::html('<h4>П\'ятниця</h4>'),
                        AdminFormElement::text('friday2_title', 'заголовок'),
                        AdminFormElement::text('friday2_text1', 'текст 1'),
                        AdminFormElement::text('friday2_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Субота</h4>'),
                        AdminFormElement::text('saturday2_title', 'заголовок'),
                        AdminFormElement::text('saturday2_text1', 'текст 1'),
                        AdminFormElement::text('saturday2_text2', 'текст 2'),

                        AdminFormElement::html('<h4>Неділя</h4>'),
                        AdminFormElement::text('sunday2_title', 'заголовок'),
                        AdminFormElement::text('sunday2_text1', 'текст 1'),
                        AdminFormElement::text('sunday2_text2', 'текст 2'),
                    ];
                }),
        ]);

        return $form;
    });
})->addMenuPage(Timetabe::class, 1)
    ->setIcon('fas fa-table');