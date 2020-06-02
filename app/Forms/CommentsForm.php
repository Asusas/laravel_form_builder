<?php

namespace App\Forms;

use App\Automarke;
use Kris\LaravelFormBuilder\Form;

class CommentsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('auto_id', 'select', [
                'choices' => Automarke::all()->pluck('marke', 'id')->all(),
                'empty_value' => '--- Pasirinkite vilkiką ---',
                'label' => 'Vilkikas',
                'rules' => 'required',
            ])
            ->add('komentaraas', 'textarea', [
                'rules' => 'required',
                'label' => 'Komentaras',
            ])
            ->add('submit', 'submit', [
                'attr' => [
                    'class' => 'btn btn-success btn-block btn-sm',
                ],
                'label' => 'Komentuoti',
            ]);
    }
}