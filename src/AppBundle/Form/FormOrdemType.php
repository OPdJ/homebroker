<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class FormOrdemType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoAtivo', ChoiceType::class,
                array(
                    'label' => 'Ativo',
                    'choices'  => array(
                        '' => null,
                        'ação' => 'Ação',
                        'mercado futuro' => 'Mercado Futuro',
                        'moedas' => 'Moedas',
                    ),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                )
            )
            ->add('validade', ChoiceType::class,
                array(
                    'label' => 'Validade',
                    'choices'  => array(
                        '' => null,
                        'DayTrade' => 'daytrade',
                        'Intraday' => 'intraday',
                        'Long' => 'long',
                    ),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                )
            )
            ->add('preco', MoneyType::class,
                array(
                    'label' => 'Preço ',
                    'required' => true,
                    'currency' => 'BRL',
                    'attr' => array(
                        'placeholder' => 'preço',
                        'class' => 'form-control',
                        'required' => true,
                    )
                )
            )
            ->add('precoMercado', CheckboxType::class,
                array(
                    'label' => 'Marque para comprar no preço de mercado',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                    )
                )
            )
            ->add('qtdAtivo', NumberType::class,
                array(
                    'label' => 'Quatidade',
                    'required' => true,
                    'attr' => array(
                        'placeholder' => '0',
                        'class' => 'form-control',
                        'required' => true,
                    )
                )
            )
            ->add("btn_inserir", SubmitType::class,
                array(
                    'label' => "Enviar",
                    'attr' => array(
                        'class' => 'btn btn-blue'
                    )
                )
            )
        ;
    }
}