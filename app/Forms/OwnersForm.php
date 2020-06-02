<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class OwnersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('vardas_pavarde', 'text', [
                'attr' => [
                    'class' => 'form-control field-input',
                    'placeholder' => 'Įveskite savininko vardą ir pavardę',
                ],
                'label' => 'Savininkas',
                'rules' => 'required',
            ])
            ->add('submit', 'submit', [
                'attr' => ['class' => 'btn btn-success btn-block btn-sm'],
                'label' => 'Atlikta',
            ]);
    }
}