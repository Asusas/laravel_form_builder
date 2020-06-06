<?php

namespace App\Forms;

use App\Automarke;
use Kris\LaravelFormBuilder\Form;

class YearsForm extends Form
{
    public function buildForm()
    {

        $this
            ->add('markes_id', 'select', [
                'choices' => Automarke::all()->pluck('marke', 'id')->all(),
                'empty_value' => '--- Pasirinkite sunkvežimį ---',
                'label' => 'Pasirinkite vilkiką',
                'rules' => 'required',
            ])
            ->add('metai', 'date', [
                'label' => 'Priskirkite gamybos metus',
                'rules' => 'required',
            ])
            ->add('submit', 'submit', [
                'attr' => ['class' => 'btn btn-success btn-block btn-sm'],
                'label' => 'Atlikta',
            ]);
    }
}
