<?php

namespace App\Form;

use App\Entity\Projet;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Choisiez un nom pour ce projet : ',
            ])
            // ->add('tech', EntityType::class, array(
            //     'label' => 'Choisir une ou plusieurs techno : ',
            //     'class' => Categorie::class,
            //     'choice_label' => function ($categorie) {
            //         return $categorie->getTech();
            //     },
            //     'multiple' => true,
            // ))
            // ->add('tech', CollectionType::class, array(
            //     'entry_type'   => CheckboxType::class,
            //     // these options are passed to each "checkbox" type
            //     'entry_options'  => array(
            //         'attr'      => array('class' => 'check-box')
            //     ),
            // ))
            ->add('technologie', EntityType::class, [
                'multiple' => true,
                'expanded' => true,
                'class' => Categorie::class
            ])
            ->add('description', TextType::class, [
                'label' => 'Entrez une description du projet :'
            ])
            ->add('picture', FileType::class, [
                'label' => 'Choisir une image (jpg, jpeg, png, webp) : ',
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2m',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Seuls les fichiers jpg, jpeg, png et webp sont acceptés',
                    ])
                ],
            ]);
        $builder->get('picture')->addModelTransformer(new CallBackTransformer(
            function ($picture) {
                return null;
            },
            function ($picture) {
                return $picture;
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
