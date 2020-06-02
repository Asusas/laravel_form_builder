<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TrucksForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('marke', 'text', [
                'attr' => [
                    'class' => 'form-control field-input',
                    'placeholder' => 'Įveskite sunkvežimio markę',
                ],
                'label' => 'Sunkvežimis',
                'rules' => 'required',
            ])
            ->add('submit', 'submit', [
                'attr' => ['class' => 'btn btn-success btn-block btn-sm'],
                'label' => 'Atlikta',
            ]);

    }
}