<?php

namespace App\Forms;

use App\Automarke;
use App\Savininkas;
use Kris\LaravelFormBuilder\Form;

class AttachOwnersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('auto_id', 'select', [
                'choices' => Automarke::all()->pluck('marke', 'id')->all(),
                'empty_value' => '--- Pasirinkite markę ---',
                'label' => 'Vilkikas',
                'rules' => 'required',
            ])
            ->add('savininko_id', 'select', [
                'choices' => Savininkas::all()->pluck('vardas_pavarde', 'id')->all(),
                'empty_value' => '--- Pasirinkite savininką ---',
                'label' => 'Savininkas',
                'rules' => 'required',
            ])
            ->add('submit', 'submit', [
                'attr' => [
                    'class' => 'btn btn-success btn-block btn-sm',
                ],
                'label' => 'Atlikta',
            ]);
    }
}