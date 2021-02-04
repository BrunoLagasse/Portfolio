<?php

namespace App\Form;

use App\Entity\Projet;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\CallbackTransformer;


class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('tech', null, ['choice_label' => 'name'])
            ->add('picture', FileType::class, [
                'label' => 'Picture (jpg, jpeg, png, webp)',
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
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
